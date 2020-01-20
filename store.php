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

                    <section class="content">
                        <br>
                        <div class="col-md-12 box box-default">
                            <div class="box-header">
                                <section class="content-header">
                                    <h1>
                                        <i class="fa fa-group"></i>
                                        Store
                                    </h1>
                                </section>
                            </div>
                            <hr>

                            <div class="container" id="member-registration-container">
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal"><i
                                        class="fas fa-plus" style="color: white;"></i> Stores</button>
                            </div>


                            <!-- Table with query to fill it -->

                            <?php $sql = 'SELECT s_id, sname, slocation, branch, sdescription FROM store';
                        $query = mysqli_query($con, $sql);

                        if (!$query) {
                            die('SQL Error:' . mysqli_error($con));
                        }
                        ?>

                            <!-- DataTables Example -->
                            <div class="card mb-3">
                                <div class="card-header"><i class="fas fa-table"></i> Stores List</div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th class="sorting_desc">Store Name</th>
                                                    <th class="sorting_desc">Store Address</th>
                                                    <th class="sorting_desc">Store Branch</th>
                                                    <th class="sorting_desc">Store description</th>
                                                </tr>
                                            </thead>

                                            <?php while ($row = mysqli_fetch_array($query)) { ?>
                                            <tr>
                                                <td><?php echo $row['sname']; ?></td>
                                                <td><?php echo $row['slocation']; ?></td>
                                                <td><?php echo $row['branch']; ?></td>
                                                <td><?php echo $row['sdescription']; ?></td>
                                                
                                                <td>
                                                    <a href="" style="color:blue;"> <i class="fas fa-pen"></i></a>
                                                    <a href="contractor.php?idd=<?php echo $row['s_id']; ?>"
                                                        onclick="return confirm('Are you sure ?')" style="color:red;"><i
                                                            class="fas fa-trash"></i></a>
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
                                $sql = "Delete from store where s_id='" . $idd . "'";
                                if ($idd != '') {
                                    $query = mysqli_query($con, $sql);
                                    //header("Refresh:0; url=member.php");
                                }
                            }
                            ?>

                                <!-- session for add store button -->
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


                                <!-- ADD Store -->

                                <div class="modal fade" id="myModal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="card card-register">
                                                <div class="card-header">Add Store</div>
                                                <div class="card-body">
                                                    <form method="post" action="includes/phpScripts.php">
                                                        <div class="form-group">
                                                            <input type="text" name="txtName" placeholder="Name"
                                                                class="form-control" required="required">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="txtLocation" class="form-control"
                                                                placeholder="Location" required="required">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="txtBranch" class="form-control"
                                                                placeholder="Branch" required="required">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="txtDescription" placeholder="Description"
                                                                class="form-control" required="required">
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button class="btn btn-md btn-primary"
                                                                name="btnRegisterStore" class="modalButton"
                                                                type="submit">Add Store</button>
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
                    </section>
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