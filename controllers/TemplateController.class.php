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
             if($info instanceof websiteQRmodel){
                header('Location: '.$info->getUrl());
            }elseif($info instanceof listOfLinksQRmodel){
                
            }
            return generarHtml("site/links", ['data' => $info]);
        }catch(Exception $e){

        }
    }
}
