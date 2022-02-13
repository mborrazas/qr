<?php

require $_SERVER["DOCUMENT_ROOT"]."/../config.php";
class Model
{
    protected $ip;
    protected $user;
    protected $passwordDB;
    protected $nameDB;
    protected $conexion;

    public function __construct()
    {   
        $this->init();
        try{
            $this->conexion = new mysqli(
                $this->ip,
                $this->userDB,
                $this->passwordDB,
                $this->nameDB
            );
            return $this->conexion;
        }catch(Exception $e){
            error_log($e->getMessage());
        }  
    }

    public function getConexion(){
        return $this->conexion;
    }

    protected function init()
    {
             
        $this->ip = IP;
        $this->userDB = USERDB;
        $this->passwordDB = PASSWORDDB;
        $this->nameDB = NAMEDB;
    }

}
