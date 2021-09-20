<?php  
	include 'Connection.php';
	session_start();   // session starts with the help of this function 
	if(isset($_SESSION['user_name']) || isset($_SESSION['Email_id']))   // Checking whether the session is already there or not if 
   	// true then header redirect it to the home page directly 
 	{
    	header("Location:section.php"); 
 	}
	if(isset($_POST['login']))   // it checks whether the user clicked login button or not 
	{
    	$username_id = $_POST['username_email_id'];
    	$password = $_POST['password'];
		$password_en=md5($password);

		$sql = "SELECT * FROM users WHERE (User_Name='$username_id' OR Email_Id='$username_id') AND Password='$password_en' ";
		$result = mysqli_query($conn, $sql);
		//$row = mysqli_fetch_assoc($result);
		$row_fetch=mysqli_num_rows($result);
		if($row_fetch == 0)
		{
?>
			<script>
				window.alert("Wrong username or password");
			</script>
			<meta http-equiv="refresh" content="1;url=login.php">
<?php
		}
		else
		{
			$row=mysqli_fetch_array($result);
			$_SESSION['User_name']=$row['User_Name'];
			$_SESSION['Email_id']=$row['Email_Id'];
			header('location: section.php');
		}
	}
?>