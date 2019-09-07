<?php
session_start();
?>

<html>
<head> <title> sendToDatabase </title> </head>
<a href="dataRetrieve.php"><center><h1>NOW CHECK YOUR RESUME.</h1></center></a>
<body>

<?php

/*Name.php*/

$firstName = $_SESSION['firstName'];
$lastName = $_SESSION['lastName'];

$name_arr = array("$firstName","$lastName"); 
$serialized_name_arr = serialize($name_arr);


/*Education.php*/

$gInstituteName = $_SESSION['gInstituteName'];
$gCity = $_SESSION['gCity'];
$gState = $_SESSION['gState'];
$gFieldOfStudy = $_SESSION['gFieldOfStudy'];
$gDegree = $_SESSION['gDegree'];  

$sInstituteName = $_SESSION['sInstituteName'];
$sCity = $_SESSION['sCity'];
$sState = $_SESSION['sState'];
$sFieldOfStudy = $_SESSION['sFieldOfStudy'];

$edu_arr = array("$gInstituteName","$gCity","$gState","$gFieldOfStudy","$gDegree",
                 "$sInstituteName","$sCity","$sState","$sFieldOfStudy");
$serialized_edu_arr = serialize($edu_arr);



/*Contact.php*/

$address = $_SESSION['address'];
$city = $_SESSION['city'];
$zipCode = $_SESSION['zipCode'];
$country = $_SESSION['country'];
$email = $_SESSION['email'];
$mobileNo = $_SESSION['mobileNo'];

$contact_arr = array("$address","$city","$zipCode","$country","$email","$mobileNo");
$serialized_contact_arr = serialize($contact_arr);



/*Skills and Projects.php*/

$skill1 = $_SESSION['skill1']; 
$skill2 = $_SESSION['skill2'];
$skill3 = $_SESSION['skill3'];
$skill4 = $_SESSION['skill4'];
$skill5 = $_SESSION['skill5'];

$skills_arr = array("$skill1","$skill2","$skill3","$skill4","$skill5");
$serialized_skills_arr = serialize($skills_arr); 

$project1 = $_SESSION['project1'];
$project2 = $_SESSION['project2'];
$project3 = $_SESSION['project3'];
$project4 = $_SESSION['project4'];
$project5 = $_SESSION['project5'];
$project6 = $_SESSION['project6'];

$project_arr = array("$project1","$project2","$project3","$project4","$project5","$project6");
$serialized_project_arr = serialize($project_arr);

 
/* Professional Summary */

$professionalSummary = $_POST['professionalSummary'];
$_SESSION['professionalSummary'] = $professionalSummary;

$serialized_professionalSummary = serialize($_SESSION['professionalSummary']);



/*DATABASE*/

$serverName = "localhost";
$userName = "root";
$password = "";
$dbname = "buildresume";


//Create Connection 

$conn = new mysqli($serverName,$userName,$password,$dbname);

if($conn->connect_error){
	die("Connection Failed!<br>" . $conn->connect_error);
}
echo ("Connected Succesfully<br><br>");

$sql = " INSERT INTO resume_records (Name, Contact, Education, Skills, Projects, ProfessionalSummary)
         VALUES ('$serialized_name_arr', '$serialized_contact_arr', '$serialized_edu_arr', '$serialized_skills_arr',
        		 '$serialized_project_arr', '$serialized_professionalSummary') ";

if ($conn->query($sql) === TRUE ) {
    echo ("New record created successfully.");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();


?>