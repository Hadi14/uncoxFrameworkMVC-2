<?
spl_autoload_register(function ($class_name) {
    echo "<hr>AutoLoad !!!!!!!!!!!!!!!!!! <hr>";
    require_once("mvc/controller/" . $class_name . "php");
});
