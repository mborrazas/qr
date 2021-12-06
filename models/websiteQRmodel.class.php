<?php

class websiteQRmodel extends QRmodel
{
    private $url;

    public function __construct($design, $name, $welcomescreen = '',$userId)
    {
        parent::__construct($design, $name, $welcomescreen, 0, $userId);
    }

    public function setUrl($url){
        $this->url = $url;
    }

    public function getUrl(){
        return $this->url;
    }
    
    public function __toJson()
    {
        return json_encode([
           'url' => $this->getUrl()
        ]);
    }


}
