<?php
$data = $_SERVER['PHP_SELF'];
$data = explode('/',$data);
$data = $data[(count($data)-1)];
?><br /><hr />
<div style="padding-right:3px; vertical-align:middle; float:right;"><?php
if ($bg_saved) echo '<b><font color="green">Hintergrund gespeichert. Sp&auml;testens nach dem n&auml;chsten Seitenaufruf wird der neue Hintergrund geladen!</font></b><br />';
?> 
<form action="#" method="get">
<select name="background">
<option value="">Homepage-Hintergrund auswählen...</option>
<option value="bg.gif">Graue Streifen (dunkel)</option>
<option value="bg3.gif">Graue Streifen (hell)</option>
<option value="background.gif">verwischte Streifen (lila)</option>
<option value="background2.gif">verwischte Streifen (dunkelrot)</option>
<option value="trans.gif">schwarz</option>
</select>
<input type="submit" value="Speichern" />
</form>
</div>
<a href="print.php?u=<?php echo $data; ?>" style="font-size:9px; display:block; height:16px; background:no-repeat left url(images/druck.png); color:#FFFF99; padding:0px; padding-left:18px; padding-top:3px; vertical-align:middle; float:left">
DRUCKANSICHT
</a>

<center><iframe src="//ocs.speedcube.de/ocs_online.php" height="27" width="468" style="border:0px;" frameborder="0" scrolling="no"></iframe></center>
<!--<center><iframe src="ocs/ocs_online_java.php" height="27" width="468" style="border:0px;" frameborder="0" scrolling="no"></iframe></center>-->

    <br />
    <center><span style="font-size:10px;">
    <a href="impressum.php">Impressum</a> | <a href="sitemap.php">Sitemap</a> | <a href="about_speedcube_de.php">&Uuml;ber Speedcube.de</a>&nbsp;&nbsp;
    <?php
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
    </span></center>
    
    </td>
    <td style="background:url(images/des_.png) repeat;height:200px;width:16px;overflow:visible;"></td>
</tr>
<tr>
	<td style="background:url(images/des_lu.png) no-repeat;height:16px;width:16px;"></td>
    <td style="background:url(images/des_.png) repeat;height:16px;width:945px;"></td>
    <td style="background:url(images/des_ru.png) no-repeat;height:16px;width:16px;"></td>
</tr>
</table><br />
<span style=" color:#CCCCCC; font-size:10px;">Letztes Update: 23. November 2015, Updatestand: 1.48 (<a target="_blank" href="http://speedcube.de/forum/showthread.php?tid=25">Details</a>)<br />
&copy; Copyright 2009-<?php echo date("Y"); ?> by www.speedcube.de</span><br />
<!--<script language="JavaScript" type="text/javascript" src="http://www.onlex.de/_counter.php4?username=Felk"></script>-->
<p>
    <!--<a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img style="border:0;width:88px;height:31px"
            src="http://jigsaw.w3.org/css-validator/images/vcss"
            alt="CSS ist valide!" />
    </a>
    <a href="http://validator.w3.org/check?uri=referer">
        <img style="border:0;width:88px;height:31px"
        src="http://www.w3.org/Icons/valid-xhtml10"
        alt="Valid XHTML 1.0 Transitional" />
    </a>-->
    <!-- browser-statistik.de - Welche Browser werden benutzt? -->
  <!--<a href="http://www.browser-statistik.de/" title="Browser-Verwendung im www"><img src="http://www.browser-statistik.de/browser.png?style=3" style="border: 0px;" alt="Browser-Statistiken" /></a>-->
<!-- browser-statistik.de - Ende -->
</p>

</center>

</body></html>