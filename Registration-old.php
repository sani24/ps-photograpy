<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/login.css">   
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
            <div class="heading">Sign up</div>
            <form class="login-form" onsubmit="return validate()" action="Registration.php" method="psot">
            <div class="field">
                    <input id="first_name" name="first_name" placeholder="First Name"/> 
                    <label for="first-name">First Name</label>
                    <span id="msg-Fname"></span>
                </div>
                <div class="field">
                    <input id="last-name" name="last_name" placeholder="Last Name"/>
                    <label for="last-name">Last Name</label>
                    <span id="msg-Lname"></span>
                </div>
                <div class="field">
                    <input id="email-id" name="Email_Id" type="email" placeholder="Email ID" />
                    <label for="email-id">Email ID</label>
                    <span id="for-correction"></span>
                    <span id="msg-email"></span>
                </div>
                <div class="field">
                    <input id="user-name" name="username" placeholder="Username"/>
                    <label for="user-name">Username</label>
                    <span id="msg-userName"></span>
                </div>
                <div class="field">
                    <input id="password" name="Password" type="password" placeholder="password"/>
                    <label for="password">Password</label>
                    <span id="msg-password"></span>
                </div>
                <button class="login-button" name="sign_up" type="submit" value="submit">Sign up</button>
            </form>
            <p>have an account? <a class="signup" href="Login.html">Log in</a></p>
        </div>
    </div>
    <script src="js/validation.js"></script>
</body>
</html>