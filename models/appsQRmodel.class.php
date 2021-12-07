<?php

class appsQRmodel extends QRmodel
{

    private $appName;
    private $appCompany;
    private $logo;
    private $description;
    private $website;
    private $links;

    public function __construct($design, $name, $welcomescreen, $userId)
    {
        parent::__construct($design, $name, $welcomescreen, 0, $userId);
    }

    public function setAppName($appName)
    {
        $this->appName = $appName;
    }

    public function getAppName()
    {
        return $this->appName;
    }

    public function setAppCompany($appCompany)
    {
        $this->appCompany = $appCompany;
    }

    public function getAppCompany()
    {
        return $this->appCompany;
    }

    public function setLogo($logo)
    {
        $this->logo = $logo;
    }

    public function getLogo()
    {
        return $this->logo;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setWebsite($website)
    {
        $this->website = $website;
    }

    public function getWebsite()
    {
        return $this->website;
    }

    public function setLinks($links)
    {
        $this->links = $links;
    }

    public function getLinks()
    {
        return $this->links;
    }

    public function setData($data){
        $this->setAppName($data['nameApp']);
        $this->setAppCompany($data['appCompany']);
        $this->setDescription($data['description']);
        $this->setWebsite($data['website']);
      //  $this->setLinks($data['links']);
    }

    function __toJson()
    {
        return json_encode([
            'appName' => $this->getAppName(),
            'appCompany' => $this->getAppCompany(),
            'logo' => $this->getLogo(),
            'description' => $this->getDescription(),
            'website' => $this->getWebsite(),
            'links' => $this->getLinks()
        ]);
    }


}
