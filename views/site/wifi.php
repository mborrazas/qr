<?php $data = $parametros['data'];
if($data instanceof wifiQRmodel){ $design = json_decode($data->getdesgin());  ?>
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
                background: <?php echo $design->background ?? 'white' ?>;
                text-align: center;
                margin:0;
                padding:0;
            }
            #container{
                background: white;
                margin-top: 26vh;
                padding: 22px;
                margin-right: 18px;
                margin-left: 18px;
                border-radius: 11px;
                box-shadow: 0px 2px 20px 2px #afafaf;
            }
            #container svg{
                height: 32px;
            }
            #container p{
                font-size: 16px;
            }
            #buttons #cancel{
                border: 1px solid #CDD1E0;
                color: #5A5B70;
                background: transparent;
                padding: 14px;
                border-radius: 3px;
            }
            #buttons #access{
                background: #000;
                color: white;
                padding: 14px;
                border-radius: 3px;
                border: 0px;
                width: 37%;
            }
        </style>
    </head>
    <body>
        <div id="container">
            <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 40 40" aria-hidden="true" style="font-size: 54px;"><path d="M19.994 21.581c2.877 0 5.209 2.333 5.209 5.209s-2.333 5.209-5.209 5.209c-2.877 0-5.209-2.333-5.209-5.209s2.333-5.209 5.209-5.209zM19.994 23.070c-2.055 0-3.721 1.666-3.721 3.721s1.666 3.721 3.721 3.721c2.055 0 3.721-1.666 3.721-3.721s-1.666-3.721-3.721-3.721zM19.994 14.884c3.495 0 6.768 1.34 9.242 3.7l0.23 0.224-1.052 1.052c-2.222-2.222-5.214-3.488-8.419-3.488-3.102 0-6.003 1.185-8.201 3.276l-0.217 0.212-1.052-1.052c2.499-2.499 5.867-3.924 9.471-3.924zM19.994 7.442c5.482 0 10.619 2.123 14.477 5.853l0.255 0.251-1.052 1.052c-3.609-3.609-8.476-5.669-13.68-5.669-5.086 0-9.85 1.967-13.432 5.425l-0.248 0.244-1.052-1.052c3.886-3.886 9.129-6.104 14.733-6.104zM19.994-0c7.467 0 14.467 2.906 19.71 8.005l0.284 0.28-1.052 1.052c-4.996-4.996-11.738-7.849-18.942-7.849-7.071 0-13.696 2.748-18.662 7.574l-0.279 0.275-1.052-1.052c5.273-5.273 12.391-8.285 19.994-8.285z"></path></svg>
            <p>Conectarse a la red "<?php echo $data->getNetworkName(); ?>"?</p>
            <div id="buttons">
                <button id="access">Acceder</button>
            </div>
        </div>
    </body>
    </html>
    <?php

}else{

}
?>