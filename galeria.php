<?
session_start();
include("gora.php");
include("connect.php");

$dir = "galeria/";
$cols = 6;
$width = 100;


if(!($fd = opendir($dir))) exit;
while (($file = readdir($fd)) !== false){
  if($file != "." && $file !="..") {
   if(!($size = @getimagesize($dir.$file))){
      continue;
      }
      $img_w = $size[0];
      $img_h = $size[1];
      $ratio = $img_w / $img_h;
      if($ratio > 1){
          $img_w = $width;
          $img_h = ($width / $ratio);
      }
      else{
          $img_w = ($width * $ratio);
          $img_y = $width;
      }

      echo("<IMG src=\"$dir$file\"");
      echo("width=\"$img_w\" height=\"$img_h\"><br>");
      echo "<a href=galeria/$file>OBEJRZYJ</a>";
      echo "<br><br><br>";

 }
}
     closedir($fd);


echo "<br><br>";
?>
<?
include("stopka.php");
?>