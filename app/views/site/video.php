<?php $data = $parametros['data'];
if ($data instanceof videoQRmodel) {  $design = json_decode($data->getdesgin()); ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
                height: 100vh;
                padding-top: 17px;
                color: white;
            }

            #top #title {
                font-family: Manrope, sans-serif;
                text-align: left;
                padding-left: 30px;
                margin-top: 14px;
                font-size: 20px;
                font-weight: 700;
                line-height: 22px;
            }

            #top #subtitle {
                color: white;
                font-size: 12px;
                max-width: 192px;
                line-height: 19px;
                margin-bottom: 22px;
                text-align: left;
                padding-left: 33px;
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

            a {
                background: transparent;
                margin-bottom: 12px;
            }

            #buttonClick {
                background: transparent;
                width: 100%;
                height: 47px;
                border-radius: 5px;
                font-size: 15px;
                color: white;
                border: 1px solid white;
            }

            h1 {
                font-size: 50px;
                margin-top: 32px;
            }

            p {
                font-size: 35px;
            }

            #company{
                font-size: 15px;
                margin-bottom: 40px;
            }
            video{
                width: 100%;
            }
        </style>
    </head>
    <body>
    <section id="top">
        <?php if (!is_null($data->getCompany())): ?>
            <p id="company"><?php echo $data->getCompany(); ?></p>
        <?php endif; ?>
        <?php if(!is_null($data->getVideo())): ?>
            <video controls="true" src="<?php echo $data->getVideo(); ?>"></video>
        <?php endif; ?>
        <?php if (!is_null($data->getVideoTitle())): ?>
            <p id="title"><?php echo $data->getVideoTitle(); ?></p>
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
    </body>
    </html>
    <?php

} else {

}
?>