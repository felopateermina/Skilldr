<?php
$videos = [
    [
        'embed_code' => '<blockquote class="tiktok-embed" cite="https://www.tiktok.com/@imancodes/video/7290899576234462472" data-video-id="7290899576234462472" style="max-width: 605px;min-width: 325px;" > <section> <a target="_blank" title="@imancodes" href="https://www.tiktok.com/@imancodes?refer=embed">@imancodes</a> Master These to Land a Coding Job ✅💻  If you want to learn to code and land your first software engineering but are an absolute beginner coder, here are the skills and programming languages you should be learning. <a title="softwareengineer" target="_blank" href="https://www.tiktok.com/tag/softwareengineer?refer=embed">#softwareengineer</a> <a title="coding" target="_blank" href="https://www.tiktok.com/tag/coding?refer=embed">#coding</a> <a title="programming" target="_blank" href="https://www.tiktok.com/tag/programming?refer=embed">#programming</a> <a title="computerscience" target="_blank" href="https://www.tiktok.com/tag/computerscience?refer=embed">#computerscience</a> <a target="_blank" title="♬ Storytelling - Adriel" href="https://www.tiktok.com/music/Storytelling-7031101555747080194?refer=embed">♬ Storytelling - Adriel</a> </section> </blockquote> <script async src="https://www.tiktok.com/embed.js"></script>',
    ],
    [
        'embed_code' => '<blockquote class="tiktok-embed" cite="https://www.tiktok.com/@lewismenelaws/video/7089478998031404294" data-video-id="7089478998031404294" style="max-width: 605px;min-width: 325px;" > <section> <a target="_blank" title="@lewismenelaws" href="https://www.tiktok.com/@lewismenelaws?refer=embed">@lewismenelaws</a> These 3 things will help you learn code FAST 👩‍💻 <a title="softwareengineer" target="_blank" href="https://www.tiktok.com/tag/softwareengineer?refer=embed">#softwareengineer</a> <a title="tech" target="_blank" href="https://www.tiktok.com/tag/tech?refer=embed">#tech</a> <a title="techtok" target="_blank" href="https://www.tiktok.com/tag/techtok?refer=embed">#techtok</a> <a title="programming" target="_blank" href="https://www.tiktok.com/tag/programming?refer=embed">#programming</a> <a title="freelance" target="_blank" href="https://www.tiktok.com/tag/freelance?refer=embed">#freelance</a> <a title="career" target="_blank" href="https://www.tiktok.com/tag/career?refer=embed">#career</a> <a target="_blank" title="♬ Blade Runner 2049 - Synthwave Goose" href="https://www.tiktok.com/music/Blade-Runner-2049-6839324086548563969?refer=embed">♬ Blade Runner 2049 - Synthwave Goose</a> </section> </blockquote> <script async src="https://www.tiktok.com/embed.js"></script>',
    ],
    [
        'embed_code' => '<blockquote class="tiktok-embed" cite="https://www.tiktok.com/@hasinitharupaba/video/7223557276219608328" data-video-id="7223557276219608328" style="max-width: 605px;min-width: 325px;" > <section> <a target="_blank" title="@hasinitharupaba" href="https://www.tiktok.com/@hasinitharupaba?refer=embed">@hasinitharupaba</a> Coding tips for beginners <a title="coding" target="_blank" href="https://www.tiktok.com/tag/coding?refer=embed">#coding</a> <a title="learntocode" target="_blank" href="https://www.tiktok.com/tag/learntocode?refer=embed">#learntocode</a> <a title="developer" target="_blank" href="https://www.tiktok.com/tag/developer?refer=embed">#developer</a> <a title="programmer" target="_blank" href="https://www.tiktok.com/tag/programmer?refer=embed">#programmer</a> <a title="shecodes" target="_blank" href="https://www.tiktok.com/tag/shecodes?refer=embed">#shecodes</a> <a title="programming" target="_blank" href="https://www.tiktok.com/tag/programming?refer=embed">#programming</a> <a title="foryoupage" target="_blank" href="https://www.tiktok.com/tag/foryoupage?refer=embed">#foryoupage</a> <a target="_blank" title="♬ Ava - Famy" href="https://www.tiktok.com/music/Ava-6717101145925355521?refer=embed">♬ Ava - Famy</a> </section> </blockquote> <script async src="https://www.tiktok.com/embed.js"></script>',
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
            background-color: #121212;
            color: #ffffff;
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
            border: none;
            border-radius: 8px;
        }

        #scrollToTopBtn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 99;
            font-size: 16px;
            border: none;
            outline: none;
            background-color: #121212;
            color: #ffffff;
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
            background-color: #121212;
            color: #ffffff;
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
        
.comment-section-wrapper {
    display: flex;
    justify-content: center;
}

.comment-section {
    background-color: #0f0f0f;
    border-radius: 10px;
    padding: 15px;
    margin-top: 20px;
    width: 90%;
    margin: 0 auto;
}
.comment-section h3 {
    font-weight: bold;
    margin-bottom: 10px;
}
.comment-section form {
    margin-bottom: 20px;
}
.comment-section input, .comment-section textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #1a1a1a;
    color: white;
}
.comment-section button {
    background-color: #de5b00;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
.comment {
    background-color: #1a1a1a;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 10px;
}
.comment p {
    margin: 5px 0;
}
@media screen and (max-width: 1023px) {
    .comment-section {
    width: 77%;
}
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
    <div class="comment-section">
    <h3>Comments</h3>
    <form id="commentForm">
        <input type="text" id="username" placeholder="Your Name" required>
        <textarea id="commentText" placeholder="Your Comment" rows="4" required></textarea>
        <button type="submit">Submit</button>
    </form>
    <div id="commentsContainer"></div>
</div>
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
    let currentVideoIndex = 0;
    const totalVideos = <?php echo count($videos); ?>;

    function showCurrentVideo() {
        document.getElementById(`video${currentVideoIndex}`).scrollIntoView({
            behavior: 'smooth',
            block: 'start',
        });
    }

    function reloadIframe(index) {
        const videoItem = document.getElementById(`video${index}`);
        const iframe = videoItem.querySelector('iframe');
        if (iframe) {
            const src = iframe.src;
            iframe.src = src;
        }
    }

    function scrollToNextVideo() {
        reloadIframe(currentVideoIndex); // Pause the current video by reloading it
        currentVideoIndex = (currentVideoIndex + 1) % totalVideos;
        showCurrentVideo();
    }

    function scrollToPreviousVideo() {
        reloadIframe(currentVideoIndex); // Pause the current video by reloading it
        currentVideoIndex = (currentVideoIndex - 1 + totalVideos) % totalVideos;
        showCurrentVideo();
    }
    document.addEventListener('DOMContentLoaded', function () {
    const commentForm = document.getElementById('commentForm');
    const commentsContainer = document.getElementById('commentsContainer');

    // Function to save comments to local storage
    function saveCommentsToLocalStorage(comments) {
        localStorage.setItem('comments', JSON.stringify(comments));
    }

    // Function to retrieve comments from local storage
    function getCommentsFromLocalStorage() {
        const comments = localStorage.getItem('comments');
        return comments ? JSON.parse(comments) : [];
    }

    // Function to display comments
    function displayComments() {
        commentsContainer.innerHTML = '';
        const comments = getCommentsFromLocalStorage();
        comments.forEach(function(comment) {
            const commentElement = document.createElement('div');
            commentElement.classList.add('comment');
            commentElement.innerHTML = `<p><strong style="color:#de5b00;"><svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M16 9a4 4 0 1 1-8 0 4 4 0 0 1 8 0Zm-2 0a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z" clip-rule="evenodd"></path>
  <path fill-rule="evenodd" d="M12 1C5.925 1 1 5.925 1 12s4.925 11 11 11 11-4.925 11-11S18.075 1 12 1ZM3 12c0 2.09.713 4.014 1.908 5.542A8.986 8.986 0 0 1 12.065 14a8.984 8.984 0 0 1 7.092 3.458A9 9 0 1 0 3 12Zm9 9a8.963 8.963 0 0 1-5.672-2.012A6.992 6.992 0 0 1 12.065 16a6.991 6.991 0 0 1 5.689 2.92A8.964 8.964 0 0 1 12 21Z" clip-rule="evenodd"></path>
</svg> <span style="font-size: 20px;">${comment.username} :</span></strong></p><p>${comment.text}</p>`;
            commentsContainer.appendChild(commentElement);
        });
    }

    // Display existing comments on page load
    displayComments();

    commentForm.addEventListener('submit', function(e) {
        e.preventDefault();

        // Get input values
        const username = document.getElementById('username').value;
        const commentText = document.getElementById('commentText').value;

        // Create new comment object
        const newComment = {
            username: username,
            text: commentText
        };

        // Get existing comments from local storage
        const comments = getCommentsFromLocalStorage();

        // Add new comment to the array of comments
        comments.push(newComment);

        // Save updated comments to local storage
        saveCommentsToLocalStorage(comments);

        // Display comments again (including the new one)
        displayComments();

        // Clear the form
        commentForm.reset();
    });
});

</script>

</body>
</html>
