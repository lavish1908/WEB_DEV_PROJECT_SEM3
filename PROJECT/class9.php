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
  <title>Class 9</title>
  <link rel="stylesheet" href="pstyle.css">
  <link rel="stylesheet" href="pstyles2.css">
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
        <a class="class-select" href="class9.php">CLASS 9</a>
        <br>
        <br>
        <h1>CLASS 9</h1>
        <br>
        <p>ARODEMY provides state-of-the-art learning experience by top faculties who will conduct classes with the
          latest syllabus and provide solutions and solve doubts through best in-class doubt engines.</p>
      </div>
      <div class="content">
        <div class="subject">
          <div class="physics">
            <p>Science</p>
          </div>
          <div class="subject-content">
            <details class="chapter">
              <summary>Chapter 1 : Matter in our Surroundings</summary>
              <a href="c9_science_c1.pdf" target="_blank">Notes</a>
              <br>
              <a href="c9_science_c1.pdf" target="_blank">PYQ's</a>
            </details>
            <details class="chapter">
              <summary>Chapter 2 : Is Matter Around us Pure</summary>
              <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
              <br>
              <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
            </details>
            <details class="chapter">
              <summary>Chapter 3 : Atoms and Molecules</summary>
              <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
              <br>
              <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
            </details>
            <details class="chapter">
              <summary>Chapter 4 : Structure of Atoms</summary>
              <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
              <br>
              <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
            </details>
            <details class="chapter">
              <summary>Chapter 5 Tissues: </summary>
              <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
              <br>
              <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
            </details>
          </div>
        </div>
        <div class="subject">
          <div class="chemistry">
            <p>History</p>
          </div>
          <div class="subject-content">
            <details class="chapter">
              <summary>Chapter 1 : The French Revolution</summary>
              <a href="c9_history_c1.pdf" target="_blank">Notes</a>
              <br>
              <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
            </details>
            <details class="chapter">
              <summary>Chapter 2 : Socialism In Europe</summary>
              <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
              <br>
              <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
            </details>
            <details class="chapter">
              <summary>Chapter 3 : Nazism The rise of Hitler</summary>
              <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
              <br>
              <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
            </details>
            <details class="chapter">
                <summary>Chapter 4 : Forest Society Colonialism</summary>
                <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
                <br>
                <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
              </details>
            </div>
        </div>
        <div class="subject">
          <div class="maths">
            <p>MATHS</p>
          </div>
          <div class="subject-content">
            <details class="chapter">
              <summary>Chapter 1 : Number Systems</summary>
              <a href="c9_maths_c1.pdf" target="_blank">Notes</a>
              <br>
              <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
            </details>
            <details class="chapter">
              <summary>Chapter 2 : Polynomials</summary>
              <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
              <br>
              <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
            </details>
            <details class="chapter">
              <summary>Chapter 3 : Coordinate Geometry</summary>
              <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
              <br>
              <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
            </details>
            <details class="chapter">
                <summary>Chapter 4 : Linear Equations</summary>
                <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
                <br>
                <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
              </details>
              <details class="chapter">
                <summary>Chapter 5 : Euclid's Geometry</summary>
                <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
                <br>
                <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
              </details>
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