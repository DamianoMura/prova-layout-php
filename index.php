<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JDWdev.it
  </title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/breakpoints.css">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-body-secondary">
      <div class="container-fluid">
        <a class="navbar-brand" href="?action=view&view=home">
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
              <a class="nav-link" aria-current="page"
                href="?action=view&view=about">about</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?action=view&view=projects">Projects</a>
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


  <main>
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/core/pageBuilder.php"; ?>
  </main>

  <footer>
    <div class="bg-black d-flex justify-space-around align-items-center text-white me-5 p-3 w-100">

      <div class="row align-items-center justify ">

        <div class="col-6">
          <div class="container">
            <div class="row">
              <div class="col-12 d-flex align-items-center justify-content-center">
                <img src="../../assets/img/logo-jdw-white.png" alt id="footer-brand-img">
                <span class="ms-3">JDWdev.it</span>
              </div>

              <div class="col-12 text-center">
                <span>
                  <\per codex ad astram>
                </span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-6">
          <div class="container">
            <div class="row">
              <div class="col-12 d-flex flex-column align-items-center">
                <span>hosted By</span>
                <a href="https://www.aruba.it" target="blank">
                  <img
                    src="../../assets/img/aruba.svg" alt id="logo-aruba">
                </a>
                <span>piano Linux Advanced</span>
              </div>

            </div>
          </div>

        </div>

      </div>




    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>

  </footer>
</body>

</html>