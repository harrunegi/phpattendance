<?php 
$exp=mysqli_connect('localhost','root','','harru');

$query="INSERT INTO harru (No., Name,Subject)

VALUES('$_POST[No.]','$_POST[Name]','$_POST[Subject])'";
?> 