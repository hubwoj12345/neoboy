<?
session_start();
include("gora.php");
?>
<td WIDTH="8"></td>
<td WIDTH="596" VALIGN="top">
<table width="596" CELLSPACING="0" CELLPADDING="0" echo "class="tabelka">
<tr><td class="top">Logowanie</td></tr>
<tr><td height="2" bgcolor="#ffffff"></td></tr>
<tr><td><div class="news">
<?
include("connect.php");

if(isset($_SESSION['admin'])) {
echo "Zalogowano jako ".$_SESSION['login']; 
echo "<br><br>";
echo "<a href=admin/index.php>PANEL ADMINISTRACYJNY</a> ";
$_SESSION['admin'];
}else{

if(isset($_POST['wyslij'])) {

$haslo=$_POST['haslo'];
   if(mysql_num_rows(mysql_query("SELECT login, haslo
   FROM administracja WHERE login = '".$_POST['login']."' 
   && haslo = '".md5($haslo)."' ")) > 0) {


       if(mysql_num_rows(mysql_query("SELECT id FROM administracja
       WHERE login = '".$_POST['login']."' 
       && haslo = '".md5($haslo)."' ")) > 0 ) {


           $_SESSION['admin'] = true;
           $_SESSION['zalogowany'] = true;
           $_SESSION['login'] = $_POST['login'];
           $_SESSION['haslo'] = $_POST['haslo'];
           echo "Jestes zalogowany.";
  

       } else { 

   echo "Zle haslo, sprobuj ponownie";
}
} else { 
   echo "Nie ma takiego u¿ytkownika";
}
} else { 

?>
<?php
}
}
if(!isset($_SESSION['admin'])) {
echo "<form method='POST' action='admlog.php'>";
echo "<b>nazwa uzytkownika:</b> <input type='text' name='login'><br>";
echo "<b>haslo uzytkownika:</b> <input type='password' name='haslo'><br>";
echo "<input type='submit' value='Wyslij' name='wyslij'>";
echo "</form>"; }
?>
</div>
</td></tr>
</table>
</td>
</tr></table>
<?
include("stopka.php");
?>