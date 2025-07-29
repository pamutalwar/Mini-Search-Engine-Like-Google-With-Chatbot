<?php
# Initialize the session
session_start();

# If user is not logged in then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE) {
  echo "<script>" . "window.location.href='../login.php';" . "</script>";
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>brahmand</title>
  <link rel="shortcut icon" href="img/brahmandlogo.png" type="image/x-icon"   >
  <script src="script.js"></script>
  <link rel="stylesheet" href="design/index.css"> 
</head>
<body>
  
<form action="result1.php" method="GET">
<br><br><br><br><br>

<center class="cen">
  <img src="img/logo.png" class="logo1" draggable="false" style="opacity: 0.8;"/>
<br><br>
<div class="nav-middle flex-div">
            <div class="search-box flex-div">
                <input type="text" autofocus name="search" autocomplete="off" placeholder="Search here....." id="search">
                <img src="img/Picsart_23-08-01_18-13-38-118.png" draggable="false" onclick="record()" alt="">
            </div>
</div><br>
  <input type="submit" name="searchbtn" value="Search" class="btn animated-btn">
</center>

</form>

</body>
</html>