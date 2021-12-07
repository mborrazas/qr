<?php

class listOfLinksQRmodel extends QRmodel
{
    private $logo;
    private $description;
    private $links;
    private $title;
    private $socialNetworks;

    public function __construct($design, $name, $welcomescreen = '', $userId)
    {
        parent::__construct($design, $name, $welcomescreen, 0, $userId);
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

    public function setTitle($title){
        $this->title = $title;
    }

    public function getTitle(){
        return $this->title;
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
            'title' => $this->getTitle(),
            'description' => $this->getDescription(),
            'links' => $this->getLinks(),
            'socialNetworks' => $this->getSocialNetworks()
        ]);
    }
    
}
