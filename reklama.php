<?
session_start();
include("gora.php");
include("connect.php");
$sql="SELECT * FROM reklama";
$wynik=mysql_query($sql);
while ($linia=mysql_fetch_array($wynik)){
echo "<a href=$linia[link] target=_blank><img src=$linia[obrazek] WIDTH=200 HEIGHT=100/></a>";}
include("stopka.php");
?>
<center>
<script type="text/javascript">
var secs = 5; 
var element = 'czas'; 
var T = null;
function count(id){
        temp = secs;
         if(secs > 0){
                result = Math.floor(temp) + ' <b>sekund<b>';
                document.getElementById(element).innerHTML = result;
                secs--;
        }else{
                document.location="logowanie.php"
                clearInterval(T);
        }
}
function counter(seconds){
        secs = seconds;
        T = window.setInterval("count()", 1000);
}
</script>
<div id="czas"></div>
<script type="text/javascript">counter(5);</script></center>