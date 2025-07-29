<html>
	<body>
		<head>
			<link rel="stylesheet" href="side.css">
		</head>
	

<table border="0" width="85%" style="margin-left:90px; ">
<?php 

$query1 = "select * from add_website where website_keywords like '%$search%'";
$data1 = mysqli_query($conn,$query1);

while($row1 = mysqli_fetch_array($data1))
{
	echo "
	<tr>
		<td>

	<font size='4' color='#0000cc'> <b><a href='$row1[2]'>$row1[1]</a></b> </font><br>";
	echo "<font size='3' color='#006400'> $row1[2] </font><br>";
	echo "<font size='3' color='#666666'> $row1[4] </font><br><br>


		</td>
	</tr>
	";
}

?>
</body>
</html>