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
                <h2>Dashboard Admin</h2>
            </div>
            <div class="ml-auto">
                <button class="btn btn-primary mr-2" style="font-size: 12px; padding: 5px">ubah</button>
                <span>09:00 , 01 Januari 2020<span>
            </div>
        </div>
    </div>

    <!-- bagian carousel -->
    <div class="container spad d-flex justify-content-center">
        <div class="col-8 p-5 m-0 rounded" style="background-color: white;">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">

                <div class="carousel-item active">
                    <img class="d-block w-100" src="<?php echo base_url('assets/img/image-1.webp'); ?>">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo base_url('assets/img/image-2.jpg'); ?>">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo base_url('assets/img/image-3.webp'); ?>">
                </div>

              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
    </div>

    <!-- tombol navigasi menu -->
    <div class="container spad" style="margin-bottom: 150px">
        <div class="col-12">
        	<div class="row d-flex justify-content-between " style="text-align: center;">
                <a href="<?php echo site_url('admin/kelola_obat'); ?>">
                    <div class="rounded p-5" style="background-color: white">
                    <img class="d-block mb-3 mx-auto" src="<?php echo base_url('assets/img/input_penjualan.png'); ?>" style="width: 100px"> 
                    <span>Obat</span>
                </div></a>

                <a href="<?php echo site_url('admin/kelola_supplier'); ?>"><div class="rounded p-5" style="background-color: white">
                    <img class="d-block mb-3 mx-auto" src="<?php echo base_url('assets/img/input_penjualan.png'); ?>" style="width: 100px"> 
                    <span>Supplier</span>
               </div></a>

               <a href="<?php echo site_url('admin/kelola_apoteker'); ?>"><div class="rounded p-5" style="background-color: white">
                    <img class="d-block mb-3 mx-auto" src="<?php echo base_url('assets/img/input_penjualan.png'); ?>" style="width: 100px"> 
                    <span>Apoteker</span>
               </div></a>
               
                <a href="<?php echo site_url('admin/riwayat_penjualan'); ?>"><div class="rounded p-5" style="background-color: white">
                    <img class="d-block mb-3 mx-auto" src="<?php echo base_url('assets/img/input_penjualan.png'); ?>" style="width: 100px"> 
                    <span>Riwayat Penjualan</span>
               </div></a>
               
                <a href="<?php echo site_url('admin/riwayat_pembelian'); ?>"><div class="rounded p-5" style="background-color: white">
                    <img class="d-block mb-3 mx-auto" src="<?php echo base_url('assets/img/input_penjualan.png'); ?>" style="width: 100px"> 
                    <span>Riwayat Pembelian</span>
               </div></a>
            </div>
        </div>
    </div>
</body>
</html>