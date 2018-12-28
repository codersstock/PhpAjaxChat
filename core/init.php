<?php

function __autoload($class){
    require_once "class/{$class}.php";
}

require_once("header.php");

?>