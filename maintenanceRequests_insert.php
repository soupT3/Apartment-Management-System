<?php
include("database.php");
if (isset($_POST['submit'])) {
    if (isset($_POST['name']) && isset($_POST['email']) &&
        isset($_POST['apartmentNumber']) && isset($_POST['priority']) &&
        isset($_POST['category']) && isset($_POST['description'])) {
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $apartmentNumber = $_POST['apartmentNumber'];
        $priority = $_POST['priority'];
        $category = $_POST['category'];
        $description = $_POST['description'];

        $Insert = "INSERT INTO maintenanceRequests(name, email, apartmentNumber, priority, category, description) values(?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($Insert);
            $stmt->bind_param("ssssss",$name, $email, $apartmentNumber, $priority, $category, $description);
            if ($stmt->execute()) {
                header('Location: Maintenance.html');
                exit;                
            }
            else {
                echo $stmt->error;
            }
        $stmt->close();
        $conn->close();
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>