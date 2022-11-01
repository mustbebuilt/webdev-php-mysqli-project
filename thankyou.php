<?php
require_once( "includes/config.php" );
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Thank You</title>
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
      <h2>Thank You</h2>
    </div>
    <section class="twoColumn">
      <div>
		  <table>
        <?php
		 foreach($_POST as $key => $value){
			 echo "<tr>";
			 echo "<td class=\"uc\">";
			 echo $key;
			 echo "</td>";
			 echo "<td>";
			 echo $value;
			 echo "</td>";
			 echo "<tr>";
		 }
		 ?>
		</table>
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
