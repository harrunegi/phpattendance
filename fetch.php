<?php
$file=mysqli_connect("localhost","root","","harru");
// Check connection
function viewdata()
{
	global$file;
	$query="SELECT *from hello";
	$run=mysqli_query($file,$query);
	
	if($run==true)
{echo"<style>
td{
	 font-family: Times New Roman;
	font-size: 30px;
	height: 40px;
  vertical-align: center;
  background-color: #ffcccc;
}
		th{
			
			font-size: 50px;
			background-color: #ff8080;
		}
		</style>";
	echo "<table  width=60% align=center  > ";
            echo "<tr>";
                echo "<th >No.</th>";
                echo "<th >Name</th>";
                echo "<th  >Subject</th>";
	
 while($data=mysqli_fetch_array($run)){

    echo "<tr>";
                echo "<td align=center>" . $data['No'] . "</td>";
                echo "<td align=center>" . $data['Name'] . "</td>";
                echo "<td align=center>" . $data['Subject'] . "</td>";
               
            echo "</tr>";

 }
echo "</table>";
    }
	else
		echo "Error";
}
?>
<html>
<head>
</head>
<body>
<?php viewdata(); ?>
</body>
</html>