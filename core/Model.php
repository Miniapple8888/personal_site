<?php

/**
 * Interacts with Database
 */
class Model {

	public static function insert($tablename, $insertion) {
		$keys = self::format($insertion, 'key');
		$placeholder = self::format($insertion, 'placeholder');
		$req = "INSERT INTO ". $tablename . "(". $keys.") VALUES(". $placeholder .")";
		self::query($req, array_values($insertion));
		$_SESSION["flash"] = "You've successfully signed up.";
	}

	public static function find_where($tablename, $array) {
		$req = "SELECT * FROM ". $tablename. " WHERE ". key($array). "=?";
		$result = self::query($req, array_values($array))->fetchAll();
		return $result;
	}

	public static function update($tablename, $update, $param) {
		$new = array_merge($update, $param);
		$values = array_values($new);
		$keys_and_values = self::format($update, 'keys_and_values');
		$req = "UPDATE ". $tablename. " SET ". $keys_and_values. " WHERE ". key($param). "=?";
		self::query($req, $values);
	}

	private static function query($req, $insertion) {
		$dbh = new Database();
		$smt = $dbh->conn->prepare($req);
		$smt->execute($insertion);
		return $smt;
	}

	private static function format($insertion, $param) {
		$output = "";
		end($insertion);
		$last = key($insertion);
		foreach ($insertion as $key => $value) {
			$end = $last == $key ? "" : ",";
			$add = "";
			switch ($param) {
				case 'key':
					$add = $key.$end;
					break;
				case 'keys_and_values':
					$add = $key."=?".$end;
					break;
				case 'placeholder':
					$add = "?".$end;
					break;
			}
			$output .= $add;
		}
		return $output;
	}
}