<?php 
session_start();
include 'includes/dbConnection.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - product</title>

    <link rel="stylesheet" href="style.css">
    <!-- Custom fonts for this template-->
    <link href="dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="dashboard/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="dashboard/css/sb-admin.css" rel="stylesheet">


</head>


<body>

<div id="page-top">

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="Ulight.php">U-light Admin</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-5 my-2 my-md-0">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for..." aria-label="Search"
                aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn" style="background-color: orange;" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">

        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle fa-fw"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
            </div>
        </li>
    </ul>

</nav>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
    <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="Ulight.php">Logout</a>
    </div>
</div>
</div>
</div>

        <div id="wrapper">
            <!-- Sidebar -->
            <ul class="sidebar navbar-nav">

             <li class="nav-item">
                    <a class="nav-link" href="purchase.php">
                        <i class="fas fa-fw fa fa-truck"></i>
                        <span>Purchase</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="transaction.php">
                        <i class="fas fa-fw fa fa-industry" ></i>
                        <span>Transaction</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="payment.php">
                        <i class="fas fa-fw fa fa-credit-card"></i>
                        <span>Payment</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="reports.php">
                        <i class="fas fa-fw fa-flag"></i>
                        <span>Reports</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="price.php">
                        <i class="fas fa-fw fa fa-tag"></i>
                        <span>Prices</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contractor.php">
                        <i class="fas fa-fw fa fa-briefcase"></i>
                        <span>Contractor</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="product.php">
                        <i class="fas fa-fw fa fa-archive"></i>
                        <span>Product</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="store.php">
                        <i class="fas fa-fw fa fa-shopping-cart"></i>
                        <span>Store</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="user.php">
                        <i class="fas fa-fw fa-user"></i>
                        <span>User</span></a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="client.php">
                        <i class="fas fa-fw fa fa-users"></i>
                        <span>Client</span>
                    </a>
                </li>
            </ul>


        <div class="card mb-3">
            <div class="card-header">
                               
                               
                                
                            <div id="invoice-top">
                                <div class="logo"></div>
                                <div class="info">
                                <h2>U-light </h2>
                                <p> since868@gmail.com </br> 289-335-6503</br>Bteghrine-MurrBuilding </p>
                                </div>
                                <!--End Info-->
                                <div class="title">
                                <h1>Invoice <span id="invnumber"> </span></h1>
                                <h6>Date:</br><span id="invdate">
                                 <?php $now = new DateTime();
                                 echo $now->format('Y-m-d H:i:s');  ?> </span></h6>
                                </div><!--End Title-->
                            </div>
                            <!--End InvoiceTop-->
                <div id="invoice-mid">
                        <div class="clientlogo"></div>
                        <div class="info">
                        <h2>BUS</h2>
                        <p>Butec@utility-services.com</br>2640727-601</br> Mkalles Bus building</p>
                         </div>

                            <div id="project">
                            <p id="invlocation"></p>
                            </div>   

                </div><!--End Invoice Mid-->

                 <!-- Table with query to fill it trans header -->

                 <?php $sql = 'SELECT t_id,subcontractor_ID,client_ID,pdescription,p_unit,price FROM transaction_header';
                        $query = mysqli_query($con, $sql);

                        if (!$query) {
                            die('SQL Error:' . mysqli_error($con));
                        }
                        ?>
            </div>

                 <!-- Table with query to fill it transaction -->

                 <?php $sql = 'SELECT t_id,product_list_price_ID,product_name,product_description,product_price FROM ttransaction';
                        $query = mysqli_query($con, $sql);

                        if (!$query) {
                            die('SQL Error:' . mysqli_error($con));
                        }
                        ?>
            </div>

                                <div class="card-body">
                                    <div class="table-responsive">
                                    <div id="invoiceholder">
                                    <div id="invoice" class="effect2">
                                    <div id="invoice-bot">
      
      <div id="table" class="table-responsive" >
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr class="tabletitle">
            <td class="sorting_desc"><h2>Code</h2></td>
            <td class="sorting_desc"><h2>Product/ Service</h2></td>
            <td class="sorting_desc"><h2>Description</h2></td>
            <td class="sorting_desc"><h2>Unit</h2></td>
            <td class="sorting_desc"><h2>Qtty</h2></td>
            <td class="sorting_desc"><h2>Price</h2></td>
            <td class="sorting_desc"><h2>Total</h2></td>
          </tr>
          </thead>
         
          
          <?php while ($row = mysqli_fetch_array($query)) { ?>
                                            <tr>
                                                <td><?php echo $row['product_price_ID']; ?></td>
                                                <td><?php echo $row['product_price_name']; ?></td>
                                                <td><?php echo $row['product_price_description']; ?></td>
                                                <td><?php echo $row['price']; ?></td>
                                                <td><?php echo $row["quantity"]; ?></td>
                                                <td><?php echo $row['total']; ?></td>
                                                

                                                <td>
                                                    <a href="price.php?idd=<?php echo $row['p_id']; ?>"
                                                        onclick="return confirm('Are you sure ?')" style="color:red;"><i
                                                            class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <?php
                        } ?>

                                        </table>
      </div><!--End Table-->
      </div><!--End InvoiceBot-->
  </div><!--End Invoice-->
