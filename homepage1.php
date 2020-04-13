<?php
    session_start();
    require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ulterior</title>
        <meta name="description" content="A destination for passionate bookaholics and authors.."> 
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="style.css">
        
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
            <h1 class="name ">THE ULTERIOR</h1>
            <br>
            <h6 class="name2">A destination for passionate bookaholics and authors!!</h6>
            <br>
            <br>
            
        <br>
        <br>
        </header>
        <br>
        <br>
        <section class="read">
                <div class="row1">
                        <div class="column1"> 
       
        <p class="read1">
                        Literature, the foundation of life provides the ability to connect human relationships. It is any product of creative minds, a set of parallel lives that go along with our life, a therapy that soothes the mind, a platform for being heard and to express.
                Are u a literature enthusiast? Does literature flow out of you, covering the pages in hot passion as emotions melt into words. Do u want to explore writings and get carried away in the world of words and phrases? Then this is definitely the right place for you! 
                We intend to create a website that connects you to the literature world , a place to find and read stories online for free!! 
                
        </p>
     
            
        <div class="xop-section">
                <ul class="xop-grid">
                  <li>
                    <div class="xop-box xop-img-1">
                      <a href="adventure.php">
                      <div class="xop-info">
                        <h3>Adventure.</h3>
                        <p>LETS GET INTO THE WORLD OF ADVENTURE...</p>
                      </div></a>
                    </div>
                  </li>
                  <li>
                    <div class="xop-box xop-img-2">
                      <a href="fantasy.php">
                      <div class="xop-info">
                        <h3>Fantasy..</h3>
                        <p>DONOT WORRY ABOUT REALITY START DREAMING...</p>
                      </div></a>
                    </div>
                  </li>
                  <li>
                    <div class="xop-box xop-img-3">
                      <a href="horror.php">
                      <div class="xop-info">
                        <h3>Horror</h3>
                        <p>EXPERIENCE THE FRIGHTENING SIGHT....</p>
                      </div></a>
                    </div>
                  </li>
                  <li>
                    <div class="xop-box xop-img-4">
                      <a href="mystery.php">
                      <div class="xop-info">
                        <h3>Mystery</h3>
                        <p>START DEALING WITH SOMETHING IMPOSSIBLE TO UNDERSTAND.</p>
                      </div></a>
                    </div>
                  </li>
                  <li>
                        <div class="xop-box xop-img-5">
                          <a href="nonfiction.php">
                          <div class="xop-info">
                            <h3>Non-Fiction</h3>
                            <p>TELLS FACTS AND INFORAMTION....</p>
                          </div></a>
                        </div>
                      </li>
                      <li>
                            <div class="xop-box xop-img-6">
                              <a href="poetry.php">
                              <div class="xop-info">
                                <h3>Poems</h3>
                                <p>AN ARTISTIC WRITING...</p>
                              </div></a>
                            </div>
                          </li>
                          <li>
                                <div class="xop-box xop-img-7">
                                  <a href="romance.php">
                                  <div class="xop-info">
                                    <h3>Romance</h3>
                                    <p>A FEELING OF EXICTEMENT ASSOCIATED WITH LOVE...</p>
                                  </div></a>
                                </div>
                              </li>
                              <li>
                                    <div class="xop-box xop-img-8">
                                      <a href="scifi.php">
                                      <div class="xop-info">
                                        <h3>SCIFI</h3>
                                        <p>NOT FULLY ACCEPECTED BY MAINSTREAM SCIENCE...</p>
                                      </div></a>
                                    </div>
                                  </li>
                                  <li>
                                        <div class="xop-box xop-img-9">
                                          <a href="teenfiction.php">
                                          <div class="xop-info">
                                            <h3>Teen Fiction</h3>
                                            <p>SPECIFIC CHALLENGES OF YOUTH...
                                            </p>
                                          </div></a>
                                        </div>
                                      </li>
                                      <li>
                                            <div class="xop-box xop-img-10">
                                              <a href="thirller.php">
                                              <div class="xop-info">
                                                <h3>Thriller</h3>
                                                <p>A VERY EXICTING CONTEST.....</p>
                                              </div></a>
                                            </div>
                                          </li>
                  
                </ul>
              </div>
            </div>         
                        
                        <div class="column2 " >
                          <h1 style="color:lightsalmon;padding-left:10px;">TRENDING NEWS!!!</h1>
                        <marquee direction="up" height="300px" >
                            
                          <ul>
                            <li style="color:whitesmoke;font-style:italic;font-size: 15px;">
                                World is becoming hostile to fiction: JCB Prize Winner
                            </li><br>
                          <li style="color:whitesmoke;font-style:italic;font-size: 15px;">Goosebumps for the weekend: ‘Strange: Stories’ by Shreya Sen-Handley………. Do give it a try!!!!</li><br>
                          <li style="color:whitesmoke;font-style:italic;font-size: 15px;">Bangalore Literature Festival from December 9. Gear up for a fun-filled and excited week!!</li> <br>
                          <li style="color:whitesmoke;font-style:italic;font-size: 15px;">What does Indian self-publishing industry need urgently? Editing!!</li><br>
                          <li style="color:whitesmoke;font-style:italic;font-size: 15px;">Margaret Atwood and Bernardine Evaristo joint winners of Booker Prize</li><br>
                          </ul>
                          </marquee>
                          <br>
                          <br>
                          <br>
                          <h2 style="color:lightsalmon;font-style:italic;">DON'T MISS OUT!!!</h2>
                          <div class="slideshow-container">
        
                              <div class="mySlides fade">
                                <img src="11.jpg" style="width:100%">
                                
                              </div>
                              
                              <div class="mySlides fade">
                                
                                <img src="12.jpg" style="width:100%">
                                
                              </div>
                              
                              <div class="mySlides fade">
                                
                                <img src="15.jpg" style="width:100%">
                                
                              </div>
        
                              <div class="mySlides fade">
                                  
                                  <img src="16.jpg" style="width:100%">
                                  
                                </div>
                              
                              </div>
                              <br>
                              
                              <div style="text-align:center">
                                <span class="dot"></span> 
                                <span class="dot"></span> 
                                <span class="dot"></span> 
                              </div>
                              <br>
                              <br>
                              <br>
                              <div class="example1">
                                  <img src="winner.jpg" style="width:200px;height:300px;margin-top:0;margin-left:0;border-radius:70%">
                                 <p class="winningtxt"> 5th Annual The Ulterior Choice Awards...<br>



Vote now for your favorite books of the year across 20 categories in the 11th annual The Ulterior Choice Awards!<br>
Polls are open…. Vote now!!!<br></p>
<button class="winningbutton">Vote Now!</button>
                                  
                              </div>
                            
                            </div>
                              <script>
                              var slideIndex = 0;
                              showSlides();
                              
                              function showSlides() {
                                var i;
                                var slides = document.getElementsByClassName("mySlides");
                                var dots = document.getElementsByClassName("dot");
                                for (i = 0; i < slides.length; i++) {
                                  slides[i].style.display = "none";  
                                }
                                slideIndex++;
                                if (slideIndex > slides.length) {slideIndex = 1}    
                                for (i = 0; i < dots.length; i++) {
                                  dots[i].className = dots[i].className.replace(" active", "");
                                }
                                slides[slideIndex-1].style.display = "block";  
                                dots[slideIndex-1].className += " active";
                                setTimeout(showSlides, 3000); // Change image every 2 seconds
                              }
                              </script>
                          </div>
                          </div>
            
          
    
  
      </section>
        
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