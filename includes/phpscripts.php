<?php
    include 'dbconnection.php';
    session_start();
    $message =  " ";


    // user login 
    if (isset($_POST["btnLogin"])) {
        $username = $_POST["txtUsername"];
        $password = ($_POST["txtPassword"]);
        $sql = "SELECT * From user WHERE  username = '$username' " ;
        $result = mysqli_query($con, $sql);
        $resultCheck = mysqli_num_rows($result);
        // if user 
        if ($resultCheck < 1) {
            header("Location: ../Ulight.php?login=error=0");
           
            $_SESSION["error"] = "Username/Password Error, Try Again!";
            exit();
        } else {
            if ($row = mysqli_fetch_assoc($result)) {
                    header("Location: ../dashboard.php?login=error=1");
              
                    exit();
                
             

            }
        }

    }



    // add client
if (isset($_POST["btnRegisterClient"])) {

	$name = $_POST["txtName"];
	$caddress = $_POST["txtAddress"];
	$phone = $_POST["txtPhone"];
	$email = $_POST["txtEmail"];
	$tva_number = $_POST["txtTva"];
	$engineer = $_POST["txtEngineer"];


	$sql = "INSERT INTO client(cname, caddress ,phone, email, tva_number , engineer)
	VALUES ('" . $name . "', '" . $address . "', '" . $phone . "', '" . $email . "','" . $tva_number . "', '" . $engineer . "')";

	if ($con->query($sql) === true) {
		$message = "New record created successfully";
		$_SESSION["success"] = $message;
		header("location: ../client.php");
	} else {
		$message = "Error: " . $sql . "<br>" . $con->error;
		$_SESSION["error"] = $message;
		header("location: ../client.php");
	}

	$con->close();
}


// add User
if (isset($_POST["btnRegisterUser"])) {

	$name = $_POST["txtUsername"];
	$password = $_POST["txtPassword"];
	$phone = $_POST["txtPhone"];
	$email = $_POST["txtEmail"];
	$address = $_POST["txtAddress"];
	$position = $_POST["txtPosition"];


	$sql = "INSERT INTO user(username, upassword ,phone, email, uaddress, position)
	VALUES ('" . $name . "', '" . $password . "', '" . $phone . "', '" . $email . "','" . $address . "'.'" . $position . "')";

	if ($con->query($sql) === true) {
		$message = "New record created successfully";
		$_SESSION["success"] = $message;
		header("location: ../user.php");
	} else {
		$message = "Error: " . $sql . "<br>" . $con->error;
		$_SESSION["error"] = $message;
		header("location: ../user.php");
	}

	$con->close();
}

///add store
if (isset($_POST["btnRegisterStore"])) {

	$name = $_POST["txtName"];
	$location = $_POST["txtLocation"];
	$branch = $_POST["txtBranch"];
	$description = $_POST["txtDescription"];


	$sql = "INSERT INTO store(sname, slocation , branch, sdescription)
	VALUES ('" . $name . "', '" . $location . "', '" . $branch . "', '" . $description . "')";

	if ($con->query($sql) === true) {
		$message = "New record created successfully";
		$_SESSION["success"] = $message;
		header("location: ../store.php");
	} else {
		$message = "Error: " . $sql . "<br>" . $con->error;
		$_SESSION["error"] = $message;
		header("location: ../store.php");
	}

	$con->close();
}



////contractor
if (isset($_POST["btnRegisterContractor"])) {

	$name = $_POST["txtName"];
	$address = $_POST["txtAddress"];
	$phone = $_POST["txtPhone"];
	$email = $_POST["txtEmail"];
    $tva_number = $_POST["txtTva"];
    $engineer = $_POST["txtengineer"];

	$sql = "INSERT INTO contractor(cname, caddress ,phone, email, tva_number, engineer)
	VALUES ('" . $name . "', '" . $address . "', '" . $phone . "', '" . $email . "','" . $tva_number . "','". $engineer ."')";

	if ($con->query($sql) === true) {
		$message = "New record created successfully";
		$_SESSION["success"] = $message;
		header("location: ../contractor.php");
	} else {
		$message = "Error: " . $sql . "<br>" . $con->error;
		$_SESSION["error"] = $message;
		header("location: ../contractor.php");
	}

	$con->close();
}

// product
if (isset($_POST["btnRegisterProduct"])) {

	$code = $_POST["txtCode"];
	$name = $_POST["txtName"];
	$description = $_POST["txtDescription"];
	$unit = $_POST["txtUnit"];
	$quantity = $_POST["txtQtt"];


	$sql = "INSERT INTO product(p_code, pname, pdescription, p_unit, quantity_by_box)
	VALUES ('" . $code . "', '" . $name . "', '" . $description . "', '" . $unit . "','" . $quantity . "')";

	if ($con->query($sql) === true) {
		$message = "New record created successfully";
		$_SESSION["success"] = $message;
		header("location: ../product.php");
	} else {
		$message = "Error: " . $sql . "<br>" . $con->error;
		$_SESSION["error"] = $message;
		header("location: ../product.php");
	}

	$con->close();
}

// payment
if (isset($_POST["btnSavePrint"])) {
	$Methode_of_Payment = $_POST["cbxMethodeOfPayment"];
	$Payment_Date = $_POST["pDate"];
	$Subscription_number = $_POST["txtSubscription-number"];
	$Total_Amount = $_POST["txtAmount"];
	$Paid = $_POST["txtPaid"];
	$Remain = $_POST["txtRemain"];

	$sql = "INSERT INTO payment(mop_name,sub_id,pay_amount,pay_date) VALUES ('" . $Methode_of_Payment . "', '" . $Subscription_number . "', '" . $Paid . "','" . $Payment_Date . "')";

	if ($con->query($sql) === true) {
		$message = "New record created successfully";
		$_SESSION["success"] = $message;
		header("location: ../payment.php");
	} else {
		$message = "Error: " . $sql . "<br>" . $con->error;
		$_SESSION["error"] = $message;
		header("location: ../payment..php");
	}

	$con->close();
}
