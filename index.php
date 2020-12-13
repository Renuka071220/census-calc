<html>
<head>
<title>      </title>
<style type=text/css>
body{background-color:black}
h1{color:white}
h5{color:red;
font-style:bold;
font-size:20pt
}

</style>
<style>
table, th, td {
    border: 1px solid black;
	background-color:white;
}

h6{
	font-family:Impact;
	font-size:20px;
	color:green;
}
a{
	color:green;
}
</style>
</head>

<body >
<img src="21.png" width="1350" height="450">
</br></br></br>
<center>
<h5>T E A M &nbsp;&nbsp;&nbsp;  M E M B E R S </h5>
<h5>1 8 D 0 2 1 - B H A R A T H I . G</h5>
<h5>1 8 D 0 8 7 - R E N U K A .</h5>
<a href="if.php"><h6>PERSON</h6></a>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "census";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM per";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table><tr><th>NAME</th><th>AGE</th><th>GENDER</th><th>ADDRESS</th><th>MOBILE NUMBER</th><th>AADHAR NUMBER</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["age"].  "</td><td>" . $row["sex"].  "</td><td>" . $row["address"].  "</td><td>" . $row["phone"].  "<td>" . $row["aadhar"].  "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>

</center>
<center>
<a href="if2.php"><h6>WORKING DETAILS</h6></a>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "census";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM work";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table><tr><th>NAME</th><th>COMPANY NAME</th><th>POST NAME</th><th>LOCATION</th><th>SALARY</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["comp"].  "</td><td>" . $row["post"].  "</td><td>" . $row["location"].  "</td><td>" . $row["sal"].  "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
</center>
<center>
<a href="if3.php"><h6>FAMILY DETAILS</h6></a>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "census";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM family";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table><tr><th>HEAD NAME</th><th>MALE COUNT</th><th>FEMALE COUNT</th><th>AGE COUNT</th><th>EDUCATED COUNT</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["male"].  "</td><td>" . $row["fe"].  "</td><td>" . $row["age"].  "</td><td>" . $row["educated"].  "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
</center>
</body>
</html>