<?php 
	session_start();
        $db = mysqli_connect("localhost", "root", "", "bloodgroup");
	if (isset($_POST['body22'])) 
        {		
		
		$name = mysql_real_escape_string($_POST['name']);
                $email = mysql_real_escape_string($_POST['email']);
		$psw = mysql_real_escape_string($_POST['psw']);
		$pswrepeat = mysql_real_escape_string($_POST['pswrepeat']);
		$bloodgroup = $_POST['bg'];
                $age = mysql_real_escape_string($_POST['age']);
                $gender =$_POST['gender'];
				$phone = mysql_real_escape_string($_POST['phone']);
					
				
if($_POST['bg'] && $_POST['bg'] != 0)
{
   $bloodgroup=$_POST['bg'];
      echo "<script>console.log( 'Debug Objects: " . $bloodgroup . "' );</script>";
} 


		if(strcmp($psw,$pswrepeat)){
				echo 'password matched';
		}                
		else
		{echo 'password NOT matched';
		}
		
		if ($password == $password2) {
			$sql = "INSERT INTO bg(name,email, password,phone,gender,bloodgroup,age) VALUES('$name', '$email', '$psw', '$phone', '$gender','$bloodgroup','$age')";
			mysqli_query($db, $sql);
			
			header("location: Document2.php");
		}else{
		
		}
	}
?>


<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<form action="body22.php" method="post" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
<label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>

	
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="pswrepeat" required>
    
	<br><label for="bloodgroup"><b>Blood Group</b></label>
	<select id="bg" name="bg">                      
  <option value="0">--Select Blood Group--</option>
  <option value="a+">A+</option>
  <option value="a-">A-</option>
  <option value="b+">B+</option>
   <option value="b-">B-</option>
    <option value="o+">O+</option>
	 <option value="o-">O-</option>
	  <option value="ab+">AB+</option>
	   <option value="ab-">AB-</option>
	
</select>
    
    <label for="age"><b>Age</b></label>
    <input type="integer" placeholder="Enter Age" name="age" required>
	
	
  <label for="gender"><b>Gender</b></label>
	<select name="gender">
	
	  <option value="male">MALE</option>
	   <option value="female">FEMALE</option>
	</select>
    
	<label for="phone"><b>Phone</b></label>
    <input type="integer" placeholder="Enter Phone Number" name="phone" required>
    

   <br> <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" name="body22" class="signupbtn">Register</button>
    </div>
  </div>
</form>

</body>
</html>