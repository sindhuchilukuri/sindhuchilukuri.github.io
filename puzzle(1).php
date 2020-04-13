<?php
    session_start();
    require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Image Puzzle</title>
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/image-puzzle.css" rel="stylesheet" />
    <script src="js/image-puzzle.js"></script>
</head>

<body>
        <div class="main-header">
            <nav class="nav main-nav">
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
        </div>
        <br>
        <br>
          
    <div id="collage">
        
        <hr />
        <div id="playPanel" style="padding:5px;display:none;">
            <h3 id="imgTitle"></h3>
            <hr />
            <div style="display:inline-block; margin:auto; width:95%; vertical-align:top;">
                <ul id="sortable" class="sortable"></ul>
                <div id="actualImageBox">
                    <div id="stepBox">
                        <div>Steps:</div>
                        <div id="stepCount" class="stepCount">0</div>
                    </div>
                    <div id="timeBox" style="color:black;">
                        Time Taken: <span id="timerPanel"></span> secs
                    </div>
                    <img id="actualImage" />
                    <div style="color:black;">Re-arrange to create a picture like this.</div>
                    <p id="levelPanel">
                        <input type="radio" name="level" id="easy" checked="checked" value="3" onchange="imagePuzzle.startGame(images, this.value);"
                        /> <label for="easy">Easy</label>
                        <input type="radio" name="level" id="medium" value="4" onchange="imagePuzzle.startGame(images, this.value);" />                        <label for="medium">Medium</label>
                        <input type="radio" name="level" id="hard" value="5" onchange="imagePuzzle.startGame(images, this.value);" />                        <label for="hard">Hard</label>
                    </p>
                    <div>
                        <button id="btnRule" type="button" class="btn" onclick="rules();">Rules</button>
                        <button id="newPhoto" type="button" class="btn" onclick="restart();">Another Photo</button>
                       
                    </div>
                </div>
            </div>
        </div>
        <div id="gameOver" style="display:none;">
            <div style="background-color: #fc9e9e; padding: 5px 10px 20px 10px; text-align: center; ">
                <h2 style="text-align:center">Game Over!!</h2>
                Congratulations!! <br /> You have completed this picture.
                <br /> Steps: <span id="stepCount" class="stepCount">0</span> steps.
                <br /> Time Taken: <span class="timeCount">0</span> seconds<br />
                <div>
                    <button type="button" onclick="window.location.reload(true);">Play Again</button>
                </div>
            </div>
        </div>

        <script>
            var images = [
                { src: 'images/taj-mahal.jpg', title: 'IMAGE 1' },
                { src: 'images/lotus-temple.jpg', title: 'IMAGE 2' },
                { src: 'images/harry.jpg', title: 'IMAGE 3' },
                { src: 'images/ruskin.jpg', title: 'IMAGE 4' },
                { src: 'images/puzzle2.jpg', title: 'IMAGE 5' }
            ];

            window.onload = function () {
                var gridSize = document.querySelector('#levelPanel input[type="radio"]:checked').getAttribute('value');
                imagePuzzle.startGame(images, gridSize);
            };
            function restart() {
                var gridSize = document.querySelector('#levelPanel input[type="radio"]:checked').getAttribute('value');
                imagePuzzle.startGame(images, gridSize);
            }
            function rules() {
                alert('Re arrange the image parts in a way that it correctly forms the picture. \nThe no. of steps taken will be counted.');
            }
            
        </script>
    </div>
</body>
</html>