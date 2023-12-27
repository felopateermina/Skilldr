<?php
$videos = [
    [
        'embed_code' => '<blockquote class="tiktok-embed" cite="https://www.tiktok.com/@thecodedonkey/video/7267611793382558977" data-video-id="7267611793382558977" style="max-width: 605px;min-width: 325px;" > <section> <a target="_blank" title="@thecodedonkey" href="https://www.tiktok.com/@thecodedonkey?refer=embed">@thecodedonkey</a> <a title="html" target="_blank" href="https://www.tiktok.com/tag/html?refer=embed"></a><a title="htmlcss" target="_blank" href="https://www.tiktok.com/tag/htmlcss?refer=embed"></a><a title="website" target="_blank" href="https://www.tiktok.com/tag/website?refer=embed"></a><a title="webdevelopment" target="_blank" href="https://www.tiktok.com/tag/webdevelopment?refer=embed"></a><a title="htmltricks" target="_blank" href="https://www.tiktok.com/tag/htmltricks?refer=embed"></a><a title="shortcut" target="_blank" href="https://www.tiktok.com/tag/shortcut?refer=embed"></a><a title="programming" target="_blank" href="https://www.tiktok.com/tag/programming?refer=embed"></a><a title="coding" target="_blank" href="https://www.tiktok.com/tag/coding?refer=embed"></a><a title="tutorial" target="_blank" href="https://www.tiktok.com/tag/tutorial?refer=embed"></a><a title="tutorials" target="_blank" href="https://www.tiktok.com/tag/tutorials?refer=embed"></a><a title="fyp" target="_blank" href="https://www.tiktok.com/tag/fyp?refer=embed"></a><a title="fypシ" target="_blank" href="https://www.tiktok.com/tag/fyp%E3%82%B7?refer=embed"></a> <a target="_blank" title="♬ original sound  - TheCodeDonkey" href="https://www.tiktok.com/music/original-sound-TheCodeDonkey-7267611822725892865?refer=embed">♬ original sound  - TheCodeDonkey</a> </section> </blockquote> <script async src="https://www.tiktok.com/embed.js"></script>',
    ],
    // Add more videos as needed
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shorts - Skilldr</title>
    <style>
        body {
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        #app {
            max-width: 600px;
            width: 100%;
        }

        #videos-container {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            justify-content: center;
        }

        .video-item {
            width: 100%;
            max-width: 300px;
            text-align: center;
        }

        .video-item iframe {
            width: 100%;
            height: 200px; /* Adjust the height as needed */
        }
    </style>
</head>
<body>

<div id="app">
    <div id="videos-container">
        <?php foreach ($videos as $video): ?>
            <div class="video-item">
                <?php echo $video['embed_code']; ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>


</body>
</html>
