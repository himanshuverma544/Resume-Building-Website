<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head> <title> Data Retrieval </title> 


<style>

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 70%;
  margin: auto;
  margin-top: 60px;
 }
  
th {
	background-color: #e1e1e1;
   }

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
 }
  
.download {
	padding: 10px;
	border-radius: 10px;
	background-color: #4c4cff;
	color: white;
	font-weight: bold;
	margin-top: 10px;
   }

</style>


</head>

<body>

<h1 style="margin-top: 50px;
           text-align: center;
		   color: white;
		   font-size: 3em;
		   font-weight: bold;
           border: 1px solid black;
		   background-color: #4c4cff;
		   "
		   >RESUME
</h1>

<?php

/*DATABASE*/

$serverName = "localhost";
$userName = "root";
$password = "";
$dbname = "buildresume";


/*Create Connection*/ 

$conn = new mysqli($serverName,$userName,$password,$dbname);
if($conn->connect_error){
	die("Connection Failed!<br>" . $conn->connect_error);
}
//echo ("Connected Succesfully<br><br>");


/*Fetch or Retrieve Data*/

$query = " SELECT * FROM resume_records limit 1";
$result = mysqli_query($conn,$query);

?>

<table>
  <tr>
    <th>Name</th>
    <th>Contact</th>
    <th>Education</th>
    <th>Skills</th>
    <th>Projects</th>
    <th>Professional Summary</th>
  </tr>
  
<?php

// Retrieving Data  
 while($row = mysqli_fetch_assoc($result)) {
	   $name = unserialize($row["Name"]);
	   $contact = unserialize($row["Contact"]);
	   $edu = unserialize($row["Education"]);
	   $skills = unserialize($row["Skills"]);
	   $project = unserialize($row["Projects"]);
	   $prosum = unserialize($row["ProfessionalSummary"]);
?>
	   
  <tr>                   <!--Name-->
    <td> <?php echo("    First Name: $name[0]<br>              
	                 Last Name: $name[1]") ?> </td>
					 
					<!--Contact--> 
    <td> <?php echo("                    Address: $contact[0]<br>
	                                 City: $contact[1]<br>
					 Zip Code: $contact[2]<br>
	                                 Country: $contact[3]<br>
					 Email: $contact[4]<br>
					 Mobile No.: $contact[5]") ?> </td>
					 
					<!--Education--> 
    <td><?php echo("                    <b>Graduation</b><br><br>
	                                      Institute Name: $edu[0]<br>
					      City: $edu[1]<br>
					      State: $edu[2]<br>
					      Field of Study: $edu[3]<br>
					      Degree: $edu[4]
					      <br><br><br>
					   
				 	<b>Schooling</b><br><br>
				              Institute Name: $edu[5]<br>
			    	              City: $edu[6]<br>
					      State: $edu[7]<br>
					      Field of Study: $edu[8]") ?> </td>
					   
					   <!--Skills and Projects-->
    <td><?php echo ("    
	                                      Skill 1: $skills[0]<br>
                                              Skill 2: $skills[1]<br>
					      Skill 3: $skills[2]<br>
					      Skill 4: $skills[3]<br>
					      Skill 5: $skills[4]") ?></td>
						  
    <td><?php echo ("
                                                Project 1: $project[0]<br>
						Project 2: $project[1]<br>
						Project 3: $project[2]<br>
						Project 4: $project[3]<br>
						Project 5: $project[4]<br>
						Project 6: $project[5]") ?></td>
				
	      <!--Professional Summary-->
    <td><?php echo  ("$prosum") ?></td>
  </tr>
</table>
 
 
 <!-- Download-->
 <center>
        <button class="download" type="button" >
   		<a href="dataRetrieve.php" download style="color:white"> Download </a>
		</button>
 </center>
 
<?php
 }
//echo "".$row["Name"]."<br>".$row["Contact"]."<br>".$row["Education"]."<br>".$row["Skills"]."<br>".$row["Projects"]."<br>".$row["ProfessionalSummary"]."<br>";
   //  echo($row["Name"] $row["Contact"] $row["Education"] $row["Skills"] $row["Projects"] $row["ProfessionalSummary"]);	   
?>

</body>
</html>
