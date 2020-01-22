<?php
class LoginController
{
    public $userEmail;
    public $userPassword;

    public function actionCheckUserForLogin()
    {
        echo $_POST['userEmail'] . $_POST['userPassword'];

    }
}