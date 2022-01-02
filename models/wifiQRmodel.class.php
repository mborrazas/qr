<?php

class wifiQRmodel extends QRmodel
{

    private $networkname;
    private $networkpassword;
    private $typeEscription;
    private $hiddenNetwork;

    public function __construct($design, $name, $welcomescreen, $userId)
    {
        parent::__construct($design, $name, $welcomescreen, 0, $userId);
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
            'networkName' => $this->getNetworkName(),
            'networkpassword' => $this->getNetworkPassword(),
            'typeEncription' => $this->getTypeEscription(),
            'hiddenNetwork' => $this->getHiddenNetwork()
        ]);
    }

}
