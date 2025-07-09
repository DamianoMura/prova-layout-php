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
  //findDir();
}
// echo file_get_contents($url);
function findDir()
{
  $arrFiles = array();
  $dirPath = $_SERVER["DOCUMENT_ROOT"] . "/views";

  // Method 3: Using opendir(), readdir(), and closedir()
  if ($handle = opendir($dirPath)) {
    echo "--------------------------------<br>";
    echo "Method 3: Using readdir()<br>";
    echo "--------------------------------<br>";
    while (false !== ($entry = readdir($handle))) {
      if ($entry != "." && $entry != ".." && is_file($dirPath . '/' . $entry)) {
        echo $entry . "<br>";
      }
    }
    closedir($handle);
  } else {
    echo "Failed to open directory.";
  }
}
