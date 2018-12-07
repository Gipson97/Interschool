var timeout	= 200;
var closetimer	= 0;
var contactMenu	= 0;

function contact(id)
{	
	
	mcancelclosetime();

	
	if(contactMenu) contactMenu.style.visibility = 'hidden';

	
	contactMenu = document.getElementById(id);
	contactMenu.style.visibility = 'visible';

}
function mclose()
{
	if(contactMenu) contactMenu.style.visibility = 'hidden';
}


function mclosetime()
{
	closetimer = window.setTimeout(mclose, timeout);
}


function mcancelclosetime()
{
	if(closetimer)
	{
		window.clearTimeout(closetimer);
		closetimer = null;
	}
}


document.onclick = mclose; 