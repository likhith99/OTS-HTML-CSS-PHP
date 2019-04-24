<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];


/*$email = stripcslashes($email);
$password = stripcslashes($password);
$email = mysql_real_escape_string($email);
$password = mysql_real_escape_string($password);*/
//session_start();
$conn = mysqli_connect("localhost", "root", "") or die("cannot connect");
mysqli_select_db($conn, "authentication") or die("cannot select DB");

$result = mysqli_query($conn, "select * from users where email = '$email' and password = '$password'")
        or die("Failed to query database" .mysqli_error());
$row = mysqli_fetch_array($result);
if ($email == 'admin' && $password == '1234') {
    //echo "Login successful!! Welcome" . $row['email'];
    $_SESSION['name']=$email;
    header("location: AdminDashboard.php");}
if ($row['email'] == $email && $row['password'] == $password && $row['role'] == '1') {
    //echo "Login successful!! Welcome" . $row['email'];
    $_SESSION['name']=$email;
    header("location: index.php");

} elseif($row['email'] == $email && $row['password'] == $password && $row['role'] == '0') {
  $_SESSION['name']=$email;
   header("location: StudentDashboard.php");
} else{
  echo "failed to login";
}



?>
