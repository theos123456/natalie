<?php
@session_start();
$conn=mysqli_connect('localhost','root','','house') or die('Connection fails');
if(isset($_POST['login']))
{
    if(isset($_POST['username']))
    {
        $username=$_POST['username'];
        $_SESSION['username'] = $username;
       
    }
    if(isset($_POST['pass']))
    {
        $password=$_POST['pass'];
    }
    $query=mysqli_query($conn,"select * from user where username='$username' and  password='$password' ") or die("selecting error");
    $count=mysqli_num_rows($query);
	$row=mysqli_fetch_assoc($query);
    $uid=$row['uid'];
    $_SESSION['uid']=$uid;
    $fname=$row['firstname'];
    $_SESSION['fname']=$fname;
    
    if($count==1 and $row['type']=='publisher')
    {
        
        echo"<script>location.href='../../dashboard/production';</script>";
    }
   else if($count==1 and $row['type']=='admin')
   {
        
	echo"<script>location.href='../../admin/production';</script>";   
	 }

    else{
        echo "<script>alert('username or password incorrect')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>House publication system</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
<ul class="nav justify-content-end" style="background:#7579ff;height:70px;padding:18px;">
                <li class="nav-item" style="color:white;">
                    <a class="nav-link" href="../../index.php" style="color:white;">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color:white;">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color:white;">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registration.php" style="color:white;">Register</a>
                </li>
            </ul>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
			<form class="login100-form validate-form" method="POST" action="index.php">
					<span class="login100-form-logo">
						<img src="images/user.jpg" height="87px">
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="login">
							Login
						</button>
					</div>
					<div class="text-center p-t-90">
						Don't you have account?<a class="txt1" href="registration.php">
							Register
						</a>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="#">
							Forgot Password?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>