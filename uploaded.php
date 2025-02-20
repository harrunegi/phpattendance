<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "harru");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['submit'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text


  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO hello (Img) VALUES ('$image')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM images");
?>