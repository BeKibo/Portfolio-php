<?php

$skills = [
    "design" => [
        "description" => "Design and graphic tools used for UI/UX and creative projects.",
        "tools" => [
            [ "name" => "Figma", "level" => "Intermediate" ],
            [ "name" => "Illustrator", "level" => "Intermediate" ],
            [ "name" => "Photoshop", "level" => "Comfortable" ],
            [ "name" => "Procreate", "level" => "Beginner" ]
        ]
    ],
    "frontend" => [
        "description" => "Technologies used for building client-side user interfaces and interactions.",
        "tools" => [
            [ "name" => "React", "level" => "Intermediate" ],
            [ "name" => "HTML", "level" => "Comfortable" ],
            [ "name" => "CSS", "level" => "Comfortable" ],
            [ "name" => "JavaScript", "level" => "Intermediate" ],
            [ "name" => "Tailwind", "level" => "Beginner" ]
        ]
    ],
    "backend" => [
        "description" => "Server-side technologies and tools for managing databases, APIs, and application logic.",
        "tools" => [
            [ "name" => "Node.js", "level" => "Beginner" ],
            [ "name" => "PHP", "level" => "Beginner" ],
            [ "name" => "MySQL", "level" => "Beginner" ],
            [ "name" => "Docker", "level" => "Beginner" ],
            [ "name" => "Symfony", "level" => "Beginner" ]
        ]
    ],
    "utilities" => [
        "description" => "Tools used for productivity, file transfer, AI assistance, and deployment.",
        "tools" => [
            [ "name" => "Notion", "level" => "Intermediate" ],
            [ "name" => "Smash", "level" => "Comfortable" ],
            [ "name" => "ChatGPT", "level" => "Comfortable" ],
            [ "name" => "FileZilla", "level" => "Intermediate" ]
        ]
    ]
];

function toSlug(string $name): string
{
    $name = strtolower(trim($name));
    $name = preg_replace('/[^a-z0-9\s]/', '', $name); // enlève les caractères spéciaux
    $name = preg_replace('/\s+/', '-', $name); // espaces → tirets
    return $name;
}

?>

<div class="my-4 w-full lg:w-[1000px] m-auto h-full">
    <h1 class="typewriter-gradient bg-clip-text bg-gradient-to-br from-slate-800 to-slate-400 text-6xl font-bold ">
        My Skills
    </h1>

    <?php foreach ($skills as $category => $details): ?>
        <div>
            <h2 class="text-3xl font-semibold text-[#D8B9A4] mb-2 capitalize">
                <?php echo $category; ?>
            </h2>
            <p class="text-slate-400 mb-4"><?php echo $details['description']; ?></p>

            <div class="grid 
                        grid-cols-1 
                        sm:grid-cols-2 
                        md:grid-cols-3 
                        lg:grid-cols-4 
                        gap-4 
                        sm:gap-6 
                        px-4 
                        sm:px-0">
                
                <?php foreach ($details['tools'] as $tool): ?>
                    <div class="flex flex-col items-center justify-center p-4 bg-[#D8B9A4]/10 backdrop-blur-md rounded-2xl shadow-md">
                        <span class="text-neutral-700 font-medium"><?php echo $tool['name']; ?></span>
                        <span class="text-xs text-black-500 italic"><?php echo $tool['level']; ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>
