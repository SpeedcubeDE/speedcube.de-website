<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
BODY {font-family:Arial, Helvetica, sans-serif; background-color:#FFFFFF; padding:8px;} 
#main {background-color:#EEEEEE; border:2px solid #FF0000; padding:4px; height:380px;}
#box {float:right; width:180px; height:350px; background-color:#FFFFCC; border:1px solid #333333; padding:5px; font-size:12px;}
#stat {height:200px; text-align:left; overflow:scroll;}
#timer {font-size:120px;}
A {text-decoration:none; color:#CC6600;}
A:hover {color:#333333; text-decoration:underline;}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Speedcube.de Timer</title>
<script type="text/javascript">
<!--

var obj;
var obj2;
var running = 0;
var tm_start = 0;
var intrval = 0;
var tm_stop = 0;
var tm_time_ms = 0;
var tm_time_m = 0;
var Zeiten = new Array();
var inspection = 0;
var inspection_timeout;
var time_total;
var running = 0;

function Numsort (a, b) {
  return a - b;
}

function getObject(object) {
	if (document.all) return document.all.object;
	else return document.getElementById(object);
}

function exact() {
	tm_stop = new Date();
	tm_stop = tm_stop.getTime();
	tm_time_ms = tm_stop-tm_start;
	tm_time_m = Math.floor(tm_time_ms / 60000);
	tm_time_ms = tm_time_ms % 60000;
	
	var elm1 = tm_time_m;
	var elm2 = Math.floor(tm_time_ms/1000);
	var elm3 = Math.floor((tm_time_ms/10)%100);
	if (elm1 < 10) {elm1 = '0'+elm1;}
	if (elm1 == 0) {elm1 = '00';}
	if (elm1 > 60) {
		elm1 = Math.floor(elm1 / 60)+':'+(elm1 % 60);
	}
	if (elm2 < 10) {elm2 = '0'+elm2;}
	if (elm2 == 0) {elm2 = '00';}
	if (elm3 < 10) {elm3 = '0'+elm3;}
	if (elm3 == 0) {elm3 = '00';}
	
	time_total = elm1+':'+elm2+'.'+elm3;
	obj.innerHTML = time_total;
}

function get_move_opposite(scr) {
	switch(scr) {
		case 0:
			return 1;
		case 1:
			return 0;
		case 2:
			return 3;
		case 3:
			return 2;
		case 4:
			return 5;
		case 5:
			return 4;
		default:
			return false;
	}
}

var Moves = new Array("U","D","R","L","F","B");
var Directions = new Array(" ","' ","2 ");

function new_scramble() {
	var rand_num = document.form.scramble_num.value;
	var scramble = "";
	var Rands = new Array();
	var rand1;
	var rand2;
	for (i=0;i<rand_num;i++) {
		rand1 = Math.floor(Math.random()*6);
		if (i>0) {
			if (i>1) {
				while(rand1==Rands[i-1] || rand1==Rands[i-2] || get_move_opposite(rand1)==Rands[i-2]) {
					rand1 = Math.floor(Math.random()*6);
				}
			} else {
				while(rand1==Rands[i-1]) {
					rand1 = Math.floor(Math.random()*6);
				}
			}
		}
		Rands[i] = rand1;
		rand2 = Math.floor(Math.random()*3);
		scramble += Moves[rand1]+Directions[rand2];
	}
	var scramble_div = getObject("scramble");
	scramble_div.innerHTML = "Scramble: "+scramble;
}

function t_stop() {
	window.clearInterval(intrval);
	if (inspection > 0) {
		window.clearTimeout(inspection_timeout);
		obj.innerHTML = "00:00.00";
		return;
	}
	exact();
	var stat = getObject("stat");
	var index = Zeiten.length;
	Zeiten[index] = time_total;
	stat.innerHTML = stat.innerHTML+(index+1)+".<div style=\"float:right; display:inline; text-align:right;\">"+time_total+"&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"#\" onclick=\"del_record("+index+")\">[x]</a></div><br />";
	new_scramble();
	set_averages();
}

function del_record(id) {
	Zeiten.splice(id,1);
	var stat = getObject("stat");
	stat.innerHTML = "";
	for (i=0;i<Zeiten.length;i++) {
		stat.innerHTML += (i+1)+".<div style=\"float:right; display:inline; text-align:right;\">"+Zeiten[i]+"&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"#\" onclick=\"del_record("+i+")\">[x]</a></div><br />";
	}
	set_averages();
}

function t_start() {
	inspection = inspection-1;
	if (inspection > 0) {
		obj.innerHTML = inspection;
		inspection_timeout = window.setTimeout("t_start()",1000);
		return;
	}
	tm_start = new Date();
	tm_start = tm_start.getTime();
	intrval = window.setInterval("exact()",50);
}

function leertaste() {
	if (running == 1) {
		t_stop();
		running = 0;
	} else {
		inspection = Number(document.form.inspection_time.value)+1;
		t_start();
		running = 1;
	}
	obj.focus();
}

function set_averages() {
	var average = getObject("average");
	var elements = Zeiten.length;
	var non = "--:--.--";
	var best;
	var avg1;
	var avg2;
	var avg3;
	var Zeiten_ms;
	var temp;
	var summe;
	var elm1;
	var elm2;
	var elm3;
	if (elements == 0) {
		best=non;
		avg1=non;
		avg2=non;
		avg3=non;
	} else if (elements < 5) {
		avg2=non;
		avg3=non;
		Zeiten_ms = new Array();
		summe=0;
		for (i=0;i<elements;i++) {
			temp = Zeiten[i].split(":");
			Zeiten_ms[i] = (Number(temp[0])*60)+Number(temp[1]*100);
			summe += Zeiten_ms[i];
		}
		Zeiten_ms.sort(Numsort);
		best = Zeiten_ms[0];
		elm1 = Math.floor(best / 6000);
		best = best % 6000;
		elm2 = Math.floor(best/100);
		elm3 = Math.floor((best)%100);
		if (elm1 < 10) {elm1 = '0'+elm1;}
		if (elm1 == 0) {elm1 = '00';}
		if (elm2 < 10) {elm2 = '0'+elm2;}
		if (elm2 == 0) {elm2 = '00';}
		if (elm3 < 10) {elm3 = '0'+elm3;}
		if (elm3 == 0) {elm3 = '00';}
		
		best = elm1+':'+elm2+'.'+elm3;
		
		summe = summe/elements;
		elm1 = Math.floor(summe / 6000);
		summe = summe % 6000;
		elm2 = Math.floor(summe/100);
		elm3 = Math.floor((summe)%100);
		if (elm1 < 10) {elm1 = '0'+elm1;}
		if (elm1 == 0) {elm1 = '00';}
		if (elm2 < 10) {elm2 = '0'+elm2;}
		if (elm2 == 0) {elm2 = '00';}
		if (elm3 < 10) {elm3 = '0'+elm3;}
		if (elm3 == 0) {elm3 = '00';}
		
		avg1 = elm1+':'+elm2+'.'+elm3;
	} else if (elements < 12) {
		avg3=non;
		Zeiten_ms = new Array();
		summe=0;
		for (i=0;i<elements;i++) {
			temp = Zeiten[i].split(":");
			Zeiten_ms[i] = (Number(temp[0])*60)+Number(temp[1]*100);
			summe += Zeiten_ms[i];
		}
		summe = summe/elements;
		elm1 = Math.floor(summe / 6000);
		summe = summe % 6000;
		elm2 = Math.floor(summe/100);
		elm3 = Math.floor((summe)%100);
		if (elm1 < 10) {elm1 = '0'+elm1;}
		if (elm1 == 0) {elm1 = '00';}
		if (elm2 < 10) {elm2 = '0'+elm2;}
		if (elm2 == 0) {elm2 = '00';}
		if (elm3 < 10) {elm3 = '0'+elm3;}
		if (elm3 == 0) {elm3 = '00';}
		
		avg1 = elm1+':'+elm2+'.'+elm3;
		
		summe=0;
		Zeiten_ms.sort(Numsort);
		
		best = Zeiten_ms[0];
		elm1 = Math.floor(best / 6000);
		best = best % 6000;
		elm2 = Math.floor(best/100);
		elm3 = Math.floor((best)%100);
		if (elm1 < 10) {elm1 = '0'+elm1;}
		if (elm1 == 0) {elm1 = '00';}
		if (elm2 < 10) {elm2 = '0'+elm2;}
		if (elm2 == 0) {elm2 = '00';}
		if (elm3 < 10) {elm3 = '0'+elm3;}
		if (elm3 == 0) {elm3 = '00';}
		
		best = elm1+':'+elm2+'.'+elm3;
		
		for (i=0;i<5;i++) {
			summe += Zeiten_ms[i];
		}
		summe = summe/5;
		elm1 = Math.floor(summe / 6000);
		summe = summe % 6000;
		elm2 = Math.floor(summe/100);
		elm3 = Math.floor((summe)%100);
		if (elm1 < 10) {elm1 = '0'+elm1;}
		if (elm1 == 0) {elm1 = '00';}
		if (elm2 < 10) {elm2 = '0'+elm2;}
		if (elm2 == 0) {elm2 = '00';}
		if (elm3 < 10) {elm3 = '0'+elm3;}
		if (elm3 == 0) {elm3 = '00';}
		
		avg2 = elm1+':'+elm2+'.'+elm3;
	} else {
		Zeiten_ms = new Array();
		summe=0;
		for (i=0;i<elements;i++) {
			temp = Zeiten[i].split(":");
			Zeiten_ms[i] = (Number(temp[0])*60)+Number(temp[1]*100);
			summe += Zeiten_ms[i];
		}
		summe = summe/elements;
		elm1 = Math.floor(summe / 6000);
		summe = summe % 6000;
		elm2 = Math.floor(summe/100);
		elm3 = Math.floor((summe)%100);
		if (elm1 < 10) {elm1 = '0'+elm1;}
		if (elm1 == 0) {elm1 = '00';}
		if (elm2 < 10) {elm2 = '0'+elm2;}
		if (elm2 == 0) {elm2 = '00';}
		if (elm3 < 10) {elm3 = '0'+elm3;}
		if (elm3 == 0) {elm3 = '00';}
		
		avg1 = elm1+':'+elm2+'.'+elm3;
		
		summe=0;
		Zeiten_ms.sort(Numsort);
		
		best = Zeiten_ms[0];
		elm1 = Math.floor(best / 6000);
		best = best % 6000;
		elm2 = Math.floor(best/100);
		elm3 = Math.floor((best)%100);
		if (elm1 < 10) {elm1 = '0'+elm1;}
		if (elm1 == 0) {elm1 = '00';}
		if (elm2 < 10) {elm2 = '0'+elm2;}
		if (elm2 == 0) {elm2 = '00';}
		if (elm3 < 10) {elm3 = '0'+elm3;}
		if (elm3 == 0) {elm3 = '00';}
		
		best = elm1+':'+elm2+'.'+elm3;
		
		for (i=0;i<5;i++) {
			summe += Zeiten_ms[i];
		}
		summe = summe/5;
		elm1 = Math.floor(summe / 6000);
		summe = summe % 6000;
		elm2 = Math.floor(summe/100);
		elm3 = Math.floor((summe)%100);
		if (elm1 < 10) {elm1 = '0'+elm1;}
		if (elm1 == 0) {elm1 = '00';}
		if (elm2 < 10) {elm2 = '0'+elm2;}
		if (elm2 == 0) {elm2 = '00';}
		if (elm3 < 10) {elm3 = '0'+elm3;}
		if (elm3 == 0) {elm3 = '00';}
		
		avg2 = elm1+':'+elm2+'.'+elm3;
		
		summe=0;
		for (i=0;i<12;i++) {
			summe += Zeiten_ms[i];
		}
		summe = summe/12;
		elm1 = Math.floor(summe / 6000);
		summe = summe % 6000;
		elm2 = Math.floor(summe/100);
		elm3 = Math.floor((summe)%100);
		if (elm1 < 10) {elm1 = '0'+elm1;}
		if (elm1 == 0) {elm1 = '00';}
		if (elm2 < 10) {elm2 = '0'+elm2;}
		if (elm2 == 0) {elm2 = '00';}
		if (elm3 < 10) {elm3 = '0'+elm3;}
		if (elm3 == 0) {elm3 = '00';}
		
		avg3 = elm1+':'+elm2+'.'+elm3;
	}
	average.innerHTML = "<div style=\"float:right;display:inline;text-align:right;\">"+best+"</div>best of "+elements+":<br /><div style=\"float:right;display:inline;text-align:right;\">"+avg1+"</div>average of "+elements+":<br /><div style=\"float:right;display:inline;text-align:right;\">"+avg2+"</div>average 5/"+elements+":<br /><div style=\"float:right;display:inline;text-align:right;\">"+avg3+"</div>average 12/"+elements+":";
}

function clear() {
	obj = getObject('timer');
	obj2 = getObject('main');
	running = 0;
	tm_start = 0;
	intrval = 0;
	tm_stop = 0;
	tm_time_ms = 0;
	tm_time_m = 0;
	obj.innerHTML = "00:00.00";
	Zeiten = new Array();
	set_averages();
	new_scramble();
	obj.focus();
}

function sort_list() {
	var stat = getObject("stat");
	stat.innerHTML = "";
	var Zeiten_ms;
	var temp;
	var elm1;
	var elm2;
	var elm3;
	Zeiten_ms = new Array();
	for (i=0;i<Zeiten.length;i++) {
			temp = Zeiten[i].split(":");
			Zeiten_ms[i] = (Number(temp[0])*60)+Number(temp[1]*100);
	}
	Zeiten_ms.sort(Numsort);
	for (i=0;i<Zeiten.length;i++) {
		elm1 = Math.floor(Zeiten_ms[i] / 6000);
		Zeiten_ms[i] = Zeiten_ms[i] % 6000;
		elm2 = Math.floor(Zeiten_ms[i]/100);
		elm3 = Math.floor((Zeiten_ms[i])%100);
		if (elm1 < 10) {elm1 = '0'+elm1;}
		if (elm1 == 0) {elm1 = '00';}
		if (elm2 < 10) {elm2 = '0'+elm2;}
		if (elm2 == 0) {elm2 = '00';}
		if (elm3 < 10) {elm3 = '0'+elm3;}
		if (elm3 == 0) {elm3 = '00';}
		
		Zeiten[i] = elm1+':'+elm2+'.'+elm3;
	}
	for (i=0;i<Zeiten.length;i++) {
		stat.innerHTML += (i+1)+".<div style=\"float:right;display:inline; text-align:right;\">"+Zeiten[i]+"&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"#\" onclick=\"del_record("+i+")\">[x]</a></div><br />";
	}
}
function Key(Ereignis) {
	if (!Ereignis) Ereignis = event;
	if (Ereignis.keyCode == 32) leertaste()
}
event.onKeyUp = Key();
function ok() {
	obj2.style.borderColor = "#CCCCCC";
}
function no() {
	obj2.style.borderColor = "#FF0000";
}
//-->
</script>
</head>

<body onkeyup="if(event.keyCode == 32) { leertaste() }">
<div id="main" onmouseover="ok()" onmouseout="no()" onclick="ok()">

<div id="box">
<div id="stat"></div>
<div id="average"></div><br />
<a href="#" onclick="sort_list()">[Liste nach Zeiten sortieren]</a><br /><br />
<form name="form">
<table><tr><td>inspection time:</td><td><input type="text" value="10" name="inspection_time" size="2" style="background:#FFFFFF; border: 0px; font-size:12px;" /></td><td>seconds</td></tr>
<tr><td>Scramble length:</td><td><input type="text" value="20" name="scramble_num" size="2" style="background:#FFFFFF; border: 0px; font-size:12px;" /></td><td>moves</td></tr></table>
</form>
</div>
<div style="float:right;display:inline; text-align:left; margin-right:20px; margin-top:5px; font-size:11px;">
Mit der <b>Leertaste</b> startest und stoppst du den Timer,<br />
die Maus muss dabei auf dem grauen Bereich liegen.<br />
Wenn es trotzdem nicht geht, verwende bitte einen anderen Browser.
<noscript><br /><span style="color:#FF0000;">Dein Browser hat Javascript deaktiviert, was allerdings f&uuml;r den Timer ben&ouml;tigt wird! Bitte aktiviere javaScript!</span></noscript>
</div>
<div style="text-align:center; font-size:10px; width:340px; padding:0px; margin:0px;"><a target="_blank" href="http://www.speedcube.de"><img border="0" alt="Speedcube.de - Timer" src="images/timer_logo.png" /></a><br />
Speedcubing Online-Timer | <a target="_blank" href="http://www.speedcube.de">Speedcube.de</a> | <a target="_blank" href="http://www.speedcube.de/forum/">Speedcube.de Forum</a>
</div>
<br />
<center><div id="timer">00:00.00</div><br />
<div id="scramble"></div></center>
<script type="text/javascript">clear();</script>

</div>
<center><span style=" font-size:10px; color:#666666;">&copy; Copyright 2009-2010 www.speedcube.de</span></center>
</body>
</html>
