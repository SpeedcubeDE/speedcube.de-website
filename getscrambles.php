<?php

// require_once('ocs/functions_scramble.php');
// vom alten OCS kopiert, da das dort gar nicht mehr liegt
require_once('ocs_functions_scramble.php');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
<title>Scramblegenerator</title>
<style type="text/css">
BODY  {font-family:Arial, Helvetica, sans-serif;font-size:13px; color: #333333;}
TABLE {margin:0px; padding:0px; border: 0px; border-bottom: 1px solid #999999;}
TD    {margin:0px; padding:2px; border: 1px solid #999999; border-right:0px; border-bottom:0px;}
</style> 
</head>
<body>

<?php

@$type = $_REQUEST['type'];
@$num  = (int)$_REQUEST['num'];

if (empty($type)) $type = '3x3x3';
if (empty($num)) $num  = 100;

echo '<div style="float:right; font-size:12px;">(<a href="getscrambles.php?type='.$type.'&num='.$num.'&count='.$_REQUEST['count'].'">Neue Scrambles</a>) (<a href="scrambles/">Zur&uuml;ck</a>)</div><span style="font-size:20px; text-decoration:underline;">Scrambles f&uuml;r: '.$type.' - '.date("d.m.Y").'</span>';
echo '<br /><table cellspacing="0" cellpadding="0">';
echo '<tr>';
if ($_REQUEST['count'] == 1) echo '<th>#</th>';
echo '<th>Scramble</th><th style="width:80px;">Zeit</th><th>Kommentar</th></tr>';

for ($i=1; $i<=$num; $i++) {
    echo '<tr>';
    if ($_REQUEST['count'] == 1) echo '<td>'.$i.'</td>';
    echo '<td>'.get_new_scramble($type).'</td><td></td><td></td></tr>';
}

echo '</table>';

?>

</body>
</html>