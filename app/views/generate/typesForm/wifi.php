<?php $translate = Translate::getInstance(); ?>
<input type="text" name="typeText" value='wifi' hidden />
<div class="containerItem">
    <h3 class="title"><?php $translate->echoTranslate('Nombre de tu código QR'); ?></h3>
    <input type="text" name="qrName" placeholder="<?php $translate->echoTranslate('Ej. Mi código QR'); ?>" required>
</div>
<div class="containerItem">
    <h3 class="title"><?php $translate->echoTranslate('Información'); ?></h3>
    <label class="label" for="name"><?php $translate->echoTranslate('Nombre de la red'); ?> (SSID)</label>
    <input type="text" name="nameWifi" placeholder="HomeWIFI">
    <label class="label" for="password"><?php $translate->echoTranslate('Contraseña de la red'); ?> (SSID)</label>
    <input type="password" name="passwordWifi" placeholder="Ej. micontraseña">
</div>