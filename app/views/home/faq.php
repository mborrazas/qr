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
                <a class="nav-link" href=""><?php $translate->echoTranslate('Iniciar Sesión'); ?></a>
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
        <h2><?php $translate->echoTranslate('¿Qué es un código QR?'); ?></h2>
        <p><?php $translate->echoTranslate('Para entenderlo de forma sencilla podemos decir que el código QR es la evolución natural del código de barras. Su nombre deriva del inglés "Quick Response Code" o "Código de respuesta rápida", y esto se debe a que tiene una alta velocidad de lectura. Dicho código permite un fácil acceso a distinta información a través del móvil.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('¿Qué utilidad tienen los códigos QR?'); ?></h2>
        <p><?php $translate->echoTranslate('Tienen tanta utilidad como tipos de contenidos puedan ofrecer. De hecho, en los últimos años este tipo de código ha ido aumentando su aprobación entre la audiencia. Es lógico, con tan solo un escaneo puedes acceder a un montón de información variada e incluso facilitar ciertas tareas como la de conectarse a una red WiFi. Un código QR te puede ayudar a mejorar el servicio o producto que ofreces, a interactuar con tus clientes y a promocionar tu negocio, entre otras cosas.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('¿Cuántos tipos de códigos QR hay?'); ?></h2>
        <p><?php $translate->echoTranslate('Muchos. Hay tantos tipos como contenidos puedan ir asociados. En Qrty te ofrecemos una herramienta para crear gran variedad de ellos: WiFi, página web, Vcard, PDF, imágenes, vídeos, apps y menú/carta. Y todo de la forma más sencilla.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('¿Cómo se lee un código QR?'); ?></h2>
        <p><?php $translate->echoTranslate('Existen varios factores que influyen a la hora de que una persona o cliente potencial lea un código QR, pero sin duda el más importantes es que el individuo que desee escanear el código tenga un teléfono. A día de hoy muchos son los móviles que pueden leer QR con la propia cámara, basta con apuntar al código para escanearlo. En caso de que esto no funcione es posible que necesites descargar una aplicación pensada para leer QR. ¡Pero no te preocupes! Existen varias apps que cumplen con esta función.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('¿Qué diferencia hay entre un QR estático y uno dinámico?'); ?></h2>
        <p><?php $translate->echoTranslate('La mayor diferencia entre los dos es que el código QR dinámico puede ser editado incluso después de ser impreso, y el estático no. Por lo tanto el código QR dinámico nos permite cambiar tanto la función como el contenido en cualquier momento y cuantas veces queramos. '); ?><br>
            <?php $translate->echoTranslate('Otra gran diferencia es que los QR dinámicos permiten recopilar estadísticas de escaneo para obtener la mayor información posible.'); ?>
        </p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('¿Se puede convertir un QR estático en uno dinámico o viceversa?'); ?></h2>
        <p><?php $translate->echoTranslate('No, debido a la diferencia técnica que tienen cada uno de los códigos.'); ?>
        </p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('¿Cómo puedo generar mi propio código QR?'); ?></h2>
        <p><?php $translate->echoTranslate('Existen distintas plataformas y herramientas para crear tu propio QR, pero ninguna como QRGEN. Con QRGEN no solo podrás generar códigos QR personalizados, también podrás gestionar y editar tus códigos, y hacer un seguimiento analítico de los mismos.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('¿Puede fallar la lectura de un QR?'); ?></h2>
        <p><?php $translate->echoTranslate('Los códigos QR también tienen un sistema de prevención de errores. Gracias a este sistema, hasta el 30% de la estructura del código QR puede ser dañada sin afectar su lectura. Si el daño es mayor la lectura puede fallar.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('¿Cómo puedo diseñar mi propio código QR?'); ?></h2>
        <p><?php $translate->echoTranslate('Los códigos QR también tienen un sistema de prevención de errores. Gracias a este sistema, hasta el 30% de la estructura del código QR puede ser dañada sin afectar su lectura. Si el daño es mayor la lectura puede fallar.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('¿Puedo personalizar el texto del QR?'); ?></h2>
        <p><?php $translate->echoTranslate('Sí. Siempre y cuando se respete el número de caracteres máximo.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('¿Puedo cambiar el tamaño del logo de mi QR?'); ?></h2>
        <p><?php $translate->echoTranslate('No. Para evitar errores en la lectura del código QR, esta opción no está disponible. Pero no te preocupes porque utilizamos una medida estándar para que el logo tenga buena lectura y no comprometa al escaneo.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('¿Puedo editar mi QR?'); ?></h2>
        <p><?php $translate->echoTranslate('Sí. Dentro de la sección "Mis Qrs" puedes ver todos los QR que has creado. Basta con darle al botón editar (símbolo de lápiz) para poder realizar cambios en tu QR.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('¿Puedo comprobar que mi QR funciona correctamente?'); ?></h2>
        <p><?php $translate->echoTranslate('Sí. Recomendamos que siempre hagas un escaneo de la vista previa del QR con el móvil para comprobar su funcionamiento.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('¿Por qué no funcionan mis códigos QR?'); ?></h2>
        <p><?php $translate->echoTranslate('Si estás suscrito a alguno de nuestros planes (de prueba o anual), tus códigos QR activos deberían funcionar sin problema.'); ?> <br>
            <?php $translate->echoTranslate('Si tus Códigos QR no funcionan, lo más probable es que se deba a elementos de diseño. Algunas aplicaciones de lectura y las cámaras de los teléfonos tienen dificultades para escanear códigos QR complejos.'); ?>
            <br>
            <?php $translate->echoTranslate('A continuación te indicamos algunos elementos de diseño que hay que debes tener en cuenta:'); ?>
            <br>
            <?php $translate->echoTranslate('- Asegúrate de que hay un contraste significativo entre el primer plano y el fondo del código QR.
            - Asegúrese de que el tamaño del código QR es adecuado para la distancia de escaneado (en general, los códigos QR dinámicos no deberían ser menores de 2 x 2 cm y los códigos QR estáticos no deberían ser menores de 3 x 3 cm).
            -Asegúrese de que el logotipo, si utiliza uno, no obstruya los elementos importantes del código QR.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('¿Qué datos se recogen en los escaneos de los QR dinámicos?'); ?></h2>
        <p><?php $translate->echoTranslate('Podrás conocer el número de escaneos totales, el número de escaneos por sistema operativo, la ubicación y el número de escaneos únicos.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('¿Cómo descargo mi código QR?'); ?></h2>
        <p><?php $translate->echoTranslate('Puedes descargar tus códigos QR desde la sección "Mis QRs" o desde dentro de la sección "Detalle" de cada QR. Podrás descargarlo en los formatos que más te convengan entre (png, jpeg, eps, svg).'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('¿Cómo imprimo mi código QR?'); ?></h2>
        <p><?php $translate->echoTranslate('Una vez hayas descargado tu código QR en el formato deseado, podrás imprimirlo desde tu ordenador. Asegurarte siempre de probar tu QR antes de la impresión para evitar cualquier contratiempo. '); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('¿Cuántos planes hay y en qué se diferencian?'); ?></h2>
        <p><?php $translate->echoTranslate('A día de hoy en QRGEN ofrecemos dos planes que te dan acceso a todas las herramientas en nuestra plataforma. La diferencia se encuentra en el tiempo de duración. El plan de prueba tiene una duración de 14 días y el anual, como su propio nombre indica, de un año.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('¿Existe algún cargo extra además del precio del plan?'); ?></h2>
        <p><?php $translate->echoTranslate('No, no hacemos cobros extras más allá del precio del plan + IVA. Sin embargo, el proveedor de tu tarjeta de crédito podría cobrar una pequeña comisión por la transacción. Para más información ponte en contacto directamente con tu banco o proveedor de tarjetas de crédito.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('¿Qué métodos de pago acepta QRGEN?'); ?></h2>
        <p><?php $translate->echoTranslate('En QRGEN aceptamos pagos con tarjeta Visa, Mastercard, American Express y Maestro.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('¿Cuándo puedo empezar a utilizar el plan comprado?'); ?></h2>
        <p><?php $translate->echoTranslate('En el mismo momento en que se efectué el pago podrás empezar a utilizar todas las herramientas de QRGEN.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('¿Cuánto dura mi suscripción?'); ?></h2>
        <p><?php $translate->echoTranslate('La suscripción de QRGEN es anual, excepto que contrates antes el plan de prueba, cuya duración es de 14 días.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('¿La renovación de mi suscripción es automática?'); ?></h2>
        <p><?php $translate->echoTranslate('La suscripción de QRGEN es anual, excepto que contrates antes el plan de prueba, cuya duración es de 14 días.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('¿La renovación de mi suscripción es automática?'); ?></h2>
        <p><?php $translate->echoTranslate('Sí. A no ser que la suscripción se cancele - como tarde - un día antes de la fecha de renovación, tu suscripción se renovará de forma automática.'); ?>
            <br>
            <?php $translate->echoTranslate('La renovación de la suscripción no puede ser cancelada una vez se haya efectuado'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('¿Cómo cancelo mi suscripción?'); ?></h2>
        <p><?php $translate->echoTranslate('Cancelar tu suscripción es muy sencillo.  Puedes hacerlo en la sección "Planes y pagos" o pinchando aquí.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('¿Qué pasa con mis códigos QR si la suscripción es cancelada?'); ?></h2>
        <p><?php $translate->echoTranslate('Tus códigos QR no irán a ninguna parte, pero no podrás acceder a ellos ni a los datos recogidos hasta que actualices tu plan.'); ?>
            <br>
            <?php $translate->echoTranslate('Tus códigos QR desaparecerán solo en el caso de que elimines tu cuenta QRGEN.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('¿Ofrecen reembolsos por períodos de suscripción no utilizados?'); ?></h2>
        <p><?php $translate->echoTranslate('No. Una vez contratado un plan no hay opción de reembolso. Lo que sí puedes hacer es cancelar tu suscripción para evitar que se renueve automáticamente.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('¿Qué duración tiene el periodo de prueba?'); ?></h2>
        <p><?php $translate->echoTranslate('14 días, en los que puedes probar nuestro generador de códigos QR.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('¿Qué accesos me da el periodo de prueba?'); ?></h2>
        <p><?php $translate->echoTranslate('Nuestro periodo de prueba te da acceso a la totalidad de nuestra herramienta. En QRGEN creemos que para valorar un servicio debes ser capaz de probarlo al 100%.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('¿Se puede extender el Plan de prueba?'); ?></h2>
        <p><?php $translate->echoTranslate('Lo sentimos, pero el Plan de Prueba solo dura 14 días. Pasado ese período, y en caso de que no canceles tu suscripción, podrás seguir utilizando la plataforma con el plan anual.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('¿Puedo utilizar los códigos QR generados en el periodo de prueba con fines comerciales?'); ?></h2>
        <p><?php $translate->echoTranslate('Si.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('¿Debo cancelar el Plan de prueba si no voy a seguir utilizando la plataforma?'); ?></h2>
        <p><?php $translate->echoTranslate('Sí. Si no deseas seguir utilizando QRGEN deberás cancelar el plan de prueba en un plazo máximo de 14 días desde el momento de contratación. En caso de no hacerlo, tu suscripción pasará a ser anual de forma automática.'); ?></p>
    </div>
    <div class="item">
        <h2><?php $translate->echoTranslate('¿Qué pasa con mis códigos QR una vez termina el Plan de prueba?'); ?></h2>
        <p><?php $translate->echoTranslate('Tus códigos QR estarán sanos y salvos en nuestra plataforma incluso si cancelas tu suscripción del plan de prueba (excepto si decides eliminar tu cuenta). Todos los códigos y los datos asociados a ellos se guardarán, sin embargo no podrás acceder a ellos hasta que contrates el plan anual.'); ?></p>
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
    margin-bottom: 10px;"><?php $translate->echoTranslate('Condiciones de uso y Contratación'); ?></a>
            <a href="/privacity"  style="    color: gray;
    font-size: 11px;
    display: block;
    margin-bottom: 10px;"><?php $translate->echoTranslate('Política de privacidad'); ?></a>
            <a href="/cookies"  style="    color: gray;
    font-size: 11px;
    display: block;
    margin-bottom: 10px;"><?php $translate->echoTranslate('Política de cookies'); ?></a>
        </div>
        <div class="col">
            <p><?php $translate->echoTranslate('Ayuda'); ?></p>
            <a href="/contact" style="    color: gray;
    font-size: 11px;
    display: block;
    margin-bottom: 10px;"><?php $translate->echoTranslate('Contáctanos'); ?></a>
            <a href="/faq"  style="    color: gray;
    font-size: 11px;
    display: block;
    margin-bottom: 10px;"><?php $translate->echoTranslate('FAQ'); ?></a>
            <a href="/cancelarSuscription"  style="    color: gray;
    font-size: 11px;
    display: block;
    margin-bottom: 10px;"><?php $translate->echoTranslate('Cancelar suscripción'); ?></a>
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