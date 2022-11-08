<?php
require_once("includes/config.php");
// query to get film by filmID
$getFilmID = $_GET["filmID"];
$stmt = $mysqli->prepare( "SELECT * FROM Films WHERE filmID = ?" );
$stmt->bind_param( 'i', $getFilmID );
$stmt->execute();
$result = $stmt->get_result();
$obj = $result->fetch_object();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Film Title Here</title>
<link rel="stylesheet" href="css/mobile.css" />
<link
      rel="stylesheet"
      href="css/desktop.css"
      media="only screen and (min-width : 720px)"
    />
</head>
<body>
<?php
include("includes/header.php");
?>
<div class="mainContainer">
  <main>
    <div class="banner">
      <h2>Film Title Here</h2>
    </div>
    <section class="twoColumn">
    <div>
        <?php
        echo "<div class=\"filmDetails\">";
        echo "<div>";
        echo "<img src=\"images/{$obj->filmImage}\" alt=\"{$obj->filmTitle}\">";
        echo "</div>";
        echo "<div>";
        echo "<p>{$obj->filmDescription}</p>";
        echo "</div>";
        echo "</div>";
        ?>
      </div>
<div class="sideBar">
        <h3>Featured Film</h3>
        <div> <img src="images/babadook.jpg" alt="Babadook" /> </div>
        <p>Info Here</p>
      </div>
    </section>
  </main>
</div>
<?php
// add Footer
?>
<script src="js/main.js"></script>
</body>
</html>
