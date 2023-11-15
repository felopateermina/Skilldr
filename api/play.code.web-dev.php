

<!DOCTYPE html>
<html>
<head>
    <title>Web development Video - Skilldr</title>
    <link rel="stylesheet" type="text/css" href="../css/video.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container">
        <?php
        // Check if the video ID is provided in the query parameter
        if (isset($_GET['id'])) {
            $videoId = $_GET['id'];
            $videos = [
                [
                    'id' => 1,
                    'title' => '[Arabic] Learn HTML in 2022 In One Video',
                    'description' => 'Learn HTML in 2022 In One Video. The Course In 37 Separated Videos',
                    'filename' => '../../html/code/vids/skilldr-[Arabic] Learn HTML in 2022 In One Video.mp4'
                ],
                // Add more videos as needed
            ];

            // Find the video with the matching ID
            $selectedVideo = null;
            foreach ($videos as $video) {
                if ($video['id'] == $videoId) {
                    $selectedVideo = $video;
                    break;
                }
            }

            // If a matching video is found, display the video player
            if ($selectedVideo) {
                $videoTitle = $selectedVideo['title'];
                $videoDescription = $selectedVideo['description'];
                $videoFilename = $selectedVideo['filename'];
                echo "<h2>$videoTitle</h2>";
                echo "<div class='video-player'>";
                echo "<video controls>";
                echo "<source class='vid' src='videos/$videoFilename' type='video/mp4'>";
                echo "Your browser does not support the video tag.";
                echo "</video>";
                echo "</div>";
                echo "<div class='desc' >";
                echo "<p>$videoDescription</p>";
                echo "</div>";
            } else {
                echo "<p>Video not exist.</p>";
            }
        } else {
            echo "<p>Invalid video ID.</p>";
        }
        ?>
    </div>
</body>
</html>