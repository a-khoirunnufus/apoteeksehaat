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
                <h2>Obat</h2>
            </div>
            <div class="ml-auto">
                <button class="btn btn-primary mr-2" style="font-size: 12px; padding: 5px">ubah</button>
                <span>09:00 , 01 Januari 2020<span>
            </div>
        </div>
    </div>

    <!-- bagian tambah obat -->
    <div class="container spad">
    	<div class="col-6 rounded mx-auto p-5" style="background-color: white">
    		<h4>Tambah Obat</h4><br>
    		<form action="<?php echo site_url('admin/input_obat'); ?>" method="post">
    			<div class="form-group row">
    				<div class="col-sm-4">
						<label for="input_idobat">Id Obat</label>
					</div>
					<div class="col-sm-8 ml-auto">
						<input class="form-control form-control-sm" type="text" id="input_idobat" name="id_obat" value="<?php echo $newid['id_obat']+1; ?>">
					</div>
    			</div>
    			<div class="form-group row">
    				<div class="col-sm-4">
						<label for="input_namaobat">Nama Obat</label>
					</div>
					<div class="col-sm-8 ml-auto">
						<input class="form-control form-control-sm" type="text" id="input_namaobat" name="nama_obat">
					</div>
    			</div>
    			<div class="form-group row">
    				<div class="col-sm-4">
						<label for="input_golobat">Golongan Obat</label>
					</div>
					<div class="col-sm-8 ml-auto">
						<input class="form-control form-control-sm" type="text" id="input_golobat" name="golongan_obat">
					</div>
    			</div>
    			<div class="form-group row">
    				<div class="col-sm-4">
						<label for="input_bentukobat">Bentuk Obat</label>
					</div>
					<div class="col-sm-8 ml-auto">
						<input class="form-control form-control-sm" type="text" id="input_bentukobat" name="bentuk_obat">
					</div>
    			</div>
    			<div class="form-group row">
    				<div class="col-sm-4">
						<label for="input_hargapokok">Harga Pokok</label>
					</div>
					<div class="col-sm-8 ml-auto">
						<input class="form-control form-control-sm" type="text" id="input_hargapokok" name="harga_pokok">
					</div>
    			</div>
    			<div class="form-group row">
    				<div class="col-sm-4">
						<label for="input_jumlahisi">Jumlah Isi</label>
					</div>
					<div class="col-sm-8 ml-auto">
						<input class="form-control form-control-sm" type="text" id="input_jumlahisi" name="isi_obat">
					</div>
    			</div>
    			<div class="form-group row">
    				<div class="col-sm-4">
						<label for="input_stokmin">Stok Minimum</label>
					</div>
					<div class="col-sm-8 ml-auto">
						<input class="form-control form-control-sm" type="text" id="input_stokmin" name="stok_min">
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
    		<h4>Tabel Stok Obat</h4>
    		<div class="row mt-5">
    			<table class="table table-striped" style="font-size: 14px">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Id Obat</th>
                        <th scope="col">Nama Obat</th>
                        <th scope="col">Golongan Obat</th>
                        <th scope="col">Bentuk Obat</th>
                        <th scope="col">Harga Pokok</th>
                        <th scope="col">Harga Jual</th>
                        <th scope="col">Jumlah Isi</th>
                        <th scope="col">Stok Minimal</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $no=1; foreach ($obat as $row) { ?>
                            <tr>
    	                        <th scope="row"><?php echo $no; ?></th>
    	                        <td><?php echo $row['id_obat']; ?></td>
    	                        <td><?php echo $row['nama_obat']; ?></td>
    	                        <td><?php echo $row['golongan_obat']; ?></td>
    	                        <td><?php echo $row['bentuk_obat']; ?></td>
    	                        <td><?php echo $row['harga_pokok']; ?></td>
    	                        <td><?php echo $row['harga_jual']; ?></td>
    	                        <td><?php echo $row['isi_obat']; ?></td>
    	                        <td><?php echo $row['stok_min']; ?></td>
    	                        <td>
    	                        	<div class="btn-group" role="group">
    	                        		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ubah_obat<?php echo $no; ?>">Ubah</button>
    	                        		<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus_obat<?php echo $no++; ?>">Hapus</button>
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
    <?php $x=1; foreach ($obat as $row) { ?>
    
    <div class="modal fade" id="ubah_obat<?php echo $x; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ubah Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

        <form action="<?php echo site_url('admin/update_obat'); ?>" method="post">
          <div class="modal-body p-5">
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label for="input_idobat">Id Obat</label>
                    </div>
                    <div class="col-sm-8 ml-auto">
                        <input class="form-control form-control-sm" type="text" id="input_idobat" name="id_obat" value="<?php echo $row['id_obat']; ?>">
                    </div>
                </div>           
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label for="input_namaobat">Nama Obat</label>
                    </div>
                    <div class="col-sm-8 ml-auto">
                        <input class="form-control form-control-sm" type="text" id="input_namaobat" name="nama_obat" value="<?php echo $row['nama_obat']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label for="input_golobat">Golongan Obat</label>
                    </div>
                    <div class="col-sm-8 ml-auto">
                        <input class="form-control form-control-sm" type="text" id="input_golobat" name="golongan_obat" value="<?php echo $row['golongan_obat']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label for="input_bentukobat">Bentuk Obat</label>
                    </div>
                    <div class="col-sm-8 ml-auto">
                        <input class="form-control form-control-sm" type="text" id="input_bentukobat" name="bentuk_obat" value="<?php echo $row['bentuk_obat']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label for="input_hargapokok">Harga Pokok</label>
                    </div>
                    <div class="col-sm-8 ml-auto">
                        <input class="form-control form-control-sm" type="text" id="input_hargapokok" name="harga_pokok" value="<?php echo $row['harga_pokok']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label for="input_jumlahisi">Jumlah Isi</label>
                    </div>
                    <div class="col-sm-8 ml-auto">
                        <input class="form-control form-control-sm" type="text" id="input_jumlahisi" name="isi_obat" value="<?php echo $row['isi_obat']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label for="input_stokmin">Stok Minimum</label>
                    </div>
                    <div class="col-sm-8 ml-auto">
                        <input class="form-control form-control-sm" type="text" id="input_stokmin" name="stok_min" value="<?php echo $row['stok_min']; ?>">
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
    <?php $x=1; foreach ($obat as $row) { ?>
        <div class="modal fade" id="hapus_obat<?php echo $x; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

            <form action="<?php echo site_url('admin/delete_obat/'.$row['id_obat']); ?>" method="post">
              <div class="modal-body p-5">
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label for="input_idobat">Id Obat</label>
                        </div>
                        <div class="col-sm-8 ml-auto">
                            <input class="form-control form-control-sm" type="text" id="input_idobat" name="id_obat" value="<?php echo $row['id_obat']; ?>">
                        </div>
                    </div>           
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label for="input_namaobat">Nama Obat</label>
                        </div>
                        <div class="col-sm-8 ml-auto">
                            <input class="form-control form-control-sm" type="text" id="input_namaobat" name="nama_obat" value="<?php echo $row['nama_obat']; ?>">
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