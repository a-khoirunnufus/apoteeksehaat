            <div class="row d-flex flex-column pl-4">
                <span>Dashboard</span><br>
                <span>Penjualan</span><br>
                <span>Pembelian</span>
            </div>
        </div>
    </div>
    <!-- bagian sidebar end -->

    <!-- bagian isi   -->
    <!-- header -->
    <div class="container spad">
        <div class="row">
            <div class="mr-auto">
                <h2>Kelola Profil</h2>
            </div>
            <div class="ml-auto">
                <button class="btn btn-primary mr-2" style="font-size: 12px; padding: 5px">ubah</button>
                <span>09:00 , 01 Januari 2020<span>
            </div>
        </div>
    </div>

    <!-- tombol navigasi menu -->
    <div class="container spad">
        <div class="col-8 p-5 mx-auto d-flex justify-content-center" style="background-color: white">
            <div class="col-5">
                <img src="<?php echo base_url('assets/img/profile-2.png'); ?>" style="width: 200px;">
            </div>
            <div class="col-7">
            <form>
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
                        <label for="input_golobat">Username</label>
                    </div>
                    <div class="col-sm-8 ml-auto">
                        <input class="form-control form-control-sm" type="text" id="input_golobat" name="golongan_obat">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label for="input_bentukobat">Password</label>
                    </div>
                    <div class="col-sm-8 ml-auto">
                        <input class="form-control form-control-sm" type="text" id="input_bentukobat" name="bentuk_obat">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label for="input_hargapokok">No HP</label>
                    </div>
                    <div class="col-sm-8 ml-auto">
                        <input class="form-control form-control-sm" type="text" id="input_hargapokok" name="harga_pokok">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label for="input_jumlahisi">Email</label>
                    </div>
                    <div class="col-sm-8 ml-auto">
                        <input class="form-control form-control-sm" type="text" id="input_jumlahisi" name="isi_obat">
                    </div>
                </div>
                <div class="form-group row mt-4">
                    <div class="col-sm-4 mx-auto">
                        <input class="btn btn-success" type="submit" value="Update Data">
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
