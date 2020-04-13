<?php
    session_start();
    require 'dbconfig/config.php';
?>
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<link href="writestyle.css" rel="stylesheet">

</head>
<body>

<nav class="nav main-nav">
 
                <a href="homepage1.html" class="active">HOME</a>
        <div class="browse">
            <button class="browsebtn">BROWSE<i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content1">
                <a href="adventure.html">Adventure</a>
                        <a href="scifi.html">Science Fiction</a>
                        <a href="mystery.html">Mystery</a>
                        <a href="fantasy.html">Fantasy</a>
                        <a href="poetry.html">Poetry</a>
                        <a href="horror.html">Horror</a>
                        <a href="romance.html">Romance</a>
                        <a href="thriller.html">Thirller</a>
                        <a href="teenfiction.html">Teen Fiction</a>
                        <a href="nonfiction.html">Non-Fiction</a>
            </div>
        </div>
        <div class="community">
            <button class="communitybtn">COMMUNITY</button>
            <div class="dropdown-content2">
                <a href="#">Forums</a>
                <a href="index.html">Word Puzzles</a>
            </div>
        </div>
        <a href="about.html" class="active">ABOUT</a>
        <div class="topnav-right">
                <div class="setting1">
                        <button class="settingbtn"><?php echo $_SESSION['username'] ?></button>
                        <div class="dropdown-content4">
                            <a href="profile.html">Profile</a>
                            <a href="#">Edit Proflie</a>
                            <a href="#">Log Out</a>
                            <?php 
                if(isset($_POST['logout']))
                {
                    session_destroy();
                    header('location:index.html');
                }
                
              ?>
                        </div>
                    </div>
        <div class="write1">
            <button class="writebtn">WRITE</button>
            <div class="dropdown-content3">
                <a href="write.php">Create a Story</a>
            </div>
        </div>
            </nav>
           
            
            <div class="column2">
                <img src="coverpage.png" class="coverimg" onclick="upload">
            </div>
            <div class="column1">
            
            <div class="container">
              <form action="/action_page.php">
                <br>
                <br>
                <div class="row">
                  <div class="col-25">
                    <label for="fname">TiTle:</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="fname" name="firstname" placeholder="Please Enter your Title..">
                  </div>
                </div>
               
                    <div class="row">
                        <div class="col-25">
                          <label for="subject">Description</label>
                        </div>
                        <div class="col-75">
                          <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-25">
                          <label for="fname">Characters:</label>
                        </div>
                        <div class="col-75">
                          <input type="text" id="fname" name="firstname" placeholder="Please Enter main Characters..">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-25">
                          <label for="fname">Genre:</label>
                        </div>
                        <div class="col-75">
                          <input type="text" id="fname" name="firstname" placeholder="..">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-25">
                          <label for="fname">Language:</label>
                        </div>
                        <div class="col-75">
                          <input type="text" id="fname" name="firstname" placeholder="Language..">
                        </div>
                      </div>
                      <br>
                <div class="row">
                  <input type="button" onclick="location='boot.html';" value="Start Writing">
                </div>
              </form>
            </div>
            </div>
</body>
</html>