<?php  

 require_once '../controllers/SignUpController.php';
		
?>
<html>

	<head> <link rel="stylesheet" href="../views/styles/style.css">
	
	 <script>
			function validate_form()
			{
				customer_name=document.getElementById("customer_name").value;

				user_name=document.getElementById("user_name").value;
				password=document.getElementById("password").value;
				
				customer_address=document.getElementById("customer_address").value;
				email_address=document.getElementById("email_address").value;
				contact_no=document.getElementById("contact_no").value;
				
				var valid=false;
				
				if(customer_name == "" )
				{
					valid=false;
					document.getElementById("err_customer_name").innerHTML="Name Required";
				}
				else
				{
					document.getElementById("err_customer_name").innerHTML="";
					valid=true;
				}

				
				if(user_name == "" )
				{
					valid=false;
					document.getElementById("err_user_name").innerHTML="User-Name Required";
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
				
				
		if(customer_address == "" )
				{
					valid=false;
					document.getElementById("err_customer_address").innerHTML="Address Required";
				}
				else
				{
					document.getElementById("err_customer_address").innerHTML="";
					valid=true;
				}
				
				
		if(email_address == "" )
				{
					valid=false;
					document.getElementById("err_email_address").innerHTML="Email Required";
				}
				else
				{
					document.getElementById("err_email_address").innerHTML="";
					valid=true;
				}		
				
		if(contact_no == "" )
				{
					valid=false;
					document.getElementById("err_contact_no").innerHTML="Phone No Required";
				}
				else
				{
					document.getElementById("err_contact_no").innerHTML="";
					valid=true;
				}		
						
				
	return valid;	
	
			}
			
		</script>
	
	
	</head>
	

	<body>
	
	<center>

		<div class="wrapper fadeInDown">
			   <div id="formContent">
				   <h1><b><font color="skyblue">Sign Up</font></b></h1><hr color="skyblue">   
				  

			  
				  
<form  onsubmit="return validate_form()" action="../views/registration.php" method="POST" >
					<center>
						<table>	 
							<tr>
								
								<td><h4>Name:</h4></td>
								<td><h4><input type="text" name="customer_name" id="customer_name" class="fadeIn second" placeholder=' Name' >
								<br><span id="err_customer_name" name="err_customer_name" style="color:red"></span></h4>
								</td>
						
							</tr>
							
							<tr>
							
								<td><h4>Address:</h4></td>
								<td><h4><input type="text"  name="customer_address" id="customer_address" class="fadeIn second" placeholder='address' >
								<br><span id="err_customer_address" name="err_customer_address" style="color:red"></span></h4>
								</td>
								
							</tr>
							
							<tr>
								
								<td><h4>User-Name:</h4></td>
								<td><h4><input type="text"  name="user_name" id="user_name" class="fadeIn second" placeholder='User ID Name' >
								<br><span id="err_user_name" name="err_user_name" style="color:red"></span></h4>
								</td>
								
									
							</tr>
							
							
							<tr>
								
								<td><h4>Password:</h4></td>								
								<td><h4><input type="Password" size ="15" name="password" id="password" class="fadeIn second" placeholder='Password' >
								<br><span id="err_password" name="err_password" style="color:red"></span></h4>
								</td>
							
							</tr>
							
							<tr>
							
								<td><h4>Email :</h4> </td>
								<td><h4><input type="text" name="email_address" id="email_address" class="fadeIn second" placeholder='Email'>
								<br><span id="err_email_address" name="err_email_address" style="color:red"></span></h4>
								</td>
								
							</tr>
							<tr>
								
								<td><h4>Phone:</h4></td>								
								<td><h4><input type="text"   name="contact_no"  id="contact_no" class="fadeIn second" placeholder='Phone Number' >
								<br><span  id="err_contact_no" name="err_contact_no" style="color:red"></span></h4>
								</td>
							
							</tr>
							
							
					
								
							
							</table>
					</center>
							
							
					<center>
							<div id="formFooter">
								<input type="submit" name="sign_up" class="fadeIn fourth" value="JOIN">
							</div>
					</center>			
					<center>
							<div id="formFooter">	
								<a class="underlineHover" href="../views/logon.php"><font color="red">Already a member?</font></a>
						
							</div>
					</center>
						
				</form>
			</div>
		</div>
	</center>
		
	</body>
	
</html>
