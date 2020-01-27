<?php

class Login
{
    public function CheckUser($userEmail,$userPassword)
    {
        $db = DB::getConnection();
        $result = $db->prepare("SELECT COUNT(*) FROM users WHERE Email = userEmail AND Password = userPassword");
        $result->bindParam('userEmail', $userEmail, PDO::PARAM_STR);
        $result->bindParam('userPassword', $userPassword, PDO::PARAM_STR);
        $result->execute();

        if(!($result->fetchColumn())){
            return true;
        }else{
            return false;
        }
    }
}