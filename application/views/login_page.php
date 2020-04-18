<!DOCTYPE html>
<html>
<head>
	<title>ApotekSehat | Login</title>
</head>
<body>
<h3>Login</h3>
<form action="<?php echo base_url('Login/aksi_login'); ?>" method="post">
	<label for="username">Username:</label><br>
	<input type="text" name="username"><br>
	<label for="password">Password:</label><br>
	<input type="text" name="password"><br>
	<input type="submit" value="Login">
</form>
<p style="color: red"><?php echo $this->session->userdata('pesan'); ?></p>
<?php unset($_SESSION['pesan']); ?>
</body>
</html>