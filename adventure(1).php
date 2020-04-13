<?php
    session_start();
    require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Adventure</title>
        <meta name="description" content="A destination for passionate bookaholics and authors.."> 
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
    </head>
    <body>
      <header class="adventure-header">
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
              <h2 class="subname">ADVENTURE STORIES</h2>
              <br>
              <br>
              <br>
              <br>
              <br>
    
            </header>
            <br>
            <br>
            <div class="row1">
                <div class="column1"> 
            <p class="read1">
              Adventure fiction is a genre of fiction in which an adventure, an exciting undertaking involving risk and physical danger, forms the main storyline. Adventure fiction often overlaps with other genres, notably war novels, crime novels, sea stories, Robinsonades, spy stories....
          </p>
        </div>
        <div class="column2">
            <img src="kitkat.gif" style="width:200px;height:200px;">

        </div>
        </div>
          
            <h6 class="popular">Most popular Books..</h6>
         
            
       
        <section class="read">
                 
       
        
            <div class="row1">
                <div class="column1">
                  <img src="adventure/adventure1.jpg"  style="width:90%;border-radius: 10%;" id="myBtn">
                </div>
                <div class="column1">
                  <img src="adventure/adventure2.jpg"  style="width:90% ;border-radius: 10%" id="myBtn1">
                </div>
                <div class="column1">
                  <img src="adventure/adventure3.jpg"  style="width:90% ;border-radius: 10%" id="myBtn2">
                  
                </div>
                <div class="column1">
                  <img src="adventure/adventure4.jpg"  style="width:90% ;border-radius: 10%" id="myBtn3">
                </div>
                <div class="column1">
                  <img src="adventure/adventure5.jpg"  style="width:90%;border-radius: 10%" id="myBtn4">
                </div>
            </div>   
            <br>
            
            <h3 class="popular">Start finding ur interests...</h3>
            <div class="row4">
                <div class="column4">
                    <img src="adventure/adventure4.jpg"  style="width:90% ;border-radius:10%" id="myBtn6">
                  </div>
                  <div class="column4">
                    <h2 style="color:white;font-weight: normal;font-style:italic">
                      Harry Potter and the Sorcerer's Stone
                     </br>
                    J.K. Rowling</br>
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
                    <img src="adventure/adventure6.jpg"  style="width:90% ;border-radius:10%" id="myBtn5">
                  </div>
                  <div class="column4">
                    <h2 style="color:white;font-weight: normal;font-style:italic">
                      Brain's Winter
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
                  <img src="adventure/adventure7.jpg"  style="width:90% ;border-radius:10%" id="myBtn7">
                </div>
                <div class="column4">
                  <h2 style="color:white;font-weight: normal;font-style:italic">
                    After the Flood
                   
                   </br>
                   Kassandra Montag</br>
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
                  <img src="adventure/adventure8.jpg"  style="width:90% ;border-radius:10%" id="myBtn8">
                </div>
                <div class="column4">
                  <h2 style="color:white;font-weight: normal;font-style:italic">
                    This Tender Land

                   </br>
                   William Kent Krueger (Goodreads Author), Scott Brick (Narrator)</br>
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
                <img src="adventure/adventure9.jpg"  style="width:90% ;border-radius:10%" id="myBtn9">
              </div>
              <div class="column4">
                <h2 style="color:white;font-weight: normal;font-style:italic">
                  The Rescue

                 
                 </br>
                 Steven Konkoly </br>
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
                <img src="adventure/adventure10.jpg"  style="width:90% ;border-radius:10%" id="myBtn10">
              </div>
              <div class="column4">
                <h2 style="color:white;font-weight: normal;font-style:italic">
                  This Tender Land

                 </br>
                 William Kent Krueger (Goodreads Author), Scott Brick (Narrator)</br>
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
                    <img src="adventure/adventure1.jpg" height="260px" width="260px" >
                    </img><img src="adventure/adventure2.jpg" height="260px" width="260px">
                    </img>
                    <img src="adventure/adventure3.jpg" height="260px" width="260px" >
                    </img>
                    
                    <img src="adventure/adventure4.jpg" height="260px" width="260px" >
                    </img>
                    <img src="adventure/adventure5.jpg" height="260px" width="260px" >
                    </img>
                    <img src="adventure/adventure6.jpg" height="260px" width="260px" >
                    </img>
                    </marquee>


            <div id="myModal" class="modal">

                    
                    <div class="modal-content">
                      
                        
                        
                      
                      <div class="modal-body">
                      <div class="row2">
                      <div class="column5">
                              
                        <img id="myImg" src="adventure/adventure1.jpg"alt="Snow" style="width:100%">
                        <button class="button" style="width:37.5%">Read.</button>
                       </div>
                       <div class="column3">
                              
                                      <span class="close">&times;</span>
                        <h2>Predator</br>
                                (Hector Cross #3)</br>
                                by Wilbur Smith, Tom Cain (Contributor)</h2>        
                                <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>        
                                
                                        
                                            <span>2,854 rating</span>
                                            <span>162 reviews</span>
                                        
                                <p class="des">THEY MURDERED HIS WIFE.
                       </br>
                            THEY DESTROYED HIS FUTURE.
                       </br>
                            NOW THEY HAVE TO PAY.
                    </br>
                            Two men are responsible for the death of Hector Cross’ wife and only one is left alive: Johnny Congo – psychopath, extortionist, murderer, and the bane of Cross’s life. He caught him before and let him go. Now, Hector wants him dead. So does the US government.
                            
                            Congo is locked up on Death Row in the most secure prison in the free world, counting down the days until his execution. He’s got two weeks. He wants out. He’s escaped before and knows he can again, and with whizz kid D’Shonn Brown enlisted, he might just have a chance.
                            
                            Cross, still licking his wounds from his last bruising encounter with Congo, is back and ready for work. In the middle of the rough Atlantic stands oil supertanker Bannock A. Terrorist activity in the area has triggered panic and there’s only one person they can trust to protect her.
                            
                            What is promised as a cakewalk turns out to be much more, a mission that will test Cross to his emotional and physical limits. But a life spent in the SAS and private security has left Cross hard-wired for pain and as he is thrown into the bull pit once more, he will not stop until he has snared his prey.
                            
                            Hector Cross is Predator..........</p>
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