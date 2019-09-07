<?php
session_start(); //start the session
?>

<html>

<head> <title> Education</title> </head>

<h2><b> Your Education </b></h2>


<style>

h2{ text-align: center;
    text-transform: uppercase;
    color: white;
	margin-top: 100px;
	border: 1px solid black;
	background-color: #ff9142;
	}

span.edit_line {
	font-size: 1.7em;
   }

input[type=text]{
	background: #f1f1f1;
	margin: 5px 0 22px 0;
}
</style>
<?php include 'bootstrap.html'?> </head>

<body>

<?php

/*Contact*/
$address = $_POST['address'];
$city = $_POST['city'];
$zipCode = $_POST['zipCode'];
$country = $_POST['country'];
$email = $_POST['email'];
$mobileNo = $_POST['mobileNo'];

$_SESSION['address'] = $address;
$_SESSION['city'] = $city;
$_SESSION['zipCode'] = $zipCode;
$_SESSION['country'] = $country;
$_SESSION['email'] = $email;
$_SESSION['mobileNo'] = $mobileNo;

?>

<div class = "container">

<form action="Skills and Projects.php" method="POST">

<div class="card mx-auto mt-5" style="width: 25rem;">
  <div class="card-body">

<span class= "edit_line"> <b><u>Graduation</u></b> </span>
<br><br>
<b>Institute Name</b> <input type="text" name = "gInstituteName" placeholder = "Enter Institute Name" class="form-control mb-2"/>
<br><br>
<b>City</b> <input type="text" name = "gCity" placeholder="Enter City" class="form-control"/>
<br><br>
<b>State</b> <input type= "text" name = "gState" placeholder="Enter State" class="form-control"/>
<br><br>
<b>Field of Study</b> <input type ="text" name = "gFieldOfStudy"  placeholder="Enter Field of Study" class = "form-control"/>
<br><br>
<b>Degree</b> <input list="degree" name="gDegree" placeholder="Enter Degree" class="form-control">
  <datalist id="degree">
    <option value="Bachelor of Technology">
    <option value="MBA">
    <option value="Ph.D.">
    <option value="Master of Arts">
    <option value="BBA">
  </datalist>
<br><br>
<br>
<span class= "edit_line"> <b><u>Schooling</u></b> </span>
<br><br>
<b>Institute Name</b>  <input type="text" name="sInstituteName" placeholder="Enter Institute Name" class="form-control"/>
<br><br>
<b>City</b> <input type="text" name="sCity" placeholder="Enter City" class="form-control"/>
<br><br>
<b>State</b> <input type = "text" name = "sState" placeholder="Enter State" class="form-control"/>
<br><br>
<b>Field of Study</b> <input type ="text" name = "sFieldOfStudy" placeholder="Enter Field of Study" class="form-control"/>

<input type="submit" value = "Done" style="width:100%" class="mt-3 btn btn-success"/>
 
</form>


</body>
</html>