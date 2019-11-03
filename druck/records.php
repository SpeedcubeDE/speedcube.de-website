Hier seht ihr aktuelle Rekorde! Alle Rekorde lassen sich auf <a href="http://www.worldcubeassociation.org" target="_blank">www.worldcubeassociation.org</a> ansehen und bewundern ;)<hr />


<?php

$english = array('Netherlands',
				 'France',
				 'Hungary',
				 'Poland',
				 'Germany',
				 'Belgium',
				 'United Kingdom',
				 'Austria',
				 'Switzerland',
				 'Philippines',
				 'Canada',
				 'Spain',
				 'Australia',
				 'Italy',
         'Norway');
$deutsch = array('Niederlande',
				 'Frankreich',
				 'Ungarn',
				 'Polen',
				 'Deutschland',
				 'Belgien',
				 'Gro&szlig;britannien',
				 '&Ouml;sterreich',
				 'Schweiz',
				 'Philippinen',
				 'Kanada',
				 'Spanien',
				 'Australien',
				 'Italien',
         'Norwegen');

$limit = 259200; // 3 Tage
$filename = "records_temp.txt";
$temp = implode('',file($filename));
$temp = explode('[TIME_SPLITTER]',$temp);
$update_time = $temp[0];
$temp = $temp[1];
echo '';
if ((time()-$limit) > $update_time) {
	
	echo "Die Daten sind &auml;lter als 3 Tage... Datei wurde aktualisiert!<br />";
	$text = "";
	$text .= time().'[TIME_SPLITTER]';
	
	$text .= '<b>Stand: '.date("d. m. Y H:i").'</b><br /><small>Alle Angaben ohne Gewähr!</small><br /><br />';
	
	$text .= '<table cellpadding="4" cellspacing="16" border="0"><tr><td><b>Top 20 - Welt</b></td><td><b>Top 20 - Europa</b></td></tr>
<tr><td>';
	$html = '';
	$file = file('http://www.worldcubeassociation.org/results/events.php?eventId=333&regionId=&years=&show=100%2BPersons&single=Single');
	foreach ($file as $row) {
		$html .= $row;
	}
	$match = array();
	preg_match('!<th..class="f">&nbsp;</th>.</tr>(.*?)</table>!is',$html,$match);

	$match = $match[1];
	$match = explode('</tr>',$match);

	$text .= '<table cellpadding="2" cellspacing="3" border="0">
<tr><td><b>Platz</b></td><td><b>Name</b></td><td><b>Zeit</b></td><td><b>Herkunft</b></td></tr>';
	for ($i=0;$i<20;$i++) {
		$row = preg_replace('!</td><td(.*?)>!i','|',$match[$i]);
		$row = explode('|',$row);
		$text .= '<tr><td align="right">'.strip_tags($row[0]).'</td><td>'.strip_tags($row[1]).'</td><td align="right">'.strip_tags($row[2]).'</td><td>';
		$row[3] = str_replace($english,$deutsch,$row[3]);
		$text .= strip_tags($row[3]);
		$text .= '</td></tr>';
	}
	
	$text .= "\n</table>	</td><td>\n";
	
	$html = '';
	$file = file('http://www.worldcubeassociation.org/results/events.php?eventId=333&regionId=_Europe&years=&show=100%2BPersons&single=Single');
	foreach ($file as $row) {
		$html .= $row;
	}
	$match = array();
	preg_match('!<th..class="f">&nbsp;</th>.</tr>(.*?)</table>!is',$html,$match);
	$match = $match[1];
	$match = explode('</tr>',$match);
	$text .= '<table cellpadding="2" cellspacing="3" border="0">
<tr><td><b>Platz</b></td><td><b>Name</b></td><td><b>Zeit</b></td><td><b>Herkunft</b></td></tr>';
	for ($i=0;$i<20;$i++) {
		$row = preg_replace('!</td><td(.*?)>!i','|',$match[$i]);
		$row = explode('|',$row);
		$text .= '<tr><td align="right">'.strip_tags($row[0]).'</td><td>'.strip_tags($row[1]).'</td><td align="right">'.strip_tags($row[2]).'</td><td>';
		$row[3] = str_replace($english,$deutsch,$row[3]);
		$text .= strip_tags($row[3]);
		$text .= '</td></tr>';
	}
	
	
	$text .= "\n";
	$text .= '</table></td></tr></table><table cellpadding="4" cellspacing="20" border="0"><tr><td><b>Top 10 - Deutschland</b></td><td><b>Top 10 - &Ouml;sterreich</b></td><td><b>Top 10 - Schweiz</b></td></tr><tr><td>';
	$text .= "\n";

	
	$html = '';
	$file = file('http://www.worldcubeassociation.org/results/events.php?eventId=333&regionId=Germany&years=&show=100%2BPersons&single=Single');
	foreach ($file as $row) {
		$html .= $row;
	}
	$match = array();
	preg_match('!<th..class="f">&nbsp;</th>.</tr>(.*?)</table>!is',$html,$match);
	$match = $match[1];
	$match = explode('</tr>',$match);
	$text .= '<table cellpadding="2" cellspacing="3" border="0">
<tr><td><b>Platz</b></td><td><b>Name</b></td><td><b>Zeit</b></td></tr>';
	for ($i=0;$i<10;$i++) {
		$row = preg_replace('!</td><td(.*?)>!i','|',$match[$i]);
		$row = explode('|',$row);
		$text .= '<tr><td align="right">'.strip_tags($row[0]).'</td><td>'.strip_tags($row[1]).'</td><td align="right">'.strip_tags($row[2]).'</td></tr>';
	}
	
	$text .= "\n</table>	</td><td>\n";
	
	$html = '';
	$file = file('http://www.worldcubeassociation.org/results/events.php?eventId=333&regionId=Austria&years=&show=100%2BPersons&single=Single');
	foreach ($file as $row) {
		$html .= $row;
	}
	$match = array();
	preg_match('!<th..class="f">&nbsp;</th>.</tr>(.*?)</table>!is',$html,$match);
	$match = $match[1];
	$match = explode('</tr>',$match);
	$text .= '<table cellpadding="2" cellspacing="3" border="0">
<tr><td><b>Platz</b></td><td><b>Name</b></td><td><b>Zeit</b></td></tr>';
	for ($i=0;$i<10;$i++) {
		$row = preg_replace('!</td><td(.*?)>!i','|',$match[$i]);
		$row = explode('|',$row);
		$text .= '<tr><td align="right">'.strip_tags($row[0]).'</td><td>'.strip_tags($row[1]).'</td><td align="right">'.strip_tags($row[2]).'</td></tr>';
	}
	
	$text .= "\n</table>	</td><td>\n";
	
	$html = '';
	$file = file('http://www.worldcubeassociation.org/results/events.php?eventId=333&regionId=Switzerland&years=&show=100%2BPersons&single=Single');
	foreach ($file as $row) {
		$html .= $row;
	}
	$match = array();
	preg_match('!<th..class="f">&nbsp;</th>.</tr>(.*?)</table>!is',$html,$match);
	$match = $match[1];
	$match = explode('</tr>',$match);
	$text .= '<table cellpadding="2" cellspacing="3" border="0">
<tr><td><b>Platz</b></td><td><b>Name</b></td><td><b>Zeit</b></td></tr>';
	for ($i=0;$i<10;$i++) {
		$row = preg_replace('!</td><td(.*?)>!i','|',$match[$i]);
		$row = explode('|',$row);
		$text .= '<tr><td align="right">'.strip_tags($row[0]).'</td><td>'.strip_tags($row[1]).'</td><td align="right">'.strip_tags($row[2]).'</td></tr>';
	}
	
	$text .= '</table></td></tr></table><br />';
	
	
	
	$file = fopen($filename,"w");
	fwrite($file,$text);
	fclose($file);
	
	$text = explode("[TIME_SPLITTER]",$text);
	echo $text[1];
	
} else echo $temp;

