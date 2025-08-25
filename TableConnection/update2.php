<?php

include('dbconnect.php');


if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $editdata = edit_data($connect, $id);
}
function edit_data($connect, $id){
    $query = "SELECT * FROM form2 WHERE id = $id";
    $exec = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($exec);
    return $row;
}

if(isset($_POST['update']) && isset($_GET['edit'])){
    $id = $_GET['edit'];
    update_data($connect, $id);

}
function update_data($connect, $id){

    $state = $_POST['State'];
    $district = $_POST['District'];
    $landmark = $_POST['Landmark'];
    $pincode = $_POST['Pincode'];

    $query ="UPDATE form2 SET State='$state', District='$district', Landmark='$landmark', Pincode='$pincode' WHERE id=$id";
    $exec = mysqli_query($connect, $query);

    if($exec){
        header('location:table1.php');
    }else{
        $msg = "ERROR". $query . "<br>" . mysqli_error($connect);
        echo $msg;
    }
}

?>