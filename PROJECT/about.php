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
    <title>Document</title>
    <link rel="stylesheet" href="pstyle.css">
    <style>
        main{
            background-color: rgb(160, 219, 216);
        }
    </style>
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
          <p>Hi,<span><?php echo $_SESSION['user_name'] ?></span></p>
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
        <h1>ABOUT US</h1>
        <br>
        <div class="contact">
        <p style="font-size: 20px;">
            Arodemy aims at providing quality content to every child for free.Lecturewise notes, video lectures, test series, topicwise assignment with best questions, dynamic exercise and much more. Almost 90% content on this App is for free and will always be.
            
            </p>
            <br>
            <br>
        <p>
            The founder Lavish Gupta and Team stands for education for every child irrespective of it's economic status.
        </p>
        <br>
        <hr>
        <br>
        <p>
            <h2>We understand that every student has different needs and capabilities, which is why we create such a wonderful and unique curriculum that is the best fit for every student.
            </h2>
            <br>
            <br>
            <h3>Know about Arodemy </h3>
            <br>
            Arodemy is India's top online ed-tech platform that provides affordable and comprehensive learning experience to students of classes 9 to 12 and those preparing for JEE and NEET exams. We also provide extensive NCERT solutions, sample papers, NEET, JEE Mains, BITSAT previous year papers, which makes us a one-stop solution for all resources.
            <br> <br>
            <h3>We Stand Out because </h3>
            <br>
            We successfully provide students with intensive courses by India's top faculties and personal mentors. Arodemy strives to make the learning experience comprehensive and accessible for students of all sections of society. We believe in empowering every single student who couldn’t dream of a good career in engineering and medical field earlier.
            <br> <br>
            <h3>Our Key Focus Areas </h3>
            <br>
            Arodemy’s main focus is to make the learning experience as economical as possible for all students. With our affordable courses, we have been able to provide a platform for lakhs of aspirants. Arodemy focuses on every single student's need for preparation.
            <br> <br>
            <h3>What Makes Us Different </h3>
            <br>
            Arodemy strives to develop a comprehensive pedagogical structure for students, where they get a state-of-the-art learning experience with study material and resources. 
            <br>
            </p>
    </main>
    <footer>
      <p>Copyright &copy; ARODEMY.com</p>
    </footer>
</body>
</html>
