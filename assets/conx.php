<?php
   
    
 


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e_db";


// $servername = "localhost";
// $username = "hftcmzpc_admin1";
// $password = "Admin102030..";
// $dbname = "hftcmzpc_earnara_db";
 



if(session_status() == PHP_SESSION_NONE){
	session_start();
}



// Create connection
$conn = new mysqli($servername, $username, $password ,$dbname);



// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// echo "Connected successfully <br>";

mysqli_set_charset($conn,"utf8");




?>