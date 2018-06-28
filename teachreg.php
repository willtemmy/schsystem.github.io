<?php include ('server1.php'); ?>
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
			background-image: url(william-stitt-268045-unsplash.jpg);
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
				<li><a href="login.php">Student Login/Register</a></li>
				<li><a href="teachlog.php">Teachers Login</a></li>
			</ul>
		</div>
	</nav>
	<div class="motto">
	<h2>PARKLANDS SCHOOL</h2>
	<p>"Education is my weapon ,I shall treasure it"</p>
	</div>
	<form action="teachreg.php" method="post">
		<?php include ('errors.php'); ?>
		<label>Username(ID number)</label><br>
		<input type="number" name="username" value="<?php echo $username;?>"><br>
		<label>Email</label><br>
		<input type="email" name="email" value="<?php echo $email;?>"><br>
		<label>Password</label><br>
		<input type="password" name="pwd1"><br>
		<label>Confirm password</label><br>
		<input type="password" name="pwd2"><br>
		<button type="submit" name="reg_user">Register</button>
		<p>Already have an account?<a href="teachlog.php">Login</a></p>

	</form>
</body>
</html>