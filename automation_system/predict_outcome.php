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
				<h2>Prediction Of Outcome Of Delivery</h2><br><br>
				<center><h4><strong>Enter Details of Patient:</strong></h4><br><br>
				<form action="save_details.php" method="post" class="form-horizontal" name="add_patient" role="form">
					<table class="table table-bordered">
						<tbody>
							 <tr>
								<th>delivered_any_baby</th>
								<td><input type="radio" name="delivered_any_baby" value="Y" > Yes
								<input type="radio" name="delivered_any_baby" value="N" checked> No</td>
							</tr>
              <tr>
								<th>born_alive_female 	</th>
								<td><input type="text" name="born_female" id="cell" maxlength="2" value="" required></td>
							</tr>
			   <tr>
								<th> born_alive_male</th>
								<td><input type="text" name="born_male" required></td>
							</tr>

					   <tr>
								<th>surviving_female</th>
								<td><input type="text" name="name" required></td>
							</tr>

							   <tr>
								<th>surviving_male</th>
								<td><input type="text" name="name" required></td>
							</tr>
						<tr>
								<th>mother_age_when_baby_was_born</th>
								<td><input type="text" name="name" required></td>
							</tr>

							<tr>
								<th>is_tubectomy</th>
								<td>
									<input type="radio" name="tubectomy" value="Y" > Yes
  								<input type="radio" name="tubectomy" value="N" checked> No
								</td>
							</tr>

							<tr>
								<th>is_currently_preg0nt</th>
								<td>
									<input type="radio" name="tubectomy" value="Y" checked> Yes
  								<input type="radio" name="tubectomy" value="N" > No
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
