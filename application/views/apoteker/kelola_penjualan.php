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
                <h2>Penjualan</h2>
            </div>
            <div class="ml-auto">
                <span id="tanggal"><span>
            </div>
        </div>
    </div>
    
    <!-- bagian isi   -->
    <div class="container spad">
    	<div class="row">
    		<div class="col-7 p-5 mx-auto rounded" style="background-color: white;">
    			<h4 class="mb-5">Input Transaksi Penjualan</h4>

    			<form action="<?php echo site_url('apoteker/input_penjualan/'.($newid['id_penjualan']+1)); ?>" method="post">

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>Id Penjualan</label>
                        </div>
                        <div class="col-sm-8 ml-auto">
                            <input class="form-control form-control-sm" type="text" name="id_penjualan" value="<?php echo $newid['id_penjualan']+1; ?>" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>Nama Konsumen</label>
                        </div>
                        <div class="col-sm-8 ml-auto">
                            <input class="form-control form-control-sm" type="text" name="nama_konsumen">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>Pilih Obat</label>
                        </div>
                        <div class="col-sm-8 ml-auto d-flex justify-content-between">
                            <div class="col">
                                <input id="tf_idobat" class="form-control form-control-sm" type="text" name="id_obat">
                            </div>
                            <div class="col">
                                <div class="btn btn-primary" data-toggle="modal" data-target="#pilih_obat">Pilih Obat</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>Jumlah Obat</label>
                        </div>
                        <div class="col-sm-8 ml-auto">
                            <input class="form-control form-control-sm" type="text" name="jumlah_obat">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>Tanggal</label>
                        </div>
                        <div class="col-sm-8 ml-auto">
                            <input class="form-control form-control-sm" type="date" name="tanggal">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label>Harga Total</label>
                        </div>
                        <div class="col-sm-8 ml-auto d-flex justify-content-between">
                            <div class="col">
                                <input class="form-control form-control-sm" type="text" name="harga_total">
                            </div>
                            <div class="col">
                                <div class="btn btn-primary">Cetak Harga</div>
                            </div>
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

    <!-- bagian tabel riwayat penjualan-->
    <div class="container spad">
    	<div class="col-12 p-5 rounded" style="background-color: white">
    		<h4>Tabel Riwayat Penjualan</h4>
    		<div class="row mt-5">
    			<table class="table table-striped" style="font-size: 14px">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Id Penjualan</th>
                        <th scope="col">Nama Konsumen</th>
                        <th scope="col">Id Obat</th>
                        <th scope="col">Jumlah Obat</th>
                        <th scope="col">Tanggal Transaksi</th>
                        <th scope="col">Total Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($penjualan as $row) { ?>
                        <tr>
	                        <th scope="row"><?php echo $no; ?></th>
	                        <td><?php echo $row['id_penjualan']; ?></td>
	                        <td><?php echo $row['nama_konsumen']; ?></td>
                            <td><?php echo $row['id_obat']; ?></td>
                            <td><?php echo $row['jumlah_obat']; ?></td>
                            <td><?php echo $row['tanggal']; ?></td>
                            <td><?php echo $row['harga_total']; ?></td>
                        </tr>
                        <?php $no++; }?>
                    </tbody>
                </table>
    		</div>
    	</div>
    </div>

    <!-- modal pilih obat -->
    <div class="modal fade" id="pilih_obat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">List Item</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body p-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Obat</th>
                        <th scope="col">Harga Obat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach ($obat as $row) { ?>

                    <tr>
                        <th scope="row"><?php echo $no; ?></th>
                        <td><?php echo $row['nama_obat']; ?></td>
                        <td><?php echo $row['harga_jual']; ?></td>
                        <td><button class="btn_pilihobat btn btn-primary" value="<?php echo $row['id_obat']; ?>" data-dismiss="modal">Pilih</button></td>
                    </tr>

                    <?php $no++; } ?>
                </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <script>
        $(document).ready(function(){
          $(".btn_pilihobat").click(function(){
            $("#tf_idobat").val($(this).val());
          });
        });
    </script>

</body>
</html>