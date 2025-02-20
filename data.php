<?php
session_start();
$_SESSION["UNAME"]=$_POST["Name"];
if(isset($_POST["Name"])==NULL)
{
	
	echo "<h1 align=center>You are Not login</h1>";
}else
echo "Hello".$_POST["Name"];


?>
<h2 ><a href="logout.php"> Log Out</h2>