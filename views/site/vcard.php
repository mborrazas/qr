<?php $data = $parametros['data'];
$logo = null;
$name = '';
$lastname = '';
$profesion = '';
$resume = '';
if($data instanceof vcardplusQRmodel){
    $design = json_decode($data->getdesgin());
    $logo = $data->getImage();
    $profesion = $data->getProfession();
    $name = $data->getName();
    $lastname = $data->getSurname();
    $resume = $data->getSummary();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body{
            background: white;
            text-align: center;
            margin:0;
            padding:0;
        }
        #top{
            background: <?php echo $design->background ?? 'white'; ?>;
            height: 113px;
        }
        img{
            height: 150px;
            width: 150px;
            border-radius:50%;
            position: absolute;
            margin-top: 0px;
            top: 47px;
            left: 27%;
            box-shadow: 0 4px 6px 0 #cdd1e0;
            border: 2px solid #CDD1E0;
        }
        #name{
            margin-top: 109px;
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
        .item svg{
            height: 30px;
        }
        .item{
            border-bottom: 1px solid #CDD1E0;
            height: 82px;
        }
        .item .icon{
            display: inline-block;
            background: #dddddd;
            border-radius: 4px;
            padding: 8px;
            width: 40px;
            margin-left: 34px;
        }
        .item .text{
            width: 68%;
            display: inline-block;
        }
        .item .text .gray{
            color: #8B8CA5;
            font-size: 13px;
            margin-top: 0px;
            margin-bottom: 0px;
            font-family: Manrope, sans-serif;
        }
        .item .text .value{
            font-size: 15px;
            margin-bottom: 3px;
            font-family: Manrope, sans-serif;
        }
        #containerInfo{
            box-shadow: 0 4px 6px 0 #cdd1e0;
            border: 1px solid #E5E7EF;
            border-radius: 12px;
            margin-right: 10px;
            margin-left: 10px;
        }
        #summary{
            color:#5A5B70;
            border-bottom: 1px solid #CDD1E0;
        }
        #addContact{
            padding: 10px;
            margin-top: 17px;
            margin-bottom: 17px;
            background: white;
            border: 2px solid #d7d7d7;
            border-radius: 5px;
        }
        h1{
            font-size: 50px;
            margin-top: 32px;
        }
        p{
            font-size: 35px;
        }
    </style>
</head>
<body>
<section id="top">

