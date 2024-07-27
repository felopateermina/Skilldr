<?php
// Database connection settings
$host = 'ep-quiet-smoke-a4nwkwii-pooler.us-east-1.aws.neon.tech';
$port = '5432';
$dbname = 'verceldb';
$user = 'default';
$password = 'JU4IxHz0qtCD';

// Create a connection string
$conn_string = "host=$host port=$port dbname=$dbname user=$user password=$password";

// Connect to PostgreSQL database
$conn = pg_connect($conn_string);
if (!$conn) {
    die("Connection failed: " . pg_last_error());
}

// Directory to store uploaded videos
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["video"]["name"]);
$uploadOk = 1;
$videoFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if file is a valid video
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["video"]["tmp_name"]);
    if ($check !== false) {
        echo "File is a video - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not a video.";
        $uploadOk = 0;
    }
}

// Check file size (limit to 50MB)
if ($_FILES["video"]["size"] > 50000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
$allowedFormats = array("mp4", "avi", "mov", "mkv");
if (!in_array($videoFileType, $allowedFormats)) {
    echo "Sorry, only MP4, AVI, MOV, & MKV files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// If everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["video"]["tmp_name"], $target_file)) {
        // Insert file info into PostgreSQL database
        $query = "INSERT INTO videos (filename, filepath) VALUES ($1, $2)";
        $result = pg_query_params($conn, $query, [basename($_FILES["video"]["name"]), $target_file]);

        if ($result) {
            echo "The file " . htmlspecialchars(basename($_FILES["video"]["name"])) . " has been uploaded.";
        } else {
            echo "Error: " . pg_last_error($conn);
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

pg_close($conn);
?>
