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
			<div class="container">
				<h2> Maternal Health Risk</h2><br><br>
				<center><h4><strong>Enter Details of Patient:</strong></h4><br><br>
				<form action="save_details.php" method="post" class="form-horizontal" name="add_patient" role="form">
					<table class="table table-bordered">
						<tbody>
							<tr>
								<th>Rural/Sub-Urban</th>
								<td>
									<input type="radio" name="RS" value="0" > Rural
  								<input type="radio" name="RS" value="1"> Urban
								</td>
							</tr>

              <tr>
								<th>disability_status</th>
								<td>
									<input type="radio" name="Disab_stat" value="Y" > Visual
  								<input type="radio" name="Disab_stat" value="Y"> Hearing
  								<input type="radio" name="Disab_stat" value="Y"> Motor
									<input type="radio" name="Disab_stat" value="Y"> Locomotive
									<input type="radio" name="Disab_stat" value="N"checked> None
								</td>
							</tr>

				   <tr>
								<th>Tobacco chewing?</th>
								<td>
									<input type="radio" name="chew" value="Y" > Yes
  								<input type="radio" name="chew" value="N" checked> No
								</td>
							</tr>

					   <tr>
								<th>Smoking Habits</th>
								<td>
									<input type="radio" name="SH" value="1" > XSmoker
  								<input type="radio" name="SH" value="1"> Chain-Smoker
									<input type="radio" name="SH" value="1" > Occasional Smoker
  								<input type="radio" name="SH" value="0" checked> None
								</td>
							</tr>

							   <tr>
								<th>Drinking Habits</th>
								<td>
									<input type="radio" name="DH" value="1" > Yes
									<input type="radio" name="DH" value="0" checked> No
								</td>
							</tr>

					</tbody>
					</table>

          <button class="submit-btn">
            Diagnose
          </button>
				</form>
			</div>
		</body>
	</html>
