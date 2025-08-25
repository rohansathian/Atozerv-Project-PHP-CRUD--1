<?php
  
  include('dbconnect.php');

  if(isset($_POST['submit'])){

    $firstname = $_POST['FirstName'];
    $lastname = $_POST['LastName'];
    $email = $_POST['Email'];
    $address = $_POST['Address'];
    $age = $_POST['Age'];
    $whatsapp = $_POST['Whatsapp'];

    $sql = "INSERT INTO form1(FirstName, LastName, Email,Address, Age, Whatsapp)VALUES('$firstname', '$lastname', '$email', '$address', '$age', '$whatsapp')";

    $result = mysqli_query($connect, $sql);

    if($result){
       header("Location: form2.html");
        
    }else{
        echo "Failed to insert data";
    }
  }
?>