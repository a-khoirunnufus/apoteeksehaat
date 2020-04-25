            <div class="row d-flex flex-column pl-4">
                <a href="<?php echo site_url('admin');?>"><h6>Dashboard</h6></a>
                <a href="<?php echo site_url('admin/kelola_obat');?>"><h6>Obat</h6></a>
                <a href="<?php echo site_url('admin/kelola_supplier');?>"><h6>Supplier</h6></a>
                <a href="<?php echo site_url('admin/kelola_apoteker');?>"><h6>Apoteker</h6></a>
                <a href="<?php echo site_url('admin/riwayat_penjualan');?>"><h6>Riwayat Penjualan</h6></a>
                <a href="<?php echo site_url('admin/riwayat_pembelian');?>"><h6>Riwayat Pembelian</h6></a>
            </div>
        </div>
    </div>
    <!-- bagian sidebar end -->

    <!-- bagian utama -->
	<!-- header -->
    <div class="container spad">
        <div class="row">
            <div class="mr-auto">
                <h2>Apoteker</h2>
            </div>
            <div class="ml-auto">
                <button class="btn btn-primary mr-2" style="font-size: 12px; padding: 5px">ubah</button>
                <span>09:00 , 01 Januari 2020<span>
            </div>
        </div>
    </div>

    <!-- bagian tambah apoteker -->
    <div class="container spad">
        <div class="col-6 rounded mx-auto p-5" style="background-color: white">
            <h4>Tambah Apoteker</h4><br>
            <form action="<?php echo site_url('admin/input_apoteker'); ?>" method="post">
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label>Id Apoteker</label>
                    </div>
                    <div class="col-sm-8 ml-auto">
                        <input class="form-control form-control-sm" type="text" name="id_pengguna" value="<?php echo $newid['id_pengguna']+1; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label>Nama Lengkap</label>
                    </div>
                    <div class="col-sm-8 ml-auto">
                        <input class="form-control form-control-sm" type="text" name="nama_lengkap">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label>Username</label>
                    </div>
                    <div class="col-sm-8 ml-auto">
                        <input class="form-control form-control-sm" type="text" name="username">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label>Password</label>
                    </div>
                    <div class="col-sm-8 ml-auto">
                        <input class="form-control form-control-sm" type="text" name="password">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label>Foto Profil</label>
                    </div>
                    <div class="col-sm-8 ml-auto">
                        <input class="form-control form-control-sm" type="text" name="foto_profil">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label>No HP</label>
                    </div>
                    <div class="col-sm-8 ml-auto">
                        <input class="form-control form-control-sm" type="text" name="no_hp">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label>Email</label>
                    </div>
                    <div class="col-sm-8 ml-auto">
                        <input class="form-control form-control-sm" type="text" name="email">
                    </div>
                </div>
                <div class="form-group row mt-4">
                    <div class="col-sm-4 mx-auto">
                        <input class="btn btn-success" type="submit" value="Tambah Data">
                    </div>
                </div>
            </form>
        </div>
    </div>



    <!-- bagian tabel obat -->
    <div class="container spad">
        <div class="col-12 p-5 rounded" style="background-color: white">
            <h4>Tabel Apoteker</h4>
            <div class="row mt-5">
                <table class="table table-striped" style="font-size: 14px">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Id Pengguna</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">Foto Profil</th>
                        <th scope="col">No HP</th>
                        <th scope="col">Email</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $no=1; foreach ($apoteker as $row) { ?>
                            <tr>
                                <th scope="row"><?php echo $no; ?></th>
                                <td><?php echo $row['id_pengguna']; ?></td>
                                <td><?php echo $row['nama_lengkap']; ?></td>
                                <td><?php echo $row['username']; ?></td>
                                <td><?php echo $row['password']; ?></td>
                                <td><?php echo $row['foto_profil']; ?></td>
                                <td><?php echo $row['no_hp']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ubah_apoteker<?php echo $no; ?>">Ubah</button>
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus_apoteker<?php echo $no++; ?>">Hapus</button>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- Modal Ubah Data-->
    <?php $x=1; foreach ($apoteker as $row) { ?>
    
    <div class="modal fade" id="ubah_apoteker<?php echo $x; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ubah Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

        <form action="<?php echo site_url('admin/update_apoteker'); ?>" method="post">
          <div class="modal-body p-5">
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label>Id Apoteker</label>
                    </div>
                    <div class="col-sm-8 ml-auto">
                        <input class="form-control form-control-sm" type="text" name="id_pengguna" value="<?php echo $row['id_pengguna']; ?>">
                    </div>
                </div>           
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label>Nama Lengkap</label>
                    </div>
                    <div class="col-sm-8 ml-auto">
                        <input class="form-control form-control-sm" type="text" name="nama_lengkap" value="<?php echo $row['nama_lengkap']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label>Username</label>
                    </div>
                    <div class="col-sm-8 ml-auto">
                        <input class="form-control form-control-sm" type="text" name="username" value="<?php echo $row['username']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label>Password</label>
                    </div>
                    <div class="col-sm-8 ml-auto">
                        <input class="form-control form-control-sm" type="text" name="password" value="<?php echo $row['password']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label>Foto Profil</label>
                    </div>
                    <div class="col-sm-8 ml-auto">
                        <input class="form-control form-control-sm" type="text" name="foto_profil" value="<?php echo $row['foto_profil']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label>No HP</label>
                    </div>
                    <div class="col-sm-8 ml-auto">
                        <input class="form-control form-control-sm" type="text" name="no_hp" value="<?php echo $row['no_hp']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label>Email</label>
                    </div>
                    <div class="col-sm-8 ml-auto">
                        <input class="form-control form-control-sm" type="text" name="email" value="<?php echo $row['email']; ?>">
                    </div>
                </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input class="btn btn-primary" type="submit" value="Ubah">
          </div>
        </form>
        </div>
      </div>
    </div>
    <?php $x++; } ?>

    <!-- Modal Delete Data -->
    <?php $x=1; foreach ($apoteker as $row) { ?>
        <div class="modal fade" id="hapus_apoteker<?php echo $x; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

            <form action="<?php echo site_url('admin/delete_apoteker/'.$row['id_pengguna']); ?>" method="post">
              <div class="modal-body p-5">
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>Id Apoteker</label>
                        </div>
                        <div class="col-sm-8 ml-auto">
                            <input class="form-control form-control-sm" type="text"name="id_pengguna" value="<?php echo $row['id_pengguna']; ?>">
                        </div>
                    </div>           
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>Nama Lengkap</label>
                        </div>
                        <div class="col-sm-8 ml-auto">
                            <input class="form-control form-control-sm" type="text" name="nama_lengkap" value="<?php echo $row['nama_lengkap']; ?>">
                        </div>
                    </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input class="btn btn-primary" type="submit" value="Hapus">
              </div>
            </form>
            </div>
          </div>
        </div>
    <?php $x++; } ?>

</body>
</html>