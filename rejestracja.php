<?
include("gora.php");
include("connect.php");
if($_POST['login']){
mysql_query("INSERT INTO userzy (`login`,`haslo`,`email`,`czemu`,`aktywnosc`) VALUES ('".$_POST['login']."','".$_POST['haslo']."','".$_POST['email']."','".$_POST['czemu']."','".NULL."')");
echo "<b><center>KONTO UTWORZONO! POCZEKAJ NA AKTYWACJE PRZEZ ADMINISTRATORA!<b></center>";
echo"<br><br>";
}
?>
<b>Podaj dane:</b><br><br>
<form action="rejestracja.php" method="post"/>
<b>login:</b>  <input type="text" name="login"/><br>
<b>haslo:</b> <input type="text" name="haslo"/><br>
<b>email:</b> <input type="text" name="email"/><br>
<br><b>czemu chcesz miec konto?:</b> <br><textarea name="czemu" cols="70" rows="10"/></textarea><br>
<input type="submit" value="zarejestruj"/>
</form>
<?
include("stopka.php");
?>
