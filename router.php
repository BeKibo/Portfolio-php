<?php

switch ($_SERVER['REQUEST_URI'])  {
    case '/':
        echo "page d'accueil";
        break;
    
    case '/about':
        echo " page de présentation";
        break;
    
    case '/skills':
        echo " page de compétences";
        break;
        
    case '/projects':
        echo " page de projets";
        break;

    case '/contact':
        include "./templates/contact.php";
        break;
    
    default:
        echo " page 404, introuvable";
        break;
}