/*


?>
<table cellpadding="4" cellspacing="16" border="0"><tr><td><b>Top 10 - Welt</b></td><td><b>Top 10 - Europa</b></td><td><b>Top 10 - Deutschland</b></td></tr>
<tr><td>
<?php
$html = '';
$file = file('http://www.worldcubeassociation.org/results/events.php?eventId=333&regionId=&years=&show=100%2BPersons&single=Single');
foreach ($file as $row) {
	$html .= $row;
}
$match = array();
preg_match('!<th..class="f">&nbsp;</th>.</tr>(.*?)</table>!is',$html,$match);
$match = $match[1];
$match = explode('</tr>',$match);
?><table cellpadding="2" cellspacing="3" border="0">
<tr><td><b>Platz</b></td><td><b>Name</b></td><td><b>Zeit</b></td><td><b>Herkunft</b></td></tr><?php
for ($i=0;$i<10;$i++) {
	$row = preg_replace('!</td><td(.*?)>!i','|',$match[$i]);
	$row = explode('|',$row);
	?><tr><td align="right"><?php echo strip_tags($row[0]); ?></td><td><?php echo strip_tags($row[1]); ?></td><td align="right"><?php echo strip_tags($row[2]); ?></td><td><?php
	$row[3] = str_replace($english,$deutsch,$row[3]);
	echo strip_tags($row[3]);
	?></td></tr><?php
}
?>
</table>

</td><td>
<?php
$html = '';
$file = file('http://www.worldcubeassociation.org/results/events.php?eventId=333&regionId=_Europe&years=&show=100%2BPersons&single=Single');
foreach ($file as $row) {
	$html .= $row;
}
$match = array();
preg_match('!<th..class="f">&nbsp;</th>.</tr>(.*?)</table>!is',$html,$match);
$match = $match[1];
$match = explode('</tr>',$match);
?><table cellpadding="2" cellspacing="3" border="0">
<tr><td><b>Platz</b></td><td><b>Name</b></td><td><b>Zeit</b></td><td><b>Herkunft</b></td></tr><?php
for ($i=0;$i<10;$i++) {
	$row = preg_replace('!</td><td(.*?)>!i','|',$match[$i]);
	$row = explode('|',$row);
	?><tr><td align="right"><?php echo strip_tags($row[0]); ?></td><td><?php echo strip_tags($row[1]); ?></td><td align="right"><?php echo strip_tags($row[2]); ?></td><td><?php
	$row[3] = str_replace($english,$deutsch,$row[3]);
	echo strip_tags($row[3]);
	?></td></tr><?php
}


?>
</table>

</td><td>
<?php

$html = '';
$file = file('http://www.worldcubeassociation.org/results/events.php?eventId=333&regionId=Germany&years=&show=100%2BPersons&single=Single');
foreach ($file as $row) {
	$html .= $row;
}
$match = array();
preg_match('!<th..class="f">&nbsp;</th>.</tr>(.*?)</table>!is',$html,$match);
$match = $match[1];
$match = explode('</tr>',$match);
?><table cellpadding="2" cellspacing="3" border="0">
<tr><td><b>Platz</b></td><td><b>Name</b></td><td><b>Zeit</b></td></tr><?php
for ($i=0;$i<10;$i++) {
	$row = preg_replace('!</td><td(.*?)>!i','|',$match[$i]);
	$row = explode('|',$row);
	?><tr><td align="right"><?php echo strip_tags($row[0]); ?></td><td><?php echo strip_tags($row[1]); ?></td><td align="right"><?php echo strip_tags($row[2]); ?></td><td>
	</td></tr><?php
}
?>
</table>

</td></tr></table>

<table cellpadding="4" cellspacing="20" border="0"><tr><td><b>Top 5 - &Ouml;sterreich</b></td><td><b>Top 5 - Schweiz</b></td><td><b>Pers&ouml;nliche Rekorde von Forumsmitgliedern (inoffiziell)</b></td></tr>
<tr><td>
<?php
$html = '';
$file = file('http://www.worldcubeassociation.org/results/events.php?eventId=333&regionId=Austria&years=&show=100%2BPersons&single=Single');
foreach ($file as $row) {
	$html .= $row;
}
$match = array();
preg_match('!<th..class="f">&nbsp;</th>.</tr>(.*?)</table>!is',$html,$match);
$match = $match[1];
$match = explode('</tr>',$match);
?><table cellpadding="2" cellspacing="3" border="0">
<tr><td><b>Platz</b></td><td><b>Name</b></td><td><b>Zeit</b></td></tr><?php
for ($i=0;$i<5;$i++) {
	$row = preg_replace('!</td><td(.*?)>!i','|',$match[$i]);
	$row = explode('|',$row);
	?><tr><td align="right"><?php echo strip_tags($row[0]); ?></td><td><?php echo strip_tags($row[1]); ?></td><td align="right"><?php echo strip_tags($row[2]); ?></td><td>
	</td></tr><?php
}
?>
</table>

</td><td>
<?php
$html = '';
$file = file('http://www.worldcubeassociation.org/results/events.php?eventId=333&regionId=Switzerland&years=&show=100%2BPersons&single=Single');
foreach ($file as $row) {
	$html .= $row;
}
$match = array();
preg_match('!<th..class="f">&nbsp;</th>.</tr>(.*?)</table>!is',$html,$match);
$match = $match[1];
$match = explode('</tr>',$match);
?><table cellpadding="2" cellspacing="3" border="0">
<tr><td><b>Platz</b></td><td><b>Name</b></td><td><b>Zeit</b></td></tr><?php
for ($i=0;$i<5;$i++) {
	$row = preg_replace('!</td><td(.*?)>!i','|',$match[$i]);
	$row = explode('|',$row);
	?><tr><td align="right"><?php echo strip_tags($row[0]); ?></td><td><?php echo strip_tags($row[1]); ?></td><td align="right"><?php echo strip_tags($row[2]); ?></td><td>
	</td></tr><?php
}
?>
</table>

</td><td valign="top">

<table cellpadding="2" cellspacing="3" border="0">
<tr><td><b>Name</b></td><td><b>Forum-Benutzername</b></td><td><b>Bestzeit</b></td><td><b>Herkunft</b></td></tr>
<tr><td>Philip P.</td><td>Philip</td><td>12.54</td><td>Deutschland</td></tr>
<tr><td>Felix K&ouml;nig</td><td>Felk</td><td>14.76</td><td>Deutschland</td></tr>
<tr><td>Michael S.</td><td>sol1x</td><td>16.74</td><td>Deutschland</td></tr>
<tr><td>Justin Tappeser</td><td>Nerogar</td><td>18.97</td><td>Deutschland</td></tr>
<tr><td>Johannes Blum</td><td>[no4].:!ersguterjunge!:.</td><td>26.50</td><td>Deutschland</td></tr>
<tr><td>Sebastian Roth</td><td>SRcube</td><td>28.30</td><td>Deutschland</td></tr>
<tr><td>Markus ?.</td><td>Markus</td><td>41.81</td><td>Deutschland</td></tr>
<tr><td>Nicolai B.</td><td>Bonsai</td><td>48.73</td><td>Deutschland</td></tr>
<tr><td>Tarik C.</td><td>RubiKubi</td><td>58.32</td><td>T&uuml;rkei</td></tr>
</table>

</td></tr></table><br />

<?php */ ?>
