Hier findest du ein Tutorial zur Roux Methode von Gilles Roux, die zweitverbreiteste Speedcubingmethode f&uuml;r den 3x3x3 Cube (an dritter Stelle ist die Petrus Methode).<br />
Ich verwende Notations-K&uuml;rzel zum Angeben von bestimmten Positionen am Cube. UR steht z.B. f&uuml;r die Edgeposition zwischen der U-, und der R-Ebene.<br />
Au&szlig;erdem solltest du die volle <a href="notation.php" target="_blank">Notation</a> beherrschen.
<hr /><br /><br />

Gilles Roux und Thomas Stadler entwickelten eine relativ außergew&ouml;hnliche Methode, den Rubik´s Cube zu L&ouml;sen.<br />
Bei dieser Methode werden zuerst zwei 3x2x1-Bl&ouml;cke nebeneinander gebaut, dann die Ecken der oberen Ebene gel&ouml;st und zum Schluss 
die restlichen Edges in Position gebracht.

Schritte:<br />
<ol>
<li><a href="#step1">Die 2 3x2x1 Bl&ouml;cke</a></li>
<li><a href="#step2">Ecken l&ouml;sen</a></li>
<li><a href="#step3">restliche Edges richtig kippen (auf "WeGe") und die Edges UL und UR l&ouml;sen</a></li>
<li><a href="#step4">restliche Edges der M-Ebene vertauschen</a></li>
</ol>
<br /><br />

Ich habe mir f&uuml;r die Roux Methode eine Start-Farbe ausgesucht, mit der ich immer anfange. Bei dieser Methode muss man also nicht Colour-Neutral sein. Man wird sogar (meinen Erfahrungen nach) schneller, wenn man eine feste Startfarbe hat. Meine Startfarbe ist wei&szlig;.<br />
Au&szlig;erdem sollte man f&uuml;r die Roux Methode folgendes wissen: Rot ist gegen&uuml;ber von Orange, Blau ist gegen&uuml;ber von Gr&uuml;n und Wei&szlig; ist gegen&uuml;ber von Gelb.<br /><br />

<a name="step1"><h2>Die 2 3x2x1 Bl&ouml;cke</h2></a>
Es werden (wie schon gesagt) 2 3x2x1 Bl&ouml;cke (unten ausgerichtet) auf L und R gebaut (weiß unten). Dieser Schritt sollte (nach der Zeit, aber unbedingt) intuitiv gemacht werden, aber ich werde trotzdem eine Methode erkl&auml;ren:
<ol>
<li>Baut auf der D-Seite (bei mir Weiß) ein - (Strich), also wenn ihr weiß unten und orange vorne habt, dann bringt ihr die Kanten wei&szlig;/blau und wei&szlig;/gr&uuml;n an ihre Positionen DL und DR<br />
<img alt="Schaubild" border="0" src="images/roux2.gif" /></li>
<li>Wenn an den Positionen DF oder DB eine Edge weder (bei meiner Startfarbe) wei&szlig; noch (gegen&uuml;berliegende Farbe) gelb enth&auml;lt, dann ersetzt sie mit M-, und U-Bewegungen durch eine Edge, die eine dieser Farben enth&auml;lt.</li>
<li>Mit den F2L der <a href="fridrich.php">Fridrich Methode</a> kannst du die 2 3x2x1 Bl&ouml;cke bilden. Fortgeschrittene (!) der Fridrich Methode brauchen Schritt 2 nicht und wissen, wie sie M-Bewegungen bei den F2L in Roux nutzen k&ouml;nnen oder machen die 2 Bl&ouml;cke ganz intuitiv.</li>
</ol>
<b>HINWEIS: Es spielt (noch) keine Rolle, wo sich die Centers befinden (außer die, die in die 3x2x1-Bl&ouml;cke eingearbeitet sind). Also muss man das wei&szlig;e Center <u>nicht</u> unten haben, wenn ich sage, dass ich unten wei&szlig; habe. M ist (noch) frei beweglich.</b><br />
Nun k&ouml;nnte dein Cube so in etwa aussehen:<br />
<img alt="Schaubild" border="0" src="images/roux1.gif" /><br />

<a name="step2"><h2>Ecken l&ouml;sen</h2></a>
In diesem Schritt werden die &uuml;brigen 4 Ecken gel&ouml;st. Also quasi folgendes:
<div style="vertical-align:middle; font-size:24px;"><img alt="Schaubild" border="0" src="images/roux3.gif" /> &rarr; L&ouml;sen &rarr; <img alt="Schaubild" border="0" src="images/roux4.gif" /></div>
Fortgeschrittene w&uuml;rden diesen Schritt mit <a href="http://grrroux.free.fr/method/Step_3.html" target="_blank">CMLL</a> l&ouml;sen, aber Anf&auml;nger sollten diesen Schritt einfach in 2 Unterschritten bew&auml;ltigen:
<ol>
<li>Ecken so drehen, dass bei allen 4 Ecken gelb (die gegen&uuml;berliegende Farbe der Startfarbe) nach oben zeigt</li>
<li>Ecken so vertauschen, dass sie alle an ihrer richtigen Position sind.</li>
</ol>
An dieser Stelle will ich auf folgendes hinweisen: Ein 2x2x2 Cube hat nur Ecken, und in diesem Schritt geht es nur um Ecken. Und zuf&auml;llig werden bei der <a href="ortega.php" target="_blank">Ortega Methode</a> f&uuml;r den 2x2x2 in den letzten beiden Schritten Ecken gedreht und dann vertauscht. Deswegen bitte ich dich, OLL und XLL der <a href="ortega.php" target="_blank">Ortega Methode</a> zu lesen und die OLL-Algorithmen zum Drehen der Ecken sowie die ersten beiden XLL-Algorithmen zum Vertauschen der Ecken f&uuml;r diesen Schritt zu verwenden.<br />
Besonders wichtig ist der Satz &quot;Falls n&ouml;tig musst du vorher und/oder nachher noch U, U' oder U2 ausf&uuml;hren&quot; beim beiden Unterschritten, denn ansonsten wei&szlig;t du nicht, welchen Algorithmen du anwenden musst.<br />


