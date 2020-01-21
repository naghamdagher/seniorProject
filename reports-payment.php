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

</div>
</body>
</html>