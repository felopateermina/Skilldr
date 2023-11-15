<!DOCTYPE html>
<html>
<head>
    <title>Web development Video - Skilldr</title>
    <link rel="stylesheet" type="text/css" href="../css/video.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    body{
        color: white;
        background-color: #292929;
    }
    .desc{
        background-color: 
        black;
        width: 60%;
        border-radius: 10px;
        padding: 8px;
box-shadow:  5px 5px 10px #bebebe,
             -5px -5px 10px #ffffff;
             font-weight: 700;
    }
</style>
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
                    'youtubeId' => 'qfPUMV9J5yw?si=wnprAt3rLHTdsvCE'
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
                $youtubeId = $selectedVideo['youtubeId'];
                echo "<h2>$videoTitle</h2>";
                echo "<div class='video-player'>";
                echo "<iframe width='560' height='315' src='https://www.youtube.com/embed/$youtubeId' frameborder='0' allowfullscreen></iframe>";
                echo "</div>";
                echo "<div class='desc'>";
                echo "<p>$videoDescription</p>";
                echo "</div>";
            } else {
                echo "<p>Video does not exist.</p>";
            }
        } else {
            echo "<p>Invalid video ID.</p>";
        }
        ?>
    </div>
</body>
</html>