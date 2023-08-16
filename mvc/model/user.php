<?
class UserModel
{
    public static function insert($user, $pass, $level)
    {
        $db=Db::getInstance();
        return $db->insert( "insert into users (username, password,level) values ('$user','$pass','$level') ");
        
        
    }
}
