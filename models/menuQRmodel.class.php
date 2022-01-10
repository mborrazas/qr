<?php

class menuQRmodel extends QRmodel
{
    private $img;
    private $nameMenu;
    private $description;
    private $menu;

    public function __construct($design, $name, $welcomescreen, $userId)
    {
        parent::__construct($design, $name, $welcomescreen, 0, $userId);
    }

    public function setImg($img)
    {
        $this->img = $img;
    }

    public function getImg()
    {
        return $this->img;
    }

    public function setNameMenu($nameMenu)
    {
        $this->nameMenu = $nameMenu;
    }

    public function getNameMenu()
    {
        return $this->nameMenu;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setMenu($menu)
    {
        $this->menu = $menu;
    }

    public function getMenu()
    {
        return $this->menu;
    }

    public function setData($data){
        $menu = [];
        $count = 0;
        foreach($data['idSeccion'] as $sections){
            $menu[$sections] = ['products' => []];
            if(isset($data['nameSection'][$count])){
                $menu[$sections]['name'] = $data['nameSection'][$count];
            }
            if(isset($data['descriptionSection'][$count])){
                $menu[$sections]['description'] = $data['descriptionSection'][$count];
            }
            if(isset($data['descriptionSection'][$count])){
                $menu[$sections]['description'] = $data['descriptionSection'][$count];
            }
            foreach ($data['idProduct'] as $key => $idProduct){
                if($idProduct == $sections){
                    $menu[$sections]['products'][] = [
                      'name' => $data['nameProduct'][$key] ?? '',
                      'description' => $data['descriptionProduct'][$key] ?? '',
                      'price' => $data['priceProduct'][$key] ?? '',
                    ];
                }
            }
            $count++;
        }
        $this->setNameMenu($data['nameRistorante']);
        $this->setDescription($data['description']);
        $this->setMenu(json_encode($menu));
    }

    function __toJson()
    {
        return json_encode([
          'img' => $this->getImg(),
          'nameMenu' => $this->getNameMenu(),
          'description' => $this->getDescription(),
          'menu' => $this->getMenu()
        ]);
    }


}
