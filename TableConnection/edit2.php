<?php
 include('update2.php');
 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FORM-2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>
  <body>

    <div class="container " style="margin-top: 70px;">
        <div class="row" style="position: relative;">
            <div style="background-color: rgb(255, 225, 0);width: 620px;height: 30px;position: absolute;left: 8%;"></div>

            <div class="col-1" style="position: relative;">
                <div style="position: absolute;bottom:  -46.5%;left: -100%;"><img src="./download (1).jpeg" width="400px"></div> 
                   <div style="position: absolute;bottom:  -57%;left: 260%;"><img src="./download__2_-removebg-preview.png" width="400px"></div>
                   <hr style="position: absolute;bottom: -31%;left: 620%; color: black;width: 739px;height: 10px;">
            </div>
            
            <div class="col-5 mt-5" style="border: 1px solid rgb(255, 225, 0);box-shadow: rgb(169, 168, 164) 5px 5px 5px 5px;position: relative;overflow: hidden;">
                <div style="position: absolute;background-color: rgb(255, 225, 0);width: 40px;height: 40px;border-radius: 50%;left: -2%;top: -1%;"></div>
                <div style="position: absolute;background-color: rgba(255, 225, 0, 0.738);width: 40px;height: 40px;border-radius: 50%;left: 1%;top: -2%;"></div>
                <div style="position: absolute;background-color: rgba(255, 225, 0, 0.738);width: 40px;height: 40px;border-radius: 50%;left: -3%;top: 2%;"></div>
                <div style="position: absolute;background-color: rgb(255, 225, 0);width: 560px;height: 10px;left: -2%;bottom: -1%;"></div>
                <div style="position: absolute;background-color: rgba(255, 225, 0, 0.638);width: 560px;height: 10px;left: -2%;bottom: 0%;"></div>
                <div style="position: absolute;background-color: rgba(255, 225, 0, 0.456);width: 560px;height: 10px;left: -2%;bottom: 1%;"></div>
                <form action="" id="form12" method="post" class="p-4">
                    <div class="row">
                    <div class="text-center mb-3">
                        <h2 style="letter-spacing: 3px;color: gray;">ADDRESS</h2>
                        <hr>
                    </div>
                    <div class="col-6 p-2">
                        <label for="" style="letter-spacing: 1px;">State</label>
                        <input type="text" class="form-control" name="State" placeholder="Enter your state" value="<?php echo isset($editdata) ? $editdata['State'] : ''?>"> 
                    </div>
                    <div class="col-6 p-2">
                        <label for="" style="letter-spacing: 1px;">District</label>
                        <input type="text" class="form-control" name="District" placeholder="Enter city" value="<?php echo isset($editdata) ? $editdata['District'] : ''?>"> 
                    </div>
                    <div class="p-2">
                        <label for="" style="letter-spacing: 1px;">Landmark</label>
                        <input type="text" class="form-control" name="Landmark" placeholder="Enter email" value="<?php echo isset($editdata) ? $editdata['Landmark'] : ''?>">
                    </div>
                    <div class="col-6 p-2">
                        <label for="" style="letter-spacing: 1px;">Pincode</label>
                        <input type="tel" class="form-control" name="Pincode" placeholder="Enter age" value="<?php echo isset($editdata) ? $editdata['Pincode'] : ''?>">
                    </div>
                    <div class="col-6 p-2">
                        <button class="btn btn-warning" type="submit" name="update"  value="update" style="width: 200px;margin-top: 23px;margin-left: 50px;font-weight: bold;">Update</button>
                    </div>
                    
                </div>
            </form>
                
            </div>
            
            <div class="col-5"  style="position: relative; background-color: rgb(255, 225, 0); margin-left: 50px;border-radius: 0px 0px 300px 300px;">
                 <div style="margin-top: 120px;">
                    <h1 style="text-align: center;font-weight: bold; font-family: 'Times New Roman', Times, serif;color:gray;">Enter Your Details in the Form Below to Complete Your Biodata</h1>
                </div>
            </div>
        </div>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>