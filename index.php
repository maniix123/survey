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
				<div class="well">
					<h3 class="text-center"><b>What values did your Alma Mater help you develop that you are now practicing in your life work?</b></h3>
					<p class="text-center">(You may check more than one answer.)</p>
					<hr>
					<div class="row">
						<div class="col-lg-4 threeCol">
							<h4>A. FAITH</h4>
							<div class="checkbox">
								<label><input type="checkbox" name="Faith[]" value="Strong Faith in God">Strong Faith in God</label> 
							</div>	
							<div class="checkbox">
								<label><input type="checkbox" name="Faith[]" value="Prophetic witness to Gospel values">Prophetic witness to Gospel values</label> 
							</div>
							<div class="checkbox">
								<label><input type="checkbox" name="Faith[]" value="Nationalism">Nationalism</label> 
							</div>	
							<div class="checkbox">
								<label><input type="checkbox" name="Faith[]" value="Justice">Justice</label> 
							</div>							
						</div>
						<div class="col-lg-4 threeCol">
							<h4>B. EXCELLENCE</h4>
							<div class="checkbox">
								<label><input type="checkbox" name="Excellence[]" value="Integrity">Integrity</label> 
							</div>
							<div class="checkbox">
								<label><input type="checkbox" name="Excellence[]" value="Competence">Competence</label> 
							</div>	
							<div class="checkbox">
								<label><input type="checkbox" name="Excellence[]" value="Resourcefulness">Resourcefulness</label> 
							</div>	
							<div class="checkbox">
								<label><input type="checkbox" name="Excellence[]" value="Discipline">Discipline</label> 
							</div>		
						</div>
						<div class="col-lg-4 threeCol">
							<h4>C. SERVICE</h4>
							<div class="checkbox">
								<label><input type="checkbox" name="Service[]" value="Stewardship">Stewardship</label> 
							</div>
							<div class="checkbox">
								<label><input type="checkbox" name="Service[]" value="Humility">Humility</label> 
							</div>	
							<div class="checkbox">
								<label><input type="checkbox" name="Service[]" value="Charity">Charity</label> 
							</div>	
							<div class="checkbox">
								<label><input type="checkbox" name="Service[]" value="Courage">Courage</label> 
							</div>	
							<div class="checkbox">
								<label><input type="checkbox" name="Service[]" value="Preferential Love the Poor">Preferential Love the Poor</label> 
							</div>		
						</div>
					</div>
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
	<script src="js/handler.js"></script>
</body>
</html>