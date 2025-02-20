<?php
$name=$_POST['Name'];
$gender=$_POST['Subject'];
$exp=mysqli_connect('localhost','root','','attendance');
$query="INSERT INTO `student_record`(`sname`, `rollno`) VALUES ('$name','$gender')";
$run=mysqli_query($exp,$query);
if($run==true)
	echo"input data insert successful";
	else 
		echo"erroe!";
?>