<?php


class GenerateController
{

    private static function getQR()
    {
        session_start();
        if (isset($_SESSION['qr'])) {
            $qr = json_decode($_SESSION['qr'], true);
        } else {
            $qr = [
                'type' => '',
                'data' => [],
                'design' => [],
            ];
        }
        return $qr;
    }

    private static function saveQR($qr)
    {
        $_SESSION['qr'] = json_encode($qr);
        return;
    }


    public static function listTypes()
    {
        return generarHtml("generate/listTypesQrs", []);
    }

    public static function requestListTypes($request)
    {
        if (!isset($request['post']['type'])) {
            throw new Exception('El tipo es requerido.');
        }
        $qr = self::getQR();
        $qr['type'] = $request['post']['type'];
        self::saveQR($qr);
        header('Location: /generate/step2');
    }

    public static function step2()
    {
        $qr = self::getQR();
        if ($qr['type'] == '') {
            throw new Exception('El tipo es requerido.');
        }
        return generarHtml("generate/step2", ['type' => $qr['type']]);
    }
    private static function generateUrl($length = 30)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public static function requestStep2($request)
    {
        $qrAux = self::getQR();
        $qr = [];
        $qr['type'] = $qrAux['type'];
        $qr['data'] = $request['post'];
        $img = [];
        foreach ($_FILES as $key => $file){
             $count = is_array($file['tmp_name']) ? count($file['tmp_name']) : 1 ;
            for($i=0; $i < $count; $i++){
                if($i > 0){
                    $key = $key.$i;
                }
                $tmpFilePath =  is_array($file['tmp_name']) ? $file['tmp_name'][$i] : $file['tmp_name'];
                if ($tmpFilePath != ""){
                    $path = is_array($file['name']) ? $file['name'][$i] : $file['name'];
                    $ext = pathinfo($path, PATHINFO_EXTENSION);
                    $url = "/" . self::generateUrl().'.'.$ext;
                    $newFilePath = $_SERVER["DOCUMENT_ROOT"] . $url;
                    if(!move_uploaded_file($tmpFilePath, $newFilePath)) {
                      throw new Exception('Error al cargar imagen');
                    }
                    $img[$key] = $url;
                }
            }
        }
        $qr['img'] = $img;
        self::saveQR($qr);
        header('Location: /generate/step3');
    }

    public static function step3()
    {
        return generarHtml("generate/step3", []);
    }

    public static function requestStep3($request)
    {
        $qr = self::getQR();
        $qr['design'] = $request['post'];
        self::saveQR($qr);
        if (isset($_SESSION['user']) && $_SESSION['user'] !== null) {
            header('Location: /generate/createqr');
        } else {
            header('Location: /generate/step4');
        }
    }

    public static function step5()
    {
        header('Location: /generate/step6');
        return generarHtml("generate/step5", []);
    }

    public static function step6()
    {
        $qr = self::getQR();
        return generarHtml("generate/step6", ['url' => $qr['url']]);
    }

    private static function generateQR($url)
    {
        require $_SERVER["DOCUMENT_ROOT"] . "/../qrlib.php";
        $ruta_qr = $_SERVER["DOCUMENT_ROOT"] . "/{$url}.png";
        QRcode::png('https://7867-2800-a4-16e5-eb00-c45-34f0-8eac-e580.ngrok.io/site?data=' . $url, $ruta_qr, "Q", 10, 1);
    }

    public static function createqr()
    {
        $qr = self::getQR();
        self::saveDataForQR($qr);
        header('Location: /generate/step5');
    }

