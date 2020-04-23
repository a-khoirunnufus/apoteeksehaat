            <div class="row d-flex flex-column pl-4">
                <span>Dashboard</span><br>
                <span>Obat</span><br>
                <span>Supplier</span><br>
                <span>Apoteker</span><br>
                <span>Riwayat Penjualan</span><br>
                <span>Riwayat Pembelian</span>
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
                <button class="btn btn-primary mr-2" style="font-size: 12px; padding: 5px">ubah</button>
                <span>09:00 , 01 Januari 2020<span>
            </div>
        </div>
    </div>

    <!-- bagian tambah obat -->
    <div class="container spad">
        <div class="col-6 rounded mx-auto p-5" style="background-color: white">
            <h4>Tambah Supplier</h4><br>
            <form>
    			<div class="form-group row">
    				<div class="col-sm-4">
						<label for="input_idobat">Id Supplier</label>
					</div>
					<div class="col-sm-8 ml-auto">
						<input class="form-control form-control-sm" type="text" id="input_idobat" name="id_obat">
					</div>
    			</div>
    			<div class="form-group row">
    				<div class="col-sm-4">
						<label for="input_namaobat">Nama</label>
					</div>
					<div class="col-sm-8 ml-auto">
						<input class="form-control form-control-sm" type="text" id="input_namaobat" name="nama_obat">
					</div>
    			</div>
    			<div class="form-group row">
    				<div class="col-sm-4">
						<label for="input_golobat">Kontak</label>
					</div>
					<div class="col-sm-8 ml-auto">
						<input class="form-control form-control-sm" type="text" id="input_golobat" name="golongan_obat">
					</div>
    			</div>
    			<div class="form-group row">
    				<div class="col-sm-4">
						<label for="input_bentukobat">Alamat</label>
					</div>
					<div class="col-sm-8 ml-auto">
						<textarea class="form-control form-control-sm" type="text" id="input_bentukobat" name="bentuk_obat"></textarea> 
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

    <!-- bagian tabel obat -->
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
                        <th scope="col">Kontak</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
	                        <th scope="row">1</th>
	                        <td>Mark</td>
	                        <td>Otto</td>
	                        <td>100</td>
	                        <td>67</td>
	                        <td>
	                        	<div class="btn-group" role="group">
	                        		<button type="button" class="btn btn-primary">Ubah</button>
	                        		<button type="button" class="btn btn-danger">Hapus</button>
	                        	</div>
	                        </td>
                        </tr>
                        
                    </tbody>
                </table>
    		</div>
    	</div>
    </div>

</body>
</html>