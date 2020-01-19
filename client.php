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
    <title>Dashboard - Admin</title>

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
                    <a class="nav-link" href="client.php">
                        <i class="fas fa-fw fa fa-users"></i>
                        <span>Client</span>
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
                    <a class="nav-link" href="payment.php">
                        <i class="fas fa-fw fa fa-credit-card"></i>
                        <span>payment</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="user.php">
                        <i class="fas fa-fw fa-user"></i>
                        <span>User</span></a>
                </li>

            </ul>

            <div id="content-wrapper">
            <div class="container-fluid">

            <!-- Table with query to fill it -->

            <?php $sql = 'SELECT c_id,cname,caddress,phone,email,tva_number,engineer FROM client';
                        $query = mysqli_query($con, $sql);

                        if (!$query) {
                            die('SQL Error:' . mysqli_error($con));
                        }
                        ?>




           <!-- DataTables Example -->
           <div class="card mb-3">
                            <div class="card-header"><i class="fas fa-table"></i> Member List</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                <tr>
                                    <th class="sorting_desc">Client Name</th>
                                    <th class="sorting_desc">Address</th>
                                    <th class="sorting_desc">Phone</th>
                                    <th class="sorting_desc">Email</th>
                                    <th class="sorting_desc">Tva Number</th>
                                    <th class="sorting_desc">Engineer</th>
                                </tr>
                            </thead>

                            <?php while ($row = mysqli_fetch_array($query)) { ?>
                            <tr>
                                <td><?php echo $row['cname']; ?></td>
                                <td><?php echo $row['caddress']; ?></td>
                                <td><?php echo $row['phone']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['tva_number']; ?></td>
                                <td><?php echo $row['engineer']; ?></td>

                                <td>
                                    <a href="" style="color:blue;"> <i class="fas fa-pen"></i></a>
                                    <a href="client.php?idd=<?php echo $row['c_id']; ?>"
                                        onclick="return confirm('Are you sure ?')" style="color:red;"><i
                                            class="fas fa-remove"></i></a>
                                </td>
                            </tr>
                            <?php
                        } ?>

                        </table>
                    </div>
                </div>

 <!-- Delete Query -->
 <?php
                            if (isset($_GET['idd'])) {
                                $idd = $_GET['idd'];
                                $sql = "Delete from member where m_id='" . $idd . "'";
                                if ($idd != '') {
                                    $query = mysqli_query($con, $sql);
                                    //header("Refresh:0; url=member.php");
                                }
                            }
                            ?>

                            <!-- session for add member button -->
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





            </div>


        </div>


            <div id="wrapper">
                <div id="content-wrapper">
                    <div class="container-fluid">


                        <section class="content">
                            <br>
                            <div class="col-md-12 box box-default">
                                <div class="box-header">
                                    <section class="content-header">
                                        <h1>
                                            <i class="fa fa-building"></i>
                                            Client
                                        </h1>
                                    </section>
                                </div>
                                <hr>

                                <div class="container" id="member-registration-container">
                                    <button type="button" class="btn btn-info" data-toggle="modal"
                                        data-target="#myModal"><i class="fas fa-plus" style="color: white;"></i>
                                        Client</button>
                                    <br> <br> <br>

                                    <!-- Table with query to fill it -->
                                    <!-- DataTables Example -->
                                    <div class="card mb-3">
                                        <div class="card-header"><i class="fas fa-table"></i> Client List</div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="dataTable" width="100%"
                                                    cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                        <th class="sorting_desc">Client Name</th>
                                    <th class="sorting_desc">Address</th>
                                    <th class="sorting_desc">Phone</th>
                                    <th class="sorting_desc">Email</th>
                                    <th class="sorting_desc">Tva Number</th>
                                    <th class="sorting_desc">Engineer</th>
                                                        </tr>
                                                    </thead>

                                                </table>
                                            </div>
                                        </div>

                                        <!-- Delete Query -->

                                        <!-- session for add member button -->


                                        <!-- ADD Client -->

                                        <div class="modal fade" id="myModal">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="card card-register">
                                                        <div class="card-header">Add Client</div>
                                                        <div class="card-body">
                                                            <form method="post" action="includes/phpScripts.php">
                                                                <div class="form-group">
                                                                    <input type="text" name="txtFName"
                                                                        placeholder="First Name" class="form-control"
                                                                        required="required">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" name="txtPhone"
                                                                        placeholder="Telephone" class="form-control"
                                                                        required="required">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="txtAddress" class="form-control"
                                                                        placeholder="Address" required="required">
                                                                </div>

                                                                <div class="form-group">
                                                                    <input type="email" name="txtEmail"
                                                                        placeholder="Email" class="form-control"
                                                                        required="required">
                                                                </div>

                                                                <div class="form-group">
                                                                    <input type="text" name="txtTva"
                                                                        placeholder="tva number" class="form-control"
                                                                        required="required">
                                                                </div>


                                                                <div class="form-group">
                                                                    <input type="text" name="txtEngineer"
                                                                        placeholder="engineer" class="form-control"
                                                                        required="required">
                                                                </div>

                                                                <div class="modal-footer">
                                                                    <button class="btn btn-md btn-primary"
                                                                        name="btnRegisterClient" class="modalButton"
                                                                        type="submit">Add Member</button>
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