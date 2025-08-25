<?php

include('dbconnect.php');


if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $editdata = edit_data($connect, $id);
}
function edit_data($connect, $id){
    $query = "SELECT * FROM form1 WHERE id = $id";
    $exec = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($exec);
    return $row;
}

if(isset($_POST['update']) && isset($_GET['edit'])){
    $id = $_GET['edit'];
    update_data($connect, $id);

}
function update_data($connect, $id){

    $firstname = $_POST['FirstName'];
    $lastname = $_POST['LastName'];
    $email = $_POST['Email'];
    $address = $_POST['Address'];
    $age = $_POST['Age'];
    $whatsapp = $_POST['Whatsapp'];

    $query ="UPDATE form1 SET FirstName='$firstname', LastName='$lastname', Email='$email', Address='$address', Age='$age', Whatsapp='$whatsapp' WHERE id=$id";
    $exec = mysqli_query($connect, $query);

    if($exec){
        header('location:edit2.php');
    }else{
        $msg = "ERROR". $query . "<br>" . mysqli_error($connect);
        echo $msg;
    }
}

?>