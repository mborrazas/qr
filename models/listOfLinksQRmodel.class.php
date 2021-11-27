<?php

class listOfLinksQRmodel extends QRmodel
{
    private $logo;
    private $description;
    private $links;
    private $socialNetworks;

    public function __construct($design, $name, $welcomescreen)
    {
        parent::__construct($design, $name, $welcomescreen);
    }

    public function setLogo($logo){
        $this->logo = $logo;
    }

    public function getLogo(){
        return $this->logo;
    }

    public function setDescription($description){
        $this->description = $description;
    }

    public function getDescription(){
        return $this->description;
    }

    public function setLinks($links){
        $this->links = $links;
    }

    public function getLinks(){
        return $this->links;
    }

    public function setSocialNetworks($socialNetworks){
        $this->socialNetworks = $socialNetworks;
    }

    public function getSocialNetworks(){
        return $this->socialNetworks;
    }

    function __toJson()
    {
        return json_encode([
            'logo' => $this->getLogo(),
            'description' => $this->getDescription(),
            'links' => $this->getLinks(),
            'socialNetworks' => $this->getSocialNetworks()
        ]);
    }
    
}
