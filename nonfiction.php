<?php
    session_start();
    require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Nonfiction</title>
        <meta name="description" content="A destination for passionate bookaholics and authors.."> 
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
    </head>
    <body>
      <header class="nonfiction-header">
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
            <div class="search-container">
                <form action="/action_page.php">
                  <input type="text" placeholder="Search.." name="search">
                  <button type="submit" ><img src="search.png" class="search"></button>
                </form>
              </div>
              <br>
              <br>
              <br>
              <br>
              
              <br>
              <h2 class="subname">NONFICTION</h2>
              <br>
              <br>
              <br>
              <br>
              <br>
  
              </header>
              <br>
              <br>
            <p class="read1">
              Nonfiction is an account or representation of a subject which is presented as fact. This presentation may be accurate or not; that is, it can give either a true or a false account of the subject in question. However, it is generally assumed that the authors of such accounts believe them to be truthful at the time of their composition.....
          </p>
            <br>
            <h6 class="popular">Most popular Books..</h6>
          
            
       
        <section class="read">
                 
       
        
            <div class="row1">
                <div class="column1">
                  <img src="nonfiction/1.jpg"  style="width:90%;border-radius: 10%;" id="myBtn">
                </div>
                <div class="column1">
                  <img src="nonfiction/2.jpg"  style="width:90% ;border-radius: 10%" id="myBtn1">
                </div>
                <div class="column1">
                  <img src="nonfiction/3.jpg"  style="width:90% ;border-radius: 10%" id="myBtn2">
                  
                </div>
                <div class="column1">
                  <img src="nonfiction/4.jpg"  style="width:90% ;border-radius: 10%" id="myBtn3">
                </div>
                <div class="column1">
                  <img src="nonfiction/5.jpg"  style="width:90%;border-radius: 10%" id="myBtn4">
                </div>
            </div>   
            <br>
            
            <h3 class="popular">Start finding ur interests...</h3>
            <div class="row4">
                <div class="column4">
                    <img src="nonfiction/10.jpg"  style="width:90% ;border-radius:10%" id="myBtn6">
                  </div>
                  <div class="column4">
                    <h2 style="color:white;font-weight: normal;font-style:italic">
                      Silent Spring
                     </br>
                   Rachel Carson</br>
                      </h2>        
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star"></span>        
                    </br>
                  </br>
                              <table style="color:white"><li style="color:white">77,931 Ratings</li></br>
                              <li style="color:white">98,250 Reviews</li></table>
                                  
                              
                  </div>
                  <div class="column4">
                    <img src="nonfiction/6.jpg"  style="width:90% ;border-radius:10%" id="myBtn5">
                  </div>
                  <div class="column4">
                    <h2 style="color:white;font-weight: normal;font-style:italic">
                      Burn My Heart At Wounded Knee
                     </br>
                     Dee Brown</br>
                      </h2>        
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star "></span>
                      <span class="fa fa-star"></span>        
                    </br>
                  </br>
                              <table style="color:white"><li style="color:white">4,177 Ratings</li></br>
                              <li style="color:white">250 Reviews</li></table>
                                  
                              
                  </div>
                  
            </div>
            <div class="row4">
              <div class="column4">
                  <img src="nonfiction/7.jpg"  style="width:90% ;border-radius:10%" id="myBtn7">
                </div>
                <div class="column4">
                  <h2 style="color:white;font-weight: normal;font-style:italic">
                   How to WIn Friends And Influence people
                   
                   </br>
                  Dale Carnegie</br>
                    </h2>        
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star"></span>        
                  </br>
                </br>
                  <table style="color:white"><li style="color:white">6,177 Ratings</li></br>
                  <li style="color:white">753 Reviews</li></table>
                                
                            
                </div>
                <div class="column4">
                  <img src="nonfiction/8.jpg"  style="width:90% ;border-radius:10%" id="myBtn8">
                </div>
                <div class="column4">
                  <h2 style="color:white;font-weight: normal;font-style:italic">
                    Killers of the Flower Moon

                   </br>
                  David Grann</br>
                    </h2>        
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>        
                  </br>
                            <table style="color:white"><li style="color:white">7,931 Ratings</li>
                            <li style="color:white">450 Reviews</li></table>
                                
                            
                </div>
                
          </div>
          <div class="row4">
            <div class="column4">
                <img src="nonfiction/9.jpg"  style="width:90% ;border-radius:10%" id="myBtn9">
              </div>
              <div class="column4">
                <h2 style="color:white;font-weight: normal;font-style:italic">
            Stephen Hawking

                 
                 </br>
                 A brief History Time </br>
                  </h2>        
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star  checked"></span>
                  <span class="fa fa-star"></span>        
                </br>
              </br>
                <table style="color:white"><li style="color:white">5,177 Ratings</li></br>
                <li style="color:white">853 Reviews</li></table>
                              
                          
              </div>
              <div class="column4">
                <img src="nonfiction/10.jpg"  style="width:90% ;border-radius:10%" id="myBtn10">
              </div>
              <div class="column4">
                <h2 style="color:white;font-weight: normal;font-style:italic">
                 Silent Spring

                 </br>
                 Rachel Carson</br>
                  </h2>        
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star "></span>
                  <span class="fa fa-star"></span>        
                </br>
                          <table style="color:white"><li style="color:white">7,931 Ratings</li>
                          <li style="color:white">450 Reviews</li></table>
                              
                          
              </div>
              
        </div>
            <marquee>
                    <img src="nonfiction/1.jpg" height="260px" width="260px" >
                    </img><img src="nonfiction/2.jpg" height="260px" width="260px">
                    </img>
                    <img src="nonfiction/3.jpg" height="260px" width="260px" >
                    </img>
                    
                    <img src="nonfiction/4.jpg" height="260px" width="260px" >
                    </img>
                    <img src="nonfiction/5.jpg" height="260px" width="260px" >
                    </img>
                    <img src="nonfiction/6.jpg" height="260px" width="260px" >
                    </img>
                    </marquee>


            <div id="myModal" class="modal">

                    
                    <div class="modal-content">
                      
                        
                        
                      
                      <div class="modal-body">
                      <div class="row2">
                      <div class="column5">
                              
                        <img id="myImg" src="nonfiction/1.jpg"alt="Snow" style="width:100%">
                        <button class="button" style="width:37.5%">Read.</button>
                       </div>
                       <div class="column3">
                              
                                      <span class="close">&times;</span>
                        <h2>The Warmth of Other Suns: The Epic Story of America's Great Migration</br>
                          
                          by Isabel Wilkerson</h2>        
                                <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>        
                                
                                        
                                            <span>2,854 rating</span>
                                            <span>162 reviews</span>
                                        
                                <p class="des" style="font-size:100%;">
                       
                       </br>
                       In this epic, beautifully written masterwork, Pulitzer Prize–winning author Isabel Wilkerson chronicles one of the great untold stories of American history: the decades-long migration of black citizens who fled the South for northern and western cities, in search of a better life. 

                       From 1915 to 1970, this exodus of almost six million people changed the face of America. Wilkerson compares this epic migration to the migrations of other peoples in history. She interviewed more than a thousand people, and gained access to new data and official records, to write this definitive and vividly dramatic account of how these American journeys unfolded, altering our cities, our country...........</p>
                       </div>
                       </div>
                       
                      </div>
                     
                    </div>
                  
                  </div>
    </section>
    
        
        <script>
                // Get the modal
                var modal = document.getElementById("myModal");
                
                // Get the button that opens the modal
                var btn = document.getElementById("myBtn");
                var btn1 = document.getElementById("myBtn1");
                var btn2 = document.getElementById("myBtn2");
                var btn3 = document.getElementById("myBtn3");
                var btn4 = document.getElementById("myBtn4");
                var btn5 = document.getElementById("myBtn5");
                var btn6 = document.getElementById("myBtn6");
                var btn7 = document.getElementById("myBtn7");
                var btn8 = document.getElementById("myBtn8");
                var btn9 = document.getElementById("myBtn9");
                
                var btn10 = document.getElementById("myBtn10");
                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close")[0];
                
                // When the user clicks the button, open the modal 
                btn.onclick = function() {
                  modal.style.display = "block";
                }
               
                btn1.onclick = function() {
                  modal.style.display = "block";
                }

                btn2.onclick = function() {
                  modal.style.display = "block";
                }
                
                btn3.onclick = function() {
                  modal.style.display = "block";
                }
                btn4.onclick = function() {
                  modal.style.display = "block";
                }
                btn5.onclick = function() {
                  modal.style.display = "block";
                }
                btn6.onclick = function() {
                  modal.style.display = "block";
                }
                btn7.onclick = function() {
                  modal.style.display = "block";
                }
                btn8.onclick = function() {
                  modal.style.display = "block";
                }
                btn9.onclick = function() {
                  modal.style.display = "block";
                }
                btn10.onclick = function() {
                  modal.style.display = "block";
                }
                
                
                // When the user clicks on <span> (x), close the modal
                span.onclick = function() {
                  modal.style.display = "none";
                }
                
                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                  if (event.target == modal) {
                    modal.style.display = "none";
                  }
                }
                </script>
                  <footer class="footer-distributed">
 
                    <div class="footer-left">
                 
                    <h3>THE ULTERIOR</h3>
                 
                    <p class="footer-links">
                      · <a href="homepage1.html">Home</a>
                   ·
                    <a href="about.html">AboutUs</a>
                  ·
                    <a href="#">Help</a>
                  ·
                    <a href="#">Privacy</a>
                  ·
                    <a href="#">Community</a>
                  ·
                    <a href="#">Contact</a>
                    </p>
                 
                    <p class="footer-company-name">TheUlterior &copy; 2019</p>
                    </div>
                 
                    <div class="footer-center">
                 
                    <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>PES University,B-block,G09 </span> Banglore, India</p>
                    </div>
                 
                    <div>
                    <i class="fa fa-phone"></i>
                    <p>+91 9490956789</p>
                    </div>
                 
                    <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="#">contact@ulterior.com</a></p>
                    </div>
                 
                    </div>
                 
                    <div class="footer-right">
                 
                    <p class="footer-company-about">
                    <span>About the company</span>
                  The Ulterior is a blog for bookaholics &amp; Authors.
                    </p>
                 
                    <div class="footer-icons">
                 
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                   
                 
                    </div>
                 
                    </div>
                 
                    </footer>
    </body>
</html>