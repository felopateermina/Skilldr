<?php
$videos = [
    [
        'embed_code' => '<blockquote class="twitter-tweet" data-media-max-width="561"><p lang="ar" dir="rtl">أ. أحمد الغندور <a href="https://twitter.com/hashtag/%D8%A7%D9%84%D8%AF%D8%AD%D9%8A%D8%AD?src=hash&amp;ref_src=twsrc%5Etfw">#الدحيح</a> ❤️ <a href="https://t.co/uMbT9DcKol">pic.twitter.com/uMbT9DcKol</a></p>&mdash; مشاري راشد العفاسي (@Alafasy) <a href="https://twitter.com/Alafasy/status/1745389083499663433?ref_src=twsrc%5Etfw">January 11, 2024</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>',
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts - Skilldr</title>
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
    background-color: black;
    color: white;
    cursor: pointer;
    padding: 10px;
    border-radius: 5px;
}

#scrollToTopBtn:hover {
    background-color: #001220;
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
    <p style="font-weight: bold;color: black;text-align: center;">* While using the application, you agree to our <a href="../html/Privacy&Policy.html">Privacy & Policy Terms</a></p>

</div>
<button onclick="location.href='../index.html'" id="scrollToTopBtn" title="Go Home">
<svg width="34" height="34" fill="#ffffff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <path d="M19 21H5a1 1 0 0 1-1-1v-9H1l10.327-9.388a1 1 0 0 1 1.346 0L23 11h-3v9a1 1 0 0 1-1 1Zm-6-2h5V9.157l-6-5.454-6 5.454V19h5v-6h2v6Z"></path>
</svg>
</button>


</body>
</html>
