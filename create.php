<?php

include ('dbconn.php');


if(isset($_POST['submit'])){


    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $a ="INSERT INTO logbook(fname,lname,phone,email,address) VALUES('$firstname','$lastname','$phone','$email','$address')";

    $result = mysqli_query($connect, $a);

    if($result){
        // echo "inserted successfully";
        header('location:table.php');
    }
    else{
        echo "error";
    }




}


?>