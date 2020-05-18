            <div class="row d-flex flex-column pl-4">
                <a href="<?php echo site_url('admin');?>"><h6>Dashboard</h6></a>
                <a href="<?php echo site_url('admin/kelola_obat');?>"><h6>Obat</h6></a>
                <a href="<?php echo site_url('admin/kelola_supplier');?>"><h6>Supplier</h6></a>
                <a href="<?php echo site_url('admin/kelola_apoteker');?>"><h6>Apoteker</h6></a>
            </div>
        </div>
    </div>
    <!-- bagian sidebar end -->

    <!-- bagian isi   -->
    <!-- header -->
    <div class="container spad">
        <div class="row">
            <div class="mr-auto">
                <h2>Kelola Profil</h2>
            </div>
            <div class="ml-auto">
                <span id="tanggal"><span>
            </div>
        </div>
    </div>

    <!-- tombol navigasi menu -->
    <div class="container spad">
        <div class="col-8 p-5 mx-auto d-flex justify-content-center" style="background-color: white">
            <div class="col-5">
                <img src="<?php echo base_url('assets/img/profile-2.png'); ?>" style="width: 200px;">
            </div>
            <div class="col-7">
            <form action="<?php echo base_url('admin/ubah_profil/'.$pengguna['id_pengguna']); ?>" method="post">
                <div class="form-group row">
                    <div class="col-sm-4">
                        <span>Nama</span>
                    </div>
                    <div class="col-sm-8 ml-auto">
                        <input class="form-control" type="text" name="nama_lengkap" placeholder="<?php echo $pengguna['nama_lengkap']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <span>Username</span>
                    </div>
                    <div class="col-sm-8 ml-auto">
                        <input class="form-control" type="text" name="username" placeholder="<?php echo $pengguna['username']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <span>Password</span>
                    </div>
                    <div class="col-sm-8 ml-auto">
                        <input class="form-control" type="text" name="password" placeholder="<?php echo $pengguna['password']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <span>No HP</span>
                    </div>
                    <div class="col-sm-8 ml-auto">
                        <input class="form-control" type="text" name="no_hp" placeholder="<?php echo $pengguna['no_hp']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <span>Email</span>
                    </div>
                    <div class="col-sm-8 ml-auto">
                        <input class="form-control" type="text" name="email" placeholder="<?php echo $pengguna['email']; ?>">
                    </div>
                </div>
                <div class="form-group row mt-4">
                    <div class="col-sm-4 mx-auto">
                        <input class="btn btn-success" type="submit" value="Update Data">
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
