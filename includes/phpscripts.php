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


