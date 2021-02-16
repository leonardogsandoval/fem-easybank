<?php 

$lang = Locale::acceptFromHttp($_SERVER['HTTP_ACCEPT_LANGUAGE']);
echo($lang)
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