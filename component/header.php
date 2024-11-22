<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        include('head-link.php');
    ?>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h1 class="text-primary m-0">SGRG</h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="people.php" class="nav-item nav-link">People</a>
                <a href="news.php" class="nav-item nav-link">News</a>
                <div class="nav-item dropdown">
                    <a href="laboratory.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Laboratory</a>
                    <div class="dropdown-menu m-0">
                        <a href="./service.php" class="dropdown-item">Service</a>
                        <a href="./lab1.php" class="dropdown-item">Laboraory - 01</a>
                        <a href="./lab2.php" class="dropdown-item">Laboraory - 02</a>
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
            <!-- <a href="" class="btn btn-primary rounded-pill py-2 px-4">Register</a> -->
        </div>
    </nav>
</body>
</html>