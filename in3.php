<!DOCTYPE html>
<html>
<head>
  <title>Add Records in Database</title>
  <style>
  input{
	  
	  background-color:ping;
	  font-color:black;
  }
  form{
	  color:white;
  }
    h3{
	  color:white;
  }
  </style>
</head>
<body>
<center>
<?php
$db = mysqli_connect("localhost","root","","census");
if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['submit']))
{		
    $na = $_POST['na'];
    $age = $_POST['age'];
	 $sex = $_POST['sex'];
    $add = $_POST['add'];
	$pho = $_POST['pho'];
	
    $insert = mysqli_query($db,"INSERT INTO `family`(`name`, `male`, `fe`, `age`, `educated`) VALUES ('$na','$age','$sex','$add','$pho')");
    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
        echo "Records added successfully.";
    }
}mysqli_close($db); 
?><h3>Insert The Data</h3>
<form method="POST">
 Head  Name :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="na" placeholder="Enter Head Name" Required>
  <br/><br/>
  Male Count : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="age" placeholder="Enter Male Count" Required>
  <br/><br/>
  Female Count :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="sex" placeholder="Enter Female Count" Required>
  <br/><br/>
  Age Count :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<input type="text" name="add" placeholder="Enter Age Count" Required>
  <br/><br/>
   Educated Count :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="pho" placeholder="Enter Educated Count" Required>
  <br/><br/>
  
  <input type="submit" name="submit" value="Submit"><br/>
</form>
</center></body>
</html>