<a name="step3"><h2>restliche Edges richtig kippen (auf "WeGe") und die Edges UL und UR l&ouml;sen</h2></a>
Die 6 restlichen Edges m&uuml;ssen nun richtig gekippt werden und die Edges an Position UL und UR richtig eingef&uuml;llt werden. In diesem Schritt werden die gegen&uuml;berliegenden Farben oben/unten nun gleichgesetzt. Bei mir z.B. Gelb und Wei&szlig;. Nennen wir diese Farben WeGe, OrRo und Gr&uuml;Bl.<br />
Die Bl&ouml;cke m&uuml;ssen f&uuml;r diesen Schritt unten ausgerichtet links und rechts sein, damit M und U frei beweglich sind. Ziel ist es, die obere Fl&auml;che WeGe zu kriegen. Dazu dreht man die obere Ebene einfach so, dass eines der folgenden Muster zu sehen ist (grau = rot, gr&uuml;n, orange oder blau) und f&uuml;hrt M' U M' aus:<br />
<img alt="Schaubild" border="0" src="images/roux5.gif" />|
<img alt="Schaubild" border="0" src="images/roux6.gif" />|
<img alt="Schaubild" border="0" src="images/roux7.gif" />|
<img alt="Schaubild" border="0" src="images/roux8.gif" />|
<img alt="Schaubild" border="0" src="images/roux9.gif" /> oder
<img alt="Schaubild" border="0" src="images/roux10.gif" /><br />
Und nun musst du intuitiv die Positionen UL und UR mit den richtigen Edges bef&uuml;llen (in meinem Fall gelb/gr&uuml;n und gelb/blau). Aber dazu darfst du nur die obere Ebene (U) und die mittlere Ebene (M) drehen. M2 darfst du immer drehen, M oder M' aber nur, wenn du danach U2 und danach wieder M oder M' drehst. Wenn du etwas falsches drehst, dann sind die Edges nichtmehr richtig gekippt.
Probier am besten solange rum, bis du deine eigenen kleinen Algorithmen gefunden hast. Ich benutze z.B. M' U2 M um die Edge UB nach UF und die Edge DF nach UB zu transportieren. Das muss man sich einfach selbst beibringen.<br />


<a name="step4"><h2>restliche Edges der M-Ebene vertauschen</h2></a>
Erstmal drehst du mit M, M' oder M2 die Centers richtig. Um die restlichen Edges der M-Ebene nun zu sortieren, braucht man nur 4 leichte Algorithmen:<br />
<table>
<tr><td><img alt="Schaubild" border="0" src="images/roux11.gif" /></td><td>Alle Kanten falsch, m&uuml;ssen in 2-er P&auml;rchen miteinander vertauscht werden,<br />
die zu tauschenden Kanten m&uuml;ssen auf der oberen und unteren Ebene liegen (gegebenfalls vorher M ausf&uuml;hren!):<br />
M2 U2 M2 U2</td></tr>
<tr><td><img alt="Schaubild" border="0" src="images/roux12.gif" /></td><td>Alle Kanten falsch, m&uuml;ssen diagonal miteinander vertauscht werden:<br />
E2 M E2 M</td></tr>
<tr><td><img alt="Schaubild" border="0" src="images/roux13.gif" /></td><td>3 Kanten falsch, mittlere der 3 falschen Edges muss vorne/oben gehalten werden,<br />
Farbe der Vorderseite der Edge und des vorderen Centers stimmen &uuml;berein:<br />
M' U2 M U2</td></tr>
<tr><td><img alt="Schaubild" border="0" src="images/roux14.gif" /></td><td>3 Kanten falsch, mittlere der 3 falschen Edges muss vorne/oben gehalten werden,<br />
Farbe der Oberseite der Edge und des oberen Centers stimmen &uuml;berein:<br />
U2 M' U2 M</td></tr>
</table>

<br /><br />
Ich hoffe das Tutorial hat geholfen, wenn du Fragen hast oder denkst einen Fehler gefunden zu haben, dann schick bitte eine E-mail an webmaster@speedcube.de oder melde dich in unserem <a href="forum/">Speedcubing Forum</a>!<br /><br />

Tutorial by Aaron Mondal, Forums-Benutzername: Sidmoon;
mit Freuden angepasst und eingestellt vom Webmaster Felk