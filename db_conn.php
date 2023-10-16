<?php 
$servername = "localhost";
$username ="root";
$password ="";

$coon =mysqli_connect($servername, $username, $dbname);

if(!$conn){
    die("Connection successful". mysqli_connect_error());

}
echo "Connected successfully";