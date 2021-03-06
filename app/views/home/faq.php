<?php $translate = Translate::getInstance(); ?>
<?php require $_SERVER["DOCUMENT_ROOT"] . "/../views/components/head.php"; ?>
<body id="home" class="container-fluid">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/"><img src="Logo.jpeg" alt="" style="width: 29%;"/></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <div class="dropdown">
                    <button style="
    background: transparent;
    color: rgba(0,0,0,.5);
    border: 0px;
    margin-top: 22px;
    margin-right: 34px;
    /* margin-top: 15px; */
" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                        <svg style="font-size: 24px;
    height: 20px;
    margin-right: 10px;" class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"
                             style="font-size: 24px;">
                            <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zm6.93 6h-2.95c-.32-1.25-.78-2.45-1.38-3.56 1.84.63 3.37 1.91 4.33 3.56zM12 4.04c.83 1.2 1.48 2.53 1.91 3.96h-3.82c.43-1.43 1.08-2.76 1.91-3.96zM4.26 14C4.1 13.36 4 12.69 4 12s.1-1.36.26-2h3.38c-.08.66-.14 1.32-.14 2 0 .68.06 1.34.14 2H4.26zm.82 2h2.95c.32 1.25.78 2.45 1.38 3.56-1.84-.63-3.37-1.9-4.33-3.56zm2.95-8H5.08c.96-1.66 2.49-2.93 4.33-3.56C8.81 5.55 8.35 6.75 8.03 8zM12 19.96c-.83-1.2-1.48-2.53-1.91-3.96h3.82c-.43 1.43-1.08 2.76-1.91 3.96zM14.34 14H9.66c-.09-.66-.16-1.32-.16-2 0-.68.07-1.35.16-2h4.68c.09.65.16 1.32.16 2 0 .68-.07 1.34-.16 2zm.25 5.56c.6-1.11 1.06-2.31 1.38-3.56h2.95c-.96 1.65-2.49 2.93-4.33 3.56zM16.36 14c.08-.66.14-1.32.14-2 0-.68-.06-1.34-.14-2h3.38c.16.64.26 1.31.26 2s-.1 1.36-.26 2h-3.38z"></path>
                        </svg>

                        <?php $translate->echoTranslate('Idiomas'); ?>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"
                         style="max-height: 113px;overflow-y:scroll;">
                        <a class="dropdown-item" href="/BG/"> <?php $translate->echoTranslate('Bulgarian'); ?></a>
                        <a class="dropdown-item" href="/CS/"> <?php $translate->echoTranslate('Czech'); ?></a>
                        <a class="dropdown-item" href="/DA/"> <?php $translate->echoTranslate('Danish'); ?></a>
                        <a class="dropdown-item" href="/DE/"> <?php $translate->echoTranslate('German'); ?></a>
                        <a class="dropdown-item" href="/EL/"> <?php $translate->echoTranslate('Greek'); ?></a>
                        <a class="dropdown-item" href="/EN-GB/"> <?php $translate->echoTranslate('English (British)'); ?></a>
                        <a class="dropdown-item" href="/EN-US/"> <?php $translate->echoTranslate('English (American)'); ?></a>
                        <a class="dropdown-item" href="/ET/"> <?php $translate->echoTranslate('Estonian'); ?></a>
                        <a class="dropdown-item" href="/FI/"> <?php $translate->echoTranslate('Finnish'); ?></a>
                        <a class="dropdown-item" href="/FR/"> <?php $translate->echoTranslate('French'); ?></a>
                        <a class="dropdown-item" href="/HU/"> <?php $translate->echoTranslate('Hungarian'); ?></a>
                        <a class="dropdown-item" href="/IT/"> <?php $translate->echoTranslate('Italian'); ?></a>
                        <a class="dropdown-item" href="/JA/"> <?php $translate->echoTranslate('Japanese'); ?></a>
                        <a class="dropdown-item" href="/LT/"> <?php $translate->echoTranslate('Lithuanian'); ?></a>
                        <a class="dropdown-item" href="/LV/"> <?php $translate->echoTranslate('Latvian'); ?></a>
                        <a class="dropdown-item" href="/NL/"> <?php $translate->echoTranslate('Dutch'); ?></a>
                        <a class="dropdown-item" href="/PL/"> <?php $translate->echoTranslate('Polish'); ?></a>
                        <a class="dropdown-item" href="/PT-BR/"> <?php $translate->echoTranslate('Portuguese (Brazilian)'); ?></a>
                        <a class="dropdown-item" href="/PT-PT/"> <?php $translate->echoTranslate('Portuguese (European)'); ?></a>
                        <a class="dropdown-item" href="/RO/"> <?php $translate->echoTranslate('Romanian'); ?></a>
                        <a class="dropdown-item" href="/RU/"> <?php $translate->echoTranslate('Russian'); ?></a>
                        <a class="dropdown-item" href="/SK/"> <?php $translate->echoTranslate('Slovak'); ?></a>
                        <a class="dropdown-item" href="/SL/"> <?php $translate->echoTranslate('Slovenian'); ?></a>
                        <a class="dropdown-item" href="/SV/"> <?php $translate->echoTranslate('Swedish'); ?></a>
                        <a class="dropdown-item" href="/ZH/"> <?php $translate->echoTranslate('Chinese'); ?></a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#step4"><?php $translate->echoTranslate('Precios'); ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/faq"><?php $translate->echoTranslate('FAQ'); ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=""><?php $translate->echoTranslate('Iniciar Sesi??n'); ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="generate" href=""><?php $translate->echoTranslate('Registrate'); ?></a>
            </li>
        </ul>
    </div>
