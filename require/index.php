<?php 

require "layout.phtml";

if(isset($_GET["route"]) && !empty($_GET["route"])){
    $route = $_GET["route"];
} else {
    $route = null;
};

?>