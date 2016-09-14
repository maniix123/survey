<?php
	$data = $_POST['option'];
	switch ($data) {
		case 'displayAll':
			displayAll();
			break;
		case 'displayBySchoolYear':
			displayBySchoolYear($_POST['schoolyear']);
			break;
		default:
			# code...
			break;
	}

function displayAll()
{
	include '../../../../connect.php';
	$return_arr = [];
	$total = mysqli_query($con, 'select count(*) as Total from user;');
	$row = mysqli_fetch_array($total);
	$rowArray['Total'] = $row['Total'];
	$query = mysqli_query($con, 'select SchoolYear, count(*) as TotalStudents from user group by SchoolYear');
	while($row = mysqli_fetch_array($query))
	{
		$rowArray['SchoolYear'] = $row['SchoolYear'];
		$rowArray['TotalStudents'] = $row['TotalStudents'];
		array_push($return_arr, $rowArray);
	}
	echo json_encode($return_arr);
}
function displayBySchoolYear($schoolYear)
{
	include '../../../../connect.php';
	$return_arr = [];
	$total = mysqli_query($con, 'select count(*) as Total from user where SchoolYear = "'.$schoolYear.'";');
	$row = mysqli_fetch_array($total);
	$rowArray['Total'] = $row['Total'];
	$query = mysqli_query($con, 'select SchoolYear, EmploymentStatus, count(*) as TotalStudents from user where SchoolYear = "'.$schoolYear.'" group by SchoolYear, EmploymentStatus');
	if(mysqli_num_rows($query) == 0)
	{
		echo 'No results match your query..';
		die();
	}
	while($row = mysqli_fetch_array($query))
	{
		$rowArray['TotalStudents'] = $row['TotalStudents'];
		$rowArray['EmploymentStatus'] = $row['EmploymentStatus'];
		array_push($return_arr, $rowArray);
	}
	echo json_encode($return_arr);
}
