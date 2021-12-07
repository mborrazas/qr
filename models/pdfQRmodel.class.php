<?php

class pdfQRmodel extends QRmodel
{
    
    private $pdf;
    private $company;
    private $title;
    private $description;
    private $siteUrl;

    public function __construct($design, $name, $welcomescreen, $userId)
    {
        parent::__construct($design, $name, $welcomescreen, 0, $userId);
    }

    public function setPdf($pdf){
        $this->pdf = $pdf;
    }

    public function getPdf(){
        return $this->pdf;
    }

    public function setCompany($company){
        $this->company = $company;
    }

    public function getCompany(){
        return $this->company;
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

    public function setSiteurl($url){
        $this->siteUrl = $url;
    }

    public function getSiteurl(){
        return $this->siteUrl;
    }

    public function setData($data){
        $this->setDescription($data['description']);
        $this->setTitle($data['title']);
        $this->setSiteurl($data['website']);
        $this->setCompany($data['company']);
    }

    function __toJson()
    {
        return json_encode([
           'pdf' => $this->getPdf(),
           'description' => $this->getTitle(),
           'company' => $this->getCompany(),
           'website' => $this->getSiteurl()
        ]);
    }


}
