<?
spl_autoload_register(function ($class_name) {
    echo "<hr>AutoLoad !!!!!!!!!!!!!!!!!! <hr>";
    if (strHas($class_name, "Model")) {
        $fileName = str_replace("Model", "", $class_name);
        $fileName = strtolower($fileName);
        require_once("mvc/model/$fileName .php");
        return;
    }
    if (strHas($class_name, "Controller")) {
        $fileName = str_replace("Controller", "", $class_name);
        $fileName = strtolower($fileName);
        require_once("mvc/controller/$fileName.php");
        return;
    }
});
