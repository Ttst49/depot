<?php

require_once "libraries/tools.php";
require_once "pdo.php";

$request = $pdo->query("SELECT * FROM jeux");

$jeux = $request->fetchAll();

render("posts",[
    "jeux"=>$jeux
]);


