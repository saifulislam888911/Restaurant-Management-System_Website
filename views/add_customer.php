
<html>

	<head> <link rel="stylesheet" href="../views/styles/style.css"></head>
	

	<body>
	<center>

	<!-- //<?php
		//$err_name="";
		//$name="";
		//$err_email="";
		//$email="";
		//$err_phn="";
		//$phn="";
		//$err_pass="";
		//$pass="";
		
		
		//if(isset($_POST['submit']))
		//{
			
			//if(empty($_POST['name']))
			//{
			//	$err_name="*Name Required";
			//}
			//else
			//{			
			//	$name=htmlspecialchars($_POST['name']);
			//	echo $name;
			//}
			//if (empty($_POST['email']))
			//{
			//	$err_email="*Email Required";
			//}
			//else
			//{
			//	$uname=$_POST['email'];
			//}
			//if (empty($_POST['phn']))
			//{
			//	$err_phn="*Phone number Required";
			//}
			//else
			//{
			//	$phn=$_POST['phn'];
			//}
			
			//if (empty($_POST['pass']))
			//{
			//	$err_phn="*Password Required";
			//}
			//else
			//{
			//	$phn=$_POST['pass'];
			//}
			
		//}
	//?>-->
		<div class="wrapper fadeInDown">
			   <div id="formContent">
				   <h2 class="inactive underlineHover"><b><a href="../views/add_employee.php">Add Employee</a> </b></h2>
				   <h1 class="active"><b><font color="skyblue">Add Customer</font></b></h1><hr color="skyblue">
				   
				   
				   
					<form method="post" action="../controllers/AddCustomerController.php">
						<center><table>
						 
							<tr>
							
								<td><h4>Name:</h4></td>
								<td><h4><input type="text"  name="customer_name" placeholder=' Name' required></h4>
									
							</tr>
							
							<tr>
							
								<td><h4>Address:</h4></td>
								<td><h4><input type="text"  name="customer_address" placeholder='address' required></h4>
									
							</tr>
							
							<tr>
							
								<td><h4>User-Name:</h4></td>
								<td><h4><input type="text"  name="user_name" placeholder='User ID Name' required></h4>
									
							</tr>
							
							
							<tr>
								<td><h4>Password:</h4></td>
								
								<td><h4><input type="Password" size ="15" name="password" placeholder='Password' required></h4>
								
							</tr>
							
							<tr>
								<td><h4>Email :</h4> </td>
								<td><h4><input type="text" name="email_address" placeholder='Email'required></h4>
								
							</tr>
							<tr>
								<td><h4>Phone:</h4></td>
								
								<td><h4><input type="text"  name="contact_no" placeholder='Phone Number' required></h4>
								
							</tr>
							
							
					
								
							
							</table></center>
							<center><div id="formFooter">
								<input type="submit" name="sign_up" class="fadeIn fourth" value="Add">
								<a href="../views/admin_page.php"> << Back </a>
							</div></center>
					</form>
				</div>
		</div>
		</center>
		
	</body>
</html>
