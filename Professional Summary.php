<?php
session_start(); //start the session
?>

<html>

<head> <title>Professional Summary </title> </head>

<h2><b>Your Professional Summary</b></h2>

<style>

h2 { text-align: center;
     text-transform: uppercase;
     color: white;
	 margin-top: 100px;
	 border: 1px solid black;
	 background-color: #ff9142;
   }

span.edit_line {
	font-size: 1.7em;
   }

textarea.edit_textarea {
	background: #f1f1f1;
}
</style>

<?php include 'bootstrap.html'?> 

<body>

<?php

/*Skills and Projects.php*/
$skill1 = $_POST['skill1']; 
$skill2 = $_POST['skill2'];
$skill3 = $_POST['skill3'];
$skill4 = $_POST['skill4'];
$skill5 = $_POST['skill5'];

$project1 = $_POST['project1'];
$project2 = $_POST['project2'];
$project3 = $_POST['project3'];
$project4 = $_POST['project4'];
$project5 = $_POST['project5'];
$project6 = $_POST['project6'];


//Skills
$_SESSION['skill1'] = $skill1;
$_SESSION['skill2'] = $skill2;
$_SESSION['skill3'] = $skill3;
$_SESSION['skill4'] = $skill4;
$_SESSION['skill5'] = $skill5;

//Projects
$_SESSION['project1'] = $project1;
$_SESSION['project2'] = $project2;
$_SESSION['project3'] = $project3;
$_SESSION['project4'] = $project4;
$_SESSION['project5'] = $project5;
$_SESSION['project6'] = $project6;

?>


<form action="sendToDatabase.php" method = "POST">

<div class="card mx-auto mt-5" style= "width: 25rem;">
  <div class="card-body">
  
<span class= "edit_line"> <b>Professional Summary</b> </span>
<br>
  <textarea  name="professionalSummary" placeholder="Enter Professional Summary" rows="10" cols="35"
             class="edit_textarea" class="form-control">
  </textarea>
  <br>
  <input type="submit" value="Done" class="mt-3 btn btn-success" style="width:100%"/>
</form>

</body>
</html>
