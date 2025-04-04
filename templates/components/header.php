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

<body>
    <header class="text-white">
        <nav
            class="m-auto mt-5 w-[1000px] flex justify-between sticky top-0 z-[99] rounded-xl border border-stroke-secondary bg-gradient-to-r from-[#AAFCB8]/40 to-[#D9F9E1]/40 p-1 scrollbar-none items-center drop-shadow-m >

            
            <!-- Logo -->
            <a href=" /">
            <img src="./images/logo.png" alt="votre logo" width="50" />
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
            <ul class="relative overflow-x-auto md:flex" id="menu">
                <li
                    class="inline-flex whitespace-nowrap rounded-lg bg-transparent px-4 py-2 text-sm font-medium capitalize duration-200 hover:text-stone-400 hover:rounded-md  hover:drop-shadow-2md <?php echo ($currentPage === '/about') ? 'text-stone-500 rounded-md bg-white drop-shadow-2md' : 'text-stone-800'; ?>">
                    <a href="/about">Présentation</a>
                </li>
                <li
                    class="inline-flex whitespace-nowrap rounded-lg bg-transparent px-4 py-2 text-sm font-medium capitalize duration-200 hover:text-stone-500 hover:rounded-md  hover:drop-shadow-2md <?php echo ($currentPage === '/skills') ? 'text-stone-400 rounded-md bg-white drop-shadow-2md' : 'text-stone-800'; ?>">
                    <a href="/skills">Mes compétences</a>
                </li>
                <li
                    class="inline-flex whitespace-nowrap rounded-lg bg-transparent px-4 py-2 text-sm font-medium capitalize duration-200 hover:text-stone-500 hover:rounded-md  hover:drop-shadow-2md <?php echo ($currentPage === '/projects') ? 'text-stone-400 rounded-md bg-white drop-shadow-2md' : 'text-stone-800'; ?>">
                    <a href="/projects">Mes projets</a>
                </li>
                <li
                    class="inline-flex whitespace-nowrap rounded-lg bg-transparent px-4 py-2 text-sm font-medium capitalize duration-200 hover:text-stone-500 hover:rounded-md  hover:drop-shadow-2md <?php echo ($currentPage === '/contact') ? 'text-stone-400 rounded-md bg-white drop-shadow-2md' : 'text-stone-800'; ?>">
                    <a href="/contact">Contact</a>
                </li>
            </ul>
        </nav>

        <!-- Menu mobile -->
        <nav id="mobile-menu"
            class="hidden md:hidden fixed top-18 right-0 w-1/2 h-screen border-l border-slate-200 bg-white text-slate-700">
            <ul class="flex flex-col p-4">
                <li
                    class="p-2 hover:bg-slate-100 hover:text-amber-600 <?php echo ($currentPage === '/about') ? 'text-amber-600 font-bold' : ''; ?>">
                    <a href="/about">Présentation</a>
                </li>
                <li
                    class="p-2 hover:bg-slate-100 hover:text-amber-600 <?php echo ($currentPage === '/skills') ? 'text-amber-600 font-bold' : ''; ?>">
                    <a href="/skills">Mes compétences</a>
                </li>
                <li
                    class="p-2 hover:bg-slate-100 hover:text-amber-600 <?php echo ($currentPage === '/projects') ? 'text-amber-600 font-bold' : ''; ?>">
                    <a href="/projects">Mes projets</a>
                </li>
                <li
                    class="p-2 hover:bg-slate-100 hover:text-amber-600 <?php echo ($currentPage === '/contact') ? 'text-amber-600 font-bold' : ''; ?>">
                    <a href="/contact">Contact</a>
                </li>
            </ul>
        </nav>
    </header>
</body>

</html>