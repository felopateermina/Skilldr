<!DOCTYPE html>
<html>
<head>

<link
      rel="shortcut icon"
      href="../imgs/logo.png"
      type="image/x-icon"
    />
    <title>Web Development Video - Skilldr</title>


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
        width: 100%;
        border-radius: 10px;
        padding: 8px;
             font-weight: bold;
             font-size:18px;

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
    width: 100%;
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
    width:100%;
}
@media screen and (max-width:1023px) {
    #showComments{
        width:100%;
    }
}
#jj{
    width:15%;
}
@media screen and (max-width:1023px) {
    #jj{
        width:30%;
    }
}
textarea{
    resize:none;
}
.itslogo{
    width: 90%;height: 7vh;
}
@media screen and (max-width:1023px) {
    .itslogo{
        width: 90%;height: 5vh;
    }
}

#commentsContainer{
    font-weight:bold;
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
        
       
    <a  href="../index.html">

<img src="../imgs/skilldr-high-resolution-logo-white-transparent.png" class="itslogo">
</a>
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
         <a href="video.code.web-dev.php" style="color: #de5b00;font-size: 1.5em;">
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
    <div class="container">
        <div class="mainvids">

     
        <?php
        // Check if the video ID is provided in the query parameter
        if (isset($_GET['id'])) {
            $videoId = $_GET['id'];
            $videos = [
                [
                    'id' => 1,
                    'title' => '[Arabic] Learn HTML in 2022 In One Video',
                    'description' => '<i class="fas fa-newspaper"></i> Learn HTML in 2022 In One Video. The Course In 37 Separated Videos <br><br> <i class="fas fa-user"></i> Creator: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">Elzero Web School</a><br> <i class="fas fa-clock"></i> Time: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">2022</a><br> <i class="fas fa-question-circle"></i> About: <a href="https://en.wikipedia.org/wiki/Front-end_web_development" style="color:blue;text-decoration:none;">Front-End</a>',
                    'youtubeId' => 'qfPUMV9J5yw?si=wnprAt3rLHTdsvCE',
                    'likeNo' => '+ 15k',
                    'dislikeNo' => '+ 500',
                    'saveNo' => '+ 400k',
                ],
                [
                    'id' => 2,
                    'title' => '[Arabic] Learn CSS in 2022 In One Video',
                    'description' => '<i class="fas fa-newspaper"></i> Learn CSS in 2022 In One Video. The Course In 88 Separated Videos <br><br> <i class="fas fa-user"></i> Creator: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">Elzero Web School</a><br> <i class="fas fa-clock"></i> Time: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">2022</a><br> <i class="fas fa-question-circle"></i> About: <a href="https://en.wikipedia.org/wiki/Front-end_web_development" style="color:blue;text-decoration:none;">Front-End</a>',
                    'youtubeId' => 'qyVkLebgfzY?si=bZpnaoGjOFjHqh6O',
                    'likeNo' => '+ 7k',
                    'dislikeNo' => '+ 400',
                    'saveNo' => '+ 300k',
                ],
                [
                    'id' => 3,
                    'title' => '[Arabic] Learn JavaScript In One Video - Part One',
                    'description' => '<i class="fas fa-newspaper"></i> Learn JavaScript In One Video - Part One . Lessons From 001 To 101 The Course In 188 Separated Videos <br><br> <i class="fas fa-user"></i> Creator: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">Elzero Web School</a><br> <i class="fas fa-clock"></i> Time: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">2022</a><br> <i class="fas fa-question-circle"></i> About: <a href="https://en.wikipedia.org/wiki/Front-end_web_development" style="color:blue;text-decoration:none;">Front-End</a>',
                    'youtubeId' => 'gIGGhFlGgLI?si=WZ7v-57M9a3RKvtK',
                    'likeNo' => '+ 5k',
                    'dislikeNo' => '+ 300',
                    'saveNo' => '+ 200k',
                ],
                [
                    'id' => 4,
                    'title' => '[Arabic] Learn JavaScript In One Video - Part Two',
                    'description' => '<i class="fas fa-newspaper"></i> Learn JavaScript In One Video - Part Two . Lessons From 102 To 188 The Course In 188 Separated Videos <br><br> <i class="fas fa-user"></i> Creator: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">Elzero Web School</a><br> <i class="fas fa-clock"></i> Time: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">2022</a><br> <i class="fas fa-question-circle"></i> About: <a href="https://en.wikipedia.org/wiki/Front-end_web_development" style="color:blue;text-decoration:none;">Front-End</a>',
                    'youtubeId' => 'FKrfis1W1tk?si=wffpm6lkKYF8LNKu',
                    'likeNo' => '+ 1.4k',
                    'dislikeNo' => '+ 200',
                    'saveNo' => '+ 65k',
                ],
                [
                    'id' => 5,
                    'title' => '[Arabic] Learn Bootstrap In 12 Videos',
                    'description' => '<i class="fas fa-newspaper"></i> A Complete Bootstrap Course in 2022 . <br><br> <i class="fas fa-user"></i> Creator: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">Elzero Web School</a><br> <i class="fas fa-clock"></i> Time: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">2022</a><br> <i class="fas fa-question-circle"></i> About: <a href="#" style="color:blue;text-decoration:none;">Framework For Front-End</a>',
                    'youtubeId' => 'videoseries?si=jr_L00-B67GNYRq-&amp;list=PLDoPjvoNmBAyvm7f--dc6XqkpfDcen_vQ',
                    'likeNo' => '+ 20k',
                    'dislikeNo' => '+ 134',
                    'saveNo' => '+ 443k',
                ],
                [
                    'id' => 999,
                    'title' => '[Arabic] Learn React-JS In 30 Videos',
                    'description' => '<i class="fas fa-newspaper"></i> A Complete React-JS Course in 2022 . <br><br> <i class="fas fa-user"></i> Creator: <a href="#" style="color:blue;text-decoration:none;">Unique Coderz Academy</a><br> <i class="fas fa-clock"></i> Time: <a href="#" style="color:blue;text-decoration:none;">2022</a><br> <i class="fas fa-question-circle"></i> About: <a href="#" style="color:blue;text-decoration:none;">Framework For Front-End</a>',
                    'youtubeId' => 'videoseries?si=uoLF7ZiC8TaV-5cx&amp;list=PLtFbQRDJ11kEjXWZmwkOV-vfXmrEEsuEW',
                    'likeNo' => '+ 50k',
                    'dislikeNo' => '+ 134',
                    'saveNo' => '+ 1.2M',
                ],
                [
                    'id' => 6,
                    'title' => '[Arabic] Learn PHP In 105 Videos',
                    'description' => '<i class="fas fa-newspaper"></i> A Complete PHP Course in 2022 . <br><br> <i class="fas fa-user"></i> Creator: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">Elzero Web School</a><br> <i class="fas fa-clock"></i> Time: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">2022</a><br> <i class="fas fa-question-circle"></i> About: <a href="https://en.wikipedia.org/wiki/Frontend_and_backend" style="color:blue;text-decoration:none;">Back-end</a>',
                    'youtubeId' => 'videoseries?si=PgA3KHaYp3EjTywe&amp;list=PLDoPjvoNmBAy41u35AqJUrI-H83DObUDq',
                    'likeNo' => '+ 6k',
                    'dislikeNo' => '+ 300',
                    'saveNo' => '+ 275k',
                ],
                [
                    'id' => 7,
                    'title' => '[Arabic] Learn MYSQL In 51 Videos',
                    'description' => '<i class="fas fa-newspaper"></i> A Complete MYSQL Course in 2020 . <br><br> <i class="fas fa-user"></i> Creator: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">Elzero Web School</a><br> <i class="fas fa-clock"></i> Time: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">2020</a><br><i class="fas fa-question-circle"></i> About: <a href="https://en.wikipedia.org/wiki/Frontend_and_backend" style="color:blue;text-decoration:none;">Back-end</a>',
                    'youtubeId' => 'videoseries?si=pTpW9ajAf691nCdo&amp;list=PLDoPjvoNmBAz6DT8SzQ1CODJTH-NIA7R9',
                    'likeNo' => '+ 120k',
                    'dislikeNo' => '+ 300',
                    'saveNo' => '+ 1.5M',
                ],
                [
                    'id' => 8,
                    'title' => '[Arabic] Learn Laravel In 21 Videos',
                    'description' => '<i class="fas fa-newspaper"></i> A Complete Laravel Course in 2021 . <br><br> <i class="fas fa-user"></i> Creator: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">Elzero Web School</a><br> <i class="fas fa-clock"></i> Time: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">2021</a><br> <i class="fas fa-question-circle"></i> About: <a href="https://en.wikipedia.org/wiki/Frontend_and_backend" style="color:blue;text-decoration:none;">Framework For Back-End</a>',
                    'youtubeId' => 'videoseries?si=SmI4WPH26nADZhdS&amp;list=PLDoPjvoNmBAy_mAhY0x8cHf8oSGPKsEKP',
                    'likeNo' => '+ 142k',
                    'dislikeNo' => '+ 600',
                    'saveNo' => '+ 650k',
                ],
                [
                    'id' => 9,
                    'title' => '[English] Learn HTML & CSS In One Video 2023',
                    'description' => '<i class="fas fa-newspaper"></i> A Complete HTML & CSS Course in 2023 . <br><br> <i class="fas fa-user"></i> Creator: <a href="#" style="color:blue;text-decoration:none;">Bro Code</a><br> <i class="fas fa-clock"></i> Time: <a href="#" style="color:blue;text-decoration:none;">2023</a><br> <i class="fas fa-question-circle"></i> About: <a href="https://en.wikipedia.org/wiki/Frontend_and_backend" style="color:blue;text-decoration:none;">Front-End</a>',
                    'youtubeId' => 'HGTJBPNC-Gw?si=i5gJ5fhCxskoxn0e',
                    'likeNo' => '+ 58k',
                    'dislikeNo' => '+ 200',
                    'saveNo' => '+ 1.9M',
                ],
                [
                    'id' => 10,
                    'title' => '[English] Learn JAVASCRIPT In One Video 2024',
                    'description' => '<i class="fas fa-newspaper"></i> A Complete JAVASCRIPT Course in 2024 . <br><br> <i class="fas fa-user"></i> Creator: <a href="#" style="color:blue;text-decoration:none;">Bro Code</a><br> <i class="fas fa-clock"></i> Time: <a href="#" style="color:blue;text-decoration:none;">2024</a><br> <i class="fas fa-question-circle"></i> About: <a href="https://en.wikipedia.org/wiki/Frontend_and_backend" style="color:blue;text-decoration:none;">Front-End</a>',
                    'youtubeId' => 'lfmg-EJ8gm4?si=IIlZEQiXAHipOTx0',
                    'likeNo' => '+ 40k',
                    'dislikeNo' => '+ 150',
                    'saveNo' => '+ 1.1M',
                ],
                [
                    'id' => 11,
                    'title' => '[English] Learn Bootstrap In 20 Videos 2021',
                    'description' => '<i class="fas fa-newspaper"></i> A Complete Bootstrap Course in 2021 . <br><br> <i class="fas fa-user"></i> Creator: <a href="#" style="color:blue;text-decoration:none;">Net Ninja</a><br> <i class="fas fa-clock"></i> Time: <a href="#" style="color:blue;text-decoration:none;">2021</a><br> <i class="fas fa-question-circle"></i> About: <a href="#" style="color:blue;text-decoration:none;">Front-End Framework</a>',
                    'youtubeId' => 'videoseries?si=jLu4BOAOlwlEqNfn&amp;list=PL4cUxeGkcC9joIM91nLzd_qaH_AimmdAR',
                    'likeNo' => '+ 80k',
                    'dislikeNo' => '+ 400',
                    'saveNo' => '+ 1.6M',
                ],
                [
                    'id' => 12,
                    'title' => '[English] Learn React-JS In One Video 2024',
                    'description' => '<i class="fas fa-newspaper"></i> A Complete React-JS Course in 2024 . <br><br> <i class="fas fa-user"></i> Creator: <a href="#" style="color:blue;text-decoration:none;">Bro Code</a><br> <i class="fas fa-clock"></i> Time: <a href="#" style="color:blue;text-decoration:none;">2024</a><br> <i class="fas fa-question-circle"></i> About: <a href="https://en.wikipedia.org/wiki/Frontend_and_backend" style="color:blue;text-decoration:none;">Front-End Framework</a>',
                    'youtubeId' => 'CgkZ7MvWUAA?si=4ku4iR4rtnuWrJxr',
                    'likeNo' => '+ 20k',
                    'dislikeNo' => '+ 132',
                    'saveNo' => '+ 780k',
                ],
                [
                    'id' => 13,
                    'title' => '[English] Learn PHP In One Video 2024',
                    'description' => '<i class="fas fa-newspaper"></i> A Complete PHP Course in 2024 . <br><br> <i class="fas fa-user"></i> Creator: <a href="#" style="color:blue;text-decoration:none;">Bro Code</a><br> <i class="fas fa-clock"></i> Time: <a href="#" style="color:blue;text-decoration:none;">2024</a><br> <i class="fas fa-question-circle"></i> About: <a href="https://en.wikipedia.org/wiki/Frontend_and_backend" style="color:blue;text-decoration:none;">Back-End</a>',
                    'youtubeId' => 'zZ6vybT1HQs?si=OldtIeWGeqWIW5-H',
                    'likeNo' => '+ 33k',
                    'dislikeNo' => '+ 200',
                    'saveNo' => '+ 1.2M',
                ],
                [
                    'id' => 14,
                    'title' => '[English] Learn MYSQL In One Video 2024',
                    'description' => '<i class="fas fa-newspaper"></i> A Complete MYSQL Course in 2024 . <br><br> <i class="fas fa-user"></i> Creator: <a href="#" style="color:blue;text-decoration:none;">Bro Code</a><br> <i class="fas fa-clock"></i> Time: <a href="#" style="color:blue;text-decoration:none;">2024</a><br> <i class="fas fa-question-circle"></i> About: <a href="https://en.wikipedia.org/wiki/Frontend_and_backend" style="color:blue;text-decoration:none;">Back-End</a>',
                    'youtubeId' => '5OdVJbNCSso?si=mzTzMhKgJdwgKBUd',
                    'likeNo' => '+ 40k',
                    'dislikeNo' => '+ 128',
                    'saveNo' => '+ 1.5M',
                ],
                [
                    'id' => 15,
                    'title' => '[English] Learn Laravel In 52 Videos 2024',
                    'description' => '<i class="fas fa-newspaper"></i> A Complete Laravel Course in 2024 . <br><br> <i class="fas fa-user"></i> Creator: <a href="#" style="color:blue;text-decoration:none;">Yelo Code</a><br> <i class="fas fa-clock"></i> Time: <a href="#" style="color:blue;text-decoration:none;">2024</a><br> <i class="fas fa-question-circle"></i> About: <a href="https://en.wikipedia.org/wiki/Frontend_and_backend" style="color:blue;text-decoration:none;">Framework For Back-End</a>',
                    'youtubeId' => 'videoseries?si=NfeU7r53FAb7yuh3&amp;list=PLqDySLfPKRn5d7WbN9R0yJA9IRgx-XBlU',
                    'likeNo' => '+ 92k',
                    'dislikeNo' => '+ 526',
                    'saveNo' => '+ 233k',
                ],
                [
                    'id' => "Quan3doSe",
                    'title' => '[English] Learn Next.Js In 7 Hours And In One Video 2023',
                    'description' => '<i class="fas fa-newspaper"></i> A Complete Next.Js Course in 2023 . <br><br> <i class="fas fa-user"></i> Creator: <a href="#" style="color:blue;text-decoration:none;">Dave Gray</a><br> <i class="fas fa-clock"></i> Time: <a href="#" style="color:blue;text-decoration:none;">2023</a><br> <i class="fas fa-question-circle"></i> About: <a href="https://en.wikipedia.org/wiki/Frontend_and_backend" style="color:blue;text-decoration:none;">Next.Js</a>',
                    'youtubeId' => '843nec-IvW0?si=MOoSKU2KUQMGB1nf',
                    'likeNo' => '+ 10k',
                    'dislikeNo' => '+ 2053',
                    'saveNo' => '+ 410k',
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
                $subs = $selectedVideo['subs'];
                $channel = $selectedVideo['channel'];
                echo "<div class='video-player'>";
                echo "<iframe width='100%' height='400' src='https://www.youtube.com/embed/$youtubeId' frameborder='0' allowfullscreen></iframe>";
                    echo "</div>";
                    echo "<h2 class='formobilelabel'>$videoTitle</h2>";
                
                    echo "<div class='buttons'>";
                    echo "<button style='font-weight:bold;' id='lkb' class='like-button' type='button'><i class='fas fa-thumbs-up'></i>$likeNo</button>";
                    echo "<button style='font-weight:bold;' class='dislike-button' type='button'><i class='fas fa-thumbs-down'></i>$dislikeNo</button>";
                    echo "<button style='font-weight:bold;' class='save-button' type='button'><i class='fas fa-eye'></i>$saveNo</button>";
                     echo "<br>";
            echo "<br>";
            echo "</div>";

            echo "<div style='align-items:center;'>";
            echo "<a href='#' class='buttondown' id='jj' style='color:white;text-decoration:none;text-align:center;' download='$videoTitle'><i class='fas fa-bookmark' style='color:white;'></i> Save</a>";
            echo "<a href='../html/report.html' id='jj' class='buttondown' style='color:white;text-decoration:none;text-align:center;'><i class='fas fa-flag' style='color:white;'></i> Report</a>";
            echo "<a href='../html/donate.html' id='jj' class='buttondown' style='color:white;text-decoration:none;text-align:center;'><i class='fas fa-donate' style='color:white;'></i> Donate</a>";

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
    <h6><i>Nobody Can See Your Comments As It's A Data For You Only, Likes & Comments.</i></h6>
    <br>
        <textarea style="font-family:sans-serif;font-weight:bold;" id="commentText" placeholder="Your Comment" rows="4" required></textarea>
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
            <p><strong style="color:#de5b00;"><i class='fas fa-user'></i> <span style="font-size: 20px;">${comment.username} :</span></strong></p>
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
<footer style="background-color: #000c15; color: rgb(255, 255, 255); padding: 20px; text-align: center;">

<h4>© Skill<span style="color: #de5b00;">dr.</span> Made By <span style="color: #de5b00;">Dark Alpha</span></h4>
<br>

<div class="icons" style="display: flex;text-align: center;justify-content: center;">

<a href="result.php?query=python" style="color: white;">
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