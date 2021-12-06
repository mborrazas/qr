<?php


class GenerateController
{

    private static function getQR()
    {   session_start();
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

    private static function saveQR($qr){
        $_SESSION['qr'] = json_encode($qr);
        return;
    }


    public static function listTypes()
    {
        return generarHtml("generate/listTypesQrs", []);
    }

    public static function requestListTypes($request)
    {
        if(!isset($request['post']['type'])){
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
        if($qr['type'] == ''){
            throw new Exception('El tipo es requerido.');
        }
        return generarHtml("generate/step2", ['type' => $qr['type']]);
    }

    public static function requestStep2($request)
    {
        $qr = self::getQR();
        $qr['data'] = $request['post'];
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
        if(isset($_SESSION['user']) && $_SESSION['user'] !== null){
            header('Location: /generate/createqr');
        }else{
            header('Location: /generate/step4');
        }
    }

    public static function step5(){
        header('Location: /generate/step6');
        return generarHtml("generate/step5", []);
    }

    public static function step6(){
        return generarHtml("generate/step6", []);
    }

    public static function createqr(){
        $qr = self::getQR();
        self::saveDataForQR($qr);
        header('Location: /generate/step5');
    }

    private static function saveDataForQR($item){
        if(!isset($item['type'])){
            throw new Exception('Error en el tipo de QR.');
        }
        $data = $item['data'];
        switch($item['type']){
            case 'website':
                $model = new websiteQRmodel(json_encode($item['design']), $data['name'], '', $_SESSION['user']);
                $model->setTypeQR(QRmodel::WEBSITE);
                $model->setUrl($data['url']);
                $model->save();
                break;
        }
    }

}
