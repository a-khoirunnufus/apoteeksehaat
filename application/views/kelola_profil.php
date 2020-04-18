<!DOCTYPE html>
<html>
<head>
	<title>ApotekSehat | Kelola Profil</title>
</head>
<body>
<h1>kelola profil</h1>
<img src="<?php base_url('assets/img/'.$profile_picture); ?>"><br>
<form action="<?php echo site_url('admin/ubah_profil/'.$id); ?>" method="post">
	Nama : <input type="text" name="nama" value="<?php echo $nama; ?>"><br>
	No_HP : <input type="text" name="no_hp" value="<?php echo $no_hp; ?>"><br>
	Email : <input type="text" name="email" value="<?php echo $email; ?>"><br>
	<input type="submit" value="Ubah Data">
</form>
<p color="lightgreen"><?php echo $this->session->userdata('pesan'); ?></p>
<?php unset($_SESSION['pesan']); ?>
</body>
</html>