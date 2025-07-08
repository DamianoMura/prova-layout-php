<?php
//global variables



function URLBuilder($view)
{
  $url = realpath($_SERVER["DOCUMENT_ROOT"]) . "\\resources\\views\\" . $view . ".php";

  include $url;
}
