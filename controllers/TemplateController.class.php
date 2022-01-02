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
                 return generarHtml("site/links", ['data' => $info]);
            }elseif($info instanceof  vcardplusQRmodel){
                 return generarHtml("site/vcard", ['data' => $info]);
             }elseif($info instanceof  bussinesQRmodel){
                 return generarHtml("site/business", ['data' => $info]);
             }elseif($info instanceof appsQRmodel){
                 return generarHtml("site/apps", ['data' => $info]);
             }elseif($info instanceof pdfQRmodel){
                 return generarHtml("site/pdf", ['data' => $info]);
            }elseif($info instanceof imagesQRmodel){
                 return generarHtml("site/images", ['data' => $info]);
            }elseif($info instanceof videoQRmodel){
                 return generarHtml("site/video", ['data' => $info]);
             }elseif($info instanceof wifiQRmodel){
                 return generarHtml("site/wifi", ['data' => $info]);
             }
        }catch(Exception $e){

        }
    }
}
