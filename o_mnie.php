<?
include("gora.php");

include("connect.php");
$sql="SELECT * FROM ja";
$wynik=mysql_query($sql);
while ($linia=mysql_fetch_array($wynik)){
echo "$linia[tresc]";
echo "\n\n\n\n\n\n";
}
include("stopka.php");
?>