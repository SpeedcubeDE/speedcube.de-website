<?php
$u = $_GET['u'];
$u = str_replace(array("\\",'/'),'',$u);
$uu = 'druck/'.$u;

$exists = strlen($u) > 2 && file_exists($uu);

?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=windows-1250">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <title>Druckansicht - <?php echo $u; ?></title>
  <style type="text/css">

  BODY {font-family:Arial, Helvetica, sans-serif; color:#000000; margin: 10px 50px;}
  A { color:#3366CC; text-decoration:none;}
  A:hover { color:#000000; text-decoration:underline;}
  strong {font-weight:bold;}
  code {font-family: 'Arial Bold', Arial; font-size: 14px;}
  
  </style>
  </head>
  <body>
  <div style="position: absolute; left: 80%;" onclick="this.style.display='none'; this.style.left='0px';"><img src="images/websitelogo2.png" alt="Speedcube.de" title="Speedcube.de" border="0" /></div><br /><?php

  if ($exists)
    require_once($uu);
    
  else
    echo 'Die angegebene Seite wurde leider nicht gefunden!<br /><br /><a href="http://www.speedcube.de">Zur Hauptseite!</a>';

  ?></body>
</html><?php

if ($exists) {
?>
<small><br /><br /><a href="<?php echo $u; ?>">&raquo; Zur&uuml;ck zur normalen Ansicht</a></small>
<?php
}
?>