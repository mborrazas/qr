<?php

abstract class QRmodel extends Model
{
    private $url;
    private $id;
    private $design;
    private $name;
    private $welcomescreen;
    private $active;
    private $userId;

    public function __construct($design, $name, $welcomescreen = '', $active = 0, $userId = 0, $id = null, $url = 'test')
    {
        $this->design = $design;
        $this->name = $name;
        $this->welcomescreen = $welcomescreen;
        $this->active = $active;
        $this->id = $id;
        $this->url = 'test';
        $this->userId = $userId;
        parent::__construct();
    }

    public function setDesign($design)
    {
        $this->design = $design;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setWelcomeScreen($welcomescreen)
    {
        $this->welcomescreen = $welcomescreen;
    }

    public function getActive(){
        return $this->active;
    }

    public function setActive($active){
        $this->active = $active;
    }

    public function getdesgin()
    {
        return $this->design;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getWelcomeScreen()
    {
        return $this->welcomescreen;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setUrl($url){
        $this->url = $url;
    }

    public function getId(){
        return $this->id;
    }

    public function getUrlQR(){
        return $this->url;
    }

    public function setUserId($userId){
        $this->userId = $userId;
    }

    public function getUserId(){
        return $this->userId;
    }

    abstract function __toJson();

    public function save()
    {   
         try {
            $sql = "INSERT INTO codes(url,name,design,welcomeScreen,active,userId,dataQR) VALUES(?,?,?,?,?,?,?);";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bind_param(
                "ssssiis",
                $this->getUrlQR(),
                $this->getName(),
                $this->getdesgin(),
                $this->getWelcomeScreen(),
                $this->getActive(),
                $this->getUserId(),
                $this->__toJson()
            );
            $sentencia->execute();
            if ($sentencia->error) {
                throw new Exception("Hubo un problema al guardar el qr: " . $sentencia->error);
            }
            return true;
        } catch (Exception $e) {
            error_log($e->getMessage());
        }
    }
}
