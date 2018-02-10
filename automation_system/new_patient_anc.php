<html>
		<head>
			<title>Patient Application Form</title>

    	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    
		</head>

		<body>
			<div class="container">
				<h2>New Patient</h2>
				<center><h4><strong>Personal Details of Patient:</strong></h4>
				<form action="save_details.php" method="post" class="form-horizontal" name="add_patient" role="form">
					<table class="table table-bordered">
						<tbody>
							<tr>
								<th>Name of Patient</th>
								<td><input type="text" name="name" pattern="[a-zA-Z ]+" title="Only Alphabets are allowed" required></td>
							</tr>
              <tr>
								<th>Age</th>
								<td><input type="text" name="age" id="cell" maxlength="2" value="" required></td>
							</tr>

              <tr>
								<th>Height(in inches)</th>
								<td><input type="text" name="height" id="cell" maxlength="4"  value="" required></td>
							</tr>
              <tr>
								<th>Weight(in kg)</th>
								<td><input type="text" name="weight" id="cell" maxlength="3" value="" required></td>
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
