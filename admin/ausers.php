<?
session_start();
if(!$_SESSION['admin']){
header("Location: ../admlog.php");}
include("../gora2.php");
?>
<td WIDTH="8"></td>
<td WIDTH="596" VALIGN="top">
<table width="596" CELLSPACING="0" CELLPADDING="0" class="tabelka">
<tr><td class="top">PANEL ADMINISTRACYJNY - aktywuj usera</td></tr>
<tr><td height="2" bgcolor="#ffffff"></td></tr>
<tr><td><div class="news">
<?
include("../connect.php");
if (isset($_POST['ile'])) {
$ok=1;
mysql_query("UPDATE userzy SET aktywnosc=\"".$ok."\" where id=".$_POST['ile']);
echo "<center><b>AKTYWOWANO!</b></center>";
}
$sql="SELECT * FROM userzy";
$wynik=mysql_query($sql);
while ($linia = mysql_fetch_array($wynik)) {
echo "<br>";
$ile=$linia['id'];
echo "<b>Login:  </b>", $linia['login'];
echo "<br>";
echo "<b>Email:  </b>", $linia['email'];
echo "<br>";
echo "<b>Czemu chce konto:  </b>", $linia['czemu'];
echo "<br>";
echo "<form action=ausers.php method=post>";
echo "<input type=hidden name=ile value=$ile><br>";
echo "<center><input type=submit value=aktywuj></center>";
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