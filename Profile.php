<?php
include 'Connection.php';
session_start();
if(isset($_SESSION['User_name']) || isset($_SESSION['Email_id'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/profile.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="css/owl-carousel.css">
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
                            <li class="scroll-to-section"><a href="#">Upload</a></li>
                            <li class="scroll-to-section"><a href="Profile.php">Profile</a></li>
                            <li class="scroll-to-section"><a href="logout.php">Logout</a></li>
                        </ul>
                        <!--<a class='menu-trigger'>
                            <span>Menu</span>
                        </a>-->
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <?php
        $username = $_SESSION['User_name'];
        $user_query = "SELECT * FROM users WHERE User_Name='$username'";
        $user_query_img="SELECT *FROM userprofile WHERE User_Name='$username'";
        $result = mysqli_query($conn, $user_query);
        $result2 = mysqli_query($conn, $user_query_img);
        //$row=mysqli_fetch_array($result);

    ?>
    <!--Profile section Start-->
        <div class="container-fluid">
            <div class="row">
                <div class="user-profile col-lg-8 col-md-8 col-sm-12">
                    <div class="cover col-12">
                        <?php
                            if (mysqli_num_rows($result2)) {
                            $j=0;
                            while($fetch_img= mysqli_fetch_array($result2)){
                        ?>
                        <div class="cover-image" style="
                            background-image:url('<?php echo 'assets/Cover_Images/'.$fetch_img['Cover_image'];?>');
                            background-size: cover;
                            background-repeat: no-repeat;
                        ">
                            <div class="edit-cover"><i class="fas fa-ellipsis-v"></i></div>
                            <!-- <img src=" alt="no image"> -->
                        </div>
                        <div class="pro-img">
                            <div class="edit-pro"><i class="fas fa-camera"></i></div>
                            <img src="<?php echo 'assets\Profile_Images/'.$fetch_img['Profile_image'];?>" alt="no image">
                        </div>
                        <?php
                            $j++;
                            }
                        }
                        else{
                            echo "No result found";
                        }
                        ?>
                    </div>
                    <div class="user-name col-12">
                        <div class="name-info">
                        <?php
                        if (mysqli_num_rows($result) > 0){
                            $i=0;
                            while($row = mysqli_fetch_array($result)) {
                            ?>
                            <b><?php echo $row['First_Name']." ".$row['Last_Name'];?></b><br>
                            <span>&#64;<?php echo $row['User_Name']; ?></span> 
                            <?php
                                $i++;
                                }
                            }
                            else{
                                echo "No result found";
                            }
                            ?>  
                            <span>Professional Protographer</span>
                        </div>
                    </div>
                    <div class="user-rating d-flex justify-content-center">
                        <div class="count">
                            <b>6</b>
                            <span>Photos</span>
                        </div>
                        <div class="count">
                            <b>185</b>
                            <span>Likes</span>
                        </div>
                        <div class="count">
                            <b>3</b>
                            <span>Following</span>
                        </div>
                    </div>
                    <div class="control-btn d-flex justify-content-center">
                        <div class="user-button btn">Edit Profile<i class="fas fa-user-edit"></i></div>
                    </div>
                    <div class="user-post">
                        <div class="post-section">
                            <div class="post-nav">
                                    <a href="#photos" onclick="myFunction()"><div id="post">Photos</div></a>
                                    <a href="#about-pro" onclick="myFunction()"><div id="about-pro">About</div></a>
                                    <a href="#saved" onclick="myFunction()"><div id="saved">Saved</div></a>
                            </div>
                            <div class="user-info">
                                <b>About Protographer</b><br>
                                I am Rohan Patel<br>
                                I am a Professinal Photoghraphy<br>
                                More than 5 year od Expireance<br>
                                Services: Photo Shooting, Editting, Gift and many more
                            </div>
                            <div class="post-image d-flex justify-content-around">
                                <div class="post-box">
                                    <img src="../PS Photography/image/Sports-Photography-1.jpg" alt="no image">
                                </div>
                                <div class="post-box">
                                    <img src="../PS Photography/image/Wedding-Photography-3-1.jpg" alt="no image">
                                </div>
                                <div class="post-box">
                                    <img src="../PS Photography/image/Fashion-Photography.jpg" alt="no image">
                                </div>
                                <div class="post-box">
                                    <img src="../PS Photography/image/Product-Photography-2.jpg" alt="no image">
                                </div>
                                <div class="post-box">
                                    <img src="../PS Photography/image/Nature-Photography-2.jpg" alt="no image">
                                </div>
                                <div class="post-box">
                                    <img src="../PS Photography/image/Portrait-Photography.jpg" alt="no image">
                                </div>
                            </div>
                            <div class="row saved">
                                <div class="col-12">
                                    <div class="post-image d-flex justify-content-around">
                                        <div class="post-box">
                                            <img src="../PS Photography/image/Sports-Photography-1.jpg" alt="no image">
                                        </div>
                                        <div class="post-box">
                                            <img src="../PS Photography/image/Wedding-Photography-3-1.jpg" alt="no image">
                                        </div>
                                        <div class="post-box">
                                            <img src="../PS Photography/image/Fashion-Photography.jpg" alt="no image">
                                        </div>
                                        <div class="post-box">
                                            <img src="../PS Photography/image/Product-Photography-2.jpg" alt="no image">
                                        </div>
                                        <div class="post-box">
                                            <img src="../PS Photography/image/Nature-Photography-2.jpg" alt="no image">
                                        </div>
                                        <div class="post-box">
                                            <img src="../PS Photography/image/Portrait-Photography.jpg" alt="no image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--Profile section End-->
</body>
</html>
<?php } ?>