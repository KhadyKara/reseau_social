<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reseau_social";

$conn = mysqli_connect("localhost", "root", "", "reseau_social");

if (!$conn) {
	die('Connection Failed' . mysqli_connect_error());
}

 ?>