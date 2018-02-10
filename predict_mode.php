<html>
		<head>
			<title>Patient Application Form</title>

    	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    
		</head>

		<body>
			<div class="container">
				<h2>Prediction Of Mode Of Delivery</h2>
				<center><h4><strong>Enter Details of Patient:</strong></h4>
				<form action="save_details.php" method="post" class="form-horizontal" name="add_patient" role="form">
					<table class="table table-bordered">
						<tbody>
							<tr>
								<th>Age</th>
								<td><input type="text" name="name" pattern="[a-zA-Z ]+" title="Only Alphabets are allowed" required></td>
							</tr>
              <tr>
								<th> Subjective Sleep Quality(Very Bad-0 Bad-1 Good-2 Very good- 3) </th>
								<td><input type="text" name="age" id="cell" maxlength="2" value="" required></td>
							</tr>

              <tr>
								<th>Sleep Duration(in hrs)</th>
								<td><input type="text" name="height" id="cell" maxlength="4"  value="" required></td>
							</tr>
              <tr>
								<th>use of sleeping medication(Highly Useful-3, useful-2, not very useful-1, not useful at all- 0)</th>
								<td><input type="text" name="weight" id="cell" maxlength="3" value="" required></td>
							</tr>
			   <tr>
								<th>daytime dysfunction </th>
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
