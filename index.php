<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SMC Operations Management Survey</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<div class="container">
		<div class="well">
			<div class="row" style="margin-bottom: 20px;">
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
					<img src="images/smclogo.png" alt="" class="img-responsive">
				</div>
				<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 text-center">
					<h1>Welcome to Saint Michael's College Operations Management Survey</h1>
				</div>
			</div>
			<form class="form-horizontal" action="insertRecords.php" method="POST">
				<div class="panel panel-primary" id="employment">
					<div class="panel-heading">
						<h4>Please fill out the blanks</h4>
					</div>
					<div class="panel-body">
						<div class="form-group">
							<label class="control-label col-sm-2">Name:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control"  placeholder="Enter your name here" name="personName" required id="personName" onkeyup="validate()">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2">Age:</label>
							<div class="col-sm-10"> 
								<input type="number" class="form-control" placeholder="Enter your age here" name="personAge" required min="14" max="60">
							</div>
						</div>
						<div class="form-group"> 
							<label class="control-label col-sm-2">Gender:</label>
							<div class="col-sm-10">
								<div class="radio">
									<label><input type="radio" name="personGender" required value="Male"> Male</label>
									<label><input type="radio" name="personGender" required value="Female"> Female</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2">Year Graduated:</label>
							<div class="col-sm-10"> 
								<select name="personGraduated" id="" class="form-control" required>
									<?php for($i = (date('Y') -20); $i <= (date('Y') +20); $i++):?>
										<option value="<?php echo $i ?> - <?php echo $i+1 ?>">S.Y. <?php echo $i ?> - <?php echo $i+1 ?></option>
									<?php endfor;?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2">Present Employment Status:</label>
							<div class="col-sm-10"> 
								<div class="radio">
									<label><input type="radio" name="personEmploymentStatus" onclick="displayIndustry()" value="Employed" required> Employed</label>
									<label><input type="radio" name="personEmploymentStatus" onclick="displayIndustry()" value="Self-Employed" required> Self-Employed</label>
									<label><input type="radio" name="personEmploymentStatus" onclick="emptyForEmployed()" value="Unemployed" required> Unemployed</label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="foremployed"></div>
				<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Questions:</th>
								<th>Please rate the skills you have developed from SMC.<br>
									Legend:<br>
									1 - unimportant <br>
									2 - of little importance <br>
									3 - moderately important <br>
									4 - important <br>
									5 - very important <br>
								</th>
								<th>Please rate the relevance of this skill in the completion of your task in the workplace<br>
									Legend:<br>
									1 - unimportant <br>
									2 - of little importance <br>
									3 - moderately important <br>
									4 - important <br>
									5 - very important <br>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1. Convey ideas clearly both oral and written in English</td>
								<td>
									<select name="ratingOne[]" class="form-control" required>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</td>
								<td>
									<select name="ratingTwo[]" class="form-control" required>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>	
								</td>
							</tr>
							<tr>
								<td>2. Prepare, analyze and evaluate reports proposal and concepts paper.</td>
								<td>
									<select name="ratingOne[]" class="form-control" required>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</td>
								<td>
									<select name="ratingTwo[]" class="form-control" required>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>	
								</td>
							</tr>
							<tr>
								<td>3. Demonstrate the values of fairness, transparency, accountability, hard work, honesty, patient, diligence and innovativeness risk taking.</td>
								<td>
									<select name="ratingOne[]" class="form-control" required>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</td>
								<td>
									<select name="ratingTwo[]" class="form-control" required>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>	
								</td>
							</tr>
							<tr>
								<td>4. Apply the principles of the different forms of communication</td>
								<td>
									<select name="ratingOne[]" class="form-control" required>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</td>
								<td>
									<select name="ratingTwo[]" class="form-control" required>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>	
								</td>
							</tr>
							<tr>
								<td>5. Develop the ability to access, retrieve and disseminate information using IT.</td>
								<td>
									<select name="ratingOne[]" class="form-control" required>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</td>
								<td>
									<select name="ratingTwo[]" class="form-control" required>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>	
								</td>
							</tr>
							<tr>
								<td>6. Perform quality work</td>
								<td>
									<select name="ratingOne[]" class="form-control" required>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</td>
								<td>
									<select name="ratingTwo[]" class="form-control" required>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>	
								</td>
							</tr>
							<tr>
								<td>7. Understand the concepts and principles of good interpersonal relations.</td>
								<td>
									<select name="ratingOne[]" class="form-control" required>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</td>
								<td>
									<select name="ratingTwo[]" class="form-control" required>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>	
								</td>
							</tr>
							<tr>
								<td>8. Develop a wholesome personality</td>
								<td>
									<select name="ratingOne[]" class="form-control" required>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</td>
								<td>
									<select name="ratingTwo[]" class="form-control" required>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>	
								</td>
							</tr>
							<tr>
								<td>9. Participate actively in business association and comply with their policies and obligations.</td>
								<td>
									<select name="ratingOne[]" class="form-control" required>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</td>
								<td>
									<select name="ratingTwo[]" class="form-control" required>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>	
								</td>
							</tr>
							<tr>
								<td>10. Demonstrate leadership qualities, civic-mindedness and responsive citizenship</td>
								<td>
									<select name="ratingOne[]" class="form-control" required>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</td>
								<td>
									<select name="ratingTwo[]" class="form-control" required>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>	
								</td>
							</tr>
							<tr>
								<td>11. Conduct environmental scanning.</td>
								<td>
									<select name="ratingOne[]" class="form-control" required>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</td>
								<td>
									<select name="ratingTwo[]" class="form-control" required>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>	
								</td>
							</tr>
							<tr>
								<td>12. Conduct feasibility study and other business research/plan.</td>
								<td>
									<select name="ratingOne[]" class="form-control" required>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</td>
								<td>
									<select name="ratingTwo[]" class="form-control" required>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>	
								</td>
							</tr>
							<tr>
								<td>13. Explain the concepts, approaches and techniques of environmental conservation.</td>
								<td>
									<select name="ratingOne[]" class="form-control" required>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</td>
								<td>
									<select name="ratingTwo[]" class="form-control" required>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>	
								</td>
							</tr>
							<tr>
								<td>14. Know and understand country's national development, trust, concerns and socio economic indicators.</td>
								<td>
									<select name="ratingOne[]" class="form-control" required>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</td>
								<td>
									<select name="ratingTwo[]" class="form-control" required>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>	
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="form-group">
					<h3>Comments:</h3>
					<textarea name="comments" cols="30" rows="10" required placeholder="I am proud to be a graduate from St. Michael's College because" class="form-control"></textarea>							
				</div>
				<div class="form-group"> 
					<button type="submit" class="btn btn-primary btn-block" id="submitButton">Submit</button>
				</div>
			</form>
		</div>
	</div>
	<script>
		function displayIndustry()
		{
			$('.foremployed').empty();
			$('.foremployed').append('<div class="panel panel-info" id="forEmployed">'+
					'<div class="panel-heading">'+
						'<h4>For employed and self-employed only:</h4>'+
					'</div>'+
					'<div class="panel-body">'+
						'<h2>Industry sector you belong:</h2>'+
						'<div class="form-group">'+ 
							'<div class="col-sm-10">'+
								'<div class="checkbox">'+
									'<label><input type="checkbox" name="personIndustry[]" value="Agriculture, Forestry, and Fishing">Agriculture, Forestry and Fishing</label> '+
								'</div>'+
								'<div class="checkbox">'+
									'<label><input type="checkbox" name="personIndustry[]" value="Mining and Quarrying">Mining and Quarrying</label> '+
								'</div>'+
								'<div class="checkbox">'+
									'<label><input type="checkbox" name="personIndustry[]" value="Manufacturing">Manufacturing</label> '+
								'</div>'+
								'<div class="checkbox">'+
									'<label><input type="checkbox" name="personIndustry[]" value="Electricity, Gas, Steam and Airconditioning Supply">Electricity, Gas, Steam and Airconditioning Supply</label> '+
								'</div>'+
								'<div class="checkbox">'+
									'<label><input type="checkbox" name="personIndustry[]" value="Water Supply; Sewerage, Waste Management and Remediation Activities">Water Supply; Sewerage, Waste Management and Remediation Activities</label> '+
								'</div>'+
								'<div class="checkbox">'+
									'<label><input type="checkbox" name="personIndustry[]" value="Construction">Construction</label> '+
								'</div>'+
								'<div class="checkbox">'+
									'<label><input type="checkbox" name="personIndustry[]" value="Wholesale and Retail; Repair of Motor Vehicles and Motor Cycles">Wholesale and Retail; Repair of Motor Vehicles and Motor Cycles</label> '+
								'</div>'+
								'<div class="checkbox">'+
									'<label><input type="checkbox" name="personIndustry[]" value="Transport and Storage">Transport and Storage</label> '+
								'</div>'+
								'<div class="checkbox">'+
									'<label><input type="checkbox" name="personIndustry[]" value="Accomodation and Food Service Activites">Accomodation and Food Service Activites</label> '+
								'</div>'+
								'<div class="checkbox">'+
									'<label><input type="checkbox" name="personIndustry[]" value="Information and Communication">Information and Communication</label> '+
								'</div>'+
								'<div class="checkbox">'+
									'<label><input type="checkbox" name="personIndustry[]" value="Financial and Insurance Activites">Financial and Insurance Activites</label> '+
								'</div>'+
								'<div class="checkbox">'+
									'<label><input type="checkbox" name="personIndustry[]" value="Real Estate Activites">Real Estate Activites</label> '+
								'</div>'+
								'<div class="checkbox">'+
									'<label><input type="checkbox" name="personIndustry[]" value="Professional, Scientific and Technical Activites">Professional, Scientific and Technical Activites</label> '+
								'</div>'+
								'<div class="checkbox">'+
									'<label><input type="checkbox" name="personIndustry[]" value="Adminstrative and Support Service Activites">Adminstrative and Support Service Activites</label> '+
								'</div>'+
								'<div class="checkbox">'+
									'<label><input type="checkbox" name="personIndustry[]" value="Education">Education</label> '+
								'</div>'+
								'<div class="checkbox">'+
									'<label><input type="checkbox" name="personIndustry[]" value="Human Health and Social Work Activites">Human Health and Social Work Activites</label> '+
								'</div>'+
								'<div class="checkbox">'+
									'<label><input type="checkbox" name="personIndustry[]" value="Arts, Entertainment and Recreation">Arts, Entertainment and Recreation</label> '+
								'</div>'+
								'<div class="checkbox">'+
									'<label><input type="checkbox" name="personIndustry[]" value="Other service activities">Other service activities</label> '+
								'</div>'+
							'</div>'+
						'</div>'+
					'</div>'+
				'</div>'+
				'<div class="panel panel-success">'+
					'<div class="panel-heading">'+
						'<h4>Employment/Business Location</h4>'+
					'</div>'+
					'<div class="panel-body">'+
						'<div class="form-group">'+ 
							'<div class="col-sm-10">'+
								'<div class="radio">'+
									'<label><input type="radio" name="personBusinessLocation" value="Within Iligan City" required>Within Iligan City</label> '+
								'</div>'+
								'<div class="radio">'+
									'<label><input type="radio" name="personBusinessLocation" value="Outside Iligan City" required>Outside Iligan City but within the Philippines</label> '+
								'</div>'+
								'<div class="radio">'+
									'<label><input type="radio" name="personBusinessLocation" value="Abroad" required>Abroad</label> '+
								'</div>'+								
							'</div>'+
						'</div>'+
					'</div>'+
				'</div>'+
				'<div class="panel panel-primary">'+
					'<div class="panel-heading">'+
						'<h4>Present Average Monthly Salary/Income:</h4>'+
					'</div>'+
					'<div class="panel-body">'+
						'<div class="form-group">'+ 
							'<div class="col-sm-10">'+
								'<div class="radio">'+
									'<label><input type="radio" name="personSalary" value="10,000 and below" required>10,000 and below</label> '+
								'</div>'+
								'<div class="radio">'+
									'<label><input type="radio" name="personSalary" value="10,001-20,000" required>10,001-20,000</label> '+
								'</div>'+	
								'<div class="radio">'+
									'<label><input type="radio" name="personSalary" value="20,001-30,000" required>20,001-30,000</label> '+
								'</div>'+	
								'<div class="radio">'+
									'<label><input type="radio" name="personSalary" value="30,001-40,000" required>30,001-40,000</label> '+
								'</div>'+	
								'<div class="radio">'+
									'<label><input type="radio" name="personSalary" value="40,001-50,000" required>40,001-50,000</label> '+
								'</div>'+	
								'<div class="radio">'+
									'<label><input type="radio" name="personSalary" value="50,001 and above" required>50,001 and above</label> '+
								'</div>'+
							'</div>'+
						'</div>'+		
					'</div>'+
				'</div>'+
				'<div class="panel panel-info">'+
					'<div class="panel-heading">'+
						'<h4>Number of jobs you have undertaken</h4>'+
					'</div>'+
					'<div class="panel-body">'+
						'<div class="form-group">'+ 
							'<label class="control-label col-sm-2" for="pwd">Number of Jobs:</label>'+
							'<div class="col-sm-10">'+
								'<select name="personNoOfJobs" class="form-control" required>'+
									'<option value="1">1</option>'+
									'<option value="2">2</option>'+
									'<option value="3">3</option>'+
									'<option value="4">4</option>'+
									'<option value="5">5</option>'+
									'<option value="6">6</option>'+
									'<option value="moreThanSix">Six Above</option>'+
								'</select>'+
							'</div>'+
						'</div>'+
						'<div class="form-group">'+
							'<label class="control-label col-sm-2" for="pwd">How long before you are employed:</label>'+
								'<div class="col-sm-10">'+
									'<select name="personLongEmployed" class="form-control" id="NoOfjobs" required>'+
										'<option value="6 months and below">6 months and below</option>'+
										'<option value="7 months - 1 year">7 months - 1 year</option>'+
										'<option value="More than 1 year - 2 years">More than 1 year - 2 years</option>'+
										'<option value="More than 2 years - 3 years">More than 2 years - 3 years</option>'+
										'<option value="More than 3 years and above">More than 3 years and above</option>'+
									'</select>'+
								'</div>'+
						'</div>'+
					'</div>'+
				'</div>'+
				'<div class="panel panel-primary">'+
					'<div class="panel-heading">'+
						'<h4>Nature of your work</h4>'+
					'</div>'+
					'<div class="panel-body">'+
						'<div class="form-group">'+ 
							'<div class="col-sm-10">'+
								'<div class="radio">'+
									'<label><input type="radio" name="personWorkPosition" onclick="removeOtherPositionField()" value="Chief Operating Officer" required>Chief Operating Officer</label> '+
								'</div>'+
								'<div class="radio">'+
									'<label><input type="radio" name="personWorkPosition" onclick="removeOtherPositionField()" value="Facilities Coordinator" required>Facilities Coordinator</label> '+
								'</div>'+	
								'<div class="radio">'+
									'<label><input type="radio" name="personWorkPosition" onclick="removeOtherPositionField()" value="Management Consultant" required>Management Consultant</label> '+
								'</div>'+	
								'<div class="radio">'+
									'<label><input type="radio" name="personWorkPosition" onclick="removeOtherPositionField()" value="Manager" required>Manager</label> '+
								'</div>'+	
								'<div class="radio">'+
									'<label><input type="radio" name="personWorkPosition" onclick="removeOtherPositionField()" value="Operations Research Analyst" required>Operations Research Analyst</label> '+
								'</div>'+	
								'<div class="radio" id="otherPosition">'+
									'<label><input type="radio" name="personWorkPosition" onclick="displayOtherPositionInput()" value="Others">Others (please specify)</label><input type="text" name="otherWorkPosition" placeholder="Type here" class="form-control hide" id="otherPositionField" style = "margin-top: 10px;"/>'+
								'</div>'+
							'</div>'+
						'</div>'+							
					'</div>'+
				'</div>'+
				'<div class="panel panel-success">'+
					'<div class="panel-heading">'+
						'<h4>Present Organizational Status</h4>'+
					'</div>'+
					'<div class="panel-body">'+
						'<div class="form-group">'+ 
							'<div class="col-sm-10">'+
								'<div class="radio">'+
									'<label><input type="radio" name="personOrganizationalStatus" value="Rank and File" required>Rank and File</label> '+
								'</div>'+
								'<div class="radio">'+
									'<label><input type="radio" name="personOrganizationalStatus" value="Supervisory" required>Supervisory</label> '+
								'</div>'+	
								'<div class="radio">'+
									'<label><input type="radio" name="personOrganizationalStatus" value="Middle Manager" required>Middle Manager</label> '+
								'</div>'+	
								'<div class="radio">'+
									'<label><input type="radio" name="personOrganizationalStatus" value="Top Level Manager" required>Top Level Manager</label> '+
								'</div>'+	
								'<div class="radio">'+
									'<label><input type="radio" name="personOrganizationalStatus" value="Management" required>Management</label> '+
								'</div>'+	
							'</div>'+
						'</div>'+							
					'</div>'+
				'</div>'
				);
		}
		function removeOtherPositionField()
		{
			$('#otherPositionField').addClass('hide');
		}
		function displayOtherPositionInput()
		{
			$('#otherPositionField').removeClass('hide');
		}
		function emptyForEmployed()
		{
			$('.foremployed').empty();
		}
		function validate()
		{
			var inputName = $('#personName').val();
			if(inputName.length < 5)
			{
				$('#submitButton').addClass('hide');
			}
			else{
				$('#submitButton').removeClass('hide');
			}
		}
	</script>
</body>
</html>