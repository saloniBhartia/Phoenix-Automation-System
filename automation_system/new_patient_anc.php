<html>
		<head>
			<title>Patient Application Form</title>

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
		</head>

		<body>
			<div class="container">
				<h2>New Patient</h2>
				<center><h4><strong>Personal Details of Patient:</strong></h4>
				<form action="save_details.php" method="post" class="form-horizontal" name="add_rti" role="form">
					<table class="table table-bordered">
						<tbody>
							<tr>
								<th>Name of Patient</th>
								<td><input type="text" name="name" pattern="[a-zA-Z ]+" title="Only Alphabets are allowed" required></td>
							</tr>
              <tr>
								<th>Age</th>
								<td><input type="text" name="mobile" id="cell" maxlength="2" pattern="^\d{10}$" value="" required></td>
							</tr>

              <tr>
								<th>Height(in inches)</th>
								<td><input type="text" name="mobile" id="cell" maxlength="4" pattern="^\d{10}$" value="" required></td>
							</tr>
              <tr>
								<th>Weight(in kg)</th>
								<td><input type="text" name="mobile" id="cell" maxlength="3" pattern="^\d{10}$" value="" required></td>
							</tr>


						</tbody>
					</table>

          <button class="submit-btn">
            Submit
          </button>
				</form>
			</div>
		</body>
	</html>
