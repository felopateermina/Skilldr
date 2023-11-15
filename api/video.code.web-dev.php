
<!DOCTYPE html>
<html>
<head>
    <title>Web development - Skilldr</title>
    <link rel="stylesheet" type="text/css" href="../css/video.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
         body{
        color: white;
        background-color: #292929;
    }
    </style>
</head>
<body>
    <div class="container">
        <h1>Web Development</h1>
        <div class="video-container">
            <?php
           $videos = [
            [
                'id' => 1,
                'title' => '[Arabic] Learn HTML in 2022 In One Video',
                'description' => 'Learn HTML in 2022 In One Video. The Course In 37 Separated Videos',
                'filename' => 'qfPUMV9J5yw?si=wnprAt3rLHTdsvCE'
            ],
            // Add more videos as needed
        ];

            foreach ($videos as $video) {
                $videoId = $video['id'];
                $videoTitle = $video['title'];
                $videoDescription = $video['description'];
                echo "<div class='video-item'>";
                echo "<a href='play.code.web-dev.php?id=$videoId'>";
                echo "<div class='video-info'>";
                echo "<h2>$videoTitle</h2>";
                echo "<p>$videoDescription</p>";
                echo "</div>";
                echo "</a>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
</body>
</html>