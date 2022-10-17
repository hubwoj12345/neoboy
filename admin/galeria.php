<?
session_start();
if(!$_SESSION['admin']){
header("Location: ../admlog.php");}
include("../gora2.php");
include("../connect.php");
?>
<form enctype="multipart/form-data" action="" method="POST">
<input type="hidden" name="MAX_FILE_SIZE" value="3450496" />
<input name="plik" type="file" /><br />
<input type="submit" name="submit" value="Wyslij plik" />
</form>
 
<?php
$plik_tmp = $_FILES['plik']['tmp_name'];
$plik_nazwa = $_FILES['plik']['name'];
$plik_rozmiar = $_FILES['plik']['size'];
if(is_uploaded_file($plik_tmp))
{
move_uploaded_file($plik_tmp, "../galeria/$plik_nazwa.jpg");
echo "<b>Plik $plik_nazwa pomyslnie wgrano!</b>";
}
?>
<br>
<center><a href="index.php">PANEL</a> </center>
<?
include("../stopka.php");
?>