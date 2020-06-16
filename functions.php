<?php

$STATE = array(
    'uri' => setUri()
);

function setUri() {
    $uri = explode("/", $_SERVER['PHP_SELF']);
    $uri = end($uri);
    return $uri;
}

function setActive($pageName) {
    $currentUrl = $GLOBALS['STATE']['uri'];    
    $pageName = $pageName . ".php";    
    if ($currentUrl == $pageName) {
        echo("active");
    }    
}

function checkHero() {    
    if ($GLOBALS['STATE']['uri'] != ("index" . ".php")) {
        echo("no-hero");
    }
}








?>