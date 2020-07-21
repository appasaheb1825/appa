<?php
$host = "localhost";
$user = "root" ;
$password = "";
$db = "appa" ;
$conn= mysqli_connect($host, $user, $password, $db);


if(isset($_POST[ 'submit']))
{ 
  $message = $_POST['message'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $query = "insert into contact( message, firstname,lastname, email, subject) values('$message','$firstname','$lastname',
  '$email','$subject')";


$result=mysqli_query($conn, $query);
}
?>


