<?php include '../includes/header.php'; ?>
<h1>Blogs</h1>
<p>Share industry insights, company news, or career advice with your audience through your company blog.</p>
<div class="blog-management">
    <h2>Add Blog Post</h2>
    <form action="add_blog_post.php" method="post">
        <label for="blog_title">Blog Title:</label>
        <input type="text" id="blog_title" name="blog_title" required>
        <label for="blog_content">Blog Content:</label>
        <textarea id="blog_content" name="blog_content" required></textarea>
        <button type="submit">Add Blog Post</button>
    </form>
</div>

<div class="blog-management">
    <h2>Manage Blog Posts</h2>
    <!-- Here you can display a list of existing blog posts with options to edit or delete them -->
    <ul>
        <li><a href="edit_blog_post.php?id=1">Edit Blog Post 1</a> | <a href="delete_blog_post.php?id=1">Delete</a></li>
        <li><a href="edit_blog_post.php?id=2">Edit Blog Post 2</a> | <a href="delete_blog_post.php?id=2">Delete</a></li>
        <!-- Display more blog posts as needed -->
    </ul>
</div>
<?php include '../includes/footer.php'; ?>
