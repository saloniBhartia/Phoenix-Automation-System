<!DOCTYPE html>
<html lang="en">
<head>
	<title>Option Selection</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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

  <span class="login100-form-title p-b-70">
    Select an option
  </span>

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
	//Database configuration done

		$uname = $_POST['username'];
		$pwd=$_POST['pass'];
		$sql_query_to_check_the_auth = "SELECT * FROM `login_table` WHERE `user_name`='".$uname."'AND `password`='".$pwd."';";
		#echo " ".$sql_query_to_check_the_auth;
		$v = mysqli_query($con,$sql_query_to_check_the_auth);
		if(!$v)
			{
				echo '<script language="javascript">';
				echo 'alert("Incorrect Username or password")';
				echo '</script>';
				include 'index.php';
			}
			else {

				if($uname=='Reception')
				{
	?>
<form method="post" action="new_patient_anc.php">
  <button class="addnew-form-btn" >
    Add new Patient
  </button>
</form>
<?php
}

else {
	?>
	<form method="post" action="anc_num.php">
		<button class="addnew-form-btn">
			View Previous Patient
		</button>
	</form>
<?php
}
	}?>
</body>
</html>
