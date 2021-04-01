<!--------------------------------------- Page d'accueil --------------------------------------------->
<?php

//Connexion à la BDD marmiton
$dsn = "mysql:host=localhost;dbname=marmiton";
$db = new PDO($dsn, "root", "");


//Récupérer les recettes de la table recipes
$query = $db->query("SELECT * FROM recipes");
$recipes = $query->fetchAll();


//---------------------------- Affichage --------------------------
include("tpl/header.php"); 
?>

<h1>Nos recettes</h1>

<div class="recipes">
    <!-- Affichages des recettes -->
    <?php
    foreach ($recipes as $recipe) {

    ?>
        <div class="recipe">
            <div class="recipe_picture">
                <img src=<?= $recipe["picture"] ?> alt="image">
            </div>
            <h2>
                <a href="recipe.php?id=<?= $recipe["id"] ?>"><?= $recipe["name"] ?></a>
            </h2>
            <p>Difficultés : <?= $recipe["difficulty"] ?></p>
        </div>
    <?php
    }
    ?>
</div>

<?php
include("tpl/footer.php");
?>