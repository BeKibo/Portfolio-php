<?php
$currentPage = $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Portfolio</title>
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100..900&family=Space+Grotesk:wght@300..700&display=swap"
rel="stylesheet" />
<link rel="stylesheet" href="./assets/style.css" />
<script src="./assets/main.js" defer></script>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex flex-col bg-[url('../../images/bg_4.png')] bg-cover bg-center">



<header class="text-white">
<nav
class="my-4 p-2 w-full lg:w-[1000px] m-auto h-full flex justify-between  bg-[#D8B9A4]/10 backdrop-blur-md rounded-2xl shadow-md">
<!-- Logo -->
<a href="/">
<img src="./images/logo.png" alt="Votre logo" class="w-12" />
</a>
<!-- Bouton hamburger pour mobile -->
<button id="menu-btn" class="md:hidden">
<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
d="M4 6h16M4 12h16M4 18h16" />
</svg>
</button>
<!-- Menu navigation -->
<ul class="hidden md:flex" id="menu">
<li class="inline-flex items-center justify-center text-center whitespace-nowrap rounded-lg px-4 py-2 text-sm font-medium capitalize duration-200 hover:text-stone-400 hover:rounded-md hover:drop-shadow-2md <?php echo ($currentPage === '/about') ? 'text-stone-500 rounded-md bg-white/50 drop-shadow-2md' : 'text-stone-800'; ?>">
<a href="/about">Présentation</a>
</li>
<li class="inline-flex items-center justify-center text-center whitespace-nowrap rounded-lg px-4 py-2 text-sm font-medium capitalize duration-200 hover:text-stone-500 hover:rounded-md hover:drop-shadow-2md <?php echo ($currentPage === '/skills') ? 'text-stone-400 rounded-md bg-white/50 drop-shadow-2md' : 'text-stone-800'; ?>">
<a href="/skills">Mes compétences</a>
</li>
<li class="inline-flex items-center justify-center text-center whitespace-nowrap rounded-lg px-4 py-2 text-sm font-medium capitalize duration-200 hover:text-stone-500 hover:rounded-md hover:drop-shadow-2md <?php echo ($currentPage === '/projects') ? 'text-stone-400 rounded-md bg-white/50 drop-shadow-2md' : 'text-stone-800'; ?>">
<a href="/projects">Mes projets</a>
</li>
<li class="inline-flex items-center justify-center text-center whitespace-nowrap rounded-lg px-4 py-2 text-sm font-medium capitalize duration-200 hover:text-stone-500 hover:rounded-md hover:drop-shadow-2md <?php echo ($currentPage === '/contact') ? 'text-stone-400 rounded-md bg-white/50 drop-shadow-2md' : 'text-stone-800'; ?>">
<a href="/contact">Contact</a>
</li>
</ul>
</nav>
<!-- Menu mobile -->
<nav id="mobile-menu"
class="hidden fixed top-18 right-0 w-1/2 h-screen border-l border-slate-200 bg-white text-slate-700">
<ul class="flex flex-col p-4">
<li class="p-2 hover:bg-slate-100 hover:text-amber-600 <?php echo ($currentPage === '/about') ? 'text-amber-600 font-bold' : ''; ?>">
<a href="/about">Présentation</a>
</li>
<li class="p-2 hover:bg-slate-100 hover:text-amber-600 <?php echo ($currentPage === '/skills') ? 'text-amber-600 font-bold' : ''; ?>">
<a href="/skills">Mes compétences</a>
</li>
<li class="p-2 hover:bg-slate-100 hover:text-amber-600 <?php echo ($currentPage === '/projects') ? 'text-amber-600 font-bold' : ''; ?>">
<a href="/projects">Mes projets</a>
</li>
<li class="p-2 hover:bg-slate-100 hover:text-amber-600 <?php echo ($currentPage === '/contact') ? 'text-amber-600 font-bold' : ''; ?>">
<a href="/contact">Contact</a>
</li>
</ul>
</nav>
</header>


