<?php $data = $parametros['data'];
$design = json_decode($data->getdesgin());
if($data instanceof menuQRmodel){ $menu = json_decode($data->getMenu(), true); ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <style>
            *{
                font-family: Manrope, sans-serif;
            }
            body{
                background: <?php echo $design->background ?? 'white'; ?>;
                text-align: center;
                margin:0;
                padding:0;
            }
            #container{
                background: white;
                border-radius: 10px;
                margin-right: 16px;
                margin-left: 16px;
                padding:10px;
                margin-top: 46px;
                box-shadow:-1px 3px 9px #b9b9b9;
            }
            .titleSection{
                color: rgb(168, 103, 21);
                font-size: 22px;
                line-height: 22px;
                font-weight: 500;
                margin-top: 4px;
                margin-bottom: 10px;
            }
            .descriptionSection{
                margin-top: 0px;
                color: gray;
                font-weight: 200;
            }
            #description{
                color: #5A5B70;
                font-size: 14px;
            }
            .item{
                border-bottom: 1px solid lightgrey;
                margin-bottom: 20px;
            }
            .item .img{
                background: red;
                height: 53px;
                display: inline-block;
                vertical-align: middle;
                width: 79px;
            }
            .item .text{
                display: inline-block;
                width: 60%;
                vertical-align: top;
                padding-left: 18px;
            }
            .item .text .title{
                margin-top: 0px;
                font-weight: 200;
                color: #000;
                margin-bottom: 0px;
                text-align: left;
            }
            .item .text .description{
                font-weight: 100;
                color: gray;
                margin-top: 6px;
                text-align: left;
            }
            .item .text .price{
                color:rgb(168, 103, 21);
                font-size: 13px;
                text-align: left;
            }
        </style>
    </head>
    <body>
    <section id="top">
        <?php if(!is_null($data->getNameMenu())): ?>
            <p id="nameMenu"><?php echo $data->getNameMenu(); ?></p>
        <?php endif; ?>
        <?php if(!is_null($data->getDescription())): ?>
            <p id="description"><?php echo $data->getDescription(); ?></p>
        <?php endif; ?>
    </section>
    <div id="container">
        <?php foreach ($menu as $seccion){  ?>
            <p class="titleSection"><?php echo $seccion['name']; ?></p>
            <p class="descriptionSection"><?php echo $seccion['description']; ?></p>
            <?php foreach($seccion['products'] as $product){ ?>
                <div class="item">
                    <div class="img">

                    </div>
                    <div class="text">
                        <p class="title"><?php echo $product['name']; ?></p>
                        <p class="description"><?php echo $product['description']; ?></p>
                        <p class="price">€ <?php echo $product['price']; ?></p>
                    </div>
                </div>
        <?php } } ?>
    </div>
    </body>
    </html>
    <?php
}else{

}
?>