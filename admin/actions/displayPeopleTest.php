<?php
// Include the database connection
require 'db_connection.php';

// Fetch data from the 'people' table
try {
    $sql = "SELECT * FROM people";
    $result = $conn->query($sql);

    if (!$result) {
        throw new Exception("Failed to fetch data: " . $conn->error);
    }

    $people = $result->fetch_all(MYSQLI_ASSOC);
} catch (Exception $e) {
    $error_message = $e->getMessage();
} finally {
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>People List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">People List</h2>
    
    <?php if (!empty($error_message)): ?>
        <div class="alert alert-danger">Error: <?= htmlspecialchars($error_message) ?></div>
    <?php endif; ?>

    <?php if (!empty($people)): ?>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Type</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Title</th>
                    <th>Degree</th>
                    <th>Contact URL</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($people as $person): ?>
                    <tr>
                        <td><?= htmlspecialchars($person['id']) ?></td>
                        <td><?= htmlspecialchars($person['peopleType']) ?></td>
                        <td><?= htmlspecialchars($person['firstName']) ?></td>
                        <td><?= htmlspecialchars($person['lastName']) ?></td>
                        <td><?= htmlspecialchars($person['title']) ?></td>
                        <td><?= htmlspecialchars($person['degree']) ?></td>
                        <td><a href="<?= htmlspecialchars($person['contactUrl']) ?>" target="_blank">Link</a></td>
                        <td>
                            <?php if (!empty($person['image']) && file_exists($person['image'])): ?>
                                <img src="<?= htmlspecialchars($person['image']) ?>" alt="Image" width="80" height="80">
                            <?php else: ?>
                                <span class="text-muted">No image</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <div class="alert alert-warning">No records found</div>
    <?php endif; ?>
</div>
</body>
</html>