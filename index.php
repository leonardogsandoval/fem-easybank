<?php 

$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
switch ($lang){
    case "es":
        include("home_es.php");
        break;
    case "it":
        include("index_it.php");
        break;
    case "en":
        include("home.php");
        break;
    default:
        // Incluye EN en cualquier idioma que no sean los anteriores:
        include("index_en.php");
        break;
}

 ?>