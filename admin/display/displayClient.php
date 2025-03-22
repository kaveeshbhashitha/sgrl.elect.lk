<?php
// Include the database connection
require '../db/conn.php';

// Handle delete action
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    try {
        // Fetch the image file path
        $stmt = $conn->prepare("SELECT image FROM client WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $person = $result->fetch_assoc();

        if ($person && file_exists('../uploads/' . $person['image'])) {
            unlink('../uploads/' . $person['image']);
        }

        // Delete the record from the database
        $stmt = $conn->prepare("DELETE FROM client WHERE id = ?");
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
        $stmt = $conn->prepare("SELECT publishStatus FROM client WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $person = $result->fetch_assoc();

        $newStatus = ($person['publishStatus'] === 'Published') ? 'None' : 'Published';
        $stmt = $conn->prepare("UPDATE client SET publishStatus = ? WHERE id = ?");
        $stmt->bind_param("si", $newStatus, $id);
        $stmt->execute();

        header('Location: ' . $_SERVER['PHP_SELF']);
        exit();
    } catch (Exception $e) {
        $error_message = "Failed to update status: " . $e->getMessage();
    }
}

// Fetch data from the 'client' table with filter
$filter = isset($_GET['clientType']) ? $_GET['clientType'] : '';
try {
    $sql = "SELECT * FROM client" . ($filter ? " WHERE clientType = ?" : "");
    $stmt = $conn->prepare($sql);
    if ($filter) $stmt->bind_param("s", $filter);
    $stmt->execute();
    $result = $stmt->get_result();

    if (!$result) {
        throw new Exception("Failed to fetch data: " . $conn->error);
    }

    $client = $result->fetch_all(MYSQLI_ASSOC);
} catch (Exception $e) {
    $error_message = $e->getMessage();
} finally {
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Client List</title>
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
            <h2 class="mb-4">All Client</h2>
            <div class="mb-3">
                <form method="get">
                    <select class="form-select" name="clientType" onchange="this.form.submit()">
                        <option value="">Filter Client Based on their type..</option>
                        <option value="Sri Lankan" <?= $filter == 'Sri Lankan' ? 'selected' : '' ?>>Sri Lankan</option>
                        <option value="International" <?= $filter == 'International' ? 'selected' : '' ?>>International</option>
                    </select>
                </form>
            </div>
        </div>
        
        <?php if (!empty($error_message)): ?>
            <div class="alert alert-danger">Error: <?= htmlspecialchars($error_message) ?></div>
        <?php endif; ?>

        <?php if (!empty($client)): ?>
            <table class="table table-hover">
                <thead class="">
                    <tr>
                        <th>ID</th>
                        <th>Type</th>
                        <th>Title</th>
                        <th>Country</th>
                        <th>Desctiption</th>
                        <th>Contact URL</th>
                        <th>Status</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($client as $person): ?>
                        <tr>
                            <td><?= htmlspecialchars($person['id']) ?></td>
                            <td><?= htmlspecialchars($person['clientType']) ?></td>
                            <td><?= htmlspecialchars($person['title']) ?></td>
                            <td><?= htmlspecialchars($person['country']) ?></td>
                            <td>
                                <span title="<?= htmlspecialchars($person['descript']) ?>">
                                    <?= htmlspecialchars(mb_strimwidth($person['descript'], 0, 30, "...")) ?>
                                </span>
                            </td>
                            <td><a href="<?= htmlspecialchars($person['contactUrl']) ?>" target="_blank">Link</a></td>
                            <td><?= htmlspecialchars($person['publishStatus']) ?></td>
                            <td>
                                <a href='../actions/<?= htmlspecialchars($person['image']) ?>' target="_blank">Image</a>
                            </td>
                            <td>
                                <a href="?toggle=<?= $person['id'] ?>" class="btn btn-outline-dark btn-sm">
                                    <?= ($person['publishStatus'] === 'Published') ? '<i class="fa-solid fa-folder-closed"></i>' : '<i class="fa-regular fa-folder-open"></i>' ?>
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