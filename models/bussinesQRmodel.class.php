<?php

class bussinesQRmodel extends QRmodel
{
    private $image;
    private $company;
    private $title;
    private $subtitle;
    private $button;
    private $hours;
    private $location;
    private $facilities;
    private $namePerson;
    private $telefone;
    private $email;
    private $website;
    private $aboutCompany;
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

    public function setCompany($company)
    {
        $this->company = $company;
    }

    public function getCompany()
    {
        return $this->company;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;
    }

    public function getSubtitle()
    {
        return $this->subtitle;
    }

    public function setButton($button)
    {
        $this->button = $button;
    }

    public function getButton()
    {
        return $this->button;
    }

    public function setHours($hours)
    {
        $this->hours = $hours;
    }

    public function getHours()
    {
        return $this->hours;
    }

    public function setLocation($location){
        $this->location = $location;
    }

    public function getLocation(){
        return $this->location;
    }

    public function setFacilities($facilities){
        $this->facilities = $facilities;
    }

    public function getFacilities(){
        return $this->facilities;
    }

    public function setNamePerson($name){
        $this->namePerson = $name;
    }

    public function getNamePerson(){
        return $this->namePerson;
    }

    public function setTelefono($telefone){
        $this->telefone = $telefone;
    } 
    public function getTelefono(){
        return $this->telefone;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setWebsite($website){
        $this->website = $website;
    }

    public function getWebsite(){
        return $this->website;
    }

    public function setAboutCompany($aboutCompany){
        $this->aboutCompany = $aboutCompany;
    }

    public function getAboutCompany(){
        return $this->aboutCompany;
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
            'image' => $this->getImage(),
            'company' => $this->getCompany(),
            'title' => $this->getTitle(),
            'subtitle' => $this->getSubtitle(),
            'button' => $this->getButton(),
            'hours' => $this->getHours(),
            'location' => $this->getLocation(),
            'facilities' => $this->getFacilities(),
            'namePerson' => $this->getNamePerson(),
            'telefone' => $this->getTelefono(),
            'website' => $this->getWebsite(),
            'aboutCompany' => $this->getAboutCompany(),
            'socialNetwork' => $this->getSocialNetworks()
        ]);
    }
}
