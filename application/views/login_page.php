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
    

    <!-- custom style -->
    <style>
        .spad{
            padding-top: 40px;
            padding-bottom: 40px;
        }
    </style>

    <!-- custom script   -->
    <script>
    </script>

</head>

<body class="bg-light">
        
    </form>
    <div class="container" style="margin-top: 150px;">
        <div class="row">
            <div class="col-4 mx-auto p-5 rounded" style="background-color: white;">
                <div class="d-flex justify-content-center mb-5">
                    <h2>Login</h2>
                </div>
                <div class="text-danger mb-2"><?php echo $this->session->userdata('pesan'); ?></div>
                <?php $this->session->unset_userdata('pesan'); ?>
                <form action="<?php echo site_url('login/aksi_login'); ?>" method="post">
                    <div class="form-group row">
                        <div class="col-4">
                            <span>Username</span>
                        </div>
                        <div class="col-8">
                            <input type="text" class="form-control form-control-sm" name="username">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-4">
                            <span>Password</span>
                        </div>
                        <div class="col-8">
                            <input type="password" class="form-control form-control-sm" name="password">
                        </div>
                    </div>
                    <div class="row mx-0">
                        <input class="col-12 btn btn-primary" type="submit" value="Login">
                    </div>
                </form>               
            </div>
        </div>
    </div>
</body>
</html>
