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
<tr><td class="top">PANEL ADMINISTRACYJNY - dodaj news</td></tr>
<tr><td height="2" bgcolor="#ffffff"></td></tr>
<tr><td><div class="news">
<?	
if (isset($_POST['tresc'])) {
$data=date('Y-m-d H:i:s');
mysql_query("INSERT INTO `test`.`newsy` (data,tytul,tresc,kto,demo) VALUES ('".$data."', '".$_POST['tytul']."','".$_POST['tresc']."','".$_POST['kto']."','".$_POST['demo']."')");}
?>
<form action="news.php" method="post"/>
tytul: <input type="text" name="tytul"/><br>
autor: <input type="text" name="kto"/><br>
demo: <br><textarea name="demo" cols="70" rows="10"/></textarea> <br>
tresc: <br><textarea name="tresc" cols="70" rows="10"/></textarea> <br><input type="submit" value="dodaj"/>
</form>
</div>
<center><a href="index.php">PANEL</a> </center>
</td></tr>
</table>
</td>
</tr></table>
<?
include("../stopka.php");
?>
