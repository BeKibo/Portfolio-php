<?php

/**
 * Le routeur est chargé d'écouter les 
 * requêtes HTTP provenant du client web 
 * puis d'y répondre avec le contenu approprié.
 */
$path = $_SERVER['REQUEST_URI'];

$cleanPath = preg_replace('/\?.*/', '', $path);

switch ($cleanPath) {
    case '/':
        include './templates/home.php';
        break;
    // Filter à partir de la fin de l'URL
    case '/about':
        include './templates/about.php';
        break;
    case '/skills':
        include './templates/skills.php';
        break;
    case '/projects':
        include './templates/projects.php';
        break;
    case '/contact':
        include './templates/contact.php';
        break;

    default:
        echo 'Page introuvable - 404 ';
        break;
}
?>

<script src="./templates/scripts/error.js"></script>

<style>
  @layer utilities {
    .typewriter-gradient {
      overflow: hidden;
      white-space: nowrap;
      border-right: 2px solid #64748b;
      animation: typing 3s steps(100, end), blink .7s step-end infinite;
    }

    @keyframes typing {
      from { width: 0 }
      to { width: 100% }
    }

    @keyframes blink {
      50% { border-color: transparent }
    }
  }
</style>
