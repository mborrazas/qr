<?php $translate = Translate::getInstance(); ?>
<input type="text" name="typeText" value='website' hidden/>
<div class="containerItem">
    <h3 class="title"><?php $translate->echoTranslate('Nombre de tu código QR'); ?></h3>
    <input type="text" name="qrName" required placeholder="<?php $translate->echoTranslate('Ej. Mi código QR'); ?>" />
</div>
<div class="containerItem">
    <h3 class="title"><?php $translate->echoTranslate('Información de la página web'); ?></h3>
    <label class="label" for="url"><?php $translate->echoTranslate('URL de la página web'); ?></label>
    <input type="url" name="url" required placeholder="Ej. https://www.miweb.com/" />
</div>
