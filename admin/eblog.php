<?
session_start();
if(!$_SESSION['admin']){
header("Location: ../admlog.php");}
include("../gora2.php");
?>
<td WIDTH="8"></td>
<td WIDTH="596" VALIGN="top">
<table width="596" CELLSPACING="0" CELLPADDING="0" class="tabelka">
<tr><td class="top">PANEL ADMINISTRACYJNY - edytuj wpis na blogu</td></tr>
<tr><td height="2" bgcolor="#ffffff"></td></tr>
<tr><td><div class="news">
<?
include("../connect.php");
if (isset($_POST['tresc'])) {
$data=date('Y-m-d H:i:s');
mysql_query("UPDATE blog SET data=\"".$data."\",tytul=\"".$_POST['tytul']."\",tresc=\"".$_POST['tresc']."\" where id=".$_POST['ile']);}
$sql="SELECT * FROM blog";
$wynik=mysql_query($sql);
while ($linia = mysql_fetch_array($wynik)) {
echo "<br>";
$ile=$linia['id'];
$tytul=$linia['tytul'];
$tresc=$linia['tresc'];
echo "<form action=eblog.php method=post>";
echo "<input type=hidden name=ile value=$ile><br>";
echo "Tytul: <input type=text name=tytul value=$tytul><br>";
echo 'tresc: <textarea name="tresc" cols="70" rows="10">'.$tresc.'</textarea>';
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