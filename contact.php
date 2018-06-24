<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="indexC.css">

<title>SOHO Digital Technology & Marketing</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--[if lt IE 9]>
   <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"> </script>   

<![endif]-->
</head>
<body>
<div id="wrapper">  
  <header>
      <h1>SOHO Digital Technology & Marketing</h1>
      <span>315-510-3460</span>
  </header>  
  <nav>
    <ul>
	 <li><a href="index.html">Home</a></li>
     <li><a href="whatwedo.html">What We Do</a></li>
     <li><a href="digitalmarketing.html">Marketing</a></li>
     <li><a href="contact.html">Contact & Directions</a></li>
	 <li><a href="bio.html">About Us</a></li>
	</ul> 
   </nav>
<main> 
    <figure>
     <img src="contactP.PNG" width="425" height="350" alt="">
	 <figcaption></figcaption>
	 </figure>
	 <br>
	 
	   
    <form  class="contact-form" action="" method="post">
	<input type="text" name="name" placeholder="Your Name"><br>
	<input type="text" name="email" placeholder="Your Email"><br>
    <button type="submit">Subscribe</button>
	 
   	<h2>Contact</h2>
    <p>Phone Number: 315-510-3460</p>
    <p>Email: grant9788@gmail.com</p>
	<br><br>
  	<h2>Address</h2>
    <p>254 Genesee street., Chittenango, NY</p>
	<br><br>
<br><br>
    
   <div id="offer">
 
</div>   
  </main> 
   <footer>Copyright &copy; 2017 <br><br>	
      <a href="https://www.facebook.com/SOHODIGITALTECHNOLOGY/">
  <img src="Facebook.png" alt="HTML tutorial" style="width:42px;height:42px;border:0"></a>
   <a href="https://www.linkedin.com/in/brent-grant-65a708128/">
  <img src="Linkedin.png" alt="HTML tutorial" style="width:42px;height:42px;border:0"></a>
 <a href="https://www.youtube.com/channel/UCmaVPdL1G0lT3rGWCaqslpg">
  <img src="YouTube.png" alt="HTML tutorial" style="width:42px;height:42px;border:0"></a>
   </footer>
  </div> 
</body>
</html>


<?php
  
   if(isset($_Post['submit'])) 
  {
	  
	  $name = $_Post['name'];
	  $email = $_Post['email'];
	  $subject = $_Post['subject'];
	  
	  $mailto= "lincoln18631@hotmail.com";
	  $headers = "Form: ".$email;
	  $txt = "You have received an email from".$name.".\n\n";	  
		
        //send		
		mail($mailto, $subject, $headers, $txt);			
							
  }  
  ?>


