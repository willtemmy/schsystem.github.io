<?php include ('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Parklands school</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
		body{
			background-image: url(nicola-tolin-422802-unsplash.jpg);
			color: black;
		}
		li a{
			padding: 10px;
			border-radius: 5px;
		}
		ul{
			list-style-type: none;
		}
		.motto{
			text-align: center;
		}
    </style>
</head>
<body>
	<nav class="navbar navbar-inverse" style="font-size: 23px;">
		<div class="container fluid">
			<div class="navbar-header">
				<p>Parklands School</p>
			</div>
			<ul class="navbar-nav">
				<li><a href="home.php">Home</a></li>
				<li><a href="accom.php">Accomodation</a></li>
				<li class="active"><a href="login.php">Student Login/Register</a></li>
				<li><a href="teachlog.php">Teachers Login</a></li>
			</ul>
		</div>
	</nav>
	<div class="motto">
	<h2>PARKLANDS SCHOOL</h2>
	<p>"Education is my weapon ,I shall treasure it"</p>
	</div>
	<form action="login.php" method="post">
		<?php include ('errors.php'); ?>
		<label>USERNAME(ID number)</label><br>
		<input type="number" name="username"><br>
		<label>PASSWORD</label><br>
		<input type="password" name="password"><br>
		<button type="submit" name="login_user">LOGIN</button>
		<p>
			Don't have an account?Click to register
			<a href="register.php">Register</a>
		</p>
	</form>
</body>
</html>