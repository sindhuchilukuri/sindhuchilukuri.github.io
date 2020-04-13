<?php
    session_start();
    require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>loginPage</title>
        <meta name="description" content="A destination for passionate bookaholics and authors.."> 
        <link rel="stylesheet" href="login-style.css">
    </head>
   
    <body >
      
        <div class="login">
            <img src="profile.jpg" class="profile">
            <h1>Login Here</h1>
                <form class="myform" action="login1.php" method="post">
                    <p>UserName</p>
                    <input type="text" class="inputvalues" name="username" placeholder="Enter UserName"  required>
                    <br>
                    <p>Password</p>
                    <input type="password" class="inputvalues" name="password" placeholder="Enter Password"  required>
                    <br>
                    <input type="checkbox" class="inputvalues" name="remember me" value="remember" class="checkbox"  required><label class="label">RememberMe</label>
                    <br>
                    <br>
                    <input type="submit" id="login_btn" name="login" value="login">
                    <br>
                    <br>

                    <a href="#" style="padding:10px;">Forgot Password</a>
                    <a href="signin.php" id="register_btn" style="padding:10px;"> Create An Account</a>
                    <br>
                </form>
                <?php
                    if(isset($_POST['login'])) //checks if the button iss clicked
                    {
                        $username=$_POST['username'];
                        $password=$_POST['password'];
                        

                        $query="select * from user WHERE username='$username' AND password='$password'";
                        $query_run=mysqli_query($con,$query);
                        if(mysqli_num_rows($query_run)>0)
                        {
                            $_SESSION['username']=$username;
                            //$_SESSION['emailid']=$emailid;
                            //$_SESSION['phonenumber']=$phonenumber; 
                            header('location:homepage1.php');
                        }
                        else{
                            echo '<script type="text/javascript"> alert("Invalid credentials")</script>';
                        }
                    }
                ?>
            </div>
          
        
    </body>
</html>
<?php


?>



