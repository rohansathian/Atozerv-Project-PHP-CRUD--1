<?php
// dbconnect.php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "samplecrud";

$connect = new mysqli($servername,$username,$password,$dbname);

if($connect){
    // echo "Connection Successful";
}
else{
    echo "Connnection failed";
}

?>