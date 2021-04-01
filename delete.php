<?

$dsn = "mysql:host=localhost;dbname=literie3000";
$db = new PDO($dsn, "root", "");

//Suppression du matelas quand on clique sur la croix

$query = $db->prepare("DELETE FROM matelas WHERE id =:id");

$query->bindValue(":id", $_GET["id"], PDO::PARAM_INT);

$query-> execute();
