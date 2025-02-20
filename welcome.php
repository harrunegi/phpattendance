<?php
session_start();
echo "welcome".$_SESSION['email'];
echo "<a href='logout.php'>Logout</a>";
?>