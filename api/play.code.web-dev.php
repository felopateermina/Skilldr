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
    
header{
    display: flex;
    justify-content: space-between;
    padding: 10px 20px;
    width: 100%;
    align-items: center;
}
input{
    border: 2px white solid;
  background-color: black;
  color: white;
  padding: 10px;
  border-radius: 10px;
  outline: none;
  width: 100%;

}
.logo{
    text-decoration: none;
    color: white;
    font-size: 1.8em;
    font-weight: 900;
}
nav a{
    text-decoration: none;
    color: white;
}
*{
    box-sizing: border-box;
    scroll-behavior: smooth;
    margin: 0;
    padding: 0;
}
@media screen and (max-width: 1023px) {
    .video-item {
        width: 100%;
    }

    .video-player iframe {
        max-width: 100%;
    }
    .desc{
        width: 100%;
    }
}
</style>
</head>
<body>
    <header>
        <a href="../index.html" class="logo">Skilldr.</a>
        <form method="get" action="result.php" style="display: flex; justify-content: center" class="search_form">
                <input
                title="Search Skilldr"
                  type="search"
                  name="query"
                  style="border-radius: 10px;color: #de5b00;font-weight: 700;"
                  placeholder="Search Skilldr By Categories ID Or A Code Or Even Name..."
                  id="search"
                />
             
              </form>
        <!-- <nav>
            <a href="video.code.web-dev.php">Return</a>
        </nav> -->
    </header>
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
                echo "<br>";
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