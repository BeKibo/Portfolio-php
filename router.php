<?php
$path = $_SERVER['REQUEST_URI'];
$cleanPath = preg_replace('/\?.*/', '', $path);


switch ($_SERVER['REQUEST_URI'])  {
    case '/':
        echo "page d'accueil";
        break;
    
    case '/about':
        echo " page de présentation";
        break;
    
    case '/skills':
        include "./templates/skills.php";
        break;
        
    case '/projects':
        
        include "./templates/projects.php";
        break;

    case '/contact':
        include "./templates/contact.php";
        break;
    
    default:
        echo " page 404, introuvable";
        break;
}