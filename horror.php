<?php
    session_start();
    require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Horror</title>
        <meta name="description" content="A destination for passionate bookaholics and authors.."> 
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
    </head>
    <body>
      <header class="horror-header">
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
              <h2 class="subname">HORROR</h2>
              <br>
              <br>
              <br>
              <br>
              <br>
  
              </header>
              <br>
              <br>
          </header>
            <p class="read1">
              Horror fiction is fiction in any medium intended to scare, unsettle, or horrify the audience. Historically, the cause of the horror experience has often been the intrusion of a supernatural element into everyday human experience.....
              Horror fiction often overlaps science fiction or fantasy, all three of which categories are sometimes placed under the umbrella classification speculative fiction.</p>
            <br>
            <h6 class="popular">Most popular Books..</h6>
          
            
       
        <section class="read">
                 
       
        
            <div class="row1">
                <div class="column1">
                  <img src="horror/1.jpg"  style="width:90%;border-radius: 10%;" id="myBtn">
                </div>
                <div class="column1">
                  <img src="horror/2.jpg"  style="width:90% ;border-radius: 10%" id="myBtn1">
                </div>
                <div class="column1">
                  <img src="horror/3.jpg"  style="width:90% ;border-radius: 10%" id="myBtn2">
                  
                </div>
                <div class="column1">
                  <img src="horror/4.jpg"  style="width:90% ;border-radius: 10%" id="myBtn3">
                </div>
                <div class="column1">
                  <img src="horror/5.jpg"  style="width:90%;border-radius: 10%" id="myBtn4">
                </div>
            </div>   
            <br>
            
            <h3 class="popular">Start finding ur interests...</h3>
            <div class="row4">
                <div class="column4">
                    <img src="horror/4.jpg"  style="width:90% ;border-radius:10%" id="myBtn6">
                  </div>
                  <div class="column4">
                    <h2 style="color:white;font-weight: normal;font-style:italic">
                     Something Wicked This Way comes..
                     </br>
                    </br>
                    Ray Bradbury</br>
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
                    <img src="horror/6.jpg"  style="width:90% ;border-radius:10%" id="myBtn5">
                  </div>
                  <div class="column4">
                    <h2 style="color:white;font-weight: normal;font-style:italic">
                     Pet Sematary.
                     </br>
                     Gary Paulsen</br>
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
                  <img src="horror/7.jpg"  style="width:90% ;border-radius:10%" id="myBtn7">
                </div>
                <div class="column4">
                  <h2 style="color:white;font-weight: normal;font-style:italic">
                   You ''ll float too..It
                   
                   </br>
                   Stephen King</br>
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
                  <img src="horror/8.jpg"  style="width:90% ;border-radius:10%" id="myBtn8">
                </div>
                <div class="column4">
                  <h2 style="color:white;font-weight: normal;font-style:italic">
                   The Haunting Of Hill House

                   </br>
                   Shirley Jackson</br>
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
                <img src="horror/9.jpg"  style="width:90% ;border-radius:10%" id="myBtn9">
              </div>
              <div class="column4">
                <h2 style="color:white;font-weight: normal;font-style:italic">
                  The Girl from the well

                 
                 </br>
                 Rin Chupeco </br>
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
                <img src="horror/10.jpg"  style="width:90% ;border-radius:10%" id="myBtn10">
              </div>
              <div class="column4">
                <h2 style="color:white;font-weight: normal;font-style:italic">
                 The light at the end

                 </br>
                 JohnSkipp and craigspector</br>
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
                    <img src="horror/1.jpg" height="260px" width="260px" >
                    </img><img src="horror/2.jpg" height="260px" width="260px">
                    </img>
                    <img src="horror/3.jpg" height="260px" width="260px" >
                    </img>
                    
                    <img src="horror/4.jpg" height="260px" width="260px" >
                    </img>
                    <img src="horror/5.jpg" height="260px" width="260px" >
                    </img>
                    <img src="horror/6.jpg" height="260px" width="260px" >
                    </img>
                    </marquee>


            <div id="myModal" class="modal">

                    
                    <div class="modal-content">
                      
                        
                        
                      
                      <div class="modal-body">
                      <div class="row2">
                      <div class="column5">
                              
                        <img id="myImg" src="horror/5.jpg"alt="Snow" style="width:100%">
                        <button class="button" style="width:37.5%">Read.</button>
                       </div>
                       <div class="column3">
                              
                                      <span class="close">&times;</span>
                        <h2>The Haunting of Hill House</br>
                                
                                
                                by Shirley Jackson, Laura Miller </h2>        
                                <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>        
                                
                                        
                                            <span>2,854 rating</span>
                                            <span>162 reviews</span>
                                        
                                <p class="des" style="font-size:100%">
                       </br>
                       First published in 1959, Shirley Jackson's The Haunting of Hill House has been hailed as a perfect work of unnerving terror. It is the story of four seekers who arrive at a notoriously unfriendly pile called Hill House: Dr. Montague, an occult scholar looking for solid evidence of a "haunting"; Theodora, the lighthearted assistant; Eleanor, a friendless, fragile young woman well acquainted with poltergeists; and Luke, the future heir of Hill House. At first, their stay seems destined to be merely a spooky encounter with inexplicable phenomena. But Hill House is gathering its powers—and soon it will choose one of them to make its own.........</p>
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