<?php

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
$result = mysqli_query($connection, $query);

if ($result) {
    
    header("Location: login.php");
    exit();
} else {
    echo "Registration failed. Please try again.";
}


mysqli_close($connection);
?>
