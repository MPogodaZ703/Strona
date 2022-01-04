<html>
<head>
<meta charset="UTF-8">
<title>JACHTOWNIA</title>
<link rel="stylesheet" href="formatowanie.css" type="text/css">


</head>

<body>
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
<div id="srodek" align="left"> Okres wyporzyczenia  :<br>
<form action="rejestracja.php" method="POST">
<table>
	<tr><td>Wprowadz imie:</td><td><input type="text" name="imie" /></td></tr>
	<tr><td>Wprowadz nazwisko:</td><td><input type="text" name="nazwisko" /></td></tr>
	</table>
	<br>
	Wybierz miejsce wyporzyczenia: <br>
	<input type="radio" name="miejsce" value="JEZIORO" />JEZIORO <br>
	<input type="radio" name="miejsce" value="MORZE" />MORZE <br>
	<br>Na jak dlugo chcialbys wyporzyczyc jacht ?<br>
	<input type="checkbox" name="czas[]" value="doba" />doba<br>
	<input type="checkbox" name="czas[]" value="2 doby" />2 doby<br>
	<input type="checkbox" name="czas[]" value="3 doby " />3 doby<br>
	<input type="checkbox" name="czas[]" value="tydzien " />tydzien<br>
	<input type="checkbox" name="czas[]" value="miesiac" />miesiac<br><br>

	Wybierz Jezioro / Morze:<br> 
	<select name="woda"> <option>Morze Baltyckie</option><br>
	<option>Sniadrwy</option>
	<option>Balkaj</option>
	<option>Wydminskie</option>
	<option>Sasek Wielki</option>
	<option>Sasek maly</option>
	</select>
	<br>
	<br>Ilo metrowa lodz Cie interesuje ?<br>
	    <select name="metry[]" multiple="multiple">
    	<option value="1">1</option>
    	<option value="2">2</option>
    	<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
    </select><br>
	<br>Specjalne uwagi/zyczenia: <br>
	<textarea name="opinia">
     </textarea>
	<button type="submit" value="wyslij" name="przycisk">Wyślij</button>
</form>


</h2> </div>
<div id="prawy" style="background-image: url('jacht2.jpg');background-repeat : no-repeat; ">
<style>
body {
  background-image: url('jacht.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
<zm class="tak"> 
<?php

if(isset($_POST['przycisk']))
{
	$imie=@$_POST['imie'];
	$nazwisko=@$_POST['nazwisko'];
	$miejsce=@$_POST['miejsce'];
	$czas=@$_POST['czas'];
	$woda=@$_POST['woda'];
	$metry=@$_POST['metry'];
	$opinia=@$_POST['opinia'];
	
	print "<li>Imie: $imie";
	print "<li>Nazwisko:$nazwisko";
	print "<li>Miejsce	: $miejsce";
	print "<li> Czas	: $czas";

  	print "<br><h3><li>Metry:</h3> ";
  
  		foreach($miejsce as $kl )
	{
		echo $kl. ", ";
	}
	
		print "<h3><br><li>woda	:</h3> ";
	
	foreach($woda as $war )
	{
		echo $war. ", ";
	}
  
  
  $fa=fopen("opinia.txt","a");
  $tekst =@$opinia . "\r\n";
  fputs($fa,$tekst);
  fclose($fa);


}	


?>
</zm>
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