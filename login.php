<?php include 'includes/header.php'; ?>
<h1>Login</h1>
<form action="login_process.php" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <button type="submit">Login</button>
</form>
<p>Forgot your password? <a href="forgot_password.php">Reset it here</a>.</p>
<?php include 'includes/footer.php'; ?>
