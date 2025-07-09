<?php


function view($url)
{

  echo file_get_contents($_SERVER["DOCUMENT_ROOT"] . "/views//" . $url . ".php");
}

if (isset($_GET['view'])) {
  if (function_exists($_GET['action'])) {
    $_GET['action']($_GET['view']);
  }
} else {

  echo file_get_contents($_SERVER["DOCUMENT_ROOT"] . "/views/home.php");
}
// echo file_get_contents($url);
