<? class Render
{
    public static function render($filePath, $data)
    {
        echo "<br>renderform";

        extract($data);
        ob_start();
        require_once($filePath);
        $out = ob_get_clean();
        require_once('view/default.php');
    }
}
