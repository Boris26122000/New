<?php

include_once ROOT . '/models/Registration.php';
include_once ROOT . '/Components/Sessions.php';
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
        } elseif($_POST['firstname'] == '' || $_POST['lastname'] == '' ||
            $_POST['email'] == '' || $_POST['password'] == '') {
            echo "Не все поля заполнены";
        } else {
            $this->firstName = $_POST['firstname'];
            $this->lastName = $_POST['lastname'];
            $this->email = $_POST['email'];
            $this->password = password_hash($_POST['password'],PASSWORD_DEFAULT);
            $userData = new Registration();
            if(!($userData->CheckUserForRegistration($this->email))){
                //var_dump($this);
                $userData->InsertUserDataToDb($this->firstName,$this->lastName,$this->email,$this->password);
                echo "Registration success";

            } else{
                header('Location: ');
                echo "User with email:{$this->email} has already registered, please logIn";
            }


        }
        return true;
    }
}