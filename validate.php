<?php
$myemail="attendance@gmail.com";
$mypassword="1234";
if(isset($_POST['login']))
{
$email=$_POST['email'];	
$password=$_POST['pass'];
if($email==$myemail and $password==$mypassword)
{
		if(isset($_POST['remember']))
		{
			setcookie('email',$email,time()+60*60*7);
			setcookie('pass',$pass,time()+60*60*7);
		}
		session_start();
		$_SESSION['email']=$email;
		header("Location:index.php");
} else{
	echo"Email or Password is invalid.<br> Click here to<a href='form.php'>try again</a>";
}
}
else 
{
	header("location:home.php");
}
?>