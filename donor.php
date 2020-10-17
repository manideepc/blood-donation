<?php

if (isset($_POST['submit'])) 
        {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bloodgroup";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$bloodgroup = $_POST['bg'];

$sql = "SELECT name, email, phone, gender, bloodgroup, age FROM bg WHERE bloodgroup = '$bloodgroup'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["name"], " " ,$row["email"], " " ,$row["phone"], " " ,$row["bloodgroup"], " " ,$row["age"] ,"<br>";
		}
} else {
    echo "0 results";
}

mysqli_close($conn);

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
<form action="donor.php" method="post" style="border:1px solid #ccc">
  <div class="container">
   
    
	<label for="bloodgroup"><b>Search Blood Group</b></label>
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
    
   
    <div class="clearfix">
      
      <button type="submit" name="submit" class="signupbtn">Search</button>
    </div>
  </div>
</form>

</body>
</html>