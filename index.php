<!--------------------------------------- Page d'accueil --------------------------------------------->
<?php

$dsn = "mysql:host=localhost;dbname=literie3000";
$db = new PDO($dsn, "root", "");


//Récupérer les matelas
$query = $db->query("SELECT * FROM matelas");
$matelas = $query->fetchAll();


//---------------------------- Affichage --------------------------
include("tpl/header.php"); 
?>

<h1>Matelas</h1>

<div class="section_matelas">

    <!-- Affichages des matelas -->
    <?php
    foreach ($matelas as $matela) {
    ?>
      
            <div class="recipe_picture">
            <img src=<?= $matela["picture"] ?> >
            </div>

            <div class="section_description">
            <p><?= $matela["marque"] ?></p>
            <p><?= $matela["nom"] ?></p>
            <p> <?= $matela["dimension"] ?></p>
            <!-- Prix -->
            <p><?= $matela["prix"] ?></p>
            <p><?=  $matela["reduction"]  ?></p>
            </div>
        
    <?php
    }
    ?>
</div>

<?php
include("tpl/footer.php");
?>