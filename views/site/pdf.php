<?php $data = $parametros['data'];
if ($data instanceof pdfQRmodel) {  $design = json_decode($data->getdesgin());   ?>
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
            #pdfOpenButtonTitle{
                text-align: center;
                margin-top: 29vh;
                font-size: 26px;
            }
            #pdfOpenButton{
                text-align: center;
                margin: 0 auto;
                display: block;
                font-size:28px;
                padding: 40px;
                width: 100%;
                background: beige;
                border: 0px;
            }
            #linkpdfButton{
                padding: 0px;
                margin: 0px;
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
                margin-top: 14px;
                font-weight: 700;
                line-height: 22px;
                text-align: center;
                padding: 0px;
                font-size: 22px;
            }

            #top #subtitle {
                color: white;
                margin-bottom: 22px;
                text-align: center;
                padding: 0px;
                width: 100%;
                font-size: 14px;
                line-height: 21px;
            }
            #containerPdf{
                max-width: 55vw;
                overflow: hidden;
                padding: 19px;
                height: 52vh;
                background: white;
                margin: 0 auto;
                border-radius: 10px;
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
    <?php
    if($data->getOnlypdf() == 'on') :  header('Location: '.$data->getPdf() );?>
     <?php else : ?>
    <section id="top">
        <?php if (!is_null($data->getCompany())): ?>
            <p id="company"><?php echo $data->getCompany(); ?></p>
        <?php endif; ?>
        <?php if (!is_null($data->getTitle())): ?>
            <p id="title"><?php echo $data->getTitle(); ?></p>
        <?php endif; ?>
        <?php if (!is_null($data->getDescription())): ?>
            <p id="subtitle"><?php echo $data->getDescription(); ?></p>
        <?php endif; ?>
        <?php if(!is_null($data->getPdf())): ?>
            <div id="containerPdf">
                <object data="<?php echo $data->getPdf(); ?>" type="application/pdf" width="100%" height="100%">
                    <p> Abre el pdf <a href="<?php echo $data->getPdf(); ?>">aquí</a></p>
                </object>
            </div>
        <?php endif; ?>
    </section>
    <?php endif; ?>
    </body>
    </html>
<?php
} else {

}
?>