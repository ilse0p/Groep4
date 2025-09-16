<?php
require_once ("config.php");
?>

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <script src="./javascript/script.js"></script>
  <title>Lorenzo von Matterhorn - Portfolio</title>
  
</head>
<body>
  <button class="dark-toggle" onclick="toggleDarkMode()"></button>
  <header>
    <h1><a href=".">Lorenzo von Matterhorn</a></h1>
    <p>Student Software Developer op het Vista College</p>
    <nav>
      <?php require_once("./mainmenu.php"); ?>
    </nav>
    <div class="mountains"></div>
  </header>

  <main>
    <h1>Welkom op mijn portfolio!</h1>
  </main>

  <<footer>
    © <?php print date('Y'); ?> Swarley & CO
  </footer>

</body>
</html>
