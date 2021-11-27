<?php

class wifiQRmodel extends QRmodel
{
    
    private $name;
    private $networkname;
    private $networkpassword;
    private $typeEscription;
    private $hiddenNetwork;

    public function __construct($design, $name, $welcomescreen)
    {
        parent::__construct($design, $name, $welcomescreen);
    }

    public function serName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function setNetworkName($networkname){
        $this->networkname = $networkname;
    }

    public function getNetworkName(){
        return $this->networkname;
    }

    public function setNetworkPassword($networkpassword){
        $this->networkpassword = $networkpassword;
    }

    public function getNetworkPassword(){
        return $this->networkpassword;
    }

    public function setTypeEncription($typeEscription){
        $this->typeEscription = $typeEscription;
    }

    public function getTypeEscription(){
        return $this->typeEscription;
    }

    public function setHiddenNetwork($hiddenNetwork){
        $this->hiddenNetwork = $hiddenNetwork;
    }

    public function getHiddenNetwork(){
        return $this->hiddenNetwork;
    }

    function __toJson()
    {
        return json_encode([
            'name' => $this->getName(),
            'networkName' => $this->getNetworkName(),
            'networkpassword' => $this->getNetworkPassword(),
            'typeEncription' => $this->getTypeEscription(),
            'hiddenNetwork' => $this->getHiddenNetwork()
        ]);
    }

}
