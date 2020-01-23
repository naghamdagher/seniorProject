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
	VALUES ('" . $name . "', '" . $password . "', '" . $phone . "', '" . $email . "','" . $address . "','" . $position . "')";

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
	$price = $_POST["txtPrice"];
	$quantity = $_POST["txtQtt"];


	$sql = "INSERT INTO product(p_code, pname, pdescription, p_unit,price,quantity_by_box)
	VALUES ('" . $code . "', '" . $name . "', '" . $description . "', '" . $unit . "','" . $price . "','" . $quantity . "')";

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
if (isset($_POST["btnRegisterPayment"])) {
	
	$Payment_Date = $_POST["txtDate"];
	$Transaction_ID = $_POST["txtid"];
	$Amount = $_POST["txtAmount"];
	$TVA = $_POST["txtTVA"];
	$Discount = $_POST["txtDiscount"];
	$Total_Amount = $_POST["txtTotal"];
	$Methode_of_Payment = $_POST["cbxMethodeOfPayment"];
	$Currency =$_POST["cbxCurrencyOfPayment"];

	$sql = "INSERT INTO payment(payment_date ,transaction_ID,amount,tva, discount, total, method_of_payment, currency)
	 VALUES ('" . $Payment_Date . "', '" . $Transaction_ID . "', '" . $Amount . "','" . $TVA . "','" . $Discount . "','" . $Total_Amount . "','" . $Methode_of_Payment . "','" . $Currency . "')";

	if ($con->query($sql) === true) {
		$message = "New record created successfully";
		$_SESSION["success"] = $message;
		header("location: ../payment.php");
	} else {
		$message = "Error: " . $sql . "<br>" . $con->error;
		$_SESSION["error"] = $message;
		header("location: ../payment.php");
	}

	$con->close();
}


// price list header
if (isset($_POST["btnRegisterPriceList"])) {
	
	$Contractor = $_POST["txtContractor"];
	$Year = $_POST["txtYear"];
	$Version = $_POST["txtVersion"];
	$Active = $_POST["txtActive"];
	$Name = $_POST["txtName"];
	$Description = $_POST["txtDescription"];

	$sql = "INSERT INTO price_list_header(contractor ,lyear,lversion,l_active, lname, ldescription)
	 VALUES ('" . $Contractor . "', '" . $Year . "', '" . $Version . "','" . $Active . "','" . $Name . "','" . $Description . "')";

	if ($con->query($sql) === true) {
		$message = "New record created successfully";
		$_SESSION["success"] = $message;
		header("location: ../price.php");
	} else {
		$message = "Error: " . $sql . "<br>" . $con->error;
		$_SESSION["error"] = $message;
		header("location: ../price..php");
	}

	$con->close();
}


// product price 
if (isset($_POST["btnRegisterProductPrice"])) {
	
	$Product_ID = $_POST["txtID"];
	$Product = $_POST["txtName"];
	$Description = $_POST["txtDescription"];
	$Price = $_POST["txtPrice"];

	$sql = "INSERT INTO price_list(product_price_ID ,product_price_name,product_price_description,price)
	 VALUES ('" . $Product_ID . "', '" . $Product . "', '" . $Description . "','" . $Price . "')";

	if ($con->query($sql) === true) {
		$message = "New record created successfully";
		$_SESSION["success"] = $message;
		header("location: ../price.php");
	} else {
		$message = "Error: " . $sql . "<br>" . $con->error;
		$_SESSION["error"] = $message;
		header("location: ../price..php");
	}

	$con->close();
}


// add in transaction
if (isset($_POST["btnaddItem"])) {
	
	$Product_ID = $_POST["txtID"];
	$Product = $_POST["txtName"];
	$Description = $_POST["txtDescription"];
	$Price = $_POST["txtPrice"];
	$Qtt = $_GET["txtQtt"];
	$Total = $Price *$Qtt;

	$sql = "INSERT INTO ttransaction(product_list_price_ID ,product_name,product_description,product_quantity,
	product_price,ttotal	)
	 VALUES ('" . $Product_ID . "', '" . $Product . "', '" . $Description . "','" . $Price . "','" . $Qtt . "','" . $Total . "')";

	if ($con->query($sql) === true) {
		$message = "New record created successfully";
		$_SESSION["success"] = $message;
		header("location: ../invoice.php");
	} else {
		$message = "Error: " . $sql . "<br>" . $con->error;
		$_SESSION["error"] = $message;
		header("location: ../invoice..php");
	}

	$con->close();
}