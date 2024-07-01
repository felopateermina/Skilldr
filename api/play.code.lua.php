<!DOCTYPE html>
<html>
<head>
<link
      rel="shortcut icon"
      href="../imgs/skilldr-high-resolution-logo-black-transparent.png"
      type="image/x-icon"
    />
    <title>Lua Script Video - Skilldr</title>


    <link rel="stylesheet" type="text/css" href="../css/video.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
    
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #f1f1f1;
}

.container {
    max-width: 990px;
    margin: 0 auto;
    justify-content: center;
}

h1 {
    text-align: center;
    margin-bottom: 20px;
}

.video-container {
    display: flex;
    flex-wrap: wrap;
}

.video-item {
    width: 100%;
    margin-bottom: 20px;
    background-color: #fff;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    overflow: hidden;
}

.video-item a {
    display: block;
    text-decoration: none;
    color: #333;
}

.thumbnail {
    position: relative;
    height: 0;
    padding-bottom: 56.25%; /* 16:9 aspect ratio */
}

.thumbnail img {
    position: absolute;
}
.thumbnail img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.video-info {
    padding: 10px;
}

.video-info h2 {
    font-size: 16px;
    margin: 0;
    
}

.video-info p {
    font-size: 14px;
    color: #888;
    margin: 5px 0;
}

.video-player {
    margin-bottom: 20px;
}

.video-player video {
    width: 100%;
    max-width: 480px;
    height: auto;
}

    body{
        color: white;
        font-family: system-ui;
        background-color: #001220;
        
    }
    .desc{
        background-color: 
        black;
        width: 60%;
        border-radius: 10px;
        padding: 8px;
             font-weight: 700;

background: #0f0f0f;
box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);

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
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;

}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}
@media screen and (max-width: 1023px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.buttons {
            margin-top: 20px;
            
        }

        .buttons button {
            margin-right: 20px;
            background-color: transparent;
            border: none;
            color: white;
            cursor: pointer;
            font-size: 1.1em;
        }

        .buttons button i {
            margin-right: 5px;
        }

        .buttons button:focus {
            outline: none;
        }

        

        .like-button i.fa-thumbs-up {
            color: blue;
        }

        .dislike-button i.fa-thumbs-down {
            color: red;
        }

        .save-button i.fa-eye {
            color: green;
        }
        .no_ex{
            justify-content: center;
            text-align: center;
}

nav a{
    margin: 6px;
}
nav a svg:hover{
    text-decoration: underline;
    fill: #de5b00;
}
iframe{
    border-radius: 10px;
}
@media screen and (max-width: 1023px) {
   .chrme{
    display: none;
   }
}
header{
box-shadow:  5px 5px 10px #000000,
             -5px -5px 10px #000000;
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
    width: 60%;
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
    width: 100%;
}}
@media screen and (max-width: 1023px) {
    .formobilelabel{
        font-size:27.2px;
    }
}

.buttondown {
  display: inline-block;
  padding: 7px;
  font-size: 15px;
  font-weight: bold;
  color: white;
  background-color: #de5b00;
  border: solid #de5b00 1px;
  border-radius: 5px;
  text-align: center;
  text-decoration: none;
  cursor: pointer;
  transition: background-color 0.3s ease;
  margin:5px;
}

.buttondown:hover {
  background-color: #de5b00;
}

.buttondown:active {
  background-color: #de5b00;
}

.alert-warning {
    color: #856404;
    background-color: #fff3cd;
    border-color: #ffeeba;
    padding:7px;
    display:none;
}
#commentSec{
    display: none;
}
#showComments{
    width:60%;
}
@media screen and (max-width:1023px) {
    #showComments{
        width:100%;
    }
}
</style>

</head>
<body>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<br><br><br>
  
        <br><br>
        <a href="../html/code/intro.html">Return</a>
        <a href="../index.html">Home</a>
        <a href="../index.html#about">About Us</a>
        <a href="../index.html#courses">Courses</a>
        

</div>
    <header>
        
    <a href="../index.html" class="logo">Skill<span style="color:#de5b00;">dr.</span></a>

        <div class="chrme" >
        <form method="get" action="result.php" style="display: flex; justify-content: center;" class="search_form">
    <input
        title="Search Skilldr"
        type="search"
        name="query"
        style="border-radius: 10px; color: #de5b00; font-weight: 700; width: 700px;"
        placeholder="Search Skilldr Academy ..."
        id="search"
    />
