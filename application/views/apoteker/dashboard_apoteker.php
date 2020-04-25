            <div class="row d-flex flex-column pl-4">
                <a href="<?php echo site_url('apoteker'); ?>"><h6>Dashboard</h6></a>
                <a href="<?php echo site_url('apoteker/ubah_harga_obat'); ?>"><h6>Ubah Harga Obat</h6></a>
                <a href="<?php echo site_url('apoteker/kelola_penjualan'); ?>"><h6>Penjualan</h6></a>
                <a href="<?php echo site_url('apoteker/kelola_pembelian'); ?>"><h6>Pembelian</h6></a>
            </div>
        </div>
    </div>
    <!-- bagian sidebar end -->

    <!-- bagian isi   -->
    <!-- header -->
    <div class="container spad">
        <div class="row">
            <div class="mr-auto">
                <h2>Dashboard</h2>
            </div>
            <div class="ml-auto">
                <button class="btn btn-primary mr-2" style="font-size: 12px; padding: 5px">ubah</button>
                <span>09:00 , 01 Januari 2020<span>
            </div>
        </div>
    </div>

    <!-- tombol navigasi menu -->
    <div class="container spad">
        <div class="col-12">
            <div class="row d-flex justify-content-center">
                <a href="<?php echo site_url('apoteker/kelola_penjualan'); ?>"><div class="rounded p-5 mx-3" style="background-color: white">
                    <img class="d-block mb-3" src="<?php echo base_url('assets/img/input_penjualan.png'); ?>" style="width: 100px"> 
                    <span>Penjualan</span>
               </div></a>

               <a href="<?php echo site_url('apoteker/kelola_pembelian'); ?>"><div class="rounded p-5 mx-3" style="background-color: white">
                    <img class="d-block mb-3" src="<?php echo base_url('assets/img/input_penjualan.png'); ?>" style="width: 100px"> 
                    <span>Pembelian</span>
               </div></a>
            </div>
        </div>
    </div>

    <!-- tabel stok obat -->
    <div class="container spad">
        <div class="col-12 p-5 rounded" style="background-color: white">
            <h4>Tabel Stok Obat</h4>
            <div class="row mt-5">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Id Obat</th>
                        <th scope="col">Nama Obat</th>
                        <th scope="col">Stok Minimal </th>
                        <th scope="col">Stok Gudang</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach ($obat as $row) { ?>
                            <tr>
                            <th scope="row"><?php echo $no; ?></th>
                            <td><?php echo $row['id_obat']; ?></td>
                            <td><?php echo $row['nama_obat']; ?></td>
                            <td><?php echo $row['stok_min']; ?></td>
                            <td><?php echo $row['stok_gudang']; ?></td>
                            <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#ubah_stokobat<?php echo $no; ?>">Ubah</button></td>
                            </tr>
                            <tr>
                        <?php $no++; } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Ubah Stok Obat-->
    <?php $x=1; foreach ($obat as $row) { ?>
    
    <div class="modal fade" id="ubah_stokobat<?php echo $x; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ubah Stok Obat</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

        <form action="<?php echo site_url('apoteker/ubah_stokgudang/'.$row['id_obat']); ?>" method="post">
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
                        <label>Stok Minimal</label>
                    </div>
                    <div class="col-sm-8 ml-auto">
                        <input class="form-control form-control-sm" type="text" name="stok_min" value="<?php echo $row['stok_min']; ?>" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label>Stok Gudang</label>
                    </div>
                    <div class="col-sm-8 ml-auto">
                        <input class="form-control form-control-sm" type="text" name="stok_gudang" value="<?php echo $row['stok_gudang']; ?>">
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
