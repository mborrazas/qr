<?php

class videoQRmodel extends QRmodel
{
    
    private $video;
    private $company;
    private $videoTitle;
    private $description;
    private $button;

    public function __construct($design, $name, $welcomescreen, $userId)
    {
        parent::__construct($design, $name, $welcomescreen, 0, $userId);
    }

    public function setVideo($video){
        $this->video = $video;
    }

    public function getVideo(){
        return $this->video;
    }

    public function setCompany($company){
        $this->company = $company;
    }

    public function getCompany(){
        return $this->company;
    }

    public function setVideoTitle($videoTitle){
        $this->videoTitle = $videoTitle;
    }

    public function getVideoTitle(){
        return $this->videoTitle;
    }

    public function setDescription($description){
        $this->description = $description;
    }

    public function getDescription(){
        return $this->description;
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
            'video' => $this->getVideo(),
            'company' => $this->getCompany(),
            'videoTitle' => $this->getVideoTitle(),
            'description' => $this->getDescription(),
            'button' => $this->getButton()
        ]);
    }

}
