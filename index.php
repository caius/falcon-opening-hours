<?php

  date_default_timezone_set("Europe/London");

  $day = date("D");
  $hour = date("G");
  $min = date("i");
  $open = "Open";
  $closed = "Closed";
  $status = $closed;

  switch ($day) {
    case 'Fri':
      if (($hour >= 12 && $hour < 15) || ($hour >= 17 && $hour <= 23)) {
        $status = $open;
      }
      break;
    
    case 'Sat':
      if ($hour >= 12 && $hour <= 23) {
        $status = $open;
      }
      break;
    
    case 'Sun':
      if ($hour >= 12 && $hour <= 22) {
        $status = $open;
      }
      break;
    
    default:
      if (($hour >= 12 && $hour < 15) || (($hour >= 17 && $min >= 30) && $hour <= 23)) {
        $status = $open;
      }
      break;
  }

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Falcon is <?php echo $status ?>!</title>
    <style type="text/css" media="screen">
      body {
        text-align: center;
      }
      h1 {
        margin: auto;
        margin-top: 15%;
        font-size: 6em;
      }
      p {
        margin-top: 4em;
      }
    </style>
  </head>
  <body>

    <h1>Falcon is <strong><?php echo $status ?></strong>!</h1>

    <p><a href="/falcon/opening_hours.jpg">Opening hours</a></p>

  </body>
</html>
