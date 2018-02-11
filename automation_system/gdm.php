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

		<body>
			<div class="container">
				<h2>Diagnosing Gestational Diabetes Mellitus</h2><br><br>
				<center><h4><strong>Enter Details of Patient:</strong></h4><br><br>
				<form action="save_details.php" method="post" class="form-horizontal" name="add_patient" role="form">
					<table class="table table-bordered">
						<tbody>
							<tr>
								<th>Number of times pregnant</th>
								<td><input type="text" name="PregNum" required></td>
							</tr>
              <tr>
								<th> Plasma glucose concentration a 2 hours in an oral glucose tolerance test </th>
								<td><input type="text" name="Glucose-Conc" id="cell" maxlength="5" value="" required></td>
							</tr>

              <tr>
								<th>Diastolic blood pressure (mm Hg)</th>
								<td><input type="text" name="DBP" id="cell" maxlength="4"  value="" required></td>
							</tr>
              <tr>
								<th>Triceps skin fold thickness (mm)</th>
								<td><input type="text" name="skin-thick" id="cell" maxlength="3" value="" required></td>
							</tr>
			   <tr>
								<th>2-Hour serum insulin (mu U/ml) </th>
								<td><input type="text" name="serum-insulin" pattern="[a-zA-Z ]+" title="Only Alphabets are allowed" required></td>
							</tr>
				   <tr>
								<th>Body mass index (weight in kg/(height in m)^2) </th>
								<td><input type="text" name="BMI" pattern="[a-zA-Z ]+" title="Only Alphabets are allowed" required></td>
							</tr>

					   <tr>
								<th>Diabetes pedigree function</th>
								<td><input type="text" name="PedFn" pattern="[a-zA-Z ]+" title="Only Alphabets are allowed" required></td>
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
