<h2>Algorithmus, aber wie? - Notation lernen!</h2>
<u><h3>Teil 1/3: Einfache Bewegungen:</h3></u>
Um den W&uuml;rfel zu l&ouml;sen, muss man bestimmte Zugfolgen, sogenante Algorithmen lernen.<br />
Doch wie setzt man den z.B. Algorithmus <b>F R U R' U' F'</b> in Bewegungen am W&uuml;rfel um?<br />
Dazu muss man vorher die Notation verstehen. Jedes Zeichen steht f&uuml;r eine bestimmte Bewegung. Also besteht unser Beispielalgorithmus aus 6 Bewegungen:<br />
<b>F&nbsp;&nbsp;&nbsp;R&nbsp;&nbsp;&nbsp;U&nbsp;&nbsp;&nbsp;R'&nbsp;&nbsp;&nbsp;U'&nbsp;&nbsp;&nbsp;F'</b><br /><br />

Wenn wir die Anf&uuml;hrungszeichen <b>'</b> (welche f&uuml;r "inverted" oder "inverse" stehen, mehr dazu sp&auml;ter) einmal wegdenken, sehen wir, dass so ein Algorithmus aus Buchstaben besteht.<br />
Welcher Buchstaben f&uuml;r welche Bewegung steht, zeige ich in dieser Tabelle:
<table cellpadding="0" cellspacing="5" border="0">
<tr><td>Symbol:</td><td></td><td><b>F</b></td><td><b>B</b></td><td><b>R</b></td><td><b>L</b></td><td><b>U</b></td><td><b>D</b></td></tr>
<tr><td>Bedeutung:</td><td></td><td>Front</td><td>Back</td><td>Right</td><td>Left</td><td>Up</td><td>Down</td></tr>
<tr><td>&Uuml;bersetzung:</td><td></td><td>Vorne</td><td>Hinten</td><td>Rechts</td><td>Links</td><td>Oben</td><td>Unten</td></tr>
</table><br />

Jetzt wissen wir schon, welche Seite des W&uuml;rfels wir z.B. bei <b>F</b> drehen m&uuml;ssen, n&auml;mlich die Vordere, die einem entgegenschaut!<br />
Doch wir k&ouml;nnen die Vordere Ebene nun auf 3 Weisen drehen: im Uhrzeigersinn, gegen den Uhrzeigersinn und um 180&deg; (ob die 180&deg; Drehung im Uhrzeigersinn oder gegen ihn erfolgt, ist ja logischerweise egal).<br />
Um in einem Algorithmus zu definieren, wie man die gew&uuml;nschte Ebene dreht, ist an dem Symbol noch ein weiteres Zeichen... in der folgenden Tabelle sehen wir die Erkl&auml;rung der 3 Drehm&ouml;glichkeiten f&uuml;r F (Front, Vorne):
<table>
<tr><td>Symbol:</td><td></td><td><b>F</b></td><td><b>F'</b></td><td><b>F2</b></td><td><b>F'2</b></td></tr>
<tr><td>Bedeutung:</td><td></td><td>Front</td><td>Front inverted</td><td>2x Front</td><td>2x Front inverted</td></tr>
<tr><td>&Uuml;bersetzung:</td><td></td><td>Im Uhrzeigersinn</td><td>Gegen den Uhrzeigersinn</td><td>180&deg; Drehung</td><td>180&deg; Drehung</td></tr>
</table><br />

nun kommt das W&ouml;rtchen 'inverted' bzw. 'inverse' dazu, welches nicht mehr als "umgekehrt", oder in diesem Fall "gegen den Uhrzeigersinn" hei&szlig;t.<br />
Wenn man Algorithmen aufsagt, dann sagt man manchmal "Prime" und nicht "inverted", au&szlig;erdem sagt man &uuml;blicherweise nur den Buchstaben (in englisches Aussprache), z.B. "R prime" und nicht "Right inverted"<br />
Daraus kann man schlie&szlig;en, dass Bewegungen immer <b>im Uhrzeigersinn</b> erfolgen, es sein denn, es folgt ein Zeichen f&uuml;r 'inverted' (mei&szlig;tens ein einfaches Anf&uuml;hrungszeichen oder ein i)!<br />
F'2 bewirkt &uuml;brigens dasselbe wie F2, nur dass darauf hingewiesen wird, die Vorderseite gegen den Uhrzeigersinn zu drehen, doch mei&szlig;tens dreht man vom Gef&uuml;hl her in die Richtung, die gerade einfacher ist.<br /><br />

