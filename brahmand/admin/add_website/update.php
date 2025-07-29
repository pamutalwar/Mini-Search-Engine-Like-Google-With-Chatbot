<!-- add_website/update.php -->
<?php
session_start();
include '../includes/db_connection.php';

// Redirect to login if not authenticated
if (!isset($_SESSION['username'])) {
    header('Location: ../login.php');
    exit;
}

// Get the ID of the record to update
$id = $_GET['id'];

// Fetch the record from the database
$sql = "SELECT * FROM add_website WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $website_title = $_POST['website_title'];
    $website_link = $_POST['website_link'];
    $website_keywords = $_POST['website_keywords'];
    $website_description = $_POST['website_description'];

    // Handle image upload
    if ($_FILES['website_images']['name']) {
        $website_image = $_FILES['website_images']['name'];
        $temp_name = $_FILES['website_images']['tmp_name'];
        $upload_dir = '../uploads/'; // Directory to save uploaded images
        move_uploaded_file($temp_name, $upload_dir . $website_image);

        // Update data in the database, including the new image
        $sql = "UPDATE add_website
                SET website_title = '$website_title',
                    website_link = '$website_link',
                    website_keywords = '$website_keywords',
                    website_description = '$website_description',
                    website_images = '$website_image'
                WHERE id = $id";
    } else {
        // Update data in the database without changing the image
        $sql = "UPDATE add_website
                SET website_title = '$website_title',
                    website_link = '$website_link',
                    website_keywords = '$website_keywords',
                    website_description = '$website_description'
                WHERE id = $id";
    }

    if ($conn->query($sql) === TRUE) {
        echo "Website updated successfully.";
        header('Location: index.php');
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Website</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <!-- Navigation bar -->
    <nav>
        <span>Welcome, <?php echo $_SESSION['username']; ?></span>
        <a href="index.php">Back</a>
        <a href="../logout.php">Logout</a>
    </nav>

    <div class="container">
        <h1>Edit Website</h1>
        <form action="update.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data">
            <label>Website Title:</label>
            <input type="text" name="website_title" value="<?php echo $row['website_title']; ?>" required><br>
            <label>Website Link:</label>
            <input type="text" name="website_link" value="<?php echo $row['website_link']; ?>" required><br>
            <label>Website Keywords:</label>
            <input type="text" name="website_keywords" value="<?php echo $row['website_keywords']; ?>" required><br>
            <label>Website Description:</label>
            <input type="text" name="website_description" value="<?php echo $row['website_description']; ?>" required><br>
            <label>Website Image:</label>
            <input type="file" name="website_images"><br>
            <input type="submit" value="Update Website">
        </form>
    </div>
</body>
</html>
