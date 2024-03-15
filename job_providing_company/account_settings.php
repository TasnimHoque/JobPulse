<?php include '../includes/header.php'; ?>
<h1>Account Settings</h1>
<p>Manage your company's account settings here. Update profile information, change password, and adjust notification preferences.</p>
<div class="account-settings">
    <h2>Update Profile Information</h2>
    <form action="update_profile.php" method="post">
        <label for="company_name">Company Name:</label>
        <input type="text" id="company_name" name="company_name" required>
        <label for="company_email">Company Email:</label>
        <input type="email" id="company_email" name="company_email" required>
        <button type="submit">Update Profile</button>
    </form>
</div>

<div class="account-settings">
    <h2>Change Password</h2>
    <form action="change_password.php" method="post">
        <label for="current_password">Current Password:</label>
        <input type="password" id="current_password" name="current_password" required>
        <label for="new_password">New Password:</label>
        <input type="password" id="new_password" name="new_password" required>
        <label for="confirm_password">Confirm New Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
        <button type="submit">Change Password</button>
    </form>
</div>

<div class="account-settings">
    <h2>Adjust Notification Preferences</h2>
    <form action="adjust_notifications.php" method="post">
        <label for="email_notifications">Email Notifications:</label>
        <select id="email_notifications" name="email_notifications" required>
            <option value="enabled">Enabled</option>
            <option value="disabled">Disabled</option>
        </select>
        <button type="submit">Save Preferences</button>
    </form>
</div>
<?php include '../includes/footer.php'; ?>
