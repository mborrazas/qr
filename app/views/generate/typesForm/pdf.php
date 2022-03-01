<?php $translate = Translate::getInstance(); ?>
<input type="text" name="typeText" value='pdf' hidden />
<div class="containerItem">
    <h3 class="title"><?php $translate->echoTranslate('Nombre de tu código QR'); ?></h3>
    <input type="text" name="qrName" placeholder="<?php $translate->echoTranslate('Ej. Mi código QR'); ?>" required>
</div>

<div class="containerItem">
    <h3 class="title"><?php $translate->echoTranslate('Diseño'); ?></h3>
    <button type="button" class="btnDesign" data-first="#0E379A" data-second="#000000">
        <span style="background-color: #0E379A;"></span>
        <span style="background-color: #000000;"></span>
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
    <label class="custom-file-upload">
        <input type="file" name="pdf" accept="application/pdf" >
        <i class="fas fa-upload"></i> <?php $translate->echoTranslate('Selecciona el pdf'); ?>
    </label>
    <div id="onlypdfCheck">
        <input type="checkbox" name="onlypdf">
        <label for="onlypdf">
        <?php $translate->echoTranslate('Solo mostrar pdf'); ?>
        </label>
    </div>
</div>
<div class="containerItem">
    <h3 class="title"><?php $translate->echoTranslate('Información de pdf'); ?></h3>
    <label class="label" for="company"><?php $translate->echoTranslate('Empresa'); ?></label>
    <input type="text" name="company" placeholder="Ej. Tech & Corp">
    <label class="label" for="title"><?php $translate->echoTranslate('Título del pdf'); ?></label>
    <input type="text" name="title" placeholder="Ej. Manifiesto">
    <label class="label" for="description"><?php $translate->echoTranslate('Descripción'); ?></label>
    <input type="text" name="description" placeholder="Ej. Full Tech Manifiesto">
    <label class="label" for="website"><?php $translate->echoTranslate('Sitio web'); ?></label>
    <input type="text" name="website" placeholder="Ej. https://www.google.com">
</div>
