<?php
  
  include('dbconnect.php');

  if(isset($_POST['submit'])){

    $state = $_POST['State'];
    $district = $_POST['District'];
    $landmark = $_POST['Landmark'];
    $pincode = $_POST['Pincode'];
    

    $sql = "INSERT INTO form2(State, District, Landmark,Pincode )VALUES('$state', '$district', '$landmark', '$pincode')";

    $result = mysqli_query($connect, $sql);

    if($result){
        // echo "Data inserted successfully";
        header("Location: table1.php");        
    }else{
        echo "Failed to insert data";
    }
  }
?>