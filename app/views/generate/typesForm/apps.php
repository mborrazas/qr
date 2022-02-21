<?php $translate = Translate::getInstance(); ?>
<input type="text" name="typeText" value='apps' hidden />
<div class="containerItem">
    <h3 class="title"><?php $translate->echoTranslate('Nombre de tu código QR'); ?></h3>
    <input type="text" name="qrName" placeholder="<?php $translate->echoTranslate('Ej. Mi código QR'); ?>" required>
</div>
<div class="containerItem">
    <h3 class="title"><?php $translate->echoTranslate('Diseño'); ?></h3>
    <button type="button" class="btnDesign" data-first="#0E379A" data-second="#2F6BFD">
        <span style="background-color: #0E379A;"></span>
        <span style="background-color: #2F6BFD;"></span>
    </button>
    <button type="button" class="btnDesign" data-first="#28EDC9" data-second="#438E8E">
        <span style="background-color: #28EDC9;"></span>
        <span style="background-color: #438E8E;"></span>
    </button>
    <button type="button" class="btnDesign" data-first="#28ED28" data-second="#00A301">
        <span style="background-color: #28ED28;"></span>
        <span style="background-color: #00A301;"></span>
    </button>
    <button type="button" class="btnDesign" data-first="#EDE728" data-second="#A39E0A">
        <span style="background-color: #EDE728;"></span>
        <span style="background-color: #A39E0A;"></span>
    </button>
    <div id="containerStyles">
        <div id="swatch">
            <input type="color" id="background" name="background" value="#0E379A">
            <div class="info">
                <h2><?php $translate->echoTranslate('Color de fondo'); ?></h2>
            </div>
        </div>
        <div id="swatch">
            <input type="color" id="backgroundLink" name="backgroundLink" value="#00000">
            <div class="info">
                <h2><?php $translate->echoTranslate('Color secundario'); ?></h2>
            </div>
        </div>
    </div>
</div>

<div class="containerItem">
    <h3 class="title"><?php $translate->echoTranslate('Informacion de la app'); ?></h3>
    <label class="custom-file-upload">
        <input type="file" name="imgTitle"  accept="image/*">
        <i class="fas fa-upload"></i> <?php $translate->echoTranslate('Selecciona una imagen'); ?>
    </label>
    <label class="label" for="nameApp"><?php $translate->echoTranslate('Nombre'); ?></label>
    <input type="text" name="nameApp" placeholder="<?php $translate->echoTranslate('Eg. Myfintech'); ?>">
    <label class="label" for="appCompany"><?php $translate->echoTranslate('Desarolladores / Empresa'); ?></label>
    <input type="text" name="appCompany" placeholder="<?php $translate->echoTranslate('Eg. Techcorp'); ?>">
    <label class="label" for="description"><?php $translate->echoTranslate('Descripción'); ?></label>
    <input type="text" name="description" placeholder="<?php $translate->echoTranslate('Eg.'); ?>">
    <label class="label" for="website"><?php $translate->echoTranslate('Sitio web'); ?></label>
    <input type="text" name="website" placeholder="<?php $translate->echoTranslate('Eg. https://www.google.com'); ?>">
</div>
<div class="containerItem">
    <h3 class="title"><?php $translate->echoTranslate('Links de las plataformas'); ?></h3>
    <label class="label" for="apple"><?php $translate->echoTranslate('Apple'); ?></label>
    <input type="text" name="apple" placeholder="<?php $translate->echoTranslate('Apple'); ?>">
    <label class="label" for="android"><?php $translate->echoTranslate('Android'); ?></label>
    <input type="text" name="android" placeholder="<?php $translate->echoTranslate('Android'); ?>">
</div>
