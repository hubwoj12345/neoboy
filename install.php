<?
include("gora.php");
?>

Podaj dane administratora:<br><br>
<form action="install.php" method="post"/>
login:  <input type="text" name="login"/><br>
haslo: <input type="text" name="haslo"/><br>
<input type="submit" value="wykonaj"/>
</form>
<br><br><br><br><br>
<?
include("connect.php");

mysql_query("CREATE TABLE administracja (
  `id` tinyint(4) NOT NULL auto_increment,
  `login` text collate latin1_general_ci NOT NULL,
  `haslo` text collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ");

mysql_query("CREATE TABLE arty (
  `id` tinyint(4) NOT NULL auto_increment,
  `data` datetime NOT NULL,
  `tytul` text collate latin1_general_ci NOT NULL,
  `tresc` longtext collate latin1_general_ci NOT NULL,
  `kto` text collate latin1_general_ci NOT NULL,
  `ile` int(11) NOT NULL,
  `ileu` int(11) NOT NULL,
  `demo` text collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ");

mysql_query("CREATE TABLE blog (
  `id` tinyint(4) NOT NULL auto_increment,
  `data` datetime NOT NULL,
  `tytul` text collate latin1_general_ci NOT NULL,
  `tresc` text collate latin1_general_ci NOT NULL,
  `kto` text collate latin1_general_ci NOT NULL,
  `ile` int(11) NOT NULL,
  `ileu` int(11) NOT NULL,
  `demo` text collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ");

mysql_query("CREATE TABLE ja (
  `tresc` text collate latin1_general_ci NOT NULL,
  `id` tinyint(4) NOT NULL auto_increment,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ");

mysql_query("CREATE TABLE komart (
  `id` int(11) NOT NULL,
  `tresc` text collate latin1_general_ci NOT NULL,
  `kto` text collate latin1_general_ci NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci");

mysql_query("CREATE TABLE komblog (
  `id` int(11) NOT NULL,
  `tresc` text collate latin1_general_ci NOT NULL,
  `kto` text collate latin1_general_ci NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci");

mysql_query("CREATE TABLE komentarze (
  `id` int(11) NOT NULL,
  `kto` text collate latin1_general_ci NOT NULL,
  `tresc` text collate latin1_general_ci NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci");

mysql_query("CREATE TABLE kontakt (
  `id` tinyint(4) NOT NULL auto_increment,
  `tresc` text collate utf8_bin NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ");

mysql_query("CREATE TABLE newsy (
  `id` tinyint(4) NOT NULL auto_increment,
  `data` datetime NOT NULL,
  `tytul` text collate utf8_bin NOT NULL,
  `tresc` text collate utf8_bin NOT NULL,
  `kto` text collate utf8_bin NOT NULL,
  `demo` text collate utf8_bin NOT NULL,
  `ile` int(11) NOT NULL,
  `ileu` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ");

mysql_query("CREATE TABLE reklama (
  `id` tinyint(4) NOT NULL auto_increment,
  `obrazek` text collate utf8_bin NOT NULL,
  `link` text collate utf8_bin NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1");

mysql_query("CREATE TABLE userzy (
  `id` tinyint(4) NOT NULL auto_increment,
  `login` text collate latin1_general_ci NOT NULL,
  `haslo` text collate latin1_general_ci NOT NULL,
  `email` text collate latin1_general_ci NOT NULL,
  `czemu` text collate latin1_general_ci NOT NULL,
  `aktywnosc` tinyint(4) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ");

mysql_query("CREATE TABLE wizyty (
  `id` int(11) NOT NULL,
  `ip` text collate latin1_general_ci NOT NULL,
  `gdzie` text collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci");
if (isset($_POST['login'])) {
$haslo=$_POST['haslo'];
$id=1;
mysql_query("INSERT INTO administracja (`id`,`login`,`haslo`) VALUES ('".$id."','".$_POST['login']."', '".md5($haslo)."')");
mysql_query("INSERT INTO userzy (`id`,`login`,`haslo`,`aktywnosc`) VALUES ('".$id."','".$_POST['login']."', '".md5($haslo)."','".$id."')");
echo "Instalacja zakonczona sukcesem!<br>";
echo "Usun teraz plik install.php gdyz zostawienie go, naraza strona na wielkie niebezpieczenstwo! <br><br><br>";}
include("stopka.php");
?>