<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Tubes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- custom style -->
    <style>
        /*sidenav start*/
        .sidenav {
          height: 100%;
          width: 0;
          position: fixed;
          z-index: 1;
          top: 0;
          left: 0;
          background-color: #111;
          overflow-x: hidden;
          transition: 0.5s;
          margin-top: 70px;
        }

        .sidenav a {
          padding: 8px 8px 8px 32px;
          text-decoration: none;
          font-size: 25px;
          color: #818181;
          display: block;
          transition: 0.3s;
        }

        .sidenav a:hover {
          color: #f1f1f1;
        }

        .sidenav .closebtn {
          position: absolute;
          top: 0;
          right: 25px;
          font-size: 36px;
          margin-left: 50px;
        }

        @media screen and (max-height: 450px) {
          .sidenav {padding-top: 15px;}
          .sidenav a {font-size: 18px;}
        }
        /*sidenav end*/

        .spad{
            padding-top: 40px;
            padding-bottom: 40px;
        }
    </style>
</head>

<body class="bg-light">
    <!-- bagian navbar atas start -->
    <section div class="m-0 bg-dark sticky-top">
        <div class="pos-f-t">
            <nav class="navbar navbar-dark">
                <button class="navbar-toggler" id="sidebar_toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" onclick="openNav()">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="ml-3 mr-auto">
                    <a class="navbar-brand" href="<?php echo base_url(); ?>">Apotek Sehat</a>
                </div>
                <div class="dropdown dropleft">
                    <div class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="<?php echo base_url('assets/img/profile-2.png'); ?>" class="rounded-circle" style="width: 40px">
                    </div>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Kelola Profil</a>
                        <a class="dropdown-item" href="<?php echo base_url('login/logout'); ?>">Logout</a>
                    </div>
                </div>
            </nav>
        </div>
    </section>
    <!-- bagian navbar atas end -->

    <!-- bagian sidebat start -->
    <div class="sidenav bg-dark" id="mySidenav" style="transition: width 0s;">
        <div class="col-12 text-light p-4">
            <div class="row d-flex flex-column">
                <div class="mx-auto">
                    <img src="<?php echo base_url('assets/img/profile-2.png'); ?>" class="rounded-circle" style="width: 125px">
                </div>
                <div style="text-align: center;">Nama User</div>
                <div style="text-align: center;">Tipe User</div>
            </div>
            <hr>
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
                <div class="rounded p-5 mx-3" style="background-color: white">
                    <img class="d-block mb-3" src="<?php echo base_url('assets/img/input_penjualan.png'); ?>" style="width: 100px"> 
                    <span>Input Penjualan</span>
               </div>
               <div class="rounded p-5 mx-3" style="background-color: white">
                    <img class="d-block mb-3" src="<?php echo base_url('assets/img/input_penjualan.png'); ?>" style="width: 100px"> 
                    <span>Input Penjualan</span>
               </div>
               <div class="rounded p-5 mx-3" style="background-color: white">
                    <img class="d-block mb-3" src="<?php echo base_url('assets/img/input_penjualan.png'); ?>" style="width: 100px"> 
                    <span>Input Penjualan</span>
               </div>
               <div class="rounded p-5 mx-3" style="background-color: white">
                    <img class="d-block mb-3" src="<?php echo base_url('assets/img/input_penjualan.png'); ?>" style="width: 100px"> 
                    <span>Input Penjualan</span>
               </div>
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
                        <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>100</td>
                        <td>67</td>
                        <td><button type="button" class="btn btn-success">Ubah</button></td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>100</td>
                        <td>76</td>
                        <td><button type="button" class="btn btn-success">Ubah</button></td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>100</td>
                        <td>76</td>
                        <td><button type="button" class="btn btn-success">Ubah</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- custom script   -->
    <script>
        function openNav() {
          document.getElementById("mySidenav").style.width = "250px";
          document.getElementById("sidebar_toggler").getAttributeNode("onclick").value = "closeNav()";
        }

        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
          document.getElementById("sidebar_toggler").getAttributeNode("onclick").value = "openNav()";
        }
    </script>
</body>
