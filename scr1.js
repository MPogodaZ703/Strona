window.onload=function()
{

var data = new Date();
var nazwymies = ['Styczeń','Luty','Marzec','Kwiecień','Maj','Czerwiec','Lipiec','Sierpień','Wrzesień','Październik','Listopad','Grudzień'];
var nazwydni = ['Niedziela','Poniedziałek','Wtorek','Środa','Czwartek','Piątek','Sobota'];
var dnityg = data.getDay();
var mies = data.getMonth();
var dnimies = data.getDate();
var rok = data.getFullYear();
var godzina=data.getHours();
var minuty=data.getMinutes();

document.getElementById("rok").innerHTML=rok+"<br><br>";
document.getElementById("mies").innerHTML=nazwymies[mies]+"<br><br>";
document.getElementById("dzien").innerHTML=dnimies+"<br><br>";
document.getElementById("nazwadnia").innerHTML=nazwydni[dnityg]+"<br><br>";

	(godzina<10)?godzina="0"+godzina:godzina=godzina;
	(minuty<10)?minuty="0"+minuty:minuty=minuty;

	document.getElementById("prawy").innerHTML=godzina+" : "+minuty+"<br><br><img src='zdj.png' width='40%' height='55%'></img>";


}








