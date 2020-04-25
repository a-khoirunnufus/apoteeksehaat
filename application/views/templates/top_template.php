<!DOCTYPE html>
<html lang="en">
<head>
	<title>Apotek Sehat</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    

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
                    <a class="navbar-brand" href="<?php echo base_url($this->session->userdata['tipe_pengguna']); ?>">Apotek Sehat</a>
                </div>
                <div class="dropdown dropleft">
                    <div class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="<?php echo base_url('assets/img/profile-2.png'); ?>" class="rounded-circle" style="width: 40px">
                    </div>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="<?php echo base_url($this->session->userdata('tipe_pengguna').'/kelola_profil/'.$this->session->userdata('id_pengguna')); ?>">Kelola Profil</a>
                        <a class="dropdown-item" href="<?php echo base_url('login/logout'); ?>">Logout</a>
                    </div>
                </div>
            </nav>
        </div>
    </section>
    <!-- bagian navbar atas end -->

    <!-- bagian sidebar start -->
    <div class="sidenav bg-dark" id="mySidenav">
        <div class="col-12 text-light p-4">
            <div class="row d-flex flex-column">
                <div class="mx-auto">
                    <img src="<?php echo base_url('assets/img/profile-2.png'); ?>" class="rounded-circle" style="width: 125px">
                </div>
                <div style="text-align: center;"><?php echo $this->session->userdata('nama'); ?></div>
                <div style="text-align: center;"><?php echo $this->session->userdata('tipe_pengguna'); ?></div>
            </div>
            <hr>