</div><!-- End Invoice Holder-->

                                    </div>
                                </div>

  <!-- Delete Query -->
  <?php
                            if (isset($_GET['idd'])) {
                                $idd = $_GET['idd'];
                                $sql = "Delete from ttransaction where t_id='" . $idd . "'";
                                if ($idd != '') {
                                    $query = mysqli_query($con, $sql);
                                    //header("Refresh:0; url=member.php");
                                }
                            }
                            ?>

                                <!-- session for add product_price button -->
                                <?php if (isset($_SESSION["success"])) { ?>
                                <div class="alert alert-success">
                                    <strong>Success! </strong> <?php echo $_SESSION["success"];
                                                                session_unset(); ?>
                                </div>
                                <?php
                        } ?>


                                <?php if (isset($_SESSION["error"])) { ?>
                                <div class="alert alert-danger">
                                    <strong>Alert! </strong> <?php echo $_SESSION["error"];
                                                                session_unset(); ?>
                                </div>
                                <?php
                        } ?>


            




                                <!-- ADD Item -->

                                <div class="modal fade" id="my2Modal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="card card-register">
                                                <div class="card-header">Add New Item</div>
                                                <div class="card-body">
                                                    <form method="post" action="includes/phpScripts.php">
                                                        <div class="form-group">
                                                            <input type="text" name="txtID" placeholder="Product ID"
                                                                class="form-control" required="required">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="txtName" class="form-control"
                                                                placeholder="Product" required="required">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="txtDescription" placeholder="Description"
                                                                class="form-control" required="required">
                                                        </div>

                                                        <div class="form-group">
                                                            <input type="text" name="txtPrice" placeholder="Price"
                                                                class="form-control" required="required">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="txtQtt" placeholder="Quantity"
                                                                class="form-control" required="required">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="txtTotal" placeholder="Total"
                                                                class="form-control" required="required">
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button class="btn btn-md btn-primary"
                                                                name="btnaddItem" class="modalButton"
                                                                type="submit">Add Item</button>
                                                            <button type="button" class="btn btn-danger"
                                                                data-dismiss="modal">Close</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

            </div>
            </div>
            </div>                    
            </div>

      <!-- Bootstrap core JavaScript-->
                            <script src="dashboard/vendor/jquery/jquery.min.js"></script>
                            <script src="dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                            <!-- Core plugin JavaScript-->
                            <script src="dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>

                            <!-- Page level plugin JavaScript-->
                            <script src="dashboard/vendor/chart.js/Chart.min.js"></script>
                            <script src="dashboard/vendor/datatables/jquery.dataTables.js"></script>
                            <script src="dashboard/vendor/datatables/dataTables.bootstrap4.js"></script>

                            <!-- Custom scripts for all pages-->
                            <script src="dashboard/js/sb-admin.min.js"></script>

</body>

</html>