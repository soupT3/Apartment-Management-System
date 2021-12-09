<?php
include("database.php");
if (isset($_POST['submit'])) {
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['floorPlan']) &&
        isset($_POST['phone']) && isset($_POST['time']) &&
        isset($_POST['datepicker']) && isset($_POST['message'])) {
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $floorPlan = $_POST['floorPlan'];
        $phone = $_POST['phone'];
        $visitTime = $_POST['time'];
        $visitDate = $_POST['datepicker'];
        $description = $_POST['message'];
        
        $Insert = "INSERT INTO visitorRequests(name, email, floorPlan, phone, visitTime, visitDate, description) values(?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($Insert);
            $stmt->bind_param("sssssss",$name, $email, $floorPlan, $phone, $visitTime, $visitDate, $description);
            if ($stmt->execute()) {
                header('Location: visitorInfo.html');
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