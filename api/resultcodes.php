<?php
$products = [
    [
        'name' => '𝒟𝒢𝒥𝒦𝒪𝒯𝒶𝒵',
        'price' => "CAR SERVICES WEBSITE TEMPLATE",
        'category' => '🎉 Code Prize 🎉',
        'time' => "15/12/2023",
        'id' => "https://easyupload.io/zlxhgo",
    ],
];

// Retrieve the search query
@$searchQuery = strtolower($_GET['query']);

// Perform the search
$results = array_filter($products, function ($product) use ($searchQuery) {
    return strpos($product['name'], $searchQuery) !== false;
});



?>
<!DOCTYPE html>
<html>
<head>
    <title>Skilldr - <?php echo $searchQuery;?> - Skilldr</title>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/all.min.css" />
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
    <style>
            

        
            @font-face {
    font-family: 'Font';
    src: url('../fonts/font.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
  }
      .content {
      max-width: 1400px; /* Max width for large screens */
      width: 100%; /* Full width up to the max width */
      margin: 0 auto; /* Center the container horizontally */
      padding: 20px;
      background-color: #000c15; 
      border-radius: 10px;

    }
    .logo{
      font-family: 'Font';
      font-size: 30px;
      color: white;
      font-weight: bold;
      letter-spacing: 2px;
      text-decoration:none;
    }
      *{
  scroll-behavior: smooth;
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}
body{
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
.result {
    border: 1px solid #ccc;
    padding: 10px;
    margin-bottom: 10px;
    background-color: #fff;
    border-radius: 10px;
    width: 90%;
    justify-content: center;
    align-items: center;
    margin: auto;

}

.result h3 {
    margin: 0;
    font-size: 18px;
}

.result p {
    font-weight: bold;
    margin: 0;
    font-size: 14px;
    color: #595959;
    margin-top: 5px;
}.main{
    color: #de6b00;
    text-decoration: none;
    font-weight: bold;
}.main:hover{
    text-decoration: underline;  
}

:root {
    --dark-color: #1d2a35;
    --green-color: #33d1cc;
    --red-color: #ff3150;
    --yellow-color: #ffc400;
    --section-color: #eff7fa;
    --main-color-group: #de5b00;
  }
  
  .main-btn {
    background-color: var(--red-color);
    color: var(--yellow-color);
    padding: 0.5rem 1rem;
  }
  .main-btn:hover {
    color: var(--yellow-color);
  }
  .main-title::after {
    content: "";
    width: 120px;
    height: 2px;
    background-color: var(--green-color);
    position: absolute;
    bottom: -20px;
    left: 50%;
    transform: translateX(-50%);
  }
  /* Start Navbar */
  .navbar {
    background-color: #001220;
    justify-content: space-between;
  }
  .navbar .navbar-nav .nav-link {
    color: white;
    font-weight: 700;
    font-size: 1.1em;
  }
  .navbar .navbar-nav .nav-link.active,
  .navbar .navbar-nav .nav-link:focus,
  .navbar .navbar-nav .nav-link:hover {
    color: var(--main-color-group);
  }
  .navbar .search {
    border-left: 1px solid var(--green-color);
  }
  .navbar .search svg {
    color: var(--green-color);
  }
  .navbar .navbar-toggler {
    color: white;
    font-size: 25px;
    border-color: white;
  }
  .navbar .navbar-toggler:focus {
    box-shadow: none;
  }
  .navbar .navbar-toggler[aria-expanded="true"] {
    border-color: var(--main-color-group);
  }
  .imglogo {
    vertical-align: middle;
    width: 55px;
    height: 55px;
    border-radius: 50%;
    transition: 0.5s ease;
  }
  .imglogo:hover {
    transform: scale(1.1);
  }
  
  #login {
    color: white;
    font-weight: 700;
    background-color: var(--dark-color);
    padding: 4px;
    padding-left: 20px;
    border: #de5b00 solid;
    padding-right: 20px;
    margin-left: 20px;
    transform-origin: right;
    align-items: center;
    display: flex;
    text-align: center;
  }
  #gtprm {
    color: white;
    font-weight: 700;
    background-color: #00dbde;
    background-image: linear-gradient(90deg, #00dbde 0%, #fc00ff 100%);
    padding: 4px;
    padding-left: 20px;
    padding-right: 20px;
    margin-left: 20px;
    transform-origin: right;
    align-items: center;
    display: flex;
  }
  .h1al,
  .h1al2 {
    color: var(--main-color-group);
  }
  #login:hover {
    background-color: var(--main-color-group);
  }
input{
    outline: none;
    border: none;
    background-color: white;
    padding: 10px;
    color: #de5b00;
    border-radius: 0px;
    width: 80%;
    font-size: 1.1em;
    font-weight: bold;
}

