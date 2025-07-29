<!-- add_website/index.php -->
<?php
session_start();
include '../includes/db_connection.php';

// Redirect to login if not authenticated
if (!isset($_SESSION['username'])) {
    header('Location: ../login.php');
    exit;
}

// Fetch data from the database
$sql = "SELECT * FROM add_website";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        /* Add some CSS styles for improved layout and design */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }

        nav {
            background-color: #333;
            color: #fff;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 4px;
            margin-left: 10px;
        }

        nav a:hover {
            background-color: #555;
        }

        .container {
            padding: 20px;
            max-width: 298vh;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin-bottom: 20px;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
        }

        img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 5px;
        }

        .actions a {
            margin-right: 10px;
            color: #007BFF;
        }

        .actions a:hover {
            text-decoration: underline;
        }

        .button-container {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 20px;
        }

        .button-container a {
            padding: 10px 15px;
            background-color: #007BFF;
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
            margin-right: 10px;
        }

        .button-container a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <!-- Navigation bar -->
    <nav>
        <span>Welcome, <?php echo $_SESSION['username']; ?></span>
        <div>
            <a href="../../create.php">Add New Website</a>
            <a href="../register.php">Create Admin</a> <!-- Link to create new admin users -->
            <a href="../logout.php">Logout</a>
        </div>
    </nav>

    <div class="container">
       
        <h1>Manage Websites</h1>
        
        <!-- Button container for actions -->
        <div class="button-container">
            <a href="../../create.php">Add New Website</a>
            <a href="statistics.php">View Statistics</a> <!-- Link to view statistics (to be implemented) -->
        </div>
        
        <!-- Websites table -->
        <table>
            <tr>
                <th>ID</th>
                <th>Website Title</th>
                <th>Website Link</th>
                <th>Keywords</th>
                <th>Description</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['website_title']; ?></td>
                    <td><a href="<?php echo $row['website_link']; ?>" target="_blank"><?php echo $row['website_link']; ?></a></td>
                    <td><?php echo $row['website_keywords']; ?></td>
                    <td><?php echo $row['website_description']; ?></td>
                    <td><img src="../uploads/<?php echo $row['website_images']; ?>" alt="Website Image"></td>
                    <td class="actions">
                        <a href="update.php?id=<?php echo $row['id']; ?>">Edit</a> |
                        <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
