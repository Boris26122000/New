<?php

class Registration
{
    public function InsertUserDataToDb($firstName, $lastName, $email, $password){
        $db = DB::getConnection();
        $db->query("INSERT INTO users(FirstName,LastName,Email,Password) VALUES('$firstName',
                '$lastName',
                '$email',
                '$password')");

    }
    public function CheckUserForRegistration($userEmail){
        $db = DB::getConnection();
        $result = $db->prepare("SELECT COUNT(*) FROM users WHERE Email = userEmail");
        $result->bindParam('userEmail', $userEmail, PDO::PARAM_STR);
        $result->execute();

        if(!($result->fetchColumn())){
            return true;
        }else{
            return false;
        }
    }
}