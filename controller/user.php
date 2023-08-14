<?
class UserController
{
    public function __construct()
    {
        // echo "<hr>Contructor<hr>";
    }
    public function profile($p1)
    {
        echo "Profile Method <br>";
        echo "Parameter is: $p1<hr>";
    }
    function login()
    {
        if (isset($_SESSION['uname'])) {
            require('main.php');
            $db = Db::getInstance();
            $u = $_POST['uname'];
            $p = $_POST['pass'];

            $sql = "select * from users where username='$u' and password='$p'";
            $record = $db->query($sql);
            if ($record == null) {
                header("Location: fail.php");
            } else {
                $msg = "<h4>تبریک شما به سیستم وارد شدید.</h4> <br> <span>برای ورود به صفحه اصلی<a href='index.php'> اینجا </a>کلیک کنید</span>";
                require_once('success.php');
                $_SESSION['uname'] = $u;
            }
        } else {
            $this->showLoginForm();
        }
    }
    function showLoginForm()
    {
        echo "Login Form";
    }
}
