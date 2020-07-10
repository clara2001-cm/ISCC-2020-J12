<!DOCTYPE html>
<html>
    <head>
    <a href= "insertion.html">
        <title>mini-site-routing</title>
</head>
<a href="http://localhost/ISCC/ISCC-2020-J08/EX_01/mini-site-routing.php?page=1" > page 1 </a>
<a href="http://localhost/ISCC/ISCC-2020-J08/EX_01/mini-site-routing.php?page=2" > page 2 </a>
<a href="http://localhost/ISCC/ISCC-2020-J08/EX_01/mini-site-routing.php?page=3" > page 3 </a>
</html>

<?php
if ($_GET["page"]=="1")
 {
 echo "<h1> acceuil! </h1>";
}
elseif ($_GET["page"]=="2")
{
    echo "<h1> page 2! </h1>";
}
elseif ($_GET["page"]=="3")
{
    echo "<h1> page 3! </h1>";
}
?>

<header>    

<ul id="nav">
    <li><a href="connexion.php">Page connexion</a></li>

</header>

<?php
if ($_GET["page"]=="connexion")
{
    echo "<nav> page connexion! </nav>";
}

if(!isset($_SESSION["id"])){
    if(isset($_COOKIE["id"])){
        $_SESSION["id"] = $_COOKIE["id"];
    }
    else{
        header('location: <ital>connexion.php</ital>');
    }
}
?>
