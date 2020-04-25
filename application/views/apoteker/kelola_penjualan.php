            <div class="row d-flex flex-column pl-4">
                <span>Dashboard</span><br>
                <span>Penjualan</span><br>
                <span>Pembelian</span>
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
                <button class="btn btn-primary mr-2" style="font-size: 12px; padding: 5px">ubah</button>
                <span>09:00 , 01 Januari 2020<span>
            </div>
        </div>
    </div>
    
    <!-- bagian isi   -->
    <div class="container spad">
    	<div class="row">
    		<div class="col-5 p-5 mr-auto rounded" style="background-color: white;">
    			<h4>Tambahkan Obat</h4>
    			<div class="form-group row mt-5">
    				<div class="col-sm-4">
						<label>Pilih Obat</label>
					</div>
					<div class="col-sm-8 pr-0 d-flex justify-content-between">
                        <div class="col p-0">
					       <input class="form-control form-control-sm" type="text" id="tf_idobat" name="id_obat">
                        </div>
                        <div class="col p-0">
                            <button class="btn btn-primary ml-3" data-toggle="modal" data-target="#pilih_obat">Pilih Obat</button>
                        </div>
					</div>
    			</div>
    			<div class="form-group row">
    				<div class="col-sm-4">
						<label for="input_idobat">Jumlah Obat</label>
					</div>
					<div class="col-sm-8 ml-auto">
						<input class="form-control form-control-sm" type="text" id="input_idobat" name="id_obat">
					</div>
    			</div>
    			<div class="form-group row mt-4">
    				<div class="col-sm-4 mx-auto">
						<input class="btn btn-success" type="submit" value="Tambah Data">
					</div>
    			</div>
    		</div>
    		<div class="col-6 ml-auto p-5 rounded" style="background-color: white;">
    			<h4>Keranjang</h4>
    			<div class="form-group row mt-5">
    				<div class="col-sm-4">
						<label for="input_idobat">ID Penjualan</label>
					</div>
					<div class="col-sm-8 ml-auto">
						<input class="form-control form-control-sm" type="text" id="input_idobat" name="id_obat">
					</div>
    			</div>
    			<div class="form-group row">
    				<div class="col-sm-4">
						<label for="input_idobat">Nama Konsumen</label>
					</div>
					<div class="col-sm-8 ml-auto">
						<input class="form-control form-control-sm" type="text" id="input_idobat" name="id_obat">
					</div>
    			</div>
    			<div class="form-group row">
    				<div class="col-sm-4">
						<label for="input_idobat">Tanggal Pembelian</label>
					</div>
					<div class="col-sm-8 ml-auto">
						<input class="form-control form-control-sm" type="text" id="input_idobat" name="id_obat">
					</div>
    			</div>
    			<div class="form-group row">
    				<div class="col-sm-4">
						<label for="input_idobat">Total Harga</label>
					</div>
					<div class="col-sm-8 ml-auto">
						<input class="form-control form-control-sm" type="text" id="input_idobat" name="id_obat">
					</div>
    			</div>
    			<div class="form-group row mt-5">
    				<input class="btn btn-success mr-auto" type="submit" value="Edit Item">
					<input class="btn btn-success ml-auto" type="submit" value="Checkout">
    			</div>
    		</div>
    		</div>
    	</div>
    </div>

    <!-- bagian tabel obat -->
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
                        <th scope="col">Item</th>
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
                            <td><button class="btn btn-primary" data-toggle="modal" data-target="#lihat_item<?php echo $no; ?>">Lihat Item</button></td>
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
                        <td><button class="btn btn-primary" id="btn_pilihobat" value="<?php echo $row['id_obat']; ?>" data-dismiss="modal">Pilih</button></a></td>
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


    <!-- Modal Lihat Item-->
    <?php $x=1; foreach ($penjualan as $row) { ?>
    
    <div class="modal fade" id="lihat_item<?php echo $x; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <th scope="col">Jumlah Obat</th>
                        <th scope="col">Harga Obat</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Paramexx</td>
                        <td>999</td>
                        <td>Rp. 50000</td>
                    </tr>
                </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <?php $x++; } ?>

    <script>
        $(document).ready(function(){
            $('#btn_pilihobat').click(function(){
                alert('tes');
                $('#tf_idobat').val($('#btn_pilihobat').val());
            })
        }
    </script>

</body>
</html>