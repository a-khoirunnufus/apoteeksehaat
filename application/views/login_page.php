<!DOCTYPE html>
<html>
<head>
	<title>ApotekSehat | Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- Image and text -->
    <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#>>link halaman awal kita">
        <img src="logo kita kalo ada" width="30" height="30" class="d-inline-block align-top" alt="">
        Apotek Terpadu
    </a>
    </nav>
    <div class="col-xs-2 my-auto col-md-offset-5">
        <h3 class="text-center my-auto">Login</h3>
        <form action="<?php echo base_url('Login/aksi_login'); ?>" method="post">
        <div class="text-center">
            <label for="username" >Username</label><br>
            <input type="text" name="username" class="form-control form-control-lg" ><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" class="form-control form-control-lg" ><br>
            <input type="submit" value="Login" class="btn btn-primary">
            </div>
        </form>
        <p style="color: red"><?php echo $this->session->userdata('pesan'); ?></p>
        <?php unset($_SESSION['pesan']); ?>
    </div>
</body>
</html>
