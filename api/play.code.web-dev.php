<!DOCTYPE html>
<html>
<head>
    <title>Web development Video - Skilldr</title>
    <link rel="stylesheet" type="text/css" href="../css/video.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
    body{
        color: white;
        background-color: #292929;
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
            margin-right: 10px;
            background-color: transparent;
            border: none;
            color: white;
            cursor: pointer;
        }

        .buttons button i {
            margin-right: 5px;
        }

        .buttons button:focus {
            outline: none;
        }

        .like-button i.fa-thumbs-up,
        .dislike-button i.fa-thumbs-down,
        .save-button i.fa-bookmark {
            color: #999;
        }

        .like-button.active i.fa-thumbs-up {
            color: blue;
        }

        .dislike-button.active i.fa-thumbs-down {
            color: red;
        }

        .save-button.active i.fa-bookmark {
            color: green;
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
        
    <a href="../index.html" class="logo">Skill<span style="color:orange;">dr.</span></a>
        <div class="menu">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
        </div>
        
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
                    'description' => 'Learn HTML in 2022 In One Video. The Course In 37 Separated Videos <br><br> Creator: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">Elzero Web School</a><br> Time: <a href="https://www.youtube.com/@ElzeroWebSchool" style="color:blue;text-decoration:none;">1 Year Ago</a>',
                    'youtubeId' => 'qfPUMV9J5yw?si=wnprAt3rLHTdsvCE'
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
                echo "<br>";
                echo "<div class='video-player'>";
                echo "<iframe width='560' height='315' src='https://www.youtube.com/embed/$youtubeId' frameborder='0' allowfullscreen></iframe>";
                    echo "</div>";
                    echo "<h2>$videoTitle</h2>";
                
                    echo "<div class='buttons'>";
            echo "<button class='like-button' type='button'><i class='fas fa-thumbs-up'></i> Like</button>";
            echo "<button class='dislike-button' type='button'><i class='fas fa-thumbs-down'></i> Dislike</button>";
            echo "<button class='save-button' type='button'><i class='fas fa-bookmark'></i> Save</button>";
            echo "</div>";
                    echo "<br>";
                    echo "<br>";
                echo "<div class='desc'>";
                echo "<p>$videoDescription</p>";
                echo "</div>";
                
            // Display the like, dislike, and save buttons
            

            // Process button clicks using JavaScript
            echo "<script>
                    const likeButton = document.querySelector('.like-button');
                    const dislikeButton = document.querySelector('.dislike-button');
                    const saveButton = document.querySelector('.save-button');
                    
                    likeButton.addEventListener('click', () => {
                        likeButton.classList.toggle('active');
                        dislikeButton.classList.remove('active');
                    });
                    
                    dislikeButton.addEventListener('click', () => {
                        dislikeButton.classList.toggle('active');
                        likeButton.classList.remove('active');
                    });
                    
                    saveButton.addEventListener('click', () => {
                        saveButton.classList.toggle('active');
                    });
                </script>";
            } else {
                echo "<p>Video does not exist.</p>";
            }
        } else {
            echo "<p>Invalid video ID.</p>";
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