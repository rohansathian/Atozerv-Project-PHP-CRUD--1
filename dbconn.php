<?php

$servername = "localhost";
$username ="root";
$password = "";
$dbname = "samplecrud";

$connect = new mysqli($servername,$username,$password,$dbname);

if($connect){
    // echo "connected successfully <br>";
}
else{
    echo "error";
}


?>