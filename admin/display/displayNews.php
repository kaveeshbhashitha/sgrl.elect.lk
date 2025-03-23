<?php
// Include the database connection
require '../db/conn.php';

// Handle delete action
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    try {
        // Fetch the image file path
        $stmt = $conn->prepare("SELECT image FROM news WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $person = $result->fetch_assoc();

        if ($person && file_exists('../uploads/' . $person['image'])) {
            unlink('../uploads/' . $person['image']);
        }

        // Delete the record from the database
        $stmt = $conn->prepare("DELETE FROM news WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        header('Location: ' . $_SERVER['PHP_SELF']);
        exit();
    } catch (Exception $e) {
        $error_message = "Failed to delete: " . $e->getMessage();
    }
}

// Handle publish/unpublish action
if (isset($_GET['toggle'])) {
    $id = $_GET['toggle'];
    try {
        $stmt = $conn->prepare("SELECT status FROM news WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $person = $result->fetch_assoc();

        $newStatus = ($person['status'] === 'Published') ? 'None' : 'Published';
        $stmt = $conn->prepare("UPDATE news SET status = ? WHERE id = ?");
        $stmt->bind_param("si", $newStatus, $id);
        $stmt->execute();

        header('Location: ' . $_SERVER['PHP_SELF']);
        exit();
    } catch (Exception $e) {
        $error_message = "Failed to update status: " . $e->getMessage();
    }
}

// Fetch data from the 'news' table with filter
$filter = isset($_GET['newsType']) ? $_GET['newsType'] : '';
try {
    $sql = "SELECT * FROM news" . ($filter ? " WHERE newsType = ?" : "");
    $stmt = $conn->prepare($sql);
    if ($filter) $stmt->bind_param("s", $filter);
    $stmt->execute();
    $result = $stmt->get_result();

    if (!$result) {
        throw new Exception("Failed to fetch data: " . $conn->error);
    }

    $news = $result->fetch_all(MYSQLI_ASSOC);
} catch (Exception $e) {
    $error_message = $e->getMessage();
} finally {
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>News List</title>
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
            <h2 class="mb-4">All news</h2>
        </div>
        
        <?php if (!empty($error_message)): ?>
            <div class="alert alert-danger">Error: <?= htmlspecialchars($error_message) ?></div>
        <?php endif; ?>

        <?php if (!empty($news)): ?>
            <table class="table table-hover">
                <thead class="">
                    <tr>
                        <th>ID</th>
                        <th>Type</th>
                        <th>Title</th>
                        <th>Desctiption</th>
                        <th>Contact URL</th>
                        <th>Status</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($news as $person): ?>
                        <tr>
                            <td><?= htmlspecialchars($person['id']) ?></td>
                            <td>
                                <span title="<?= htmlspecialchars($person['newsTitle']) ?>">
                                    <?= htmlspecialchars(mb_strimwidth($person['newsTitle'], 0, 30, "...")) ?>
                                </span>
                            </td>
                            <td><?= htmlspecialchars($person['date']) ?></td>
                            <td>
                                <span title="<?= htmlspecialchars($person['description']) ?>">
                                    <?= htmlspecialchars(mb_strimwidth($person['description'], 0, 30, "...")) ?>
                                </span>
                            </td>
                            <td><a href="<?= htmlspecialchars($person['link']) ?>" target="_blank">Link</a></td>
                            <td><?= htmlspecialchars($person['status']) ?></td>
                            <td>
                                <a href='../actions/<?= htmlspecialchars($person['image']) ?>' target="_blank">Image</a>
                            </td>
                            <td>
                                <a href="?toggle=<?= $person['id'] ?>" class="btn btn-outline-dark btn-sm">
                                    <?= ($person['status'] === 'Published') ? '<i class="fa-solid fa-folder-closed"></i>' : '<i class="fa-regular fa-folder-open"></i>' ?>
                                </a>
                                <a href="?delete=<?= $person['id'] ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure you want to delete this record?')"><i class="fa-solid fa-trash"></i></a>
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