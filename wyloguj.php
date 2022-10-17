<?
session_start();
include("gora.php");
include("connect.php");
echo "<b><center>WYLOGOWANO!</b></center>";
session_destroy();
include("stopka.php");
?>