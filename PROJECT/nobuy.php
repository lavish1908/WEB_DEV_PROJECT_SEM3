<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $city = mysqli_real_escape_string($conn, $_POST['city']);
   $state = mysqli_real_escape_string($conn, $_POST['state']);
   $zip=$_POST['zip'];
   $address=$_POST['address'];
   $cname = mysqli_real_escape_string($conn, $_POST['cname']);
   $cnumb = mysqli_real_escape_string($conn, $_POST['numb']);
   $exmonth = mysqli_real_escape_string($conn, $_POST['month']);
   $exyear= mysqli_real_escape_string($conn, $_POST['year']);
   $cv=$_POST['cvv'];
   
   // $pass = md5($_POST['password']);
   // $phone = md5($_POST['pnumber']);
   //$user_type = $_POST['user_type'];

//$insert = "INSERT INTO billing (bname, bemail,address,city,state,zip_code) VALUES ('$name','$email','$address,'$city','$state','$zip')";
mysqli_query($conn, "INSERT INTO billing (bname, bemail,address,city,state,zip_code) VALUES ('$name','$email','$address','$city','$state','$zip')");
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
    <link rel="stylesheet" href="bstyles.css">

</head>
<body>

<div class="container">

    <form action="" method="post">
        <div class="row">
            <div class="col">
                <h3 class="title">billing address</h3>
                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" name="name" placeholder="lavish ji">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" name="email" placeholder="example@example.com">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" name="address" placeholder="room - street - locality">
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" name="city" placeholder="noida">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input type="text" name="state" placeholder="Delhi">
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="text" name="zip" placeholder="123 456">
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" name="cname" placeholder="mr. lavish">
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" name="numb" placeholder="1111-2222-3333-4444">
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" name="month" placeholder="01">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" name="year" placeholder="2022">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" name="cvv" placeholder="1234">
                    </div>
                </div>

            </div>
    
        </div>

        <input type="submit" name="submit" value="proceed to checkout" class="submit-btn">

    </form>

</div>    
    
</body>
</html>