<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Page</title>
	<script src="node_modules/chart.js/dist/Chart.js"></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs-3.3.6/dt-1.10.12/datatables.min.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/v/bs-3.3.6/dt-1.10.12/datatables.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
	<script src="//cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
	<script src="//cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
	<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
	<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<div class="container">
		<div class="well">
			<h1 class="text-center">Welcome Admin</h1>
			<h3>General Overview</h3>
			<hr>
			<canvas id="myChart"></canvas>
			<p class="text-center">Total Students: <span id="total"></span></p>
		</div>
		<div class="well">
			<div class="row">
				<div class="col-lg-12">
					<h3 class="text-center">Users Table</h3>
					<hr>
					<div class="table-responsive">
						<table class="table" id="userTable">
							<thead>
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Age</th>
									<th>Gender</th>
									<th>SchoolYear</th>
									<th>EmploymentStatus</th>
									<th>comments</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								include '../../../../connect.php';
								$query = mysqli_query($con, 'select * from user');
								while($row = mysqli_fetch_array($query))
								{
									echo '<tr>
									<td>' .$row['ID']. '</td>
									<td>' .$row['Name']. '</td>
									<td>' .$row['Age']. '</td>
									<td>' .$row['Gender']. '</td>
									<td>' .$row['SchoolYear']. '</td>
									<td>' .$row['EmploymentStatus'] .'</td>
									<td>' .$row['comments']. '</td>
								</tr>';
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="well">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="text-center">Faith</h3>
				<hr>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>Faith</th>
								<th>Frequency</th>
								<th>Percentage</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$F = mysqli_query($con, 'select answers, count(*) as totalStudents from faith group by answers with rollup');
							$G = mysqli_query($con, 'select count(answers) as total from faith');
							$H = mysqli_fetch_array($G);
							$total = $H['total'];
							while($row = mysqli_fetch_array($F))
							{
								echo '<tr>
								<td>' .($row['answers'] !== NULL ? $row['answers'] : '<b>Total</b>'). '</td>
								<td>' .$row['totalStudents']. '</td>
								<td>' .$row['totalStudents'] / $total * 100 . '%</td>
							</tr>';
						}
						?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="well">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="text-center">Excellence</h3>
				<hr>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>Excellence</th>
								<th>Frequency</th>
								<th>Percentage</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$F = mysqli_query($con, 'select answers, count(*) as totalStudents from excellence group by answers with rollup');
							$G = mysqli_query($con, 'select count(answers) as total from excellence');
							$H = mysqli_fetch_array($G);
							$total = $H['total'];
							while($row = mysqli_fetch_array($F))
							{
								echo '<tr>
								<td>' .($row['answers'] !== NULL ? $row['answers'] : '<b>Total</b>'). '</td>
								<td>' .$row['totalStudents']. '</td>
								<td>' .$row['totalStudents'] / $total * 100 . '%</td>
							</tr>';
						}
						?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="well">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="text-center">Service</h3>
				<hr>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>Service</th>
								<th>Frequency</th>
								<th>Percentage</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$F = mysqli_query($con, 'select answers, count(*) as totalStudents from service group by answers with rollup');
							$G = mysqli_query($con, 'select count(answers) as total from service');
							$H = mysqli_fetch_array($G);
							$total = $H['total'];
							while($row = mysqli_fetch_array($F))
							{
								echo '<tr>
								<td>' .($row['answers'] !== NULL ? $row['answers'] : '<b>Total</b>'). '</td>
								<td>' .$row['totalStudents']. '</td>
								<td>' .$row['totalStudents'] / $total * 100 . '%</td>
							</tr>';
						}
						?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="well">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="text-center">Number of jobs undertaken</h3>
				<hr>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>Service</th>
								<th>Frequency</th>
								<th>Percentage</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$F = mysqli_query($con, 'select noOfJobs, count(*) as totalStudents from employed group by noOfJobs with rollup');
							$G = mysqli_query($con, 'select count(noOfJobs) as total from employed');
							$H = mysqli_fetch_array($G);
							$total = $H['total'];
							while($row = mysqli_fetch_array($F))
							{
								echo '<tr>
								<td>' .($row['noOfJobs'] !== NULL ? $row['noOfJobs'] : '<b>Total</b>'). '</td>
								<td>' .$row['totalStudents']. '</td>
								<td>' .$row['totalStudents'] / $total * 100 . '%</td>
							</tr>';
						}
						?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="well">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="text-center">Length of time before they are employed</h3>
				<hr>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>How long before they got employed</th>
								<th>Frequency</th>
								<th>Percentage</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$F = mysqli_query($con, 'select employDate, count(*) as totalStudents from employed group by employDate with rollup');
							$G = mysqli_query($con, 'select count(employDate) as total from employed');
							$H = mysqli_fetch_array($G);
							$total = $H['total'];
							while($row = mysqli_fetch_array($F))
							{
								echo '<tr>
								<td>' .($row['employDate'] !== NULL ? $row['employDate'] : '<b>Total</b>'). '</td>
								<td>' .$row['totalStudents']. '</td>
								<td>' .$row['totalStudents'] / $total * 100 . '%</td>
							</tr>';
						}
						?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="well">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="text-center">Year graduated</h3>
				<hr>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>Year graduated</th>
								<th>Frequency</th>
								<th>Percentage</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$F = mysqli_query($con, 'select SchoolYear, count(*) as totalStudents from user group by SchoolYear with rollup');
							$G = mysqli_query($con, 'select count(SchoolYear) as total from user');
							$H = mysqli_fetch_array($G);
							$total = $H['total'];
							while($row = mysqli_fetch_array($F))
							{
								echo '<tr>
								<td>' .($row['SchoolYear'] !== NULL ? $row['SchoolYear'] : '<b>Total</b>'). '</td>
								<td>' .$row['totalStudents']. '</td>
								<td>' .$row['totalStudents'] / $total * 100 . '%</td>
							</tr>';
						}
						?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="well">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="text-center">Employment stuatus of the respondents</h3>
				<hr>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>Employment Status</th>
								<th>Frequency</th>
								<th>Percentage</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$F = mysqli_query($con, 'select EmploymentStatus, count(*) as totalStudents from user group by EmploymentStatus with rollup');
							$dawd = mysqli_query($con, 'select count(EmploymentStatus) as total from user');
							$dadwadwa = mysqli_fetch_array($dawd);
							$total = $dadwadwa['total'];
							while($row = mysqli_fetch_array($F))
							{
								echo '<tr>
									<td>' .($row['EmploymentStatus'] !== NULL ? $row['EmploymentStatus'] : '<b>Total</b>'). '</td>
									<td>' .$row['totalStudents']. '</td>
									<td>' .$row['totalStudents'] / $total * 100 .'%</td>
								</tr>';
							}
						?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="well">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="text-center">Industry Sector</h3>
				<hr>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>Industry Sector</th>
								<th>Frequency</th>
								<th>Percentage</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$percentage = ''; 
							$F = mysqli_query($con, 'select IndustrySector, count(*) as totalStudents from employed group by IndustrySector with rollup');
							$G = mysqli_query($con, 'select count(IndustrySector) as total from employed');
							$H = mysqli_fetch_array($G);
							$total = $H['total'];
							while($row = mysqli_fetch_array($F))
							{
								echo '<tr>
								<td>' .($row['IndustrySector'] !== NULL ? $row['IndustrySector'] : '<b>Total</b>'). '</td>
								<td>' .$row['totalStudents']. '</td>
								<td>' .$row['totalStudents'] / $total * 100 .'%</td>
							</tr>';
						}
						?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="well">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="text-center">Location</h3>
				<hr>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>Location</th>
								<th>Frequency</th>
								<th>Percentage</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$F = mysqli_query($con, 'select BusinessLocation, count(*) as totalStudents from employed group by BusinessLocation with rollup');
							$G = mysqli_query($con, 'select count(BusinessLocation) as total from employed');
							$H = mysqli_fetch_array($G);
							$total = $H['total'];
							while($row = mysqli_fetch_array($F))
							{
								echo '<tr>
								<td>' .($row['BusinessLocation'] !== NULL ? $row['BusinessLocation'] : '<b>Total</b>'). '</td>
								<td>' .$row['totalStudents']. '</td>
								<td>' .$row['totalStudents'] / $total * 100 . '%</td>
							</tr>';
						}
						?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="well">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="text-center">Nature of Work</h3>
				<hr>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>Nature of Work</th>
								<th>Frequency</th>
								<th>Percentage</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$F = mysqli_query($con, 'select natureOfWork, count(*) as totalStudents from employed group by natureOfWork with rollup');
							$G = mysqli_query($con, 'select count(natureOfWork) as total from employed');
							$H = mysqli_fetch_array($G);
							$total = $H['total'];
							while($row = mysqli_fetch_array($F))
							{
								echo '<tr>
								<td>' .($row['natureOfWork'] !== NULL ? $row['natureOfWork'] : '<b>Total</b>'). '</td>
								<td>' .$row['totalStudents']. '</td>
								<td>' .$row['totalStudents'] / $total * 100 . '%</td>
							</tr>';
						}
						?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="well">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="text-center">Present Organizational Status</h3>
				<hr>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>Present Organizational Status</th>
								<th>Frequency</th>
								<th>Percentage</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$F = mysqli_query($con, 'select organizationalStatus, count(*) as totalStudents from employed group by organizationalStatus with rollup');
							$G = mysqli_query($con, 'select count(organizationalStatus) as total from employed');
							$H = mysqli_fetch_array($G);
							$total = $H['total'];
							while($row = mysqli_fetch_array($F))
							{
								echo '<tr>
								<td>' .($row['organizationalStatus'] !== NULL ? $row['organizationalStatus'] : '<b>Total</b>'). '</td>
								<td>' .$row['totalStudents']. '</td>
								<td>' .$row['totalStudents'] / $total * 100 . '%</td>
							</tr>';
						}
						?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="well">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="text-center">Monthly Income</h3>
				<hr>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>Present Average Monthly Salary/Income</th>
								<th>Frequency</th>
								<th>Percentage</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$F = mysqli_query($con, 'select Salary, count(*) as totalStudents from employed group by Salary with rollup');
							$G = mysqli_query($con, 'select count(Salary) as total from employed');
							$H = mysqli_fetch_array($G);
							$total = $H['total'];
							while($row = mysqli_fetch_array($F))
							{
								echo '<tr>
								<td>' .($row['Salary'] !== NULL ? $row['Salary'] : '<b>Total</b>'). '</td>
								<td>' .$row['totalStudents']. '</td>
								<td>' .$row['totalStudents'] / $total * 100 . '%</td>
							</tr>';
						}
						?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="well">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="text-center">Skills developed in SMC</h3>
				<hr>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>Skills developed in SMC</th>
								<th>Mean</th>
								<th>Interpretation</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$F = mysqli_query($con, 'select skillsDevelopedQuestion, round(avg(skillsDeveloped),1) as skillsDevelopedAverage from questionanswers group by skillsDevelopedQuestion with rollup');
							$Interpretation = '';
							while($row = mysqli_fetch_array($F))
							{
								if((floatval($row['skillsDevelopedAverage']) >= 1.00) and (floatval($row['skillsDevelopedAverage']) <= 1.80 ))
								{
									$Interpretation = 'Very Poor';
								}
								else if((floatval($row['skillsDevelopedAverage']) >= 1.81) and (floatval($row['skillsDevelopedAverage']) <= 2.60  ))
								{
									$Interpretation = 'Poor';
								}
								else if((floatval($row['skillsDevelopedAverage']) >= 2.61) and (floatval($row['skillsDevelopedAverage']) <= 3.40 ))
								{
									$Interpretation = 'Fair';
								}
								else if((floatval($row['skillsDevelopedAverage']) >= 3.41) and (floatval($row['skillsDevelopedAverage']) <= 4.20 ))
								{
									$Interpretation = 'Good';
								}
								else if((floatval($row['skillsDevelopedAverage']) >= 4.21) and (floatval($row['skillsDevelopedAverage']) <= 5.00 ))
								{
									$Interpretation = 'Excellent';
								}
								echo '<tr>
								<td>' .($row['skillsDevelopedQuestion'] !== NULL ? $row['skillsDevelopedQuestion'] : '<b>z-Total</b>'). '</td>
								<td>' .$row['skillsDevelopedAverage']. '</td>
								<td>' .$Interpretation. '</td>
							</tr>';
						}
						?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="well">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="text-center">Relevance of the skills developed in SMC</h3>
				<hr>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>Relevance of the Skills Developed from SMC</th>
								<th>Mean</th>
								<th>Interpretation</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$F = mysqli_query($con, 'select skillsDevelopedQuestion, round(avg(skillRelevance),1) as skillRelevanceAverage from questionanswers group by skillsDevelopedQuestion with rollup');
							$Interpretation = '';
							while($row = mysqli_fetch_array($F))
							{
								if((floatval($row['skillRelevanceAverage']) >= 1.00) and (floatval($row['skillRelevanceAverage']) <= 1.80 ))
								{
									$Interpretation = 'Very Poor';
								}
								else if((floatval($row['skillRelevanceAverage']) >= 1.81) and (floatval($row['skillRelevanceAverage']) <= 2.60  ))
								{
									$Interpretation = 'Poor';
								}
								else if((floatval($row['skillRelevanceAverage']) >= 2.61) and (floatval($row['skillRelevanceAverage']) <= 3.40 ))
								{
									$Interpretation = 'Fair';
								}
								else if((floatval($row['skillRelevanceAverage']) >= 3.41) and (floatval($row['skillRelevanceAverage']) <= 4.20 ))
								{
									$Interpretation = 'Good';
								}
								else if((floatval($row['skillRelevanceAverage']) >= 4.21) and (floatval($row['skillRelevanceAverage']) <= 5.00 ))
								{
									$Interpretation = 'Excellent';
								}
								echo '<tr>
								<td>' .($row['skillsDevelopedQuestion'] !== NULL ? $row['skillsDevelopedQuestion'] : '<b>z-Total</b>'). '</td>
								<td>' .$row['skillRelevanceAverage']. '</td>
								<td>' .$Interpretation. '</td>
							</tr>';
						}
						?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<script src = "js/Handler.js"></script>
</body>
</html>