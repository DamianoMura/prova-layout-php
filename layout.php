<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . "\\pageHandler.php";
$path = 'index';

?>
<header>
  <?php

  URLBuilder('header');

  // include $path;
  ?>
</header>
<main id="views">
  <?php

  URLBuilder($path);

  // include $path;
  ?>
</main>
<footer>
  <?php
  URLBuilder('footer');

  ?>
</footer>