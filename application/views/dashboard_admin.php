<!DOCTYPE html>
<html>
<head>
	<title>ApotekSehat | Dashboard Admin</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<h1>Dashboard Admin</h1>
<div class="container" style="margin: 0">
	<div class="row">
		<div class="col-3" style="background-color: lightgreen">
			<div>
				<img src="<?php echo base_url('assets/img/profile-1.jpg'); ?>" style="width: 200px; height: 200px"><br>
				<?php echo $this->session->userdata('nama'); ?><br>
				<?php echo $this->session->userdata('tipe_user'); ?><br>
				<a href="<?php echo site_url('admin/kelola_profil/'.$this->session->userdata('id')); ?>">Kelola Profil</a>
			</div>

			<div>
				<ul>
					<li>Obat</li>
					<ul>
						<li>Tampilkan Data Obat</li>
						<li>Kelola Data Obat</li>
					</ul>
				</ul>
			</div>
		</div>
		<div class="col-9">
		</div>
	</div>
</div>

<a href="<?php echo base_url('login/logout'); ?>">Logout</a>
</body>
</html>