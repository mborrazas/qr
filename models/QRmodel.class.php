<?php

abstract class QRmodel extends Model
{

    const WEBSITE = 'website';
    const LINKS = 'links';
    const VCARD = 'vcard';
    
    private $url;
    private $id;
    private $design;
    private $name;
    private $welcomescreen;
    private $active;
    private $userId;
    private $typeQR;

    public function __construct($design, $name, $welcomescreen = '', $active = 0, $userId = 0, $id = null, $url = '')
    {
        $this->design = $design;
        $this->name = $name;
        $this->welcomescreen = $welcomescreen;
        $this->active = $active;
        $this->id = $id;
        $this->url = $url;
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

    public function setTypeQR($typeQR){
        $this->typeQR = $typeQR;
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

    public function getTypeQR(){
        return $this->typeQR;
    }

    abstract function __toJson();

    private function generateUrl($length = 30) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function save()
    {   
         try {
            $url = $this->generateUrl();
            $sql = "INSERT INTO codes(url,name,design,welcomeScreen,active,userId,dataQR,typeQR) VALUES(?,?,?,?,?,?,?,?);";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bind_param(
                "ssssiiss",
                $url,
                $this->getName(),
                $this->getdesgin(),
                $this->getWelcomeScreen(),
                $this->getActive(),
                $this->getUserId(),
                $this->__toJson(),
                $this->getTypeQR()
            );
            $sentencia->execute();
            if ($sentencia->error) {
                throw new Exception("Hubo un problema al guardar el qr: " . $sentencia->error);
            }
            return $url;
        } catch (Exception $e) {
            error_log($e->getMessage());
        }
    }

    public static function getQRForUrl(string $url){
        $model = new Model();
        $conexion = $model->getConexion();
        try {
            $sql = "SELECT * FROM codes where url = ?;";
            $sentencia = $conexion->prepare($sql);
            $sentencia->bind_param(
                "s",
                $url
            );
            $sentencia->execute();
            $dataQR = $sentencia->get_result();
            while ($row = $dataQR->fetch_assoc()) {
               return self::createDataToModel($row);
            }
        } catch (Exception $e) {
            error_log($e->getMessage());
        }
    }

    private static function createDataToModel($data){
        switch($data['typeQR']){
            case self::WEBSITE:
                $website = new websiteQRmodel($data['design'], $data['name'], $data['welcomescreen'], $data['userId']);
                $dataWebsite = json_decode($data['dataQR'], true);
                $website->setUrl($dataWebsite['url']);
                return $website;
                break;
        }
    }

   
}
