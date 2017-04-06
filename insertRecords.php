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
	($_POST['personWorkPosition'] == 'Others') ?  mysqli_escape_string($con, $position = $_POST['otherWorkPosition']) : $position = $_POST['personWorkPosition']; 
	$bitch = mysqli_query($con, 'update employed set BusinessLocation = "'.$_POST['personBusinessLocation'].'", Salary = "'.$_POST['personSalary'].'", noOfJobs = "'.$_POST['personNoOfJobs'].'", employDate="'.$_POST['personLongEmployed'].'", organizationalStatus = "'.$_POST['personOrganizationalStatus'].'", natureOfWork = "'.$position.'" where user_id = "'.$latestId.'"');	
	if(!$bitch){die(mysqli_error($con));}
}
$ratingOne = $_POST['ratingOne'];
$ratingTwo = $_POST['ratingTwo'];
// if(isset($_POST['Faith'])){
// 	$faithAnswers = $_POST['Faith'];
// }
// if(isset($_POST['Excellence']))
// {
// 	$excellenceAnswers = $_POST['Excellence'];
// }
// if(isset($_POST['Service']))
// {
// 	$serviceAnswers = $_POST['Service'];
// }
if(isset($_POST['Faith']))
{
	foreach($_POST['Faith'] as $fA)
	{
		$sql = mysqli_query($con, 'insert into faith values("", "'.$latestId.'", "'.$fA.'")');
	}
	
}
if(isset($_POST['Excellence']))
{
	foreach($_POST['Excellence'] as $eA)
	{
		$sql = mysqli_query($con, 'insert into excellence values("", "'.$latestId.'", "'.$eA.'")');
	}
}
if(isset($_POST['Service']))
{
	foreach($_POST['Service'] as $sA)
	{
		$sql = mysqli_query($con, 'insert into service values("", "'.$latestId.'", "'.$sA.'")');
	}
}

$skillsDevelopedArray = ['Convey ideas clearly both oral and written in English', 'Prepare, analyze and evaluate reports proposal and concepts paper', 'Demonstrate the values of fairness, transparency, accountability, hard work, honesty, patient, diligence and innovativeness risk taking', 'Apply the principles of the different forms of communication', 'Develop the ability to access, retrieve and disseminate information using IT', 'Perform quality work', 'Understand the concepts and principles of good interpersonal relations', 'Develop a wholesome personality', 'Participate actively in business association and comply with their policies and obligations', 'Demonstrate leadership qualities, civic-mindedness and responsive citizenship', 'Conduct environmental scanning', 'Conduct feasibility study and other business research/plan', 'Explain the concepts, approaches and techniques of environmental conservation', 'Know and understand country\'s national development, trust, concerns and socio economic indicators'];
for($i = 0; $i < count($_POST['ratingOne']); $i++)
{
	mysqli_query($con, 'insert into questionanswers values("", "'.$latestId.'", "'.$skillsDevelopedArray[$i].'", "'.$ratingOne[$i].'", "'.$ratingTwo[$i].'")');
}

// echo '<script>alert("Success!"); window.location.href="index.php";</script>';