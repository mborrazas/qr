<?php


class TemplateController
{
    public static function init($request)
    {   
        try{
            if(!isset($request['get']['data'])){
                throw new Exception('No existe QR');
            }
            $dataQR = trim($request['get']['data']);          
            $info = QRmodel::getQRForUrl($dataQR);
        }catch(Exception $e){

        }
    }
}
