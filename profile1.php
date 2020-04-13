<?php
    session_start();
    require 'dbconfig/config.php';
?>
<html>
    <head>
        <title>Profile</title>
        <link rel="stylesheet" href="style1.css">
            <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
<body><nav class="nav main-nav">
<a href="homepage1.php" class="active" style="font-family:Yanone Kaffeesatz;">THEULTERIOR</a>
        <div class="browse">
            <button class="browsebtn">BROWSE</button>
            <div class="dropdown-content1">
                <a href="adventure.php">Adventure</a>
                <a href="scifi.php">Science Fiction</a>
                <a href="mystery.php">Mystery</a>
                <a href="fantasy.php">Fantasy</a>
                <a href="poetry.php">Poetry</a>
                <a href="horror.php">Horror</a>
                <a href="romance.php">Romance</a>
                <a href="thirller.php">Thirller</a>
                <a href="teenfiction.php">Teen Fiction</a>
                <a href="nonfiction.php">Non-Fiction</a>
            </div>
        </div>
        <div class="community">
            <button class="communitybtn">COMMUNITY</button>
            <div class="dropdown-content2">
                <a href="login.php">Forums</a>
                <a href="quiz.php">Word Puzzles</a>
                <a href="puzzle.php">Image Puzzles</a>
            </div>
</div>
<a href="about.php" class="active">ABOUT</a>
            <div class="setting1">
        
        <button class="settingbtn">
              <?php echo $_SESSION['username'] ?>
        </button>
          <div class="dropdown-content4">
              <a href="profile1.php">Profile</a>
             
              <a href="index.html" name="logout">Log Out</a>
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
                <a href="#">Edit the story</a>
            </div>
        </div>
            </nav>

    <div class="profile-card">
        <div class="image-container">
            <img src="profile.png" style="width:100%">
            <div class="title">
                <h2><?php echo $_SESSION['username'] ?></h2>
            </div>
        </div>
        <div class="main-container">
                <div class="profile-userbuttons">
                        <button type="button" class="btn btn-success btn-sm" style="background-color:greenyellow;">Follow</button>
                        <button type="button" class="btn btn-danger btn-sm" onclick="openform()">Message</button>
                        <div class="chat-popup" id="myForm">
                                <form action="" class="form-container">
                                  <h1>Chat</h1>
                              
                                  <label for="msg"><b>Message</b></label>
                                  <textarea placeholder="Type message.." name="msg" required></textarea>
                              
                                  <button type="submit" class="btn">Send</button>
                                  <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                                </form>
                        </div>
                </div>
                
                <hr>

            <p><i class="fa fa-envelope info"></i><?php echo $_SESSION['emailid'] ?></p>
            <p><i class="fa fa-phone info"></i><?php echo $_SESSION['phonenumber'] ?></p>
            <hr>

            

            <p><b><i class="fa fa-asterisk info"></i>ABOUT</b></p>
            <!--<button class="btn profile-settings-btn" aria-label="profile settings"><i class="fas fa-cog" aria-hidden="true"></i></button>
            -->

			<div class="profile-stats">

				<ul>
					<span class="profile-stat-count">164</span>posts
					<span class="profile-stat-count">188</span>followers 
					<span class="profile-stat-count">206</span>following
				</ul>

			</div>

            <hr>
            <p><b><i class="fa fa-asterisk info"></i>Skills</b></p>
            <p>Word press</p>
            <div class="skill-bar">
                <div class="progress-bar" style="width:75%">75%

                </div>
            </div>

            <p>Graphics</p>
            <div class="skill-bar">
                <div class="progress-bar" style="width:80%">80%

                </div>
            </div>
            <hr>
            <button class="btn profile-edit-btn">Edit Profile</button>

        </div>
    </div>
    <script>
            function openForm() {
              document.getElementById("myForm").style.display = "block";
            }
            
            function closeForm() {
              document.getElementById("myForm").style.display = "none";
            }
    </script>
</body>
</html>