<?
session_start();
include("gora.php");
include("connect.php");
    $path = $_GET['path'];
    if(!isset($path))
    {
        $path = "pliki/";
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
                    echo "<a href=pliki/$fName>POBIERZ</a>";
                    echo "<br><br><br>";

                }
               
            }
        }

        closedir($handle);
    }
?>
<?
include("stopka.php");
?>