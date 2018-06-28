<?php 
session_start();
$username="";
$email="";
$errors=array();
//we have then connect server.php to the dateabase
$connect=mysqli_connect('localhost','root','','school');
//register a new user
if (isset($_POST['reg_user'])){
//Mysqli_real_escape string is used to avoid special characters
	$username=mysqli_real_escape_string($connect,$_POST['username']);
	$email=mysqli_real_escape_string($connect,$_POST['email']);
	$pwd1=mysqli_real_escape_string($connect,$_POST['pwd1']);
	$pwd2=mysqli_real_escape_string($connect,$_POST['pwd2']);

if (empty($username)) {
	array_push($errors,"Username is required");
}
if (empty($email)) {
	array_push($errors,"Email is required");
}
if (empty($pwd1)) {
	array_push($errors,"Password is required");
}
if (empty($pwd2)) {
	array_push($errors,"Password mismatch");
}
$check_user="SELECT * FROM teacher WHERE username='$username' OR email='$email'LIMIT 1";
$result=mysqli_query($connect,$check_user);
$user=mysqli_fetch_assoc($result);
if ($user['username']===$username) {
	array_push($errors, "Username exists");
}
if ($user['email']===$email) {
	array_push($errors, "Email already exists");
}
if (count($errors)==0) {
	$password=md5($pwd1);
	$qq="INSERT INTO teacher(username,email,password) VALUES ('$username','$email','$password')";
	mysqli_query($connect,$qq);
	$_SESSION['username']=$username;
	$_SESSION['success']="Successful signup";
	header('location:teachindex.php');
}
}
if (isset($_POST['login_user'])) {
	$username=mysqli_real_escape_string($connect,$_POST['username']);
	$password=mysqli_real_escape_string($connect,$_POST['password']);
	if (empty($username)) {
		array_push($errors,"Input username");
	}
	if (empty($password)) {
		array_push($errors,"Input password");
	}
	if (count($errors)==0) {
		$password=md5($password);
		$qq="SELECT * FROM teacher WHERE username='$username' AND password='$password'";
		$result=mysqli_query($connect,$qq);
		if (mysqli_num_rows($result)==1) {
			$_SESSION['username']=$username;
			$_SESSION['success']="Login successful";
			header('location:teachindex.php');
		}
		else{
			array_push($errors,"Wrong password or username");
		}
	}
}
 ?>
