<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $department = $_POST['department'];
    $position = $_POST['position'];

    $sql = "INSERT INTO interviews (department, position)
            VALUES ('$department', '$position')";

    if ($con->query($sql) === TRUE) {
        echo "New interview added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    $con->close();
}
?>
