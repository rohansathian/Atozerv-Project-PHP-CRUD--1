<?php
include('dbconnect.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FORM-1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <style>
        th{
            padding: 10px !important;
            text-align: left;
            background-color: #aac8e6ff;
        }
        td{
            padding: 10px !important;
            text-align: left;
        }
    </style>
  </head>
  <body>
    <div>
        <div class="container mt-5">
            <div class="row">
                <div class="text-center mt-2 mb-2" style="font-size: xx-large;letter-spacing:2px;">Form-2 Details</div>
                <div class="col-2"></div>
                
                <div class="col-8">
                    <hr>
                    <table style="border: 1px solid lightblue;width: 100%;">
                        <thread>
                            <tr>
                                <th>ID</th>
                                <th>State</th>
                                <th>District</th>
                                <th>Landamrk</th>
                                <th>Pincode</th>
                            </tr>
                            <?php

                            $query = "SELECT * FROM form2";
                            $result = mysqli_query($connect, $query);
                            while($data = mysqli_fetch_assoc(($result))){

                            ?>
                            <tr>
                                <td style="background-color: #c8def4ff;"><?php echo $data['id']?></td>
                                <td><?php echo $data['State']?></td>
                                <td><?php echo $data['District']?></td>
                                <td><?php echo $data['Landmark']?></td>
                                <td><?php echo $data['Pincode']?></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </thread>
                    </table>    
                </div>
                
                <div class="col-2"></div>
            </div>

        </div>
    </div>
    
  </body>
</html>