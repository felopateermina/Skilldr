<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="../imgs/skilldr-high-resolution-logo-black-transparent.png" type="image/x-icon">

    <title>Web development - Skilldr</title>
    <link rel="stylesheet" type="text/css" href="../css/video.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* CSS styles */
        body {
            color: white;
            font-family: system-ui;
            background-color: #292929;
        }

        header {
            display: flex;
            justify-content: space-between;
            padding: 10px 20px;
            width: 100%;
            align-items: center;
        }

        input {
            border: 2px white solid;
            background-color: black;
            color: white;
            padding: 10px;
            border-radius: 10px;
            outline: none;
            width: 100%;
        }
        .video-item{
            transition: .3s ease;
        }
.video-item:hover{
    transform:scale(1.02);
}
        .logo {
            text-decoration: none;
            color: white;
            font-size: 1.8em;
            font-weight: 900;
        }

        nav a {
            text-decoration: none;
            color: white;
        }

        * {
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

            .desc {
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
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }


        @media screen and (max-width: 1023px) {
   .chrme{
    display: none;
   }
}
    </style>
</head>
<body style="
 background-color: #001220;
">
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <br><br><br>
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
              <a href="../html/code/intro.html" style="color: #de5b00;font-size: 1.5em;">
              <svg width="46" height="46" fill="#de5b00" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
       <path d="M20.14 4h-9.77a3 3 0 0 0-2 .78l-.1.11-6 7.48a1 1 0 0 0 .11 1.37l6 5.48a3 3 0 0 0 2 .78h9.77A1.84 1.84 0 0 0 22 18.18V5.82A1.84 1.84 0 0 0 20.14 4Zm-3.43 9.29a1.002 1.002 0 0 1-.326 1.639 1 1 0 0 1-1.094-.219L14 13.41l-1.29 1.3a1.002 1.002 0 0 1-1.64-.325 1 1 0 0 1 .22-1.095l1.3-1.29-1.3-1.29a1.004 1.004 0 1 1 1.42-1.42l1.29 1.3 1.29-1.3a1.004 1.004 0 0 1 1.42 1.42L15.41 12l1.3 1.29Z"></path>
      </svg>
              </a>
           </div>
        </header>


    <div class="container">
    <h1 style="text-decoration:underline;">" Web Development "</h1>
        <div class="video-container">
            <?php
            $videos = [
                [
                    'id' => 1,
                    'title' => '[Arabic] Learn HTML in 2022 In One Video',
                    'description' => 'Learn HTML in 2022 In One Video. The Course In 37 Separated Videos',
                    'filename' => 'qfPUMV9J5yw?si=wnprAt3rLHTdsvCE'
                ],
                [
                    'id' => 2,
                    'title' => '[Arabic] Learn CSS in 2022 In One Video',
                    'description' => 'Learn CSS in 2022 In One Video. The Course In 88 Separated Videos',
                    'filename' => 'qyVkLebgfzY?si=bZpnaoGjOFjHqh6O'
                ],
                // Add more videos as needed
            ];

            // Check if a search query is provided
            if (isset($_GET['query'])) {
                $searchQuery = $_GET['query'];

                // Filter the videos based on the search query
                $filteredVideos = array_filter($videos, function ($video) use ($searchQuery) {
                    return stripos($video['title'], $searchQuery) !== false || stripos($video['description'], $searchQuery) !== false;
                });

                // Display the filtered videos
                foreach ($filteredVideos as $video) {
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
            } else {
                // Display all videos if no search query is provided
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
            }
            ?>
        </div>
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