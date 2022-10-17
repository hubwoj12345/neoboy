<?
session_start();
if(!$_SESSION['admin']){
header("Location: ../admlog.php");}
include("../gora2.php");
?>
<td WIDTH="8"></td>
<td WIDTH="596" VALIGN="top">
<table width="596" CELLSPACING="0" CELLPADDING="0" class="tabelka">
<tr><td class="top">PANEL ADMINISTRACYJNY - edytuj reklame </td></tr>
<tr><td height="2" bgcolor="#ffffff"></td></tr>
<tr><td><div class="news">
<?
include("../connect.php");
if (isset($_POST['ile'])) {
mysql_query("UPDATE reklama SET link=\"".$_POST['link']."\",obrazek=\"".$_POST['obrazek']."\" where id=".$_POST['ile']);}
$sql="SELECT * FROM reklama";
$wynik=mysql_query($sql);
while ($linia = mysql_fetch_array($wynik)) {
echo "<br>";
$ile=$linia['id'];
$link=$linia['link'];
$obrazek=$linia['obrazek'];
echo "<form action=ereklama.php method=post>";
echo "<input type=hidden name=ile value=$ile><br>";
echo "Podaj na jaki adres ma przenosic klikniecie: <input type=text name=link value=$link ><br>";
echo "Podaj link do obrazka ktory ma byc wyswietlany: <input type=text name=obrazek value=$obrazek ><br>";
echo "<center><input type=submit value=edytuj></center>";
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