</form>
        </div>
        <div class="rt" style="color: white;">
         <a href="video.code.lua.php" style="color: #de5b00;font-size: 1.5em;">
         <svg width="46" height="46" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <path d="M5 9h11a4 4 0 1 1 0 8h-1"></path>
  <path d="M9 13 5 9l4-4"></path>
</svg>
         </a>
      </div>
    </header>
    <div id="warn" class="alert alert-warning">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            Warning: You haven't signed in yet.
    </div>
    <div id="warn2" class="alert alert-warning">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            Warning: You haven't signed in yet.
    </div>
    <br>
    <div class="container">
        <div class="mainvids">

     
        <?php
        // Check if the video ID is provided in the query parameter
        if (isset($_GET['id'])) {
            $videoId = $_GET['id'];
            $videos = [
                [
                    'id' => 1,
                    'title' => '[Arabic] Learn Lua Script in 2023 In 37 Videos',
                    'description' => 'A complete Lua Script course with 37 separated videos. <br><br> Creator: <a href="#" style="color:blue;text-decoration:none;">Adres_Dev</a><br> Time: <a href="#" style="color:blue;text-decoration:none;">2023</a><br> About: <a href="#" style="color:blue;text-decoration:none;">Lua Script</a>',
                    'youtubeId' => 'videoseries?si=Tv56LMMkjL9fJvSf&amp;list=PL1s2Olz3_bXG4GZ6EoEvWu1kVpZLbp6Le',
                    'likeNo' => '+ 19k',
                    'dislikeNo' => '+ 338',
                    'saveNo' => '+ 175k',
                ],
                [
                    'id' => 2,
                    'title' => '[Arabic] Learn Lua Script in 2019 In 10 Videos',
                    'description' => 'A complete Lua Script course with 10 separated videos. <br><br> Creator: <a href="#" style="color:blue;text-decoration:none;">JustCarry Explaining</a><br> Time: <a href="#" style="color:blue;text-decoration:none;">2019</a><br> About: <a href="#" style="color:blue;text-decoration:none;">Lua Script</a>',
                    'youtubeId' => 'videoseries?si=QDW-8leUXGhIkSkM&amp;list=PL6yhZuIk6Ic4oiNcQuf7Cw77fwbqFVxpD',
                    'likeNo' => '+ 97k',
                    'dislikeNo' => '+ 1270',
                    'saveNo' => '+ 167k',
                ],
                [
                    'id' => 3,
                    'title' => '[Arabic] Learn Lua Script in 2023 In 7 Videos',
                    'description' => 'A complete Lua Script course with 7 Videos. <br><br> Creator: <a href="#" style="color:blue;text-decoration:none;">0xWaleed</a><br> Time: <a href="#" style="color:blue;text-decoration:none;">2023</a><br> About: <a href="#" style="color:blue;text-decoration:none;">Lua Script</a>',
                    'youtubeId' => 'videoseries?si=vdVYzCAhZ54zX3Jt&amp;list=PL3KnC8_o_BSlPDf439a5ecZnflwqQ-r8W',
                    'likeNo' => '+ 43k',
                    'dislikeNo' => '+ 3372',
                    'saveNo' => '+ 144k',
                ],
          
            ];

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
                $likeNo = $selectedVideo['likeNo'];
                $dislikeNo = $selectedVideo['dislikeNo'];
                $saveNo = $selectedVideo['saveNo'];
                echo "<div class='video-player'>";
                echo "<iframe width='560' height='315' src='https://www.youtube.com/embed/$youtubeId' frameborder='0' allowfullscreen></iframe>";
                    echo "</div>";
                    echo "<h2 class='formobilelabel'>$videoTitle</h2>";
                
                    echo "<div class='buttons'>";
            echo "<button id='lkb' class='like-button' type='button'><i class='fas fa-thumbs-up'></i>$likeNo</button>";
            echo "<button class='dislike-button' type='button'><i class='fas fa-thumbs-down'></i>$dislikeNo</button>";
            echo "<button class='save-button' type='button'><i class='fas fa-eye'></i>$saveNo</button>";
            echo "<br>";
            echo "<br>";
            echo "</div>";

            echo "<div style='align-items:center;'>";
            echo "<a href='#' class='buttondown' style='color:white;text-decoration:none;text-align:center;' download='$videoTitle'><i class='fas fa-download' style='color:white;'></i> Save Page</a>";
            echo "<a href='../html/report.html' class='buttondown' style='color:white;text-decoration:none;text-align:center;'><i class='fas fa-flag' style='color:white;'></i> Report</a>";
            echo "</div>";
                    echo "<br>";
                echo "<div class='desc'>";
                echo "<p>$videoDescription</p>";
                echo "<br>";
                echo "</div>";
         
                
            // Display the like, dislike, and save buttons
            

           
            } else {
                echo '<center><svg class="no_ex" width="80" height="80" fill="none" stroke="#de5b00" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"> <path d="M17.344 17.719c1.354 1.102 2.156 2.16 2.156 4.031"></path> <path d="M6.656 17.719C5.302 18.82 4.5 19.878 4.5 21.75"></path> <path d="M18 9.75c1.354-1.102 1.5-2.628 1.5-4.5"></path> <path d="M6 9.656C4.646 8.554 4.5 7.122 4.5 5.25"></path> <path d="M21.75 13.508H18"></path> <path d="M6 13.508H2.25"></path> <path d="M12 9v12"></path> <path d="M12 21.003c-3.3 0-6-2.7-6-6V10.5C6 7.45 8.7 6 12 6s6 1.2 6 4.5v4.503c0 3.3-2.7 6-6 6Z"></path> <path d="M8.41 6.728a2.3 2.3 0 0 1-.16-.738 3.75 3.75 0 0 1 3.74-3.74h.02a3.75 3.75 0 0 1 3.74 3.74c-.01.23-.059.457-.146.67"></path> </svg></center>';
                echo "<br>";
                echo "<h2 style='justify-content:center;text-align:center;color:white;'>Sorry! ... Nothing To Watch.</h2>";
            }
        } else {
            echo '<center><svg class="no_ex" width="46" height="46" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"> <path d="M17.344 17.719c1.354 1.102 2.156 2.16 2.156 4.031"></path> <path d="M6.656 17.719C5.302 18.82 4.5 19.878 4.5 21.75"></path> <path d="M18 9.75c1.354-1.102 1.5-2.628 1.5-4.5"></path> <path d="M6 9.656C4.646 8.554 4.5 7.122 4.5 5.25"></path> <path d="M21.75 13.508H18"></path> <path d="M6 13.508H2.25"></path> <path d="M12 9v12"></path> <path d="M12 21.003c-3.3 0-6-2.7-6-6V10.5C6 7.45 8.7 6 12 6s6 1.2 6 4.5v4.503c0 3.3-2.7 6-6 6Z"></path> <path d="M8.41 6.728a2.3 2.3 0 0 1-.16-.738 3.75 3.75 0 0 1 3.74-3.74h.02a3.75 3.75 0 0 1 3.74 3.74c-.01.23-.059.457-.146.67"></path> </svg></center>';
                echo "<br>";
                
            echo "<h3 style='justify-content:center;text-align:center;'>Invalid video ID.</h3>";
        }
        ?>
        <a id="showComments" class='buttondown' style='color:white;text-decoration:none;text-align:center;'><i class='fas fa-eye' style='color:white;'></i> Show / Hide Comments</a>
        <div id="commentSec" class="comment-section">
    <h3>Comments</h3>
    <form id="commentForm">
        <textarea id="commentText" placeholder="Your Comment" rows="4" required></textarea>
        <button type="submit">Submit</button>
    </form>
    <div id="commentsContainer"></div>
