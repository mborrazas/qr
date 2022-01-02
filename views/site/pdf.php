<?php $data = $parametros['data'];
$description = null;
$title = null;
$logo = null;
if($data instanceof pdfQRmodel){
    var_dump($data->getPdf());die;
}
?>