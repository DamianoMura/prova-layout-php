<?php


function view($url)
{

  include $_SERVER["DOCUMENT_ROOT"]."/views/" . $url . ".php";
}

if (isset($_GET['view'])) {
  if (function_exists($_GET['action'])) {
    $_GET['action']($_GET['view']);
  }
} else {

  include  $_SERVER["DOCUMENT_ROOT"]."/views/home.php";
  //findDir();
}
// echo file_get_contents($url);
function findDir()
{

  $arrFiles = array();
  $dirPath = "/views";
  $fullPath = $_SERVER["DOCUMENT_ROOT"]. $dirPath;


  // Open a directory, and read its contents
  if (is_dir($fullPath)) {
    if ($dh = opendir($fullPath)) {
      while (($file = readdir($dh)) !== false) {
        echo "filename:" . $file . "<br>";
        $arrFiles[sizeof($arrFiles)] = $file;
        echo  $arrFiles[sizeof($arrFiles) - 1] . "<br> ";
      }
      closedir($dh);
    }
  }



  // Method 3: Using opendir(), readdir(), and closedir()
  // if ($handle = opendir($fullPath)) {
  //   if (false !== ($entry = readdir($handle))) {
  //   }
  //   while (false !== ($entry = readdir($handle))) {
  //     if ($entry != "." && $entry != ".." && is_file($fullPath . '/' . $entry)) {
  //       echo $dirPath . '/' . $entry . "<br>";
  //       $arrFiles . array_push($entry);
  //     }
  //   }
  //   closedir($handle);
  // } else {
  //   echo "Failed to open directory.";
  // }
}

function ciao()
{
  echo "ciao";
}