</div>
</div>


    </div>




    <script>
document.addEventListener('DOMContentLoaded', function () {
    const commentForm = document.getElementById('commentForm');
    const commentsContainer = document.getElementById('commentsContainer');
    const commentSec = document.getElementById("commentSec");
    const warn = document.getElementById("warn");

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
            const commentElement = createCommentElement(comment);
            commentsContainer.appendChild(commentElement);
        });
    }

    // Function to create a comment element
    function createCommentElement(comment) {
        const commentElement = document.createElement('div');
        commentElement.classList.add('comment');
        commentElement.innerHTML = `
            <p><strong style="color:#de5b00;"><svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M16 9a4 4 0 1 1-8 0 4 4 0 0 1 8 0Zm-2 0a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z" clip-rule="evenodd"></path>
                <path fill-rule="evenodd" d="M12 1C5.925 1 1 5.925 1 12s4.925 11 11 11 11-4.925 11-11S18.075 1 12 1ZM3 12c0 2.09.713 4.014 1.908 5.542A8.986 8.986 0 0 1 12.065 14a8.984 8.984 0 0 1 7.092 3.458A9 9 0 1 0 3 12Zm9 9a8.963 8.963 0 0 1-5.672-2.012A6.992 6.992 0 0 1 12.065 16a6.991 6.991 0 0 1 5.689 2.92A8.964 8.964 0 0 1 12 21Z" clip-rule="evenodd"></path>
            </svg> <span style="font-size: 20px;">${comment.username} :</span></strong></p>
            <p>${comment.text}</p>`;
        return commentElement;
    }
