<?php $data = $parametros['data'];
if ($data instanceof imagesQRmodel) { ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.9/dist/css/splide.min.css">
        <style>
            * {
                font-family: Manrope, sans-serif;
            }

            body {
                background: white;
                text-align: center;
                margin: 0;
                padding: 0;
            }

            #top {
                background: <?php echo $design->background ?? 'white'; ?>;
                height: 237px;
                padding-top: 17px;
                background: rgb(34, 40, 71);
                color: white;
            }

            #top #title {
                margin-top: 0px;
                font-size: 22px;
                font-family: Manrope, sans-serif;
                font-weight: 200;
            }

            #top #subtitle {
                font-size: 14px;
                color: white;
            }

            img {
                height: 180px;
                width: 180px;
                border-radius: 12%;
                position: absolute;
                margin-top: 0px;
                top: 198px;
                left: 22%;
                box-shadow: 0 4px 6px 0 #cdd1e0;
                border: 2px solid #CDD1E0;
            }

            #name {
                font-size: 22px;
                margin-top: 154px;
                margin-bottom: 10px;
            }

            #subtitle {
                font-size: 13px;
                color: rgb(90, 91, 112);
            }

            a {
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
                color: <?php echo $design->colorText ?? 'black'; ?>
            }

            .item svg {
                height: 30px;
            }

            .item {
                border-bottom: 1px solid #CDD1E0;
                height: 82px;
            }

            .item .icon {
                display: inline-block;
                background: #dddddd;
                border-radius: 4px;
                padding: 8px;
                width: 40px;
                margin-left: 34px;
            }

            .item .text {
                width: 68%;
                display: inline-block;
            }

            .item .text .gray {
                color: #8B8CA5;
                font-size: 13px;
                margin-top: 0px;
                margin-bottom: 0px;
                font-family: Manrope, sans-serif;
            }

            .item .text .value {
                font-size: 15px;
                margin-bottom: 3px;
                font-family: Manrope, sans-serif;
            }

            #containerInfo {
                box-shadow: 0 4px 6px 0 #cdd1e0;
                border: 1px solid #E5E7EF;
                border-radius: 12px;
                margin-right: 10px;
                margin-left: 10px;
            }

            a {
                background: transparent;
                margin-bottom: 12px;
            }

            #gallery{
                margin-top: -51px;
            }

            #buttonClick {
                background: transparent;
                border: 1px solid gray;
                width: 100%;
                height: 47px;
                border-radius: 5px;
                font-size: 15px;
                color: white;
            }

            h1 {
                font-size: 50px;
                margin-top: 32px;
            }

            p {
                font-size: 35px;
            }

            #facilities .title {
                margin-top: 5px;
                font-size: 20px;
            }

            #aboutCompany .title {
                margin-top: 9px;
                font-size: 16px;
            }

            #social p {
                font-size: 13px;
                text-align: center;
                font-weight: 300;
            }
        </style>
    </head>
    <body>
    <section id="top">
        <?php if (!is_null($data->getTitle())): ?>
            <p id="title"><?php echo $data->getTitle(); ?></p>
        <?php endif; ?>
        <?php if (!is_null($data->getDescription())): ?>
            <p id="subtitle"><?php echo $data->getDescription(); ?></p>
        <?php endif; ?>
        <?php if (!is_null($data->getButton())): ?>
            <a href="<?php echo $data->getButton()->url; ?>">
                <button id="buttonClick"><?php echo $data->getButton()->text; ?></button>
            </a>
        <?php endif; ?>
    </section>
    <section id="gallery">
        <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php foreach(json_decode($data->getImages()) as $image){
                    ?>
                    <li class="splide__slide">
                        <img src="<?php echo $image; ?>" alt="">
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.9/dist/js/splide.min.js"></script>
    <script>
        var splide = new Splide('.splide', {
            perPage: 3,
            cover: true,
            height: '10rem',
            lazyLoad: 'nearby',
            breakpoints: {
                height: '6rem',
            },
        });

        splide.mount();
    </script>
    </body>
    </html>
    <?php

} else {

}
?>