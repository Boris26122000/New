<?php
namespace app\models\User;
use app\base\BaseModel;

class User extends BaseModel
{
    /** @var  int*/
    private $id;

    /** @var string */
    private $FirstName;

    /** @var string */
    private $LastName;

    /** @var string */
    private $Email;

    /** @var string */
    private $Password;

    /** @var int */
    private $order_id;

    /** @var string */
    private $BirthDate;

    /** @var string */
    private $Phone;

    public function Register()
    {
        $vars = get_object_vars($this);
        var_dump($vars);

    }

}


