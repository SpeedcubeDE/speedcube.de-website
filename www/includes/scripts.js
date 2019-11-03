function image(url) {
	return "<img border=\"0\" src=\"images/"+url+"\" alt=\"Symbol\" />";
}
function li(object,type_art) {
	object.type = type_art;
}

function radioWert(rObj) {
	for (var i=0; i<rObj.length; i++) if (rObj[i].checked) return rObj[i].value;
	return false;
}
function signatur_info() {
	if (document.all) {
		obj_a = document.all.signaturfeld1;
		obj_b = document.all.signaturfeld2;
		obj_c = document.all.signaturfeld3;
	} else {
		obj_a = document.getElementById("signaturfeld1");
		obj_b = document.getElementById("signaturfeld2");
		obj_c = document.getElementById("signaturfeld3");
	}
	obj2 = document.signatur_formular;
	url = 'http://speedcube.de/signatur_image.php?name='+escape(obj2.name.value)+'&pb='+escape(obj2.pb.value)+'&avg='+escape(obj2.avg.value)+'&tech='+radioWert(obj2.tech)+'&long='+radioWert(obj2.long)+'&motiv='+radioWert(obj2.motiv);
	obj_a.value = url;
	obj_b.value = '<a href="http://www.speedcube.de/signatur.php"><img border="0" alt="Signatur-Bild" src="'+url+'" /></a>';
	obj_c.value = '[url=http://www.speedcube.de/signatur.php][img]'+url+'[/img][/url]';
}

function check_width() {
	if (screen.width <= 900) {
		if (document.all) obj = document.all.warning;
		else obj = document.getElementById("warning");
		warning.innerHTML = "!Hinweis: Die Seite wird mit dieser geringen Aufl&ouml;sung unsch&ouml;ner dargestellt als mit einer gr&ouml;&szlig;eren Aufl&ouml;sung!";
	}	
}

function getPosition(element)
/* der Aufruf dieser Funktion ermittelt die absoluten Koordinaten
   des Objekts element */
{
  var elem=element,tagname="",x=0,y=0;

/* solange elem ein Objekt ist und die Eigenschaft offsetTop enthaelt
   wird diese Schleife fuer das Element und all seine Offset-Eltern ausgefuehrt */
  while ((typeof(elem)=="object")&&(typeof(elem.tagName)!="undefined"))
  {
    y+=elem.offsetTop;     /* Offset des jeweiligen Elements addieren */
    x+=elem.offsetLeft;    /* Offset des jeweiligen Elements addieren */
    tagname=elem.tagName.toUpperCase(); /* tag-Name ermitteln, Grossbuchstaben */

/* wenn beim Body-tag angekommen elem fuer Abbruch auf 0 setzen */
    if (tagname=="BODY")
      elem=0;

/* wenn elem ein Objekt ist und offsetParent enthaelt
   Offset-Elternelement ermitteln */
    if (typeof(elem)=="object")
      if (typeof(elem.offsetParent)=="object")
        elem=elem.offsetParent;
  }

/* Objekt mit x und y zurueckgeben */
  position=new Object();
  position.x=x;
  position.y=y;
  return position;
}


function bodyload() {
    chatteundcube();
}

function chatteundcube() {
    if (obj = document.getElementById("ocsbutton")) {
        obj2 = document.getElementById("chatteundcube");
        pos = getPosition(obj);
        obj2.style.display = "inline";
        obj2.style.top     = (pos.y+30)+"px";
        obj2.style.left    = (pos.x+10)+'px';
    }
}