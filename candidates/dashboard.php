<?php include '../includes/header.php'; ?>
<h1>Candidate Dashboard</h1>
<p>Welcome to your dashboard. Here you can view and manage your job applications, update your profile, and explore new job opportunities.</p>
<div class="dashboard-content">
    <h2>Job Applications</h2>
    <!-- Display a list of job applications with options to view details or withdraw -->
    <ul>
        <li><a href="view_application.php?id=1">Job Application 1</a> | <a href="withdraw_application.php?id=1">Withdraw</a></li>
        <li><a href="view_application.php?id=2">Job Application 2</a> | <a href="withdraw_application.php?id=2">Withdraw</a></li>
        <!-- Display more job applications as needed -->
    </ul>
</div>

<div class="dashboard-content">
    <h2>Update Profile</h2>
    <form action="update_profile.php" method="post">
        <label for="candidate_name">Name:</label>
        <input type="text" id="candidate_name" name="candidate_name" required>
        <label for="candidate_email">Email:</label>
        <input type="email" id="candidate_email" name="candidate_email" required>
        <label for="candidate_resume">Upload Resume:</label>
        <input type="file" id="candidate_resume" name="candidate_resume">
        <button type="submit">Update Profile</button>
    </form>
</div>

<div class="dashboard-content">
    <h2>Explore New Job Opportunities</h2>
    <!-- Display a list of available job openings with options to view details or apply -->
    <ul>
        <li><a href="view_job.php?id=1">Job Opening 1</a> | <a href="apply_job.php?id=1">Apply</a></li>
        <li><a href="view_job.php?id=2">Job Opening 2</a> | <a href="apply_job.php?id=2">Apply</a></li>
        <!-- Display more job openings as needed -->
    </ul>
</div>
<?php include '../includes/footer.php'; ?>
