<?
include("gora.php");
echo "<center><b>By sie ze mna skontaktowac wypelnij ponizszy formularz:</b></center><br><br><br>";
include("connect.php");
$adres_strony="neoboy.pl"; 
$adres_email="bramka@sms.pl"; //twój mail
if (isset($_GET['wyslij'])){
$tresc='TRESC: '.$_POST['tresc'];
$temat ='TEMAT: '.$_POST['temat'];
$wynik=mysql_query("SELECT tresc FROM kontakt");
$adres_email=$wynik['tresc'];
$headers .= "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=iso-8859-2\n";
$headers .= "From: \"" . addslashes($adres_strony) . "\" <" .$adres_strony. ">\n";
$headers .= "Reply-To: \"" . addslashes($adres_strony) . "\" <" .$adres_strony. ">\n";
$headers .= "X-Mailer: PHP " . phpversion() . "\n";
if(mail($adres_email, $temat, $tresc, $headers)){
echo "Wiadomosc wyslano!";
}
else{
echo "Nie udalo sie wyslac wiadomosci!";
}
}
else{
echo'<form action="'; echo $_SERVER["PHP_SELF"]; echo'?wyslij=tak" method="post">
<table><tr><td>Temat wiadomosci: </td><td><input name="temat" type="text" size="50" maxlength="140" /></td></tr><tr><td>Tresc wiadomosci: </td><td><textarea name="tresc" cols="50" rows="6"></textarea></td></tr></table><br>
 <br><input type="submit" value="Wyslij" />
</form>';
}
include("stopka.php");
?>