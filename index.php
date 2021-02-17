<?php 
// obtiene el contenido de HTTP accept language
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

switch ($lang){
    case "es":
        include("main.html");
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