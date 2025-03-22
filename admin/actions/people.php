<?php

require '../db/conn.php';

// Check if table exists, create if not
$tableCheck = "SHOW TABLES LIKE 'people'";
$result = $conn->query($tableCheck);
if ($result->num_rows == 0) {
    $createTableSQL = "CREATE TABLE people (
        id INT PRIMARY KEY AUTO_INCREMENT,
        peopleType VARCHAR(50),
        firstName VARCHAR(100),
        lastName VARCHAR(100),
        title VARCHAR(100),
        degree VARCHAR(100),
        contactUrl VARCHAR(255),
        publishStatus VARCHAR(255),
        image VARCHAR(255)
    )";
    if (!$conn->query($createTableSQL)) {
        die("Error creating table: " . $conn->error);
    }
}

$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $peopleType = $_POST['peopleType'] ?? '';
    $firstName = trim($_POST['firstName'] ?? '');
    $lastName = trim($_POST['lastName'] ?? '');
    $title = trim($_POST['title'] ?? '');
    $degree = trim($_POST['degree'] ?? '');
    $contactUrl = trim($_POST['contactUrl'] ?? '');
    $status = trim('None');
    
    if (empty($peopleType)) $errors[] = "People type is required";
    if (empty($firstName)) $errors[] = "First name is required";
    if (empty($lastName)) $errors[] = "Last name is required";
    if (empty($title)) $errors[] = "Title is required";
    if (empty($degree)) $errors[] = "Degree is required";
    if (empty($contactUrl)) $errors[] = "Contact URL is required";

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
        $stmt = $conn->prepare("INSERT INTO people (peopleType, firstName, lastName, title, degree, publishStatus, contactUrl, image) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssss", $peopleType, $firstName, $lastName, $title, $degree, $status, $contactUrl, $imagePath);

        if ($stmt->execute()) {
            echo "<div class='px-5 my-2'><div class='alert alert-success'>New record created successfully</div></div>";
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
    <title>People Form</title>
    <link href="../../img/sgrg-logo.png" rel="icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

    <?php
        require '../layout/topnav.php';
    ?>

    <div class="container my-5">
        <h2 class="mb-4">Add a New Person</h2>
        <form action="" method="post" enctype="multipart/form-data" class="card p-4">
            <div class="mb-3">
                <label class="form-label">People Type<span class="text-danger">*</span></label>
                <select class="form-select" name="peopleType">
                    <option value="">Select Type</option>
                    <option value="Student">Undergraduate</option>
                    <option value="Teacher">Postgraduate</option>
                    <option value="Alumni">Alumni</option>
                    <option value="Staff">Staff</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">First Name<span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="firstName">
            </div>

            <div class="mb-3">
                <label class="form-label">Last Name<span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="lastName">
            </div>

            <div class="mb-3">
                <label class="form-label">Title<span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="title">
            </div>

            <div class="mb-3">
                <label class="form-label">Degree<span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="degree">
            </div>

            <div class="mb-3">
                <label class="form-label">Contact URL<span class="text-danger">*</span></label>
                <input type="url" class="form-control" name="contactUrl">
            </div>

            <div class="mb-3">
                <label class="form-label">Image<span class="text-danger">*</span></label>
                <input type="file" class="form-control" name="image" accept="image/*">
            </div>

            <div class="d-flex">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-dark mx-2">Reset Form</button>
            </div>
        </form>
    </div>
</body>
</html>