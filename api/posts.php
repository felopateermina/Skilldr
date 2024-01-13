<?php
$videos = [
    [
        'embed_code' => '<blockquote class="twitter-tweet"><p lang="en" dir="ltr">Python Developer Roadmap | Master Python by Following This Roadmap<br>☞ <a href="https://t.co/cxP3Z5C606">https://t.co/cxP3Z5C606</a><a href="https://twitter.com/hashtag/python?src=hash&amp;ref_src=twsrc%5Etfw">#python</a> <a href="https://t.co/PgpiCaW54E">pic.twitter.com/PgpiCaW54E</a></p>&mdash; Python Programming (@PythonPr) <a href="https://twitter.com/PythonPr/status/1680165308554788865?ref_src=twsrc%5Etfw">July 15, 2023</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>',
    ],
    [
        'embed_code' => '<blockquote class="twitter-tweet"><p lang="en" dir="ltr">Just fixed my laptop, and I&#39;m taking a friend&#39;s advice to start posting my projects <a href="https://twitter.com/Lansa_18?ref_src=twsrc%5Etfw">@Lansa_18</a> <a href="https://twitter.com/hashtag/FrontEnd?src=hash&amp;ref_src=twsrc%5Etfw">#FrontEnd</a> <a href="https://twitter.com/hashtag/developer?src=hash&amp;ref_src=twsrc%5Etfw">#developer</a> <a href="https://twitter.com/hashtag/developers?src=hash&amp;ref_src=twsrc%5Etfw">#developers</a> <a href="https://twitter.com/hashtag/internship?src=hash&amp;ref_src=twsrc%5Etfw">#internship</a> <a href="https://twitter.com/hashtag/intern?src=hash&amp;ref_src=twsrc%5Etfw">#intern</a> <a href="https://twitter.com/hashtag/HTML?src=hash&amp;ref_src=twsrc%5Etfw">#HTML</a> <a href="https://twitter.com/hashtag/CSS?src=hash&amp;ref_src=twsrc%5Etfw">#CSS</a> <a href="https://twitter.com/hashtag/javascript?src=hash&amp;ref_src=twsrc%5Etfw">#javascript</a> <a href="https://twitter.com/hashtag/frontenddeveloper?src=hash&amp;ref_src=twsrc%5Etfw">#frontenddeveloper</a> <a href="https://twitter.com/hashtag/devops?src=hash&amp;ref_src=twsrc%5Etfw">#devops</a> <a href="https://twitter.com/hashtag/GitHub?src=hash&amp;ref_src=twsrc%5Etfw">#GitHub</a> <a href="https://twitter.com/hashtag/Coding?src=hash&amp;ref_src=twsrc%5Etfw">#Coding</a> <a href="https://twitter.com/hashtag/programming?src=hash&amp;ref_src=twsrc%5Etfw">#programming</a> <a href="https://twitter.com/hashtag/programmer?src=hash&amp;ref_src=twsrc%5Etfw">#programmer</a> <a href="https://twitter.com/hashtag/forhire?src=hash&amp;ref_src=twsrc%5Etfw">#forhire</a> <a href="https://t.co/AloD1wQigd">pic.twitter.com/AloD1wQigd</a></p>&mdash; Hestaine (@hestaine) <a href="https://twitter.com/hestaine/status/1743888951478227199?ref_src=twsrc%5Etfw">January 7, 2024</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>',
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
            background-color: #121212; /* Dark background color */
            color: #ffffff; /* Light text color */
            font-weight: bold;

            font-family: sans-serif;
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
            padding: 16px;
            border-radius: 8px;
        }

        .video-item iframe {
            width: 100%;
            height: 200px;
            border: none; /* Remove iframe border */
            border-radius: 8px; /* Match the video item border radius */
        }

        #scrollToTopBtn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 99;
            font-size: 16px;
            border: none;
            outline: none;
            background-color: #121212; /* Dark background color for the button */
            color: #ffffff; /* Light text color for the button */
            cursor: pointer;
            padding: 10px;
            border-radius: 5px;
        }

        #scrollToTopBtn:hover {
            background-color: gray;
        }

        #prevBtn,
        #nextBtn {
            position: fixed;
            top: 50%;
            transform: translateY(-50%);
            font-size: 24px;
            background-color: #121212; /* Dark background color for the buttons */
            color: #ffffff; /* Light text color for the buttons */
            border: none;
            outline: none;
            cursor: pointer;
            padding: 10px;
            border-radius: 50%;
        }

        #prevBtn {
            left: 20px;
        }

        #nextBtn {
            right: 20px;
        }

        #prevBtn:hover,
        #nextBtn:hover {
            background-color: gray;
        }
    </style>
</head>
<body>

<div id="app">

    <div id="videos-container">
        <?php foreach ($videos as $index => $video): ?>
            <div class="video-item" id="video<?php echo $index; ?>">
                <?php echo $video['embed_code']; ?>
            </div>
        <?php endforeach; ?>
    </div>
    <p style="font-weight: bold;color: #ffffff;text-align: center;">* While using the application, you agree to our <a href="../html/Privacy&Policy.html">Privacy & Policy Terms</a></p>

</div>

<button onclick="scrollToPreviousVideo()" id="prevBtn" title="Previous Video">
    <svg width="24" height="24" fill="#ffffff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12H20V10H10.83l4.58-4.59Z"/>
    </svg>
</button>

<button onclick="scrollToNextVideo()" id="nextBtn" title="Next Video">
    <svg width="24" height="24" fill="#ffffff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M10.59 6.59L12 8l6 6-6 6-1.41-1.41L13.17 14H4V12h9.17l-4.58-4.59Z"/>
    </svg>
</button>

<button onclick="location.href='../index.html'" id="scrollToTopBtn" title="Go Home">
    <svg width="34" height="34" fill="#ffffff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M19 21H5a1 1 0 0 1-1-1v-9H1l10.327-9.388a1 1 0 0 1 1.346 0L23 11h-3v9a1 1 0 0 1-1 1Zm-6-2h5V9.157l-6-5.454-6 5.454V19h5v-6h2v6Z"></path>
    </svg>
</button>

<script>
       // JavaScript for scrolling to next and previous videos
       let currentVideoIndex = 0;
    const totalVideos = <?php echo count($videos); ?>;

    // Function to show the current video
    function showCurrentVideo() {
        document.getElementById(`video${currentVideoIndex}`).scrollIntoView({
            behavior: 'smooth',
            block: 'start',
        });
    }

    // Function to scroll to the next video
    function scrollToNextVideo() {
        // Pause the current video if it's playing
        const currentIframe = document.getElementById(`video${currentVideoIndex}`).querySelector('iframe');
        if (currentIframe) {
            currentIframe.contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');
        }

        // Move to the next video
        currentVideoIndex = (currentVideoIndex + 1) % totalVideos;
        showCurrentVideo();
    }

    // Function to scroll to the previous video
    function scrollToPreviousVideo() {
        // Pause the current video if it's playing
        const currentIframe = document.getElementById(`video${currentVideoIndex}`).querySelector('iframe');
        if (currentIframe) {
            currentIframe.contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');
        }

        // Move to the previous video
        currentVideoIndex = (currentVideoIndex - 1 + totalVideos) % totalVideos;
        showCurrentVideo();
    }
</script>

</body>
</html>
