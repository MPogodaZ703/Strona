<html>
<head>
<meta charset="UTF-8">
<title>JACHTOWNIA</title>

<link rel="stylesheet" href="formatowanie.css" type="text/css">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-2">
<SCRIPT LANGUAGE= "JavaScript" type= "text/javascript">
var timerID = null
function wyswietlCzas()
{
  var data = new Date();
  var godziny = data.getHours();
  var minuty = data.getMinutes();
  var sekundy = data.getSeconds();
  var czas = godziny;
  czas += ((minuty < 10) ? ":0" : ":") + minuty;
  czas += ((sekundy < 10) ? ":0" : ":") + sekundy;
  czas = "<B>" + czas + "</B>"
  document.getElementById("zegarLayer").innerHTML = czas;
  timerID = setTimeout("wyswietlCzas()",1000);
}
</SCRIPT>

</head>

<body onLoad="wyswietlCzas()">
<DIV
  ID="zegarLayer"
  STYLE="
    visibility: visible;
    color: black;
    position: absolute;
    top: 40;
    left: 50;
	font-size: 30px"
>
</DIV>
<div id="naglowek">
<?php
$fgc=file_get_contents("autor.txt","r");
echo "<autor>".$fgc."<autor>";



?>
 </div>
<div id="lewy"><a href="index.php">Strona główna </a><br><br>
<a href="rejestracja.php">Rezerwacja jachtu</a><Br><br>
<a href="obliczenia.php">Sprawdzenie wolnych terminow </a> <br><br>
<a href="onas.php">O nas  </a> <br><br>
<a href="kontakt.php">Kontakt  </a> </div><br>
<div id="srodekdwa"> 
<style>
body {
  background-image: url('jacht.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style><h5> 
Tel: 22 5324 435<br><br>
mail: jachtownia@domena.pl <br><br>

Znajdziesz nas pod adresem : Józefa Lewartowskiego 17, 00-169 Warszawa
 </h5> 
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2442.6748134651048!2d20.98777081579739!3d52.24928997976385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ecc7893fef3ad%3A0x9e084209594a5b38!2sWarszawska%20Wy%C5%BCsza%20Szko%C5%82a%20Informatyki!5e0!3m2!1spl!2spl!4v1641301467462!5m2!1spl!2spl" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
 
 
 </div>
<div id="stopka">
<?php
$data=getdate();
$n=100;

$dzien=$data['weekday'];
$miesiac=$data['month'];
$rok=$data['year'];

echo " <br>Dzisiejsza data  : <b> $dzien-$miesiac-$rok </b>";

$e=mktime(0,0,0,5,1,2022);
$dzis=time();
$do_e_sekund=($e-$dzis);
$do_e_dni=floor(($do_e_sekund/(60*60*24)));

echo "<br><br>Do rozpoczecia sezonu jachtowego zostalo dokladnie: <b> $do_e_dni </b>";

?>
</div>



</body>

</html>