</nav>
<section id="headerContact" class="row" style="
        height: 159px;
">
    <h2 style="
    text-align: center;
    width: 100%;
    display: block;
    margin-top: 63px;
"><?php $translate->echoTranslate('Preguntas Frecuentes'); ?></h2>
    <p style="
    display: block;
    text-align: center;
    width: 33%;
    margin: 0 auto;
    margin-top: 15px;
"><?php $translate->echoTranslate('Si tienes alguna duda que no puedes resolver con nuestras preguntas frecuentes, no dudes en ponerte en contacto con nuestro equipo.'); ?></p>
</section>
<section id="containerfaq" style="background: rgb(229, 231, 239); margin-top:40px">
    <div class="item">
        <h2><?php $translate->echoTranslate('??Qu?? es un c??digo QR?'); ?></h2>
        <p><?php $translate->echoTranslate('Para entenderlo de forma sencilla podemos decir que el c??digo QR es la evoluci??n natural del c??digo de barras. Su nombre deriva del ingl??s "Quick Response Code" o "C??digo de respuesta r??pida", y esto se debe a que tiene una alta velocidad de lectura. Dicho c??digo permite un f??cil acceso a distinta informaci??n a trav??s del m??vil.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('??Qu?? utilidad tienen los c??digos QR?'); ?></h2>
        <p><?php $translate->echoTranslate('Tienen tanta utilidad como tipos de contenidos puedan ofrecer. De hecho, en los ??ltimos a??os este tipo de c??digo ha ido aumentando su aprobaci??n entre la audiencia. Es l??gico, con tan solo un escaneo puedes acceder a un mont??n de informaci??n variada e incluso facilitar ciertas tareas como la de conectarse a una red WiFi. Un c??digo QR te puede ayudar a mejorar el servicio o producto que ofreces, a interactuar con tus clientes y a promocionar tu negocio, entre otras cosas.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('??Cu??ntos tipos de c??digos QR hay?'); ?></h2>
        <p><?php $translate->echoTranslate('Muchos. Hay tantos tipos como contenidos puedan ir asociados. En Qrty te ofrecemos una herramienta para crear gran variedad de ellos: WiFi, p??gina web, Vcard, PDF, im??genes, v??deos, apps y men??/carta. Y todo de la forma m??s sencilla.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('??C??mo se lee un c??digo QR?'); ?></h2>
        <p><?php $translate->echoTranslate('Existen varios factores que influyen a la hora de que una persona o cliente potencial lea un c??digo QR, pero sin duda el m??s importantes es que el individuo que desee escanear el c??digo tenga un tel??fono. A d??a de hoy muchos son los m??viles que pueden leer QR con la propia c??mara, basta con apuntar al c??digo para escanearlo. En caso de que esto no funcione es posible que necesites descargar una aplicaci??n pensada para leer QR. ??Pero no te preocupes! Existen varias apps que cumplen con esta funci??n.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('??Qu?? diferencia hay entre un QR est??tico y uno din??mico?'); ?></h2>
        <p><?php $translate->echoTranslate('La mayor diferencia entre los dos es que el c??digo QR din??mico puede ser editado incluso despu??s de ser impreso, y el est??tico no. Por lo tanto el c??digo QR din??mico nos permite cambiar tanto la funci??n como el contenido en cualquier momento y cuantas veces queramos. '); ?><br>
            <?php $translate->echoTranslate('Otra gran diferencia es que los QR din??micos permiten recopilar estad??sticas de escaneo para obtener la mayor informaci??n posible.'); ?>
        </p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('??Se puede convertir un QR est??tico en uno din??mico o viceversa?'); ?></h2>
        <p><?php $translate->echoTranslate('No, debido a la diferencia t??cnica que tienen cada uno de los c??digos.'); ?>
        </p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('??C??mo puedo generar mi propio c??digo QR?'); ?></h2>
        <p><?php $translate->echoTranslate('Existen distintas plataformas y herramientas para crear tu propio QR, pero ninguna como QRGEN. Con QRGEN no solo podr??s generar c??digos QR personalizados, tambi??n podr??s gestionar y editar tus c??digos, y hacer un seguimiento anal??tico de los mismos.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('??Puede fallar la lectura de un QR?'); ?></h2>
        <p><?php $translate->echoTranslate('Los c??digos QR tambi??n tienen un sistema de prevenci??n de errores. Gracias a este sistema, hasta el 30% de la estructura del c??digo QR puede ser da??ada sin afectar su lectura. Si el da??o es mayor la lectura puede fallar.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('??C??mo puedo dise??ar mi propio c??digo QR?'); ?></h2>
        <p><?php $translate->echoTranslate('Los c??digos QR tambi??n tienen un sistema de prevenci??n de errores. Gracias a este sistema, hasta el 30% de la estructura del c??digo QR puede ser da??ada sin afectar su lectura. Si el da??o es mayor la lectura puede fallar.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('??Puedo personalizar el texto del QR?'); ?></h2>
        <p><?php $translate->echoTranslate('S??. Siempre y cuando se respete el n??mero de caracteres m??ximo.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('??Puedo cambiar el tama??o del logo de mi QR?'); ?></h2>
        <p><?php $translate->echoTranslate('No. Para evitar errores en la lectura del c??digo QR, esta opci??n no est?? disponible. Pero no te preocupes porque utilizamos una medida est??ndar para que el logo tenga buena lectura y no comprometa al escaneo.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('??Puedo editar mi QR?'); ?></h2>
        <p><?php $translate->echoTranslate('S??. Dentro de la secci??n "Mis Qrs" puedes ver todos los QR que has creado. Basta con darle al bot??n editar (s??mbolo de l??piz) para poder realizar cambios en tu QR.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('??Puedo comprobar que mi QR funciona correctamente?'); ?></h2>
        <p><?php $translate->echoTranslate('S??. Recomendamos que siempre hagas un escaneo de la vista previa del QR con el m??vil para comprobar su funcionamiento.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('??Por qu?? no funcionan mis c??digos QR?'); ?></h2>
        <p><?php $translate->echoTranslate('Si est??s suscrito a alguno de nuestros planes (de prueba o anual), tus c??digos QR activos deber??an funcionar sin problema.'); ?> <br>
            <?php $translate->echoTranslate('Si tus C??digos QR no funcionan, lo m??s probable es que se deba a elementos de dise??o. Algunas aplicaciones de lectura y las c??maras de los tel??fonos tienen dificultades para escanear c??digos QR complejos.'); ?>
            <br>
            <?php $translate->echoTranslate('A continuaci??n te indicamos algunos elementos de dise??o que hay que debes tener en cuenta:'); ?>
            <br>
            <?php $translate->echoTranslate('- Aseg??rate de que hay un contraste significativo entre el primer plano y el fondo del c??digo QR.
            - Aseg??rese de que el tama??o del c??digo QR es adecuado para la distancia de escaneado (en general, los c??digos QR din??micos no deber??an ser menores de 2 x 2 cm y los c??digos QR est??ticos no deber??an ser menores de 3 x 3 cm).
            -Aseg??rese de que el logotipo, si utiliza uno, no obstruya los elementos importantes del c??digo QR.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('??Qu?? datos se recogen en los escaneos de los QR din??micos?'); ?></h2>
        <p><?php $translate->echoTranslate('Podr??s conocer el n??mero de escaneos totales, el n??mero de escaneos por sistema operativo, la ubicaci??n y el n??mero de escaneos ??nicos.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('??C??mo descargo mi c??digo QR?'); ?></h2>
        <p><?php $translate->echoTranslate('Puedes descargar tus c??digos QR desde la secci??n "Mis QRs" o desde dentro de la secci??n "Detalle" de cada QR. Podr??s descargarlo en los formatos que m??s te convengan entre (png, jpeg, eps, svg).'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('??C??mo imprimo mi c??digo QR?'); ?></h2>
        <p><?php $translate->echoTranslate('Una vez hayas descargado tu c??digo QR en el formato deseado, podr??s imprimirlo desde tu ordenador. Asegurarte siempre de probar tu QR antes de la impresi??n para evitar cualquier contratiempo. '); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('??Cu??ntos planes hay y en qu?? se diferencian?'); ?></h2>
        <p><?php $translate->echoTranslate('A d??a de hoy en QRGEN ofrecemos dos planes que te dan acceso a todas las herramientas en nuestra plataforma. La diferencia se encuentra en el tiempo de duraci??n. El plan de prueba tiene una duraci??n de 14 d??as y el anual, como su propio nombre indica, de un a??o.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('??Existe alg??n cargo extra adem??s del precio del plan?'); ?></h2>
        <p><?php $translate->echoTranslate('No, no hacemos cobros extras m??s all?? del precio del plan + IVA. Sin embargo, el proveedor de tu tarjeta de cr??dito podr??a cobrar una peque??a comisi??n por la transacci??n. Para m??s informaci??n ponte en contacto directamente con tu banco o proveedor de tarjetas de cr??dito.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('??Qu?? m??todos de pago acepta QRGEN?'); ?></h2>
        <p><?php $translate->echoTranslate('En QRGEN aceptamos pagos con tarjeta Visa, Mastercard, American Express y Maestro.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('??Cu??ndo puedo empezar a utilizar el plan comprado?'); ?></h2>
        <p><?php $translate->echoTranslate('En el mismo momento en que se efectu?? el pago podr??s empezar a utilizar todas las herramientas de QRGEN.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('??Cu??nto dura mi suscripci??n?'); ?></h2>
        <p><?php $translate->echoTranslate('La suscripci??n de QRGEN es anual, excepto que contrates antes el plan de prueba, cuya duraci??n es de 14 d??as.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('??La renovaci??n de mi suscripci??n es autom??tica?'); ?></h2>
        <p><?php $translate->echoTranslate('La suscripci??n de QRGEN es anual, excepto que contrates antes el plan de prueba, cuya duraci??n es de 14 d??as.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('??La renovaci??n de mi suscripci??n es autom??tica?'); ?></h2>
        <p><?php $translate->echoTranslate('S??. A no ser que la suscripci??n se cancele - como tarde - un d??a antes de la fecha de renovaci??n, tu suscripci??n se renovar?? de forma autom??tica.'); ?>
            <br>
            <?php $translate->echoTranslate('La renovaci??n de la suscripci??n no puede ser cancelada una vez se haya efectuado'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('??C??mo cancelo mi suscripci??n?'); ?></h2>
        <p><?php $translate->echoTranslate('Cancelar tu suscripci??n es muy sencillo.  Puedes hacerlo en la secci??n "Planes y pagos" o pinchando aqu??.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('??Qu?? pasa con mis c??digos QR si la suscripci??n es cancelada?'); ?></h2>
        <p><?php $translate->echoTranslate('Tus c??digos QR no ir??n a ninguna parte, pero no podr??s acceder a ellos ni a los datos recogidos hasta que actualices tu plan.'); ?>
            <br>
            <?php $translate->echoTranslate('Tus c??digos QR desaparecer??n solo en el caso de que elimines tu cuenta QRGEN.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('??Ofrecen reembolsos por per??odos de suscripci??n no utilizados?'); ?></h2>
        <p><?php $translate->echoTranslate('No. Una vez contratado un plan no hay opci??n de reembolso. Lo que s?? puedes hacer es cancelar tu suscripci??n para evitar que se renueve autom??ticamente.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('??Qu?? duraci??n tiene el periodo de prueba?'); ?></h2>
        <p><?php $translate->echoTranslate('14 d??as, en los que puedes probar nuestro generador de c??digos QR.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('??Qu?? accesos me da el periodo de prueba?'); ?></h2>
        <p><?php $translate->echoTranslate('Nuestro periodo de prueba te da acceso a la totalidad de nuestra herramienta. En QRGEN creemos que para valorar un servicio debes ser capaz de probarlo al 100%.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('??Se puede extender el Plan de prueba?'); ?></h2>
        <p><?php $translate->echoTranslate('Lo sentimos, pero el Plan de Prueba solo dura 14 d??as. Pasado ese per??odo, y en caso de que no canceles tu suscripci??n, podr??s seguir utilizando la plataforma con el plan anual.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('??Puedo utilizar los c??digos QR generados en el periodo de prueba con fines comerciales?'); ?></h2>
        <p><?php $translate->echoTranslate('Si.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('??Debo cancelar el Plan de prueba si no voy a seguir utilizando la plataforma?'); ?></h2>
        <p><?php $translate->echoTranslate('S??. Si no deseas seguir utilizando QRGEN deber??s cancelar el plan de prueba en un plazo m??ximo de 14 d??as desde el momento de contrataci??n. En caso de no hacerlo, tu suscripci??n pasar?? a ser anual de forma autom??tica.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('??Qu?? pasa con mis c??digos QR una vez termina el Plan de prueba?'); ?></h2>
        <p><?php $translate->echoTranslate('Tus c??digos QR estar??n sanos y salvos en nuestra plataforma incluso si cancelas tu suscripci??n del plan de prueba (excepto si decides eliminar tu cuenta). Todos los c??digos y los datos asociados a ellos se guardar??n, sin embargo no podr??s acceder a ellos hasta que contrates el plan anual.'); ?></p>
    </div>
    <button style="
    width: 16%;
    margin: 19px auto;
    display: block;
"><?php $translate->echoTranslate('Crear QR'); ?></button>
</section>


<footer style="padding: 0 27%;padding-top: 34px;">
    <div class="logoContainer" style="float:left;">
        <img src="Logo.jpeg" alt="" style="height: 48px;">
    </div>
    <div class="row" style="width: 68%;float: right;">
        <div class="col">
            <p><?php $translate->echoTranslate('Servicio'); ?></p>
            <a href=""  style="    color: gray;
    font-size: 11px;
    display: block;
    margin-bottom: 10px;"><?php $translate->echoTranslate('Crear QR'); ?></a>
        </div>
        <div class="col">
            <p><?php $translate->echoTranslate('Empresa'); ?></p>
            <a href="/prices"  style="    color: gray;
    font-size: 11px;
    display: block;
    margin-bottom: 10px;"><?php $translate->echoTranslate('Precios'); ?></a>
            <a href="/conditions"  style="    color: gray;
    font-size: 11px;
    display: block;
    margin-bottom: 10px;"><?php $translate->echoTranslate('Condiciones de uso y Contrataci??n'); ?></a>
            <a href="/privacity"  style="    color: gray;
    font-size: 11px;
    display: block;
    margin-bottom: 10px;"><?php $translate->echoTranslate('Pol??tica de privacidad'); ?></a>
            <a href="/cookies"  style="    color: gray;
    font-size: 11px;
    display: block;
    margin-bottom: 10px;"><?php $translate->echoTranslate('Pol??tica de cookies'); ?></a>
        </div>
        <div class="col">
            <p><?php $translate->echoTranslate('Ayuda'); ?></p>
            <a href="/contact" style="    color: gray;
    font-size: 11px;
    display: block;
    margin-bottom: 10px;"><?php $translate->echoTranslate('Cont??ctanos'); ?></a>
            <a href="/faq"  style="    color: gray;
    font-size: 11px;
    display: block;
    margin-bottom: 10px;"><?php $translate->echoTranslate('FAQ'); ?></a>
            <a href="/cancelarSuscription"  style="    color: gray;
    font-size: 11px;
    display: block;
    margin-bottom: 10px;"><?php $translate->echoTranslate('Cancelar suscripci??n'); ?></a>
        </div>
    </div>
</footer>
<!-- IMPORT BOOTSTRAP SCRIPTS-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        $('.element').each(function () {
            this.addEventListener('click', selectElement);
        });

        function selectElement() {
            $(".element.active").removeClass("active");
            $(this).addClass('active');
            $('#containerScreen>div').addClass('hide');
            $('#' + $(this).attr("data-type")).removeClass('hide');
        }
    });
</script>
</body>

</html>