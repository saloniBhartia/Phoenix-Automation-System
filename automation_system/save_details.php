<html>
		<head>
			<title>Patient Application Form</title>

    	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="css/util.css">
			<link rel="stylesheet" type="text/css" href="css/main.css">
		<!--===============================================================================================-->
		</head>

<?php

//Configure database_access
$con = mysqli_connect("localhost", "root", "");
if (!$con) {
  die('Could not connect: ' . mysqli_error());
}
$db = mysqli_select_db($con, "conceivably_well");
if(!$db)
  echo " Connection to the database failed ";
$conn = mysqli_connect("localhost","root","");
if (!$conn) {
  die('Could not connect: ' . mysqli_error());
  echo "NO Connection";
}
$db = mysqli_select_db($conn, "conceivably_well");
if(!$db)
  echo " Connection to the database failed ";

//adding anc_number
$a = 0;
$k = "SELECT * FROM new_patient";
$v = mysqli_query($con,$k);

if($v)
while ($r = mysqli_fetch_assoc($v)) {
  $a = $r['ANC_NUM'];
}
$anc= $a+1;

echo'<span class="login100-form-title p-b-70" style="margin-top:30px;">
  <h5>The ANC NUMBER FOR PATIENT IS</h5> <h4>'.$anc.'</h4></span>';
//inserting data into the table

$n = $_POST['name'];
$a=$_POST['age'];
$ht=$_POST['height'];
$wt=$_POST['weight'];
$SQL_Query = "INSERT INTO new_patient(ANC_NUM, P_name, P_age, P_height, P_weight) VALUES ('$anc','$n', '$a', '$ht', '$wt')";

#echo ''.$SQL_Query
mysqli_query($con, $SQL_Query);
mysqli_close ($con);

echo ' <form action=signup.php>
<button class="submit-btn">Submit</button>
</form>'
?>
</head>
