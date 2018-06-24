  <html>

<head>
    <title>Hello World</title>
	<meta charset="utf-8">
</head>
<body>
  
<form action="" method="post">
	<input type="text" name="name" placeholder="Your Name"><br>
	<input type="text" name="email" placeholder="Your Email"><br>
    <button type="submit">Subscribe</button>
</body>
</html>

<?php
  
  if(issue($_Post['name']) && isset($_Post['email'])) 
  {
	  
	  $name = $_Post['name'];
	  $email = $_Post['email'];
	  $to = 'grant9788@gmail.com';
	  $subject = "Customer Form";
	  $body = '<html>
				<body>
					<h2>Feedback - example.com</h2>
					<hr>
					<p>Name<br>'.$name.'</p>
					<p>Email<br>'.$email.'</p>
					</body>
					</html>';
		//headers
		$headers = "From: ".$name." <".$email.">\r\n";
		$headers = "Reply-To: ".$email."\r\n";
		$headers = "MIME-Version: 1.0\r\n";			
		$headers = "Content-type: text/html; charset=utf-8";			
		
        //send		
		$send = mail($to, $subject, $body, $headers);			
		if($send)
		{
			echo '<br>';
			echo 'Thanks for contacting me. I will be with you shortly';
		}
		else
		{
			echo 'error';
		}						
  }  
  ?>


