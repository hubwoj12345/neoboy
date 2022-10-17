<?
session_start();
include("gora.php");
include("connect.php");
if(empty($_GET['id']))
	{
		$news=mysql_query("SELECT * FROM newsy ORDER BY id desc");
		$ilosc_wierszy=mysql_num_rows($news);
		for($i=1; $i <= $ilosc_wierszy; $i++)
		{
		     $linia=mysql_fetch_assoc($news);
                     echo "$linia[data] <br>";
                     echo "<b>dodal: ",$linia[kto],"</b> (przeczytano: $linia[ile] razy, unikalnie: $linia[ileu] razy)";
                     echo "               ";
                     echo "<center><b>$linia[tytul]</center>             </b>";
                     echo "<br>";
                     echo "$linia[demo]";
                     echo "<br><br>";
                        echo "<a href=?id=$i><b>czytaj wpis</b></a><br><br><br><br> ";
		}
      		echo "</table>";
	}
	else
	{
		$news=mysql_query("select * from newsy order by id desc");
		$ilosc_wierszy=mysql_num_rows($news);
		$id = $_GET['id'];
$sprawdzmy=mysql_query("SELECT * FROM `wizyty` where `id`=$id && gdzie='newsy'");
while($linijka=mysql_fetch_array($sprawdzmy)){
if($linijka['ip']!=$_SERVER['REMOTE_ADDR']){
$unikalne=$unikalne+1;}
$ileu=mysql_query("SELECT ileu FROM newsy WHERE id=$id");
$unikalne=$unikalne+$ileu['ileu'];
mysql_query("UPDATE newsy SET ileu=\"".$unikalne."\" where id=".$id);
}
		for($i=1; $i <= $ilosc_wierszy; $i++)
		{
			$linia=mysql_fetch_assoc($news);
			if($i==$id)
			{
                     echo "$linia[data] <br>";
                     echo "<b>dodal: ",$linia[kto],"</b> (przeczytano: $linia[ile] razy, unikalnie: $linia[ileu] razy)";
                     echo "               ";
                     echo "<center><b>$linia[tytul]</center>             </b>";
                     echo "<br>";
                     echo "$linia[tresc]";
                     echo "<br><br><br>";
                     $ilosc=$linia['ile']+1;
                     mysql_query("UPDATE newsy SET ile=\"".$ilosc."\" where id=".$linia['id']);
$gdzie='newsy';
mysql_query("INSERT INTO wizyty (`id`,`ip`,`gdzie`) VALUES ('".$linia['id']."','".$_SERVER['REMOTE_ADDR']."','".$gdzie."')");
$numerek=$linia['id'];
$wynik=mysql_query("SELECT * FROM komentarze where id=$linia[id]");
echo "<b><u>KOMENTARZE UZYTKOWNIKOW </u></b><br><br>";
while ($linia=mysql_fetch_array($wynik)){
echo "<b>DODAL: $linia[kto]</b>";
echo "<br>";
echo "<b>TRESC: $linia[tresc]</b>";
echo "<br><br><br>";
}
if(!$_SESSION['zalogowany']){
echo "<br><b><center>BY DODAC KOMENTARZ MUSISZ BYC ZALOGOWANY!</center></b>";}
else{
echo "<b>DODAJ KOMENTARZ:</b> <br>";
echo "<form action=komentarze.php method=post>";
echo "<input type=hidden name=numerek value=$numerek><br>";
echo "TRESC: <input type=text name=tresc>";
echo "<center><input type=submit value=dodaj></center>";
echo "</form>";}
			}	
		}
	}
	mysql_free_result($news);
include("stopka.php");
?>