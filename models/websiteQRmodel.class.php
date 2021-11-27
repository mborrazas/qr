<?php

class websiteQRmodel extends QRmodel
{
    private $url;

    public function __construct($design, $name, $welcomescreen)
    {
        parent::__construct($design, $name, $welcomescreen);
    }

    public function setUrl($url){
        $this->url = $url;
    }

    public function getUrl(){
        return $this->url;
    }

    function __toJson()
    {
        return json_encode([
           'url' => $this->getUrl()
        ]);
    }


}