let sc = document.getElementById("showComments");

    sc.addEventListener("click", function() {
        if (commentSec.style.display === "none" || commentSec.style.display === "") {
            commentSec.style.display = "block";
        } else {
            commentSec.style.display = "none";
        }
    });
    // Display existing comments on page load
    displayComments();



    // Check if user is logged in
    const currentUser = sessionStorage.getItem('currentUser');
    if (!currentUser) {
        commentSec.style.display = "none";
        warn.style.display = "block";
        sc.style.display = "none";
    }

    // Event listener for comment submission
    commentForm.addEventListener('submit', function(e) {
        e.preventDefault();

        // Get input values
        const commentText = document.getElementById('commentText').value;

        // Create new comment object with the logged-in user's name
        const newComment = {
            username: currentUser, // Use the current logged-in user's username
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

    // Example: Adding a specific comment on button click
    const addButton = document.getElementById('lkb');
    addButton.addEventListener('click', function() {
        const specificComment = {
            username: currentUser, // You can set any username for this comment
            text: '<i style="color:gray;">Liked A Video: <?php 
            echo $videoTitle;
            ?> </i>'
        };


if (!currentUser) {
}else{
        alert("Thanks For Your Like !");
             // Get existing comments from local storage
             const comments = getCommentsFromLocalStorage();

// Add the specific comment to the array of comments
comments.push(specificComment);

// Save updated comments to local storage
saveCommentsToLocalStorage(comments);

// Display comments again (including the new one)
displayComments();
    }
   
        
    });
});

    </script>

<br><br><br><br>
<h6 style="font-weight: bold;color: white;text-align: center;color:white;">* <a href="../html/Privacy&Policy.html" style="color:white;">Privacy & Policy Terms</a> *</h6>
<br>
<footer style="background-color: rgb(0, 0, 0); color: rgb(255, 255, 255); padding: 20px; text-align: center;">

<span style="font-weight: 700;color: #de5b00;">© 2023 Skilldr. Made by Felopateer ♡</span>
<br><br>

<div class="icons" style="display: flex;text-align: center;justify-content: center;">

<a href="api/result.php?query=python" style="color: white;">
  <svg width="40" height="40" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="m21.407 19.753-4.41-4.41a8.148 8.148 0 0 0 1.633-4.903c0-4.516-3.674-8.19-8.19-8.19s-8.19 3.674-8.19 8.19 3.674 8.19 8.19 8.19a8.148 8.148 0 0 0 4.902-1.633l4.41 4.41a1.171 1.171 0 0 0 1.655-1.654ZM4.59 10.44a5.85 5.85 0 1 1 5.85 5.85 5.857 5.857 0 0 1-5.85-5.85Z"></path>
  </svg>
</a>

<a href="../html/userdata.html" style="color: white;">
  <svg width="40" height="40" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M12 2.25c-5.376 0-9.75 4.374-9.75 9.75s4.374 9.75 9.75 9.75 9.75-4.374 9.75-9.75S17.376 2.25 12 2.25Zm.094 4.5a3.375 3.375 0 1 1 0 6.75 3.375 3.375 0 0 1 0-6.75ZM12 20.25a8.23 8.23 0 0 1-6.055-2.653C6.359 15.45 10.08 15 12 15s5.64.45 6.055 2.596A8.228 8.228 0 0 1 12 20.25Z"></path>
  </svg>
</a>

<a href="share.php" style="color: white;">
  <svg width="40" height="40" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M2.756 20.584a.75.75 0 0 1-.506-.71c0-3.426.688-6.166 2.046-8.144C5.936 9.338 8.525 8.052 12 7.891V4.125a.75.75 0 0 1 1.268-.542l8.25 7.875a.75.75 0 0 1 0 1.084l-8.25 7.875A.75.75 0 0 1 12 19.875v-3.74c-2.11.064-3.703.406-4.972 1.062-1.371.709-2.365 1.768-3.437 3.14a.75.75 0 0 1-.835.248Z"></path>
  </svg>
</a>
</div>
</footer>
<script>
    // Disable right-click context menu
    document.addEventListener('contextmenu', event => event.preventDefault());

    // Disable specific keyboard shortcuts
    document.addEventListener('keydown', function(event) {
        if (event.key === "F12" || (event.ctrlKey && event.shiftKey && event.key === "I") || 
            (event.ctrlKey && event.shiftKey && event.key === "J") || 
            (event.ctrlKey && event.key === "U")) {
            event.preventDefault();
        }
    });
</script>

</body>
</html>