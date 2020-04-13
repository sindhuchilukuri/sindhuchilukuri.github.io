<?php
    session_start();
    require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ulterior</title>
        <meta name="description" content="A destination for passionate bookaholics and authors.."> 
        <link rel="stylesheet"  href="style.css">
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
            <br>
            <br>
            <br>
            <br>
            <h1 class="name">THE ULTERIOR</h1>
            <br>
            <h6 class="name2">A destination for passionate bookaholics and authors!!</h6>
            <br>
            <br>
            
        <br>
        <br>
        </header>
            <section class="read content">
                <h2 class="section-header">ABOUT</h2>
                <p class="about-content">Literature, the foundation of life provides the ability to connect human relationships. It is any product of creative minds, a set of parallel lives that go along with our life, a therapy that soothes the mind, a platform for being heard and to express.
                    Are u a literature enthusiast? Does literature flow out of you, covering the pages in hot passion as emotions melt into words. Do u want to explore writings and get carried away in the world of words and phrases? Then this is definitely the right place for you! 
                    We intend to create a website that connects you to the literature world , a place to find and read stories online for free!! 
                    <img src="reading.jpg" class="about-image">
                    There is something magical about reading books ,whether fiction or non -fiction, fantasy or sci-fi there are many books out there but still it is not easy to make a trip all the way to the bookstore or library to find that specific book that we are looking for. So we have preferred a website to provide a collection of books and writings for the users in such a way that they can read the literary works of their choice with immense comfort and satisfaction. Whether you're into literary fiction or genre, you'll find a home here giving you easy access to prose, poetry, drama, essays, fiction, adventure ,horror ,non-fiction, romance, mystery, fantasy and many more…..
                   </p>
                    
                    <p class="about-content">
                   The website provides an opportunity for writers to create and publish their ideologies, feelings, experiences and thoughts in the form of e-books. It features free short stories, poems, literary criticism, articles and lots more. This an open platform which can turn  any enthusiastic and skilled writer into a popular author. The website also gives an option to follow the authors of their choice and thus paves the way for the users to encourage and support the writers. The review section helps the users to go through the opinions of the people regrading a book before selecting the book to read so as to ensure that the user will a prior knowledge about the books content
                    </p>
                    <img src="writing.jpg" class="about-image1">
                    <p class="about-content">There is plenty of fun, diverse ways that you can engage with reading and writing. They deepen and widen and expand our sense of life, they feed our soul. The website enables people to share their content on life and survival.It establishes a unique connection between the writers and readers thus expanding the literature world. The website brings forward both innovation and emotion. The special thing about this online literary world is that with all of this free content, its really easy to be a reader without emptying your bank account. This gives an accessibility for the people from all economic backgrounds read and write as per their interest.</p>
                    </p>
                </section>
<br>
<br>
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