<?php
// Traitement sécurisé de l'input
$firstname = htmlspecialchars(trim($_POST['firstname'] ?? ''), ENT_QUOTES, 'UTF-8');
$lastname = htmlspecialchars(trim($_POST['lastname'] ?? ''), ENT_QUOTES, 'UTF-8');

?>



<h1 class="text-4xl font-bold bg-gradient-to-r  from-[#E9DFD5] to-[#F2DFD1]  text-transparent  bg-clip-text text-center uppercase">
Me contacter
</h1>

<div class="grid place-items-center pt-5">
<?php include './templates/components/form.php'; ?>
</div>


