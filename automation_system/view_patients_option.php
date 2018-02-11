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
	?>

	</head>
<body>
<?php
	$anc_number = $_POST['anc_num'];

	$sql_query = "SELECT * FROM `new_patient` WHERE `ANC_NUM`=".$anc_number.";";

	#echo " ".$sql_query;
	$v = mysqli_query($con,$sql_query);
	#echo ''.$v;
	$r = mysqli_fetch_assoc($v);
	if(!$r)
	{
		echo'<script language="javascript">';
		echo 'alert("ANC number does not exist enter a valid number")';
		echo '</script>';
		include 'anc_num.php';
	}

	else {
 ?>
  <span class="login100-form-title p-b-70">
    Select an option
  </span>

	<form method="get" action="view_history?anc_num='".$anc_number."'.php">
	  <button class="addnew-form-btn" >
	   View History
	  </button>
	</form>

	<form method="post" action="modify_details.php">
		<button class="addnew-form-btn">
			Update/Edit the details
		</button>
	</form>
	<form method="post" action="gdm.php">
		<button class="addnew-form-btn">
			Diagnosing Gestational Diabetes Mellitus
		</button>
	</form>

	<form method="post" action="mat_deaths_predict.php">
		<button class="addnew-form-btn">
			Maternal Health Risk
		</button>
	</form>

	<form method="post" action="predict_outcome.php">
		<button class="addnew-form-btn">
			Prediction of Outcome Of Delivery
		</button>
	</form>

	<form method="post" action="predict_mode.php">
		<button class="addnew-form-btn">
			Prediction of Mode Of Delivery
		</button>
	</form>


<?php } ?>
</body>
</html>
