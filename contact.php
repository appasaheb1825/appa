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

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale1.0">
	<title>Contact</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jQuery.js"></script>
	<script src="js/bootstrap.min.js" ></script>
    <script src="js/all.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/contact.css">
	<link rel="stylesheet"  href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	


</head>	
<body>
	<header>
		    <nav  class=" fixed-top">
<div class="topnav">
  <div class="log">
  <a href="#"><img src="images/logo.png"></a>
</div>

  <div class="topnav-right">
<a href="index.php">Home</a>    
<a href="about.php">About</a>
<a href="services.php">Services</a>
<a href="gallery.php">Gallery</a>
<a class="active" href="#">Contact</a>

  </div>
</div>
</nav>

	</header>




	<div class="abt">
<div class="card bg-dark text-white">
  <img src="images/contactmain.jpg" class="card-img "  style= "height: 70vh;" alt="..." >
  <div class="centered">
    <h1 class="display-2" style="text-align: center;">CONTACT US</h1>
  </div>
</div>
</div>



	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60284.29098386673!2d73.07137698408766!3d19.205324731205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7958503ef5c9b%3A0xb6845d738f5a6525!2sDombivli%20East%2C%20Dombivli%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1595225827538!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

<!----Contact section----------->

<section id="contact-section">
	<div class="container">
		<h2>Contact Us</h2>
		<p>Get in Touch</p>
		<div class="contact-form">
			
			<!-----first grid section ----->
			<div>
				<form action="#" method="POST">
					<textarea placeholder="Message" rows="5"  name="message" required></textarea>
					<input type="text" placeholder="FirstName"  name="firstname" required>
					<input type="text" placeholder="LastName"  name="lastname" required>
					<input type="Email" placeholder="Email" name="email"  required>
					<input type="text" placeholder="Subject of this message"  name="subject" required>
					<button class="submit" name="submit">Send Message</button>
				</form>
			</div>

			<!-------second grid section------->
			<div>
				<i class="fa fa-map-marker"></i><span class="form-info">192 City Boston Mumbai #345</span><br>
				<i class="fa fa-phone"></i><span class="form-info"> Phon no +91 9876543210 </span><br>
				<i class="fa fa-envelope"></i><span class="form-info"> Disneyresort1825@gmail.com </span>
			</div>


		</div>
		
	</div>



	<!------Footer---------->

   <footer>

  <div class="ic">
      <hr class="clearfix w-100 d-md-none">

      
      <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

        
        <h5 class="font-weight-bold text-uppercase mb-4 px-1"></h5>

        
        <a type="button" class="btn-floating btn-fb">
          <i class="fab fa-facebook-f"></i>
        </a>
        
        <a type="button" class="btn-floating btn-tw">
          <i class="fab fa-instagram"></i>
        </a>
        
        <a type="button" class="btn-floating btn-gplus">
          <i class="fab fa-google-plus-g"></i>
        </a>
        
        

      </div>
      

    </div>
    

  <div class="lg">
  
<ul>
  <li><img src="images/logo.png"></li>
     <li> <a >Disney Resort
     </a></li>

  <li><div class="footer-copyright text-center px-2"> <li>© 2020 Copyright 2019</li></li>
  
  </div>
  </ul>
</div>
</footer>

</footer>


  
   
	</body>
</html>
	
</section>