<?php include '../../includes/header.php'; ?>
<h1>Account Settings</h1>
<p>Manage your account settings here. Update profile information, change password, and adjust notification preferences.</p>

<div class="account-settings-form">
    <h2>Update Profile Information</h2>
    <form action="#" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
   
        <button type="submit">Update Profile</button>
    </form>
    <h2>Change Password</h2>
    <form action="#" method="post">
        <label for="current_password">Current Password:</label>
        <input type="password" id="current_password" name="current_password" required>
        <label for="new_password">New Password:</label>
        <input type="password" id="new_password" name="new_password" required>
        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
        <button type="submit">Change Password</button>
    </form>
    <h2>Adjust Notification Preferences</h2>

</div>
<?php include '../../includes/footer.php'; ?>
