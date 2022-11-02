<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Welcome</title>
<link rel="stylesheet" href="css/mobile.css" />
<link
      rel="stylesheet"
      href="css/desktop.css"
      media="only screen and (min-width : 720px)"
    />
</head>
<body>
<div class="headerContainer">
	<header>
        <div class="topBar">
          <div>
            <h1>SHU Films</h1>
          </div>
          <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
          </div>
        </div>
        <div>
          <nav class="mainNav">
            <menu>
              <li><a href="index.php">Home</a></li>
              <li><a href="catalogue.php">Catalogue</a></li>
              <li><a href="search.php">Search</a></li>
              <li><a href="contact.php">Contact Us</a></li>
            </menu>
          </nav>
        </div>
    </header>
</div>
<div class="mainContainer">
  <main>
    <div class="banner">
      <h2>Search Films</h2>
    </div>
    <section class="twoColumn">
      <div>
        <div class="searchForm">
          <form>
            <div>
              <label for="q">Search:</label>
              <input type="text" name="q">
            </div>
            <div>
              <input type="submit" value="Search for a Film">
            </div>
          </form>
        </div>
        <!-- Search Results Here -->
      </div>
<div class="sideBar">
        <h3>Featured Film</h3>
        <div> <img src="images/babadook.jpg" alt="Babadook" /> </div>
        <p>Info Here</p>
      </div>
    </section>
  </main>
</div>
<div class="footerContainer">
<footer>
      <nav>
        <menu>
          <li><a href="#">Terms</a></li>
          <li><a href="#">FAQ</a></li>
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Twitter</a></li>
        </menu>
      </nav>
      <div>&copy; 2022</div>
    </footer>
</div>
<script src="js/main.js"></script>
</body>
</html>
