<?php

include('dbconn.php');

if(isset($_GET['view'])){
    $id = $_GET['view'];
    $view_data = viewdata($connect,$id);
}

function viewdata($connect,$id){
    $ac = "SELECT * FROM logbook WHERE id=$id";
    $result = $connect->query($ac);
    $data = mysqli_fetch_assoc($result);
    return $data;
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   

</head>
<body style="background-image: url(./Untitled\ design\ \(2\).png);background-repeat: no-repeat;background-size: cover;">

    <div class="container">
        <h1 class="text-center mt-5" style="letter-spacing: 3px;color: #3232aaff;"><strong> VIEW THE DETAILS</strong></h1>
        <hr>
        <table class="table table-bordered head" style="width: 100%;padding: 20px !important;border: 1px solid rgb(212, 212, 212);box-shadow: #a4aef0ff 0px 0px 5px 5px !important;" class="table table-light">
            <tr class="text-center">
                <th style="background-color: #3232aaff;color:white">ID</th>
                <th style="background-color: #3232aaff;color:white">First Name</th>
                <th style="background-color: #3232aaff;color:white">Last Name</th>
                <th style="background-color: #3232aaff;color:white">WHatsapp NO</th>
                <th style="background-color: #3232aaff;color:white">Email</th>
                <th style="background-color: #3232aaff;color:white">Address</th>
                <th style="background-color: #3232aaff;color:white">Viewout</th>
                
            </tr>

            <tr class="text-center">
                <td><?php   echo $view_data['id']; ?></td>
                <td><?php   echo $view_data['fname']; ?></td>
                <td><?php   echo $view_data['lname']; ?></td>
                <td><?php   echo $view_data['phone']; ?></td>
                <td><?php   echo $view_data['email']; ?></td>
                <td><?php   echo $view_data['address']; ?></td>
                <td><a href="./table.php"><i class="fa-solid fa-eye-slash"></i></a></td>
            </tr>
        </table>
    </div>
    
  





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>

