<?php include("connection.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="SignUpcs3.css">
</head>

    <body>
        <form>
        <center> <h1> signUp Details </h1> </center>
        <center> <img src="log.png"> </center>
        <br><br>

      <center></center>
        <div class="input-container">
            <i class="fa fa-user icon"></i>
            <input class="input-field" type="text" placeholder="First name" name="fname">
            </div>
          </center>
          <center></center>
        <div class="input-container">
            <i class="fa fa-user icon"></i>
            <input class="input-field" type="text" placeholder="Last name" name="lname">
            </div>
          </center>
           <center> 
            <div class="input-container">
            <i class="fa fa-envelope icon"></i>
            <input class="input-field" type="text" placeholder="Email" name="email">
            </div>
        </center>
        <center> 
          <div class="input-container">
          <i class="fa fa-envelope icon"></i>
          <input class="input-field" type="text" placeholder="Address" name="add">
          </div>
      </center>
        <center> 
          <div class="input-container">
           <i class="fa fa-key icon"></i>
           <input class="input-field" type="password" placeholder="Password" name="pssword">
           </div>
       </center>  
        <center>
            <p> Already a member? <a href="logincs3.html"> Log In</a> </p>
        </center>
              
                <center> <button type="submit" value="SignUp" class="btn"> SignUp </button> </center>
        </form>
        </body>
    </html>
    <!-- <br><br><br><br>
    <button><a href="casestudy3.html" class="previous"> Previous</a></button> -->

    <?php
    if($_POST['SignUp'])
    {
        $fname = $_POST['fname'];
        $lname= $_POST['lname'];
        $email = $_POST['email'];
        $add = $_POST['address'];
        $pssword = $_POST['passsword'];

        $query= "INSERT INTO ABC VALUES('$fname','$lname','$email','$add','$pssword')";
        $data= mysqli_query($conn,$query);

        if($data)
        {
            echo "data inderted into database";
        }
        else
        {
            echo "not inserted";
        }

        
    }
    ?>
