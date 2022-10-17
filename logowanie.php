<?
session_start();
include("gora.php");

include("connect.php");
if(isset($_SESSION['zalogowany'])) {
echo "Zalogowano jako ".$_SESSION['login']; 
}else{

if(isset($_POST['wyslij'])) {

$haslo=$_POST['haslo'];

   if(mysql_num_rows(mysql_query("SELECT login, haslo
   FROM userzy WHERE login = '".$_POST['login']."' 
   && haslo = '".$haslo."'")) > 0){
$aktywowany=1;

       if(mysql_num_rows(mysql_query("SELECT aktywnosc FROM userzy
       WHERE login = '".$_POST['login']."' 
       && haslo = '".$haslo."' && aktywnosc='".$aktywowany."'")) > 0 ) {


           $_SESSION['zalogowany'] = true;
           $_SESSION['login'] = $_POST['login'];
           $_SESSION['haslo'] = $_POST['haslo'];
           echo "Jestes zalogowany.";
  

       } else { 

   echo "Zle haslo, sprobuj ponownie";
}
} else { 
   echo "Nie ma takiego u¿ytkownika lub nie zostales jeszcze aktywowany!";
}
} else { 

?>
<?php
}
}
if(!isset($_SESSION['zalogowany'])) {
echo "<form method='POST' action='logowanie.php'>";
echo "<b>nazwa uzytkownika:</b> <input type='text' name='login'><br>";
echo "<b> haslo uzytkownika: </b> <input type='password' name='haslo'><br>";
echo "<input type='submit' value='Wyslij' name='wyslij'>";
echo "</form>"; }
include("stopka.php");
?>