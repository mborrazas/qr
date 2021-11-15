<?php

require $_SERVER["DOCUMENT_ROOT"]."/../config.php";
class Model
{
    protected $ip;
    protected $user;
    protected $password;
    protected $name;
    protected $conexion;

    public function __construct()
    {
        $this->init();
        try{
            $this->conexion = new mysqli(
                $this->ip,
                $this->user,
                $this->password,
                $this->name
            );
        }catch(Exception $e){
            error_log($e->getMessage());
        }  
    }

    protected function init()
    {
             
        $this->ip = IP;
        $this->user = USER;
        $this->password = PASSWORD;
        $this->name = NAME;
    }
}
