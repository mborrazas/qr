<?php

class pdfQRmodel extends QRmodel
{
    
    private $pdf;

    public function __construct($design, $name, $welcomescreen)
    {
        parent::__construct($design, $name, $welcomescreen);
    }

    public function setPdf($pdf){
        $this->pdf = $pdf;
    }

    public function getPdf(){
        return $this->pdf;
    }

    function __toJson()
    {
        return json_encode([
           'pdf' => $this->getPdf()
        ]);
    }


}
