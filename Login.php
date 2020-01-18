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
    <title>Login</title>
    <link rel="stylesheet" href="scriptfiles/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>


    <div id="login-form-wrap">


	<?php if (isset($_SESSION["success"])) { ?>
				<div class="alert alert-success">
					<strong>Success!</strong>
                     <?php echo $_SESSION["success"]; 
                     session_unset(); ?>
				</div>
			<?php 
	} ?>

			<?php if (isset($_SESSION["error"])) { ?>
				<div class="alert alert-danger">
					<strong>Alert!</strong> 
                    <?php echo $_SESSION["error"];
						session_unset(); ?>
				</div>
			<?php 
	} ?>

			<?php if (isset($_SESSION["expired_session"])) { ?>
				<div class="alert alert-danger">
					<strong>Alert!</strong> <?php echo $_SESSION["expired_session"];
						session_unset(); ?>
				</div>
			<?php 
	} ?>





       <form id="login-form" action="includes/phpScripts.php" method="post" class="form login">
            <h2>LOGIN</h2>
            <p>
                <input id="login__username" type="text" name="txtUsername" class="form__input" placeholder="Username"
                    required>
            </p>
            <p>
                <input id="login__password" type="password" name="txtPassword" class="form__input"
                    placeholder="Password" required>

            </p>
            <p>
                <input type="submit"  name="btnLogin" id="login" value="Login">
            </p>

        </form>

        <div id="create-account-wrap">
            <p>Not a member? <a href="#" style="color: #8e8e8a;">Contact admin</a></p>
        </div>
    </div>

    </div>




    <div class="footer">
    
        <div class="footer-copyright text-center py-3">
          <a href="Ulight.php" style="color: black;"> U-light</a> © 2020 
        </div>
       
      </div>

    <script>
        "use strict";
        let username = document.getElementById("username");
        let password = document.getElementById("password");

        let valid = false;


        function login() {

            for (let i = 0; i < users.length; i++) {
                if ((username.value == users[i]) && (password.value == userPass[i])) {
                    valid = true;
                }
            }

            if (valid != true) {
                document.write("<p>Invalid username or password</p>");
            } else {
                window.alert("Login successful");
            }
        }
    </script>
    <script src="scriptfiles/bootstrap.min.js"></script>
    <script src="scriptfiles/jquery-3.3.1.min.js"></script>
    <script src="scriptfiles/script.js"></script>
</body>


</html>