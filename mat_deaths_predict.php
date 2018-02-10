<html>
		<head>
			<title>Patient Application Form</title>

    	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    
		</head>

		<body>
			<div class="container">
				<h2> Maternal Health Risk</h2>
				<center><h4><strong>Enter Details of Patient:</strong></h4>
				<form action="save_details.php" method="post" class="form-horizontal" name="add_patient" role="form">
					<table class="table table-bordered">
						<tbody>
							<tr>
								<th>Rural/Sub-Urban</th>
								<td><input type="text" name="name" pattern="[a-zA-Z ]+" title="Only Alphabets are allowed" required></td>
							</tr>
              <tr>
								<th> age </th>
								<td><input type="text" name="age" id="cell" maxlength="2" value="" required></td>
							</tr>

              <tr>
								<th>religion</th>
								<td><input type="text" name="height" id="cell" maxlength="4"  value="" required></td>
							</tr>
              <tr>
								<th>social_group_code</th>
								<td><input type="text" name="weight" id="cell" maxlength="3" value="" required></td>
							</tr>
			   <tr>
								<th>disability_status</th>
								<td><input type="text" name="name" pattern="[a-zA-Z ]+" title="Only Alphabets are allowed" required></td>
							</tr>
				   <tr>
								<th>chew</th>
								<td><input type="text" name="name" pattern="[a-zA-Z ]+" title="Only Alphabets are allowed" required></td>
							</tr>

					   <tr>
								<th>smoke</th>
								<td><input type="text" name="name" pattern="[a-zA-Z ]+" title="Only Alphabets are allowed" required></td>
							</tr>

							   <tr>
								<th>alcohol</th>
								<td><input type="text" name="name" pattern="[a-zA-Z ]+" title="Only Alphabets are allowed" required></td>
							</tr>





				

						</tbody>
					</table>

          <button class="submit-btn">
            Predict
          </button>
				</form>
			</div>
		</body>
	</html>
