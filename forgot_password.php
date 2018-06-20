<?php
$title = "Forgot password";
require 'core/init.php';
User::already_logged_in();
if (isset($_POST['submit'])) {
	User::retrieve_password($_POST['email']);
}
require 'layouts/header.php';
?>
<h3>Enter the email associated to your account.</h3>
<form action="<?php $_PHP_SELF ?>" method="POST">
	<input type="text" name="email">
	<button type="submit" name="submit">Enter</button>
</form>
<?php  require 'layouts/footer.php'; ?>