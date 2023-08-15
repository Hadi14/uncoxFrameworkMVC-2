<?
function dump($var, $return = false)
{
    if (is_array($var)) {
        $out = print_r($var, true);
    } else if (is_object($var)) {
        $out = var_export($var, true);
    } else {
        $out = $var;
    }

    if ($return) {
        return "\n<pre>$out</pre>\n";
    } else {
        echo "\n<pre>$out</pre>\n";
    }
}


function br()
{
    echo "<br>\n";
}
function getFullUrl()
{
    return $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
}
function getRequestUri()
{
    return  $_SERVER['REQUEST_URI'];
}


 function getBaseUrl() {
    return "/uncoxFrameworkMVC-2/";
}

function strHas($str,$sub)  {
    return $str.substr($sub)
}