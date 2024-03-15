<?php

$username = $_POST['username'];
$password = $_POST['password'];


$query = "SELECT password FROM users WHERE username='$username'";
$result = mysqli_query($connection, $query);

if ($result && mysqli_num_rows($result) > 0) {
 
    $row = mysqli_fetch_assoc($result);
    $hashed_password = $row['password'];


    if (password_verify($password, $hashed_password)) {
      
        header("Location: dashboard.php");
        exit();
    } else {

        echo "Invalid username or password. Please try again.";
    }
} else {
   
    echo "Invalid username or password. Please try again.";
}


mysqli_close($connection);
?>
