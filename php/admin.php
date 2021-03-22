<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <!-- link css -->
    <script src=" https://kit.fontawesome.com/a076d05399.js"> </script> 
    <link rel="stylesheet" href="../css/style-admin.css">
</head>

<style>

    .bs-example {
        margin: 20px;
    }
</style>

<body>
    <div class="bs-example">
        <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
            <a href="#" class="navbar-brand">QuanQuan</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between " id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="#" class="nav-item nav-link active">Home</a>
                    <a href="#" class="nav-item nav-link">Profile</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Category</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">New Product</a>
                            <a href="#" class="dropdown-item">Product-Discounts</a>
                        </div>
                    </div>
                    <a href="" class="nav-item nav-link" data-toggle="modal" data-target="#myModal" name="addproduct">Thêm Sản phẩm</a>
                </div>
                <form class="form-inline">
                    <div class="input-group">
                        <input type="search" id="search" name="find" value="<?php error_reporting(0);
                                                                            echo $_POST['tim'] ?>" />
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary" name="search"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
                <div class="navbar-nav">
                    <a href="#" class="nav-item nav-link">Login<i class="fa fa-user"></i></a>
                </div>
            </div>
        </nav>
    </div>
    <br><br>
    <div id="menu">
    <ul> 
        <li><a href="#" class="active"> 
           <i class="fas fa-home icon"></i> 
          Home</a></li> 
        <li><a href="#"> 
           <i class="fas fa-rss icon"></i> 
          News</a></li> 
        <li><a href="#"> 
          <i class="fas fa-address-book icon"></i> 
          Contact</a></li> 
        <li><a href="#"> 
          <i class="fas fa-user icon"></i> 
        About</a></li> 
    </ul> 
    </div>
</body>

</html>