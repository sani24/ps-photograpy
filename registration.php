<?php
include 'Connection.php';
session_start();
if(isset($_SESSION['user_id']) && $_SESSION['Email_id'] == 'user') {
    header("Location:/section.php");
}else{ 

?>
 <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ps photography";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }
        if(isset($_POST['sign-up'])){

            $FirstName=$_POST['first_name'];
            $LastName=$_POST['last_name'];
            $EmailId=$_POST['email_id'];
            $UserName=$_POST['user_name'];
            $Password=$_POST['password'];
            $encypt_pwd=md5($Password);

            if (empty($_POST['first_name']) ||
            empty($_POST['last_name']) ||
            empty($_POST['email_id']) ||
            empty($_POST['user_name']) ||
            empty($_POST['password'])) {
            
            die('Please fill all required fields!');
            }

            $CurrDate = date('Y-m-d H:i:s');

            $sql = "INSERT INTO users (`User_ID`, `User_Name`, `First_Name`, `Last_Name`, `Email_Id`, `Password`,`CreationDate`)VALUES (NULL, '$UserName', '$FirstName', '$LastName', '$EmailId', '$encypt_pwd','$CurrDate')";

            if (mysqli_query($conn, $sql)) {
                $_SESSION['User_name']=$UserName;
                $_SESSION['Email_id']=$EmailId;

                //default profile image and cover image store in database
                $def_pro_image="default_pro.png";
                $def_cover_image="default_cover.png";
                $query = "INSERT INTO userprofile (`User_Name`,`Profile_image`,`Cover_image`,`About_User`) VALUES('$UserName','$def_pro_image','$def_cover_image',NULL)";
                mysqli_query($conn,$query);

                header("Location: section.php");
            } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
        mysqli_close($conn);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PS Photography</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="registration.css">
    <script src="js/all.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#"><img src="image/logo.PNG" alt="PS Photography"></a>
    </nav>
    <div class="container mt-5">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" id="signup" class="p-md-4 p-4 mt-3" name="form" style="max-width: 28em ;margin: auto;">
            <div class="row">
                <h2 class="text-center m-auto display-5">Sign Up</h2>
            </div>
            <div class="row mt-4">
                <div class="form-field col-md-6 mb-4">
                    <input type="text" class="form-control" placeholder="Enter First Name" name="first_name">
                    <label for="first-name">First Name</label>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small> 
                </div>
                <div class="form-field col-md-6  mb-4" >
                    <input type="text" class="form-control" placeholder="Enter Last Name" name="last_name">
                    <label for="last-name">Last Name</label>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
            </div>
            <div class="row">
                <div class="form-field col-lg-12 mb-4">
                    <input type="email" name="email_id" class="form-control" placeholder="Enter Email id ">
                    <label for="email-id">Email ID</label>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
            </div>
            <div class="row">
                <div class="form-field col-lg-12 mb-4">
                    <input type="text" name="user_name" class="form-control" placeholder="Enter Username ">
                    <label for="user-name">Username</label>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
            </div>
            <div class="row">
                <div class="form-field col-lg-12 mb-4">
                    <input type="password" name="password" class="form-control" placeholder="Enter Password ">
                    <label for="password">Password</label>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
            </div>
            <div class="row">
                <div class="form-field col-lg-12 mb-4">
                    <input type="password" name="password_2" class="form-control" placeholder="Enter Confirm Password ">
                    <label for="password">Password</label>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <button id="submit-btn" name="sign-up" id="sign_up" type="submit" class="btn btn-block btn-danger"> Sign up </button>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-4">
                    <p class="text-center">have an account? <a href="login.php">Log in</a></p>
                </div>
            </div>
        </form>
    </div>
    <script src="js/app.js"></script>
   
</body>
</html>
<?php } ?>