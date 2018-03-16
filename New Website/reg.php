<?php
require "con.php";

$name=$_POST["name"];
$mob=$_POST["mn"];
$city=$_POST["city"];
$email=$_POST["email"];

$sql="INSERT INTO info (fname,mobile,city,email) VALUES('$name','$mob','$city','$email')";
$result= $mysqli->query($sql) or die("ERoor in loading");
echo "Sucessfully registered";
?>