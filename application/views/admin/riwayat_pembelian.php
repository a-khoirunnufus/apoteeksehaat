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
                <h2>Riwayat Pembelian</h2>
            </div>
            <div class="ml-auto">
                <button class="btn btn-primary mr-2" style="font-size: 12px; padding: 5px">ubah</button>
                <span>09:00 , 01 Januari 2020<span>
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