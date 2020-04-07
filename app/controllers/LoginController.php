<?php

namespace MVC\Login;

use MVC\Components\Sessions as Session;
class LoginController
{
    public function actionCheckUserForLogin()
    {
        $userEmail = $_POST['userEmail'];
        $userPassword = password_hash($_POST['userPassword'],PASSWORD_DEFAULT);
        $userSession = new Session();
        $userLogin = new Login();
        if(!($userSession->getSession($userEmail))){
            if($userLogin->CheckUser($userEmail,$userPassword)){
                $userSession->setSession($userEmail,$userPassword);
                echo json_encode("User with email: ". $userEmail ."have been authed successfully");
            }else {
                echo json_encode("Unknown user with Email". $userEmail);
            }
        }else{
            echo json_encode("You are already authed");

        }



    }
}