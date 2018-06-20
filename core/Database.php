<?php

class Database{

	public $conn;
	private $hostname;
	private $username;
	private $password;

	public function __construct($hostname="localhost", $username="root", $password="root") {
		$this->set_Database($hostname, $username, $password);
		try {
			if($this->conn = new PDO("mysql:host=$this->hostname;dbname=personal_site", $this->username, $this->password)) {
				$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} else {
				throw new Exception("Unable to connect");
			}
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	public function set_Database($hostname, $username, $password) {
		$this->hostname = $hostname;
		$this->username = $username;
		$this->password = $password;
	}

	public function format_keys($insertion) {
		$output = "";
		end($insertion);
		$last_key = key($insertion);
		foreach ($insertion as $key => $value) {
			$end = $last_key == $key ? "" : ", ";
			$output .= $key.$end;
		}
		return $output;
	}

	public function format_keys_and_values($array) {
		$output = "";
		end($array);
		$last_key = key($array);
		foreach ($array as $key => $value) {
			$end = $last_key == $key ? "" : ",";
			$output .= str_replace(":", "", $key). "=".$key.$end;
		}
		return $output;
	}

	public function insert($tablename, $insertion) {
		$keys = $this->format_keys($insertion);
		$cols = str_replace(":", "", $keys);
		$req = "INSERT INTO ". $tablename . "(". $cols.") VALUES(". $keys .")";
		if ($parameter) {
			array_push($insertion, $parameter);
			$req .= "WHERE ". key($parameter) .":".key($parameter);
		}
		$smt = $this->conn->prepare($req);
		$smt->execute($insertion);
		$_SESSION["flash"] = "You've successfully signed up.";
	}

	public function find_where($tablename, $array) {
		$req = "SELECT * FROM ". $tablename. " WHERE ". str_replace(":", "", key($array)). "=".key($array);
		$smt = $this->conn->prepare($req);
		$smt->execute($array);
		$result = $smt->fetchAll();
		return $result;
	}

	public function update($tablename, $update, $param) {
		$keys_and_values =$this->format_keys_and_values($update);
		$req = "UPDATE ". $tablename. " SET ". $keys_and_values. " WHERE ". str_replace(":", "", key($param)). "=". key($param);
		$smt = $this->conn->prepare($req);
		$execute = array_merge($update, $param);
		$smt->execute($execute);
	}

}