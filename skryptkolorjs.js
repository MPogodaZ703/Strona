function losowy_kolor()
{
var kolor=['#C8E6C9','#E8F5E9','#00BFA5','#1DE9B6','#64FFDA','#A7FFEB','#81C784'];

var dlugosc=kolor.length;

var los=Math.floor(Math.random()*dlugosc);

document.bgColor=kolor[los];

}

window.onload=function()
{
	losowy_kolor();
}

