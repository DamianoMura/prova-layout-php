<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . "\\pageHandler.php";
$path = null;


if ($path == null) {
  $path = 'welcome';
}
function URLBuilder($view)
{
  $url = realpath($_SERVER["DOCUMENT_ROOT"]) . "\\resources\\views\\" . $view . ".php";

  return $url;
}
function showView($url)
{
  include $url;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JDWdev.it</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

  <header>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" onclick="">
          <div class="jdw-nav-brand">
            <img src="../../assets/img/logo-jdw-black.png" alt id="brand-img">
            <span id="brand-name" class=" d-none d-sm-flex">JDWdev.it</span>
          </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" onclick="URLBuilder('about')">About</a>
            </li>
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li> -->
          </ul>

        </div>
      </div>
    </nav>
  </header>
  <main id="views">
    <?php
    include showView('projects');
    ?>

  </main>
  <footer>
    <div class="bg-black d-flex justify-space-around align-items-center text-white">
      <div class="foot-brand p-3">
        <img src="../../assets/img/logo-jdw-white.png" alt id="brand-img">
        <span id="brand-name">JDWdev.it</span>
        <p class="fs-06">sito interamente sviluppato a mano<br> senza alcun
          framework</p>
      </div>
      <div class="host">
        <span id="brand-name">hosted By</span>
        <a href="https://www.aruba.it" target="blank">
          <img
            src="../../assets/img/aruba.svg" alt id="logo-aruba">
        </a>
        <p class="fs-06">piano Linux Advanced</p>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  <script src="assets/js/script.js"></script>
</body>

</html>