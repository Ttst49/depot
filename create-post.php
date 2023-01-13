<?php

require_once "libraries/tools.php";

$name=null;
$description=null;
$release_date=null;

if (!empty($_POST["nom"])){
    $name = $_POST["nom"];
}

if (!empty($_POST["description"])){
    $description= $_POST["description"];
}

if (!empty($_POST["release_date"])){
    $release_date= $_POST["release_date"];
}

if ($name && $description && $release_date){

    require_once "pdo.php";

    $request= $pdo->prepare("INSERT INTO jeux SET Nom = :nom, Description = :description, Release_Date = :release_date ");

    $request->execute([
       "nom"=>$name,
       "description"=>$description,
       "release_date"=>$release_date
    ]);
    header("Location: index.php");
}
render("jeux/create",[
    "nom"=>$name,
    "description"=>$description,
    "release_date"=>$release_date
]);