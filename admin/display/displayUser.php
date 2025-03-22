<?php
require '../db/conn.php';

// Handle delete action
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    try {
        // Delete the record from the database
        $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        header('Location: ' . $_SERVER['PHP_SELF']);
        exit();
    } catch (Exception $e) {
        $error_message = "Failed to delete: " . $e->getMessage();
    }
}

// Fetch data from the 'user' table
try {
    $sql = "SELECT * FROM users";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();

    if (!$result) {
        throw new Exception("Failed to fetch data: " . $conn->error);
    }

    $users = $result->fetch_all(MYSQLI_ASSOC);
} catch (Exception $e) {
    $error_message = $e->getMessage();
} finally {
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
    <link href="../../img/sgrg-logo.png" rel="icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <?php
        require '../layout/topnav.php';
    ?>
    
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="mb-4">All Users</h2>
        </div>
        
        <?php if (!empty($error_message)): ?>
            <div class="alert alert-danger">Error: <?= htmlspecialchars($error_message) ?></div>
        <?php endif; ?>

        <?php if (!empty($users)): ?>
            <table class="table table-hover">
                <thead class="">
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= htmlspecialchars($user['id']) ?></td>
                            <td><?= htmlspecialchars($user['username']) ?></td>
                            <td><?= htmlspecialchars($user['email']) ?></td>
                            <td>Active</td>
                            <td><?= htmlspecialchars($user['created_at']) ?></td>
                            <td>
                                <a href="?delete=<?= $user['id'] ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure you want to delete this record?')">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <div class="alert alert-warning">No records found</div>
        <?php endif; ?>
    </div>

    <?php
        require '../layout/footer.php';
    ?>

</body>
</html>
