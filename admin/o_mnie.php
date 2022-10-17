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
<tr><td class="top">PANEL ADMINISTRACYJNY - dodaj tekst o mnie</td></tr>
<tr><td height="2" bgcolor="#ffffff"></td></tr>
<tr><td><div class="news">
<?
if (isset($_POST['o_mnie'])) {
mysql_query("insert into ja (tresc) values('".$_POST['o_mnie']. "')");}
?>
<form action="o_mnie.php" method="post"/>
Dodaj: <textarea name="o_mnie" cols="70" rows="10"/></textarea> <br>
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