<?php
@include 'config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link rel="stylesheet" href="pstyle.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="logo.png">
            </div>
            <ul>
                <li><a href="pproject.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <div class="login">
                <?php
          if(isset($_SESSION['user_name'])) {
          ?>
          <p>Hi,<span><?php echo $_SESSION['user_name']."," ?></span></p>
          <a href="logout.php" tite="Logout">Logout.
          <?php
          }else {
            ?>
            <a href="register_form.php">Sign In</a>
            <?php
          }
          ?>
            </div>
        </nav>
    </header>
    <main>
        <div class="container-1">
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <img src="ARODEMY (1).png" style="width:100%">
                </div>
                <div class="mySlides fade">
                    <img src="Padhna hua asan.png" style="width:100%">
                </div>
            </div>
            <br>        
            <div style="text-align:center">
                <span class="dot"></span> 
                <span class="dot"></span> 
            </div>    
        </div>
        <div class="container-2">
            <div class="vertical-banner">
                <div class="vertical-banner-heading">
                    <p>India's Most Loved Education Platform</p>
                </div>
                <div class="vertical-banner-sub-heading">
                    <p>With ARODEMY, Begin your journey to success.</p>
                </div>
                <div class="vertical-banner-content">
                    <div class="vertical-banner-content-num">
                        <p>8M &#43;</p>
                    </div>
                    <div class="vertical-banner-content-info">
                        <p>Happy Students</p>
                    </div>
                    <div class="vertical-banner-content-num">
                        <p>13700 &#43;</p>
                    </div>
                    <div class="vertical-banner-content-info">
                        <p>Video Lectures</p>
                    </div>
                    <div class="vertical-banner-content-num">
                        <p>2500 &#43;</p>
                    </div>
                    <div class="vertical-banner-content-info">
                        <p>Mock Tests</p>
                    </div>
                    <div class="vertical-banner-content-num">
                        <p>70000 &#43;</p>
                    </div>
                    <div class="vertical-banner-content-info">
                        <p>Questions</p>
                    </div>
                </div>
            </div>
            <div class="class">
                <div class="classes">
                    <div class="classes-item">
                    <a href="jee.php">JEE</a>
                    </div>
                    <div class="classes-item">
                        <a href="neet.php">NEET</a>
                    </div>
                    <div class="classes-item">
                        <a href="class12.php">CLASS 12</a>
                    </div>
                </div>
                <div class="classes">
                    <div class="classes-item">
                        <a href="class11.php">CLASS 11</a>
                    </div>
                    <div class="classes-item">
                        <a href="class10.php">CLASS 10</a>
                    </div>
                    <div class="classes-item">
                        <a href="class9.php">CLASS 9</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <p>Copyright &copy; ARODEMY.com</p>
    </footer>
    <script>
        let slideIndex = 0;
        showSlides();
        
        function showSlides() {
          let i;
          let slides = document.getElementsByClassName("mySlides");
          let dots = document.getElementsByClassName("dot");
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
          setTimeout(showSlides, 5000); // Change image every 2 seconds
        }
        </script>
</body>
</html>