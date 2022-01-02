<?php

class bussinesQRmodel extends QRmodel
{
    private $image;
    private $company;
    private $title;
    private $subtitle;
    private $button;
    private $hours;
    private $facilities;
    private $namePerson;
    private $telefone;
    private $email;
    private $website;
    private $aboutCompany;
    private $socialNetworks;
    private $address;
    private $numAddress;
    private $postalCode;
    private $city;
    private $state;
    private $country;


    public function __construct($design, $name, $welcomescreen, $userId)
    {
        parent::__construct($design, $name, $welcomescreen, 0, $userId);
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

    public function setPostalCode($postalCode){
        $this->postalCode = $postalCode;
    }

    public function getPostalCode(){
        return $this->postalCode;
    }

    public function setAddress($address){
        $this->address = $address;
    }

    public function getAddress(){
        return $this->address;
    }

    public function setCity($city){
        $this->city = $city;
    }

    public function getCity(){
        return $this->city;
    }

    public function getAddressNumber(){
        return $this->numAddress;
    }

    public function setAddressNumber($addresNumber){
        $this->numAddress = $addresNumber;
    }

    public  function setState($state){
        $this->state = $state;
    }

    public function getState(){
        return $this->state;
    }

    public function setCountry($country){
        $this->country = $country;
    }

    public function getCountry(){
        return $this->country;
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

    public function setData($data){
        $hours = [];
        if(isset($data['checkMonday']) && $data['checkMonday'] == 'on'){
            $hours['Lunes'] = [
              'opening' => $data['openingHoursMonday'],
                'closes' => $data['closesHoursMonday']
            ];
        }
        if(isset($data['checkTuesday']) && $data['checkTuesday'] == 'on'){
            $hours['Martes'] = [
                'opening' => $data['openingHoursTuesday'],
                'closes' => $data['closesHoursTuesday']
            ];
        }
        if(isset($data['checkWednesday']) && $data['checkWednesday'] == 'on'){
            $hours['Miercoles'] = [
                'opening' => $data['openingHoursWednesday'],
                'closes' => $data['closesHoursWednesday']
            ];
        }
        if(isset($data['checkThursday']) && $data['checkThursday'] == 'on'){
            $hours['Jueves'] = [
                'opening' => $data['openingHoursThursday'],
                'closes' => $data['closesHoursThursday']
            ];
        }
        if(isset($data['checkFriday']) && $data['checkFriday'] == 'on'){
            $hours['Viernes'] = [
                'opening' => $data['openingHoursFriday'],
                'closes' => $data['closesHoursFriday']
            ];
        }
        if(isset($data['checkSaturday']) && $data['checkSaturday'] == 'on'){
            $hours['Sabado'] = [
                'opening' => $data['openingHoursSaturday'],
                'closes' => $data['closesHoursSaturday']
            ];
        }
        if(isset($data['checkSunday']) && $data['checkSunday'] == 'on'){
            $hours['Domingo'] = [
                'opening' => $data['openingHoursSunday'],
                'closes' => $data['closesHoursSunday']
            ];
        }
        $facilities = [];
        $facilitiesAux = [
            'wifi',
            'seat',
            'accessible',
            'toilet',
            'child',
            'pet',
            'parking',
            'train',
            'taxi',
            'bed',
            'cafe',
            'bar',
            'restaurant'
        ];
        foreach ($facilitiesAux as $facilitie){
            if(isset($data[$facilitie]) && $data[$facilitie]){
                $facilities[] = $facilitie;
            }
        }
        $this->setCompany($data['company']);
        $this->setTitle($data['title']);
        $this->setSubtitle($data['subtitle']);
        $this->setNamePerson($data['namePerson']);
        $this->setTelefono($data['phone']);
        $this->setWebsite($data['website']);
        $this->setAboutCompany($data['aboutCompany']);
        $this->setAddress($data['address']);
        $this->setState($data['state']);
        $this->setCity($data['city']);
        $this->setCountry($data['country']);
        $this->setHours(json_encode($hours));
        $this->setButton(json_encode(['text' => $data['textBoton'], 'url' => $data['url']]));
        $this->setFacilities(json_encode($facilities));
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
            'facilities' => $this->getFacilities(),
            'namePerson' => $this->getNamePerson(),
            'telefone' => $this->getTelefono(),
            'website' => $this->getWebsite(),
            'aboutCompany' => $this->getAboutCompany(),
            'socialNetwork' => $this->getSocialNetworks(),
            'address' => $this->getAddress(),
            'numeration' => $this->getAddressNumber(),
            'state' => $this->getState(),
            'country' => $this->getCountry(),
            'city' => $this->getCity()
        ]);
    }
}
