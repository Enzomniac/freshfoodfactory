<?php

function setActive($pageName) {
    $currentUrl = $_SERVER['PHP_SELF'];    
    $pageName = "/fff/" . $pageName . ".php";    
    if ($currentUrl == $pageName) {
        echo("active");
    }  
}

function checkHero($pageName) {    
    if ($pageName != ("/fff/" . "index" . ".php")) {
        echo("no-hero");
    }
}








?>