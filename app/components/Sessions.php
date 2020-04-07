<?php
namespace app\components;

class Sessions
{
    protected  static $instance;

    private $session_start = FALSE;

    public function __construct()
    {
    }

    public function getInstance()
    {
        return (NULL !== self::$instance) ? (self::$instance) : (self::$instance = new Sessions());
    }

    public function start()
    {
        if($this->session_start){
            return true;
        }
        if(!session_start()){
            throw new Exception("Error session start");
        }
        $this->session_start = true;
        return true;

    }

    public function setSession($key,$val)
    {
        $this->start();
        $_SESSION[$key] = $val;
        return true;
    }

    public function getSession($key)
    {
//        $this->start();
        return (!empty($_SESSION[$key])) ? $_SESSION[$key]: false;
    }

    public function delete($key)
    {
        $_SESSION[$key] = '';
        return true;
    }
}