</section>
<?php
if(!is_null($logo)){ ; ?>
    <img src="<?php echo $logo;?>" />
<?php } ?>
<p id="name"> <?php echo $name; echo $lastname; ?></p>
<p><?php echo $profesion; ?></p>
<section id="containerInfo">
    <p id="summary"><?php echo $resume; ?></p>
    <div class="item" id="phone">
        <div class="icon">
            <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true" style="font-size: 24px;"><path d="M16.18,21.3a5,5,0,0,1-3.53-1.46L4.16,11.35a5,5,0,0,1,0-7.07l.71-.7a3,3,0,0,1,4.24,0L11.23,5.7a3,3,0,0,1,0,4.24l-.6.6,2.83,2.83.6-.6a3,3,0,0,1,4.24,0l2.12,2.12a3,3,0,0,1,0,4.24l-.7.71A5,5,0,0,1,16.18,21.3ZM7,4.7A1,1,0,0,0,6.28,5l-.7.71a3,3,0,0,0,0,4.24l8.48,8.48a3,3,0,0,0,4.24,0l.71-.7a1,1,0,0,0,0-1.42l-2.12-2.12a1,1,0,0,0-1.42,0l-2,2L7.8,10.54l2-2a1,1,0,0,0,0-1.42L7.7,5A1,1,0,0,0,7,4.7Z"></path></svg>
        </div>
        <div class="text">
            <p class="value">asdfasdf</p>
            <p class="gray">Teléfono</p>
        </div>
    </div>
    <div class="item" id="email">
        <div class="icon">
            <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true" style="font-size: 24px;"><path d="M19,4H5A3,3,0,0,0,2,7V17a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V7A3,3,0,0,0,19,4Zm0,2h0l-5.84,5a1.89,1.89,0,0,1-2.34,0L5,6H19Zm0,12H5a1,1,0,0,1-1-1V7.79L9.53,12.5a3.91,3.91,0,0,0,4.94,0L20,7.79V17A1,1,0,0,1,19,18Z"></path><path d="M7.29,13.29l-2,2a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l2-2a1,1,0,0,0-1.42-1.42Z"></path><path d="M16.71,13.29a1,1,0,0,0-1.42,1.42l2,2a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"></path></svg>
        </div>
        <div class="text">
            <p class="value">asdfasdf</p>
            <p class="gray">Email</p>
        </div>
    </div>
    <div class="item">
        <div class="icon">
            <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zm6.93 6h-2.95c-.32-1.25-.78-2.45-1.38-3.56 1.84.63 3.37 1.91 4.33 3.56zM12 4.04c.83 1.2 1.48 2.53 1.91 3.96h-3.82c.43-1.43 1.08-2.76 1.91-3.96zM4.26 14C4.1 13.36 4 12.69 4 12s.1-1.36.26-2h3.38c-.08.66-.14 1.32-.14 2s.06 1.34.14 2H4.26zm.82 2h2.95c.32 1.25.78 2.45 1.38 3.56-1.84-.63-3.37-1.9-4.33-3.56zm2.95-8H5.08c.96-1.66 2.49-2.93 4.33-3.56C8.81 5.55 8.35 6.75 8.03 8zM12 19.96c-.83-1.2-1.48-2.53-1.91-3.96h3.82c-.43 1.43-1.08 2.76-1.91 3.96zM14.34 14H9.66c-.09-.66-.16-1.32-.16-2s.07-1.35.16-2h4.68c.09.65.16 1.32.16 2s-.07 1.34-.16 2zm.25 5.56c.6-1.11 1.06-2.31 1.38-3.56h2.95c-.96 1.65-2.49 2.93-4.33 3.56zM16.36 14c.08-.66.14-1.32.14-2s-.06-1.34-.14-2h3.38c.16.64.26 1.31.26 2s-.1 1.36-.26 2h-3.38z"></path></svg>
        </div>
        <div class="text">
            <p class="value">asdfasdf</p>
            <p class="gray">Website</p>
        </div>
    </div>
    <div class="item">
        <div class="icon">
            <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true" style="font-size: 24px;"><path d="M12,21a1,1,0,0,1-.41-.09C11.28,20.77,4,17.4,4,11.28V11a8,8,0,0,1,16,0,.66.66,0,0,1,0,.14.66.66,0,0,1,0,.14c0,6.12-7.28,9.49-7.59,9.63A1,1,0,0,1,12,21ZM12,5a6,6,0,0,0-6,6v.1s0,.12,0,.15c0,4.14,4.58,6.88,6,7.63,1.42-.75,6-3.5,6-7.6,0,0,0-.16,0-.18s0-.09,0-.1h0A6,6,0,0,0,12,5Z"></path><path d="M12,15a4,4,0,1,1,4-4A4,4,0,0,1,12,15Zm0-6a2,2,0,1,0,2,2A2,2,0,0,0,12,9Z"></path></svg>
        </div>
        <div class="text">
            <p class="gray">asdfsadf fasdfasf, PC: asdfasdf, asdfasdf, asdfasdf, adsfasdfsdaf</p>
        </div>
    </div>
    <div class="item">
        <div class="icon">
            <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M20 7h-4V5l-2-2h-4L8 5v2H4c-1.1 0-2 .9-2 2v5c0 .75.4 1.38 1 1.73V19c0 1.11.89 2 2 2h14c1.11 0 2-.89 2-2v-3.28c.59-.35 1-.99 1-1.72V9c0-1.1-.9-2-2-2zM10 5h4v2h-4V5zM4 9h16v5h-5v-3H9v3H4V9zm9 6h-2v-2h2v2zm6 4H5v-3h4v1h6v-1h4v3z"></path></svg>
        </div>
        <div class="text">
            <p class="value">askjdfklasjdf</p>
            <p class="gray">ajdslkfjaslkdfj</p>
        </div>
    </div>
    <div id="social">
        <p>Buscame en:</p>
        <?php  require 'social.php'; ?>
    </div>
</section>
<button id="addContact">
    Agregar a contactos
</button>




</body>
</html>




