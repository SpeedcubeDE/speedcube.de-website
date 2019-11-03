function openWindow(url, width, height, ht_focus, scrollbars)
{
	if (scrollbars == true) scrollbars = 'yes';
	else scrollbars = 'no';
	if ((width + 30 > screen.width) || (height + 60 > screen.height))
	{
	        width = width + 50;
                if (width > screen.width - 80)
			width = screen.width - 80;
	        height = height + 50;
		if (height > screen.height - 110)
			height = screen.height - 110;
		popupWin = window.open(url, "Image", "resizable,scrollbars="+scrollbars+",width=" + width + ",height=" + height + ",top=60,left=140,screenX=60,screenY=140");
	}
	else
	{
	        width = width + 18;
	        height = height + 26;
		popupWin = window.open(url, "Image", "resizable,scrollbars="+scrollbars+",width=" + width + ",height=" + height + ",top=60,left=140,screenX=60,screenY=140");
	}
	if (ht_focus == true) popupWin.focus();
	else popupWin.blur();
}

function imageover(file)
{
	document.form1.img1.src = file;
}


function contents(file)
{
	self.location.replace(file);
}


function mHigh()
{
	event.srcElement.style.filter = "invert";
}

function mBack()
{
	event.srcElement.style.filter = "";
}