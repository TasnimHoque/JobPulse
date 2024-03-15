<?php include 'includes/header.php'; ?>
<h1>Welcome to JobPulse</h1>
<p>Find the perfect job or ideal candidate with JobPulse, your ultimate job portal management system.</p>
<div class="login-form">
    <h2>Login</h2>
    <form action="login_process.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Login</button>
    </form>
</div>
<div class="register-form">
    <h2>Register</h2>
    <form action="register_process.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Register</button>
    </form>
</div>
<?php include 'includes/footer.php'; ?>
