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
"><?php $translate->echoTranslate('Condiciones de uso y Contrataci??n
'); ?></h2>
</section>
<section id="containerfaq" style="background: rgb(229, 231, 239); margin-top:40px">
    <div class="item">
        <p><?php $translate->echoTranslate('Los T??rminos que encontrar?? a continuaci??n son importantes porque:'); ?></p>
        <p><?php $translate->echoTranslate('Establecen sus derechos legales en QRGEN.<br>
Explican los derechos que usted nos otorga cuando usa QRGEN.<br>
Describen las reglas que todo el mundo debe respetar al utilizar QRGEN.
Por favor, lea detenidamente estos T??rminos, as?? como nuestra Pol??tica de Privacidad y cualesquiera otros documentos mencionados en estos T??rminos.
Comencemos...
<br><br>

1. ACCESO AL SITIO WEB Y ACEPTACI??N
El acceso al Sitio web es gratuito salvo en la parte relativa al coste de la conexi??n a trav??s de la red de telecomunicaciones suministrada por el proveedor de acceso a Internet que hayas contratado. Puedes navegar libremente por el Sitio web y acceder al mismo tantas veces como quieras. Para acceder y navegar por el Sitio web no es necesario que te registres, excepto si quieres contratar un servicio.
El uso del sitio web te atribuye la condici??n de usuario del sitio web (en adelante, el "Usuario") e implica tu aceptaci??n plena y sin reservas de las presentes condiciones de uso, as?? como de la Pol??tica de Privacidad y la Pol??tica de Cookies del Sitio web. Adem??s, te comprometes a no usar el Servicio para fines ilegales.
Al acceder al Sitio web y navegar por ??l, declaras bajo tu responsabilidad que eres mayor de edad y que dispones de la capacidad legal necesaria para acceder al Sitio Web y usarlo, declarando igualmente que comprendes y aceptas ??ntegramente y sin reservas las presentes condiciones de uso.
Por otro lado, te informamos que por motivos legales archivamos los documentos electr??nicos en que quedan formalizadas las compras. Podr??s acceder a dichos documentos en cualquier momento solicit??ndolo en: info@QRGEN.mobi.
<br><br>
2. CONDICIONES DE USO DEL SITIO WEB
El Usuario se compromete a usar el Sitio web conforme a las presentes condiciones de uso, la legislaci??n vigente y la buena fe. As??, el Usuario responder?? ante QRGEN. y ante cualquier tercero por los da??os y perjuicios derivados del uso contrario a las presentes condiciones, a la legislaci??n y a la buena fe que haga el Usuario del Sitio web.
<br>
3. DESCRIPCI??N DEL SERVICIO
A trav??s del Servicio, QRGEN permite la suscripci??n al servicio para llevar a cabo la creaci??n de c??digos QR y an??lisis.
El idioma en el que se perfeccionar?? el contrato entre QRGEN y el comprador ser?? el del pa??s de origen.
El proceso de compra en el servicio online ser?? el siguiente:
<br><br>
Debes registrarte en la p??gina web con un usuario y contrase??a.
En el momento de llevar a cabo el registro deber??s incluir tu n??mero de tarjeta.
Al pulsar "Aceptar" dar?? comienzo el Servicio con el plan de prueba previsto por un periodo de 14 d??as por un importe de 0,50 ???.
Una vez transcurrido este per??odo, si el usuario no ha cancelado la suscripci??n, nos est?? autorizando a poder realizar un cargo de 200,00 ??? para el plan anual.
Finalizada la compra del servicio, el usuario dispondr?? de un panel de administraci??n donde encontrar??:
Una secci??n con el listado de todos c??digos QR creados con la opci??n de poder editar, eliminar, o bien consultar los detalles.
Una secci??n de Planes y pagos para consultar las facturas y cancelar la suscripci??n.
Una secci??n de An??lisis con las estad??sticas de sus c??digos QR.
Una secci??n de Mi Cuenta para poder cambiar preferencias de la cuenta.
Una vez realizada la compra del servicio, se confirmar?? mediante el env??o de un correo electr??nico, en un plazo m??ximo de 24 horas, a la direcci??n que hayas indicado. En el mismo se indicar?? el servicio, como cancelar la suscripci??n, su importe, impuestos aplicables, la forma de pago y los t??rminos y condiciones aplicables.
<br><br>
5.1 Suscripci??n
La suscripci??n al Servicio es anual por un importe de 200,00 ??? y se renovar?? autom??ticamente por el mismo periodo de tiempo hasta su terminaci??n. A menos que canceles tu suscripci??n, nos autorizas a cargar la cuota de suscripci??n anual correspondiente en tu m??todo de pago.
Puedes cancelar tu suscripci??n al Servicio cuando quieras, y seguir??s teniendo acceso al mismo hasta el final de tu periodo de facturaci??n anual. En la medida en que lo permita la ley, los pagos no son reembolsables y no facilitamos devoluciones ni abonos por per??odos parciales de suscripci??n anual.

 <br><br>
7. FORMA DE PAGO
El pago online del servicio adquirido se podr?? realizar mediante tarjeta de cr??dito o d??bito.
En este sentido, QRGEN informa a los titulares de las tarjetas de cr??dito y d??bito que las transacciones en la tienda online se realizan en una pasarela de pago segura, utiliz??ndose la tecnolog??a SSL para garantizar la seguridad en la transmisi??n de los datos.
<br><br>
8. DERECHO DE DESISTIMIENTO Y REEMBOLSOS
8.1. Derecho de desistimiento
Dado el tipo de producto comercializado en nuestro servicio online, software en formato digital de c??digos QR, no ser?? aplicable el derecho de desistimiento de acuerdo al art??culo 103, letra m) del Real Decreto Legislativo 1/2007, de 16 de noviembre, por el que se aprueba el texto refundido de la Ley General para la Defensa de los Consumidores y Usuarios y otras leyes complementarias.
<br><br>
8.2. Reembolsos
Con independencia del plan elegido por el usuario, los importes abonados por el usuario y en la medida que permita la ley no ser??n reembolsables.
El servicio contratado no podr?? ser cedido ni transferido a otros usuarios del Servicio.
En todo caso, el usuario podr?? hacer uso del servicio contratado hasta la finalizaci??n del periodo contratado.
<br><br>
9. VALIDEZ DE LAS OFERTAS
Los servicios ofertados en el Servicio, y los precios de ??stos, estar??n disponibles para su adquisici??n mientras se encuentren en el cat??logo de servicios visualizados por medio de esta web.
En todo caso, QRGEN se reserva el derecho de efectuar en el Servicio las modificaciones que considere oportunas, pudiendo actualizar productos y servicios en funci??n del mercado.
QRGEN se reserva el derecho de cambiar los precios sin aviso previo.
Te informamos que a pesar de las actualizaciones que se realizan a los precios del Servicio, ??stos podr??an contener errores. Corregiremos con prontitud todos los errores que aparezcan, pero no ser??n vinculantes con el Servicio.
<br><br>
10. SEGURIDAD
Como se ha indicado anteriormente, todo el procedimiento de compra, as?? como la transmisi??n de tus datos personales y los sistemas de pago, se efect??a en una p??gina segura y de forma cifrada a trav??s del protocolo SSL.
Garantizamos la seguridad del Servicio conforme a los presentes conocimientos tecnol??gicos. Sin embargo, QRGEN no puede garantizar la total seguridad futura del Servicio. En todo caso, s?? nos comprometemos a subsanar y a implementar las medidas correctoras oportunas para corregir un posible fallo de seguridad lo antes posible.
Te comprometes a notificar a QRGEN, de forma inmediata y a trav??s del email info@QRGEN.mobi cualquier situaci??n que pudiera conducir a la suplantaci??n de la identidad de un usuario.
<br><br>
11. MODIFICACIONES Y NULIDAD
Podremos actualizar los t??rminos y condiciones del Servicio en el futuro, as?? como caracter??sticas y funciones del propio Servicio.
Te informaremos sobre los cambios en t??rminos y condiciones colocando un aviso en un lugar prominente de nuestro sitio web y/o por correo electr??nico.
Si cualquier cl??usula incluida en estos t??rminos y condiciones fuese declarada, total o parcialmente, nula o ineficaz, la misma solo afectar?? a dicha disposici??n o a la parte de la misma que resulte nula o ineficaz. Subsistir??n los t??rminos y condiciones en todo lo dem??s, teni??ndose tal disposici??n, o la parte de la misma que resultase afectada, por no puesta.
<br><br>
12. RECLAMACIONES Y ACCIONES DERIVADAS DEL CONTRATO
Hasta donde sea posible, este Servicio se rige por la legislaci??n espa??ola.
Con el fin de simplificar la resoluci??n de reclamaciones por la v??a civil y reducir costes, no excluimos la posibilidad de someternos ante un Arbitraje de Equidad de la Corte de Arbitraje de las C??maras de Comercio e Industria.
En este sentido, y seg??n la normativa aplicable, QRGEN informa de la existencia de una plataforma europea de resoluci??n de litigios en l??nea que facilita la resoluci??n extrajudicial de dichos litigios para contratos celebrados igualmente en l??nea entre consumidores y prestadores de servicios de Internet. A dicha plataforma se podr?? acceder a trav??s de la siguiente p??gina web: http://ec.europa.eu/odr
<br><br>
13. DERECHOS DE PROPIEDAD INTELECTUAL E INDUSTRIAL
El Sitio web y sus contenidos son objeto de protecci??n en aplicaci??n de la normativa vigente nacional en materia de Propiedad Intelectual y/o Industrial, as?? como en aplicaci??n de los convenios internacionales aplicables en dichas materias. QRGEN es la titular o tiene debidamente licenciados todos los derechos de Propiedad Intelectual e Industrial sobre el Sitio web y sus contenidos.
Queda prohibida cualquier forma de reproducci??n, distribuci??n, comunicaci??n p??blica, transformaci??n, puesta a disposici??n y, en general, cualquier otro acto de explotaci??n tenga o no fines comerciales del Sitio web o de sus contenidos, sin el previo consentimiento previo y expreso de QRGEN. Queda expresamente prohibido borrar los datos identificativos de QRGEN como titular de los derechos de Propiedad Intelectual e Industrial del Sitio web o sus contenidos.
QRGEN se reserva todos los derechos de Propiedad Intelectual e Industrial sobre el Sitio web y sus contenidos, reserv??ndose asimismo el ejercicio de cuantas acciones legales le correspondan con el fin de cesar, impedir o perseguir cualquier uso il??cito del Sitio Web o de sus contenidos. En ning??n caso y bajo ning??n concepto el acceso al Sitio web o su uso por el Usuario o terceros constituyen o suponen una cesi??n de ning??n tipo por parte de QRGEN de los derechos de Propiedad Intelectual o Industrial del Sitio web o sus contenidos. En ning??n caso la falta de requerimiento por parte de QRGEN al cese de uso del Sitio web o de sus contenidos il??citos o contrarios a las presentes condiciones podr?? entenderse como consentimiento t??cito por parte de QRGEN a dichos usos o como una renuncia al ejercicio de cualquier acci??n legal que pudiera corresponderle.
<br><br>
14. RESPONSABILIDADES Y GARANT??AS
El Usuario deber?? usar el Sitio Web y sus contenidos conforme a lo establecido en las presentes condiciones de uso, la legislaci??n vigente y la buena fe. Queda expresamente prohibido cualquier uso de la web o sus contenidos contrario a las presentes condiciones generales, la ley o la buena fe, independientemente de que dicho uso tenga o no finalidad econ??mica.
El Usuario ser?? responsable de cualquier da??o o perjuicio causado a QRGEN o a terceros derivado directa o indirectamente de cualquier uso que el Usuario haga del Sitio web o de sus contenidos contrario a las presentes condiciones, la ley, la moral, el orden p??blico o la buena fe.
Para que el Sitio web y sus contenidos est??n accesibles para el Usuario, QRGEN requiere de servicios proporcionados por terceros. Es posible que a pesar de los esfuerzos que realiza QRGEN para mantener el Sitio web disponible y accesible para los usuarios, la disponibilidad del mismo puede verse suspendida, interrumpida o cancelada por causas ajenas a QRGEN. Es por ello que QRGEN no garantiza la inexistencia de interrupciones o errores en el acceso al Sitio web o sus contenidos ni que estos se encuentren actualizados o se muestren siempre en su ??ltima versi??n. En consecuencia, QRGEN declina cualquier responsabilidad por los da??os o perjuicios que puedan derivarse al Usuario o a terceros como consecuencia de la suspensi??n, interrupci??n, falta de continuidad, ca??da de red o desconexi??n del Sitio web.
En ning??n caso y bajo ning??n concepto responder?? QRGEN por los da??os o perjuicios derivados al usuario de causas no imputables a QRGEN tales como, a mero t??tulo ejemplificativo y en ning??n caso limitativo, cat??strofes naturales, situaciones de fuerza mayor o urgencia extrema, virus, componentes da??inos, mal funcionamiento del navegador, ca??das de red, intrusiones inform??ticas o ataques de terceros.
<br><br>
15. ENLACES
Las webs, plataformas, foros, chats, blogs o redes sociales ajenos que enlacen o vinculen al Sitio web deber??n informar claramente que no cuentan con la autorizaci??n, ni la supervisi??n de QRGEN y que dicha vinculaci??n o enlace no conlleva, supone o implica asociaci??n de ning??n tipo entre QRGEN y las webs, plataformas, foros, chats, blogs o redes sociales ajenos que enlacen o vinculen al Sitio web.
En todo caso, cualquier enlace que tenga como destino el Sitio web deber?? dirigirse de manera directa al home page o p??gina de inicio del Sitio web mediante un click a la direcci??n URL de la web abarcando la totalidad de la pantalla del home page o p??gina de inicio del Sitio web, de manera que el enlace sea absoluto y completo sin que puedan usarse marcos, frames o hyperlinks.
QRGEN no responde en ning??n caso y bajo ninguna circunstancia de los contenidos, informaciones o datos relativos a la web, a sus contenidos o a cualquier otra materia que contengan las webs, plataformas, foros, chats, blogs o redes sociales ajenos que enlacen o vinculen al Sitio web.
Queda expresamente prohibido enlazar o vincular al Sitio web desde webs, plataformas, foros, chats, blogs o redes sociales contrarias a la ley, la moral y las buenas costumbres, especialmente aquellas con contenidos pornogr??ficos, il??citos, ilegales o atentatorios contra los derechos humanos.
Por otro lado, el Sitio web puede contener enlaces a webs, plataformas, foros, chats, blogs o redes sociales de terceros. QRGEN no dispone de medios humanos y/o t??cnicos para conocer o controlar la informaci??n y los contenidos que aparecen en los sitios webs de terceros. Por ello, en ning??n caso ser?? responsable QRGEN del contenido de los sitios enlazados y bajo ning??n concepto dichos enlaces podr??n considerarse conocimiento efectivo del contenido de los sitios a los que enlazan.
<br><br>
16. PROTECCI??N DE DATOS
Tal y como se establece en su Pol??tica de Privacidad, QRGEN se compromete en la utilizaci??n de los datos de los Usuarios, a respetar su confidencialidad y a utilizarlos de acuerdo con la finalidad del tratamiento, as?? como a dar cumplimiento a su obligaci??n de guardarlos y adaptar todas las medidas para evitar la alteraci??n, p??rdida, tratamiento o acceso no autorizado de acuerdo con lo establecido en la legislaci??n vigente referente a la protecci??n de datos de car??cter personal.
<br><br>
El Sitio web incorpora las salvaguardas adecuadas y utiliza la tecnolog??a est??ndar del sector para mejorar la seguridad, integridad, exhaustividad, exactitud y protecci??n de los datos personales que tiene recopilados, y ha establecido las precauciones razonables para proteger esa informaci??n de posibles p??rdidas o malos usos. Sus normas sobre protecci??n de datos y seguridad se revisan peri??dicamente y se mejoran cuando es necesario, y se esfuerza para asegurar que s??lo las personas autorizadas puedan acceder a la informaci??n que proporciona el Usuario.
Para saber m??s sobre la gesti??n y tratamiento que realiza QRGEN de tus datos por favor lee nuestra Pol??tica de Privacidad y nuestra Pol??tica de Cookies.
<br><br>
17. DURACI??N Y MODIFICACI??N
Las presentes condiciones de uso estar??n vigentes durante el tiempo que est??n expuestas a los usuarios, de manera que en cuanto sean modificadas o actualizadas total o parcialmente, las presentes condiciones dejar??n de estar vigentes, siendo las nuevas condiciones de uso las que pasen a regular el uso del Sitio web.
QRGEN se reserva la facultad de revisar, modificar o actualizar en cualquier momento las presentes condiciones de uso. Ante cualquier cambio en las presentes condiciones de uso por cualquier causa, QRGEN avisar?? a los usuarios en el home page de la web sobre dicha circunstancia con el fin de que estos est??n debidamente informados y puedan consultar las revisiones, modificaciones o actualizaciones de las presentes condiciones de uso a su entera satisfacci??n.
<br><br>
18. GENERALIDADES
En ning??n caso y bajo ning??n concepto la falta de ejercicio de sus derechos por parte de QRGEN podr?? entenderse como una renuncia a los mismos.
Los encabezamientos contenidos en las presentes condiciones son meramente orientativas o informativas, de manera que no afectan, califican o ampl??an la interpretaci??n de las mismas.
En el caso de que cualquiera de las cl??usulas contenidas en las presentes condiciones fuera declarada nula, abusiva o inaplicable, total o parcialmente, por un ??rgano judicial o administrativo, dicha declaraci??n afectar?? de manera individual a la cl??usula en cuesti??n, teni??ndose la misma por no puesta y sin que la declaraci??n de nulidad, abuso o inaplicabilidad pueda extenderse bajo ning??n concepto al resto de condiciones, que subsistir??n.
Las presentes condiciones de uso, as?? como la Pol??tica de Privacidad y la Pol??tica de Cookies se rigen por la normativa espa??ola vigente en cada momento.

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