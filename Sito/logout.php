<?php
require("libreria.php");

$login=authenticate();

/* distrugge la sessione */
$sname=session_name();

session_destroy();

if (isset($_COOKIE['logged'])) {
  setcookie($sname,'', time()-3600,'/');
};

header("Location: home.php");

?>
