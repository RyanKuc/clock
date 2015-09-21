<?php
// set timezone, defaults to EST
$tz = $_GET['timezone'] ?: "America/New_York";
date_default_timezone_set($tz);
//set date & time & format
$today = date('h:i:s a l, F jS Y');
$hour = date("G");
//determine body class and img
if ($hour >= 5 AND $hour < 11){
  $bclass = "morning";
  $bimage ="php-morning.png";
}
elseif
  ($hour >= 11 AND $hour < 16){
    $bclass = "afternoon";
    $bimage ="php-afternoon.png";
  }
  elseif ($hour >= 16 AND $hour < 20){
    $bclass = "evening";
    $bimage ="php-evening.png";
  }
  else {
    $blass = "night";
    $bimage ="php-night.png";
  };
 ?>
