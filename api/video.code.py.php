<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="../imgs/skilldr-high-resolution-logo-black-transparent.png" type="image/x-icon">
    <title>PYTHON - Skilldr</title>
    <link rel="stylesheet" type="text/css" href="../css/video.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
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

        header {
            box-shadow: 5px 5px 10px #000000, -5px -5px 10px #000000;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }

        .video-item {
            background: #0f0f0f;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            color: white;
            margin: 10px;
            overflow: hidden;
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            width: 280px;
        }

        .video-item:hover {
            transform: translateY(-10px);
            background-color: #313535;
        }

        .video-item img {
            width: 100%;
        }

        .video-info {
            padding: 10px;
        }

        .video-info h3 {
            color: white;
            font-size: 1.2em;
            margin-bottom: 5px;
        }

        .video-info p {
            font-size: 0.9em;
        }

        @media screen and (max-width: 1023px) {
            .chrme {
                display: none;
            }

            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }

            .video-item {
                width: 100%;
            }

            .video-info h3 {
                font-size: 1em;
            }

            .video-info p {
                font-size: 0.8em;
            }
        }

        
    </style>
</head>
<body style="background-color: #001220;">
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
        <div class="chrme">
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
                <svg width="46" height="46" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 9h11a4 4 0 1 1 0 8h-1"></path>
                    <path d="M9 13 5 9l4-4"></path>
                </svg>
            </a>
        </div>
    </header>

    <br>
    <div class="container">
        <h1 style="text-decoration: underline;">" Python Course "</h1>
        <br>
        <div class="video-container">
            <?php
            $videos = [
                [
                    'id' => 1,
                    'title' => '<span style="color:red;">[Arabic]</span>: Learn Python in 2020 In 53 Videos',
                    'description' => 'A complete python course with 53 separated videos.',
                    'filename' => 'si=-XtxfWpuJS-h-re_&amp;list=PLknwEmKsW8OsG8dnisr_-2WGyx7lpgGEE',
                    'thumbnail' => 'https://i.ytimg.com/vi/Lm6irXWjWIo/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLDBevrv-_iS0yo_xsJ7_fAc0RPvBA'
                ],
                [
                    'id' => 2,
                    'title' => '<span style="color:red;">[Arabic]</span>: Learn Python in 2020 In 153 Videos',
                    'description' => 'A complete python course with 153 separated videos.',
                    'filename' => 'videoseries?si=WgF7EPmOZFmI3i3T&amp;list=PLDoPjvoNmBAyE_gei5d18qkfIe-Z8mocs',
                    'thumbnail' => 'https://i.ytimg.com/vi/mvZHDpCHphk/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLCnbMi_h1t-_fAQ2BEl0xZAhLGq1A'
                ],
                [
                    'id' => 3,
                    'title' => '<span style="color:blue;">[English]</span>: Learn Python in 2021 In One Video',
                    'description' => 'A complete python course with One Video.',
                    'filename' => 'XKHEtdqhLK8?si=LhVmWx3UEvy2d0Qf',
                    'thumbnail' => 'https://i.ytimg.com/vi/XKHEtdqhLK8/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLAwiaYg15KmdfuYUhMbmDWXAoam8Q'
                ],
                
            ];

            if (isset($_GET['query'])) {
                $searchQuery = $_GET['query'];
                $filteredVideos = array_filter($videos, function ($video) use ($searchQuery) {
                    return stripos($video['title'], $searchQuery) !== false || stripos($video['description'], $searchQuery) !== false;
                });

                foreach ($filteredVideos as $video) {
                    echo "<div class='video-item'>";
                    echo "<a href='play.code.py.php?id=" . $video['id'] . "'>";
                    echo "<img src='" . $video['thumbnail'] . "' alt='" . strip_tags($video['title']) . "'>";
                    echo "<div class='video-info'>";
                    echo "<h3>" . $video['title'] . "</h3>";
                    echo "<p>" . $video['description'] . "</p>";
                    echo "</div>";
                    echo "</a>";
                    echo "</div>";
                }
            } else {
                foreach ($videos as $video) {
                    echo "<div class='video-item'>";
                    echo "<a href='play.code.py.php?id=" . $video['id'] . "'>";
                    echo "<img src='" . $video['thumbnail'] . "' alt='" . strip_tags($video['title']) . "'>";
                    echo "<div class='video-info'>";
                    echo "<h3>" . $video['title'] . "</h3>";
                    echo "<p>" . $video['description'] . "</p>";
                    echo "</div>";
                    echo "</a>";
                    echo "</div>";
                }
            }
            ?>
        </div>
    </div>

    <br><br>
    <h6 style="font-weight: bold;color: white;text-align: center;color:white;">* <a href="../html/Privacy&Policy.html" style="color:white;">Privacy & Policy Terms</a> *</h6>
    <br>
    <footer style="background-color: rgb(0, 0, 0); color: rgb(255, 255, 255); padding: 20px; text-align: center;">
        <span style="font-weight: 700;color: #de5b00;">© 2023 Skilldr. Made by Felopateer ♡</span>
        <br>
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

    </footer>

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
