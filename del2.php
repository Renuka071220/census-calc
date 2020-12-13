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
        $insert = mysqli_query($db,"DELETE FROM work WHERE name='$na'");

    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
        echo "Records remove successfully.";
    }
}
mysqli_close($db); 
?>
<h3>Delete The Data</h3>
<form method="POST">
  Name: <input type="text" name="na" placeholder="Enter Name" Required>
  <br/>
  <input type="submit" name="submit" value="Submit">
</form>
</center>
</body>
</html>