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
  <title>Class 10</title>
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
        <a class="class-select" href="class10.php">CLASS 10</a>
        <br>
        <br>
        <h1>CLASS 10</h1>
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
              <summary>Chapter 1 : Chemical Reaction</summary>
              <a href="c10_science_c1.pdf" target="_blank">Notes</a>
              <br>
              <a href="c10_science_c1.pdf" target="_blank">PYQ's</a>
            </details>
            <details class="chapter">
              <summary>Chapter 2 : Acids Bases and Salts</summary>
              <a href="c10_science_c1.pdf" target="_blank">Notes</a>
              <br>
              <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
            </details>
            <details class="chapter">
              <summary>Chapter 3 : Metals and Non-Metals</summary>
              <a href="c10_science_c1.pdf" target="_blank">Notes</a>
              <br>
              <a href="c10_science_c1.pdf" target="_blank">PYQ's</a>
            </details>
            <details class="chapter">
              <summary>Chapter 4 : Carbon and its Compound</summary>
              <a href="c10_science_c1.pdf" target="_blank">Notes</a>
              <br>
              <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
            </details>
            <details class="chapter">
              <summary>Chapter 5 : Life Processes</summary>
              <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
              <br>
              <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
            </details>
            
          </div>
        </div>
        <div class="subject">
          <div class="chemistry">
            <p>English</p>
          </div>
          <div class="subject-content">
            <details class="chapter">
              <summary>Chapter 1 : Grammer</summary>
              <a href="c10_english_c1.pdf" target="_blank">Notes</a>
              <br>
              <a href="c10_english_c1.pdf" target="_blank">PYQ's</a>
            </details>
            <details class="chapter">
              <summary>Chapter 2 : Reading</summary>
              <a href="c10_english_c1.pdf" target="_blank">Notes</a>
              <br>
              <a href="c10_english_c1.pdf" target="_blank">PYQ's</a>
            </details>
            <details class="chapter">
              <summary>Chapter 3 : Writing</summary>
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
              <summary>Chapter 1 : Real Numbers</summary>
              <a href="c10_maths_c1.pdf" target="_blank">Notes</a>
              <br>
              <a href="c10_maths_c1.pdf" target="_blank">PYQ's</a>
            </details>
            <details class="chapter">
              <summary>Chapter 2 : Polynomials</summary>
              <a href="c10_maths_c1.pdf" target="_blank">Notes</a>
              <br>
              <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
            </details>
            <details class="chapter">
              <summary>Chapter 3 : Triangles</summary>
              <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
              <br>
              <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
            </details>
            <details class="chapter">
                <summary>Chapter 4 : Coordinate Geometry</summary>
                <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
                <br>
                <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
              </details>
              <details class="chapter">
                <summary>Chapter 5 : Quadratic Equations</summary>
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