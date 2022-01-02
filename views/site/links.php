<?php $data = $parametros['data'];
$description = null;
$title = null;
$logo = 'https://upload.wikimedia.org/wikipedia/commons/f/f9/Phoenicopterus_ruber_in_S%C3%A3o_Paulo_Zoo.jpg';
if($data instanceof listOfLinksQRmodel){
    $design = json_decode($data->getdesgin());
    $title = $data->getTitle();
    $description = $data->getDescription();
   // $logo = $data->getLogo();
}
?>
    <style>
        body{
            background: <?php echo $design->background ?? 'white'; ?>;
            text-align: center;
        }
        img{
            height: 150px;
            width: 150px;
            border-radius:50%;
            margin-bottom: 30px;
            margin-top: 100px;
        }
        a{
            text-align: center;
            display: block;
            background: <?php echo $design->backgroundLink ?? 'black'; ?>;
            padding: 27px;
            margin-right: 10%;
            margin-left: 10%;
            border-radius: 5px;
            margin-bottom: 45px;
            text-decoration: none;
            font-size: 31px;
            color:<?php echo $design->colorText ?? 'black'; ?>
        }
        h1{
            font-size: 50px;
            margin-top: 32px;
        }
        p{
            font-size: 35px;
        }
    </style>


<?php
    if(!is_null($logo)){ ; ?>
        <img src="<?php echo $logo;?>" />
    <?php }

if(!is_null($title)){ ?>
    <h1><?php echo $title; ?></h1>
<?php }
    if(!is_null($description)){ ?>
        <p><?php echo $description; ?></p>
   <?php }
    foreach($data->getLinks() as $link){ ?>
   <a href="<?php echo $link['link']?>"><?php echo $link['text']?></a>
<?php }
require 'social.php';

   
  ?>