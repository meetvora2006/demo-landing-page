<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html> 
    <title>Page Title</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="style/validationEngine.jquery.css" type="text/css"/>
    <link rel="stylesheet" href="style/style.css" type="text/css" >    

    <body>

        <div class="Header">
            <div class="Header-LeftBlock"  height="80">
                <img src="images/logo.jpg">  

            </div>

            <div class="Header-RighttBlock">
                <button type="button">Call Us! 855-314-2791</button>
                </br>
                <div class="Header-RighttBlockText">
                    Monday-Thursday 8am-6pm.</br> Friday 8am-5pm
                </div>
            </div>
        </div>

        <div class="content-wrapper">   
            <div class="FullWidthImage">

                <div class="FullWidthImage-TextBlock"> 
                    <div class="FullWidthImage-TextBlock-First">
                        AIR CONDITIONING NOT KEEPING YOU <span>COOL?</span>     
                    </div>

                    <div class="FullWidthImage-TextBlock-Second">
                        Get it serviced today & be ready for summer!
                        <ul>
                            <li>Take 15% off any central A/C service</li>
                            <li>Includes repairs and tune-ups of all makes and models</li>
                        </ul>
                    </div>

                    <div class="FullWidthImage-TextBlock-Third">
                        <img src="images/arrow_right.png"> CALL <a href="tel:8553142791">855-314-2791</a> <img src="images/arrow_left.png">
                        
                        <span>
                        TO SCHEDULE A SERVICE APPOINTMENT  
                        </span>
                    </div>

                    
                </div>

                <div class="FullWidthImage-FormBlock">

                    <div class="FullWidthImage-FormBlockText">
                        call <a href="tel:8553142791">855-314-2791</a> or complete this form to request a service appointment.
                    </div>

                    <form id="formID" method="post" action="process.php">

                        <input type="text" name="FirstName" placeholder="First Name" class="validate[required,maxSize[255]]"></br>
                        <input type="text" name="LastName" placeholder="Last Name" class="validate[required,maxSize[255]]"></br>
                        <input type="text" name="Email"  placeholder="Email Address"  class="validate[required,custom[email],maxSize[255]]" ></br>
                        <input type="text" name="Phone" placeholder="Phone Number" class="validate[required,custom[phone],maxSize[30]]"></br>
                        <select name="BestTime" class="validate[required]">
                            <option value="">Best time to contact you</option>
                            <option value="8am - 12pm">8am - 12pm</option>
                            <option value="12pm - 3pm">12pm - 3pm</option>
                            <option value="3pm - 6pm">3pm - 6pm</option>
                            <option value="6pm - 8pm">6pm - 8pm</option>
                        </select></br>
                        <input type="text" name="Zipcode" placeholder="Zip Code" class="validate[required,maxSize[30]]"></br>
                        <input type="submit" name="submit" value="Submit »"></br>
                    </form>

                    <center> <img src="images/trane_logo.png"></center>



                </div>

            </div>

        </div>

    </body>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="jquery.validationEngine-en.js"></script>
    <script src="jquery.validationEngine.js"></script>

    <script>
        $(document).ready(function () {

            $("#formID").validationEngine();

        });
    </script>

</html>