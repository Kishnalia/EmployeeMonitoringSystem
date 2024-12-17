<?php

$host ='localhost';
$user='root';
$pass='';
$dbname='Handling';


$conn = new mysqli($host,$user,$pass,$dbname);

if ($conn -> connect_error){
    die("Connection into database is failed" . $conn->connect_error);
}

echo "CONNECTION COMPLETE";

?>