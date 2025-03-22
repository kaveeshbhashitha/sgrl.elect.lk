<?php

require '../db/conn.php';

// Check if table exists, create if not
$tableCheck = "SHOW TABLES LIKE 'news'";
$result = $conn->query($tableCheck);
if ($result->num_rows == 0) {
    $createTableSQL = "CREATE TABLE news (
        id INT PRIMARY KEY AUTO_INCREMENT,
        newsTitle VARCHAR(100),
        date DATE,
        description TEXT,
        status VARCHAR(50),
        link VARCHAR(255),
        image VARCHAR(255)
    )";
    if (!$conn->query($createTableSQL)) {
        die("Error creating table: " . $conn->error);
    }
}

$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $newsTitle = trim($_POST['newsTitle'] ?? '');
    $date = trim($_POST['date'] ?? '');
    $description = trim($_POST['description'] ?? '');
    $link = trim($_POST['link']) === '' ? 'www.example.com' : trim($_POST['link']);
    $status = trim('Draft');

    if (empty($newsTitle)) $errors[] = "News title is required";
    if (empty($date)) $errors[] = "Date is required";
    if (empty($description)) $errors[] = "Description is required";
    if (empty($link)) $errors[] = "Link is required";

    // Handle image upload
    if (!empty($_FILES['image']['name'])) {
        $targetDir = "uploads/";
        if (!is_dir($targetDir)) mkdir($targetDir);
        $imageName = basename($_FILES['image']['name']);
        $targetFilePath = $targetDir . $imageName;
        $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

        $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
        if (!in_array($fileType, $allowedTypes)) {
            $errors[] = "Only JPG, JPEG, PNG, and GIF files are allowed";
        }

        if (empty($errors) && move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath)) {
            $imagePath = $targetFilePath;
        } else {
            $errors[] = "Image upload failed";
        }
    } else {
        $errors[] = "Image is required";
    }

    if (empty($errors)) {
        $stmt = $conn->prepare("INSERT INTO news (newsTitle, date, description, status, link, image) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $newsTitle, $date, $description, $status, $link, $imagePath);

        if ($stmt->execute()) {
            echo "<script>window.location.href='../display/displayNews.php'</script>";
        } else {
            echo "<div class='alert alert-danger'>Error: " . $stmt->error . "</div>";
        }
        $stmt->close();
    } else {
        foreach ($errors as $error) {
            echo "<div class='px-5 my-2'><div class='alert alert-danger'>$error</div></div>";
        }
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>News Form</title>
    <link href="../../img/sgrg-logo.png" rel="icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

    <?php
        require '../layout/topnav.php';
    ?>

    <div class="container my-5">
        <h2 class="mb-4">Add a News Article</h2>
        <form action="" method="post" enctype="multipart/form-data" class="card p-4">
            <div class="mb-3">
                <label class="form-label">News Title<span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="newsTitle">
            </div>

            <div class="mb-3">
                <label class="form-label">Date<span class="text-danger">*</span></label>
                <input type="date" class="form-control" name="date">
            </div>

            <div class="mb-3">
                <label class="form-label">Description<span class="text-danger">*</span></label>
                <textarea type="text" class="form-control" name="description"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Link<span class="text-danger">*</span></label>
                <input type="url" class="form-control" name="link">
            </div>

            <div class="mb-3">
                <label class="form-label">Image<span class="text-danger">*</span></label>
                <input type="file" class="form-control" name="image" accept="image/*">
            </div>

            <div class="d-flex">
                <button type="submit" class="btn btn-danger btn-sm">Submit</button>
                <button type="reset" class="btn btn-dark mx-2 btn-sm">Reset Form</button>
            </div>
        </form>
    </div>

    <?php
        require '../layout/footer.php';
    ?>
    
</body>
</html>