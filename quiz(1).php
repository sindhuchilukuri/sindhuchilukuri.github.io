<?php
    session_start();
    require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>

<title>Its Quiz time!!!</title>
<link href ="quiz-style.css" rel ="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<script src = "main.js"></script>

</head>


<body>
        <header class="main-header">
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
            </header>
<form id = "quiz" name = "quiz">
        <div class="title">
        <h1><b>IT'S QUIZZ TIME!!</b></h1>
        <h3><i>Gear up!! Unleash The inner geek in you!!</i></h3>
        </div>
<ul>
    <li>
            <p class = "questions">Who was the author of the famous storybook 'Alice's Adventures in Wonderland'?</p>
            <input id = "textbox" type = "text" name = "question1">
    </li>
    <li><p class = "questions">Name the book which opens with the line 'All children, except one grew up'?</p>
        <input type = "radio" id = "mc" name = "question2" value = "The Railway Children">The Railway Children<br>
        <input type = "radio" id = "mc" name = "question2" value = "Winnie the Poo"> Winnie the Poo<br>
        <input type = "radio" id = "mc" name = "question2" value = "Jungle book">Jungle book<br>
        <input type = "radio" id = "mc" name = "question2" value = "Peter Pan"> Peter Pan<br>
    </li>
    <li><p class = "questions">What was the nationality of Robert Louis Stevenson, writer of 'Treasure Island'?</p>

        <input type = "radio" id = "mc" name = "question3" value = "Scottish"> Scottish<br>
        <input type = "radio" id = "mc" name = "question3" value = "Welsh"> Welsh<br>
        <input type = "radio" id = "mc" name = "question3" value = "Irish"> Irish<br>
        <input type = "radio" id = "mc" name = "question3" value = "French"> French<br>
    </li>
    <li><p class = "questions"> 'Jane Eyre' was written by which Bronte sister?</p>

        <input type = "radio" id = "mc" name = "question4" value = "Anne"> Anne<br>
        <input type = "radio" id = "mc" name = "question4" value = "Charlotte"> Charlotte<br>
        <input type = "radio" id = "mc" name = "question4" value = "Emily"> Emily<br>
        <input type = "radio" id = "mc" name = "question4" value = "None of the above"> None of the above<br>
    </li>
    <li><p class = "questions"> What is the book 'Lord of the Flies' about?</p>

        <input type = "radio" id = "mc" name = "question5" value = "A round trip around the USA">A round trip around the USA<br>
        <input type = "radio" id = "mc" name = "question5" value = "A swarm of killer flies"> A swarm of killer flies<br>
        <input type = "radio" id = "mc" name = "question5" value = "Schoolboys on the desert island"> Schoolboys on the desert island<br>
        <input type = "radio" id = "mc" name = "question5" value = "None of the above"> None of the above<br>
    </li>
</ul>

<input id = "button" type = "button" value = "I'm finished!" style="align:center;" onclick = "check();">


</form>

<div id = "after_submit">
<p id = "number_correct"></p>
<p id = "message"></p>
<img id = "picture">
</div>
</div>
</html>

</body>



