In diesem Tutorial versuche ich euch die Pochmann Methode zum Blindl&ouml;sen zu vermitteln. Wer den Cube noch schneller blind l&ouml;sen k&ouml;nnen will, der kann sich ja die R2-M2 Methode angucken: (<a href="http://www.stefan-pochmann.de" target="_blank">www.stefan-pochmann.de</a>).
<hr />


<h2>Old Pochmann</h2>
<center><object style="height: 390px; width: 640px"><param name="movie" value="http://www.youtube.com/v/4q4MhYYN8gM?version=3"><param name="allowFullScreen" value="true"><param name="allowScriptAccess" value="always"><embed src="http://www.youtube.com/v/4q4MhYYN8gM?version=3" type="application/x-shockwave-flash" allowfullscreen="true" allowScriptAccess="always" width="640" height="390"></object></center>

<h3>Algorithmen zum Video:</h3>
<table border="0">
<tr><th><b>Name</b></th><th><b>Schema</b></th><th><b>Algorithmus</b></th></tr>
<tr><td>&quot;Verhunzter&quot; Y-Perm / Ecken-Algorithmus</td><td><img border="0" src="images/PLL17.png" alt="Y-Perm" /></td><td><b><s><span style="color:red;">F</span></s> R U' R' U' R U R' F' R U R' U' R' F R <s><span style="color:red;">F'</span></s>, oder<br />beliebigen Y-Perm (siehe PLL-Algorithmen)</b></td></tr>
<tr><td>R-Perm / Parity</td><td><img border="0" src="images/PLL12c.png" alt="R-Perm" /></td><td><b>U' L U2 L' U2 L F' L' U' L U L F L2 U2, oder<br />R U' R' U' R U R D R' U' R D' R' U2 R' U', oder<br />U R U2 R' U2 l U' R' F' R F R U R' l', oder<br />beliebigen R-Perm (siehe PLL-Algorithmen)</b></td></tr>
<tr><td>T-Perm / Kanten-Algorithmus 1</td><td><img border="0" src="images/PLL10.png" alt="R-Perm (a?)" /></td><td><b>R U R' U' R' F R2 U' R' U' R U R' F', oder<br />beliebigen T-Perm (siehe PLL-Algorithmen)</b></td></tr>
<tr><td>J-Perm a / Kanten-Algorithmus 2</td><td><img border="0" src="images/PLL09.png" alt="R-Perm" /></td><td><b>R U R' F' R U R' U' R' F R2 U' R' U', oder<br />beliebigen J-Perm a (siehe PLL-Algorithmen)</b></td></tr>
<tr><td>J-Perm b / Kanten-Algorithmus 3</td><td><img border="0" src="images/PLL08b.png" alt="J-Perm a" /></td><td><b>U' R' U L' U2 R U' R' U2 L R, oder<br />beliebigen J-Perm b (siehe PLL-Algorithmen)</b></td></tr>
</table>

<h3>Routen-Memo-Methode</h3>
Es gibt 8 Eckenpositionen und 12 Kantenpositionen:<br />
<center><img border="0" alt="Ecknummerierung" src="images/pochmann1.gif" /> <img border="0" alt="Ecknummerierung" src="images/pochmann2.gif" /></center><br /><br />
Nun werden den Positionen beliebige Konsonanten zugeordnet. Ein Beispiel w&auml;re:
<table cellpadding="5" cellspacing="0" border="1"><tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td><td>11</td><td>12</td></tr>
       <tr><td>T/D</td><td>N</td><td>M</td><td>R</td><td>L</td><td>SCH/CH</td><td>K/CK</td><td>F/V</td><td>P/B</td><td>Z/S</td><td>G</td><td>W</td></tr>
</table><br />

Die 3 Achsen erhalten dann Vokale (z.B. x->O/U, y->A, z->E/I), wodurch sich jede Stickerfl&auml;che durch einen Vokal und einen Konsonanten eindeutig bestimmen l&auml;sst. (Kanten und Ecken d&uuml;rfen gleiche Buchstaben haben, da sie ja in unterschiedlichen Schritten abgearbeitet werden).<br />
Aus dem Konsonanten + Vokal kann man sich nun ein Wort bilden und als Gegenstand o.&auml;. in einer vordefinierten Route ablegen, die man beim Blindl&ouml;sen wieder abgeht.
<h4><u>Tipp 1:</u> Gib jedem Sticker einen eigenen Buchstaben (24 f&uuml;r Ecken, 24 f&uuml;r Kanten), um die W&ouml;rtervielfalt und Eindeutigkeit zu steigern. (Tipp von Moritz Karl)</h4>
<h4><u>Tipp 2:</u> Versuche, beim Merken eines Wortes m&ouml;glichst viele Sinne zu verwenden (Sehen, F&uuml;hlen, H&ouml;ren, ...). Damit pr&auml;gst du es dir besser ein!</h4>