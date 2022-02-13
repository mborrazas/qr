<?php $data = $parametros['data'];
$description = null;
$title = null;
$logo = null;
$design = json_decode($data->getdesgin());
if($data instanceof appsQRmodel){ ?>
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
            img{
                height: 100px;
                width: 100px;
                border-radius:13px;
                box-shadow: 0 4px 6px 0 #cdd1e0;
                border: 2px solid #CDD1E0;
                position: absolute;
                top: 97px;
                left: 35%;
            }
            .item svg{
                height: 30px;
            }
            h1{
                font-size: 50px;
                margin-top: 32px;
            }
            p{
                font-size: 35px;
            }
            #container{
                background: white;
                border-radius: 10px;
                margin-right: 16px;
                margin-left: 16px;
                padding:10px;
                padding-top: 87px;
                margin-top: 46px;
                box-shadow:-1px 3px 9px #b9b9b9;
            }
            .appstore{
                height: 51px;
                background: #000000;
                display: block;
                padding: 5px 12px 5px 12px;
                margin-bottom: 30px;
                border-radius: 6px;
            }
            #appName{
                font-size: 22px;
                margin-bottom: 7px;
                font-weight: 600;
            }
            #company{
                font-size: 12px;
            }
            #website{
                font-size: 12px;
            }
            #description{
                color: #5A5B70;
                font-size: 14px;
            }
            a .text{
                align-items: flex-start;
                flex-direction: column;
                width: 157px;
                display: inline-block;
                color: white;
                margin-top: ;
                float: right;
                margin-top: 6px;
            }
            a .text span{
                display: flex;
                justify-content: center;
            }
            a .text .subtitle{
                font-size: 11px;
                padding-bottom: 2px;
            }
            a .text .title{
                font-size: 18px;
                font-weight: 800;
                line-height: 22px;
                text-transform: none;
            }
            a .logo{
                justify-content: flex-start;
                width: 40px;
                display: inline-block;
                padding-top: 5px;
            }
        </style>
    </head>
    <body>
    <?php if(!is_null($data->getAppName())): ?>
        <p id="appName"><?php echo $data->getAppName(); ?></p>
    <?php endif; ?>
    <?php if(!is_null($data->getAppCompany())): ?>
        <p id="company"><?php echo $data->getAppCompany(); ?></p>
    <?php endif; ?>
    <div id="container">
        <?php
        if(!is_null($data->getLogo())){ ; ?>
            <img src="<?php echo $data->getLogo();?>" />
        <?php } ?>
        <?php if(!is_null($data->getDescription())): ?>
            <p id="description"><?php echo $data->getDescription(); ?></p>
        <?php endif; ?>
        <?php if(!is_null($data->getAndroid())): ?>
            <a href="<?php echo $data->getAndroid(); ?>" class="appstore">
                <div class="logo">
                    <svg width="36px" height="42px" viewBox="0 0 36 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>Group 10</title><defs><polygon id="path-1" points="0.155582609 0.58346451 22.8994957 0.58346451 22.8994957 20.9362993 0.155582609 20.9362993"></polygon></defs><g id="QRZilla---Design---QR-Generator" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="QRZilla---WEB-VIEW---APP---Desktop---Design" transform="translate(-545.000000, -518.000000)"><g id="Group-10" transform="translate(545.000000, 518.000000)"><path d="M21.9331304,12.3651652 L0.346956522,0.0281217391 C0.281217391,-0.010226087 0.19173913,-0.0084 0.124173913,0.0299478261 C0.0730434783,0.0609913043 0,0.119426087 0,0.228991304 L0.0164347826,3.06490435 L15.6258261,18.6742957 L21.9331304,12.3651652 Z" id="Fill-1" fill="#FFFFFF"></path><path d="M14.6786348,19.6304348 L0.0242869565,4.98521739 C0.0425478261,9.17973913 0.0717652174,15.5765217 0.100982609,21.8034783 L0.155765217,34.1514783 L14.6786348,19.6304348 Z" id="Fill-3" fill="#FFFFFF"></path><path d="M35.4949304,20.1163565 L23.1487565,13.0621826 L16.5748435,19.6306174 L24.0983217,27.1559217 L35.5004087,20.5144435 C35.5734522,20.4724435 35.6172783,20.3957478 35.6172783,20.3190522 C35.6172783,20.2387043 35.5716261,20.1601826 35.4949304,20.1163565" id="Fill-5" fill="#FFFFFF"></path><g id="Group-9" transform="translate(0.000000, 20.013153)"><mask id="mask-2" fill="white"><use xlink:href="#path-1"></use></mask><g id="Clip-8"></g><path d="M0.155582609,16.0431167 L0.181147826,20.7087689 C0.181147826,20.7927689 0.219495652,20.8639862 0.283408696,20.8968558 C0.367408696,20.9479862 0.453234783,20.9498123 0.522626087,20.9059862 L22.8994957,7.85676886 L15.6261913,0.58346451 L0.155582609,16.0431167 Z" id="Fill-7" fill="#FFFFFF" mask="url(#mask-2)"></path></g></g></g></g></svg>
                </div>
                <div class="text">
                    <span class="subtitle">Get it on</span>
                    <span class="title">Google Play</span>
                </div>
            </a>
        <?php endif; ?>
        <?php if(!is_null($data->getApple())): ?>
            <a href="<?php echo $data->getApple(); ?>" class="appstore">
                <div class="logo">
                    <svg width="33px" height="41px" viewBox="0 0 33 41" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>Group 6</title><defs><polygon id="path-2" points="6.58274037e-06 0.0427417333 32.6670466 0.0427417333 32.6670466 30.4780879 6.58274037e-06 30.4780879"></polygon></defs><g id="QRZilla---Design---QR-Generator-apple" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="QRZilla---WEB-VIEW---APP---Desktop---Design" transform="translate(-546.000000, -592.000000)"><g id="Group-6" transform="translate(546.000000, 592.000000)"><path d="M22.2461868,6.40540793 C24.8616412,3.26254437 24.3173144,6.58274037e-06 24.3173144,6.58274037e-06 C24.3173144,6.58274037e-06 20.6569816,0.0169900529 18.0241488,3.48708164 C15.6829313,6.57287285 16.2789985,9.21215677 16.2789985,9.21215677 C16.2789985,9.21215677 19.4533934,9.76128898 22.2461868,6.40540793" id="Fill-1" fill="#FFFFFF"></path><g id="Group-5" transform="translate(0.000000, 9.592962)"><mask id="mask-3" fill="white"><use xlink:href="#path-2"></use></mask><g id="Clip-4"></g><path d="M27.2686136,11.642386 C27.2686136,6.26619614 31.6022291,4.05051156 31.6022291,4.05051156 C31.6022291,4.05051156 29.3865445,0.0427417333 23.7541544,0.0427417333 C20.4820716,0.0427417333 17.9683864,1.90460402 16.6138559,1.90460402 C15.0360388,1.90460402 12.680866,0.15438501 9.64589354,0.15438501 C4.97734824,0.15438501 6.58274037e-06,4.3345568 6.58274037e-06,12.3031615 C6.58274037e-06,20.402302 5.88036856,30.4781077 10.5349585,30.4781077 C12.1596446,30.4781077 14.6543057,28.8414409 17.1680568,28.8414409 C19.6348071,28.8414409 21.454869,30.4191922 23.7960864,30.4191922 C28.8932998,30.4191922 32.6670532,19.7974139 32.6670532,19.7974139 C32.6670532,19.7974139 27.2686136,17.707328 27.2686136,11.642386" id="Fill-3" fill="#FFFFFF" mask="url(#mask-3)"></path></g></g></g></g></svg>
                </div>
                <div class="text">
                    <span class="subtitle">Download on the</span>
                    <span class="title">App Store</span>
                </div>
            </a>
        <?php endif; ?>
    </div>
    <?php if(!is_null($data->getWebsite())): ?>
        <p id="website"><?php echo $data->getWebsite(); ?></p>
    <?php endif; ?>
    </body>
    </html>

    <?php
}
?>