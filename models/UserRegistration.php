<?php
namespace models\Registration;
use MVC\Components\Sessions;


class UserRegistration
{
    private $firstName;
    private $lastName;
    private $email;
    private $password;

    public function __construct()
    {
        if($_POST['password'] !== $_POST['password1']){
            echo "passwords are not equal";
        }else {
            $this->firstName = $_POST['firstname'];
            $this->lastName = $_POST['lastname'];
            $this->email = $_POST['email'];
            $this->password = $_POST['password'];
        }
    }
    public function Registration(){
        $user = new Sessions\Sessions();
        if($user->getSession($_POST['firstname']) == false){
            $user->setSession($_POST['firstname'],$_POST['email']);
            return $userdb = new UserRegistration();
        } else throw new \Exception("You`ve already authed");
    }
}