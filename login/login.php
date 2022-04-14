<!DOCTYPE html>
<html lang="en">
<head>
	<title>login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
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
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form method="POST" class="login100-form validate-form">
					<span class="login100-form-title p-b-43">
						Login to continue
					</span>
					<?php
					include "../connect.php";
					if(isset($_POST['login'])){
						$email=$_POST['email'];
						$password=md5($_POST['password']);
						$sql="SELECT * FROM `members` WHERE email='$email'";
						$results=mysqli_query($conn,$sql);
						$row=mysqli_fetch_array($results);
						if($row['email']==$email)
						{
//confirming if the email is registered
							$sql1="SELECT * FROM `members` WHERE email='$email' AND password='$password'";
							$result=mysqli_query($conn,$sql1);
							if($result){
								$data=mysqli_num_rows($result);
								if($data==1){
									while($row=mysqli_fetch_array($result)){
										$id=$row['id'];
										$fname=$row['fname'];
										$usertype=$row['usertype'];
										$lname=$row['lname'];

										if($usertype=='admin'){
											session_start();
											$_SESSION['loggedin']=true;
											$_SESSION['id']=$id;
											$_SESSION['fname']=$fname;
											$_SESSION['usertype']=$usertype;
											$_SESSION['lname']=$lname;

											header("location:../admin/index.php");
										}else{
											session_start();
											$_SESSION['loggedin']=true;
											$_SESSION['id']=$id;
											$_SESSION['fname']=$fname;
											$_SESSION['lname']=$lname;

											header("location:../members.php");

										}
									
									}

								}else{
									echo "<div class='alert alert-danger'>";
							echo"Oops! Wrong credentials";
							echo "</div>";
								
								}
							}
						}else{
							echo "<div class='alert alert-danger'>";
							echo"Oops! User does not exist";
							echo "</div>";
						}

					}

					?>
				
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn"name="login">
							Login
						</button>
					</div>
					
					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							Not a member?<a href="../register/register.php"><span style="clor:red">REGISTER</span></a>
						</span>
					</div>

					<div class="login100-form-social flex-c-m">
						<a href="../index.html" class="login100-form-social-item flex-c-m bg1 m-r-5">
							<i class="fa fa-home fa-2x" aria-hidden="true"></i>
						</a>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('images/bg-01.jpg');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
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