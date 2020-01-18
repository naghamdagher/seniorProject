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
    <title>Document</title>

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
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
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
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
                    </div>
                </li>
            </ul>

        </nav>


        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="sidebar navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="payment.php">
                        <i class="fas fa-fw fa fa-credit-card"></i>
                        <span>payment</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="charts.html">
                        <i class="fas fa-fw fa-user"></i>
                        <span>User</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="tables.html">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Tables</span></a>
                </li>
            </ul>


            <!-- Table with query to fill it -->
            <?php $sql = 'SELECT ID,name,location FROM supplier';        
                $query = mysqli_query($con, $sql);
							if (!$query) {
							die('SQL Error:' . mysqli_error($con));
						}?>

            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    Data Table Example</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                                <tr>
                                    <th class="sorting_desc">Club Name</th>
                                    <th class="sorting_desc">Location</th>
                                    <th class="sorting_desc">Action</th>
                                </tr>
                            </thead>

                            <?php while ($row = mysqli_fetch_array($query)) { ?>
                                <tr>
                                    <td><?php echo $row['cl_name']; ?></td>
                                    <td><?php echo $row['cl_location']; ?></td>
                                    <td>
                                        <a href="" style="color:blue;"> <i class="fas fa-pen"></i></a>
                                        <a href="club.php?idd=<?php echo $row['cl_id']; ?>" onclick="return confirm('Are you sure ?')" style="color:red;"><i class="fas fa-remove"></i></a>
                                    </td>
                                </tr>
                            <?php
                        } ?>
                            
                        </table>
                    </div>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
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