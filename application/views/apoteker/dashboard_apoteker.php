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
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="<?php echo base_url(); ?>">
    Apotek Sehat
  </a>
  <div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <img src="https://image.shutterstock.com/image-vector/people-icon-trendy-flat-style-260nw-432263914.jpg" class="rounded-circle" height = 20px;>
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Account</a>
    <a class="dropdown-item" href="#">Balance</a>
    <a class="dropdown-item" href="<?php echo base_url('login/logout'); ?>">Logout</a>

</nav>

  <div class="row">
    <div class="col-2 bg-dark text-light " text-align= center; >
        <img src="https://image.shutterstock.com/image-vector/people-icon-trendy-flat-style-260nw-432263914.jpg" class="rounded-circle" height = 150px; text-align= center;>
        <h3 text-align= center;>Nama User</h3>
        <h5 text-align= center;>Tipe User</h5>
        <br><br>
        <div class="dropright bg-dark text-ligh">
            <button class="bg-dark text-light" type="button" id="dropdownMenuButton2" data-toggle="dropdown">
                Dashboard
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </div>
        <br><br>
        <div class="dropright bg-dark text-ligh">
            <button class="bg-dark text-light" type="button" id="dropdownMenuButton4" data-toggle="dropdown">
                Penjualan
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </div>
        <br><br>
        <div class="dropright bg-dark text-light">
            <button class="bg-dark text-light" type="button" id="dropdownMenuButton3" data-toggle="dropdown">
                Pembelian
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
    <div class="row">
     <div class="col p-3 px-md-5"><h2>Dashboard</h2></div>
     <div> <br><br><br><br><br><br>
    <button class="bg-dark text-light" type="button">
    <img height =50px; src="https://library.kissclipart.com/20180830/grw/kissclipart-dollar-bill-icon-png-clipart-united-states-one-dol-d756dbc2808f5ce6.jpg"><br>
               Input Penjualan
    </button>
    <button class="bg-dark text-light" type="button">
    <img height = 50px; src="https://thumbs.dreamstime.com/b/shopping-basket-trolley-icon-simple-flat-style-ui-design-shopping-basket-trolley-icon-simple-flat-style-ui-design-107493003.jpg">
        <br>Input Pembelian
    </button>
    <button class="bg-dark text-light" type="button" >
    <img height = 50px; src="https://image.shutterstock.com/image-vector/recent-history-log-260nw-1157591170.jpg">
        <br> Riwayat Pembelian
    </button>
    <button class="bg-dark text-light" type="button" >
    <img height = 50px; src="https://image.shutterstock.com/image-vector/recent-history-log-260nw-1157591170.jpg">
        <br>Riwayat Penjualan
    </button>
        <table class="table table-bordered">
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
        <td>    </td>
        <td>Otto</td>
        <td><button type="button" class="btn btn-success">Ubah</button></td>
        </tr>
        <tr>
        <th scope="row">2</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>Otto</td>
        <td><button type="button" class="btn btn-success">Ubah</button></td>
        </tr>
        <tr>
        <th scope="row">3</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>Otto</td>
        <td><button type="button" class="btn btn-success">Ubah</button></td>
        </tr>
    </tbody>
    </table>
    </div>

    
    </div>
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <div class="float-right p-3"><h2>Tanggal</h2></div>
        </div>
    </div>
    
  </div>
  
</body>
