Hier habt ihr die Algorithmen f&uuml;r die 2 m&ouml;glichen Sonderf&auml;lle (parities) beim 4x4-Cube.<br />
<b>Die Algorithmen sind auch f&uuml;r alle gr&ouml;&szlig;eren Cubes g&uuml;ltig und anwendbar!</b>
<hr />

<h2>Parity-Algorithmen</h2>
Bei Big Cubes k&ouml;nnen w&auml;hrend des L&ouml;sens wie einen 3er (nach der Reduction) 2 Sonderf&auml;lle auftreten. Mit folgenden Algorithmen lassen sie sich l&ouml;sen.<br />
Kleinbuchstaben stehen hier f&uuml;r innere Kanten, Gro&szlig;buchstaben f&uuml;r &auml;u&szlig;ere Kanten!
<table cellspacing="5" cellpadding="2" border="0">
<tr><td>OLL-Parity</td><td><img border="0" src="images/4x4_oll_parity.gif" alt="Symbol" /></td><td>(Anwendung bei OLL) Hier werden die 2 Einzel-Kantensteine vertauscht, wodurch die &quot;Gesamtkante&quot; wieder richtig gekippt wird.<br />
    Man kann bei dem OLL-Parity statt den inneren Ebenen (r) auch beide Ebenen drehen (R+r = Rw), was drehfreudiger ist und beim normalen Anwenden w&auml;hrend des OLL keine nachteiligen Ver&auml;nderungen hervorruft.<br /><code>r2 B2 U2 l U2 r' U2 r U2 F2 r F2 l' B2 r2</code></td></tr>
<tr><td>PLL-Parity</td><td><img border="0" src="images/4x4_pll_parity.gif" alt="Symbol" /></td><td>(Anwendung bei PLL) Beim PLL-Parity l&auml;sst sich der Cube durch eine normale Permutation nicht l&ouml;sen.<br />
    Der Algorithmus vertauscht 2 gegen&uuml;berliegende Kantenpaare, wodurch eine normale Permutation m&ouml;glich wird.<br />
    (Das Bild ist eigentlich falsch, die Pfeile m&uuml;ssten sich kreuzen)<br /><code>r2 U2 r2 Uw2 r2 u2</code></td></tr>
</table>

<h2>Verschiedenes Auftreten des PLL-Parities</h2>
<table cellspacing="5" cellpadding="2" border="0">
<tr><td>PLL-Parity</td><td><img border="0" src="images/4x4_pll_parity_b.gif" alt="Symbol" /></td><td>Achtung: Kein Z-Perm! Alle anderen Seiten sind gel&ouml;st.<br />
    Bei diesem Fall kann man den PLL-Parity-Algorithmus nicht direkt anwenden, man muss zun&auml;chst einen Setup-Move machen, wie z.B. F U' F', und kann dann den oben angegebenen Algorithmus verwenden.</td></tr>
<tr><td>PLL-Parity</td><td><img border="0" src="images/4x4_pll_parity_c.gif" alt="Symbol" /></td><td>Dieser Fall wird irrt&uuml;mlicherweise als eigener Parity angesehen<br />
Dabei handelt es sich auch um einen PLL-Parity. Das sieht man allerdings erst, wenn man mit einem Algorithmus, z.B. T-Perm, die Ecken richtig angeordnet hat.<br />
Auch hier l&auml;sst sich der oben angegebene Algorithmus verwenden</td></tr>
</table>