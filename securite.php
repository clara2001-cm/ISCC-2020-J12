<?php

include_once("singleton.php");

$pdo= connect_to_database();

session_start();

if(isset($_POST["password"])&&isset($_POST["name"])){
    $jtm= $_POST["name"];
    $sql= "SELECT * FROM utilisateur WHERE Login='$jtm'";
    $stmt= $pdo->query($sql);
    $users= $stmt->fetch();
    var_dump($users);
    $_SESSION["id"] = $_POST["name"];
    setcookie("id",$_SESSION["id"]);
}

else{
    echo "Mauvais couple identifant / Mot de passe";
    echo "<a href=\"connexion.php\">Page Connexion</a>";
}

?>
<ul id="nav">
    <li><a href="mini-site-rooting.php">Page d'Acceuil</a></li>


<?php 
$login = $_POST["username"];
$bdd = connect_to_database();   
if($bdd === False) {
    echo "<br />c'est raté<br />";
    echo "<a href='insertion.html'>retour</a>";
    return;
}

try {
    $prepare = $bdd->prepare("INSERT INTO login VALUES(:login");
    $prepare->execute([":login" => $login]);
} 
catch (PDOException $error) {
    echo "$error";
}

$query = $bdd->query("SELECT * from login");
while ($row = $query->fetch()){
    echo "<br />" . $row["nom"];
}
?>