<?php


function view($url)
{

  include $_SERVER["DOCUMENT_ROOT"] . "/views/" . $url . ".php";
}

if (isset($_GET['view'])) {


  $pageFound = false;
  if (is_dir($_SERVER["DOCUMENT_ROOT"] . "/views")) {
    if ($dh = opendir($_SERVER["DOCUMENT_ROOT"] . "/views")) {
      while (($file = readdir($dh)) !== false) {
        if ($file !== "." && $file !== "..") {
          $exploded = explode(".", $file);
          if (sizeof($exploded) > 1)
            if ($exploded[0] == $_GET['view'])
              $pageFound = true;
        }
      }
      if ($pageFound == true)
        include $_SERVER["DOCUMENT_ROOT"] . "/views/" . $_GET['view'] . ".php";
      else
        include $_SERVER["DOCUMENT_ROOT"] . "/views/error.php";
      closedir($dh);
    }
  }
} else {

  include  $_SERVER["DOCUMENT_ROOT"] . "/views/home.php";
  //findDir();
}
// echo file_get_contents($url);
function findDir()
{



  // Open a directory, and read its contents




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
