<!-------------------------------------------------------------------------------------------------->
<?php 

	
	
	include '../controllers/LoginPanelController.php';
	
	
?>

<html>
<head>
 <link rel="stylesheet" href="../views/styles/style.css">
 
 <script>
			function validate_form()
			{
				user_name=document.getElementById("user_name").value;
				password=document.getElementById("password").value;
				var valid=false;
				if(user_name == "" )
				{
					valid=false;
					document.getElementById("err_user_name").innerHTML="Name Required";
				}
				else
				{
					document.getElementById("err_user_name").innerHTML="";
					valid=true;
				}
				if(password == "" )
				{
					valid=false;
					document.getElementById("err_password").innerHTML="Password Required";
				}
				else
				{
					document.getElementById("err_password").innerHTML="";
					valid=true;
				}
				return valid;
			}
		</script>
</head>


<body>
	<div class="wrapper fadeInDown">
  
	  <div id="formContent">
		<!-- Tabs Titles -->
		<h2 class="active"> Sign In </h2>
		<h2 class="inactive underlineHover"><a href="../views/registration.php">Sign Up</a> </h2>

			<!-- Icon -->
			<div class="fadeIn first">
			<a href="../views/welcome_page.php">  <img src="../storage/images/photo.png" id="icon" alt="User Icon"/></a>
			</div>

			<!-- Login Form -->
			<form  onsubmit="return validate_form()" action="../views/logon.php" method="POST" >
			  <input type="text" id="user_name" class="fadeIn second" name="user_name" placeholder="login" > <br>
			  <span id="err_user_name" name="err_user_name" style="color:red"></span>
			  <br>
			  <input type="text" id="password" class="fadeIn third" name="password" placeholder="password" > <br>
			  <span id="err_password" name="err_password" style="color:red"></span>
			  <br>
			  
			  
			  <input type="submit" class="fadeIn fourth" name="login" value="Log In">
			</form>

			<!-- Remind Passowrd -->
			<div id="formFooter">
			  <a class="underlineHover" href="#">Forgot Password?</a><br>
			  <a class="underlineHover" href="../views/registration.php">New User? Create an account</a>
			</div>

	  </div>
	  
	</div>
</body>
</html>