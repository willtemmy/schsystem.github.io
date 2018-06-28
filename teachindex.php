<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: teachlog.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: teachlog.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Parklands School</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
    body{
      background-image: url(debby-hudson-544369-unsplash.jpg);
      color: orange;
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

<div class="header">
	<h2>Teachers Portal</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>

  <form action="index.php" action="teachindex.php" method="POST">
    <label>Student ID</label><br>
    <input type="number" name="id" placeholder="Enter ID number" required=""><br>
    <h3><u><b>Subject Score's</b></u></h3>
    <p>Please fill in the following with the respective scores of the student.</p>
    <label>HTML</label><br>
    <input type="number" name="html" required=""><br>
    <label>PHP</label><br>
    <input type="number" name="php" required=""><br>
    <label>Java Script</label><br>
    <input type="number" name="java" required=""><br>
    <label>Python</label><br>
    <input type="number" name="pytho" required=""><br>
    <label>IOT</label><br>
    <input type="number" name="iot" required=""><br>
    <button type="submit" name="mark_stu">Submit</button><input type="reset" name="Reset">
  </form>

    	<p> <a href="teachindex.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
		
</body>
</html>