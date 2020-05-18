            <div class="row d-flex flex-column pl-4">
                <a href="<?php echo site_url('apoteker'); ?>"><h6>Dashboard</h6></a>
                <a href="<?php echo site_url('apoteker/ubah_harga_obat'); ?>"><h6>Ubah Harga Obat</h6></a>
                <a href="<?php echo site_url('apoteker/kelola_penjualan'); ?>"><h6>Penjualan</h6></a>
                <a href="<?php echo site_url('apoteker/kelola_pembelian'); ?>"><h6>Pembelian</h6></a>
            </div>
        </div>
    </div>
    <!-- bagian sidebar end -->

	<!-- header -->
    <div class="container spad">
        <div class="row">
            <div class="mr-auto">
                <h2>Ubah Harga Obat</h2>
            </div>
            <div class="ml-auto">
                <span id="tanggal"><span>
            </div>
        </div>
    </div>
    
    <!-- bagian isi   -->
    <div class="container spad">
    	<div class="row d-flex justify-content-center">
    		<div class="col-8 p-5 rounded" style="background-color: white;">
    			<h4>Tabel Harga Obat</h4>
                <div class="row mt-5">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Id Obat</th>
                        <th scope="col">Nama Obat</th>
                        <th scope="col">Harga Pokok</th>
                        <th scope="col">Harga Jual</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach ($obat as $row) { ?>
                            <tr>
                            <th scope="row"><?php echo $no; ?></th>
                            <td><?php echo $row['id_obat']; ?></td>
                            <td><?php echo $row['nama_obat']; ?></td>
                            <td><?php echo $row['harga_pokok']; ?></td>
                            <td><?php echo $row['harga_jual']; ?></td>
                            <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#ubah_hargajual<?php echo $no; ?>">Ubah</button></td>
                            </tr>
                            <tr>
                        <?php $no++; } ?>
                    </tbody>
                </table>
            </div>
    		</div>
    	</div>
    </div>

    <!-- modal ubah harga jual -->
    <?php $x=1; foreach ($obat as $row) { ?>
    
    <div class="modal fade" id="ubah_hargajual<?php echo $x; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ubah Harga Jual</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

        <form action="<?php echo site_url('apoteker/ubah_harga_jual/'.$row['id_obat']); ?>" method="post">
          <div class="modal-body p-5">
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label>Id Obat</label>
                    </div>
                    <div class="col-sm-8 ml-auto">
                        <input class="form-control form-control-sm" type="text" name="id_obat" value="<?php echo $row['id_obat']; ?>" disabled>
                    </div>
                </div>           
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label>Nama Obat</label>
                    </div>
                    <div class="col-sm-8 ml-auto">
                        <input class="form-control form-control-sm" type="text" name="nama_obat" value="<?php echo $row['nama_obat']; ?>" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label>Harga Pokok</label>
                    </div>
                    <div class="col-sm-8 ml-auto">
                        <input class="form-control form-control-sm" type="text" name="harga_pokok" value="<?php echo $row['harga_pokok']; ?>" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label>Harga Jual</label>
                    </div>
                    <div class="col-sm-8 ml-auto">
                        <input class="form-control form-control-sm" type="text" name="harga_jual" value="<?php echo $row['harga_jual']; ?>">
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

</body>
</html>