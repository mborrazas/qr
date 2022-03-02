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
"><?php $translate->echoTranslate('Condiciones de uso y Contratación
'); ?></h2>
</section>
<section id="containerfaq" style="background: rgb(229, 231, 239); margin-top:40px">
    <div class="item">
        <p><?php $translate->echoTranslate('Los Términos que encontrará a continuación son importantes porque:'); ?></p>
        <p><?php $translate->echoTranslate('Establecen sus derechos legales en QRGEN.<br>
Explican los derechos que usted nos otorga cuando usa QRGEN.<br>
Describen las reglas que todo el mundo debe respetar al utilizar QRGEN.
Por favor, lea detenidamente estos Términos, así como nuestra Política de Privacidad y cualesquiera otros documentos mencionados en estos Términos.
Comencemos...
<br><br>

1. ACCESO AL SITIO WEB Y ACEPTACIÓN
El acceso al Sitio web es gratuito salvo en la parte relativa al coste de la conexión a través de la red de telecomunicaciones suministrada por el proveedor de acceso a Internet que hayas contratado. Puedes navegar libremente por el Sitio web y acceder al mismo tantas veces como quieras. Para acceder y navegar por el Sitio web no es necesario que te registres, excepto si quieres contratar un servicio.
El uso del sitio web te atribuye la condición de usuario del sitio web (en adelante, el "Usuario") e implica tu aceptación plena y sin reservas de las presentes condiciones de uso, así como de la Política de Privacidad y la Política de Cookies del Sitio web. Además, te comprometes a no usar el Servicio para fines ilegales.
Al acceder al Sitio web y navegar por él, declaras bajo tu responsabilidad que eres mayor de edad y que dispones de la capacidad legal necesaria para acceder al Sitio Web y usarlo, declarando igualmente que comprendes y aceptas íntegramente y sin reservas las presentes condiciones de uso.
Por otro lado, te informamos que por motivos legales archivamos los documentos electrónicos en que quedan formalizadas las compras. Podrás acceder a dichos documentos en cualquier momento solicitándolo en: info@QRGEN.mobi.
<br><br>
2. CONDICIONES DE USO DEL SITIO WEB
El Usuario se compromete a usar el Sitio web conforme a las presentes condiciones de uso, la legislación vigente y la buena fe. Así, el Usuario responderá ante QRGEN. y ante cualquier tercero por los daños y perjuicios derivados del uso contrario a las presentes condiciones, a la legislación y a la buena fe que haga el Usuario del Sitio web.
<br>
3. DESCRIPCIÓN DEL SERVICIO
A través del Servicio, QRGEN permite la suscripción al servicio para llevar a cabo la creación de códigos QR y análisis.
El idioma en el que se perfeccionará el contrato entre QRGEN y el comprador será el del país de origen.
El proceso de compra en el servicio online será el siguiente:
<br><br>
Debes registrarte en la página web con un usuario y contraseña.
En el momento de llevar a cabo el registro deberás incluir tu número de tarjeta.
Al pulsar "Aceptar" dará comienzo el Servicio con el plan de prueba previsto por un periodo de 14 días por un importe de 0,50 €.
Una vez transcurrido este período, si el usuario no ha cancelado la suscripción, nos está autorizando a poder realizar un cargo de 200,00 € para el plan anual.
Finalizada la compra del servicio, el usuario dispondrá de un panel de administración donde encontrará:
Una sección con el listado de todos códigos QR creados con la opción de poder editar, eliminar, o bien consultar los detalles.
Una sección de Planes y pagos para consultar las facturas y cancelar la suscripción.
Una sección de Análisis con las estadísticas de sus códigos QR.
Una sección de Mi Cuenta para poder cambiar preferencias de la cuenta.
Una vez realizada la compra del servicio, se confirmará mediante el envío de un correo electrónico, en un plazo máximo de 24 horas, a la dirección que hayas indicado. En el mismo se indicará el servicio, como cancelar la suscripción, su importe, impuestos aplicables, la forma de pago y los términos y condiciones aplicables.
<br><br>
5.1 Suscripción
La suscripción al Servicio es anual por un importe de 200,00 € y se renovará automáticamente por el mismo periodo de tiempo hasta su terminación. A menos que canceles tu suscripción, nos autorizas a cargar la cuota de suscripción anual correspondiente en tu método de pago.
Puedes cancelar tu suscripción al Servicio cuando quieras, y seguirás teniendo acceso al mismo hasta el final de tu periodo de facturación anual. En la medida en que lo permita la ley, los pagos no son reembolsables y no facilitamos devoluciones ni abonos por períodos parciales de suscripción anual.

 <br><br>
7. FORMA DE PAGO
El pago online del servicio adquirido se podrá realizar mediante tarjeta de crédito o débito.
En este sentido, QRGEN informa a los titulares de las tarjetas de crédito y débito que las transacciones en la tienda online se realizan en una pasarela de pago segura, utilizándose la tecnología SSL para garantizar la seguridad en la transmisión de los datos.
<br><br>
8. DERECHO DE DESISTIMIENTO Y REEMBOLSOS
8.1. Derecho de desistimiento
Dado el tipo de producto comercializado en nuestro servicio online, software en formato digital de códigos QR, no será aplicable el derecho de desistimiento de acuerdo al artículo 103, letra m) del Real Decreto Legislativo 1/2007, de 16 de noviembre, por el que se aprueba el texto refundido de la Ley General para la Defensa de los Consumidores y Usuarios y otras leyes complementarias.
<br><br>
8.2. Reembolsos
Con independencia del plan elegido por el usuario, los importes abonados por el usuario y en la medida que permita la ley no serán reembolsables.
El servicio contratado no podrá ser cedido ni transferido a otros usuarios del Servicio.
En todo caso, el usuario podrá hacer uso del servicio contratado hasta la finalización del periodo contratado.
<br><br>
9. VALIDEZ DE LAS OFERTAS
Los servicios ofertados en el Servicio, y los precios de éstos, estarán disponibles para su adquisición mientras se encuentren en el catálogo de servicios visualizados por medio de esta web.
En todo caso, QRGEN se reserva el derecho de efectuar en el Servicio las modificaciones que considere oportunas, pudiendo actualizar productos y servicios en función del mercado.
QRGEN se reserva el derecho de cambiar los precios sin aviso previo.
Te informamos que a pesar de las actualizaciones que se realizan a los precios del Servicio, éstos podrían contener errores. Corregiremos con prontitud todos los errores que aparezcan, pero no serán vinculantes con el Servicio.
<br><br>
10. SEGURIDAD
Como se ha indicado anteriormente, todo el procedimiento de compra, así como la transmisión de tus datos personales y los sistemas de pago, se efectúa en una página segura y de forma cifrada a través del protocolo SSL.
Garantizamos la seguridad del Servicio conforme a los presentes conocimientos tecnológicos. Sin embargo, QRGEN no puede garantizar la total seguridad futura del Servicio. En todo caso, sí nos comprometemos a subsanar y a implementar las medidas correctoras oportunas para corregir un posible fallo de seguridad lo antes posible.
Te comprometes a notificar a QRGEN, de forma inmediata y a través del email info@QRGEN.mobi cualquier situación que pudiera conducir a la suplantación de la identidad de un usuario.
<br><br>
11. MODIFICACIONES Y NULIDAD
Podremos actualizar los términos y condiciones del Servicio en el futuro, así como características y funciones del propio Servicio.
Te informaremos sobre los cambios en términos y condiciones colocando un aviso en un lugar prominente de nuestro sitio web y/o por correo electrónico.
Si cualquier cláusula incluida en estos términos y condiciones fuese declarada, total o parcialmente, nula o ineficaz, la misma solo afectará a dicha disposición o a la parte de la misma que resulte nula o ineficaz. Subsistirán los términos y condiciones en todo lo demás, teniéndose tal disposición, o la parte de la misma que resultase afectada, por no puesta.
<br><br>
12. RECLAMACIONES Y ACCIONES DERIVADAS DEL CONTRATO
Hasta donde sea posible, este Servicio se rige por la legislación española.
Con el fin de simplificar la resolución de reclamaciones por la vía civil y reducir costes, no excluimos la posibilidad de someternos ante un Arbitraje de Equidad de la Corte de Arbitraje de las Cámaras de Comercio e Industria.
En este sentido, y según la normativa aplicable, QRGEN informa de la existencia de una plataforma europea de resolución de litigios en línea que facilita la resolución extrajudicial de dichos litigios para contratos celebrados igualmente en línea entre consumidores y prestadores de servicios de Internet. A dicha plataforma se podrá acceder a través de la siguiente página web: http://ec.europa.eu/odr
<br><br>
13. DERECHOS DE PROPIEDAD INTELECTUAL E INDUSTRIAL
El Sitio web y sus contenidos son objeto de protección en aplicación de la normativa vigente nacional en materia de Propiedad Intelectual y/o Industrial, así como en aplicación de los convenios internacionales aplicables en dichas materias. QRGEN es la titular o tiene debidamente licenciados todos los derechos de Propiedad Intelectual e Industrial sobre el Sitio web y sus contenidos.
Queda prohibida cualquier forma de reproducción, distribución, comunicación pública, transformación, puesta a disposición y, en general, cualquier otro acto de explotación tenga o no fines comerciales del Sitio web o de sus contenidos, sin el previo consentimiento previo y expreso de QRGEN. Queda expresamente prohibido borrar los datos identificativos de QRGEN como titular de los derechos de Propiedad Intelectual e Industrial del Sitio web o sus contenidos.
QRGEN se reserva todos los derechos de Propiedad Intelectual e Industrial sobre el Sitio web y sus contenidos, reservándose asimismo el ejercicio de cuantas acciones legales le correspondan con el fin de cesar, impedir o perseguir cualquier uso ilícito del Sitio Web o de sus contenidos. En ningún caso y bajo ningún concepto el acceso al Sitio web o su uso por el Usuario o terceros constituyen o suponen una cesión de ningún tipo por parte de QRGEN de los derechos de Propiedad Intelectual o Industrial del Sitio web o sus contenidos. En ningún caso la falta de requerimiento por parte de QRGEN al cese de uso del Sitio web o de sus contenidos ilícitos o contrarios a las presentes condiciones podrá entenderse como consentimiento tácito por parte de QRGEN a dichos usos o como una renuncia al ejercicio de cualquier acción legal que pudiera corresponderle.
<br><br>
14. RESPONSABILIDADES Y GARANTÍAS
El Usuario deberá usar el Sitio Web y sus contenidos conforme a lo establecido en las presentes condiciones de uso, la legislación vigente y la buena fe. Queda expresamente prohibido cualquier uso de la web o sus contenidos contrario a las presentes condiciones generales, la ley o la buena fe, independientemente de que dicho uso tenga o no finalidad económica.
El Usuario será responsable de cualquier daño o perjuicio causado a QRGEN o a terceros derivado directa o indirectamente de cualquier uso que el Usuario haga del Sitio web o de sus contenidos contrario a las presentes condiciones, la ley, la moral, el orden público o la buena fe.
Para que el Sitio web y sus contenidos estén accesibles para el Usuario, QRGEN requiere de servicios proporcionados por terceros. Es posible que a pesar de los esfuerzos que realiza QRGEN para mantener el Sitio web disponible y accesible para los usuarios, la disponibilidad del mismo puede verse suspendida, interrumpida o cancelada por causas ajenas a QRGEN. Es por ello que QRGEN no garantiza la inexistencia de interrupciones o errores en el acceso al Sitio web o sus contenidos ni que estos se encuentren actualizados o se muestren siempre en su última versión. En consecuencia, QRGEN declina cualquier responsabilidad por los daños o perjuicios que puedan derivarse al Usuario o a terceros como consecuencia de la suspensión, interrupción, falta de continuidad, caída de red o desconexión del Sitio web.
En ningún caso y bajo ningún concepto responderá QRGEN por los daños o perjuicios derivados al usuario de causas no imputables a QRGEN tales como, a mero título ejemplificativo y en ningún caso limitativo, catástrofes naturales, situaciones de fuerza mayor o urgencia extrema, virus, componentes dañinos, mal funcionamiento del navegador, caídas de red, intrusiones informáticas o ataques de terceros.
<br><br>
15. ENLACES
Las webs, plataformas, foros, chats, blogs o redes sociales ajenos que enlacen o vinculen al Sitio web deberán informar claramente que no cuentan con la autorización, ni la supervisión de QRGEN y que dicha vinculación o enlace no conlleva, supone o implica asociación de ningún tipo entre QRGEN y las webs, plataformas, foros, chats, blogs o redes sociales ajenos que enlacen o vinculen al Sitio web.
En todo caso, cualquier enlace que tenga como destino el Sitio web deberá dirigirse de manera directa al home page o página de inicio del Sitio web mediante un click a la dirección URL de la web abarcando la totalidad de la pantalla del home page o página de inicio del Sitio web, de manera que el enlace sea absoluto y completo sin que puedan usarse marcos, frames o hyperlinks.
QRGEN no responde en ningún caso y bajo ninguna circunstancia de los contenidos, informaciones o datos relativos a la web, a sus contenidos o a cualquier otra materia que contengan las webs, plataformas, foros, chats, blogs o redes sociales ajenos que enlacen o vinculen al Sitio web.
Queda expresamente prohibido enlazar o vincular al Sitio web desde webs, plataformas, foros, chats, blogs o redes sociales contrarias a la ley, la moral y las buenas costumbres, especialmente aquellas con contenidos pornográficos, ilícitos, ilegales o atentatorios contra los derechos humanos.
Por otro lado, el Sitio web puede contener enlaces a webs, plataformas, foros, chats, blogs o redes sociales de terceros. QRGEN no dispone de medios humanos y/o técnicos para conocer o controlar la información y los contenidos que aparecen en los sitios webs de terceros. Por ello, en ningún caso será responsable QRGEN del contenido de los sitios enlazados y bajo ningún concepto dichos enlaces podrán considerarse conocimiento efectivo del contenido de los sitios a los que enlazan.
<br><br>
16. PROTECCIÓN DE DATOS
Tal y como se establece en su Política de Privacidad, QRGEN se compromete en la utilización de los datos de los Usuarios, a respetar su confidencialidad y a utilizarlos de acuerdo con la finalidad del tratamiento, así como a dar cumplimiento a su obligación de guardarlos y adaptar todas las medidas para evitar la alteración, pérdida, tratamiento o acceso no autorizado de acuerdo con lo establecido en la legislación vigente referente a la protección de datos de carácter personal.
<br><br>
El Sitio web incorpora las salvaguardas adecuadas y utiliza la tecnología estándar del sector para mejorar la seguridad, integridad, exhaustividad, exactitud y protección de los datos personales que tiene recopilados, y ha establecido las precauciones razonables para proteger esa información de posibles pérdidas o malos usos. Sus normas sobre protección de datos y seguridad se revisan periódicamente y se mejoran cuando es necesario, y se esfuerza para asegurar que sólo las personas autorizadas puedan acceder a la información que proporciona el Usuario.
Para saber más sobre la gestión y tratamiento que realiza QRGEN de tus datos por favor lee nuestra Política de Privacidad y nuestra Política de Cookies.
<br><br>
17. DURACIÓN Y MODIFICACIÓN
Las presentes condiciones de uso estarán vigentes durante el tiempo que estén expuestas a los usuarios, de manera que en cuanto sean modificadas o actualizadas total o parcialmente, las presentes condiciones dejarán de estar vigentes, siendo las nuevas condiciones de uso las que pasen a regular el uso del Sitio web.
QRGEN se reserva la facultad de revisar, modificar o actualizar en cualquier momento las presentes condiciones de uso. Ante cualquier cambio en las presentes condiciones de uso por cualquier causa, QRGEN avisará a los usuarios en el home page de la web sobre dicha circunstancia con el fin de que estos estén debidamente informados y puedan consultar las revisiones, modificaciones o actualizaciones de las presentes condiciones de uso a su entera satisfacción.
<br><br>
18. GENERALIDADES
En ningún caso y bajo ningún concepto la falta de ejercicio de sus derechos por parte de QRGEN podrá entenderse como una renuncia a los mismos.
Los encabezamientos contenidos en las presentes condiciones son meramente orientativas o informativas, de manera que no afectan, califican o amplían la interpretación de las mismas.
En el caso de que cualquiera de las cláusulas contenidas en las presentes condiciones fuera declarada nula, abusiva o inaplicable, total o parcialmente, por un órgano judicial o administrativo, dicha declaración afectará de manera individual a la cláusula en cuestión, teniéndose la misma por no puesta y sin que la declaración de nulidad, abuso o inaplicabilidad pueda extenderse bajo ningún concepto al resto de condiciones, que subsistirán.
Las presentes condiciones de uso, así como la Política de Privacidad y la Política de Cookies se rigen por la normativa española vigente en cada momento.

'); ?></p>
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