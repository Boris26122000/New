<?php
namespace app\models;
use app\components\DB;

class Login
{
    public function CheckUser($userEmail,$userPassword)
    {
        $db = DB::getConnection();
        $result = $db->query("SELECT COUNT(*) FROM users WHERE Email = " . "$userEmail" . " AND Password = ". "$userPassword");

        if($result !== 0){
            return true;
        }else{
            return false;
        }
    }
}