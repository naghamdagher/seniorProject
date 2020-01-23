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
    <title>Reports - Clients</title>

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
            <div id="content-wrapper">
                <div class="container-fluid">

                      <h1><i class="fa fa-group"></i> Clients - Report </h1>
                      <hr>
                            <div id="reports-table">

                                <!------------------------------------Client reports-------------------------------------->
                                <!-- Table with query to fill it -->
                                <?php $sql = 'SELECT c_id,cname,caddress,phone,email,tva_number,engineer,date_created,created_by,date_updated,updated_by FROM client';
                                    $query = mysqli_query($con, $sql);
                                    if (!$query) {
                                    die('SQL Error:' . mysqli_error($con));
                                } ?>

                                <!-- DataTables Example -->
                                <div class="card mb-3">
                                    <div class="card-header"><i class="fas fa-table"></i> Clients List</div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" width="100%"
                                                cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <!-- Table Column Header -->
                                                        <th class="sorting_desc">ID</th>
                                                        <th class="sorting_desc">Name</th>
                                                        <th class="sorting_desc">Address</th>
                                                        <th class="sorting_desc">Phone</th>
                                                        <th class="sorting_desc">Email</th>
                                                        <th class="sorting_desc">Tva Number</th>
                                                        <th class="sorting_desc">Engineer</th>

                                                        <th class="sorting_desc">date_created</th>
                                                        <th class="sorting_desc">created_by</th>
                                                        <th class="sorting_desc">date_updated</th>
                                                        <th class="sorting_desc">updated_by</th>
                                                    </tr>
                                                </thead>
                                                <?php while ($row = mysqli_fetch_array($query)) { ?>
                                                <tr>
                                                    <td><?php echo $row['c_id']; ?></td>
                                                    <td><?php echo $row['cname']; ?></td>
                                                    <td><?php echo $row['caddress']; ?></td>
                                                    <td><?php echo $row['phone']; ?></td>
                                                    <td><?php echo $row['email']; ?></td>
                                                    <td><?php echo $row['tva_number']; ?></td>
                                                    <td><?php echo $row['engineer']; ?></td>
                                                    <td><?php echo $row['date_created']; ?></td>
                                                    <td><?php echo $row['created_by']; ?></td>
                                                    <td><?php echo $row['date_updated']; ?></td>
                                                    <td><?php echo $row['updated_by']; ?></td>
                                                </tr>
                                                <?php
            } ?>
                                            </table>
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