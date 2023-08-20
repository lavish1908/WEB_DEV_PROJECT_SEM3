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
  <title>NEET EXAM</title>
  <link rel="stylesheet" href="pstyle.css">
  <link rel="stylesheet" href="pstyles2.css">
  <link rel="stylesheet" href="jnstyle.css">
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
    <div class="container-class">
      <div class="heading">
        <a class="home" href="pproject.php">Home /</a>
        <a class="class-select" href="neet.php">JEE</a>
        <br>
        <br>
        <h1>NEET EXAM</h1>
        <br>
        <p>ARODEMY provides state-of-the-art learning experience by top faculties who will conduct classes with the
          latest syllabus and provide solutions and solve doubts through best in-class doubt engines.</p>
      </div>
      <div class="courses">
        <div class="course">
          <div class="c-img">
            <img src="ARODEMY.png" alt="Error">
          </div>
          <div class="course-content">
            <p>LAKSHYA NEET 2023</p>
            <div class="course-content-info-num">
              <p>10+</p>
              <p>100+</p>
              <p>100+</p>
              <p>130+</p>
            </div>
            <div class="course-content-info">
              <p>Tests</p>
              <p>DPP Solutions</p>
              <p>DPP</p>
              <p>Live Lectures</p>
            </div>
            <div class="discount">
              <p>Special Discounted Price</p>
            </div>
            <div class="price">
              <div class="new-price">
                <p>&#8377; 1800</p>
              </div>
              <div class="old-price">
                <p>3000</p>
              </div>
              <div class="off">
                <p>40&#37; OFF</p>
              </div>
              <div class="buy">
                <a href="buy.php">BUY</a>
              </div>
            </div>
          </div>
        </div>
        <div class="course">
          <div class="c-img">
            <img src="ARODEMY.png" alt="Error">
          </div>
          <div class="course-content">
            <p>NEET PRAHAAR 2023</p>
            <div class="course-content-info-num">
              <p>14+</p>
              <p>200+</p>
              <p>200+</p>
              <p>230+</p>
            </div>
            <div class="course-content-info">
              <p>Tests</p>
              <p>DPP Solutions</p>
              <p>DPP</p>
              <p>Live Lectures</p>
            </div>
            <div class="discount">
              <p>Special Discounted Price</p>
            </div>
            <div class="price">
              <div class="new-price">
                <p>&#8377; 3000</p>
              </div>
              <div class="old-price">
                <p>5000</p>
              </div>
              <div class="off">
                <p>40&#37; OFF</p>
              </div>
              <div class="buy">
                <a href="buy.php">BUY</a>
              </div>
            </div>
          </div>
        </div>
        <div class="course">
          <div class="c-img">
            <img src="ARODEMY.png" alt="Error">
          </div>
          <div class="course-content">
            <p>ALPHA BATCH 2023</p>
            <div class="course-content-info-num">
              <p>14+</p>
              <p>300+</p>
              <p>300+</p>
              <p>330+</p>
            </div>
            <div class="course-content-info">
              <p>Tests</p>
              <p>DPP Solutions</p>
              <p>DPP</p>
              <p>Live Lectures</p>
            </div>
            <div class="discount">
              <p>Special Discounted Price</p>
            </div>
            <div class="price">
              <div class="new-price">
                <p>&#8377; 4800</p>
              </div>
              <div class="old-price">
                <p>8000</p>
              </div>
              <div class="off">
                <p>40&#37; OFF</p>
              </div>
              <div class="buy">
                <a href="buy.php">BUY</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer>
    <p>Copyright &copy; ARODEMY.com</p>
  </footer>
</body>

</html>