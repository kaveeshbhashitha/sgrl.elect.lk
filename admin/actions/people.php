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
        $stmt = $conn->prepare("INSERT INTO people (peopleType, firstName, lastName, title, degree, contactUrl, image) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $peopleType, $firstName, $lastName, $title, $degree, $contactUrl, $imagePath);

        if ($stmt->execute()) {
            echo "<div class='alert alert-success'>New record created successfully</div>";
        } else {
            echo "<div class='alert alert-danger'>Error: " . $stmt->error . "</div>";
        }
        $stmt->close();
    } else {
        foreach ($errors as $error) {
            echo "<div class='alert alert-danger'>$error</div>";
        }
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>People Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Add a New Person</h2>
    <form action="" method="post" enctype="multipart/form-data" class="card p-4 shadow">
        <div class="mb-3">
            <label class="form-label">People Type</label>
            <select class="form-select" name="peopleType" required>
                <option value="">Select Type</option>
                <option value="Student">Student</option>
                <option value="Teacher">Teacher</option>
                <option value="Staff">Staff</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">First Name</label>
            <input type="text" class="form-control" name="firstName" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Last Name</label>
            <input type="text" class="form-control" name="lastName" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" class="form-control" name="title" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Degree</label>
            <input type="text" class="form-control" name="degree" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Contact URL</label>
            <input type="url" class="form-control" name="contactUrl" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" class="form-control" name="image" accept="image/*" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>