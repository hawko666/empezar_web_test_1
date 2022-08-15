<?php
$servername ="localhost";
$username = "root";
$password = "";
$dbname= "db_e";

$conn = new mysqli($servername, $username, $password, $dbname);



if ($conn->connect_error){
    die("Connection failure: ". $conn->connect_error);
}
else{
    echo "connected successfully";
}
?>