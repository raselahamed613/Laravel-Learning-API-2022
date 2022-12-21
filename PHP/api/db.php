<?php
$servername = "localhost";
$databasename = "demoapi";
$username = "root";
$password = "";

$conn = new Mysqli($servername, $username, $password, $databasename);

if($conn -> connect_error){
    die("error" . $conn->connect_error);
}
echo "success!";
?>