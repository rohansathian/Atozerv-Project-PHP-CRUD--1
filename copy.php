<?php

include('update.php');

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <?php if(!empty($msg)){echo $msg; }?>
        <form action="" method="post" id="form11" name="myform"  style="position: relative;">
            <div class="row  p-5">
                <div class="col-1" style="position: relative;">
                    <div style="position: absolute;bottom:  -26.5%;left: -147%;z-index: -1;"><img src="./download (1).jpeg" width="400px"></div> 
                   <div style="position: absolute;bottom:  -35%;left: 240%;"><img src="./download__2_-removebg-preview.png" width="400px"></div>
                   <div style="background-color: black;width: 730px;height: 1px;position: absolute;bottom:  -9.3%;left: 630%"></div>

            </div>
            <div class="col-5" style="background-image: url(./images/Untitled_design__2_-removebg-preview.png);background-repeat: no-repeat;  box-shadow: rgb(104, 104, 203) 5px 8px 30px 2px;background-color:rgb(255, 255, 255);border-radius: 0px 10px 10px 0px;background-size:375px " >
                
                <div class="text-center mt-5">
                    <h1 class="h1">FORM</h1>
                </div>
                <hr style="color: black;margin-left: 90px;margin-right: 90px;">
                <div class="row p-3">
                    <div class="col-6 mb-3">
                        <label for=""><span class="ln">First Name</span></label><br>
                        <input type="text" name="fname" placeholder="First name" class="form-control" value="<?php echo isset($editdata) ? $editdata['fname'] : ''?>">
                        <p id="fname_err" ></p>
                    </div>
                    <div class="col-6 mb-3">
                        <label for=""><span class="ln">Last Name</span></label><br>
                        <input type="text" name="lname" placeholder="Last name" class="form-control" value="<?php echo isset($editdata) ? $editdata['lname'] : ''?> ">
                        <p id="lname_err"></p>

                    </div>
                    <div class="col-6 mb-3">
                        <label for=""><span class="ln">Phone Number</span></label><br>
                        <input type="tel" name="phone" placeholder="Whatsapp No" class="form-control" value="<?php echo isset($editdata) ? $editdata['phone'] : ''?>">
                        <p id="phone_err"></p>

                    </div>
                    <div class="col-6">
                        <label for=""><span class="ln">E-mail</span></label><br>
                        <input type="text" name="email" placeholder="E-mail Address" class="form-control" value="<?php echo isset($editdata) ? $editdata['email'] : ''?>">
                        <p id="email_err"></p>

                    </div>
                <div class="col-12 mb-2">
                    <div>
                        <label for=""><span class="ln">Address</span></label><br>
                        <input type="text" name="address" placeholder="Current Address"  class="form-control" value="<?php echo isset($editdata) ? $editdata['address'] : ''?>">
                        <p id="add_err"></p>

                    </div>   
                </div>
            </div>
                  <div class="text-center mb-5" >
                    <button class="btn1" type="submit"  name="update_button"  value='update'><strong>Update</strong></input>

                  </div>
                </div>
                <div class="col-6">
                <div style="margin-top: 120px;">
                    <div class="text-center">
                        <h2 style="text-align: left;font-weight: bold; font-family: 'Times New Roman', Times, serif;color:rgb(67, 98, 175);margin-left: 50px;">Enter Your Details in the Form to Complete Your Biodata</h1>
                    </div>
                    
                        <div class="row">
                            <div class="col-3"></div>
                            <div class="col-9">
                                <p style="text-align: justify;font-size: 20px;color: gray;">This is a simple form to collect your basic information including your first name, last name, phone number, email address, and current address. Please fill out all the fields accurately to ensure we have the correct information on file. Your details will be kept confidential and used only for official purposes. Thank you for taking the time to complete this form.</p>
                            </div>
                        </div>
                </div>
            </div>
                <br><br>               
            </div>
            <div class="col-">

            </div>
            </div>
            
            
        </form>
    </div>
   



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>