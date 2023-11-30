<!DOCTYPE html>
<html>
<head>
<link
      rel="shortcut icon"
      href="../imgs/skilldr-high-resolution-logo-black-transparent.png"
      type="image/x-icon"
    />
    <title>Web Development Video - Skilldr</title>


    <link rel="stylesheet" type="text/css" href="../css/video.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
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

</style>

</head>
<body>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<br><br><br>
  <form method="get" action="result.php" style="display: flex; justify-content: center" class="search_form">
                <input
                title="Search Skilldr"
                  type="search"
                  name="query"
                  style="border-radius: 10px;color: #de5b00;font-weight: 700;"
                  placeholder="Search Skilldr Academy ..."
                  id="search"
                />
             
        </form>
        <br><br>
        <a href="../html/code/intro.html">Return</a>
        <a href="../index.html">Home</a>
        <a href="../index.html#about">About Us</a>
        <a href="../index.html#courses">Courses</a>
        

</div>
    <header>
        
    <a href="../index.html" class="logo">Skill<span style="color:#de5b00;">dr.</span></a>
       <nav>
        <a href="../index.html" >
        <svg width="36" height="36" fill="#ffffff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <path d="M12.261 4.745a.375.375 0 0 0-.518 0l-8.63 8.244a.374.374 0 0 0-.115.271l-.002 7.737a1.5 1.5 0 0 0 1.5 1.5h4.505a.75.75 0 0 0 .75-.75v-6.375a.375.375 0 0 1 .375-.375h3.75a.375.375 0 0 1 .375.375v6.375a.75.75 0 0 0 .75.75h4.503a1.5 1.5 0 0 0 1.5-1.5V13.26a.374.374 0 0 0-.116-.271L12.26 4.745Z"></path>
  <path d="M23.011 11.444 19.505 8.09V3a.75.75 0 0 0-.75-.75h-2.25a.75.75 0 0 0-.75.75v1.5L13.04 1.904c-.254-.257-.632-.404-1.04-.404-.407 0-.784.147-1.038.405l-9.97 9.539a.765.765 0 0 0-.063 1.048.749.749 0 0 0 1.087.05l9.726-9.294a.375.375 0 0 1 .519 0l9.727 9.294a.75.75 0 0 0 1.059-.02c.288-.299.264-.791-.036-1.078Z"></path>
</svg>
        </a>
        <a href="../index.html#about" class="chrme">
        <svg width="36" height="36" fill="#ffffff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <path d="M12 2.625c-5.17 0-9.375 4.206-9.375 9.375 0 5.17 4.206 9.375 9.375 9.375 5.17 0 9.375-4.206 9.375-9.375 0-5.17-4.206-9.375-9.375-9.375Zm0 3.844a1.219 1.219 0 1 1 0 2.437 1.219 1.219 0 0 1 0-2.437Zm3 10.593H9.375v-1.5h2.063v-4.124h-1.5v-1.5h3v5.624H15v1.5Z"></path>
