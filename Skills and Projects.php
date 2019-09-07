<?php
session_start(); //start the session
?>

<html>

<head> <title>Skills and Projects</title> </head>

<h2><b> Your Skills and Projects </b></h2>

<style>

input[type=text]{
	background: #f1f1f1;
	margin: 5px 0 22px 0;
}

span.edit_line {
	font-size: 1.7em;
   }

h2{ text-align: center;
    text-transform: uppercase;
    color: white;
	margin-top: 100px;
	border: 1px solid black;
	background-color: #ff9142;
	}
</style>

<?php include 'bootstrap.html'?> 

<body>

<?php

/*Education*/
$gInstituteName = $_POST['gInstituteName'];
$gCity = $_POST['gCity'];
$gState = $_POST['gState'];
$gFieldOfStudy = $_POST['gFieldOfStudy'];
$gDegree = $_POST['gDegree'];  

$sInstituteName = $_POST['sInstituteName'];
$sCity = $_POST['sCity'];
$sState = $_POST['sState'];
$sFieldOfStudy = $_POST['sFieldOfStudy'];

//Graduation
$_SESSION['gInstituteName'] = $gInstituteName;
$_SESSION['gCity'] = $gCity;
$_SESSION['gState'] = $gState;
$_SESSION['gFieldOfStudy'] = $gFieldOfStudy;
$_SESSION['gDegree'] = $gDegree;

//Schooling
$_SESSION['sInstituteName'] = $sInstituteName;
$_SESSION['sCity'] = $sCity;
$_SESSION['sState'] = $sState;
$_SESSION['sFieldOfStudy'] = $sFieldOfStudy;

?>



<form action = "Professional Summary.php " method= "POST">

<div class="card mx-auto mt-5" style= "width: 25rem;">
  <div class="card-body">

<span class= "edit_line"> <b><u>Skills</u></b> </span>
<br><br>
<b>Skill 1</b> <input type = "text" name = "skill1" placeholder="Enter Skill 1" class="form-control mb-2"/>
<br><br>
<b>Skill 2</b> <input type = "text" name = "skill2" placeholder="Enter Skill 2" class="form-control"/>
<br><br>
<b>Skill 3</b> <input type = "text" name = "skill3" placeholder="Enter Skill 3" class="form-control"/>
<br><br>
<b>Skill 4</b> <input type = "text" name = "skill4" placeholder="Enter Skill 4" class="form-control"/>
<br><br>
<b>Skill 5</b> <input type = "text" name = "skill5" placeholder="Enter Skill 5" class="form-control"/>
<br><br><br>

<span class= "edit_line"> <b><u>Projects</u></b> </span>
<br><br>
<b>Project 1</b> <input type = "text" name = "project1" placeholder="Enter Project 1" class="form-control"/>
<br><br>
<b>Project 2</b> <input type = "text" name = "project2" placeholder="Enter Project 2" class="form-control"/>
<br><br>
<b>Project 3</b> <input type = "text" name = "project3" placeholder="Enter Project 3" class="form-control"/>
<br><br>
<b>Project 4</b> <input type = "text" name = "project4" placeholder="Enter Project 4" class="form-control"/>
<br><br>
<b>Project 5</b> <input type = "text" name = "project5" placeholder="Enter Project 5" class="form-control"/>
<br><br>
<b>Project 6<b> <input type = "text" name = "project6" placeholder="Enter Project 6" class="form-control"/>

<input type ="submit" value = "Done" style="width:100%" class="mt-3 btn btn-success"/>
</form>

</body>
</html>