<?php include '../includes/header.php'; ?>
<h1>Plugins</h1>
<p>Extend the functionality of your job portal with various plugins and integrations.</p>
<div class="plugin-management">
    <h2>Add Plugin</h2>
    <form action="add_plugin.php" method="post">
        <label for="plugin_name">Plugin Name:</label>
        <input type="text" id="plugin_name" name="plugin_name" required>
        <label for="plugin_description">Plugin Description:</label>
        <textarea id="plugin_description" name="plugin_description" required></textarea>
        <button type="submit">Add Plugin</button>
    </form>
</div>

<div class="plugin-management">
    <h2>Manage Plugins</h2>
    <!-- Here you can display a list of installed plugins with options to configure or remove them -->
    <ul>
        <li><a href="configure_plugin.php?id=1">Configure Plugin 1</a> | <a href="remove_plugin.php?id=1">Remove</a></li>
        <li><a href="configure_plugin.php?id=2">Configure Plugin 2</a> | <a href="remove_plugin.php?id=2">Remove</a></li>
        <!-- Display more plugins as needed -->
    </ul>
</div>
<?php include '../includes/footer.php'; ?>
