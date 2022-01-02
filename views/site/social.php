<?php
if(!is_null($socialNetworks)){
foreach($data->getSocialNetworks() as $social){
    if($social['link'] !== ''){ ?>
        <a  href="<?php echo $social['link']?>"><?php echo $social['type']?></a>

        <?php
    }
}
}
    ?>