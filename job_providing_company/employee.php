<?php include '../includes/header.php'; ?>
<h1>Employee</h1>
<p>This feature allows you to manage your company's employees. You can add, edit, or remove employee profiles.</p>
<div class="employee-management">
    <h2>Add Employee Profile</h2>
    <form action="add_employee.php" method="post">
        <label for="employee_name">Employee Name:</label>
        <input type="text" id="employee_name" name="employee_name" required>
        <label for="employee_email">Employee Email:</label>
        <input type="email" id="employee_email" name="employee_email" required>
        <button type="submit">Add Employee</button>
    </form>
</div>

<div class="employee-management">
    <h2>Remove Employee Profile</h2>
    <form action="remove_employee.php" method="post">
        <label for="employee_id">Employee ID:</label>
        <input type="text" id="employee_id" name="employee_id" required>
        <button type="submit">Remove Employee</button>
    </form>
</div>
<?php include '../includes/footer.php'; ?>
