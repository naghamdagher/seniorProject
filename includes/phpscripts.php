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
	$address = $_POST["txtAdress"];
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

///add store



////contractor

// product