<?php include 'includes/header.php'; ?>
<h1>Forgot Password</h1>
<!-- Forgot password form -->
<form action="forgot_password_process.php" method="post">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <button type="submit">Reset Password</button>
</form>
<?php include 'includes/footer.php'; ?>
