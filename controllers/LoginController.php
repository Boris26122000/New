<?php
include ROOT. '/models/Login.php';
include ROOT .  '/Components/Sessions.php';
class LoginController
{

    public function actionCheckUserForLogin()
    {
        $userEmail = $_POST['userEmail'];
        $userPassword = password_hash($_POST['userPassword'],PASSWORD_DEFAULT);
        $userSession = new Sessions();
        $userLogin = new Login();
        var_dump($userLogin->CheckUser($userEmail,$userPassword));
/*        if(!($userSession->getSession($userEmail))){
            if($userLogin->CheckUser($userEmail,$userPassword)){
                $userSession->setSession($userEmail,$userPassword);
                return "User with email: ". $userEmail ."have been authed successfully";
            }else {
                return "Unknown user with Email". $userEmail;
            }
        }else{
            return "You are already authed";
        }*/



    }
}