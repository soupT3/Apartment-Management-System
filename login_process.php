<?php
extract($_POST);
include("database.php");

// Escape user inputs for security
$UserType1 = mysqli_real_escape_string($conn, $_REQUEST['UserType1']);
$first_name = mysqli_real_escape_string($conn, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($conn, $_REQUEST['last_name']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$password = mysqli_real_escape_string($conn, $_REQUEST['pass']);


$sql=mysqli_query($conn,"SELECT * FROM users where Email='$email' and password = '$password' and userType='$UserType1'");

if(mysqli_num_rows($sql)>0)
{
    echo "Login Successful";

    if($UserType1 == 'admin'){
      header ("Location: adminDashboard.html?");
    }
    else if ($UserType1 == 'visitor'){
      header ("Location: index.html?");
    }
    else if ($UserType1 == 'resident'){
      header ("Location: Maintenance.html?");
    }
    else{
      header ("Location: adminLogin_retry.php?status=success");
    }
}
else{
  header ("Location: adminLogin_retry.php?status=success");  
}
mysqli_close($conn);
?>
