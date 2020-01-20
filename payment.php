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

            <section class="content">
                <br>
                <div class="col-md-12 box box-default">
                    <div class="box-header">
                        <section class="content-header">
                            <h1>
                                <i class="fa fa-group"></i>
                                Paymnent
                            </h1>
                        </section>
                    </div>
                    <hr>

                    <div class="container" id="member-registration-container">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal"><i
                                class="fas fa-plus" style="color: white;"></i> Clients</button>
                    </div>


                    <!-- Table with query to fill it -->

                    <?php $sql = 'SELECT c_id,cname,caddress,phone,email,tva_number,engineer FROM client';
                $query = mysqli_query($con, $sql);

                if (!$query) {
                    die('SQL Error:' . mysqli_error($con));
                }
                ?>

            	<!-- DataTables Example -->
							<div class="card mb-3">
								<div class="card-header"><i class="fas fa-table"></i> Payment List</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
											<thead>
												<tr>
													<!-- Table Column Header -->
													<th class="sorting_desc">Invoice Number</th>
													<th class="sorting_desc">Methode of Payment</th>
													<th class="sorting_desc">Payment Amount</th>
													<th class="sorting_desc">Payment Date</th>
													<th class="sorting_desc">Action</th>
												</tr>
											</thead>

											<?php while ($row = mysqli_fetch_array($query)) { ?>
												<tr>
													<td><?php echo $row['pay_id']; ?></td>
													<td><?php echo $row['mop_name']; ?></td>
													<td><?php echo $row['pay_amount']; ?></td>
													<td><?php echo $row['pay_date']; ?></td>
													<td>
														<a href="" style="color:blue;"><i class="fas fa-pen"></i></a>
														<a href="payment.php?idd=<?php echo $row['pay_id']; ?>" onclick="return confirm('Are you sure ?')" style="color:red;"><i class="fas fa-remove"></i></a>
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
									$sql = "Delete from payment where pay_id='" . $idd . "'";
									if ($idd != '') {
										$query = mysqli_query($con, $sql);
										//header("Refresh:0; url=payment.php");
									}
								}
								?>
							</div>

							<!-- session for add payment button -->
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

							<!-- ADD payment -->
							<div class="modal fade" id="myModal">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="card card-register">
											<div class="card-header">Add Payment</div>
											<div class="card-body">
												<form method="post" action="includes/phpScripts.php">
													<div class="form-group">
														<div class="col-md-9">
															<label>Invoice #</label>
															<input type="text" name="txtPayment-id" placeholder="Invoice Number" disabled="disabled" value="<?php echo $row['pay_id'] + "1"; ?>" class="form-control" required="required"> </div>
													</div>
													<br><br><br>
													<div class="form-group">
														<div class="col-md-6">
															<label>Method Of Payment</label>
															<select class="form-control" id="cbxMethodPayment" name="cbxMethodeOfPayment">
																<option disabled="disabled" selected="selected">Methode Of Payment</option>
																<option value="Cash">Cash</option>
																<option value="MasterCard">Master Card</option>
																<option value="VisaCard">Visa Card</option>
																<option value="Check">Check</option>
																<option value="Amex">Amex</option>
															</select>
														</div>
														<div class="form-group">
															<div class="col-md-6">
																<label>Clients</label>
																<select class="form-control" id="cbxPackages" name="cbxPackages" style="height:40px;">
																	
																</select>
															</div>
														</div>
														<br><br>
														<div class="form-group">
															<div class="col-md-6">
																<label>Total Amount</label>
																<input type="text" name="txtAmount" disabled="disabled" id="txtTotalAmount" value="50000" placeholder="Total Amount" class="form-control" required="required">
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-6">
																<label>Paid Amount</label>
																<input type="text" name="txtPaid" onchange="totalAmount()" id="txtPaid" placeholder="Paid" class="form-control" required="required">
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-6">
																<label>Remaining Amount</label>
																<input type="text" name="txtRemain" disabled="disabled" id="txtRemain" placeholder="Remain" class="form-control" required="required">
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-6">
																<label>Payment Date</label>
																<input type="date" name="pDate" placeholder="Payment Date" class="form-control" required="required">
															</div>
														</div>

														<div class="modal-footer">
															<button class="btn btn-md btn-primary" name="btnRegisterMember" class="modalButton" type="submit">
																Add payment</button>
															<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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