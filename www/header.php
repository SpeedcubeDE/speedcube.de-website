<?php

date_default_timezone_set("Europe/Berlin");

// Homepage offline (1) oder online (0)
$offline = 0;
// Nachricht, wenn die Homepage offline ist
$offline_message = "Die Website wird gerade auf Version 1.43 geupdates, bitte hab ein paar Minuten Geduld!";

if (isset($_GET['background'])) {
	$bg_saved = setcookie('speedcube_de_background',$_GET['background']);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>Speedcube.de - <?php $sitename = explode('/',str_replace('_',' ',substr($_SERVER['SCRIPT_NAME'],1,strlen($_SERVER['SCRIPT_NAME'])-5))); echo ucfirst($sitename[count($sitename)-1]); ?> - Alles übers Speedcubing und den Rubiks Cube - Lösungen, Forum, Tricks, Quellen, ...</title>
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
<meta name="description" content="Alles über das Speedcubing (Zauberwürfel möglichst schnell lösen auf Zeit). Lern hier, wie du den Rubiks Cube löst! Lösungen, Forum, Tricks und vieles mehr. z.B. Informationen und Tutorials zu der LbL- (Anfänger-) und der Fridrich Methode." />
<style type="text/css">

BODY {margin:0; padding:0; background: #000000 url(images/<?php
if (isset($_COOKIE['speedcube_de_background'])) {
	echo $_COOKIE['speedcube_de_background'];
} else {
	echo 'bg.gif';
}
?>) fixed; font-family:Arial, Helvetica, sans-serif; color:#FFFFFF;}
A { color:#CC9933; text-decoration:none;}
A:hover { color:#FFFFFF; text-decoration:underline;}
strong {font-weight:bold;}
#heaad ul {padding-left:20px; margin-left:0px; border:1px solid #454545;}
#heaad li {font-size:12px;}

.link_table {text-align:left;}
.link_table TH { font-weight:bold; text-align:left; border:none; border-bottom:1px solid #454545;}
.link_table TD { background: none; border:1px solid #454545; border-top:none; font-size:12px;}
.link_table UL {margin-top:0; margin-bottom:0; padding-top:0; padding-bottom:0; margin-left:0px; padding-left:20px;}
.link_table LI {margin-top:0; margin-bottom:0; padding-top:0; padding-bottom:0;}

code {font-family: 'Arial Bold', Arial; font-size: 14px;}

</style>
<script type="text/javascript" src="includes/scripts.js"></script>
<script type="text/javascript" src="includes/base.js"></script>

<!-- Google Analytics ... -->
<!--<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-18862167-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>-->
</head><body onload="bodyload()">
<script type="text/javascript" src="includes/wz_tooltip.js"></script>
<div id="chatteundcube" style="display:none; position:absolute;"><img border="0" alt="Chatte und Cube!" src="images/chatteundcube.png" /></div>

<div style="position:absolute; top:3px; left:3px;"><img border="0" alt="Rubiks Cube" src="images/minicube.png" /></div>

<center>

<table cellpadding="0" cellspacing="0" border="0" width="977"><tr><td style="vertical-align:bottom; padding:0; padding-bottom:4px; width:145px;">
<img src="images/websitelogo.png" id="logo" alt="logo" />
</td><td style="padding-left:10px;">

<table cellpadding="0" cellspacing="0">
<tr>
	<td style="background:url(images/des_.png) repeat;height:136px;width:16px;overflow:visible;"></td>
    <td style="background:url(images/des_.png) repeat;height:136px;width:815px; overflow:visible; font-size:13px;" valign="top">
	<?php
	$ad = false;
	if ($ad) {
	?>
    <!-- Anfang Googlewerbung -->
    <script type="text/javascript">
	google_ad_client = "pub-2610237241594333";
	/* 728x15, Linkblock Speedcube.de */
	google_ad_slot = "1123269349";
	google_ad_width = 728;
	google_ad_height = 15;
	</script>
	<script type="text/javascript"
	src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
	</script>
    <!-- Ende Googlewerbung -->
	<?php } ?>
    <table style="height:12px; width:815px; text-align:left;" border="0" cellpadding="3" cellspacing="4" id="heaad">
    <tr><td colspan="5"><div style="font-size:10px;"><span id="warning"></span><!--<noscript>!Hinweis: Sie sollten JavaScript aktivieren, damit diese Seite vollkommen funktionieren kann!</noscript>--></div>
    <script type="text/javascript">check_width();</script>
    </td></tr>
    <tr><td valign="top">
    	<img border="0" src="images/button12.jpg" alt="Allgemein" />
        <ul>
        	<li type="square" onmouseover="li(this,'circle')" onmouseout="li(this,'square')"><a href="index.php">Startseite</a></li>
            <li type="square" onmouseover="li(this,'circle')" onmouseout="li(this,'square')"><a href="new.php">Neu hier?</a></li>
            <li type="square" onmouseover="li(this,'circle')" onmouseout="li(this,'square')"><a href="about.php">Was ist Speedcubing?</a></li>
            <li type="square" onmouseover="li(this,'circle')" onmouseout="li(this,'square')"><a href="howto.php">Speedcubing Einstieg!</a></li>
            <li type="square" onmouseover="li(this,'circle')" onmouseout="li(this,'square')"><a href="rubik.php">Geschichte des Cubes</a></li>
        </ul>
    </td><td valign="top">
    	<img border="0" src="images/button10.jpg" alt="Lösungsmethoden" />
        <ul>
        	<li type="square" onmouseover="li(this,'circle')" onmouseout="li(this,'square')"><a href="notation.php">Notation lernen</a></li>
            <li type="square" onmouseover="li(this,'circle')" onmouseout="li(this,'square')"><a href="lbl.php">Beginner (LbL)</a></li>
            <li type="square" onmouseover="li(this,'circle')" onmouseout="li(this,'square')"><a href="fridrich.php">Fridrich Methode</a></li>
            <li type="square" onmouseover="li(this,'circle')" onmouseout="li(this,'square')"><a href="roux.php">Roux Methode</a></li>
            <li type="square" onmouseover="li(this,'circle')" onmouseout="li(this,'square')"><a href="other_methods.php">Weitere Tutorials</a></li>
        </ul>
    </td><td valign="top">
    	<img border="0" src="images/button11.jpg" alt="Algorithmen" />
        <ul>

            <li type="square" onmouseover="li(this,'circle')" onmouseout="li(this,'square')"><a href="fridrich_f2l.php">Fridrich F2L</a></li>
            <li type="square" onmouseover="li(this,'circle')" onmouseout="li(this,'square')"><a href="fridrich_oll.php">Fridrich OLL</a></li>
            <li type="square" onmouseover="li(this,'circle')" onmouseout="li(this,'square')"><a href="fridrich_pll.php">Fridrich PLL</a></li>
			      <li type="square" onmouseover="li(this,'circle')" onmouseout="li(this,'square')"><a target="_blank" href="http://speedcube.de/forum/showthread.php?tid=384">Lerntechniken</a></li>
            <li type="square" onmouseover="li(this,'circle')" onmouseout="li(this,'square')"><a href="other_algorithms.php">Weitere Algorithmen</a></li>
        </ul>
    </td><td valign="top">
    	<img border="0" src="images/button13.jpg" alt="Extras" />
        <ul>
            <li type="square" onmouseover="li(this,'circle')" onmouseout="li(this,'square')"><a href="fingertricks.php">Fingertricks</a></li>
            <li type="square" onmouseover="li(this,'circle')" onmouseout="li(this,'square')"><a href="speedup.php">Cube beschleunigen</a></li>
            <li type="square" onmouseover="li(this,'circle')" onmouseout="li(this,'square')"><a href="mechanic.php">Mechanik des W&uuml;rfels</a></li>
            <li type="square" onmouseover="li(this,'circle')" onmouseout="li(this,'square')"><a href="records.php">Aktuelle Rekorde</a></li>
        	<li type="square" onmouseover="li(this,'circle')" onmouseout="li(this,'square')"><a href="other_extras.php">Weitere Extras</a></li>
        </ul>
    </td><td valign="top">
    	<img border="0" src="images/button14.jpg" alt="Quellen" />
        <ul>
        	<li type="square" onmouseover="li(this,'circle')" onmouseout="li(this,'square')"><a href="shops.php">Websites &amp; Shops</a></li>
            <li type="square" onmouseover="li(this,'circle')" onmouseout="li(this,'square')"><a href="programme.php">Programme</a></li>
            <li type="square" onmouseover="li(this,'circle')" onmouseout="li(this,'square')"><a href="stuff.php">Cubing Zubeh&ouml;r</a></li>
            <li type="square" onmouseover="li(this,'circle')" onmouseout="li(this,'square')"><a href="cubes.php">Speedcubes</a></li>
			<li type="square" onmouseover="li(this,'circle')" onmouseout="li(this,'square')"><a target="_blank" href="http://www.speedcube.de/forum/forumdisplay.php?fid=21">Reviews</a></li>
        </ul>
    </td></tr></table></td>
    <td style="background:url(images/des_.png) repeat; height:136px; width:16px; overflow:visible;"></td>
</tr>
</table>

</td></tr></table>

<table cellpadding="0" cellspacing="0">
<tr>
	<td style="background:url(images/des_lo.png) no-repeat;height:16px;width:16px;"></td>
    <td style="background:url(images/des_.png) repeat;height:16px;width:945px;"></td>
    <td style="background:url(images/des_.png) repeat;height:16px;width:16px;"></td>
</tr>
<tr>
	<td style="background:url(images/des_.png) repeat;height:30px;width:16px;overflow:visible;"></td>
    <td style="background:url(images/des_.png) repeat;height:30px;width:945px; overflow:visible; font-size:13px;" valign="top">
    
    <table style="width:940px; text-align:center;" cellpadding="0" cellspacing="0"><tr>
    <td><a href="index.php"><img src="images/button1b.jpg" border="0" alt="Startseite" /></a></td>
    <td><a href="about.php"><img src="images/button2.jpg" border="0" alt="Speedcubing Infos" /></a></td>
    <td><a href="forum/" target="_blank"><img src="images/button4.jpg" border="0" alt="Forum" /></a></td>
    <td><a href="http://speedcube.de/forum/showthread.php?tid=1008" target="_blank"><img src="images/button5.jpg" border="0" alt="FAQ (meißt gestellte Fragen)" /></a></td>
    <!--<td><a href="timer.php" target="_blank"><img src="images/button9.jpg" border="0" alt="Speedcube.de Timer" /></a></td>-->
	<td><a href="http://ocs.speedcube.de/" target="_blank"><img id="ocsbutton" src="images/button15.jpg" border="0" alt="Online-Cubing-System" /></a></td>
    <td><a href="http://google.com?q=Ich+habe+das+G%C3%A4stebuch+entfernt,+doch+der+Knopf+bleibt"><img src="images/button8.jpg" border="0" alt="Gästebuch" /></a></td>
    </tr></table>
    </td>
    <td style="background:url(images/des_.png) repeat;height:30px;width:16px;overflow:visible;"></td>
</tr>
<tr>
	<td style="background:url(images/des_lu.png) no-repeat;height:16px;width:16px;"></td>
    <td style="background:url(images/des_.png) repeat;height:16px;width:945px;"></td>
    <td style="background:url(images/des_ru.png) no-repeat;height:16px;width:16px;"></td>
</tr>
</table>
<br /><br />

<table cellpadding="0" cellspacing="0">
<tr>
	<td style="background:url(images/des_lo.png) no-repeat;height:16px;width:16px;"></td>
    <td style="background:url(images/des_.png) repeat;height:16px;width:945px;"></td>
    <td style="background:url(images/des_ro.png) no-repeat;height:16px;width:16px;"></td>
</tr>
<tr>
	<td style="background:url(images/des_.png) repeat;height:200px;width:16px;overflow:visible;"></td>
    <td style="background:url(images/des_.png) repeat;height:200px;width:945px; overflow:visible; font-size:13px; text-align:left;" valign="top">
