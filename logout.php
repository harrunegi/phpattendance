<?php
session_start();
session_destroy();
if(isset($_COOKIE['email']) and isset($_COOKIE['pass']))
{
	$email=$_COOKIE['email'];
	$password=$_COOKIE['pass'];
	setcookie('email',$email,time()-1);
	setcookie('pass',$pass,time()-1);
}
echo "You have successfully logout. Click here to <a href='login.php'>Login Again </a>";


?>