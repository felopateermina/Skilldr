<?php
// Sample data
$products = [
    [
        'name' => 'programming html css js javascript python',
        'price' => "How To Learn Programming With Love ?",
        'category' => 'Programming',
        'time' => "2/11/2023",
        'id' => "../html/code/intro.html",
    ],
    [
        'name' => 'learn javascript course of javascript i need to learn javascript js',
        'price' => "Learn Javascript with love in Arabic and English",
        'category' => 'Programming',
        'time' => "15/12/2023",
        'id' => "play.code.web-dev.php?id=3",
    ],
    [
        'name' => 'learn html course of html i need to learn html',
        'price' => "Learn HTML with love in Arabic and English",
        'category' => 'Programming',
        'time' => "15/12/2023",
        'id' => "play.code.web-dev.php?id=1",
    ],
    [
        'name' => 'learn css course of css i need to learn css',
        'price' => "Learn CSS with love in Arabic and English",
        'category' => 'Programming',
        'time' => "15/12/2023",
        'id' => "play.code.web-dev.php?id=2",
    ],
    [
        'name' => 'learn web development course of web development i need to learn web development front end back end front-end back-end html css js',
        'price' => "Learn Web Development with love in Arabic and English",
        'category' => 'Programming',
        'time' => "15/12/2023",
        'id' => "video.code.web-dev.php",
    ],
    
    // ... Add more products as needed
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
    <link rel="stylesheet" href="../css/res.css">
    <link rel="stylesheet" href="../bootstrap/css/all.min.css" />
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
    <link rel="shortcut icon" href="../imgs/skilldr-high-resolution-logo-black-transparent.png" type="image/x-icon">
</head>
<body style="background-color: #001220;">
 
<nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="../index.html">
          <!-- <img
            class="imglogo"
            src="../imgs/images.png"
            alt="imgs/download.png"
          /> -->
          <span style="font-size: 1.6em;color: white;font-weight: 900;">
              Skill<span style="color: #de5b00;">dr.</span>
            </span>
        </a>
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
                <li><a class="dropdown-item" href="html/whiteboard.html">Whiteboard</a></li>
                <li><a class="dropdown-item" href="app.zip">Download</a></li>
                <li><a class="dropdown-item" href="#about">About Us</a></li>
                <li><a class="dropdown-item" href="#courses">Categories</a></li>
                <li><a class="dropdown-item" href="api/share.php">Share The Website</a></li>
                <!-- <li><a class="dropdown-item" href="../html/search_skilldr.html">(Beta) Skilldr Engine</a></li> -->

            </ul>
            </div>
            
            <div class="dropdown-center">
            <button class=" nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Courses
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../html/code/intro.html">Programming</a></li>
                </ul>
            </div>
           
          </ul>        
        </div>
       
      </div>
    
 
    </nav>
    <br>
    <div class="search_bar">
      <form method="get" action="result.php" style="display: flex; justify-content: center" class="search_form">
                <input
                  type="search"
                  title="Search - '<?php echo $searchQuery;?>'"
                  name="query"
                  placeholder="Search Skilldr By Categories ID Or A Code Or Even Name..."
                  id="search"
                  value="<?php echo $searchQuery;?>"
                />
                <button title="Search"  class="buttonofsearch" id="opensearchresults">
                  <svg class="svgg" width="46" height="46" class="thde" fill="#000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="m21.75 20.063-5.816-5.818a7.523 7.523 0 0 0 1.44-4.433c0-4.17-3.393-7.562-7.562-7.562-4.17 0-7.562 3.392-7.562 7.562s3.392 7.562 7.562 7.562a7.523 7.523 0 0 0 4.433-1.44l5.818 5.816 1.687-1.688ZM9.812 14.986a5.174 5.174 0 1 1-.002-10.35 5.174 5.174 0 0 1 0 10.349Z"></path>
                  </svg>
                </button>
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
            echo '
            
            <h1 class="e404">404</h1>
            <h3 class="i404">No Results Found</h3>

            ';

        }
        ?>
    </div>


    <script src="../bootstrap/js/all.min.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
