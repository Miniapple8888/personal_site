<?php
require 'core/init.php';
$title = "Reset password";
$user = [];
if (isset($_GET["id"]) && isset($_GET["token"])) {
	$user = User::retrieve_user($_GET['id'], $_GET['token']);
}
if (isset($_POST['submit'])) {
	User::reset_password($_POST['new_password'], $_POST['password_confirmation'], $user);
}
require 'layouts/header.php';
?>

<h1>Reset password</h1>
<form action="<?php $_PHP_SELF ?>" method="POST">
	<label>New password: </label><input type="password" name="new_password" placeholder="Password"><br>
	<label>Confirm password: </label><input type="password" name="password_confirmation" placeholder="Password Confirmation"><br>
	<button type="submit" name="submit">Reset</button>
</form>

<?php require 'layouts/footer.php'; ?>