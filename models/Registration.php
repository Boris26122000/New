<?php

class Registration
{
    public function InsertUserDataToDb(){
        $db = DB::getConnection();
        $userData = new RegistrationController();
        //$userData->actionTryRegistration();
        $db->query("INSERT INTO users(FirstName,LastName,Email,Password) VALUES('{$userData->firstName}',
                '{$userData->lastName}',
                '{$userData->email}',
                '{$userData->password}')");

    }
}