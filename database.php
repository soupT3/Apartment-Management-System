<?php
$conn = mysqli_connect('localhost', 'root', 'root', 'project_db');
if (!$conn) {
    die("Database Connection incorrect a1aas " . mysqli_error($conn));
}
?>
