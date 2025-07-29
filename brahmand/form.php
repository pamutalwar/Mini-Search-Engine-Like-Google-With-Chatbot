include("connectionfile.php");
error_reporting(0);
?>
<html>
<head>
<title>
</title>

<style>
table
{
color:white;
border-radius:20px;
}

#button
{
background-color:green;
color:white;
height:32px;
width:85px;
border-radius:25px;
}

body
{
background:linear-gradient(red,blue);
}
</style>

</head>

<body>
<br><br><br><br><br><br><br>

<form action="" method="POST" enctype="multipart/form-data">
<table border="0" bgcolor="black" align="center" cellspacing="20">
<tr>
<td>Roll No</td>
<td><input type="text" placeholder="Roll No" name="rollno"  ></td>
</tr>

<tr>
<td>Name</td>
<td><input type="text" placeholder="Name" name="studentname"  ></td>
</tr>

<tr>
<td>Class</td>
<td><input type="text" placeholder="class" name="class" ></td>
</tr>

<tr>
<td>Select Image</td>
<td><input type="file" name="uploadfile" value=""/></td>
</tr>


<tr>
<td colspan="2" align="center"><input type="submit" id="button" name="submit"></a></td>
</tr>
</form>
</table>
</form>

<?php
if($_POST['submit'])
	{
	$rn=$_POST["rollno"];
	$sn=$_POST["studentname"];
	$cl=$_POST["class"];

	$filename=$_FILES["uploadfile"]["name"];
	$tempname=$_FILES["uploadfile"]["tmp_name"];
	$folder="images/".$filename;
	echo $folder;
	move_uploaded_file($tempname,$folder);

		if($rn!="" && $sn!="" && $cl!="" && $filename!="")
		{

			$query="insert into form values ('$rn','$sn','$cl','$folder')";
			$data=mysqli_query($conn,$query);

				if($data)
				{
				echo "data inserted into database";
				}
		}
						else 
						{
						echo "All fields are Reuired";
						}
}
?>

</body>
</html>