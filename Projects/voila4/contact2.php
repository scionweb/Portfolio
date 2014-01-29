<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<?php 
	$to = "lamothec@comcast.net";
	$from = $_REQUEST['Email'];
	$subject = "Request for information.";
	$headers = "From: $from";
	$message = "";
	
	foreach ($_POST as $key => $value) {
		$message.=$key . ": " . $value . "\n";
	}

	
	mail($to, $subject, $message, $headers);

	?>





</head>
<body>
<div id="container">
	<div id = "header">
		<h1 id="logo">VOILA</h1>
		<h2 id="motto">streamline your look with style and <span class="red">grace</span></h2>
		<div id="nav">
		<ul>
			<li><!-- <img src="images/hover-img.png"> --><a href="index.html#photo">Photography</a></li>
			<li><!-- <img src="images/hover-img.png"> --><a href="index.html#movie">Movie Wardrobe</a></li>
			<li><!-- <img src="images/hover-img.png"> --><a href="index.html#personal">Personal Stylist</a></li>
			<li><!-- <img src="images/hover-img.png"> --><a href="index.html#album">Photo Album</a></li>
			<li><!-- <img src="images/hover-img.png"> --><a href="index.html#contact">Contact Grace</a></li>		
		</ul>
		</div><!-- end Nav -->
	</div>
	<div id="thanks">
			<img src="images/red-lady.png" class="flt-left">
			<h1>Thank You!</h1>
			<br />
			<p>Your information has been submitted and you should hear from me within 48 hours.</p>
			<br />
			<h2>Grace</h2>

	</div><!--end Thanks -->
	<div id = "footer">
	&copy; 2013 Voila
	</div><!--end Footer -- >
</div><!--end container -->
</body>
</html>