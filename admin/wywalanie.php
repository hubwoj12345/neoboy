<?
session_start();
if(!$_SESSION['admin']){
header("Location: ../logowanie.php");}
include("../gora2.php");
include("../connect.php");
if(isset($_POST['file'])){
$wywal=$_POST['file'];
unlink($wywal);
}
    $path = $_GET['path'];
    if(!isset($path))
    {
        $path = "../pliki/";
    }
  
    if ($handle = opendir($path))
    {
        $curDir = substr($path, (strrpos(dirname($path."/."),"/")+1));
      
        while (false !== ($file = readdir($handle)))
        {
            if ($file != "." && $file != "..")
            {
                $fName = $file;
                $file = $path.'/'.$file;
                if(is_file($file))
                {
                    echo "<b>Nazwa:</b> ",$fName,"<br>";
                    echo "<b>Rozmiar:</b> ",filesize($file)," B<br>";
                    echo "<b>Chmod:</b> ",fileperms($file),"<br>";
                    echo "<form action=wywalanie.php method=post>";
                    echo "<input type=hidden name=file value=$file>";
                    echo "<input type=submit value=usun>";
                    echo "</form>";
                    echo "<br><br>";

                }
               
            }
        }

        closedir($handle);
    }
?>
<br>
<center><a href="index.php">PANEL</a> </center>
<?
include("../stopka.php");
?>