<html>
		<head>
			<title>Patient Application Form</title>

    	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    
		</head>

		<body>
			<div class="container">
				<h2>Prediction Of Outcome Of Delivery</h2>
				<center><h4><strong>Enter Details of Patient:</strong></h4>
				<form action="save_details.php" method="post" class="form-horizontal" name="add_patient" role="form">
					<table class="table table-bordered">
						<tbody>
							<tr>
								<th>Rural/Urban</th>
								<td><input type="text" name="name" pattern="[a-zA-Z ]+" title="Only Alphabets are allowed" required></td>
							</tr>
              <tr>
								<th> Age </th>
								<td><input type="text" name="age" id="cell" maxlength="2" value="" required></td>
							</tr>

              <tr>
								<th>delivered_any_baby</th>
								<td><input type="text" name="height" id="cell" maxlength="4"  value="" required></td>
							</tr>
              <tr>
								<th>born_alive_female 	</th>
								<td><input type="text" name="weight" id="cell" maxlength="3" value="" required></td>
							</tr>
			   <tr>
								<th> born_alive_male</th>
								<td><input type="text" name="name" pattern="[a-zA-Z ]+" title="Only Alphabets are allowed" required></td>
							</tr>
				   <tr>
								<th>born_alive_total </th>
								<td><input type="text" name="name" pattern="[a-zA-Z ]+" title="Only Alphabets are allowed" required></td>
							</tr>

					   <tr>
								<th>surviving_female</th>
								<td><input type="text" name="name" pattern="[a-zA-Z ]+" title="Only Alphabets are allowed" required></td>
							</tr>

							   <tr>
								<th>surviving_male</th>
								<td><input type="text" name="name" pattern="[a-zA-Z ]+" title="Only Alphabets are allowed" required></td>
							</tr>
						<tr>
								<th>surviving_total </th>
								<td><input type="text" name="name" pattern="[a-zA-Z ]+" title="Only Alphabets are allowed" required></td>
							</tr>

						<tr>
								<th>mother_age_when_baby_was_born</th>
								<td><input type="text" name="name" pattern="[a-zA-Z ]+" title="Only Alphabets are allowed" required></td>
							</tr>

							<tr>
								<th>is_tubectomy</th>
								<td><input type="text" name="name" pattern="[a-zA-Z ]+" title="Only Alphabets are allowed" required></td>
							</tr>

						<tr>
								<th>is_vasectomy</th>
								<td><input type="text" name="name" pattern="[a-zA-Z ]+" title="Only Alphabets are allowed" required></td>
							</tr>


							<tr>
								<th>is_copper_t</th>
								<td><input type="text" name="name" pattern="[a-zA-Z ]+" title="Only Alphabets are allowed" required></td>
							</tr>

							<tr>
								<th>is_pills_daily</th>
								<td><input type="text" name="name" pattern="[a-zA-Z ]+" title="Only Alphabets are allowed" required></td>
							</tr>
				
							<tr>
								<th>is_emergency_contraceptive</th>
								<td><input type="text" name="name" pattern="[a-zA-Z ]+" title="Only Alphabets are allowed" required></td>
							</tr>

							<tr>
								<th>is_condom</th>
								<td><input type="text" name="name" pattern="[a-zA-Z ]+" title="Only Alphabets are allowed" required></td>
							</tr>

							<tr>
								<th>is_moder_methods </th>
								<td><input type="text" name="name" pattern="[a-zA-Z ]+" title="Only Alphabets are allowed" required></td>
							</tr>

							<tr>
								<th>is_currently_preg0nt</th>
								<td><input type="text" name="name" pattern="[a-zA-Z ]+" title="Only Alphabets are allowed" required></td>
							</tr>

							<tr>
								<th>is_any_fp_methos_used</th>
								<td><input type="text" name="name" pattern="[a-zA-Z ]+" title="Only Alphabets are allowed" required></td>
							</tr>
							<tr>
								<th>aware_abt_hiv</th>
								<td><input type="text" name="name" pattern="[a-zA-Z ]+" title="Only Alphabets are allowed" required></td>
							</tr>

							<tr>
								<th>religion</th>
								<td><input type="text" name="name" pattern="[a-zA-Z ]+" title="Only Alphabets are allowed" required></td>
							</tr>

							<tr>
								<th>social_group_code</th>
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

          <button class="Predict-btn">
            Diagnose
          </button>
				</form>
			</div>
		</body>
	</html>
