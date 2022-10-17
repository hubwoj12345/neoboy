<?
session_start();
if(!$_SESSION['admin']){
header("Location: ../admlog.php");}
include("../gora2.php");
?>

<td WIDTH="8"></td>
<td WIDTH="596" VALIGN="top">
<table width="596" CELLSPACING="0" CELLPADDING="0" class="tabelka">
<tr><td class="top">PANEL ADMINISTRACYJNY - usun reklame<br><br><br></td></tr>
<tr><td height="2" bgcolor="#ffffff"></td></tr>
<tr><td><div class="news">
<?
include("../connect.php");
if (isset($_POST['ile'])) {
mysql_query("DELETE FROM reklama where id=".$_POST['ile']);}
$sql="SELECT * FROM reklama";
$wynik=mysql_query($sql);
while ($linia = mysql_fetch_array($wynik)) {
echo "<b>Adres na jaki ma przenosic klikniecie: </b>",$linia['link'];
echo "<br><b>Link do obrazka ktory ma byc wyswietlany: </b>",$linia['obrazek'];
$ile[i]=$linia['id'];
$ile=$linia['id'];
echo "<form action=uereklama.php method=post>";
echo "<input type=hidden name=ile value=$ile>";
echo "<center><input type=submit value=usun></center>";
echo "</form>";
echo "<br><br><br>";
}
?>
<br>
<center><a href="index.php">PANEL</a> </center>
</div>
</td></tr>
</table>
</td>
</tr></table>
<?
include("../stopka.php");
?>
