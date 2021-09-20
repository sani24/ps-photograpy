<?php  
	require 'Connection.php';
	session_start();   // session starts with the help of this function 
	if(isset($_SESSION['user_name']) || isset($_SESSION['Email_id']))   // Checking whether the session is already there or not if 
   	// true then header redirect it to the home page directly 
 	{
    	header("Location:section.php"); 
 	}
    else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/header.css">
</head>
<body>
    <header class="header-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo"><img src="image/logo.PNG" alt="PS Photography"></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                        </ul>
                       
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="box">
            <div class="heading">Login</div>
            <form class="login-form" method="post" action="Login_script.php">
                <div class="field">
                    <input id="username" name="username_email_id" type="name" placeholder="Phone number, username, or email" />
                    <label for="username">Username or email id</label>
                </div>
                <div class="field">
                    <input id="password" name="password" type="password" placeholder="password" />
                    <label for="password">Password</label>
                </div>
                <button class="login-button" title="login" name="login">Log In</button>
                <div class="separator">
                    <div class="line"></div>
                    <p>OR</p>
                    <div class="line"></div>
                </div>
                <div class="other">
                    <a class="forgot-password" href="#">Forgot password?</a>
                </div>
            </form>
        </div>
        <div class="box">
            <p>Don't have an account? <a class="signup" href="Registration.php">Sign Up</a></p>
        </div>
    </div>
</body>
</html>
<?php } ?>