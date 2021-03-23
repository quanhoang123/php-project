<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- link bootstrap product -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- link css -->

    <script src=" https://kit.fontawesome.com/a076d05399.js"> </script>
    <!-- <link rel="stylesheet" href="../css/style-admin.css"> -->


   
  
   
</head>

<style>
    .bs-example {
        margin: 20px;
    }

    body {
        font-family: sans-serif;
        font-size: 15px;
    }
    .wrapper{
            width: 1200px;
            margin: 0 auto;
            float:right;
        }
        table tr td:last-child{
            width: 360px;

        }
</style>
<script>
     $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });

</script>
<?php
require_once('../modal/connect.php');
?>

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

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-7 mb-2 clearfix">
                        <h2 class="pull-left">Employees Details</h2>
                        <a href="../modal/create.php" class="btn btn-success pull-right " ><i class="fa fa-plus"></i> Add New Employee</a>
                    </div>
                    <?php
                    // Include config file
                    require_once "../modal/connect.php";            
                    $sql = "SELECT * FROM employees";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>Name</th>";
                                        echo "<th>Address</th>";
                                        echo "<th>Salary</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id_employee'] . "</td>";
                                        echo "<td>" . $row['name_employee'] . "</td>";  
                                        echo "<td>" . $row['address'] . "</td>";
                                        echo "<td>" . $row['salary'] . "</td>";
                                        echo "<td>";
                                            echo '<a href="../modal/read_employee.php?id='. $row['id_employee'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                            echo '<a href="../modal/update_employee.php?id='. $row['id_employee'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-refresh"></span></a>';
                                            echo '<a href="../modal/delete_employee.php?id='. $row['id_employee'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Đã xảy ra lỗi không đáng có!!";
                    }
 
                    // Close connection
                    // mysqli_close($link);
                    ?>
                </div>
            </div>        
        </div>
    </div>
    <!-- modal product -->
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" enctype="multipart/form-data">
                    <div class="mt-7 mb-2 clearfix">
                        <h2 class="pull-left">Product Details</h2>
                        <a href="" class="btn btn-success pull-right " data-toggle="Modal" data-target="#exampleModalLable1"><i class="fa fa-plus"></i> Add New Product</a>
                    </div>
                    <?php
                    // Include config file
                    require_once "../modal/connect.php";            
                    $sql = "SELECT * FROM products";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>Name</th>";
                                        echo "<th>category</th>";
                                        echo "<th>image</th>";
                                        echo "<th>description</th>";
                                        echo "<th>price</th>";
                                        echo "<th>created_day</th>";
                                        echo "<th>quantity</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id_product'] . "</td>";
                                        echo "<td>" . $row['name_product'] . "</td>";  
                                        echo "<td>" . $row['category_id'] . "</td>";
                                        echo "<td> ". $row['image']."</td>";
                                        echo "<td>" . $row['description'] . "</td>";
                                        echo "<td>" . $row['price'] . "</td>";
                                        echo "<td>" . $row['created_day'] . "</td>";
                                        echo "<td>" . $row['quantity'] . "</td>";
                                        echo "<td>";
                                            echo '<a href="../modal/read_product.php?id='. $row['id_product'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                            echo '<a href="../modal/update_product.php?id='. $row['id_product'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-refresh"></span></a>';
                                            echo '<a href="../modal/delete_product.php?id='. $row['id_product'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Đã xảy ra lỗi không đáng có!!";
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>        
        </div>
    </div>
    
    <!-- MODAL ADD PRODUCT -->
    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="#exampleModalLable1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLable1">Thêm sản phẩm</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="admin.php" method="POST" class="form-row">
                        <div class="col-12 mt-3">
                            <input class="form-control" type="text" id="name" placeholder="Name">
                        </div>
                        <div class="col-12 mt-3">
                            <!-- <input class="form-control" type="file" id="img" name="image"> -->
                        </div>
                        <div class="col-12 mt-3">
                            <input class="form-control" type="number" id="price" placeholder="Price">
                        </div>
                        <a class="btn btn-outline-danger mt-3" href="" onclick="addProduct()" name="upload">Add</a>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Exit</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>