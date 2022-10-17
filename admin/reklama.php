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
<tr><td class="top">PANEL ADMINISTRACYJNY - dodaj reklame</td></tr>
<tr><td height="2" bgcolor="#ffffff"></td></tr>
<tr><td><div class="news">
<?
if (isset($_POST['link'])) {
mysql_query("INSERT INTO reklama (`obrazek`,`link`) VALUES ('".$_POST['obrazek']."','".$_POST['link']."')");}
?>
<form action="reklama.php" method="post"/>
Podaj na jaki adres ma przenosic klikniecie: <input type="text" name="link" rows="5" cols="50"/><br>
Podaj link do obrazka ktory ma byc wyswietlany: <input type="text" name="obrazek" rows="5" cols="50"/><br>
<input type="submit" value="dodaj"/>
<br>
<center><a href="index.php">PANEL</a> </center>
</form>
</div>
</td></tr>
</table>
</td>
</tr></table>
<?
include("../stopka.php");
?>