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
  <title>Class 12</title>
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
        <a class="class-select" href="class12.php">CLASS 12</a>
        <br>
        <br>
        <h1>CLASS 12</h1>
        <br>
        <p>ARODEMY provides state-of-the-art learning experience by top faculties who will conduct classes with the
          latest syllabus and provide solutions and solve doubts through best in-class doubt engines.</p>
      </div>
      <div class="content">
        <div class="subject">
          <div class="physics">
            <p>PHYSICS</p>
          </div>
          <div class="subject-content">
            <details class="chapter">
              <summary>Chapter 1 : Electric Charges and Fields</summary>
              <a href="Notes_chapter1_physics_c12.pdf" target="_blank">Notes</a>
              <br>
              <a href="Notes_chapter1_physics_c12.pdf" target="_blank">PYQ's</a>
            </details>
            <details class="chapter">
              <summary>Chapter 2 : Electrostatic Potential and Capacitance</summary>
              <a href="Notes_chapter1_physics_c12.pdf" target="_blank">Notes</a>
              <br>
              <a href="Notes_chapter1_physics_c12.pdf" target="_blank">PYQ's</a>
            </details>
            <details class="chapter">
              <summary>Chapter 3 : Current Electricity</summary>
              <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
              <br>
              <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
            </details>
            <details class="chapter">
              <summary>Chapter 4 : Moving Charges and Magnetism</summary>
              <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
              <br>
              <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
            </details>
            <details class="chapter">
              <summary>Chapter 5 : Magnetism and Matter</summary>
              <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
              <br>
              <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
            </details>
            <details class="chapter">
              <summary>Chapter 6 : Electromagnetic Induction</summary>
              <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
              <br>
              <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
            </details>
            <details class="chapter">
              <summary>Chapter 7 : Alternating Current</summary>
              <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
              <br>
              <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
            </details>
            <details class="chapter">
              <summary>Chapter 8 : Electromagnetic Waves</summary>
              <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
              <br>
              <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
            </details>
            <details class="chapter">
              <summary>Chapter 9 : Ray Optics and Optical Instrument</summary>
              <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
              <br>
              <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
            </details>
            <details class="chapter">
              <summary>Chapter 10 : Wave Optics</summary>
              <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
              <br>
              <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
            </details>
            <details class="chapter">
              <summary>Chapter 11 : Dual Nature of Radiation and Matter</summary>
              <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
              <br>
              <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
            </details>
            <details class="chapter">
              <summary>Chapter 12 : Atoms</summary>
              <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
              <br>
              <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
            </details>
            <details class="chapter">
              <summary>Chapter 13 : Nuclei</summary>
              <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
              <br>
              <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
            </details>
            <details class="chapter">
              <summary>Chapter 14 : Semiconductor Electronics: Materials, Devices and Simple Circuits</summary>
              <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
              <br>
              <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
            </details>
            <details class="chapter">
              <summary>Chapter 15 : Communication Systems</summary>
              <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
              <br>
              <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
            </details>
          </div>
        </div>
        <div class="subject">
          <div class="chemistry">
            <p>CHEMISTRY</p>
          </div>
          <div class="subject-content">
            <details class="chapter">
              <summary>Chapter 1 : The Solid State</summary>
              <a href="Chemistry Notes for class 12 Chapter 1 The Solid States  .pdf" target="_blank">Notes</a>
              <br>
              <a href="Chemistry Notes for class 12 Chapter 1 The Solid States  .pdf" target="_blank">PYQ's</a>
            </details>
            <details class="chapter">
              <summary>Chapter 2 : Electrochemistry</summary>
              <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
              <br>
              <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
            </details>
            <details class="chapter">
              <summary>Chapter 3 : Surface Chemistry</summary>
              <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
              <br>
              <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
            </details>
            <details class="chapter">
                <summary>Chapter 4 : Chemical Kinetics</summary>
                <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
                <br>
                <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
              </details>
              <details class="chapter">
                <summary>Chapter 5 : Surface Chemistry</summary>
                <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
                <br>
                <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
              </details>
              <details class="chapter">
                <summary>Chapter 6 : General Principles and Processes of Isolation of elements</summary>
                <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
                <br>
                <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
              </details>
              <details class="chapter">
                <summary>Chapter 7 : The p-Block Elements</summary>
                <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
                <br>
                <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
              </details>
              <details class="chapter">
                <summary>Chapter 8 : The d and f Block Elements</summary>
                <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
                <br>
                <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
              </details>
              <details class="chapter">
                <summary>Chapter 9 : Coordination Compounds</summary>
                <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
                <br>
                <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
              </details>
              <details class="chapter">
                <summary>Chapter 10 : Halokanes and Haloarenes</summary>
                <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
                <br>
                <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
              </details>
              <details class="chapter">
                <summary>Chapter 11 : Alchols,Phenols and Ethers</summary>
                <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
                <br>
                <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
              </details>
              <details class="chapter">
                <summary>Chapter 12 : Aldehydes,Ketones and Carboxylic Acids</summary>
                <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
                <br>
                <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
              </details>
              <details class="chapter">
                <summary>Chapter 13 : Amines</summary>
                <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
                <br>
                <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
              </details>
              <details class="chapter">
                <summary>Chapter 14 : Biomolecules</summary>
                <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
                <br>
                <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
              </details>
              <details class="chapter">
                <summary>Chapter 15 : Polymers</summary>
                <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
                <br>
                <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
              </details>
              <details class="chapter">
                <summary>Chapter 16 : Chemistry in Everyday Life</summary>
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
              <summary>Chapter 1 : Relations and Functions</summary>
              <a href="Notes_chapter1_maths.pdf" target="_blank">Notes</a>
              <br>
              <a href="Notes_chapter1_maths.pdf" target="_blank">PYQ's</a>
            </details>
            <details class="chapter">
              <summary>Chapter 2 : Inverse Trignometry Functions</summary>
              <a href="Notes_chapter1_maths.pdf" target="_blank">Notes</a>
              <br>
              <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
            </details>
            <details class="chapter">
              <summary>Chapter 3 : Matrices</summary>
              <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
              <br>
              <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
            </details>
            <details class="chapter">
                <summary>Chapter 4 : Determinants</summary>
                <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
                <br>
                <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
              </details>
              <details class="chapter">
                <summary>Chapter 5 : Continuity and Differentiability</summary>
                <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
                <br>
                <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
              </details>
              <details class="chapter">
                <summary>Chapter 6 : Applications of Derivative</summary>
                <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
                <br>
                <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
              </details>
              <details class="chapter">
                <summary>Chapter 7 : Integerals</summary>
                <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
                <br>
                <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
              </details>
              <details class="chapter">
                <summary>Chapter 8 : Applications of Integerals</summary>
                <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
                <br>
                <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
              </details>
              <details class="chapter">
                <summary>Chapter 9 : Differential Equation</summary>
                <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
                <br>
                <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
              </details>
              <details class="chapter">
                <summary>Chapter 10 : Vector Algebra</summary>
                <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
                <br>
                <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
              </details>
              <details class="chapter">
                <summary>Chapter 11 : 3-Dimensional Geometry</summary>
                <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
                <br>
                <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
              </details>
              <details class="chapter">
                <summary>Chapter 12 : Linear Programming</summary>
                <a href="10_Semiconductor_L1.pdf" target="_blank">Notes</a>
                <br>
                <a href="Tutorial 7 Introduction to Semiconductor.pdf" target="_blank">PYQ's</a>
              </details>
              <details class="chapter">
                <summary>Chapter 13 : Probability</summary>
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