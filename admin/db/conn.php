<?php
    $servername = "127.0.0.1";
    $username = "root"; 
    $password = "zinc@fine098";
    $dbname = "microgrid_lab";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>