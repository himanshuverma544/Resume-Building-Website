<?php
session_start(); //start the session
?>

<html>

<head> <title> Contact </title> </head>

<h2><b> Your Contact </b></h2>

<style>

h2{ text-align: center;
    text-transform: uppercase;
    color: white;
	margin-top: 100px;
	border: 1px solid black;
	background-color: #ff9142;
	}

input[type=text], input[type=email], input[type=number_format] {
	background: #f1f1f1;
	margin: 5px 0 22px 0;
}

</style>


<?php include 'bootstrap.html'?> </head>

<body>


<?php

/*Name.php*/
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];

$_SESSION['firstName'] = $firstName;
$_SESSION['lastName'] = $lastName;

?> 


<div class = "container">

<form action="Education.php" method = "POST"/>

<div class="card mx-auto mt-5" style="width: 25rem;">
  <div class="card-body">

<b>Address</b> <input type = "text" name ="address" placeholder="Enter Address" class="form-control mb-2"/>
<br><br>
<b>City</b> <input type = "text" name ="city" placeholder="Enter City" class="form-control"/>
<br><br>
<b>Zip Code</b> <input type = "text" name = "zipCode" placeholder="Enter Zip Code" class="form-control"/>
<br><br>
<b>Country</b> <input type = "text" name ="country" placeholder="Enter Country" class="form-control"/>
<br><br>
<b>Email Address</b> <input type = "email" name ="email" placeholder="Enter Email Address" class="form-control"/>
<br><br>
<b>Mobile No.</b> <input type = "number_format" name ="mobileNo" placeholder="Enter Mobile No." class="form-control"/>

<input type ="submit" value = "Done" style="width:100%" class="mt-3 btn btn-success"/>

</form>

<body>
<html>
