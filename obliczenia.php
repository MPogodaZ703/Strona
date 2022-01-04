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
<a href="kontakt.php">Kontakt  </a> </div><br><br>
<div id="srodek" align="center"> Okres wyporzyczenia  :<br>
<form action="obliczenia.php" method="POST"><br>
Od kiedy chcial bys wyporzyczyc lodz : <input type="number" name="liczba1" ><br><br>
Do kiedy chcial bys wyporzyczyc lodz : <input type="number" name="liczba2" ><br><br>
Lacznie dni :<input type="number" name="liczba3" ><br><br>
	<input type="submit" value="Sprawdz" name="przycisk" align="center"></input>
</form>
	</div>

<div id="prawy" style="background-image: url('jacht3.jpg');background-repeat : no-repeat; "> 
<style>
body {
  background-image: url('jacht.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>


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