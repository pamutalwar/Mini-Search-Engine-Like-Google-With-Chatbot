<?php
# Initialize the session
session_start();

# If user is not logged in then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE) {
  echo "<script>" . "window.location.href='../login.php';" . "</script>";
  exit;
}
?>
<!-- <?php 
include("connection.php");
error_reporting(0);
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Search Results</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/brahmandlogo.png" type="image/x-icon">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700,300">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.1.2/css/material-design-iconic-font.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Epilogue:wght@400&family=Finger+Paint&display=swap">
<link rel="stylesheet" href="design/chatbot.css">
<script src="script.js"></script>
    <link rel="stylesheet" href="design/result1.css">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
        }
        body {
            display: flex;
            flex-direction: column;
        }
        header {
            padding: 1px;
        }
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        main {
            flex: 1;
            display: flex;
            padding: 0px;
        }
        article {
            flex: 2;
            background-color: #f9f9f9;
            padding: 2px;
            margin-right: 0px;
        }
        aside {
            flex: 1;
            background-color: #ccc;
            padding: 1px;
        }
        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            margin-top: auto;
        }
        /* Search box styles */
        .search-container {
            display: flex;
            align-items: center;
        }
        .search-input {
            width:500px;
            padding: 10px;
            font-size: 20px;
            border-radius: 6px 0 0 6px;
            border: none;
            outline: none;
        }
        .search-button {
            padding: 0px 20px;
            background-color: #3498db;
            color: #fff;
            font-size: 20px;
            border-radius: 0 6px 6px 0;
            border: none;
            outline: none;
            transition: transform 0.3s ease-in-out;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }
        .search-button:hover {
            transform: scale(1.1);
        }
        /* Animation styles */
        @keyframes gradientAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .animated-btn {
            background: linear-gradient(-45deg, #ff9d6c, #ff6a95, #5d9cec, #5db7ec);
            background-size: 400% 400%;
            animation: gradientAnimation 10s ease infinite;
        }
        #gobtn {
            width: 80px;
            height: 40px;
            font-size: 18px;
            border-radius: 12px;
            background-color: white;
            border: 1px solid green;
        }
        #gobtn:hover {
            color: white;
            background-color: green;
        }
        a {
            color: blue;
            font-size: 20px;
            text-decoration: none;
        }
        .nav {
            background-color:rgb(255 244 238);
        }
        /*  search box */
        .flex-div {
            display: flex;
        }
        .nav-middle {
            justify-content: center;
        }
        .nav-middle .search-box {
            border: 1px solid #ccc;
            background-color: white;
            padding:8px 15px;
            border-radius: 25px;
        }
        .nav-middle .search-box input {
            width: 500px;
            border: 0;
            outline: 0;
            background: transparent;
        }
        .nav-middle .search-box img {
            padding-top: 1px;
            width: 15px;
            height: 20px;
        }
        .nav-middle .pamu {
            width: 50px;
        }
        /* Result section styles */
        .result-section {
            display: grid;
    grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
    gap: 1px;
    margin-left: 93px;
    margin-top: 6px;
        }
        .result-item {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }
        .result-item img {
            max-width: 100%;
            height: auto;
        }
         /* Styles for the main button */
         .main-btn {
          
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        /* Styles for the dropdown options */
        .dropdown-buttons {
            
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            margin-top: 8px;
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            z-index: 1000; /* Ensure dropdown is on top */
        }

        /* Styles for the dropdown links */
        .dropdown-buttons a {
            display: block;
            padding: 8px 15px;
            color: #333;
            text-decoration: none;
            border-bottom: 1px solid #ddd;
        }

        .dropdown-buttons a:hover {
            background-color: #f0f0f0;
        }
        .profile-container {
            justify-content: end;
    display: flex;
    align-items: center;
    cursor: pointer;
        }

/* Circular profile photo */
.profile-photo {
    width: 40px; /* Width of the profile photo */
    height: 40px; /* Height of the profile photo */
    border-radius: 50%; /* Make the photo circular */
    object-fit: cover; /* Fit the image within the circle */
}

    </style>
</head>
<body>

<header>
    <nav>
        <form action="result1.php" method="GET">
            <table border="0" width="100%" class="nav">
                <tr>
                    <td width="10%">
                        <a href = "index.php"><img src="img/logo.png" style="margin-left:20px; user-select:none;" width="90%" draggable="false"></a>
                    </td>
                    <td width="40%" style="padding-left: 15px;">
                        <div class="nav-middle flex-div">
                            <div class="search-box flex-div">
                                <?php
                                    include("connection.php");
                                    if (isset($_GET['searchbtn'])) {
                                        $search = $_GET['search'];
                                        echo '<input type="text" name="search" value="' . $search . '" autocomplete="off" placeholder="Search" id="search">&nbsp;&nbsp;';
                                        echo '<img src="img/Picsart_23-08-01_18-13-38-118.png" style="user-select: none;" draggable="false" onclick="record()" alt="">';
                                    }
                                ?> 
                            </div>&nbsp;&nbsp;&nbsp;
                            <input type="submit" class="search-button animated-btn" value="GO!" name="searchbtn"/>   
                        </div>
                    </td>
                    <td width="26%">
                        <div class="profile-container">
                            <!-- Circular profile photo -->
                            <img src="img/user_logo.png" alt="Profile Photo" class="profile-photo">
                        </div>
                    </td>
                    <td style="padding-left: 20px;">
                        <div id="btn-container" style="position: relative; display: inline-block;">
                           
                            <!-- Main button -->
                            <a href="#" id="main-btn" class="main-btn">More</a>
                    
                            <!-- Dropdown options -->
                            <div id="dropdown-buttons" class="dropdown-buttons">
                                <a href="#" class="dropdown-link">Profile</a>
                                <a href="../logout.php" class="dropdown-link">Logout</a>
                            </div>
                        </div>
                        <script>
                            // Get the main button and dropdown buttons elements
                            const mainBtn = document.getElementById('main-btn');
                            const dropdownButtons = document.getElementById('dropdown-buttons');
                            
                            // Event listener to toggle the dropdown when the main button is clicked
                            mainBtn.addEventListener('click', (e) => {
                                // Stop the event from bubbling up
                                e.stopPropagation();
                                // Toggle the visibility of the dropdown buttons
                                dropdownButtons.style.display = dropdownButtons.style.display === 'block' ? 'none' : 'block';
                            });
                    
                            // Event listener to hide the dropdown when clicking outside the container
                            document.addEventListener('click', (e) => {
                                // Check if the click target is not the button or the dropdown container
                                if (!mainBtn.contains(e.target) && !dropdownButtons.contains(e.target)) {
                                    dropdownButtons.style.display = 'none';
                                }
                            });
                        </script>
                    </td>
                </tr>
            </table>
        </form>
    </nav>
</header>

<main>
    <article>
		<table>
			<tr>
        <?php
             include("connection.php");
            if(isset($_GET['searchbtn'])) {
                $search = $_GET['search'];
                if($search == "") {
                    echo "<center><b>Please write something in the Search Box</b></center>";
                    
                    goto skip;        
                }
                $query = "select * from add_website where website_keywords like '%$search%' limit 0,4";
                $data = mysqli_query($conn,$query);
                if(mysqli_num_rows($data)<1) {   
                    echo "<center>No result found</center>";
                    goto skip; 
                }
                echo "<a href='random.php?user=$search' style='margin-left:100px;'>More Images for $search</a>"; 
                echo "<div class='result-section'>";
                while($row = mysqli_fetch_array($data)) {
                    echo "<div class='result-item'>";
                    echo "<img src='$row[5]' width='180px'>";
                    echo "</div>";
                }
                echo "</div>";
            }
        
		echo "</tr>";
        echo "<tr>";
	 include("finalsearch.php"); 
     
		echo "</tr>";
        skip:
        
        ?>
		</table>
		
    </article>
    <aside>
        <div class="card">
			<div id="header">
			  <h1>brahma bot!</h1>
			</div>
			<div id="message-section">
			  <div class="message" id="bot"><span id="bot-response">Hello.. I'm listening! Go on..</span></div>
			</div>
			<div id="input-section">
			  <input id="input" type="text" placeholder="Type a message" autocomplete="off"/>
			  <button class="send" onclick="sendMessage()">
				<div class="circle"><i class="zmdi zmdi-mail-send"></i></div>
			  </button>
			</div>
		  </div>
		  <script src="logic/chatbot.js"></script>
    </aside>
</main>
<!-- 
<footer>
    <p>&copy; 2024 Your Company</p>
</footer> -->

</body>
</html>
