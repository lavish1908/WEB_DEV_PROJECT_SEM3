<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
//    $city = mysqli_real_escape_string($conn, $_POST['city']);
//    $state = mysqli_real_escape_string($conn, $_POST['state']);
//    $zip=$_POST['zip'];
//    $address=$_POST['address'];
   $cname = mysqli_real_escape_string($conn, $_POST['cname']);
   $cnumb = mysqli_real_escape_string($conn, $_POST['numb']);
   $exmonth = mysqli_real_escape_string($conn, $_POST['month']);
   $exyear= mysqli_real_escape_string($conn, $_POST['year']);
   $cv=$_POST['cvv'];
   
   // $pass = md5($_POST['password']);
   // $phone = md5($_POST['pnumber']);
   //$user_type = $_POST['user_type'];

//$insert = "INSERT INTO billing (bname, bemail) VALUES ('$name','$email')";
mysqli_query($conn, "INSERT INTO billing (bname, bemail) VALUES ('$name','$email')");
//$insertin = "INSERT INTO payment(pid,cname,card_no,exp_month,exp_year,cvv) VALUES ('$cv','$cname','$cnumb','$exmonth','$exyear','$cv')";
mysqli_query($conn, "INSERT INTO payment(pid,pname,card_no,exp_month,exp_year,cvv) VALUES ('$cv','$cname','$cnumb','$exmonth','$exyear','$cv')");

header('location:pproject.php'); 

};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="bstyle.css">

</head>
<body>

<div class="container">

    <form action="" method="post">
        <div class="content">
            <div class="row1">
                <h3 class="title">billing address</h3>
                <p>Full Name :</p>
                <input type="text" name="name" class="inputbox" placeholder="lavish ji">
                <p>Email :</p>
                <input type="email" name="email" class="inputbox" placeholder="example@example.com">
            </div>
            <div class="row2">
                <h3 class="title">payment</h3>
            </div>
            <div class="row3">
                <div class="col1">
                    <p>name on card :</p>
                    <input type="text" name="cname" class="inputbox" placeholder="mr. lavish">
                    <p>credit card number :</p>
                    <input type="number" name="numb" class="inputbox" placeholder="1111-2222-3333-4444">
                </div>
                <div class="col2">
                    <p class="ca">cards accepted :</p>
                    <img src="card_img.png" alt="">
                    <div class="date">
                        <p>exp year :</p>
                        <input type="number" name="year" class="inputbox" placeholder="2022">
                        <p>exp month :</p>
                        <input type="text" name="month" class="inputbox" placeholder="01">
                    </div>
                    <p>CVV :</p>
                    <input type="text" name="cvv" class="inputbox" placeholder="1234">
                </div>
            </div>
            <div class="row4">
                <input type="submit" name="submit" class="submit-btn" value="proceed to checkout">
            </div>
        </div>
    </form>
</div>    
    
</body>
</html>