<center>Beispiel anhand unseres Algorithmus <b>F R U R' U' F'</b> (menschlicher Blickwinkel: gr&uuml;ne Seite ist vorne (F), wei&szlig;e Seite ist oben (U)):<br />
<img src="images/example_1.gif" border="2" alt="Beispiel" /></center><br /><br />

<b>&Uuml;bung:</b> Nimm dir Zeit und versuche mal folgenden Algorithmus anzuwenden: <a href="#" onmouseover="Tip('Wenn dein W&uuml;rfel durcheinander ist, dann merk dir bitte das allgemeine Farbmuster,<br />also ein grobes Abbild davon, wie er jetzt aussieht')" onmouseout="UnTip()">(!)</a><br />
&nbsp;&nbsp;&nbsp;&nbsp;<b>R2 U R U R' U' R' U' R' U R'</b><br />
Wenn bei deinem W&uuml;rfel nun nur 3 Teile vertauscht sind, hast du den Algorithmus erfolgreich angewendet! Gl&uuml;ckwunsch!<br /><br />
Und hier auch gleich der Algorithmus, der den vorherigen r&uuml;ckg&auml;ngig macht (wenn du den W&uuml;rfel gleich h&auml;lst!):<br />
&nbsp;&nbsp;&nbsp;&nbsp;<b>R U' R U R U R U' R' U' R2</b>&nbsp;&nbsp;&nbsp;Und das ist nur der vorherige in r&uuml;ckw&auml;rts!<br /><br />

Nun zu dem Anh&auml;ngsel w, welches z.B. in so einer Form auftreten kann: Fw<br />
Dieses w bedeutet nur, dass du nicht nur F, also die vordere Ebene, sondern auch die dahinterliegende Mitte S (mehr im n&auml;chsten Teil) mitdrehst!<br />
Also w&uuml;rde bei Fw nur B unangetastet bleiben, da Fw ja f&uuml;r F + S gilt...<br /><br />

<b>Gel&auml;ufige Schreibweise statt 'w':</b><br />
Oft wird auch statt Rw r geschrieben und statt Fw' f', das ist eine gel&auml;ufige Schreibweise...<br />
<table>
<tr><td><b>mit 'w'</b></td><td><b>gel&auml;ufig</b></td></tr>
<tr><td>Lw</td><td>l</td></tr>
<tr><td>Rw</td><td>r</td></tr>
<tr><td>Fw</td><td>f</td></tr>
<tr><td>Bw</td><td>b</td></tr>
<tr><td>Uw</td><td>u</td></tr>
<tr><td>Dw</td><td>d</td></tr>
</table>
leicht zu merken und verk&uuml;rzt Algorithmen!<br /><hr />

