<?php
if(isset($_POST["submit-register"]))
{
	$host='127.0.0.1';
	$uname='root';
	$passw='';
	$db='bookareana';
	$conn=mysqli_connect($host,$uname,$passw,$db);

	$name = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['pwd1'];
	$addr = $_POST['addr'];
	$phone = $_POST['phno'];

	$query = "INSERT INTO user VALUES ('$email', '$password', '$name', '$addr', '$phno')";

	mysqli_query($conn, $query);

	header('Location: index.html');
}
?>