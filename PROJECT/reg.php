<html>
    <body>
    <form action="reg.php" method="POST">
       NAME:<br> <input type ="text" name ="name" value = ""> <br>
       EMAIL:<br> <input type ="email" name ="email" value = ""> <br>
       PHONE:<br> <input type ="number" name ="number" value = ""> <br>
       CREATE PASSWORD:<br> <input type ="password" name ="password" value = ""> <br>
       <input type ="submit" name ="submit">
</form>

<?php
if(isset($_POST['submit'])){
$con=mysqli_connect("localhost","root","","project");
//$sql="create database register";
//mysqli_query($con,$sql);
// $sql="use register";
// mysqli_query($con,$sql);
// $sql="create table input(F_Name varchar(30),L_Name varchar(30),Username varchar(30),Email varchar(30),Phone numeric,Password varchar(30))";
// mysqli_query($con,$sql);
$a=$_POST['name'];
$d=$_POST['email'];
$e=$_POST['number'];
$f=$_POST['password'];
$sql="insert into student(sname,semail_id,password,sphone_no) values('$a','$d','$f','$e')";
mysqli_query($con,$sql);
// $sql="select * from student";
// $result=mysqli_query($con,$sql);
// while($row=mysqli_fetch_array($result))
// {
//     echo $row['fname']." ".$row['lname']." ".$row['uname']." ".$row['email']." ".$row['number']." ".$row['password'];
//     echo "<br";
// }
}
?>
</body>
</html>