.buttonofsearch {
    background-color: #de5b00;
    outline: none;
    border: #19283f solid;
  }
  .e404{
    color: #de5b00;font-size: 7em;text-align: center;
  }.i404{
    color: white;text-align: center;
  }


      input{
        border: none;
        border-radius: 10px;
      }
      .buttonofsearch{
        border-radius: 10px;
      }
      .itslogo{
    width: 90%;height: 7vh;
}
@media screen and (max-width:1023px) {
    .itslogo{
        width: 90%;height: 5vh;
    }
}
.navbar{
          box-shadow:  5px 5px 10px #000000,
             -5px -5px 10px #000000;
             background-color: #000c15; 

        } 
        @media screen and (max-width:1023px){
.content{
  padding: 0px;
}
}
    </style>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />

    <link
      rel="shortcut icon"
      href="../imgs/logo.png"
      type="image/x-icon"
    />
  </head>
<body style="background-color: #000c15;">
 <div class="content" style="height:100vh;">
<nav class="navbar navbar-expand-lg">
      <div class="container">
         
      
      <a class="logo"  href="../index.html">

SKILLDR</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#main"
          aria-controls="main"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fa-solid fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="main">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
         
          <a href="../index.html" class="nav-link">Home</a>
            <div class="dropdown-center">
              <button class=" nav-link dropdown-toggle " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Menu
              </button>
              <ul class="dropdown-menu">
               
              <li><a style="font-weight: bold;" class="dropdown-item" href="../html/whiteboard.html"><i class="fas fa-chalkboard-teacher"></i> Whiteboard</a></li>
                <li><a style="font-weight: bold;" class="dropdown-item" href="../index.html#about"><i class="fas fa-question-circle"></i> About Us</a></li>
                <li><a style="font-weight: bold;" class="dropdown-item" href="../html/courses.html"><i class="fas fa-video"></i> Courses</a></li>
                <li><a style="font-weight: bold;" class="dropdown-item" href="share.php"><i class="fas fa-share"></i> Share</a></li>
                <li><a style="font-weight: bold;" class="dropdown-item" href="../html/userdata.html"><i class="fas fa-user"></i> Account</a></li>
                <li><a style="font-weight: bold;" class="dropdown-item" href="../html/redeemcode.html"><i class="fas fa-gift"></i> Redeem Code</a></li>
                <li><a style="font-weight: bold;" class="dropdown-item" href="../html/community.html"><i class="fas fa-comments"></i> Community</a></li>
                <li><a style="font-weight: bold;" class="dropdown-item" href="../html/studio.html"><i class="fa-brands fa-studiovinari"></i> Studio</a></li>
                <li><a style="font-weight: bold;" class="dropdown-item" href="https://skilldrblog.blogspot.com"><i class="fas fa-blog"></i> Blog</a></li>

              </ul>
            </div>
            
            <div class="dropdown-center">
            <button class=" nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Courses
              </button>
              <ul class="dropdown-menu">
              <li><a style="font-weight: bold;" class="dropdown-item" href="../html/code/intro.html"><i class="fas fa-code"></i> Programming</a></li>
                <li><a style="font-weight: bold;" class="dropdown-item" href="../html/typefast/typefast.html"><i class="fas fa-keyboard"></i> Typing Fast</a></li>
                <li><a style="font-weight: bold;" class="dropdown-item" href="../html/courses.html"><i class="fas fa-search"></i> More...</a></li>
                 </ul>
            </div>
           
          </ul>        
        </div>
       
      </div>
    
 
    </nav>
    <br>
    <div class="search_bar">
      <form method="get" action="resultcodes.php" style="display: flex; justify-content: center" class="search_form">
                <input
                  type="search"
                  title="Code - '<?php echo $searchQuery;?>'"
                  name="query"
                  placeholder="Redeem Code..."
                  id="search"
                  value="<?php echo $searchQuery;?>"
                  required
                />

</form>
<br><br>
      </div>
    <div id="results">
    <?php
        if (!empty($results)) {
            foreach ($results as $result) {
                $link = $result['id']; // Custom link with product ID
                echo '<div class="result">';
                echo '<h3><a href="' . $link . '" class="main">' . $result['price'] . '</a></h3>';
                echo '<p>Category: ' . $result['category'] . '</p>';
                echo '<p>Time: ' . $result['time'] . '</p>';
                echo '</div>';
                echo "<br>";
            }
        } else {
          echo "
            
          <h1 class='e404'>404</h1>
          <h3 class='i404' style='font-weight:bold;'>Sorry, Nothing Like That!</h3>
            <h5 style='font-weight:bold;text-align:center;color:gray;padding:5px;'>If you think it's error or something, <a href='../html/report.html'>Tell Us</a></h2>
          ";
        }
        ?>
    </div>

<script>
if(window.location.href == "https://skilldr.vercel.app/api/resultcodes.php?query=" || window.location.href == "https://skilldr.vercel.app/api/resultcodes.php?query=+" || window.location.href == "https://skilldr.vercel.app/api/resultcodes.php?query" || window.location.href == "https://skilldr.vercel.app/api/resultcodes.php"){
  window.location.href = "https://skilldr.vercel.app/api/resultcodes.php?query=Sorry, Nothing To See...!";
}
</script>
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

   <script src="../bootstrap/js/all.min.js"></script>
   <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
