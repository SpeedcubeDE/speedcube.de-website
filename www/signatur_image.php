<?php

Header("Content-Type: image/png, charset=utf-8");

$name = $_GET['name'];
$pb = $_GET['pb'];
$avg = $_GET['avg'];
$tech = (int)$_GET['tech'];
$long = (int)$_GET['long'];
$motiv = (int)$_GET['motiv'];

$URLplus = '';
if ($long == 0) $URLplus = 'short';
if ($long == 2) $URLplus = 'middlelong';
if ($long == 3) $URLplus = 'long';

if ($motiv == 1) {
	if ($tech == 1) $use_img_url = 'images/signatur2b'.$URLplus.'.png';
	else $use_img_url = 'images/signatur1b'.$URLplus.'.png';
} else {
	if ($tech == 1) $use_img_url = 'images/signatur2'.$URLplus.'.png';
	else $use_img_url = 'images/signatur1'.$URLplus.'.png';
}

$img = ImageCreateFromPNG($use_img_url);

$black = ImageColorAllocate($img, 0, 0, 0);


$font_height = ImageFontHeight(1);
$font_width = ImageFontWidth(1);


ImageString($img, 1, 107, 15, $name, $black); 
ImageString($img, 2, 107, 25, $pb, $black); 
ImageString($img, 2, 107, 36, $avg, $black); 


ImagePNG($img);
ImageDestroy($img);
?>