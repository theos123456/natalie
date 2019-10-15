<?php
@session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>House publication management system</title>
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
				<li class="nav-item">
                    <a class="nav-link" href="index.php" style="color:white;">Login</a>
                </li>
            </ul>

	<div class="limiter">
    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="registration.php">
					

					<span class="login100-form-title p-b-34 p-t-27">
						Register
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter firstname">
						<input class="input100" type="text" name="fname" placeholder="first name" >
						<span class="focus-input100" data-placeholder="&#xf205;"></span>
						<?php 
		   if(isset($_POST['register'])){
		    if (!empty($_POST['fname']))
		     {
			    $fname=$_POST['fname'];
				if (preg_match("#[a-zA-Z0-9]#","$fname"))
			   {
				$fname=$_POST['fname'];
			   }
			   else
			   {
			   ?>
				  <tr><td align="center" style="color:red; padding:1px; font-weight:bold;">use character only!!</td></tr>
			   <?php	  
			   }
				
		       }
		 else
		 {
		?>
		
		<tr><td align="center" style="color:red; padding:1px; font-weight:bold;">* Your first name, please!</td></tr>
	    <?php
			
		   }}
		   ?>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Enter last name">
						<input class="input100" type="text" name="lname" placeholder="last name">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
						<?php 
		   if(isset($_POST['register'])){
		    if (!empty($_POST['lname']))
		     {
			    $lname=$_POST['fname'];
				if (preg_match("#[a-zA-Z0-9]#","$lname"))
			   {
				$lname=$_POST['lname'];
			   }
			   else
			   {
			   ?>
				  <tr><td align="center" style="color:red; padding:1px; font-weight:bold;">use character only!!</td></tr>
			   <?php	  
			   }
				
		       }
		 else
		 {
		?>
		
		<tr><td align="center" style="color:red; padding:1px; font-weight:bold;">* Your last name, please!</td></tr>
	    <?php
			
		   }}
		   ?>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "Enter district">
						<input class="input100" type="text" name="district" placeholder="district">
						<span class="focus-input100" data-placeholder="&#xf215;"></span>
						<?php 
		   if(isset($_POST['register'])){
		    if (!empty($_POST['district']))
		     {
			    $district=$_POST['district'];
				if (preg_match("#[a-zA-Z0-9]#","$district"))
			   {
				$fname=$_POST['district'];
			   }
			   else
			   {
			   ?>
				  <tr><td align="center" style="color:red; padding:1px; font-weight:bold;">use character only!!</td></tr>
			   <?php	  
			   }
				
		       }
		 else
		 {
		?>
		
		<tr><td align="center" style="color:red; padding:1px; font-weight:bold;">* Your district, please!</td></tr>
	    <?php
			
		   }}
		   ?>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "Enter sector">
						<input class="input100" type="text" name="sector" placeholder="sector">
						<span class="focus-input100" data-placeholder="&#xf215;"></span>
						<?php 
		   if(isset($_POST['register'])){
		    if (!empty($_POST['sector']))
		     {
			    $sector=$_POST['sector'];
				if (preg_match("#[a-zA-Z0-9]#","$sector"))
			   {
				$sector=$_POST['sector'];
			   }
			   else
			   {
			   ?>
				  <tr><td align="center" style="color:red; padding:1px; font-weight:bold;">use character only!!</td></tr>
			   <?php	  
			   }
				
		       }
		 else
		 {
		?>
		
		<tr><td align="center" style="color:red; padding:1px; font-weight:bold;">* Your sector, please!</td></tr>
	    <?php
			
		   }}
		   ?>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "Enter email">
						<input class="input100" type="email" name="email" placeholder="email">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
						<?php 
if(isset($_POST['email']))
{
$email = $_POST["email"];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
?>
    <tr><td align="center" style="color:red; padding:1px; font-weight:bold;">email should contain @ and . character</td></tr>
<?php
}
else{$email1=$_POST["email"];}
}
?>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "enter your phone nbr">
						<input class="input100" type="text" name="phone" placeholder="phone">
						<span class="focus-input100" data-placeholder="&#xf129;"></span>
						<?php 
			if(isset($_POST['register'])){
		    if (!empty($_POST['phone']))
		     {
			    $phone=$_POST['phone'];
			    if (preg_match("#^0[7-8][0-9]{8}$#","$phone"))
			   {
			       $phone1=$_POST['phone'];
			   }
			   else
			   {
			   ?>
				  <tr><td align="center" style="color:red; padding:1px; font-weight:bold;">Invalid phone number!!</td></tr>
			   <?php 
			   }
			  
		 }
		 else
		 {
			 ?>
				  <tr><td align="center" style="color:red; padding:1px; font-weight:bold;">Your phone number, please!!</td></tr>
			   <?php
			   }}
		   ?>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "enter your username">
						<input class="input100" type="text" name="username" placeholder="username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
						<?php 
		   if(isset($_POST['register'])){
		    if (!empty($_POST['username']))
		     {
			    $user=$_POST['username'];
				if (preg_match("#[a-zA-Z]#","$user"))
			   {
				$username=$_POST['username'];
			   }
			   else
			   {
			   ?>
				  <tr><td align="center" style="color:red; padding:1px; font-weight:bold;">use character only!!</td></tr>
			   <?php	  
			   }
				
		       }
		   }
		   ?>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password"  minlength="6" maxlength="8">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="confirm password">
						<input class="input100" type="password" name="cpass" placeholder="Confirm Password"  minlength="6" maxlength="8">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<?php 


if(isset($_POST['register']))
{
			  $password1=$_POST['pass'];
			  $cpassword=$_POST['cpass'];
			 
			  
//if(!empty($password1) and !empty($cpassword) and !empty($fname) and !empty($lname) and !empty($email) and !empty($phone) and !empty($sector) and !empty($district) and !empty($username))
//{
if($password1!=$cpassword)
{
echo"<script>alert('password and its confirm mismatch')</script>";
	return false;
}
else
{
}
	$conn=mysqli_connect('localhost','root','','house') or die('Connection fail');
	if(!$conn){
		die(mysqli_connect_error());
	}
	else{
	/*if(isset($_POST['register']))
	{
	 $first=$_POST['fname'];
	 $last=$_POST['lname'];
	 $district=$_POST['district'];
	 $sector=$_POST['sector'];
	 $email=$_POST['email'];
	 $phone=$_POST['phone'];
	 $username=$_POST['username'];
	 $password=$_POST['pass'];
	 //$date = date("d-m-Y"); */
	 
	
	
	 $sql2 = "INSERT INTO user (firstname,lastname,district,sector,email,phone,username,password)
	VALUES ( '$first','$last','$district','$sector','$email','$phone','$username','$password1')" or die(mysql_error());
	 if ($conn->query($sql2) == TRUE )
	 {
	   echo "<script>alert('user registered very well')</script>";
	 }
	 else
	 {
	   echo "<script>alert('user NOT registered')</script>";
	 }
	}
	
}		

?>                    
                    <div class="container-login100-form-btn">
						<button class="login100-form-btn" name="register">
							Register
						</button>
					</div>


					<div class="text-center p-t-90">
						Don't you have account?<a class="txt1" href="index.php">
							Login
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