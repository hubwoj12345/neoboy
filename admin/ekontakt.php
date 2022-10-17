<?
session_start();
if(!$_SESSION['admin']){
header("Location: ../admlog.php");}
include("../gora2.php");
include("../connect.php");
?>
<td WIDTH="8"></td>
<td WIDTH="596" VALIGN="top">
<table width="596" CELLSPACING="0" CELLPADDING="0" class="tabelka">
<tr><td class="top">PANEL ADMINISTRACYJNY - edytuj Moj mail</td></tr>
<tr><td height="2" bgcolor="#ffffff"></td></tr>
<tr><td><div class="news">
<?
if (isset($_POST['tresc'])) {
mysql_query("UPDATE kontakt SET tresc=\"".$_POST['tresc']."\" where id=".$_POST['ile']);}
$sql="SELECT * FROM kontakt";
$wynik=mysql_query($sql);
while ($linia = mysql_fetch_array($wynik)) {
echo "<br>";
$ile=$linia['id'];
$tresc=$linia['tresc'];
echo "<form action=ekontakt.php method=post>";
echo "<input type=hidden name=ile value=$ile><br>";
echo "Tresc: <input type=text name=tresc value=$tresc><br>";
echo "<center><input type=submit value=edytuj></center>";
echo "</form>";
echo "<br><br><br>";
}
?>
<br>
<center><a href="index.php">PANEL</a> </center>
<?
include("../stopka.php");
?>