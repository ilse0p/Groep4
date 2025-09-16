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
  <title>Lorenzo von Matterhorn - Portofolio</title>
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

  <nav> </nav>
  <main></main>
  <main>
    <h1>Hoe kom je in contact met mij?</h1>
    <p>Hoi! Ik ben Lorenzo von Matterhorn,</p>
    <p>Mail me via: <a href="mailto:l.v.m@gmeel.com">Mail mij</a></p>
    <p>Of bel me op: 06-12345678</p>
    <p>Je kunt me ook vinden op LinkedIn: <a href="https://www.linkedin.com/in/lorenzovonmatterhorn" target="_blank">Mijn LinkedIn</a></p>
    <p>Of volg me op GitHub: <a href="https ://github.com/lorenzovonmatterhorn" target="_blank">Mijn GitHub</a></p>
    <p>Ik kijk ernaar uit om van je te horen!</p> 
  </main>

  <footer>
    © <?php print date('Y'); ?> Swarley & CO
  </footer>

</body>
</html>
