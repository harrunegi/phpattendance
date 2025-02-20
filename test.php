<?php
$file=mysqli_connect("localhost","root","","harru");
// Check connection
function viewdata()
{
	global$file;
	$query="SELECT *from hello";
	$run=mysqli_query($file,$query);
	
	  if(mysqli_num_rows($run) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>No.</th>";
                echo "<th>Name</th>";
                echo "<th>Subject</th>";
             
            echo "</tr>";
        while($row = mysqli_fetch_array($run)){
            echo "<tr>";
                echo "<td>" . $row['No.'] . "</td>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Subject'] . "</td>";
               
            echo "</tr>";
        }
        echo "</table>";
?>
<html>
<head>
</head>
<body>
<?php viewdata(); ?>
</body>
</html>