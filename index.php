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

<a class="lien" href="add_matelas.php" >Ajouter un matelas</a>

<!-- Affichages des matelas -->
<?php
foreach ($matelas as $matela) {
?>
    <div class="section_matelas">
        <div class="picture">
            <img src=<?= $matela["picture"] ?>>
        </div>
        <div class="section_description">
        <p><?= $matela["id"] ?></p>
            <p><?= $matela["marque"] ?></p>
            <p><?= $matela["nom"] ?></p>
            <p> <?= $matela["dimension"] ?></p>
            <!-- Prix -->
            <p><?= $matela["prix"] ?> €</p>
        </div>
        
        <a href="delete.php?id=<?php echo $matela["id"];?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"/></svg></a>

    </div>
<?php
}
?>


<?php
include("tpl/footer.php");
?>