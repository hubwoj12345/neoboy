<?
session_start();
include("gora.php");
include("connect.php");
if(isset($_POST['tresc'])) {
mysql_query("INSERT INTO komblog (`id`,`kto`,`tresc`) VALUES ('".$_POST['numerek']."','".$_SESSION['login']."','".$_POST['tresc']."')");
echo "<br><br><br><b><center>Komentarz dodano!</center></b>";}
include("stopka.php");
?>

