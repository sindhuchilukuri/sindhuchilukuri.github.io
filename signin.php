<?php
    require 'dbconfig/config.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>SigninPage</title>
        <meta name="description" content="A destination for passionate bookaholics and authors.."> 
        <link rel="stylesheet" href="sign-in.css">
    </head>
   
    <body >
      
        <div class="login">
            <img src="profile.jpg" class="profile">
            <h1>SignUp</h1>
                <form class="myform" action="signin.php" method="post">
                    <p>UserName</p>
                    <input type="text" class="inputvalues" name="username" placeholder="Enter UserName"  required>
                   
                    <p>Password</p>
                    <input type="password" class="inputvalues" name="password" placeholder="Enter Password"  required>
                    
                    <p>Repeat Password</p>
                    <input type="password" class="inputvalues"  placeholder="Repeat Password" name="pswrepeat" required>
                   
                    <p>Email-Id</p>
                    <input type="email-id" class="inputvalues" name="emailid" placeholder="Enter Email-Id" required>
                    
                    <p>Phone Number</p>
                    <input type="number" class="inputvalues" name="phonenumber" placeholder="Enter phone number">
            
                 
                    
                    <input type="submit" name="submit" value="Submit">
                    <br>
                    <p>Already Have Account<a href="login1.php" style="padding:10px;">Login</a></p>
                    <br>

                   
                    
                   
                </form>

                <?php
                if(isset($_POST['submit'])) //checks if the button iss clicked
                {
                    //echo '<script type="text/javascript"> alert("Submit button clicked")</script>';
                    $username=$_POST['username'];
                    $password=$_POST['password'];
                    $pswrepeat=$_POST['pswrepeat'];
                    $emailid=$_POST['emailid'];
                    $phonenumber=$_POST['phonenumber'];
                    $_SESSION['username']=$username;
                    $_SESSION['emailid']=$emailid;
                    $_SESSION['phonenumber']=$phonenumber; 

                    if($password==$pswrepeat)
                    {
                      $query="select * from user WHERE username='$username'";
                      $query_run=mysqli_query($con,$query);
                      if(mysqli_num_rows($query_run)>0)
                      {
                        echo '<script type="text/javascript"> alert("This User name already exists....Try another username")</script>';
                      }
                      else 
                      {
                        $query="insert into user values('$username','$password','$emailid','$phonenumber')";
                        $query_run=mysqli_query($con,$query);
                        if($query_run)
                        {
                            echo '<script type="text/javascript"> alert("User Registered...Go to login Page")</script>';
                        }
                        else
                        {
                            echo '<script type="text/javascript"> alert("Error!!")</script>';
                        }
                      } 
                    }
                    else
                    {
                        echo '<script type="text/javascript"> alert("Check for password")</script>';
                    }
                }
            ?>
            </div>
          
        
    </body>
</html>
