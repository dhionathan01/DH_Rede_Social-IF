﻿<? 
    function exibirArray($array){
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
    error_reporting(E_ALL);
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors',1);
    
    require_once"vendor/autoload.php";
    $route = new \App\Route;
?>