Hier findet ihr eine Anleitung des sogenannten <b>2-Look PLL</b> der <a href="fridrich.php">Fridrich Methode</a>, das Vertauschen der Eck- und Kantensteine der letzten Ebene in 2 Schritten.<br />
F&uuml;r 2-Look PLL braucht man nur 7 (wenn man jeweils einen A- und einen U-Perm wegl&auml;sst sogar nur 5) Algorithmen anstelle von 21.<br />
Die Symbole stellen die oberste Ebene aus der Vogelperspektive dar.<hr /><br /><br />

<h2>Schritt 1:</h2>
Im 1. Schritt positioniert man alle Ecken richtig. Dazu stehen folgende Algorithmen zur Verf&uuml;gung (Kanten ignorieren):<br />

<table cellpadding="6" cellspacing="0" border="0">
<tr>
	<td><strong>ID</strong></td><td><strong>Symbol</strong></td><td><strong>Algorithmus</strong></td>
</tr>
<tr>
	<td> PLL 01<br />
    A-Perm.</td><td><img border="0" src="images/PLL01.png" alt="Symbol" /></td><td><code><b>Lw' U R' D2 R U' R' D2 R2, oder<br />
    <a onclick="return false;" href="#" style="color:#FF8C00;" onmouseover="Tip(image('PLL01b.png'))" onmouseout="UnTip()">y2</a> (L' B L') (F2 L B' L') (F2 L2), oder<br />
    R' U2 R2 U' L' U R' U' L U R' U2 R, oder<br />
    x R' U R' D2 R U' R' D2 R2, oder<br />
    <a onclick="return false;" href="#" style="color:#FF8C00;" onmouseover="Tip(image('PLL01b.png'))" onmouseout="UnTip()">y2</a> z F2 R U2 R' U2 F2 L' U2 L U2</b></code></td>
</tr>
<tr>
	<td> PLL 02<br />
    A-Perm.</td><td><img border="0" src="images/PLL02.png" alt="Symbol" /></td><td><code><b>Rw U' L D2 L' U L D2 L2, oder<br />
    <a onclick="return false;" href="#" style="color:#FF8C00;" onmouseover="Tip(image('PLL02b.png'))" onmouseout="UnTip()">y</a> x R2 D2 R U R' D2 R U' R, oder<br />
    <a onclick="return false;" href="#" style="color:#FF8C00;" onmouseover="Tip(image('PLL02b.png'))" onmouseout="UnTip()">y</a> R' U2 R U' L' U R U' L U R2 U2 R, oder<br />
    <a onclick="return false;" href="#" style="color:#FF8C00;" onmouseover="Tip(image('PLL02c.png'))" onmouseout="UnTip()">y'</a> z U2 L' U2 L F2 U2 R U2 R' F2, oder<br />
    <a onclick="return false;" href="#" style="color:#FF8C00;" onmouseover="Tip(image('PLL02d.png'))" onmouseout="UnTip()">y2</a> z' F2 L' U2 L U2 F2 R U2 R' U2</b></code></td>
</tr>
<tr>
	<td> PLL 03<br />
    E-Perm.</td><td><img border="0" src="images/PLL03.png" alt="Symbol" /></td><td><code><b>x' R U' R' D R U R' Uw2 R' U R D R' U' R, oder<br />
    x' R U' R' D R U R' D2 L' U L D L' U' L, oder<br />
    z' R' F R2 U R' B' R U' R2 F' R z R B R', oder<br />
    <a onclick="return false;" href="#" style="color:#FF8C00;" onmouseover="Tip(image('PLL03b.png'))" onmouseout="UnTip()">y</a> x U R' U' L U R U' r2' U' R U L U' R' U, oder<br />
   (r' R' U') (L D' L' U L) (R U' R' D R) U</b></code></td>
</tr>
</tr>
</table><br /><br />

<h2>Schritt 2:</h2>
Im 2. Schritt werden die Kanten positioniert. Danach ist der Cube gel&ouml;st. Folgende Algorithmen braucht man daf&uuml;r:<br />
<table cellpadding="6" cellspacing="0" border="0">
<tr>
	<td> PLL 04<br />
    Z-Perm.</td><td><img border="0" src="images/PLL04.png" alt="Symbol" /></td><td><code><b>M2 U M2 U M' U2 M2 U2 M' U2, oder<br />
    R2 U' R2 U R2 x' U2 R2 F U2 F' R2 U2, oder<br />
    R' U L' E2 L U' R L' U R' E2 R U' L', oder<br />
    U' l' U R U' D' R U D' R U' R' D2, oder<br />
    <a onclick="return false;" href="#" style="color:#FF8C00;" onmouseover="Tip(image('PLL04b.png'))" onmouseout="UnTip()">y</a> F2 M2 F2 M2 U M2 U M2 U2</b></code></td>
</tr>
<tr>
	<td> PLL 05<br />
    H-Perm.</td><td><img border="0" src="images/PLL05.png" alt="Symbol" /></td><td><code><b>M2 U M2 U2 M2 U M2, oder<br />
    R2' r2 U' L2 l2' U2 R2' r2 U' L2 l2', oder<br />
    F2 M2 F2 U' F2 M2 F2 U, oder<br />
    x U2 M2 U2 B' U2 M2 U2 B, oder<br />
    R U2 R' U' R' U' R2 U' R2 U2 R2 U2 R' U</b></code></td>
</tr>
<tr>
	<td> PLL 06<br />
    U-Perm.</td><td><img border="0" src="images/PLL06.png" alt="Symbol" /></td><td><code><b>R U' R U R U R U' R' U' R2, oder<br />
    M2 U M U2 M' U M2, oder<br />
    <a onclick="return false;" href="#" style="color:#FF8C00;" onmouseover="Tip(image('PLL06b.png'))" onmouseout="UnTip()">y2</a> M2 U M' U2 M U M2, oder<br />
    <a onclick="return false;" href="#" style="color:#FF8C00;" onmouseover="Tip(image('PLL06c.png'))" onmouseout="UnTip()">y'</a> R2 U' y r U2 r' R U2 R' y' U R2</b></code></td>
</tr>
<tr>
	<td> PLL 07<br />
    U-Perm.</td><td><img border="0" src="images/PLL07.png" alt="Symbol" /></td><td><code><b>R2 U R U R' U' R' U' R' U R', oder<br />
    M2 U' M U2 M' U' M2, oder<br />
    <a onclick="return false;" href="#" style="color:#FF8C00;" onmouseover="Tip(image('PLL07b.png'))" onmouseout="UnTip()">y2</a> M2 U' M' U2 M U' M2, oder<br />
    <a onclick="return false;" href="#" style="color:#FF8C00;" onmouseover="Tip(image('PLL07b.png'))" onmouseout="UnTip()">y2</a> R' U R' U' R' U' R' U R U R2, oder<br />
    <a onclick="return false;" href="#" style="color:#FF8C00;" onmouseover="Tip(image('PLL07b.png'))" onmouseout="UnTip()">y2</a> L' U' L U R U R' U2 L' U L U R U' R'</b></code></td>
</tr>
</table>