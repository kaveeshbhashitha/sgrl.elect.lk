<?php
session_start();
require './db/conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Validate input
    if (empty($email) || empty($password)) {
        echo "<div class='alert alert-danger'>Both fields are required.</div>";
    } else {
        // Check if email exists in the database
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $user = $result->fetch_assoc();
            // Verify password
            if (password_verify($password, $user['password'])) {
                $_SESSION['email'] = $user['email'];
                header('Location: ./display/displayPeople.php');
            } else {
                echo "<div class='alert alert-danger'>Invalid password.</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>No user found with this email.</div>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="mt-5">Login Here..</h2>
                <form method="POST" action="login.php" class="pt-4">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter password" required>
                    </div>
                    <button type="submit" class="btn btn-danger mt-3">Login</button>
                </form>
                <p class="mt-3">Don't have an account? <a href="signup.php">Contact Your Admin</a></p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
