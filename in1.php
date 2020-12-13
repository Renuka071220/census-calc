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
	$aa = $_POST['aa'];
    $insert = mysqli_query($db,"INSERT INTO `per`(`name`, `age`, `sex`, `address`, `phone`, `aadhar`) VALUES ('$na','$age','$sex','$add','$pho','$aa')");
    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
        echo "Records added successfully.";
    }
}mysqli_close($db); 
?><h3>Insert The Data </h3>
<form method="POST">
  Name :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="na" placeholder="Enter Name" Required>
  <br/><br/>
  Age :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="age" placeholder="Enter Age" Required>
  <br/><br/>
  Gender :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="sex" placeholder="Enter Gender" Required>
  <br/><br/>
  Address :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<input type="text" name="add" placeholder="Enter Address" Required>
  <br/><br/>
   Mobile Number :<input type="text" name="pho" placeholder="Enter Phone Number" Required>
  <br/><br/>
   Aadhar Number : <input type="text" name="aa" placeholder="Enter Aadhar Number" Required>
  <br/><br/>
  <input type="submit" name="submit" value="Submit"><br/>
</form>
</center>

</body>
</html>
