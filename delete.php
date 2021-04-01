<?

$dsn = "mysql:host=localhost;dbname=literie3000";
$db = new PDO($dsn, "root", "");

//Suppression du matelas quand on clique sur la croix

if(isset($_GET["id"])) {

$supp = $db->prepare("DELETE FROM matelas WHERE id = ".id );
echo " Suppression effectuée";
header("Location:index.php");
$supp->execute();

} else {
    echo " Suppression non effectuée";
}

