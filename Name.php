<html>

<head> <title>Name of the Person</title> </head>

 <h2><b> Name on Your Resume </b></h2> 

<style>

h2{ text-align: center;
    text-transform: uppercase;
    color: #ffffff;
	margin-top: 100px;
	border: 1px solid black;
	background-color: #ff9142;
	}

input[type=text] {
	background: #f1f1f1;
	margin: 5px 0 22px 0;
    }

</style>

<?php include 'bootstrap.html'?> 

<body>


<div class="container">

<form action = "Contact.php " method= "POST">

<div class="card mx-auto mt-5" style= "width: 25rem;">
  <div class="card-body">
 
<b>First Name</b> <input type = "text" name = "firstName" placeholder="Enter First Name" class="form-control mb-2"/>
<br><br>
<b>Last Name<b> <input type = "text" name = "lastName" placeholder="Enter Last Name" class="form-control"/>
<br>
<input type ="submit" value = "Done"  style="width:100%" class="mt-3 btn btn-success"/>
 
  </div>
</div>


</form>

</div>

</body>
</html>