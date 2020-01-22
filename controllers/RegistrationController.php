<?php

class RegistrationController
{

    public $firstName;
    public $lastName;
    public $email;
    public $password;


    public function actionView()
    {
        require_once(ROOT . "/views/registration/registration.php");
        return true;
    }
    public function actionTryRegistration()
    {
        if ($_POST['password'] !== $_POST['password1']) {
            echo "passwords are not equal";
        }elseif ($_POST['firstname'] == '' || $_POST['lastname'] == '' || $_POST['email'] == '' || $_POST['password'] == ''){
            echo "";
        } else {
            $this->firstName = $_POST['firstname'];
            $this->lastName = $_POST['lastname'];
            $this->email = $_POST['email'];
            $this->password = $_POST['password'];
        }
        return true;
    }
}