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
<tr><td class="top">PANEL ADMINISTRACYJNY - dodaj Moj mail</td></tr>
<tr><td height="2" bgcolor="#ffffff"></td></tr>
<tr><td><div class="news">
<?
if (isset($_POST['tresc'])) {
mysql_query("INSERT INTO kontakt (`tresc`) VALUES ('".$_POST['tresc']."')");}
?>
<form action="kontakt.php" method="post"/>
Podaj swoj adres email, na jaki chcesz by przychodzily wiadomosci: <br><br><input type="text" name="tresc" rows="5" cols="50"/><br>
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