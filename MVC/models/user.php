<?php
class User{

    public $name;
    public $email;
    public $pass;
    public $isAdmin = false;

    public function __construct($name = null, $email = null, $pass = null)
    {
        $this->name = $name;
        $this->email = $email;
        $this->pass = $pass;
       
    }
}


?>