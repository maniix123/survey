<?php
include 'connect.php';
if(!isset($_POST['personName'])){echo '<script>alert("You are not allowed here!"); window.location.href="index.php";</script>';die();}
$name = mysqli_real_escape_string($con, $_POST['personName']);
if(strlen($name) < 5){echo '<script>alert("Please provide a legit name!"); window.history.back();</script>';die();}
$age = $_POST['personAge'];
$gender = $_POST['personGender'];
$schoolYear = $_POST['personGraduated'];
$employmentStatus = $_POST['personEmploymentStatus'];
$comments = mysqli_real_escape_string($con, $_POST['comments']);
$sql = mysqli_query($con, 'insert into user values ("", "'.ucwords($name).'", "'.$age.'", "'.$gender.'", "'.$schoolYear.'", "'.$employmentStatus.'", "'.$comments.'")');
$latestId = mysqli_insert_id($con);
if($employmentStatus != 'Unemployed')
{
	foreach($_POST['personIndustry'] as $industry)
	{
		$fuck = mysqli_query($con, 'insert into employed values ("", "'.$latestId.'", "'.$industry.'", "", "", "", "", "", "")');
	}
	($_POST['personWorkPosition'] == 'Others') ?  mysqli_escape_string($position = $_POST['otherWorkPosition']) : $position = $_POST['personWorkPosition']; 
	$bitch = mysqli_query($con, 'update employed set BusinessLocation = "'.$_POST['personBusinessLocation'].'", Salary = "'.$_POST['personSalary'].'", noOfJobs = "'.$_POST['personNoOfJobs'].'", employDate="'.$_POST['personLongEmployed'].'", organizationalStatus = "'.$_POST['personOrganizationalStatus'].'", natureOfWork = "'.$position.'"');	
	if(!$bitch){die(mysqli_error($con));}
}
$ratingOne = $_POST['ratingOne'];
$ratingTwo = $_POST['ratingTwo'];
for($i = 0; $i < count($_POST['ratingOne']); $i++)
{
	mysqli_query($con, 'insert into questionanswers values("", "'.$latestId.'", "'.$ratingOne[$i].'", "'.$ratingTwo[$i].'")');
}
echo '<script>alert("Success!"); window.location.href="index.php";</script>';