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
            background-color: #f3f17eff;
        }
        td{
            padding: 10px !important;
            text-align: left;
        }
    </style>
  </head>
  <body>
    <div style="position: relative;">
        
        <div class="container mt-5">
            <div class="row mt-5">
                <div class="text-center mt-3 mb-1" style="letter-spacing: 2px;font-size:xx-large"><h2 style="letter-spacing: 3px;color: gray;">BIODATA</h2></div>
                
                
                <div class="col-12">
                    <hr>
                    <table style="padding: 10px !important;column-width:100px;border: 1px solid lightyellow;width: 100%;box-shadow: 5px 5px 10px 5px rgba(0,0,0,0.1);">
                        <thread>
                            <tr style="padding: 10px !important;">
                                <th>Id</th>
                                <th>FirstName</th>
                                <th>LastName</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Age</th>
                                <th>Whatsapp</th>
                                <th>State</th>
                                <th>District</th>
                                <th>Landamrk</th>
                                <th>Pincode</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            <?php
                              
                            $query = "SELECT * FROM form1 INNER JOIN form2 ON form1.id = form2.id";
                            $result = mysqli_query($connect, $query);
                            while($data = mysqli_fetch_assoc($result)){
                                
                            ?>
                            <tr>
                                <td style="background-color: #eff7b8ff;"><?php echo $data['Id']?></td>
                                <td style="border: 1px solid lightgray;"><?php echo $data['FirstName']?></td>
                                <td style="border: 1px solid lightgray;"><?php echo $data['LastName']?></td>
                                <td style="border: 1px solid lightgray;"><?php echo $data['Email']?></td>
                                <td style="border: 1px solid lightgray;"><?php echo $data['Address']?></td>
                                <td style="border: 1px solid lightgray;"><?php echo $data['Age']?></td>
                                <td style="border: 1px solid lightgray;"><?php echo $data['Whatsapp']?></td>
                                <td style="border: 1px solid lightgray;"><?php echo $data['State']?></td>
                                <td style="border: 1px solid lightgray;"><?php echo $data['District']?></td>
                                <td style="border: 1px solid lightgray;"><?php echo $data['Landmark']?></td>
                                <td style="border: 1px solid lightgray;"><?php echo $data['Pincode']?></td>
                                <td style="border: 1px solid lightgray;"><a href="edit1.php? edit=<?php echo $data['id'];?>" style="text-decoration: none; color:green">Edit</a></td>
                                <td style="border: 1px solid lightgray;"><a href="delete.php" style="text-decoration: none; color:red">Delete</a></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </thread>
                    </table>
                </div>

            </div>
        </div>
    </div>  
  </body>
</html>