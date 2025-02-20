<?php
$target_path='f:/';
$target_path=$target_path.basename($_FILES['filetoup']['name']);
if(move_uploaded_file($_FILES['filetoup']['tmp_name'],$target_path))
{
	echo"File Uploaded Successfully";
	//echo $_FILES['filetoup']['size'];
	
}else
{
	echo"nhi ho gaya";
}
?>