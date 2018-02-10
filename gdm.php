<html>
		<head>
			<title>Patient Application Form</title>

    	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    
		</head>

		<body>
			<div class="container">
				<h2>Diagnosing Gestational Diabetes Mellitus</h2>
				<center><h4><strong>Enter Details of Patient:</strong></h4>
				<form action="save_details.php" method="post" class="form-horizontal" name="add_patient" role="form">
					<table class="table table-bordered">
						<tbody>
							<tr>
								<th>Number of times pregnant</th>
								<td><input type="text" name="name" pattern="[a-zA-Z ]+" title="Only Alphabets are allowed" required></td>
							</tr>
              <tr>
								<th> Plasma glucose concentration a 2 hours in an oral glucose tolerance test </th>
								<td><input type="text" name="age" id="cell" maxlength="2" value="" required></td>
							</tr>

              <tr>
								<th>Diastolic blood pressure (mm Hg)</th>
								<td><input type="text" name="height" id="cell" maxlength="4"  value="" required></td>
							</tr>
              <tr>
								<th>Triceps skin fold thickness (mm)</th>
								<td><input type="text" name="weight" id="cell" maxlength="3" value="" required></td>
							</tr>
			   <tr>
								<th>2-Hour serum insulin (mu U/ml) </th>
								<td><input type="text" name="name" pattern="[a-zA-Z ]+" title="Only Alphabets are allowed" required></td>
							</tr>
				   <tr>
								<th>Body mass index (weight in kg/(height in m)^2) </th>
								<td><input type="text" name="name" pattern="[a-zA-Z ]+" title="Only Alphabets are allowed" required></td>
							</tr>

					   <tr>
								<th>Diabetes pedigree function</th>
								<td><input type="text" name="name" pattern="[a-zA-Z ]+" title="Only Alphabets are allowed" required></td>
							</tr>

							   <tr>
								<th>Age (years)</th>
								<td><input type="text" name="name" pattern="[a-zA-Z ]+" title="Only Alphabets are allowed" required></td>
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
