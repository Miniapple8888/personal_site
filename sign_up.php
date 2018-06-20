<?php
require 'core/init.php';
User::already_logged_in();

$title = "Sign up";

if (isset($_POST['submit'])) {
	User::new($_POST['email'], $_POST['password'], $_POST['password_confirmation']);
	User::create();
}
require 'layouts/header.php';

?>

<h1>Sign up</h1>

<form action="<?php $_POST_SELF ?>" method="POST">
	<label>Email: </label><input type="text" name="email" placeholder="Email"><br>
	<label>Password: </label><input type="password" name="password" placeholder="Password"><br>
	<label>Confirm password: </label><input type="password" name="password_confirmation" placeholder="Password"><br>
	<button type="submit" name="submit">Sign up</button>
</form>

<?php require 'layouts/footer.php'; ?>