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
"><?php $translate->echoTranslate('Pol??tica de privacidad 
'); ?></h2>
</section>
<section id="containerfaq" style="background: rgb(229, 231, 239); margin-top:40px">
    <div class="item">
        <p><?php $translate->echoTranslate('1. Responsable y descripci??n<br> <br>
1.1. Responsable
El responsable del tratamiento de este sitio es W3 Business STQ 2017 S.L.U (en adelante QRTY o el Servicio), con domicilio en Av. Cerdanyola, 75 - 1??, CP 08172, Sant Cugat del Vall??s, Barcelona, Espa??a.
<br><br>
NIF: B67081794
Correo electr??nico: info@qrty.mobi
<br><br>
1.2. Descripci??n
La aceptaci??n de la pol??tica de privacidad de QRTY  (en adelante ???Pol??tica de Privacidad???), es condici??n necesaria para el uso de nuestra web y la prestaci??n del servicio (en adelante el ???Servicio???).
<br> <br>
Esta Pol??tica de Privacidad regula la recopilaci??n, tratamiento y uso de tu informaci??n personal y no personal como usuario de QRTY, a partir de la fecha de entrada en vigor que aparece en el encabezado.
<br> <br>
Para tratar tus datos personales, QRTY cumple con la legislaci??n vigente, local y europea, as?? como su normativa de desarrollo.
<br> <br>
2. Informaci??n recopilada
El acceso a nuestra web puede hacerse sin necesidad de proporcionar ning??n dato, si bien para registrarte y/o contratar nuestros planes de dietas necesitar??s indicarnos algunos datos personales. La informaci??n (personal o no personal) recopilada por el Servicio puede variar en funci??n de eso.
<br> <br>
La informaci??n personal y no personal recopilada por el Servicio nos llegar?? por tres v??as: 1) la recopilada autom??ticamente 2) la que nos proporciones voluntariamente y 3) la proporcionada por terceros.
<br> <br>
2.1. La recopilada autom??ticamente
Esta informaci??n consistir?? en:
<br> <br>
La recopilada mediante cookies o mecanismos similares almacenados en tu dispositivo, siempre con tu consentimiento o de acuerdo a otras bases legales. Consulta nuestra Pol??tica de Cookies para m??s informaci??n.
<br> <br>
La IP desde la que se realiza la conexi??n, el tipo de dispositivo usado y sus caracter??sticas, la versi??n del sistema operativo, el tipo de navegador, el idioma, la fecha, el pa??s, la hora de la solicitud, la URL desde la que procedes, la URL a la que marchas o la red m??vil empleada, entre otros.
<br> <br>
Datos de uso del Servicio y posibles errores detectados durante su utilizaci??n.
<br> <br>
Adem??s, QRTY utiliza Google Analytics, un servicio anal??tico prestado por Google, LLC. con domicilio en los Estados Unidos con sede central en 1600 Amphitheatre Parkway, Mountain View, California 94043. Para la prestaci??n de estos servicios, estos utilizan cookies que recopilan la informaci??n, incluida la direcci??n IP del usuario, que ser?? transmitida, tratada y almacenada por Google en los t??rminos fijados en la web www.google.com. Incluyendo la posible transmisi??n de dicha informaci??n a terceros por razones de exigencia legal o cuando dichos terceros procesen la informaci??n por cuenta de Google.
<br> <br>
En cualquier caso, puedes inhabilitar las cookies de Google Analytics desde aqu??.
<br> <br>
2.2. La que proporcionas voluntariamente
Esta informaci??n consistir?? en:
<br> <br>
La informaci??n personal o no que facilitas a la hora de crear tu dieta tales como sexo, estatura, peso, edad, actividad f??sica que realices y h??bitos, entre otros.
<br> <br>
Todos los datos tienen car??cter obligatorio.
<br> <br>
La requerida por QRTY para completar tu registro en la web: nombre y apellidos, direcci??n y correo electr??nico, entre otros.
<br> <br>
Todos los datos tienen car??cter obligatorio.
<br> <br>
La informaci??n, personal o no, para completar la contrataci??n del servicio como tu direcci??n de correo electr??nico y tu n??mero de tarjeta de cr??dito o d??bito.
<br> <br>
La informaci??n, personal o no, que pudieran contener los mensajes enviados a trav??s de los canales de contacto u opini??n establecidos en el Servicio, por ejemplo tu nombre y correo electr??nico.
<br> <br>
2.3. La proporcionada por terceros
Esta informaci??n consistir?? en:
<br> <br>
La proporcionada por sistemas de pago o procesadoras de tarjetas de cr??dito, como la hora de la compra o su importe.
3. Derechos y finalidades
Te informamos que la cumplimentaci??n de los formularios tiene car??cter voluntario. Ahora bien, si no rellenas los campos obligatorios (marcados normalmente con un asterisco), el uso de algunas funciones del Servicio no ser?? posible o se ver?? limitado.
<br> <br>
Los datos personales que nos facilites quedar??n incorporados y ser??n tratados en el Registro de Actividades de Tratamiento de QRTY con el fin de poder atender tus peticiones, prestar el servicio solicitado y mantenerte informado sobre cuestiones relativas a la actividad de la empresa y sus servicios.
<br> <br>
Puedes ejercer en cualquier momento los derechos de acceso, rectificaci??n, supresi??n, limitaci??n de tu tratamiento, oposici??n y portabilidad de tus datos de car??cter personal mediante correo electr??nico dirigido a: info@qrty.mobi O la direcci??n postal: Av. Cerdanyola, 75 - 1??, CP 08172, Sant Cugat del Vall??s, Barcelona, Espa??a.
<br> <br>
En ambos casos deber??s identificarte con tu nombre y apellidos, adem??s de una copia de tu DNI o ID nacional, si fuese necesario.
<br> <br>
En el caso de que hayas otorgado el consentimiento para alguna finalidad espec??fica, tienes derecho a retirar el consentimiento en cualquier momento, sin que ello afecte a la licitud del tratamiento basado en el consentimiento previo a su retirada.
<br> <br>
Adem??s, si consideras que hay un problema con la forma en que QRTY est?? manejando tus datos, puedes dirigir tus reclamaciones a la autoridad de protecci??n de datos que corresponda, siendo la  Agencia Espa??ola de Protecci??n de Datos la indicada en el caso de Espa??a.
<br> <br>
4. Edad
En cuanto al uso del servicio online, declaras que eres mayor de edad y que dispones de la capacidad legal necesaria para vincularte por este acuerdo y utilizar el sitio de conformidad con sus t??rminos y condiciones, que comprendes y reconoces en su totalidad.
<br> <br>
Declaras que toda la informaci??n que proporciones para acceder al Servicio, antes y durante su utilizaci??n, es verdadera, completa y precisa.
<br> <br>
5. Uso de los datos
QRTY usar?? los datos recopilados para:
<br> <br>
Administrar y actualizar el Servicio (siendo la base legal nuestro inter??s leg??timo en mantener y conservar el Servicio al d??a y en buen estado).
<br> <br>
Atender las cuestiones que plantees (siendo la base legal nuestro inter??s leg??timo en atender las peticiones y dudas de nuestros usuarios).
<br> <br>
Procesar los pagos que realices (siendo la base legal el contrato).
<br> <br>
Proporcionar el servicio contratado (siendo la base legal el contrato).
<br> <br>
Mantener la seguridad del Servicio, investigar actividades il??citas, hacer cumplir nuestros t??rminos y condiciones y ayudar a los cuerpos y fuerzas de seguridad del estado en el marco de sus eventuales investigaciones (siendo la base legal nuestro inter??s leg??timo en garantizar y mantener la seguridad del Servicio y sus usuarios).
<br> <br>
QRTY no usa decisiones automatizadas, aunque puede generar perfiles b??sicos de los usuarios, siendo la base legal nuestro inter??s leg??timo para finalidades comerciales y proporcionar ofertas personalizadas.
<br> <br>
Asimismo, QRTY podr?? utilizar la informaci??n de los usuarios en forma de datos agregados y an??nimos para mostrarlos a terceros. Tambi??n podr?? compartir estad??sticas y la informaci??n demogr??fica sobre los usuarios y su utilizaci??n del Servicio con terceros. Pero nada de esto permitir?? a esos terceros identificarte personalmente.
<br> <br>
5.1. En mails y formularios de contacto
La web cuenta con un cifrado SSL que permite al usuario el env??o seguro de sus datos personales a trav??s de formularios de contacto de tipo est??ndar.
<br> <br>
Los datos personales recogidos ser??n objeto de tratamiento automatizado e incorporados a los correspondientes ficheros del registro de actividades de tratamiento y de los que QRTY es titular.
<br> <br>
En ese sentido:
<br> <br>
Nos llegar?? tu IP, que ser?? usada para comprobar el origen del mensaje con objeto de ofrecerte recomendaciones adecuadas (por ejemplo presentar la informaci??n en el idioma correcto) y para detectar posibles irregularidades (por ejemplo posibles intentos de ciberataque al Servicio), as?? como datos relativos a tu ISP.
<br> <br>
Asimismo, podr??s facilitarnos tus datos a trav??s de tel??fono, correo electr??nico y otros medios de comunicaci??n indicados.
<br> <br>
Respecto a los medios de pago usados:
<br> <br>
Nuestros prestadores de servicios de pago para abonar la prestaci??n de nuestros servicios son tarjeta de cr??dito o d??bito. En ning??n momento el Servicio ni su personal tendr??n acceso a los datos bancarios (por ejemplo, el n??mero de tarjeta de cr??dito) que el usuario como cliente facilitar?? a esos terceros.
6. Conservaci??n de los datos
A continuaci??n, se indican por cu??nto tiempo se conservan los datos tratados por el Servicio:
<br> <br>
Los datos desagregados ser??n conservados sin plazo de supresi??n.
<br> <br>
Los datos de los clientes ser??n conservados el m??nimo necesario, pudiendo mantenerse hasta:
<br> <br>
5 a??os, seg??n el art. 1964 del C??digo Civil (acciones personales sin plazo especial).
6 a??os, seg??n el art. 30 del C??digo de Comercio (libros de contabilidad o factura, por ejemplo).
Los datos de los usuarios ser??n conservados hasta un plazo m??ximo de 12 meses para poder atender a sus peticiones.
<br> <br>
7. Datos compartidos con terceros
Hay terceros que gestionan parte del Servicio.
<br> <br>
A ellos QRTY les exige que cumplan esta Pol??tica de Privacidad en lo que les resulte aplicable, adem??s de tener la suya propia. No obstante, QRTY no ser?? responsable del cumplimiento de dicha pol??tica.
<br> <br>
Bajo algunas circunstancias, QRTY podr?? compartir, usar o preservar con
<br> <br>
terceros alguna de la informaci??n personal recopilada:
<br> <br>
Para prestar el Servicio:
Los proveedores de servicios que prestan funciones en nuestro nombre, como por ejemplo los servicios de pago, el alojamiento web, la anal??tica comercial, el servicio de atenci??n al cliente o el marketing de la web. Estos proveedores de servicios pueden recopilar y tener acceso a la informaci??n que les sea necesaria para desempe??ar sus funciones, pero no tienen permitido compartir o utilizar la informaci??n para ning??n otro prop??sito.
<br> <br>
Para cooperar con las autoridades competentes:
???Si creemos que es razonablemente necesario para satisfacer cualquier ley, proceso legal o inter??s leg??timo. En cualquier caso, s??lo proporcionaremos la informaci??n estrictamente requerida.
<br> <br>
8. Medidas de seguridad
QRTY adopta todas las medidas t??cnicas y organizativas necesarias para
<br> <br>
proteger la seguridad e integridad de la informaci??n personal y no personal recopilada. Tanto frente a accesos no autorizados como su alteraci??n, p??rdida o destrucci??n accidentales.
<br> <br>
En todo caso, QRTY no puede garantizar la seguridad absoluta de la informaci??n recopilada, por lo que debes colaborar y utilizar en todo momento el sentido com??n sobre la informaci??n compartida.
<br> <br>
Entiendes y reconoces que, incluso despu??s de su eliminaci??n, la informaci??n personal y no personal puede permanecer visible en cach?? o si otros usuarios la han copiado o almacenado.
<br> <br>
9. Cambios en la Pol??tica de Privacidad
Podremos actualizar esta Pol??tica de Privacidad en el futuro. Te informaremos sobre sus cambios enviando un aviso a la direcci??n de correo electr??nico facilitada y/o colocando un aviso en un lugar prominente de nuestra web.
<br> <br>
10. Contacto
Si tienes dudas sobre esta Pol??tica de Privacidad, contacta con nosotros en:
<br> <br>
E-mail: info@qrty.mobi
Direcci??n: Av. Cerdanyola, 75 - 1??, CP 08172, Sant Cugat del Vall??s, Barcelona, Espa??a.'); ?></p>
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