<?php
// Include the database connection
require '../db/conn.php';

// Handle publish/unpublish actions
if (isset($_POST['action']) && isset($_POST['id'])) {
    $id = intval($_POST['id']);
    $newStatus = ($_POST['action'] === 'publish') ? 'Published' : 'None';

    try {
        $updateSql = "UPDATE people SET publishStatus = ? WHERE id = ?";
        $stmt = $conn->prepare($updateSql);
        $stmt->bind_param('si', $newStatus, $id);

        if (!$stmt->execute()) {
            throw new Exception("Failed to update status: " . $stmt->error);
        }
    } catch (Exception $e) {
        $error_message = $e->getMessage();
    }
}

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
    <link href="../../img/sgrg-logo.png" rel="icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script>
        async function toggleStatus(id, action) {
            const formData = new FormData();
            formData.append('id', id);
            formData.append('action', action);

            const response = await fetch('', {
                method: 'POST',
                body: formData
            });
            if (response.ok) location.reload();
        }
    </script>
</head>
<body>

    <?php
        require '../layout/topnav.php';
    ?>
    
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="mb-4">All People</h2>
            <div class="mb-3">
                <select class="form-select" name="peopleType">
                    <option value="">Filter People Based on their type..</option>
                    <option value="Student">Undergraduate</option>
                    <option value="Teacher">Postgraduate</option>
                    <option value="Alumni">Alumni</option>
                    <option value="Staff">Staff</option>
                </select>
            </div>
        </div>
        
        <?php if (!empty($error_message)): ?>
            <div class="alert alert-danger">Error: <?= htmlspecialchars($error_message) ?></div>
        <?php endif; ?>

        <?php if (!empty($people)): ?>
            <table class="table table-hover">
                <thead class="">
                    <tr>
                        <th>ID</th>
                        <th>Type</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Title</th>
                        <th>Degree</th>
                        <th>Contact URL</th>
                        <th>Status</th>
                        <th>Image</th>
                        <th>Action</th>
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
                            <td><?= htmlspecialchars($person['publishStatus']) ?></td>
                            <td>
                                <a href='../actions/<?= htmlspecialchars($person['image']) ?>' target="_blank">Image</a>
                            </td>
                            <td>
                                <?php if ($person['publishStatus'] === 'Published'): ?>
                                    <button class="btn btn-outline-danger btn-sm" onclick="toggleStatus(<?= $person['id'] ?>, 'unpublish')">Unpublish</button>
                                <?php else: ?>
                                    <button class="btn btn-outline-dark btn-sm" onclick="toggleStatus(<?= $person['id'] ?>, 'publish')">Publish</button>
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

    <?php
        require '../layout/footer.php';
    ?>

</body>
</html>