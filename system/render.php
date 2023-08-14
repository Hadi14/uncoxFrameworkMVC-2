<? class Render
{
    public static function render($filePath, $data)
    {
        extract($data);
        require_once($filePath);
    }
}
