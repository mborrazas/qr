<?php $data = $parametros['data']; 

?>

<?php  foreach($data->getLinks() as $link){ ?>
   <a href="<?php echo $link['link']?>"><?php echo $link['text']?></a>
<?php } ?>

<?php foreach($data->getSocialNetworks() as $social){  ?>
   <?php echo $social['type']; ?>
   
<?php } ?>