<?php
if ($offline == 1) {
	?>
    <div style="position:absolute; margin:0px; left:0px; top:0px; padding:20px; background-color:#000000; color:#FFFFFF; width:101%; height:101%; overflow:hidden;">
    Die Homepage ist vorr&uuml;bergehend offline mit folgender Begr&uuml;ndung:<br /><br />
    <b>
    <?php
	echo $offline_message.'</b></div>';
} else {
?>

<table width="99%">
<tr>
<td>
<span style="display: inline-block; float: left;"><a href="http://www.cubikon.de" target="_blank"><img style="color:#FFFFFF;" border="0" src="images/cubikon.jpg" alt="Cubikon.de, brain-twisting games" />
</a></span>
<!--<span style="display: inline-block; float:left; color:white; background-color: #3333bb; width: auto; padding: 4px; margin: 6px;">
	<p>Bitte nehmt zahlreich an der aktuell laufenden <a href="http://speedcube.de/forum/showthread.php?tid=7855" style="color:orange;">Cubikon Umfrage für zukünftige Produkte</a> teil!</p>
</span>-->
<?php if ($ad) { ?>
<script type="text/javascript">
google_ad_client = "pub-2610237241594333";
/* 468x60, Banner Speedcube.de Startseite 1 */
google_ad_slot = "2555440181";
google_ad_width = 468;
google_ad_height = 60;
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<?php } ?>
</td>
<td align="right" rowspan="2"><img border="0" src="images/zauberwuerfel_gross.png" alt="Zauberwürfel" /></td></tr>
<tr><td><p>Willkommen auf <strong>Speedcube.de</strong>, der deutschen Homepage &uuml;bers <strong>Speedcubing</strong> (= Den <strong>Zauberw&uuml;rfel</strong> auf Zeit m&ouml;glichst schnell l&ouml;sen ), hier k&ouml;nnt ihr selbst lernen, wie ihr den <strong>Rubiks Cube</strong> l&ouml;st, n&uuml;tzliche <strong>Quellen</strong> finden und noch viel mehr - oder falls ihr schon Zauberw&uuml;rfler seid, dann bekommt ihr hier alle <strong>Speedcubing</strong> <strong>Materialien</strong> und <strong>Informationen</strong> die man so braucht!</p></td></tr>
</table>


&nbsp;&nbsp;&nbsp;&nbsp;<a href="new.php">Neu hier?</a><br />
<h2>N&uuml;tzliche Links:</h2>

<center><table width="900" cellspacing="12"><tr><td valign="top">

<table class="link_table" cellspacing="0" cellpadding="3"><tr><th>
<strong>F&uuml;r Neulinge:</strong>
</th></tr><tr><td>
<ul>
	<li type="square"><a href="about.php">Was ist Speedcubing?</a></li>
	<li type="square"><a href="howto.php">Speedcubing Einstieg!</a></li>
    <li type="square"><a href="rubik.php">Geschichte des Cubes</a></li>
</ul>
</td></tr></table>

</td><td valign="top">

<table class="link_table" cellspacing="0" cellpadding="3"><tr><th>
<strong>F&uuml;r Interessenten:</strong>
</th></tr><tr><td>
<ul>
    <li type="square"><a href="notation.php">Notation lernen</a></li>
	<li type="square"><a href="lbl.php">Beginner Methode (LbL)</a></li>
    <li type="square"><a href="mechanic.php">Mechanik des W&uuml;rfels</a></li>
    <li type="square"><a href="records.php">Aktuelle Rekorde</a></li>
    <li type="square"><a href="technical_terms.php">Fachbegriffe</a></li>
</ul>
</td></tr></table>

</td><td valign="top">

<table class="link_table" cellspacing="0" cellpadding="3"><tr><th>
<strong>F&uuml;r Speedcubing Nachwuchs:</strong>
</th></tr><tr><td>
<ul>
	<li type="square"><a href="lbl_algs.php">LbL Algs (Algorithmen)</a></li>
	<li type="square"><a href="fingertricks.php">Fingertricks</a></li>
	<li type="square"><a href="speedup.php">Cube beschleunigen</a></li>
	<li type="square"><a href="stuff.php">Cubing Zubeh&ouml;r</a></li>
    <li type="square"><a href="cubes.php">Speedcubes</a></li>
    <li type="square"><a href="fridrich.php">Fridrich Methode</a></li>
    <li type="square"><a href="roux.php">Roux Methode</a></li>
</ul>
</td></tr></table>

</td><td valign="top">

<table class="link_table" cellspacing="0" cellpadding="3"><tr><th>
<strong>F&uuml;r Speedcuber:</strong>
</th></tr><tr><td>
<ul>
	<li type="square"><a href="shops.php">Websites &amp; Shops</a></li>
	<li type="square"><a href="programme.php">Programme</a></li>
    <li type="square"><a href="speedup.php">Fridrich Methode</a> (Algs: <a href="fridrich_f2l.php">F2L</a>, <a href="fridrich_oll.php">OLL</a>, <a href="fridrich_pll.php">PLL</a>)</li>
    <li type="square"><a href="signatur.php">Signaturbild</a></li>
    <li type="square"><a href="timer.php">Speedcube.de Timer</a></li>
</ul>
</td></tr></table>

</td></tr></table></center><br /><br />
<?php } ?>
