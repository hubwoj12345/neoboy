<?
session_start();
if(!$_SESSION['admin']){
header("Location: ../logowanie.php");}
include("../gora2.php");
?>

<td WIDTH="8"></td>
<td WIDTH="596" VALIGN="top">
<table width="596" CELLSPACING="0" CELLPADDING="0" class="tabelka">
<tr><td class="top">PANEL ADMINISTRACYJNY <a href="../wyloguj.php"><b>wyloguj</b></a></td></tr>
<tr><td height="2" bgcolor="#ffffff"></td></tr>
<tr><td><div class="news">
<br><br>
		<center><a href="news.php">Dodaj Newsa</a>  ||  <a href="enews.php">Edytuj Newsa</a>   ||   <a href="eunews.php">Usun Newsa</a></center><br>
          <center> <a href="arty.php">Dodaj Arta</a>   ||   <a href="earty.php">Edytuj Arta</a>   ||   <a href="euarty.php">Usun Arta</a></center><br>
        <center>   <a href="blog.php">Dodaj wpis na blogu</a>   ||   <a href="eblog.php">Edytuj wpis na blogu</a>   ||   <a href="eublog.php">Usun wpis na blogu</a></center><br>
           <center><a href="o_mnie.php">Dodaj informacje o mnie</a>   ||   <a href="eo_mnie.php">Edytuj informacje o mnie</a>   ||   <a href="euo_mnie.php">Usun informacje o mnie</a></center><br>
           <center><a href="kontakt.php">Dodaj mail kontaktowy</a>   ||   <a href="ekontakt.php">Edytuj mail kontaktowy</a>   ||   <a href="eukontakt.php">Usun mail kontaktowy</a></center><br>
		<center><a href="reklama.php">Dodaj Reklame</a>  ||  <a href="ereklama.php">Edytuj Reklame</a>   ||   <a href="uereklama.php">Usun Reklame</a></center><br>
           <center><a href="ausers.php">Aktywuj usera</a>   ||   <a href="uusers.php">Usun usera</a></center><br>
<center><a href="galeria.php">Dodaj galerie</a>   ||   <a href="ugaleria.php">Usun galerie</a></center><br>
<center><a href="wywalanie.php">Usun pliki</a></center><br>
</div>
</td></tr>
</table>
</td>
</tr></table>
<?
include("../stopka.php");
?>