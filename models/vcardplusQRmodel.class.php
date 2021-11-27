<?php

class vcardplusQRmodel extends QRmodel
{
    private $image;
    private $peopleName;
    private $surname;
    private $mobilePhone;
    private $landline;
    private $fax;
    private $email;
    private $personalWebsite;
    private $address;
    private $numeration;
    private $postalCode;
    private $city;
    private $state;
    private $country;
    private $company;
    private $profession;
    private $summary;
    private $socialNetworks;


    public function __construct($design, $name, $welcomescreen)
    {
        parent::__construct($design, $name, $welcomescreen);
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setPeopleName($peopleName)
    {
        $this->peopleName = peopleName;
    }

    public function getPeopleName()
    {
        return $this->peopleName;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setMobilePhone($mobilePhone)
    {
        return $this->mobilePhone = $mobilePhone;
    }

    public function getMobilePhone()
    {
        return $this->mobilePhone;
    }

    public function setLandline($landline)
    {
        $this->landline = $landline;
    }

    public function getLandline()
    {
        return $this->landline;
    }

    public function setFax($fax)
    {
        $this->fax = $fax;
    }

    public function getFax()
    {
        return $this->fax;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setPersonalWebsite($personalWebsite)
    {
        $this->personalWebsite = $personalWebsite;
    }

    public function getPersonalWebsite()
    {
        return $this->personalWebsite;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setNumeration($numeration)
    {
        $this->numeration = $numeration;
    }

    public function getNumeration()
    {
        return $this->numeration;
    }

    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    public function getPostalCode()
    {
        return $this->postalCode;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getState()
    {
        return $this->state;
    }

    public function setCountry()
    {
        return $this->country;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setCompany($company)
    {
        $this->company = $company;
    }

    public function getCompany()
    {
        return $this->company;
    }

    public function setProfession($profession)
    {
        $this->profession = $profession;
    }

    public function getProfession()
    {
        return $this->profession;
    }

    public function setSummary($summary)
    {
        $this->summary = $summary;
    }

    public function getSummary()
    {
        return $this->summary;
    }

    public function setSocialNetworks($socialNetworks)
    {
        $this->socialNetworks = $socialNetworks;
    }

    public function getSocialNetworks()
    {
        return $this->socialNetworks;
    }

    function __toJson()
    {
        return json_encode([
            'image' => $this->getImage(),
            'peopleName' => $this->getPeopleName(),
            'surname' => $this->getSurname(),
            'mobilePhone' => $this->getMobilePhone(),
            'landline' => $this->getLandline(),
            'fax' => $this->getFax(),
            'email' => $this->getEmail(),
            'personalWebsite' => $this->getPersonalWebsite(),
            'address' => $this->getAddress(),
            'numeration' => $this->getNumeration(),
            'postalCode' => $this->getPostalCode(),
            'city' => $this->getCity(),
            'state' => $this->getState(),
            'country' => $this->getCountry(),
            'company' => $this->getCompany(),
            'profession' => $this->getProfession(),
            'summary' => $this->getSummary(),
            'socialNetworks' => $this->getSocialNetworks()
        ]);
    }


}
