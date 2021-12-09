<?php
extract($_POST);
include("database.php");

// Escape user inputs for security
$UserType1 = mysqli_real_escape_string($conn, $_REQUEST['UserType1']);
$first_name = mysqli_real_escape_string($conn, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($conn, $_REQUEST['last_name']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$password = mysqli_real_escape_string($conn, $_REQUEST['pass']);


$sql=mysqli_query($conn,"SELECT * FROM users where Email='$email'");

if(mysqli_num_rows($sql)>0)
{
    echo "Email Id Already Exists";
    header ("Location: signUp_retry.php?status=success");
}
else{


  // Attempt insert query execution
  $query="INSERT INTO users(userType, firstName, lastName, email, password ) VALUES ('$UserType1', '$first_name', '$last_name', '$email', '$password')";
  if(mysqli_query($conn, $query)){
      echo "Records added successfully.";
      header ("Location: adminLogin.php?status=success");

  } else{
      echo "ERROR: Could not able to execute $conn. " . mysqli_error($conn);
  }
}

mysqli_close($conn);


?>
