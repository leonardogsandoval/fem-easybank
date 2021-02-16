<?php 

$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
echo($lang);
switch ($lang){
    case "es":
        echo("probando el español");
        include("home.html");
        break;
    case "it":
        include("index_it.php");
        break;
    case "en":
        include("home.html");
        break;
    default:
        // Incluye EN en cualquier idioma que no sean los anteriores:
        include("home.html");
        break;
}

 ?>