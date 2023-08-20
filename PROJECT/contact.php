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
    <title>Contact</title>
    <link rel="stylesheet" href="pstyle.css">
    <style>
      main{
        min-height: 85vh;
        background-image: url(hhb.jpeg);
        background-repeat: no-repeat;
        background-size: 100% 100%;
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
        <h1>CONTACT US</h1>
        <br>
        <div class="contact">
        <p style="font-size: 20px;">
            
            This is the <strong>official page of Arodemy</strong>, where you can share all your queries, feedback, complaints, or any concern you may have about our centers, courses, and programs.
        </p>
        <br>
        <p style="font-size: 18px;">
Arodemy, India's leading student-oriented Edtech organization, is here to help all the students to solve their grievances. We're here to help you. We aim to solve all the queries within 3 days. You can call on Arodemy official Contact No. 8175878476, 24 x 7. If the phone is busy, we're resolving someone else's queries. We request you to contact us again after 15 minutes so that we can address your query or concern you may have regarding lectures or course material. You may notify us in the "contact us" section only. Your suggestions will help us improve and give you and all the children a bright future.

In Case of any grievance, don't hesitate to get in touch with us on Arodemy official contact number 8175878476. Or you can write to us at support@arodemy.com.
        </p>
        <br><br>
        <hr>
    </div>
    <br>
    <h2>ARODEMY</h2>
    <br>
    <h4>Contact: 8175878476</h4>
    <h4>JIIT Sector-62,</h4>
    <h4>NOIDA</h4>
      </main>
      <footer>
        <p>Copyright &copy; ARODEMY.com</p>
      </footer>
</body>
</html>