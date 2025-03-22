<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: ../login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding: 20px 110px">
        <a class="navbar-brand" href="../../index.php">UOM <span class="text-danger">Smartgrid Lab</span></a>
    
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="../display/displayPeople.php">People</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../display/displayClient.php">Clients</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../display/displayUser.php">User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../display/displayNews.php">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Service</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Actions
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="../actions/addPeople.php">Add People</a>
                        <a class="dropdown-item" href="../actions/addClient.php">Add Clients</a>
                        <a class="dropdown-item" href="../actions/addUser.php">Add User</a>
                        <a class="dropdown-item" href="../actions/addNews.php">Add News</a>
                        <a class="dropdown-item" href="#">Add Service</a>
                    </div>
                </li>
            </ul>
        </div>
        <abbr title="Logout"><div>Welcome, <a href="../logout.php" class="text-decoration-none text-body"><?php echo "" . $_SESSION['email'] . "!"; ?></a></div></abbr>
    </nav>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>