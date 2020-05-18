            <div class="row d-flex flex-column pl-4">
                <a href="<?php echo site_url('admin');?>"><h6>Dashboard</h6></a>
                <a href="<?php echo site_url('admin/kelola_obat');?>"><h6>Obat</h6></a>
                <a href="<?php echo site_url('admin/kelola_supplier');?>"><h6>Supplier</h6></a>
                <a href="<?php echo site_url('admin/kelola_apoteker');?>"><h6>Apoteker</h6></a>
            </div>
        </div>
    </div>
    <!-- bagian sidebar end -->

    <!-- bagian utama -->
	<!-- header -->
    <div class="container spad">
        <div class="row">
            <div class="mr-auto">
                <h2>Supplier</h2>
            </div>
            <div class="ml-auto">
                <span id="tanggal"><span>
            </div>
        </div>
    </div>

    <!-- bagian tambah obat -->
    <div class="container spad">
        <div class="col-6 rounded mx-auto p-5" style="background-color: white">
            <h4>Tambah Supplier</h4><br>
            <form action="<?php echo site_url('admin/input_supplier/'.($newid['id_supplier']+1)); ?>" method="post">
    			<div class="form-group row">
    				<div class="col-sm-4">
						<label for="input_idobat">Id Supplier</label>
					</div>
					<div class="col-sm-8 ml-auto">
						<input class="form-control form-control-sm" type="text" id="input_idobat" name="id_supplier" value="<?php echo $newid['id_supplier']+1; ?>" disabled>
					</div>
    			</div>
    			<div class="form-group row">
    				<div class="col-sm-4">
						<label for="input_namaobat">Nama</label>
					</div>
					<div class="col-sm-8 ml-auto">
						<input class="form-control form-control-sm" type="text" id="input_namaobat" name="nama_supplier">
					</div>
    			</div>
    			<div class="form-group row">
    				<div class="col-sm-4">
						<label for="input_golobat">No Telepon</label>
					</div>
					<div class="col-sm-8 ml-auto">
						<input class="form-control form-control-sm" type="text" id="input_golobat" name="no_telepon">
					</div>
    			</div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label for="input_golobat">Email</label>
                    </div>
                    <div class="col-sm-8 ml-auto">
                        <input class="form-control form-control-sm" type="text" id="input_golobat" name="email">
                    </div>
                </div>
    			<div class="form-group row">
    				<div class="col-sm-4">
						<label for="input_bentukobat">Alamat</label>
					</div>
					<div class="col-sm-8 ml-auto">
						<textarea class="form-control form-control-sm" type="text" id="input_bentukobat" name="alamat_supplier"></textarea> 
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
        </div>
    </div>

    <!-- bagian tabel supplier -->
    <div class="container spad">
    	<div class="col-12 p-5 rounded" style="background-color: white">
    		<h4>Tabel Apoteker</h4>
    		<div class="row mt-5">
    			<table class="table table-striped" style="font-size: 14px">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Id Supplier</th>
                        <th scope="col">Nama Supplier</th>
                        <th scope="col">No Telepon</th>
                        <th scope="col">Email</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $x=1; foreach ($supplier as $row) { ?>
                        <tr>
	                        <th scope="row"><?php echo $x; ?></th>
	                        <td><?php echo $row['id_supplier']; ?></td>
	                        <td><?php echo $row['nama_supplier']; ?></td>
	                        <td><?php echo $row['no_telepon']; ?></td>
	                        <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['alamat_supplier']; ?></td>
	                        <td>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ubah_supplier<?php echo $x; ?>">Ubah</button>
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus_supplier<?php echo $x++; ?>">Hapus</button>
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
    <?php $x=1; foreach ($supplier as $row) { ?>
    
    <div class="modal fade" id="ubah_supplier<?php echo $x; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ubah Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

        <form action="<?php echo site_url('admin/update_supplier'); ?>" method="post">
            <div class="modal-body p-5">
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label for="input_idobat">Id Supplier</label>
                    </div>
                    <div class="col-sm-8 ml-auto">
                        <input class="form-control form-control-sm" type="text" id="input_idobat" name="id_supplier" value="<?php echo $row['id_supplier']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label for="input_namaobat">Nama</label>
                    </div>
                    <div class="col-sm-8 ml-auto">
                        <input class="form-control form-control-sm" type="text" id="input_namaobat" name="nama_supplier" value="<?php echo $row['nama_supplier']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label for="input_golobat">No Telepon</label>
                    </div>
                    <div class="col-sm-8 ml-auto">
                        <input class="form-control form-control-sm" type="text" id="input_golobat" name="no_telepon" value="<?php echo $row['no_telepon']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label for="input_golobat">Email</label>
                    </div>
                    <div class="col-sm-8 ml-auto">
                        <input class="form-control form-control-sm" type="text" id="input_golobat" name="email" value="<?php echo $row['email']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label for="input_bentukobat">Alamat</label>
                    </div>
                    <div class="col-sm-8 ml-auto">
                        <textarea class="form-control form-control-sm" type="text" id="input_bentukobat" name="alamat_supplier"><?php echo $row['alamat_supplier']; ?></textarea> 
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
    <?php $x=1; foreach ($supplier as $row) { ?>
        <div class="modal fade" id="hapus_supplier<?php echo $x; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

            <form action="<?php echo site_url('admin/delete_supplier/'.$row['id_supplier']); ?>" method="post">
              <div class="modal-body p-5">
                    <div class="form-group row">
                    <div class="col-sm-4">
                        <label for="input_idobat">Id Supplier</label>
                    </div>
                    <div class="col-sm-8 ml-auto">
                        <input class="form-control form-control-sm" type="text" id="input_idobat" name="id_supplier" value="<?php echo $row['id_supplier']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label for="input_namaobat">Nama</label>
                    </div>
                    <div class="col-sm-8 ml-auto">
                        <input class="form-control form-control-sm" type="text" id="input_namaobat" name="nama_supplier" value="<?php echo $row['nama_supplier']; ?>">
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