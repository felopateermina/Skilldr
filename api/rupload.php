<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $username = $_POST['username'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $video = $_FILES['video'];

    // Save the video file to the server
    $target_dir = "uploads/files/";
    $target_file = $target_dir . basename($video["name"]);

    // Ensure the uploads directory exists
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0755, true);
    }

    if (move_uploaded_file($video["tmp_name"], $target_file)) {
        // Save form data in a JSON file
        $info_file = 'uploads/info.json';
        $info = [
            'username' => $username,
            'title' => $title,
            'description' => $description,
            'video_path' => $target_file
        ];

        $data = [];
        if (file_exists($info_file)) {
            $data = json_decode(file_get_contents($info_file), true);
        }

        $data[] = $info;
        file_put_contents($info_file, json_encode($data, JSON_PRETTY_PRINT));

        echo "Video uploaded and information saved successfully!";
    } else {
        echo "Error uploading the video.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Video</title>
</head>
<body>
    <form action="rupload.php" method="post" enctype="multipart/form-data">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required><br><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea><br><br>

        <label for="video">Select video to upload:</label>
        <input type="file" id="video" name="video" accept="video/*" required><br><br>

        <input type="submit" value="Upload Video">
    </form>
</body>
</html>
