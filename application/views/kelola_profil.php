		<!-- bagian utama -->
		<div class="col-9">
			
			<h1>Kelola Profil</h1>
			<img src="<?php base_url('assets/img/'.$profile_picture); ?>"><br>
			<form action="<?php echo site_url($this->session->userdata('tipe_user').'/ubah_profil/'.$id); ?>" method="post">
				Nama : <input type="text" name="nama" value="<?php echo $nama; ?>"><br>
				No_HP : <input type="text" name="no_hp" value="<?php echo $no_hp; ?>"><br>
				Email : <input type="text" name="email" value="<?php echo $email; ?>"><br>
				<input type="submit" value="Ubah Data">
			</form>
			<p style="color: lightgreen"><?php echo $this->session->userdata('pesan'); ?></p>
			<?php unset($_SESSION['pesan']); ?>

		</div>
	</div>
</div>

</body>
</html>