    private static function saveDataForQR($item)
    {
        if (!isset($item['data']['typeText'])) {
            throw new Exception('Error en el tipo de QR.');
        }
        $data = $item['data'];
        $img = $item['img'] ?? [];
             switch ($data['typeText']) {
                case QRmodel::WEBSITE:
                    $model = new websiteQRmodel(json_encode($item['design']), $data['qrName'], '', $_SESSION['user']);
                    $model->setTypeQR(QRmodel::WEBSITE);
                    $model->setUrl($data['url']);
                    $url = $model->save();
                    self::generateQR($url);
                    $qr = self::getQR();
                    $qr['url'] = $url;
                    self::saveQR($qr);
                    break;
                case QRmodel::LINKS:

                    $design = [
                        "background" => $data['background'],
                        "backgroundLink" => $data['backgroundLink'],
                        "colorText" => $data['colorText']
                    ];
                    $model = new listOfLinksQRmodel(json_encode($design), $data['qrName'], '', $_SESSION['user']);
                    $model->setLogo($img['imgTitle'] ?? '');
                    $model->setTypeQR(QRmodel::LINKS);
                    $model->setTitle($data['title']);
                    $model->setDescription($data['description']);

                    $enlaces = [];
                    for ($i = 0; $i < count($data['textoEnlace']); $i++) {
                        $enlaces[] = ["text" => $data['textoEnlace'][$i], 'link' => $data['url'][$i]];
                    }

                    $model->setLinks(json_encode($enlaces));
                    $social = [];
                    for ($i = 0; $i < count($data['linkSocialNetwork']); $i++) {
                        $social[] = ["type" => $data['typeSocialNetwork'][$i], 'link' => $data['linkSocialNetwork'][$i]];
                    }
                    $model->setSocialNetworks(json_encode($social));
                    $url = $model->save();
                    self::generateQR($url);
                    $qr = self::getQR();
                    $qr['url'] = $url;
                    self::saveQR($qr);
                    break;
                case QRmodel::BUSINESS:
                    $model = new bussinesQRmodel(json_encode($item['design']), $data['qrName'], '', $_SESSION['user']);
                    $model->setTypeQR(QRmodel::BUSINESS);
                    $model->setImage($img['imgTitle'] ?? '');
                    $model->setData($data);
                    $url = $model->save();
                    self::generateQR($url);
                    $qr = self::getQR();
                    $qr['url'] = $url;
                    self::saveQR($qr);
                    break;
                case QRmodel::APPS:
                    $model = new appsQRmodel(json_encode($item['design']), $data['qrName'], '', $_SESSION['user']);
                    $model->setTypeQR(QRmodel::APPS);
                    $model->setLogo($img['imgTitle']?? '');
                    $model->setData($data);
                    $url = $model->save();
                    self::generateQR($url);
                    $qr = self::getQR();
                    $qr['url'] = $url;
                    self::saveQR($qr);
                    break;
                case QRmodel::PDF:
                    $model = new pdfQRmodel(json_encode($item['design']), $data['qrName'], '', $_SESSION['user']);
                    $model->setTypeQR(QRmodel::PDF);
                    $model->setData($data);
                    $model->setPdf($img['pdf'] ?? '');
                    $url = $model->save();
                    self::generateQR($url);
                    $qr = self::getQR();
                    $qr['url'] = $url;
                    self::saveQR($qr);
                    break;
                case QRmodel::MENU:
                    $model = new menuQRmodel(json_encode($item['design']), $data['qrName'], '', $_SESSION['user']);
                    $model->setTypeQR(QRmodel::MENU);
                    $model->setData($data);
                    $url = $model->save();
                    self::generateQR($url);
                    $qr = self::getQR();
                    $qr['url'] = $url;
                    self::saveQR($qr);
                    break;
                case QRmodel::VCARD:
                    $design = [
                        "background" => $data['background'],
                        "backgroundLink" => $data['backgroundLink'],
                        "colorText" => $data['colorText']
                    ];
                    $model = new vcardplusQRmodel(json_encode($design), $data['qrName'], '', $_SESSION['user']);
                    $model->setTypeQR(QRmodel::VCARD);
                    $model->setImage($img['imgTitle']);
                    $model->setPeopleName($data['peopleName']);
                    $model->setSurname($data['peopleLastname']);
                    $model->setMobilePhone($data['mobilePhone']);
                    $model->setPhone($data['phone']);
                    $model->setFax($data['fax']);
                    $model->setEmail($data['email']);
                    $model->setPersonalWebsite($data['website']);
                    $model->setCity($data['city']);
                    $model->setState($data['state']);
                    $model->setCompany($data['company']);

                    $model->setProfession($data['profession']);
                    $model->setSummary($data['resume']);
                    $social = [];
                    for ($i = 0; $i < count($data['linkSocialNetwork']); $i++) {
                        $social[] = ["type" => $data['typeSocialNetwork'][$i], 'link' => $data['linkSocialNetwork'][$i]];
                    }
                    $model->setSocialNetworks(json_encode($social));
                    $url = $model->save();
                    self::generateQR($url);
                    $qr = self::getQR();
                    $qr['url'] = $url;
                    self::saveQR($qr);
                    break;
                case QRmodel::WIFI:
                    $model = new wifiQRmodel(json_encode($item['design']), $data['qrName'], '', $_SESSION['user']);
                    $model->setTypeQR(QRmodel::WIFI);
                    $model->setNetworkName($data['nameWifi']);
                    $model->setNetworkPassword($data['passwordWifi']);
                    $url = $model->save();
                    self::generateQR($url);
                    $qr = self::getQR();
                    $qr['url'] = $url;
                    self::saveQR($qr);
                    break;
                case QRmodel::GALLERY:
                    $model = new imagesQRmodel(json_encode($item['design']), $data['qrName'], '', $_SESSION['user']);
                    $model->setTypeQR(QRmodel::GALLERY);
                    $model->setTitle($data['title']);
                    $model->setDescription($data['description']);
                    $model->setButton(json_encode(['text' => $data['textBoton'], 'url' => $data['url']]));
                    $images = [];
                    foreach ($img as $image){
                        $images[] = $image;
                    }
                    $model->setImages(json_encode($images));
                    $url = $model->save();
                    self::generateQR($url);
                    $qr = self::getQR();
                    $qr['url'] = $url;
                    self::saveQR($qr);
                    break;
                    case QRmodel::VIDEO:
                     $model = new videoQRmodel(json_encode($item['design']), $data['qrName'], '', $_SESSION['user']);
                     $model->setTypeQR(QRmodel::VIDEO);
                     $model->setDescription($data['description']);
                     $model->setVideo(json_encode($img['video'] ?? ''));
                     $url = $model->save();
                     self::generateQR($url);
                     $qr = self::getQR();
                     $qr['url'] = $url;
                     self::saveQR($qr);
                     break;
            }
    }
}
