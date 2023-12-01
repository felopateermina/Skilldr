<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Instagram-Like Website</title>
<style>
    body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #fafafa;
    margin: 0;
}

header {
    background-color: #fff;
    border-bottom: 1px solid #ccc;
    padding: 10px;
    text-align: center;
    box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
}

header h1 {
    font-size: 1.5em;
    margin: 0;
    color: #333;
}

main {
    max-width: 600px;
    margin: 20px auto;
}

#post-form, #posts {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 20px;
    margin-bottom: 20px;
    box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 5px;
}

textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    resize: none;
}

button {
    background-color: #3897f0;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #2672bc;
}

#post-list {
    list-style-type: none;
    padding: 0;
}

.post-item {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 15px;
    margin-bottom: 15px;
    box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
}

footer {
    background-color: #fff;
    border-top: 1px solid #ccc;
    padding: 10px;
    text-align: center;
    bottom: 0;
    width: 100%;
    box-shadow: 0px -1px 5px rgba(0, 0, 0, 0.1);
}
/* ... (existing styles) ... */

.post-item {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    margin-bottom: 16px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.post-header {
    display: flex;
    align-items: center;
    padding: 12px;
}

.post-header img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    margin-right: 12px;
}

.post-header h3 {
    font-size: 1em;
    margin: 0;
}

.post-image {
    width: 100%;
    max-height: 400px;
    object-fit: cover;
}

.post-content {
    padding: 12px;
}

/* ... (existing styles) ... */

</style>    
</head>
<body>

    <header>
        <h1>Your Website Name</h1>
        <!-- Add navigation links here -->
    </header>

    <main>
        <div id="post-form">
            <h2>Create a Post</h2>
            <form method="post" action="">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <label for="content">Post Content:</label>
                <textarea id="content" name="content" rows="4" required></textarea>

                <button type="submit" name="submit">Publish</button>
            </form>
        </div>

        <div id="posts">
            <h2>Recent Posts</h2>
            <ul id="post-list">
                <?php
                    // Display existing posts
                    $posts = file('posts.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                    foreach ($posts as $post) {
                        echo '<li class="post-item">' . htmlspecialchars($post) . '</li>';
                    }
                ?>
            </ul>
        </div>
    </main>



    <script src="../js/social.js"></script>
</body>
</html>

<?php
// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $username = htmlspecialchars($_POST['username']);
    $content = htmlspecialchars($_POST['content']);

    // Create a new post string
    $newPost = "$username: $content";

    // Append the post to the posts.txt file
    file_put_contents('posts.txt', $newPost . PHP_EOL, FILE_APPEND);

    // Redirect to avoid form resubmission on page refresh
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}
?>

<!-- Your HTML content here -->

