<html>
        <head>
          <title>Church Search</title>
          <link rel="stylesheet" href="/css/style.css" media="screen" title="no title" charset="utf-8">
          <link rel="shortcut icon" href="/img/favicon.ico">
          <link href='https://fonts.googleapis.com/css?family=Ubuntu|Lora|Fugaz+One' rel='stylesheet' type='text/css'>
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <script src="http://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript" charset="utf-8"></script>
          <script src="/js/app.js"></script>
        </head>
        <body>
          <div class="head">
            <div class="logo">
              <a href="#"><h1>Church <span class="logoColor">Search</span></h1>
              <h4>Find a Match Made in Heaven</h4></a>
            </div>
            <div id="menubar">
              <div class="menuBtn">
                 <div></div>
                 <span></span>
                 <span></span>
                 <span></span>
              </div>
            </div>
          </div>
          <!-- mobile menu -->
          <div class="mobileMenu">
          	<h3>Menu <a href="#" class="mobileMenuToggle menuBtn">×</a></h3>
            	<ul>
                <!-- Put the Profile image below menu but before home (circle picture). Clickable to profile -->
                <!-- Symbols for each menu item -->
                <!--
                home = house
                search = magnifying glass
                profile =
                sign up =
                about =
                contact =
                -->
                  <a href="#"><li>Home</li></a>
                  <a href="#"><li>Search</li></a>
                  <a href="#"><li>Profile</li></a>
                  <a href="#"><li>Sign-Up</li></a>
                  <a href="#"><li>About</li></a>
                  <a href="#"><li>Contact</li></a>
                </ul>
            </div>

            <!-- link this form to the database search function -->
          <div class="searchBar">
            <form class="searchForm" action="index.html" method="post">
              <label for="searchField">Search</label>
              <input type="search" name="searchField">
              <!-- Find magnifying glass image, place it inside the search box using CSS(http://stackoverflow.com/questions/15314407/how-to-add-button-inside-input) -->
              <!-- <button type="button" name="searchButton"><img src="" alt="Magnifying glass as search button" /></button> -->
            </form>
          </div>

          <div class="wrapper">
