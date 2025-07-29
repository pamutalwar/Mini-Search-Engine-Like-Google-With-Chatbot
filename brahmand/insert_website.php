
<!DOCTYPE html>
<html>
<head>
	<title>inserting a records in table</title>

<style>
	input
	{
		width: 600px;
		height: 30px;
		font-size: 20px;
	}
	
	
	.btn 
	{
		width : 200px;
		height:35px;
      display: inline-block;
      
      background-color : #3498db;
      color: #fff;
      font-size: 18px;
      text-decoration: none;
      border-radius: 6px;
      transition: transform 0.3s ease-in-out;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
    }

    .btn:hover {
      transform: scale(1.1);
    }

    /* Animation styles */
    @keyframes gradientAnimation
	{
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .animated-btn {
      background: linear-gradient(-45deg, #ff9d6c, #ff6a95, #5d9cec, #5db7ec);
      background-size: 400% 400%;
      animation: gradientAnimation 10s ease infinite;
    }
	
</style>

</head>



<body>

<font size="7"><p align="center"><b>Add a Website & linkes</b></p></font>

<form action="" method="POST" enctype="multipart/form-data">

<table border="0" width="60%" cellspacing="10" align="center">
	<tr>
		<td width="25%">Website Title</td>
		<td><input type="text" name="websitetitle"></td>
	</tr>
	<tr>
		<td>Website Link</td>
		<td><input type="text" name="websitelink"></td>
	</tr>
	<tr>
		<td>Website Keywords</td>
		<td><input type="text" name="websitekeywords"></td>
	</tr>
	<tr>
		<td>Website Description</td>
		<td><textarea cols="83" rows="5" name="websitedescription"></textarea></td>
	</tr>
	<tr>
		<td>Website Images</td>
		<td><input type="file" class="btn animated-btn" name="uploadfile"></td>
	</tr>
	<tr>
		<td colspan="2" align="center" style="height: 100px;">
		<input type="submit" class="btn animated-btn" name="addWebsite" value="Add Website" id="addbtn">
			&nbsp &nbsp
		<input type="submit" class="btn animated-btn" name="cancel" value="Cancel" id="cancelbtn">	
		</td>
	</tr>
</table>
</form>
</body>
</html>
<?php
include("connection.php");
if($_POST['addWebsite'])
{
			$website_title=$_POST['websitetitle'];
			$website_link=$_POST['websitelink'];
			$website_keywords=$_POST['websitekeywords'];
			$website_description=$_POST['websitedescription'];                                                       
			$filename=$_FILES["uploadfile"]["name"];
			$tempname=$_FILES["uploadfile"]["tmp_name"];
			$folder = "website_images/".$filename;
			move_uploaded_file($tempname,$folder);

			if($website_title!="" && $website_link!="" && $website_keywords!="" && $website_description!="" && $filename!="")
			{ 
				$query = "INSERT INTO add_website (`website_title`, `website_link`, `website_keywords`, `website_description`, `website_images`) VALUES ('$website_title','$website_link','$website_keywords','$website_description','$folder')";
				$data = mysqli_query($conn,$query);					
					if($data)
					{
						echo "<script>alert('Website Inserted')</script>";
					}
			}
			else
			{
				echo "<script>alert('Failed to Insert Website')</script>";
			}				
}
?>
