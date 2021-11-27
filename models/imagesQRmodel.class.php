<?php

class imagesQRmodel extends QRmodel
{
    
    private $images;
    private $title;
    private $description;
    private $website;
    private $button;

    public function __construct($design, $name, $welcomescreen)
    {
        parent::__construct($design, $name, $welcomescreen);
    }

    public function setImages($images){
        $this->images = $images;
    }

    public function getImages(){
        return $this->images;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setDescription($description){
        $this->description = $description;
    }

    public function getDescription(){
        return $this->description;
    }

    public function setWebsite($website){
        $this->website = $website;
    }

    public function getWebsite(){
        return $this->website;
    }

    public function setButton($button){
        $this->button = $button;
    }

    public function getButton(){
        return $this->button;
    }

    function __toJson()
    {
        return json_encode([
            'images' => $this->getImages(),
            'title' => $this->getTitle(),
            'description' => $this->getDescription(),
            'website' => $this->getWebsite(),
            'button' => $this->getButton()
        ]);
    }

}
