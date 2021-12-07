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
        return json_decode($this->links, true);
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
        return json_decode($this->socialNetworks, true);
    }

    function __toJson()
    {
        return json_encode([
            'logo' => $this->getLogo(),
            'title' => $this->getTitle(),
            'description' => $this->getDescription(),
            'links' => json_encode($this->getLinks()),
            'socialNetworks' => json_encode($this->getSocialNetworks())
        ]);
    }
    
}
