<?php
$title = "Log in";
require 'core/init.php';
User::already_logged_in();

if (isset($_POST['submit'])) {
	User::login($_POST['email'], $_POST['password'], isset($_POST['remember']));
}
require 'layouts/header.php';

?>
<h1>Reserved for administrator</h1>
<h1>Log In</h1>
<form action="<?php $_PHP_SELF ?>" method="POST">
	<label>Email: </label><input type="text" name="email" placeholder="Email"><br>
	<label>Password: </label><input type="password" name="password" placeholder="Password"><br>
	<input type="checkbox" name="remember">Remember me<br>
	<button type="submit" name="submit">Log in</button>
</form>
<a href="forgot_password.php">Forgot password?</a>

<?php require 'layouts/footer.php'; ?>