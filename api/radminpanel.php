<?php
// Define paths
$files_dir = 'uploads/files/';
$info_file = 'uploads/info.json';

// Check if info file exists
if (file_exists($info_file)) {
    $data = json_decode(file_get_contents($info_file), true);
} else {
    $data = [];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>
<body>
    <h1>Admin Panel</h1>
    <h2>Uploaded Videos</h2>

    <?php if (empty($data)): ?>
        <p>No videos uploaded.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($data as $item): ?>
                <li>
                    <strong>Username:</strong> <?php echo htmlspecialchars($item['username']); ?><br>
                    <strong>Title:</strong> <?php echo htmlspecialchars($item['title']); ?><br>
                    <strong>Description:</strong> <?php echo htmlspecialchars($item['description']); ?><br>
                    <a href="<?php echo htmlspecialchars($item['video_path']); ?>" download>Download Video</a>
                </li>
                <hr>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>
</html>
