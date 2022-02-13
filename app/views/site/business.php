<?php $data = $parametros['data'];
if($data instanceof bussinesQRmodel){  $design = json_decode($data->getdesgin());
    $socialNetworks = $data->getSocialNetworks(); ?>
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
                background: white;
                text-align: center;
                margin:0;
                padding:0;
            }
            #containerInfo #hours {
                height: fit-content;
            }
            #containerInfo #hours .icon{
                display: inline-block;
                float: left;
                margin-left: 28px;
                margin-top: 17px;
            }
            #containerInfo #hours .title{
                display: inline-block;
                font-size: 24px;
                margin-left: -40px;
            }
            #containerInfo #hours .text{
                width: 100%;
                display: block;
            }

            #containerInfo #hours .text div{
                width: 100%;
                display: flex;
                justify-content: space-between;
            }

            #containerInfo #hours .text div .dayName{
                font-size: 16px;
                padding-left: 34px;
                color: gray;
            }
            #containerInfo #hours .text div .hour{
                font-size: 16px;
                color: gray;
                padding-right: 34px;
            }
            #top{
                background: <?php echo $design->background ?? 'white'; ?>;
                height: 113px;
                padding-top: 17px;
            }
            #top p{
                margin-top: 0px;
                font-size: 15px;
                font-family: Manrope, sans-serif;
            }
            img{
                height: 180px;
                width: 180px;
                border-radius: 12%;
                position: absolute;
                margin-top: 0px;
                top: 72px;
                left: 22%;
                box-shadow: 0 4px 6px 0 #cdd1e0;
                border: 2px solid #CDD1E0;
            }
            #name{
                font-size: 22px;
                margin-top: 154px;
                margin-bottom: 10px;
            }
            #subtitle{
                font-size: 13px;
                color: rgb(90, 91, 112);
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
                height: fit-content;
                padding-bottom: 11px;
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
            a{
                background: transparent;
                margin-bottom: 12px;
            }
            #buttonClick{
                background: transparent;
                border: 1px solid gray;
                width: 100%;
                height: 47px;
                color: rgb(0, 0, 0);
                border-radius: 5px;
                font-size: 15px;
            }
            h1{
                font-size: 50px;
                margin-top: 32px;
            }
            p{
                font-size: 35px;
            }
            #facilities .text{
                width: 100%;
            }
            #facilities .text .title{
                margin-top: 5px;
                font-size: 20px;
                text-align: left;
                margin-left: 0px;
                padding-left: 31px;
                margin-bottom: 10px;
            }
            #aboutCompany .title{
                margin-top: 9px;
                font-size: 16px;
                text-align: left;
                padding-left: 17px;
                font-weight: 500;
            }
            #aboutCompany .text{
                width: 100%;
            }
            #aboutCompany .value{
                height: 36px;
                word-wrap: break-word;
                padding-left: 10px;
                padding-right: 10px;
            }
            #aboutCompany{
                padding-top: 11px;
                padding-bottom: 18px;
            }
            #contacttitle{
                text-align: left;
                font-size: 24px;
                padding-left: 25px;
                font-weight: 500;
            }
            #social p{
                font-size: 13px;
                text-align: center;
                font-weight: 300;
            }
            #ubication .icon{
                margin-top: 11px;
                margin-left: 8px;
            }
        </style>
    </head>
    <body>
    <section id="top">
        <?php if(!is_null($data->getCompany())): ?>
            <p><?php echo $data->getCompany(); ?></p>
        <?php endif; ?>
    </section>
    <?php
    if(!is_null($data->getImage())){ ; ?>
        <img src="<?php echo $data->getImage();?>" />
    <?php } ?>
    <?php if(!is_null($data->getTitle())): ?>
        <p id="name"> <?php echo $data->getTitle(); ?></p>
    <?php endif; ?>
    <?php if(!is_null($data->getSubtitle())): ?>
        <p id="subtitle"><?php echo $data->getSubtitle(); ?></p>
    <?php endif; ?>
    <?php if(!is_null($data->getButton())): ?>
        <a href="<?php echo $data->getButton()->url; ?>"><button id="buttonClick"><?php echo $data->getButton()->text; ?></button></a>
    <?php endif; ?>
    <section id="containerInfo">
        <?php if(!empty($data->getHours())): ?>
            <div class="item" id="hours">
                <div class="icon" >
                    <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true" style="font-size: 24px;"><path d="M21.26,8.22a10,10,0,1,0-13.14,13A10.12,10.12,0,0,0,12,22,10,10,0,0,0,21.26,8.22ZM19.37,15.1A8,8,0,1,1,4.63,8.9a8,8,0,1,1,14.74,6.2Z"></path><path d="M13,11.5V8a1,1,0,0,0-2,0v4.5l4.4,3.3a1,1,0,0,0,.6.2,1,1,0,0,0,.8-.4,1,1,0,0,0-.2-1.4Z"></path></svg>
                </div>
                <p class="title">Horarios</p>
                <div class="text">
                   <?php foreach ($data->getHours() as $key => $value){ ?>
                           <div>
                               <p class="dayName"><?php echo $key; ?></p>
                               <p class="hour"><?php echo $value->opening; ?><?php echo $value->closes; ?></p>
                           </div>
                   <?php } ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if(!is_null($data->getAddress()) || !is_null($data->getAddressNumber()) || !is_null($data->getCity()) || !is_null($data->getCity()) || !is_null($data->getCountry())): ?>
            <div class="item" id="ubication">
                <div class="icon">
                    <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true" style="font-size: 24px;"><path d="M12,21a1,1,0,0,1-.41-.09C11.28,20.77,4,17.4,4,11.28V11a8,8,0,0,1,16,0,.66.66,0,0,1,0,.14.66.66,0,0,1,0,.14c0,6.12-7.28,9.49-7.59,9.63A1,1,0,0,1,12,21ZM12,5a6,6,0,0,0-6,6v.1s0,.12,0,.15c0,4.14,4.58,6.88,6,7.63,1.42-.75,6-3.5,6-7.6,0,0,0-.16,0-.18s0-.09,0-.1h0A6,6,0,0,0,12,5Z"></path><path d="M12,15a4,4,0,1,1,4-4A4,4,0,0,1,12,15Zm0-6a2,2,0,1,0,2,2A2,2,0,0,0,12,9Z"></path></svg>            </div>
                <div class="text">
                    <p class="value"><?php echo $data->getAddress() ?> <?php echo $data->getAddressNumber() ?> <?php echo $data->getCity() ?> <?php echo $data->getCountry() ?></p>
                </div>
            </div>
        <?php endif; ?>
        <?php if(!is_null($data->getFacilities())): ?>
            <div class="item" id="facilities">
                <div class="text">
                    <p class="title">Facilidades</p>
                    <div>
                        <?php foreach($data->getFacilities() as $facility){  ?>
                            <?php if($facility === 'wifi'): ?>
                                <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 32 32" aria-hidden="true" style="font-size: 32px;"><path d="M16,20.55a2.73,2.73,0,1,0,2.73,2.72A2.72,2.72,0,0,0,16,20.55Z"></path><path d="M29.43,10.6a19.1,19.1,0,0,0-27,0,1,1,0,0,0,0,1.41,1,1,0,0,0,1.42,0A17.09,17.09,0,0,1,28,12a1,1,0,0,0,1.42,0A1,1,0,0,0,29.43,10.6Z"></path><path d="M15.92,9.89a14.12,14.12,0,0,0-10,4.17,1,1,0,0,0,0,1.41,1,1,0,0,0,1.42,0,12.19,12.19,0,0,1,17.26,0,1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.41A14.12,14.12,0,0,0,15.92,9.89Z"></path><path d="M15.92,14.79a9.26,9.26,0,0,0-6.59,2.73,1,1,0,0,0,0,1.41,1,1,0,0,0,1.42,0,7.32,7.32,0,0,1,10.34,0,1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41A9.26,9.26,0,0,0,15.92,14.79Z"></path></svg>
                            <?php elseif($facility == 'seat'): ?>
                                <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 32 32" aria-hidden="true" style="font-size: 32px;"><path d="M26.93,15.8A3.5,3.5,0,0,0,24,13V10a5,5,0,0,0-5-5H13a5,5,0,0,0-5,5v3a3.51,3.51,0,0,0-2.93,2.78A3.82,3.82,0,0,0,5,16.5V19a4.5,4.5,0,0,0,.16,1.25,5,5,0,0,0,3.58,3.57A3.63,3.63,0,0,0,8,26a1,1,0,0,0,2,0,2.3,2.3,0,0,1,2.5-2h7A2.3,2.3,0,0,1,22,26a1,1,0,0,0,2,0,3.63,3.63,0,0,0-.74-2.18,4.94,4.94,0,0,0,3.57-3.55A4.38,4.38,0,0,0,27,19V16.5A4.26,4.26,0,0,0,26.93,15.8ZM13,7h6a3,3,0,0,1,3,3v3.35a3.51,3.51,0,0,0-1.93,2.47,3.82,3.82,0,0,0-.07.68V17H12v-.5a4.26,4.26,0,0,0-.07-.7A3.5,3.5,0,0,0,10,13.35V10A3,3,0,0,1,13,7ZM25,19a2.61,2.61,0,0,1-.1.75A3,3,0,0,1,22,22H10a3,3,0,0,1-2.91-2.27A2.75,2.75,0,0,1,7,19V16.5a1.32,1.32,0,0,1,0-.3,1.5,1.5,0,0,1,2.94,0,1.66,1.66,0,0,1,0,.32V18a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V16.5a1.32,1.32,0,0,1,0-.3,1.5,1.5,0,0,1,2.94,0,1.66,1.66,0,0,1,0,.32Z"></path></svg>
                            <?php elseif($facility == 'accessible'): ?>
                                <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 32 32" aria-hidden="true" style="font-size: 32px;"><path d="M18.13,23a1,1,0,0,0-1.31.53A4.08,4.08,0,1,1,11.88,18a1,1,0,0,0-.6-1.92,6.11,6.11,0,1,0,7.38,8.24A1,1,0,0,0,18.13,23Z"></path><circle cx="15" cy="7" r="2"></circle><path d="M22.27,20,16,18.25V14l1.2,1.6a1,1,0,0,0,.8.4h3a1,1,0,0,0,0-2H18.5l-2.7-3.6-.05-.05-.15-.13a.54.54,0,0,0-.16-.1l-.17-.07-.2,0H15l-.12,0-.19,0-.19.09-.1,0-.05.05-.13.15a.91.91,0,0,0-.11.16l-.06.17c0,.07,0,.13,0,.2S14,11,14,11v8a1,1,0,0,0,.73,1L21,21.75V27a1,1,0,0,0,2,0V21A1,1,0,0,0,22.27,20Z"></path></svg>
                            <?php elseif($facility == 'toilet'): ?>
                                <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 32 32" aria-hidden="true" style="font-size: 32px;"><circle cx="10" cy="6" r="2"></circle><path d="M13,9H7a1,1,0,0,0-1,1v9a1,1,0,0,0,1,1H8v7a1,1,0,0,0,1,1h2a1,1,0,0,0,1-1V20h1a1,1,0,0,0,1-1V10A1,1,0,0,0,13,9Zm-1,9H8V11h4Z"></path><circle cx="22" cy="6" r="2"></circle><path d="M24,9.8A1,1,0,0,0,23,9H21a1,1,0,0,0-1,.8l-2,10a1,1,0,0,0,.21.83A1,1,0,0,0,19,21h1v6a1,1,0,0,0,1,1h2a1,1,0,0,0,1-1V21h1a1,1,0,0,0,.77-.37A1,1,0,0,0,26,19.8ZM21.82,11h.36l1.6,8H20.22Z"></path></svg>
                            <?php elseif($facility == 'child'): ?>
                                <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 32 32" aria-hidden="true" style="font-size: 32px;"><path d="M25,11a5,5,0,0,0-5-5H17a1,1,0,0,0-1,1v5H10.62l-.73-1.45A1,1,0,0,0,9,10H7a1,1,0,0,0,0,2H8.38L9,13.24V14a7,7,0,0,0,7,7h2a7,7,0,0,0,7-7V13a1,1,0,0,0-.15-.5A1,1,0,0,0,25,12Zm-7,8H16a5,5,0,0,1-5-5H23A5,5,0,0,1,18,19Zm0-7V8h2a3,3,0,0,1,3,3v1Z"></path><circle cx="12.5" cy="24.5" r="2.5"></circle><circle cx="21.5" cy="24.5" r="2.5"></circle></svg>
                            <?php elseif($facility == 'pet'): ?>
                                <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 32 32" aria-hidden="true" style="font-size: 32px;"><path d="M10,13V11a2,2,0,0,0-4,0v2a2,2,0,0,0,4,0Z"></path><path d="M24,9a2,2,0,0,0-2,2v2a2,2,0,0,0,4,0V11A2,2,0,0,0,24,9Z"></path><path d="M13,11a2,2,0,0,0,2-2V7a2,2,0,0,0-4,0V9A2,2,0,0,0,13,11Z"></path><path d="M19,11a2,2,0,0,0,2-2V7a2,2,0,0,0-4,0V9A2,2,0,0,0,19,11Z"></path><path d="M20,13.71A5,5,0,0,0,16.19,12h-.38a5,5,0,0,0-3.76,1.71L7.86,18.5A5,5,0,0,0,7,23.65l.09.21A5,5,0,0,0,11.71,27h8.58a5,5,0,0,0,4.64-3.14l.09-.21a5,5,0,0,0-.88-5.15Zm3.21,9.19-.08.21A3,3,0,0,1,20.29,25H11.71a3,3,0,0,1-2.79-1.89l-.08-.21a3,3,0,0,1,.53-3.09L13.56,15a3,3,0,0,1,2.25-1h.38a3,3,0,0,1,2.25,1l4.19,4.79A3,3,0,0,1,23.16,22.9Z"></path></svg>
                            <?php elseif($facility == 'parking'): ?>
                                <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 32 32" aria-hidden="true" style="font-size: 32px;"><path d="M17.5,4H9A1,1,0,0,0,8,5V27a1,1,0,0,0,1,1h5a1,1,0,0,0,1-1V19h2.5a7.5,7.5,0,0,0,0-15Zm0,13H14a1,1,0,0,0-1,1v8H10V6h7.5a5.5,5.5,0,0,1,0,11Z"></path><path d="M17.5,9H13v5h4.5a2.5,2.5,0,0,0,0-5Z"></path></svg>
                            <?php elseif($facility == 'train'): ?>
                                <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 32 32" aria-hidden="true" style="font-size: 32px;"><path d="M21,4H11A5,5,0,0,0,6,9V24a1,1,0,0,0,1,1H8v2a1,1,0,0,0,1,1h2a1,1,0,0,0,1-1V25h8v2a1,1,0,0,0,1,1h2a1,1,0,0,0,1-1V25h1a1,1,0,0,0,1-1V9A5,5,0,0,0,21,4ZM8,14V10h7v4Zm9-4h7v4H17ZM11,6H21a3,3,0,0,1,2.82,2H8.18A3,3,0,0,1,11,6ZM24,23H8V16H24Z"></path><circle cx="11.5" cy="19.5" r="1.5"></circle><circle cx="20.5" cy="19.5" r="1.5"></circle></svg>
                            <?php elseif($facility == 'taxi'): ?>
                                <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 32 32" aria-hidden="true" style="font-size: 32px;"><path d="M27,14.83s0-.07,0-.1L25.38,9.18A3,3,0,0,0,22.49,7H19V6a1,1,0,0,0-1-1H14a1,1,0,0,0-1,1V7H9.51A3,3,0,0,0,6.62,9.18L5,14.73s0,.07,0,.1A1,1,0,0,0,5,15V26a1,1,0,0,0,1,1H8a1,1,0,0,0,1-1V24H23v2a1,1,0,0,0,1,1h2a1,1,0,0,0,1-1V15A1,1,0,0,0,27,14.83ZM8,22H7V16H25v6H8ZM8.55,9.73a1,1,0,0,1,1-.73h13a1,1,0,0,1,1,.73L24.67,14H7.33Z"></path><path d="M12,18H10a1,1,0,0,0,0,2h2a1,1,0,0,0,0-2Z"></path><path d="M22,18H20a1,1,0,0,0,0,2h2a1,1,0,0,0,0-2Z"></path></svg>
                            <?php elseif($facility == 'bed'): ?>
                                <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 32 32" aria-hidden="true" style="font-size: 32px;"><path d="M25,11H15a1,1,0,0,0-1,1v4a1,1,0,0,0,1,1H27a1,1,0,0,0,1-1V14A3,3,0,0,0,25,11Zm1,4H16V13h9a1,1,0,0,1,1,1Z"></path><path d="M27,18H6V11a1,1,0,0,0-2,0V22a1,1,0,0,0,2,0V20H26v2a1,1,0,0,0,2,0V19A1,1,0,0,0,27,18Z"></path><circle cx="10.5" cy="14.5" r="2.5"></circle></svg>
                            <?php elseif($facility == 'cafe'): ?>
                                <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 32 32" aria-hidden="true" style="font-size: 32px;"><path d="M25,11H6a1,1,0,0,0-1,1V23a5,5,0,0,0,5,5h8a5,5,0,0,0,5-5V21h2a3,3,0,0,0,3-3V14A3,3,0,0,0,25,11ZM21,23a3,3,0,0,1-3,3H10a3,3,0,0,1-3-3V13H21V23Zm5-5a1,1,0,0,1-1,1H23V13h2a1,1,0,0,1,1,1Z"></path><path d="M10.36,8.23a1,1,0,0,0-.13,1.41A1,1,0,0,0,11,10a1,1,0,0,0,.64-.23c2.25-1.88,1.12-3.29.64-3.89A4.07,4.07,0,0,1,12,5.49s.05-.23.64-.72a1,1,0,1,0-1.28-1.54c-2.25,1.88-1.12,3.29-.64,3.89a4.07,4.07,0,0,1,.28.39S11,7.74,10.36,8.23Z"></path><path d="M15.36,8.23a1,1,0,0,0-.13,1.41A1,1,0,0,0,16,10a1,1,0,0,0,.64-.23c2.25-1.88,1.12-3.29.64-3.89A4.07,4.07,0,0,1,17,5.49s.05-.23.64-.72a1,1,0,0,0-1.28-1.54c-2.25,1.88-1.12,3.29-.64,3.89a4.07,4.07,0,0,1,.28.39S16,7.74,15.36,8.23Z"></path></svg>
                            <?php elseif($facility == 'bar'): ?>
                                <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 32 32" aria-hidden="true" style="font-size: 32px;"><path d="M25.83,9.55a1,1,0,0,0,.05-1A1,1,0,0,0,25,8H12.86A4,4,0,1,0,9,13a4.81,4.81,0,0,0,1.28-.28L16,21.3V26H13a1,1,0,0,0,0,2h8a1,1,0,0,0,0-2H18V21.3ZM13.54,14h6.92L17,19.2Zm8.26-2H12.2l-1.33-2H23.13Z"></path></svg>
                            <?php elseif($facility == 'restaurant'): ?>
                                <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 32 32" aria-hidden="true" style="font-size: 32px;"><path d="M25,4a6,6,0,0,0-6,6v6a1,1,0,0,0,1,1h.88L20,24.89A.41.41,0,0,0,20,25a3,3,0,0,0,6,0V5A1,1,0,0,0,25,4Zm-4,6a4,4,0,0,1,3-3.87V15H21Zm3,15a1,1,0,0,1-2,.05l.9-8H24Z"></path><path d="M15,4a1,1,0,0,0-1,1v7a1,1,0,0,1-1,1H12V5a1,1,0,0,0-2,0v8H9a1,1,0,0,1-1-1V5A1,1,0,0,0,6,5v7a3,3,0,0,0,2,2.82V25a3,3,0,0,0,6,0V14.82A3,3,0,0,0,16,12V5A1,1,0,0,0,15,4ZM12,25a1,1,0,0,1-2,0V15h2Z"></path></svg>
                            <?php endif; ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <p id="contacttitle">Contacto</p>
        <?php if(!is_null($data->getNamePerson())): ?>
            <div class="item" id="contactName">
                <div class="icon">
                    <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true" style="font-size: 24px;"><path d="M14,12H10a6,6,0,0,0-6,6,3,3,0,0,0,3,3H17a3,3,0,0,0,3-3A6,6,0,0,0,14,12Zm3,7H7a1,1,0,0,1-1-1,4,4,0,0,1,4-4h4a4,4,0,0,1,4,4A1,1,0,0,1,17,19Z"></path><path d="M12,11A4,4,0,1,0,8,7,4,4,0,0,0,12,11Zm0-6a2,2,0,1,1-2,2A2,2,0,0,1,12,5Z"></path></svg>
                </div>
                <div class="text">
                    <p class="value"><?php echo $data->getNamePerson() ?></p>
                    <p class="gray">Nombre</p>
                </div>
            </div>
        <?php endif; ?>
        <?php if(!is_null($data->getTelefono())): ?>
            <div class="item" id="phone">
                <div class="icon">
                    <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true" style="font-size: 24px;"><path d="M16.18,21.3a5,5,0,0,1-3.53-1.46L4.16,11.35a5,5,0,0,1,0-7.07l.71-.7a3,3,0,0,1,4.24,0L11.23,5.7a3,3,0,0,1,0,4.24l-.6.6,2.83,2.83.6-.6a3,3,0,0,1,4.24,0l2.12,2.12a3,3,0,0,1,0,4.24l-.7.71A5,5,0,0,1,16.18,21.3ZM7,4.7A1,1,0,0,0,6.28,5l-.7.71a3,3,0,0,0,0,4.24l8.48,8.48a3,3,0,0,0,4.24,0l.71-.7a1,1,0,0,0,0-1.42l-2.12-2.12a1,1,0,0,0-1.42,0l-2,2L7.8,10.54l2-2a1,1,0,0,0,0-1.42L7.7,5A1,1,0,0,0,7,4.7Z"></path></svg>
                </div>
                <div class="text">
                    <p class="value"><?php echo $data->getTelefono() ?></p>
                    <p class="gray">Teléfono</p>
                </div>
            </div>
        <?php endif; ?>
        <?php if(!is_null($data->getEmail())): ?>
            <div class="item" id="email">
                <div class="icon">
                    <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true" style="font-size: 24px;"><path d="M19,4H5A3,3,0,0,0,2,7V17a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V7A3,3,0,0,0,19,4Zm0,2h0l-5.84,5a1.89,1.89,0,0,1-2.34,0L5,6H19Zm0,12H5a1,1,0,0,1-1-1V7.79L9.53,12.5a3.91,3.91,0,0,0,4.94,0L20,7.79V17A1,1,0,0,1,19,18Z"></path><path d="M7.29,13.29l-2,2a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l2-2a1,1,0,0,0-1.42-1.42Z"></path><path d="M16.71,13.29a1,1,0,0,0-1.42,1.42l2,2a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"></path></svg>
                </div>
                <div class="text">
                    <p class="value"><?php echo $data->getEmail() ?></p>
                    <p class="gray">Email</p>
                </div>
            </div>
        <?php endif; ?>
        <?php if(!is_null($data->getWebsite())): ?>
            <div class="item">
                <div class="icon">
                    <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zm6.93 6h-2.95c-.32-1.25-.78-2.45-1.38-3.56 1.84.63 3.37 1.91 4.33 3.56zM12 4.04c.83 1.2 1.48 2.53 1.91 3.96h-3.82c.43-1.43 1.08-2.76 1.91-3.96zM4.26 14C4.1 13.36 4 12.69 4 12s.1-1.36.26-2h3.38c-.08.66-.14 1.32-.14 2s.06 1.34.14 2H4.26zm.82 2h2.95c.32 1.25.78 2.45 1.38 3.56-1.84-.63-3.37-1.9-4.33-3.56zm2.95-8H5.08c.96-1.66 2.49-2.93 4.33-3.56C8.81 5.55 8.35 6.75 8.03 8zM12 19.96c-.83-1.2-1.48-2.53-1.91-3.96h3.82c-.43 1.43-1.08 2.76-1.91 3.96zM14.34 14H9.66c-.09-.66-.16-1.32-.16-2s.07-1.35.16-2h4.68c.09.65.16 1.32.16 2s-.07 1.34-.16 2zm.25 5.56c.6-1.11 1.06-2.31 1.38-3.56h2.95c-.96 1.65-2.49 2.93-4.33 3.56zM16.36 14c.08-.66.14-1.32.14-2s-.06-1.34-.14-2h3.38c.16.64.26 1.31.26 2s-.1 1.36-.26 2h-3.38z"></path></svg>
                </div>
                <div class="text">
                    <p class="value"><?php echo $data->getWebsite() ?></p>
                    <p class="gray">Website</p>
                </div>
            </div>
        <?php endif; ?>
        <?php if(!is_null($data->getAboutCompany())): ?>
            <div class="item" id="aboutCompany">
                <div class="text">
                    <p class="title">Sobre la empresa</p>
                    <p class="value"><?php echo $data->getAboutCompany() ?></p>
                </div>
            </div>
        <?php endif; ?>
        <?php if(!is_null($data->getSocialNetworks())): ?>
            <div id="social">
                <p>Buscame en:</p>
                <?php  require 'social.php'; ?>
            </div>
        <?php endif; ?>
    </section>

    </body>
    </html>
<?php

}else{

}
?>