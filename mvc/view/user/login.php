<?
if (isset($_SESSION['uname'])) {
    echo $_SESSION['uname'];
    $msg = "شما قبلا وارد سیستم شده اید " . "<a href='index.php'> اینجا</a>" .
        "برای ورود کلیک کنید " . "<br>" . "برای خارج شدن کلیک کنید" . "<a href='logout.php'>خروج</a>";
    require_once('success.php');
    exit;
}
?>
<div class="tac">
    <img style="width: 200px;" src="<?= getBaseUrl() ?>images/notes.png" alt=""><br>
    <form action="<?= getBaseUrl() ?>user/login" method="post">
        <label for="">UserName</label>
        <input name="uname" type="text"><br><br>
        <label for="">Password</label>
        <input name="pass" type="password"><br><br>
        <input class="btnblue" type="submit" value="ُSend"><br><br>
        <a href="register.php">Create New Account</a>
</div>