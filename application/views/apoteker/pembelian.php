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
                <h2>Supplier</h2>
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
    			<h4>Tambahkan Item</h4>
    			<div class="form-group row mt-5">
    				<div class="col-sm-4">
						<label for="input_idobat">Pilih Obat</label>
					</div>
					<div class="col-sm-8 ml-auto">
						<input class="form-control form-control-sm" type="text" id="input_idobat" name="id_obat">
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
						<label for="input_idobat">ID Pembelian</label>
					</div>
					<div class="col-sm-8 ml-auto">
						<input class="form-control form-control-sm" type="text" id="input_idobat" name="id_obat">
					</div>
    			</div>
    			<div class="form-group row">
    				<div class="col-sm-4">
						<label for="input_idobat">No Faktur</label>
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
						<label for="input_idobat">Pilih Supplier</label>
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
            <h4>Tabel Riwayat Pembelian</h4>
            <div class="row mt-5">
                <table class="table table-striped" style="font-size: 14px">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Id Pembelian</th>
                        <th scope="col">No Faktur</th>
                        <th scope="col">Tanggal Pembelian</th>
                        <th scope="col">Jenis Pembelian</th>
                        <th scope="col">Nama Supplier</th>
                        <th scope="col">Nama Obat</th>
                        <th scope="col">Jumlah Obat</th>
                        <th scope="col">Tanggal EXP</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>100</td>
                            <td>67</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>100</td>
                            <td>67</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>