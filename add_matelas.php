<?php

function calcul_pourcentage($prix)
{
    $reduction = trim(strip_tags($_POST["reduction"]));
    $prix = $prix * (1 - $reduction / 100);
    return $prix;
}

if (!empty($_POST)) {

    $errors = [];

    //Test si c'est vide
    $nom = trim(strip_tags($_POST["nom"]));
    $marque = trim(strip_tags($_POST["marque"]));
    $picture = trim(strip_tags($_POST["picture"]));
    $dimension = trim(strip_tags($_POST["dimension"]));
    $prix = trim(strip_tags($_POST["prix"]));
    $prix = calcul_pourcentage($prix);
    $reduction = trim(strip_tags($_POST["reduction"]));


    //Erreurs
    if (empty($nom)) {
        $errors["nom"] = "Le nom du matelas est obligatoire";
    }

    if (!filter_var($picture, FILTER_VALIDATE_URL)) {
        $errors["picture"] = " L'url de l'image est incorrecte";
    }


    if (empty($errors)) {

        $dsn = "mysql:host=localhost;dbname=literie3000";
        $db = new PDO($dsn, "root", "");

        $query = $db->prepare("INSERT INTO matelas (nom, marque, picture, dimension, prix, reduction) VALUES (:nom, :marque, :picture, :dimension, :prix, :reduction)");
        $query->bindParam(":nom", $nom);
        $query->bindParam(":marque", $marque);
        $query->bindParam(":picture", $picture);
        $query->bindParam(":dimension", $dimension);
        $query->bindParam(":prix", $prix, PDO::PARAM_INT);
        $query->bindParam(":reduction", $reduction, PDO::PARAM_INT);

        if ($query->execute()) {
            header("Location: index.php");
        }
    }
}
//---------------------------- Affichage --------------------------
include("tpl/header.php");
?>



<form action="" method="post" class="form_ajout">

    <h1>Ajouter un matelas</h1>

    <div class="matelas">
        <!-- Nom matelas -->
        <div class="name_matelas">
            <label for="inputNom">Nom du matelas : </label>
            <input type="text" name="nom" id="inputNom" value="<?= isset($nom) ? $nom : "" ?> ">

            <!--erreurs Nom-->
            <?php
            if (isset($errors["name"])) {
                echo "<span class=\"error\">{$errors["name"]}</span>";
            }
            ?>
        </div>

        <!-- Picture -->
        <div class="picture">
            <label for="inputPicture">Photo du matelas (url) : </label>
            <input type="text" name="picture" id="inputPicture" value="<?= isset($picture) ? $picture : "" ?>">

            <?php
            if (isset($errors["picture"])) {
                echo "<span class=\"error\">{$errors["picture"]}</span>";
            }
            ?>
        </div>

        <!-- Liste déroulante des marques -->
        <div class="marque">
            <label for=""> Choississez une marque : </label>

            <select name="marque" id="selectMarque">
                <option <?= (isset($marque) && $marque === "Epeda") ? "selected" : "" ?> value="Epeda">Epeda</option>
                <option <?= (isset($marque) && $marque === "Dreamway")  ? "selected" : "" ?> value="Dreamway">Dreamway</option>
                <option <?= (isset($marque) && $marque === "Bultex")  ? "selected" : "" ?>value="Bultex">Bultex</option>
                <option <?= (isset($marque) && $marque === "Dorsoline")  ? "selected" : "" ?>value="Dorsoline">Dorsoline</option>
                <option <?= (isset($marque) && $marque === "Memoryline")  ? "selected" : "" ?>value="MemoryLine">MemoryLine</option>
            </select>
        </div>

        <div class="dimension">
            <label for=""> Choississez une dimension : </label>
            <select name="dimension" id="selectDimension">
                <option <?= (isset($dimension) && $dimension === "90 x 190") ? "selected" : "" ?> value="90 x 190">90 x 190</option>
                <option <?= (isset($dimension) && $dimension === "140 x 190")  ? "selected" : "" ?> value="140 x 190">140 x 190</option>
                <option <?= (isset($dimension) && $dimension === "160 x 200")  ? "selected" : "" ?>value="160 x 200">160 x 200</option>
                <option <?= (isset($dimension) && $dimension === "180 x 200")  ? "selected" : "" ?>value="180 x 200">180 x 200</option>
                <option <?= (isset($dimension) && $dimension === "200 x 200")  ? "selected" : "" ?>value="200 x 200">200 x 200</option>
            </select>
        </div>

        <div class="prix">
            <label for="inputPrix">Prix : </label>
            <input type="number" name="prix" id="inputPrix" value="<?= isset($prix) ? $prix : "" ?> ">
        </div>

        <div class="reduction">
            <label for="inputReduction">Réduction en pourcentage : </label>
            <input type="number" name="reduction" id="inputReduction" value="<?= isset($reduction) ? $reduction : "" ?> ">
        </div>

        <input class="btn-matelas" type="submit" value="Ajouter d'un matelas">
    </div>
</form>

<?php include("tpl/footer.php"); ?>