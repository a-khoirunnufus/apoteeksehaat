<!DOCTYPE html>
<html>
<head>
	<title>ApotekSehat | Dashboard Admin</title>
	<!-- CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand ml-5" href="#">Apotek Sehat</a>
		<div class="col-2 ml-auto">
			<div class="nav-item dropdown">
				<div class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			        <img src="<?php echo base_url('assets/img/profile-2.png'); ?>" style="width: 40px">
			        <span>Profile</span>
			    </div>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="#">Kelola Profil</a>
		          <a class="dropdown-item" href="#">Logout</a>
		        </div>
		    </div>
		</div>
    </nav>
<div class="container m-0">
	<div class="row">
		<!-- navigasi -->
		<div class="col-3 bg-light">
			<div class="m-3">
				<img src="<?php echo base_url('assets/img/profile-2.png'); ?>" style="width: 150px;">
				<br>
				<!-- <?php echo $this->session->userdata('nama'); ?><br>
				<?php echo $this->session->userdata('tipe_user'); ?><br> -->

				<span>Ahmad Khoirunnufus</span></br>
				<span>Admin</span>
			</div>
			<hr>
			<div>
				<ul>
					<li>Dashboard</li>
					<li><a href="<?php echo site_url('admin/kelola_obat'); ?>">Obat</a></li>
					<li>Supplier</li>
					<li>Apoteker</li>
					<li>Riwayat Pembelian</li>
					<li>Riwayat Penjualan</li>
				</ul>
			</div>
		</div>
