<?php 


$hostname = "localhost";
$username = "root";
$password = "";
$database = "pangea_panel";

// $db_conn = mysqli_connect($hostname,$username,$password,$database);
$db_conn = new mysqli($hostname, $username, $password, $database);


// if (!$db_conn) {
//     die("connection failed");
// } else {
//     echo "connected successfully";
// }

if ($db_conn->connect_error) {
    die('connection failed'.$db_conn->connect_error);
} else {
    echo"connected";
}



?>