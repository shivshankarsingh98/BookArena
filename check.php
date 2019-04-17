<?php

if(isset($_POST["submit"]))
{
	$host='127.0.0.1';
	$uname='root';
	$passw='';
	$db='bookareana';
	$username=$_POST['username'];
	$password=$_POST['password'];
	$conn=mysqli_connect($host,$uname,$passw,$db);
	$q="select * from user where email='$username'";
	$re=mysqli_query($conn,$q);
	$rowcount=mysqli_num_rows($re);
	while($row=mysqli_fetch_row($re))
	{
		if(!strcmp($password,$row[1]))
		{
			echo 'login successful';
			session_start();
			$_SESSION['username']=$username;
			header("Location: m1.html");
			break;
		} else {
			echo 'login failed';
			break;
		}
	}
}
?>