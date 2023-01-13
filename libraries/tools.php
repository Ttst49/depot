<?php
function render($templateName,$data)
{
    extract($data);

    ob_start();

    require_once("templates/${templateName}.html.php");

    $mainContent = ob_get_clean();

    ob_start();

    require_once('templates/index.html.php');

    echo ob_get_clean();
}