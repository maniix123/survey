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
				<label class="control-label col-sm-2">Select Schoolyear:</label>
				<div class="col-sm-10"> 
					<select name="personGraduated" id="" class="form-control" required onchange="displayBySchoolYear(this.value)">
						<?php for($i = (date('Y') -20); $i <= (date('Y') +20); $i++):?>
							<option value="<?php echo $i ?> - <?php echo $i+1 ?>">S.Y. <?php echo $i ?> - <?php echo $i+1 ?></option>
						<?php endfor;?>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<!-- Bar graf -->
					<div class="barGraphContainer">
					</div>
				</div>
			</div>
		</div>
		<div class="well">
			<div class="row">
				<div class="col-lg-12">
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
</div>
<script src = "js/Handler.js"></script>
</body>
</html>