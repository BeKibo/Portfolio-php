<?php
/**
 * passe des projets à partir du fichier
 * 'assetes/projects.json
 */

// $projects = fopen('./assets/projects.json' , 'r'); // égale à Fetch 

$jsonContent = file_get_contents('./assets/projects.json'); // récupération du contenu d'un fichier
 $projects = json_decode($jsonContent, true); // décodage du json en tableau associatif
// var_dump($projects);


function toSlug(string $stackIcon): string
{
    $stackIcon = strtolower($stackIcon);
    $stackIcon = preg_replace('/[^a-z0-9-]/', '', $stackIcon);
    $stackIcon = preg_replace('/-+/', '', $stackIcon);
    return $stackIcon;
}

?>


<h1 class="text-4xl font-bold bg-gradient-to-r from-[#AAFCB8]  to-[#D9F9E1] text-transparent  bg-clip-text text-center uppercase">
mon projets
</h1>

<?php foreach ($projects as $item): ?>

<div class="flex p-4 w-[1000px] h-[250px] item-center m-auto ">
    <div class="w-[450px] border-r border-slate-500 p-5" >
        <h3 class="text-2xl font-bold"> <?= $item['title'] ?></h3>
        <p class=""><?= $item['description'] ?> </p>
    </div>


    <div class="w-screen border-r border-slate-500 p-5">
            <h3 class="text-2xl font-bold mb-5">Stack</h3>
            <ul class="flex gap-4">
                <? foreach ($item['stack'] as $icon): ?>
                    <li class="h-10 w-10">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/<?php echo toSlug($icon) . '/' . toSlug($icon) ?>-original.svg" alt="<?= "Logo " . $icon ?>" />
                    </li>
                <? endforeach ?>
            </ul>
        </div>
    <div class="w-24 h-full flex items-center justify-center text-[#D9F9E1] hover:text-[#AAFCB8] ">
    
    <a href=" <?= $item['link'] ?> " target="_blank" rel="noopener noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M8.025 22L6.25 20.225L14.475 12L6.25 3.775L8.025 2l10 10z"/>
                </svg>
            </a>


    <!-- Icon from Material Symbols by Google - https://github.com/google/material-design-icons/blob/master/LICENSE --><path fill="currentColor" d="M8.025 22L6.25 20.225L14.475 12L6.25 3.775L8.025 2l10 10z"/></svg>
    </div>
</div>

<? endforeach; ?> 