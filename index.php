<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Parklands school</title>
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
    table{
      width: 300px;
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
      </ul>
    </div>
  </nav>
  <div class="motto">
  <h2>PARKLANDS SCHOOL</h2>
  <p>"Education is my weapon ,I shall treasure it"</p>
  </div>

<div class="header">
	<h2>Student Portal</h2>
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

<?php  
$htmls="";
$htmls=$_POST['html'];

$phps="";
$phps=$_POST['php'];

$javas="";
$javas=$_POST['java'];

$pythos="";
$pythos=$_POST['pytho'];

$iots="";
$iots=$_POST['iot'];

$average=($htmls+$phps+$javas+$pythos+$iots)/5;

echo "
<h2>Student Scores</h2>
<table border=2px solid black;>
<tr>
<th>Subject</th>
<th>Score</th>
</tr>
<tr>
<td>HTML</td>
<td>$htmls</td>
</tr>
<tr>
<td>PHP</td>
<td>$phps</td>
</tr>
<tr>
<td>Java Script</td>
<td>$javas</td>
</tr>
<tr>
<td>Python</td>
<td>$pythos</td>
</tr>
<tr>
<td>IOT</td>
<td>$iots</td>
</tr>
<tr>
<td>Average</td>
<td>$average</td>
</tr>
</table>";
?>


    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div><br><br>
<h3>Interested in school accomodation?</h3>
<p>If your interested in the schools accomadation your welcome to apply for the accomodation. We would highly recommend that you do so as it is very convinient and makes learning much easier for you.</p><br><br>
<p>To get more information about the type of accomodation offered by the school.Click <a href="accom.php">Here</a></p>
	 <footer style="text-align: center;background-color: black;padding: 25px;font-size: 20px;color: white;">
      Copyright &copy;Parklands School <br>
      +2554872348 <br>
      &reg;Parklands School Fraternity
  </footer>
</body>
</html>