<u><h3>Teil 2/3: Bewegung der Mitten & Gruppierungen</h3></u>
<small><b>Hinweis:</b> Wenn du nur die Anf&auml;ngermethode lernen (oder nur 1x ausf&uuml;hren) willst, dann brauchst du nichtmehr weiterzulesen! <a href="lbl.php">&raquo; Direkt zum Tutorial!</a></small><br />
Vielleicht denkst du jetzt, du kannst alle Algorithmen anwenden, aber ich muss dich leider entt&auml;uschen... es gibt noch ein paar Bewegungen, die du lernen muss. Aber das wird jetzt ein Klax ;)<br />
Nehmen wir und mal einen anderen Beispielalgorithmus:
&nbsp;&nbsp;&nbsp;&nbsp;<b>(M'2 U) (M'2 U) (M' U2) (M'2 U2) (M' U2)</b><br />
So, jetzt einen kurzen OhMeinGott-Moment, un dann erkl&auml;re ich dir, was es hiermit auf sich hat!<br /><br />

Das M steht nur f&uuml;r eine weitere Bewegung und die Klammern k&ouml;nnte man eigentlich weglassen! Doch die Klammern haben auch einen guten Sinn, aber erstmal erkl&auml;re ich das M (und 2 weitere Bewegungen):
<table>
<tr><td>Symbol:</td><td></td><td><b>M</b></td><td><b>E</b></td><td><b>S</b></td></tr>
<tr><td>Bedeutung:</td><td></td><td>Middle</td><td>Equator</td><td>Standing</td></tr>
<tr><td>&Uuml;bersetzung:</td><td></td><td>vertikale Mitte </td><td>horizontale (äquatorial-) Mitte </td><td>frontale Mitte</td></tr>
</table><br />
Falls das nicht selbsterkl&auml;rend ist:<br />
&nbsp;&nbsp;&nbsp;&nbsp;Die vertikale Mitte M ist senkrecht und zwischen L und R!<br />
&nbsp;&nbsp;&nbsp;&nbsp;Die horizontale Mitte E ist waagrecht und zwischen U und D!<br />
&nbsp;&nbsp;&nbsp;&nbsp;Die frontale Mitte S ist... &auml;hm... naja sie schaut einen an und sie ist zwischen F und B!<br /><br />

Nun hat man das Problem, dass man nicht genau wei&szlig;, was jetzt in den Uhrzeigersinn und was gegen ihn sein soll... Daf&uuml;r gilt die sog. RUF-Regel (den Namen hab ich erfunden):<br />
<b>RUF-Regel: Hauptbewegungen sind R, U und F</b><br />
Bei 2 Bewegungen ist es genau umgekehrt, aber meißtens werden Cube-Rotations (Bewegung des ganzen Würfels) oder Slices (Bewegungen der Mitten) wie U, R oder F ausgef&uuml;hrt.<br />
&nbsp;&nbsp;&nbsp;&nbsp;M: Wie R<b>'</b> (Achtung umgekehrt!), vertikale Mitte wird nach unten bewegt.<br />
&nbsp;&nbsp;&nbsp;&nbsp;E: Wie U<b>'</b> (Achtung umgekehrt!), die horizontale Mitte wird nach rechts bewegt!<br />
&nbsp;&nbsp;&nbsp;&nbsp;S: Wie F (normal), die frontale Mitte wird nach rechts bzw. unten bewegt!<br /><br />

<center>Beispiel anhand unseres Algorithmus <b>(M'2 U) (M'2 U) (M' U2) (M'2 U2) (M' U2)</b> (menschlicher Blickwinkel: gr&uuml;ne Seite ist vorne (F), wei&szlig;e Seite ist oben (U)):<br />
<img src="images/example_2.gif" border="2" alt="Beispiel" /></center><br /><br />

Nun zu den Klammern... diese haben eigentlich etwas mit Fingertricks zu tun, da sie angeben, welche Bewegungen man vereint! Doch als Anf&auml;nger d&uuml;rfte es noch schwer fallen, z.B. M2 auszuf&uuml;hren und im flie&szlig;enden Anschluss gleich noch U, doch zu dieses Thema gibt es ja Fingertricks, also machen wir mal weiter...<br /><br />

<b>&Uuml;bung:</b> Versuche folgenden Algorithmus anzuwenden (&uuml;berspringe einfach die Klammern):<br />
&nbsp;&nbsp;&nbsp;&nbsp;<b>F (R U R' U') S (R U R' U') Fw'</b><br />
<br /><hr />


<u><h3>Teil 3/3: Bewegung des W&uuml;rfels</h3></u>
Jetzt gibt es nurnoch 3 Buchstaben: x,y und z<br />
Doch diese stehen nicht f&uuml;r Bewegungen einer oder zweier Ebenen, sondern einer Bewegung des ganzen W&uuml;rfels!<br />
Doch wie soll man den W&uuml;rfel nun drehen, wenn z.B. y' angegeben ist? Man w&uuml;rde ihn so nach links drehen, dass L (left, links) nun nach vorne zeigt und somit das neue F (front, vorne) ist! Und warum? <b>RUF-Regel + "inverted"</b>, also sind x, y und z wie R, U und F (x -> R, y -> U, z -> F), nur halt mit dem ganzen Cube<br />
x2, y2 und z2 sollten selbsterkl&auml;rend sein.<br /><br />

Das ist jetzt vielleicht verwirrend (obwohl die RUF-Regel bei Cube-Rotations eigentlich idiotensicher ist), aber mit etwas &Uuml;bung kann man sich diese Bewegungen merken!

Nehmen wir folgenden Algorithmus als Beispiel:<br />
&nbsp;&nbsp;&nbsp;&nbsp;<b>(R U R') y' (R'2 Uw' R U') (R' U R' Uw R2)</b><br />
Dieser w&uuml;rde so ausgef&uuml;hrt werden:<br />
<center><img src="images/example_4.gif" border="2" alt="Beispiel" /><br />
<b>WICHTIG:</b> Bei Uw' und Uw musste ich improvisieren! Ich habe da jeweils 2 Bewegungen gemacht, um die 2 entsprechenden Ebenen zu drehen!</center><br /><hr />
<h2 style="color:#FFFF66;">Herzlichen Gl&uuml;ckwunsch! Du beherrschst nun die Notation und kannst alle Algorithmen f&uuml;r den 3x3x3 Rubiks Cube anwenden!</h2>
Nun kannst du anfangen die <a href="lbl.php">Anf&auml;ngermethode (LbL)</a> zu lernen!