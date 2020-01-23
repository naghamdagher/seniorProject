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
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
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

                    <section class="content">

                        <div class="col-md-12 box box-default">
                            <h1>
                                <i class="fa fa-group"></i>
                                Payment
                            </h1>
                            <hr>

                            <div class="container" id="member-registration-container">
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal"><i
                                        class="fas fa-plus" style="color: white;"></i> Payments</button>
                            </div>


                            <!-- Table with query to fill it -->

                            <?php $sql = 'SELECT p_id,payment_date,	transaction_ID,amount,tva,discount,total,method_of_payment, currency FROM payment';
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
                                                    <th class="sorting_desc">Payment Date</th>
                                                    <th class="sorting_desc">Tansaction Number</th>
                                                    <th class="sorting_desc">Payment Amount</th>
                                                    <th class="sorting_desc">Payment Tva</th>
                                                    <th class="sorting_desc">Payment Discount</th>
                                                    <th class="sorting_desc">Payment Total</th>
                                                    <th class="sorting_desc">Payment Method</th>
                                                    <th class="sorting_desc">Payment Currency</th>
                                                </tr>
                                            </thead>

                                            <?php while ($row = mysqli_fetch_array($query)) { ?>
                                            <tr>

                                                <td><?php echo $row['payment_date']; ?></td>
                                                <td><?php echo $row['transaction_ID']; ?></td>
                                                <td><?php echo $row['amount']; ?></td>
                                                <td><?php echo $row['tva']; ?></td>
                                                <td><?php echo $row['discount']; ?></td>
                                                <td><?php echo $row['total']; ?></td>
                                                <td><?php echo $row['method_of_payment']; ?></td>
                                                <td><?php echo $row['currency']; ?></td>

                                                <td>
                                                    <a href="payment.php?idd=<?php echo $row['p_id']; ?>"
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
									$sql = "Delete from payment where p_id='" . $idd . "'";
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
                                                            <input type="text" name="txtid" placeholder="Invoice Number"
                                                                disabled="disabled"
                                                                value="<?php echo $row['p_id'] + "1"; ?>"
                                                                class="form-control" required="required"> </div>
                                                    </div>
                                                    <br><br><br>
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label>Payment Date</label>
                                                            <input type="date" name="txtDate" placeholder="Payment Date"
                                                                class="form-control" required="required">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label>Client Name</label>


                                                            <?php

																		echo '<select class="form-control" id="cbxPackages" name="cbxPackages" style="height:40px;">	

																		<option>Select</option>';

																		$sqli = "SELECT cname FROM client";
																		$result = mysqli_query($con, $sqli);
																		while ($row = mysqli_fetch_array($result)) {
																		echo '<option>'.$row['cname'].'</option>';
																		}

																		echo '</select>';

																		?>

                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label>Product </label>



            <!--?php

                        echo '<select class="form-control" id="cbxPackages" name="cbxPackages" style="height:40px;">	

                        <option>Select</option>';

                        $sqli = "SELECT pname FROM product";
                        $result = mysqli_query($con, $sqli);
                        while ($row = mysqli_fetch_array($result)) {
                        echo '<option>'.$row['pname'].'</option>';
                        }

                        echo '</select>';

                        ?>-->



<!--?php

$query = $mysqli->query("SELECT * FROM products");
    echo '<select class="form-control" id="cbxPackages" name="cbxPackages" style="height:40px;"
     onChange="$(#output).val($(this).find('option:selected').attr('price'))">';
        while($obj = $query->fetch_object()){
            echo '
                <option value"'.$obj->product_name.'" price="'.$obj->price.'">'.$obj->product_name.'</option>
        ';
    }
    echo '</select>';
    echo '<input id="output" value="">';
?>-->

                                                            </select>
                                                        </div>
                                                    </div>

                                                    <br><br>

                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label>Amount</label>
                                                            <input type="text" name="txtAmount" disabled="disabled"
                                                                id="txtAmount" value="total taba3 l items"
                                                                placeholder="Total Amount" class="form-control"
                                                                required="required">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label>TVA %</label>
                                                            <input type="text" name="txtTVA" disabled="disabled"
                                                                id="txtTva" value="pre set by admin"
                                                                placeholder="Total Amount" class="form-control"
                                                                required="required">
                                                        </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label>Payment Discount</label>
                                                            <input type="text" name="txtDiscount"
                                                                onchange="totalAmount()" id="txtDiscount"
                                                                placeholder="Discount" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label>Total Amount</label>
                                                            <input type="text" name="txtTotal" disabled="disabled"
                                                                id="txtTotal" placeholder="Total" class="form-control"
                                                                required="required">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label>Method Of Payment</label>
                                                            <select class="form-control" id="cbxMethodPayment"
                                                                name="cbxMethodeOfPayment">
                                                                <option disabled="disabled" selected="selected">Method
                                                                    Of Payment</option>
                                                                <option value="Cash">Cash</option>
                                                                <option value="MasterCard">Master Card</option>
                                                                <option value="VisaCard">Visa Card</option>
                                                                <option value="Check">Check</option>
                                                                <option value="Amex">Amex</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-md-6">
                                                                <label>Currency Of Payment</label>
                                                                <select class="form-control" id="cbxCurrencyPayment"
                                                                    name="cbxCurrencyOfPayment">
                                                                    <option disabled="disabled" selected="selected">
                                                                        Currency Of Payment</option>
                                                                    <option value="LBP">LBP</option>
                                                                    <option value="USD">USD</option>
                                                                    <option value="Euro">Euro</option>
                                                                    <option value="Pound">Pound</option>
                                                                    <option value="YUAN">YUAN</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-md-6">
                                                                    <label>Paid Amount</label>
                                                                    <input type="text" name="txtPaid"
                                                                        onchange="totalAmount()" id="txtPaid"
                                                                        placeholder="Paid" class="form-control"
                                                                        required="required">
                                                                </div>
                                                            </div>


                                                            <div class="form-group">
                                                                <div class="col-md-6">
                                                                    <label>Remaining Amount</label>
                                                                    <input type="text" name="txtRemain"
                                                                        disabled="disabled" id="txtRemain"
                                                                        placeholder="Remain" class="form-control"
                                                                        required="required">
                                                                </div>
                                                            </div>


                                                            <div class="modal-footer">
                                                                <button class="btn btn-md btn-primary"
                                                                    name="btnRegisterPayment" class="modalButton"
                                                                    type="submit">
                                                                    Add payment</button>
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