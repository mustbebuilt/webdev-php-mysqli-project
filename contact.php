<?php
require_once( "includes/config.php" );
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Contact Us</title>
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
      <h2>Contact Us</h2>
    </div>
    <section class="twoColumn">
      <div>
        <form action="thankyou.php" method="post">
          <div>
            <label for="firstname">First name</label>
            <input type="text" name="firstname" id="firstname" placeholder="Your First Name"/>
          </div>
          <div>
            <label for="surname">Surname</label>
            <input type="text" name="surname" id="surname" placeholder="Your Surname"/>
          </div>
          <div>
            <label for="Email">Email</label>
            <input type="email" name="Email" id="Email" required />
          </div>
          <div>
            <label for="Tel">Contact Telephone</label>
            <input type="tel" name="Tel" id="Tel" required />
          </div>
          <div>
            <label for="marketing">How did you hear about us?</label>
            <select name="marketing" id="marketing">
              <option value="Web">Web</option>
              <option value="Friend">Friend</option>
              <option value="Other">Other</option>
            </select>
          </div>
          <div>
            <input type="submit" value="Send" class="sendButton" />
          </div>
        </form>
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
