<?php
$videos = [
    [
        'embed_code' => '<blockquote class="tiktok-embed" cite="https://www.tiktok.com/@lewismenelaws/video/7089478998031404294" data-video-id="7089478998031404294" style="max-width: 605px;min-width: 325px;" > <section> <a target="_blank" title="@lewismenelaws" href="https://www.tiktok.com/@lewismenelaws?refer=embed">@lewismenelaws</a> These 3 things will help you learn code FAST 👩‍💻 <a title="softwareengineer" target="_blank" href="https://www.tiktok.com/tag/softwareengineer?refer=embed">#softwareengineer</a> <a title="tech" target="_blank" href="https://www.tiktok.com/tag/tech?refer=embed">#tech</a> <a title="techtok" target="_blank" href="https://www.tiktok.com/tag/techtok?refer=embed">#techtok</a> <a title="programming" target="_blank" href="https://www.tiktok.com/tag/programming?refer=embed">#programming</a> <a title="freelance" target="_blank" href="https://www.tiktok.com/tag/freelance?refer=embed">#freelance</a> <a title="career" target="_blank" href="https://www.tiktok.com/tag/career?refer=embed">#career</a> <a target="_blank" title="♬ Blade Runner 2049 - Synthwave Goose" href="https://www.tiktok.com/music/Blade-Runner-2049-6839324086548563969?refer=embed">♬ Blade Runner 2049 - Synthwave Goose</a> </section> </blockquote> <script async src="https://www.tiktok.com/embed.js"></script>',
    ],
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
        /* styles.css */
#scrollToTopBtn {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 99;
    font-size: 16px;
    border: none;
    outline: none;
    background-color: #007BFF;
    color: white;
    cursor: pointer;
    padding: 10px;
    border-radius: 5px;
}

#scrollToTopBtn:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>

<div id="app">

    <div id="videos-container">
        <?php foreach ($videos as $video): ?>
          
            <div class="video-item">
                <?php echo $video['embed_code']; ?>
                <hr>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<button onclick="location.href='../index.html'" id="scrollToTopBtn" title="Go Home">
<svg width="34" height="34" fill="#ffffff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <path d="M19 21H5a1 1 0 0 1-1-1v-9H1l10.327-9.388a1 1 0 0 1 1.346 0L23 11h-3v9a1 1 0 0 1-1 1Zm-6-2h5V9.157l-6-5.454-6 5.454V19h5v-6h2v6Z"></path>
</svg>
</button>


</body>
</html>
