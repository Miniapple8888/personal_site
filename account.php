<?php
$title = "Account";
require 'core/init.php';
$user = User::not_logged_in();

if (isset($_POST["submit_email"])) {
	User::change_email($_POST['new_email'], $_POST['email_confirmation'], $user[0]['id']);
}
if (isset($_POST["submit_password"])) {
	User::change_password($_POST['old_password'], $_POST['new_password'], $_POST['password_confirmation'], $user);
}
require 'layouts/header.php';
?>

<h1>Account information</h1>
<form action="<?php $_PHP_SELF ?>" method="POST">
	<label>Change email: <?php echo $user[0]['email']; ?></label><br>
	<label>New email: </label><input type="text" name="new_email" placeholder="<?php echo $user[0]['email']; ?>"><br>
	<label>Confirm email: </label><input type="text" name="email_confirmation" placeholder="Email confirmation"><br>
	<button type="submit" name="submit_email">Save new email</button><br>
</form>
<form action="<?php $_PHP_SELF ?>" method="POST">
	<label>Change password:</label><br>
	<label>Old password: </label><input type="password" name="old_password" placeholder="Old password"><br>
	<label>New password</label><input type="password" name="new_password" placeholder="New password"><br>
	<label>Confirm password: </label><input type="password" name="password_confirmation" placeholder="Confirm password"><br>
	<button type="submit" name="submit_password">Save new password</button>
</form>


<?php require 'layouts/footer.php'; ?>