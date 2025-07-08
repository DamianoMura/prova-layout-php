<?php
//global variables
global $lastView;


function URLBuilder($view)
{


  if ($view === 'header' || $view === 'footer') {
    $url = realpath($_SERVER["DOCUMENT_ROOT"]) . "\\resources\\layout\\" . $view . ".php";
  } else {
    $url = realpath($_SERVER["DOCUMENT_ROOT"]) . "\\resources\\views\\" . $view . ".php";
  }
  include $url;
}

function changePath() {}
