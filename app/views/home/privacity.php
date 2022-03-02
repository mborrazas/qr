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
"><?php $translate->echoTranslate('Política de privacidad 
'); ?></h2>
</section>
<section id="containerfaq" style="background: rgb(229, 231, 239); margin-top:40px">
    <div class="item">
        <p><?php $translate->echoTranslate('1. Responsable y descripción<br> <br>
1.1. Responsable
El responsable del tratamiento de este sitio es W3 Business STQ 2017 S.L.U (en adelante QRTY o el Servicio), con domicilio en Av. Cerdanyola, 75 - 1º, CP 08172, Sant Cugat del Vallés, Barcelona, España.
<br><br>
NIF: B67081794
Correo electrónico: info@qrty.mobi
<br><br>
1.2. Descripción
La aceptación de la política de privacidad de QRTY  (en adelante “Política de Privacidad”), es condición necesaria para el uso de nuestra web y la prestación del servicio (en adelante el “Servicio”).
<br> <br>
Esta Política de Privacidad regula la recopilación, tratamiento y uso de tu información personal y no personal como usuario de QRTY, a partir de la fecha de entrada en vigor que aparece en el encabezado.
<br> <br>
Para tratar tus datos personales, QRTY cumple con la legislación vigente, local y europea, así como su normativa de desarrollo.
<br> <br>
2. Información recopilada
El acceso a nuestra web puede hacerse sin necesidad de proporcionar ningún dato, si bien para registrarte y/o contratar nuestros planes de dietas necesitarás indicarnos algunos datos personales. La información (personal o no personal) recopilada por el Servicio puede variar en función de eso.
<br> <br>
La información personal y no personal recopilada por el Servicio nos llegará por tres vías: 1) la recopilada automáticamente 2) la que nos proporciones voluntariamente y 3) la proporcionada por terceros.
<br> <br>
2.1. La recopilada automáticamente
Esta información consistirá en:
<br> <br>
La recopilada mediante cookies o mecanismos similares almacenados en tu dispositivo, siempre con tu consentimiento o de acuerdo a otras bases legales. Consulta nuestra Política de Cookies para más información.
<br> <br>
La IP desde la que se realiza la conexión, el tipo de dispositivo usado y sus características, la versión del sistema operativo, el tipo de navegador, el idioma, la fecha, el país, la hora de la solicitud, la URL desde la que procedes, la URL a la que marchas o la red móvil empleada, entre otros.
<br> <br>
Datos de uso del Servicio y posibles errores detectados durante su utilización.
<br> <br>
Además, QRTY utiliza Google Analytics, un servicio analítico prestado por Google, LLC. con domicilio en los Estados Unidos con sede central en 1600 Amphitheatre Parkway, Mountain View, California 94043. Para la prestación de estos servicios, estos utilizan cookies que recopilan la información, incluida la dirección IP del usuario, que será transmitida, tratada y almacenada por Google en los términos fijados en la web www.google.com. Incluyendo la posible transmisión de dicha información a terceros por razones de exigencia legal o cuando dichos terceros procesen la información por cuenta de Google.
<br> <br>
En cualquier caso, puedes inhabilitar las cookies de Google Analytics desde aquí.
<br> <br>
2.2. La que proporcionas voluntariamente
Esta información consistirá en:
<br> <br>
La información personal o no que facilitas a la hora de crear tu dieta tales como sexo, estatura, peso, edad, actividad física que realices y hábitos, entre otros.
<br> <br>
Todos los datos tienen carácter obligatorio.
<br> <br>
La requerida por QRTY para completar tu registro en la web: nombre y apellidos, dirección y correo electrónico, entre otros.
<br> <br>
Todos los datos tienen carácter obligatorio.
<br> <br>
La información, personal o no, para completar la contratación del servicio como tu dirección de correo electrónico y tu número de tarjeta de crédito o débito.
<br> <br>
La información, personal o no, que pudieran contener los mensajes enviados a través de los canales de contacto u opinión establecidos en el Servicio, por ejemplo tu nombre y correo electrónico.
<br> <br>
2.3. La proporcionada por terceros
Esta información consistirá en:
<br> <br>
La proporcionada por sistemas de pago o procesadoras de tarjetas de crédito, como la hora de la compra o su importe.
3. Derechos y finalidades
Te informamos que la cumplimentación de los formularios tiene carácter voluntario. Ahora bien, si no rellenas los campos obligatorios (marcados normalmente con un asterisco), el uso de algunas funciones del Servicio no será posible o se verá limitado.
<br> <br>
Los datos personales que nos facilites quedarán incorporados y serán tratados en el Registro de Actividades de Tratamiento de QRTY con el fin de poder atender tus peticiones, prestar el servicio solicitado y mantenerte informado sobre cuestiones relativas a la actividad de la empresa y sus servicios.
<br> <br>
Puedes ejercer en cualquier momento los derechos de acceso, rectificación, supresión, limitación de tu tratamiento, oposición y portabilidad de tus datos de carácter personal mediante correo electrónico dirigido a: info@qrty.mobi O la dirección postal: Av. Cerdanyola, 75 - 1º, CP 08172, Sant Cugat del Vallés, Barcelona, España.
<br> <br>
En ambos casos deberás identificarte con tu nombre y apellidos, además de una copia de tu DNI o ID nacional, si fuese necesario.
<br> <br>
En el caso de que hayas otorgado el consentimiento para alguna finalidad específica, tienes derecho a retirar el consentimiento en cualquier momento, sin que ello afecte a la licitud del tratamiento basado en el consentimiento previo a su retirada.
<br> <br>
Además, si consideras que hay un problema con la forma en que QRTY está manejando tus datos, puedes dirigir tus reclamaciones a la autoridad de protección de datos que corresponda, siendo la  Agencia Española de Protección de Datos la indicada en el caso de España.
<br> <br>
4. Edad
En cuanto al uso del servicio online, declaras que eres mayor de edad y que dispones de la capacidad legal necesaria para vincularte por este acuerdo y utilizar el sitio de conformidad con sus términos y condiciones, que comprendes y reconoces en su totalidad.
<br> <br>
Declaras que toda la información que proporciones para acceder al Servicio, antes y durante su utilización, es verdadera, completa y precisa.
<br> <br>
5. Uso de los datos
QRTY usará los datos recopilados para:
<br> <br>
Administrar y actualizar el Servicio (siendo la base legal nuestro interés legítimo en mantener y conservar el Servicio al día y en buen estado).
<br> <br>
Atender las cuestiones que plantees (siendo la base legal nuestro interés legítimo en atender las peticiones y dudas de nuestros usuarios).
<br> <br>
Procesar los pagos que realices (siendo la base legal el contrato).
<br> <br>
Proporcionar el servicio contratado (siendo la base legal el contrato).
<br> <br>
Mantener la seguridad del Servicio, investigar actividades ilícitas, hacer cumplir nuestros términos y condiciones y ayudar a los cuerpos y fuerzas de seguridad del estado en el marco de sus eventuales investigaciones (siendo la base legal nuestro interés legítimo en garantizar y mantener la seguridad del Servicio y sus usuarios).
<br> <br>
QRTY no usa decisiones automatizadas, aunque puede generar perfiles básicos de los usuarios, siendo la base legal nuestro interés legítimo para finalidades comerciales y proporcionar ofertas personalizadas.
<br> <br>
Asimismo, QRTY podrá utilizar la información de los usuarios en forma de datos agregados y anónimos para mostrarlos a terceros. También podrá compartir estadísticas y la información demográfica sobre los usuarios y su utilización del Servicio con terceros. Pero nada de esto permitirá a esos terceros identificarte personalmente.
<br> <br>
5.1. En mails y formularios de contacto
La web cuenta con un cifrado SSL que permite al usuario el envío seguro de sus datos personales a través de formularios de contacto de tipo estándar.
<br> <br>
Los datos personales recogidos serán objeto de tratamiento automatizado e incorporados a los correspondientes ficheros del registro de actividades de tratamiento y de los que QRTY es titular.
<br> <br>
En ese sentido:
<br> <br>
Nos llegará tu IP, que será usada para comprobar el origen del mensaje con objeto de ofrecerte recomendaciones adecuadas (por ejemplo presentar la información en el idioma correcto) y para detectar posibles irregularidades (por ejemplo posibles intentos de ciberataque al Servicio), así como datos relativos a tu ISP.
<br> <br>
Asimismo, podrás facilitarnos tus datos a través de teléfono, correo electrónico y otros medios de comunicación indicados.
<br> <br>
Respecto a los medios de pago usados:
<br> <br>
Nuestros prestadores de servicios de pago para abonar la prestación de nuestros servicios son tarjeta de crédito o débito. En ningún momento el Servicio ni su personal tendrán acceso a los datos bancarios (por ejemplo, el número de tarjeta de crédito) que el usuario como cliente facilitará a esos terceros.
6. Conservación de los datos
A continuación, se indican por cuánto tiempo se conservan los datos tratados por el Servicio:
<br> <br>
Los datos desagregados serán conservados sin plazo de supresión.
<br> <br>
Los datos de los clientes serán conservados el mínimo necesario, pudiendo mantenerse hasta:
<br> <br>
5 años, según el art. 1964 del Código Civil (acciones personales sin plazo especial).
6 años, según el art. 30 del Código de Comercio (libros de contabilidad o factura, por ejemplo).
Los datos de los usuarios serán conservados hasta un plazo máximo de 12 meses para poder atender a sus peticiones.
<br> <br>
7. Datos compartidos con terceros
Hay terceros que gestionan parte del Servicio.
<br> <br>
A ellos QRTY les exige que cumplan esta Política de Privacidad en lo que les resulte aplicable, además de tener la suya propia. No obstante, QRTY no será responsable del cumplimiento de dicha política.
<br> <br>
Bajo algunas circunstancias, QRTY podrá compartir, usar o preservar con
<br> <br>
terceros alguna de la información personal recopilada:
<br> <br>
Para prestar el Servicio:
Los proveedores de servicios que prestan funciones en nuestro nombre, como por ejemplo los servicios de pago, el alojamiento web, la analítica comercial, el servicio de atención al cliente o el marketing de la web. Estos proveedores de servicios pueden recopilar y tener acceso a la información que les sea necesaria para desempeñar sus funciones, pero no tienen permitido compartir o utilizar la información para ningún otro propósito.
<br> <br>
Para cooperar con las autoridades competentes:
​Si creemos que es razonablemente necesario para satisfacer cualquier ley, proceso legal o interés legítimo. En cualquier caso, sólo proporcionaremos la información estrictamente requerida.
<br> <br>
8. Medidas de seguridad
QRTY adopta todas las medidas técnicas y organizativas necesarias para
<br> <br>
proteger la seguridad e integridad de la información personal y no personal recopilada. Tanto frente a accesos no autorizados como su alteración, pérdida o destrucción accidentales.
<br> <br>
En todo caso, QRTY no puede garantizar la seguridad absoluta de la información recopilada, por lo que debes colaborar y utilizar en todo momento el sentido común sobre la información compartida.
<br> <br>
Entiendes y reconoces que, incluso después de su eliminación, la información personal y no personal puede permanecer visible en caché o si otros usuarios la han copiado o almacenado.
<br> <br>
9. Cambios en la Política de Privacidad
Podremos actualizar esta Política de Privacidad en el futuro. Te informaremos sobre sus cambios enviando un aviso a la dirección de correo electrónico facilitada y/o colocando un aviso en un lugar prominente de nuestra web.
<br> <br>
10. Contacto
Si tienes dudas sobre esta Política de Privacidad, contacta con nosotros en:
<br> <br>
E-mail: info@qrty.mobi
Dirección: Av. Cerdanyola, 75 - 1º, CP 08172, Sant Cugat del Vallés, Barcelona, España.'); ?></p>
    </div>
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