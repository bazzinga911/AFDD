<?php
$conn=mysqli_connect("localhost","root","201814032","afdd");
if(mysqli_connect_error())
{
  echo "Could not connect";
}
else {
  echo "Connected";
}

/*$con= mysqli_connect("localhost","root","201814032") or die ("could not connect to mysql");

mysqli_select_db($con,"afdd") or die ("no database");
echo "Connected";


$servername = "localhost";
$username = "root";
$password = "201814032";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  echo "not Connected";
  ///die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";*/

?>
