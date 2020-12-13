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
	
    $insert = mysqli_query($db,"update work set comp='$age', post='$sex', location='$add',sal='$pho' where name='$na'");
    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
        echo "Records update successfully.";
    }
}mysqli_close($db); 
?><h3>Update The Data</h3>
<form method="POST">
  Name :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<input type="text" name="na" placeholder="Enter Name" Required>
  <br/><br/>
  Company Name : &nbsp;&nbsp;&nbsp;<input type="text" name="age" placeholder="Enter Company name" Required>
  <br/><br/>
  Post name :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="sex" placeholder="Enter Post Name" Required>
  <br/><br/>
  Location :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="add" placeholder="Enter Location" Required>
  <br/><br/>
   Salary :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="pho" placeholder="Enter Salary" Required>
  <br/><br/>
  
  <input type="submit" name="submit" value="Submit"><br/>
</form>
</center></body>
</html>
