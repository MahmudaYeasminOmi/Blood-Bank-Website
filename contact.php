<html>
<head>
	<title>Contact Form</title>
	<link rel = "stylesheet" type ="text/css" href = "style.css">
	</head>
	<body>
		<div class="contact-title">
			<h1>say hello</h1>

		</div>
		<div class="contact-form">
			<form id="contact-form" method="POST" action="index.php">
				<input name="name" type="text" class="form-control" placeholder="Your name" required><br>
				<input name="email" type="email" class="form-control" placeholder="Your email" required><br>
				<textarea name="t1" class="form-control" placeholder="Message" rows="4" required></textarea><br>
				<input type="submit" class="form-control submit" name="sub_button" value="send message"><br><br>
			</form>
		</div>
	</body>
</html>