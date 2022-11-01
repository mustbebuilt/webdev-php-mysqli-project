<?php
$randFilmQuery = "SELECT * FROM Films ORDER BY RAND() LIMIT 1";
$resultRandFilm = $mysqli->query( $randFilmQuery );
$randFilmObj = $resultRandFilm->fetch_object();
?>

<div class="sideBar">
        <h3><?php echo $randFilmObj->filmTitle ;?></h3>
        <div> <img src="images/<?php echo $randFilmObj->filmImage ;?>" alt="<?php echo $randFilmObj->filmTitle ;?>" /> </div>
        <p> <?php echo $randFilmObj->filmDescription ;?></p>
      </div>