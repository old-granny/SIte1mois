<?php 

require 'C:\xampp\htdocs\SIte1mois\php\dbconn.php';

$email = $_POST['email'];
$ursname = $_POST['usrname'];
$pass = $_POST['password'];
$phone = $_POST['phone_number'];

$query = "INSERT INTO `usrinfos` (`usr`, `usrmail`, `password`, `phonenumber`, `usr_id`) VALUES ('$ursname', '$email', '$pass', '$phone', NULL)";

//check if usr already exists
$selectusr = mysqli_query($conn, "SELECT * FROM usrinfos WHERE usr = '".$_POST['usrname']."'");
if(mysqli_num_rows($selectusr)) {
    exit('This username already exists');
    
}
//check if mail already exist
$selectmail = mysqli_query($conn, "SELECT * FROM usrinfos WHERE usrmail = '".$_POST['email']."'");
if(mysqli_num_rows($selectmail)) {
    exit('This mail is already used');
    
}
// check if phone already exist
$selectphone = mysqli_query($conn, "SELECT * FROM usrinfos WHERE phonenumber = '".$_POST['phone_number']."'");
if(mysqli_num_rows($selectphone)) {
    exit('This PhoneNumber is already used');
}

mysqli_query($conn,$query);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  header("Location: ../HTML/login.php");
$conn->close();