<?php

include('dbconn.php');

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Table</title>
    <style>
        .th{
            text-align: center;
            letter-spacing: 1px;
            border: 1px solid rgb(219, 213, 213);
        }
        .th1{
            letter-spacing: 1px;
            text-align: left;
            background-color: #2637a4ff!important;
            color: white !important;
        }
        .bg{
            background-color: #7f5353ff;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>
  <body style="background-image: url(./Untitled\ design\ \(2\).png);">

    <div class="container " style="margin-top: 90px;">
        <div class="row">
            <div class="col-1">
                
            </div>
            <div class="col-10">
                
                <div>
                    <div class="text-center" ><h2 style="letter-spacing: 3px;color: #3232aaff;"><strong>DETAILS</strong></h2></div>
                    <hr>
                    <table style="width: 100%;padding: 20px !important;border: 1px solid rgb(212, 212, 212);box-shadow: #a4aef0ff 0px 0px 5px 5px !important;" class="table table-light">
                        <thread>
                            <tr>
                                <th class="th1">Id</th>
                                <th class="th1">First Name</th>
                                <th class="th1">Last Name</th>
                                <th class="th1">Email</th>
                                <th class="th1">Phone</th>
                                <th class="th1">Address</th>
                                <th class="th1">View</th>
                                <th class="th1">Edit</th>
                                <th class="th1">Delete</th>
                            </tr>

                            <?php
                             
                             $query="SELECT * FROM logbook";

                             $result= mysqli_query($connect, $query);
                             while($data = mysqli_fetch_assoc($result)){

                                ?>
                                <tr>
                                    <td class="th1 "><?php echo $data['id']; ?></td>
                                    <td><?php echo $data['fname']; ?></td>
                                    <td><?php echo $data['lname']; ?></td>
                                    <td><?php echo $data['email']; ?></td>
                                    <td><?php echo $data['phone']; ?></td>
                                    <td><?php echo $data['address']; ?></td>
                                    <td ><a style=" text-decoration: none;color:#2637a4ff;" href="view.php? view=<?php echo $data['id'];?>">View</a></td>
                                    <td><a style="text-decoration: none;color:brown;" href="copy.php? edit=<?php echo $data['id'];?>">Edit</a></td>
                                    <td><a style="text-decoration: none;color:red;" href="delete.php? delete=<?php echo $data['id'];?>">Delete</a></td>

                                </tr>
                                <?php
                                }
                                ?>
                             

                            
                            <tr>
                              
                            </tr>
                        </thread>
                    </table>
                </div>
            </div>
            <div class="col-1">

            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>