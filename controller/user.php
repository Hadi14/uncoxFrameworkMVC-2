<?
class UserController
{
    public function __construct()
    {
        echo "<hr>Contructor<hr>";
    }
    public function profile($p1)
    {
        echo "Profile Method <br>";
        echo "Parameter is: $p1<hr>";
    }
}
