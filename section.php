<?php
include 'Connection.php';
session_start();
if(isset($_SESSION['User_Name']) || isset($_SESSION['Email_id'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>section</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/section.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/owl-carousel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                            <li class="scroll-to-section"><a href="section.php">Home</a></li>
                            <li class="scroll-to-section"><a href="#">Search</a></li>
                            <li class="scroll-to-section"><a href="Profile.php">Profile</a></li>
                            <li class="scroll-to-section"><a href="logout.php">Logout</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
<!--Main Section Start here-->
<div class=".container">
    <div class="main-box col-lg-6 col-md-8 col-sm-12 mx-auto">
        <div class="head-part">
            <div class="pro-image">
                <img src="../PS Photography/image/1459334253838_thumb.jpg" alt="Profile Image" class="profile-image"/>
            </div>                    
            <div class="user-name"><a href="Profile.html" style="color: black;">Akruti Studio</a></div>
        </div>
        <div class="body-part">
            <img src="../PS Photography/image/Fashion-Photography.jpg" alt="Post Image"/>

        </div>
        <div class="task-bar">
            <i class="far fa-heart"><span>55</span></i>
            <i class="far fa-comment"></i>
            <i class="far fa-handshake"></i>
            <i class="far fa-bookmark"></i>
        </div>
    </div>
    <div class="main-box col-lg-6 col-md-8 col-sm-12 mx-auto">
        <div class="head-part">
            <div class="pro-image">
                <img src="image/1459334253838_thumb.jpg" alt="Profile Image" class="profile-image"/>
            </div>                    
            <div class="user-name"><a href="Profile.html" style="color: black;">Akruti Studio</a></div>
        </div>
        <div class="body-part">
            <img src="../PS Photography/image/Wedding-Photography-3-1.jpg" alt="Post Image"/>
            
        </div>
        <div class="task-bar">
            <i class="far fa-heart"><span>20</span></i>
            <i class="far fa-comment"></i>
            <i class="far fa-handshake"></i>
            <i class="far fa-bookmark"></i>
        </div>
    </div>
    <div class="main-box col-lg-6 col-md-8 col-sm-12 mx-auto">
        <div class="head-part">
            <div class="pro-image">
                <img src="../PS Photography/image/1459334253838_thumb.jpg" alt="Profile Image"/>
            </div>                    
            <div class="user-name"><a href="Profile.html" style="color: black;">Akruti Studio</a></div>
        </div>
        <div class="body-part">
            <img src="../PS Photography/image/Sports-Photography-1.jpg" alt="Post Image"/>
            
        </div>
        <div class="task-bar">
            <i class="far fa-heart"><span>14</span></i>
            <i class="far fa-comment"></i>
            <i class="far fa-handshake"></i>
            <i class="far fa-bookmark"></i>
        </div>
    </div>
</div>
</body>
</html>
<?php
}else{ 
    header("Location: login.php");
}
?>