<?php $translate = Translate::getInstance(); ?>
<input type="text" name="typeText" value='menu' hidden />
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
            <input type="color" id="backgroundLink" name="backgroundLink" value="#2F6BFD">
            <div class="info">
                <h2><?php $translate->echoTranslate('Color secundario'); ?></h2>
            </div>
        </div>
    </div>
</div>

<div class="containerItem">
    <h3 class="title"><?php $translate->echoTranslate('Información del Menú'); ?></h3>
    <label class="label" for="nameRistorante"><?php $translate->echoTranslate('Nombre del establecimiento'); ?></label>
    <input type="text" name="nameRistorante" placeholder="<?php $translate->echoTranslate('Ej. Ristorante Tavolo Grande'); ?>">
    <label class="label" for="description">Descripción</label>
    <input type="text" name="description" placeholder="<?php $translate->echoTranslate('Ej. Italian Trattoria'); ?>">
</div>
<div class="containerItem">
    <h3 class="title"<?php $translate->echoTranslate('Menú'); ?>></h3>
    <div id="sections">
        <div class="section">
            <p><?php $translate->echoTranslate('Seccion 1'); ?></p>
            <label for="name"><?php $translate->echoTranslate('Nombre'); ?></label>
            <input type="text" name="nameSection[]" placeholder="<?php $translate->echoTranslate('Ej. Entradas'); ?>">
            <input type="text" name="idSeccion[]" value="1" class="idSeccion" hidden />
            <label for="description"><?php $translate->echoTranslate('Descripcion'); ?></label>
            <input type="text" name="descriptionSection[]" placeholder="<?php $translate->echoTranslate('Ej. Las mejores entradas'); ?>">
            <div id="containerProducts">
                <div class="productMenu">
                    <input type="text" name="idProduct[]" value="1" class="idProduct" hidden />
                    <input type="file" name="productImg[]">
                    <input type="text" name="nameProduct[]" placeholder="Ej: Arroz" />
                    <input type="text" name="descriptionProduct[]" placeholder="Ej: El mejor" />
                    <input type="number" name="priceProduct[]" placeholder="Ej: 4.50">
                </div>
            </div>
            <button class="addArticleMenu"><?php $translate->echoTranslate('Agregar articulo'); ?></button>
        </div>
    </div>
    <button id="addSectionMenu"><?php $translate->echoTranslate('Agregar seccion'); ?></button>
</div>