<?php
require_once( "includes/config.php" );
//check for search value
$searchQuery = $_GET[ 'q' ] ?? null;
if ( is_null( $searchQuery ) || empty( $searchQuery ) ) {
  $validSearch = false;
} else {
  $validSearch = true;
  $searchQuery = "%" . $searchQuery . "%";
  // query to get film by filmID
  $stmt = $mysqli->prepare( "SELECT * FROM Films WHERE filmTitle LIKE ?" );
  $stmt->bind_param( 's', $searchQuery );
  $stmt->execute();
  // get number of results
  //$stmt->store_result();
  //$numRows = $stmt->num_rows;
  $result = $stmt->get_result();

}
?>
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
<?php include("includes/header.php")?>
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
        <?php
        if ( $validSearch ) {
          echo "<p>Your search found {$result->num_rows} result(s)";
          while ( $obj = $result->fetch_object() ) {
            echo "<h3>{$obj->filmTitle}</h3>";
            echo "<p><a href=\"film-details.php?filmID={$obj->filmID}\">More Details</a></p>";
          }
        } else {
          echo "<p>Search for a film.</p>";
        }
        ?>
      </div>
		<?php
	    include("includes/sidebar.php");
		?>
    </section>
  </main>
</div>
<?php include("includes/footer.php")?>
<script src="js/main.js"></script>
</body>
</html>
