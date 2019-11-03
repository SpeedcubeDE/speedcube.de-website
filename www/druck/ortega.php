Folgendes Tutorial zeigt die sogenannte Ortega Methode. Diese ist die meißtverwendeste Speedcubing Methode für den 2x2x2 Cube.<hr /><br />

Wie funktioniert die Ortega Methode?<br />
<ol>
<li><a href="#step1">Erste Fl&auml;che l&ouml;sen.</a></li>
<li><a href="#step2">gegen&uuml;berliegende Fl&auml;che orientieren (OLL)</a></li>
<li><a href="#step3">restliche Steine sortieren (XLL)</a></li>
</ol>
<br />

<a name="step1"><h2>Erste Fl&auml;che l&ouml;sen.</h2></a>
Zuerst muss man eine Seite l&ouml;sen. Dabei ist es egal, wie die Steine angeordnet sind.<br />
Bei diesem Schritt solltest du Farbenneutral sein, also immer mit der Farbe anfangen, bei der die Steine am besten liegen. Das sollte jeder intuitiv hinbekommen, ansonsten schau dir bitte noch mal die <a href="2x2x2.php">Beginnermethode</a> an.<br /><br />

Die erste Ebene k&ouml;nnte dann so aussehen:<br />
<img border="0" alt="2x2x2 Schaubild" src="images/ortega1.gif" /><br />

<a name="step2"><h2>gegen&uuml;berliegende Fl&auml;che orientieren (OLL)</h2></a>
Jetzt musst du die zweite Ebene mit dem sogenannten OLL (siehe Fridrich-Methode) orientieren, d.h. du drehst alle Ecken der zweiten Ebene so, dass anschließend zwei gegen&uuml;berliegende Seiten nur noch einfarbig sind.<br />
Dazu gibt es folgende Algorithmen: (Sicht immer von oben; unterer Rand des Bildes = Front-Seite)<br />
<table>
<tr><td><img border="0" alt="2x2x2 Schaubild" src="images/ortega2.gif" /></td><td><code>(R2 D) (R' U2) (R D') (R' U2 R')</code>, oder einfach<br /><code>y F R U R' U' F'</code></td></tr>
<tr><td><img border="0" alt="2x2x2 Schaubild" src="images/ortega3.gif" /></td><td><code>(R U R' U') (R' F R F')</code>, oder<br /><code>(R U R' U') (L' U R U') (x')</code></td></tr>
<tr><td><img border="0" alt="2x2x2 Schaubild" src="images/ortega4.gif" /></td><td><code>F' R U R' U' L' U L</code>, oder<br /><code>y' F R U' R' U' R U R' F'</code></td></tr>
<tr><td><img border="0" alt="2x2x2 Schaubild" src="images/ortega5.gif" /></td><td><code>R U R' U R U2 R'</code></td></tr>
<tr><td><img border="0" alt="2x2x2 Schaubild" src="images/ortega6.gif" /></td><td><code>R' U' R U' R' U2 R</code></td></tr>
<tr><td><img border="0" alt="2x2x2 Schaubild" src="images/ortega7.gif" /></td><td><code>R U2 R2 U' R2 U' R2 U2 R</code>, oder<br /><code>F (R U R' U') (R U R' U') F'</code>, oder einfach<br /><code>y' R' F R2 U' R2' F R (vertauscht auch die Ecken F/L/D und F/R/D)</code></td></tr>
<tr><td><img border="0" alt="2x2x2 Schaubild" src="images/ortega8.gif" /></td><td><code>F (R U R' U') (R U R' U') (R U R' U') F'</code>, oder<br /><code>y L U L' U L U' L' U L U2 L'</code>, oder<br /><code>y R' U' R U' R' U R U' R' U2 R</code>, oder einfach<br /><code>R2 U2 R U2 R2</code></td></tr>
</table><br />

<a name="step3"><h2>restliche Steine sortieren (XLL)</h2></a>
Wenn du die Steine orientiert hast, musst du sie noch an die richtige Position bringen.
Das machst du mit beiden Ebenen in einem Algorithmus, dem sogenannten XLL (extended last layer), welches eigentlich auch PBL (permutation of both layers) heißen k&ouml;nnte, da ja beide Ebenen permutiert (sortiert) werden. Falls n&ouml;tig musst du vorher und/oder nachher noch U, U' oder U2 ausf&uuml;hren.<br /><br />

Hier die Algorithmen:<br />
<table>
<tr><td><img border="0" alt="2x2x2 Schaubild" src="images/ortega9.gif" /></td><td><code>R U R' U' R' F R2 U' R' U' R U R' F' (T-Perm)</code>, oder<br /><code>R U2 R' U' R U2 L' U R' U' L</code></td></tr>
<tr><td><img border="0" alt="2x2x2 Schaubild" src="images/ortega10.gif" /></td><td><code>F R U' R' U' R U R' F' R U R' U' R' F R F' (Y-Perm)</code>, oder<br /><code>R U'R' U' F2 U' R U R' D R2</code></td></tr>
<tr><td><img border="0" alt="2x2x2 Schaubild" src="images/ortega11.gif" /></td><td><code>R2 U F2 U2 R2 U R2</code>, oder<br /><code>y2 R2 U R2 U2 y L2 U L2</code>, oder<br /><code>y2 R2 U R2 U2 y' R2 U R2</code></td></tr>
<tr><td><img border="0" alt="2x2x2 Schaubild" src="images/ortega12.gif" /></td><td><code>D2 + n&auml;chster Fall &darr;</code>, oder<br /><code>(R U' R) F2 (R' U R')</code>, oder<br /><code>R U' L U2 R' U L'</code></td></tr>
<tr><td><img border="0" alt="2x2x2 Schaubild" src="images/ortega12b.gif" /></td><td><code>D2 + vorheriger Fall &uarr;</code>, oder<br /><code>(L' U L') F2 (L U' L)</code>, oder<br /><code>L' U R' U2 L U' R</code></td></tr>
<tr><td><img border="0" alt="2x2x2 Schaubild" src="images/ortega13.gif" /></td><td><code>R'2 F2 R2 oder x R2 U2 R2</code></td></tr>
</table><br />

Jetzt sollte der W&uuml;rfel gel&ouml;st sein. Wenn dies nicht der Fall ist, dann hast du entweder etwas falsch gemacht, in diesem Fall einfach noch mal probieren, oder du hast einen Fehler in diesem Tutorial gefunden. Dann kannst du entweder eine Mail an webmaster@speedcube.de schreiben oder du meldest dich in unserem <a href="forum/">Speedcubing Forum</a>.<br />
Herzlichen Dank an Nerogar (Forums-Benutzername) f&uuml;r das Ortega-Tutorial!