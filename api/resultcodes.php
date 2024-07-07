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
    border: white solid;
    background-color: black;
    padding: 10px;
    color: white;
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
        border: white solid;
        border-radius: 10px;
      }
      .buttonofsearch{
        border-radius: 10px;
      }
      
    </style>
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
                <li><a class="dropdown-item" href="../html/whiteboard.html">Whiteboard</a></li>
                <li><a class="dropdown-item" href="app.zip">Download</a></li>
                <li><a class="dropdown-item" href="../index.html#about">About Us</a></li>
                <li><a class="dropdown-item" href="../index.html#courses">Categories</a></li>
                <li><a class="dropdown-item" href="share.php">Share</a></li>
                <li><a class="dropdown-item" href="../html/userdata.html">Account</a></li>               
                <li><a class="dropdown-item" href="../html/redeemcode.html">Redeem Code</a></li>             
                <li><a class="dropdown-item" href="../html/community.html">Community (NEW)</a></li>             
            </ul>
            </div>
            
            <div class="dropdown-center">
            <button class=" nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Courses
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../html/code/intro.html">Programming</a></li>
                <li><a class="dropdown-item" href="../html/typefast/typefast.html">Typing Fast</a></li>
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
                  title="Search - '<?php echo $searchQuery;?>'"
                  name="query"
                  placeholder="Search Skilldr..."
                  id="search"
                  value="<?php echo $searchQuery;?>"
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
            echo '
            
            <h1 class="e404">404</h1>
            <h3 class="i404">Sorry! ... No Results Found.</h3>
            <h6 style="font-weight: bold;color: gray;text-align: center;"><a href="../index.html" style="color:gray;">Go Back Home ?</a> / <a href="../html/redeemcode.html" style="color:blue;">Win A Prize ?</a></h6>

            ';

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