</svg>
        </a>
       </nav>
        
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
                    'description' => 'Learn HTML in 2022 In One Video. The Course In 37 Separated Videos <br><br> Creator: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">Elzero Web School</a><br> Time: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">1 Year Ago</a><br> About: <a href="https://en.wikipedia.org/wiki/Front-end_web_development" style="color:blue;text-decoration:none;">Front-End</a>',
                    'youtubeId' => 'qfPUMV9J5yw?si=wnprAt3rLHTdsvCE',
                    'likeNo' => '15k',
                    'dislikeNo' => '843',
                    'saveNo' => '+ 400k',
                ],
                [
                    'id' => 2,
                    'title' => '[Arabic] Learn CSS in 2022 In One Video',
                    'description' => 'Learn CSS in 2022 In One Video. The Course In 88 Separated Videos <br><br> Creator: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">Elzero Web School</a><br> Time: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">1 Year Ago</a><br> About: <a href="https://en.wikipedia.org/wiki/Front-end_web_development" style="color:blue;text-decoration:none;">Front-End</a>',
                    'youtubeId' => 'qyVkLebgfzY?si=bZpnaoGjOFjHqh6O',
                    'likeNo' => '+ 7k',
                    'dislikeNo' => '+ 400',
                    'saveNo' => '+ 300k',
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
                $likeNo = $selectedVideo['likeNo'];
                $dislikeNo = $selectedVideo['dislikeNo'];
                $saveNo = $selectedVideo['saveNo'];
                echo "<div class='video-player'>";
                echo "<iframe width='560' height='315' src='https://www.youtube.com/embed/$youtubeId' frameborder='0' allowfullscreen></iframe>";
                    echo "</div>";
                    echo "<h2>$videoTitle</h2>";
                
                    echo "<div class='buttons'>";
            echo "<button class='like-button' type='button'><i class='fas fa-thumbs-up'></i>$likeNo</button>";
            echo "<button class='dislike-button' type='button'><i class='fas fa-thumbs-down'></i>$dislikeNo</button>";
            echo "<button class='save-button' type='button'><i class='fas fa-eye'></i>$saveNo</button>";
            echo "</div>";
                    echo "<br>";
                    echo "<br>";
                echo "<div class='desc'>";
                echo "<p>$videoDescription</p>";
                echo "</div>";
                
            // Display the like, dislike, and save buttons
            

           
            } else {
                echo '<center><svg class="no_ex" width="46" height="46" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"> <path d="M17.344 17.719c1.354 1.102 2.156 2.16 2.156 4.031"></path> <path d="M6.656 17.719C5.302 18.82 4.5 19.878 4.5 21.75"></path> <path d="M18 9.75c1.354-1.102 1.5-2.628 1.5-4.5"></path> <path d="M6 9.656C4.646 8.554 4.5 7.122 4.5 5.25"></path> <path d="M21.75 13.508H18"></path> <path d="M6 13.508H2.25"></path> <path d="M12 9v12"></path> <path d="M12 21.003c-3.3 0-6-2.7-6-6V10.5C6 7.45 8.7 6 12 6s6 1.2 6 4.5v4.503c0 3.3-2.7 6-6 6Z"></path> <path d="M8.41 6.728a2.3 2.3 0 0 1-.16-.738 3.75 3.75 0 0 1 3.74-3.74h.02a3.75 3.75 0 0 1 3.74 3.74c-.01.23-.059.457-.146.67"></path> </svg></center>';
                echo "<br>";
                echo "<h3 style='justify-content:center;text-align:center;'>Video does not exist.</h3>";
            }
        } else {
            echo '<center><svg class="no_ex" width="46" height="46" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"> <path d="M17.344 17.719c1.354 1.102 2.156 2.16 2.156 4.031"></path> <path d="M6.656 17.719C5.302 18.82 4.5 19.878 4.5 21.75"></path> <path d="M18 9.75c1.354-1.102 1.5-2.628 1.5-4.5"></path> <path d="M6 9.656C4.646 8.554 4.5 7.122 4.5 5.25"></path> <path d="M21.75 13.508H18"></path> <path d="M6 13.508H2.25"></path> <path d="M12 9v12"></path> <path d="M12 21.003c-3.3 0-6-2.7-6-6V10.5C6 7.45 8.7 6 12 6s6 1.2 6 4.5v4.503c0 3.3-2.7 6-6 6Z"></path> <path d="M8.41 6.728a2.3 2.3 0 0 1-.16-.738 3.75 3.75 0 0 1 3.74-3.74h.02a3.75 3.75 0 0 1 3.74 3.74c-.01.23-.059.457-.146.67"></path> </svg></center>';
                echo "<br>";
                
            echo "<h3 style='justify-content:center;text-align:center;'>Invalid video ID.</h3>";
        }
        ?>
    </div>
    <script>
        function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
  document.getElementById("mySidenav").style.padding = "10px";
  document.getElementById("main").style.marginLeft = "250px";
  
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("mySidenav").style.padding = "0px";
  document.getElementById("main").style.marginLeft= "0";
}
    </script>
</body>
</html>