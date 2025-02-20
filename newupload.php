<?php
if(isset($_POST['submit']))
{
	$filename=$_FILES['img']['name'];
	$tfilename=$_FILES['img']['tmp_name'];
	$exp=mysqli_connect('localhost','root','','harru')or die(mysqli_error());
move_uploaded_file($tfilename,"imgup\$filename");
$qry="INSERT INTO `Image`(`Img`) VALUES ($filename)";
$run=mysqli_query($exp,$qry);
echo "you have uploaded successfully";
}
?>