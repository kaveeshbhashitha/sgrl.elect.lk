<?php
require '../db/conn.php';

// Check if the 'users' table exists, if not, create it
$tableCheck = "SHOW TABLES LIKE 'users'";
$result = $conn->query($tableCheck);
if ($result->num_rows == 0) {
    $createTableSQL = "CREATE TABLE IF NOT EXISTS users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL UNIQUE,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
    if (!$conn->query($createTableSQL)) {
        die("Error creating table: " . $conn->error);
    }
}

$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate input
    if (empty($username) || empty($email) || empty($password)) {
        $errors[] = "All fields are required.";
    }

    // If no validation errors, proceed
    if (empty($errors)) {
        // Check if the username or email already exists
        $sql = "SELECT * FROM users WHERE username='$username' OR email='$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $errors[] = "Username or email already exists.";
        } else {
            // Hash the password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Insert new user into the database
            $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
            if ($conn->query($sql) === TRUE) {
                $_SESSION['username'] = $username;
                header('Location: ../display/displayUser.php');
                exit();
            } else {
                $errors[] = "Error: " . $conn->error;
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../img/sgrg-logo.png" rel="icon">
    <title>Add User</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <?php
        require '../layout/topnav.php';
    ?>

    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-5">
                <h2 class="mt-5 pb-2">Create New User Account</h2>

                <!-- Display errors if any -->
                <?php if (!empty($errors)): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li><?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <form method="POST" action="addUser.php">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter username" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter password" required>
                    </div>
                    <div class="d-flex">
                        <button type="submit" class="btn btn-danger btn-sm">Sign Up</button>
                        <button type="reset" class="btn btn-dark btn-sm mx-2">Reset</button>
                    </div>
                </form>
                <p class="mt-3">Already have an account? <a href="../login.php">Login here</a></p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <?php
        require '../layout/footer.php';
    ?>
</body>
</html>