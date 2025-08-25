<?php

include('dbconn.php');

if(isset($_GET['edit'])){
  $id = $_GET['edit'];
  $editdata = edit_data($connect, $id);

}

function edit_data($connect, $id){
  $query = "SELECT * FROM logbook WHERE id = $id";
  $exec = mysqli_query($connect, $query);
  $row = mysqli_fetch_assoc($exec);
 
  return $row;
}

if(isset($_POST['update_button']) && isset($_GET['edit'])){
  $id = $_GET['edit'];
  update_data($connect, $id);
}

function update_data($connect, $id){
  $firstname = $_POST['fname'];
  $lastname = $_POST['lname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];

  $query = "UPDATE logbook 
  SET fname = '$firstname',
      lname = '$lastname',
      email = '$email',
      phone = '$phone',
      address = '$address' WHERE id = $id";
  
  $exec = mysqli_query($connect, $query);

  if($exec){
    header('location:table.php');
  }else{
    $msg = "Error". $query . "<br" . mysqli_error($connect);
    echo $msg;
  }

}

?>