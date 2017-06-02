<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<!-- BEGIN BODY -->
		<!-- topBar -->
	<div id="topBar">
		<h2>welcome to the login page</h2>
	</div>
	<div id="container">
		<div class="containerBody">
			<!-- login form centered in middle of page -->
			<div class="containerForm">
				<form action="#" method="">
					<div class="formAvatar">
						<img src="me_b&w.jpg" alt="Avatar">
					</div>
					<div class="formFields">
						<label>
							<b>Username</b>
						</label>
						<input type="text" name="username" placeholder="Enter Username" required="required">
						<label>
							<b>Password</b>
						</label>
						<input type="password" name="password" placeholder="Enter Password" required="required">
						<input type="checkbox" name="checkbox" checked="checked"> Remember me
						<br>
						<button type="submit">Login</button>
					</div>
					<div class="forgotPassword">
						<p>Forgotten password? <a href="#">Click here</a></p>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- BEGIN FOOTER -->
	<div id="footer">
		<h4>&copy; 2017. All rights reserved. Jude Aquila</h4>
	</div>
</body>
</html>