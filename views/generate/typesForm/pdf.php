<input type="text" name="typeText" value='pdf' hidden />
<div class="containerItem">
    <h3 class="title">Nombre de tu código QR</h3>
    <input type="text" name="qrName" placeholder="Ej. Mi código QR" required>
</div>

<div class="containerItem">
    <h3 class="title">Diseño</h3>
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
                <h2>Color de fondo</h2>
            </div>
        </div>
        <div id="swatch">
            <input type="color" id="backgroundLink" name="backgroundLink" value="#00000">
            <div class="info">
                <h2>Color secundario</h2>
            </div>
        </div>
    </div>
</div>

<div class="containerItem">
    <h3 class="title">Archivo pdf</h3>
    <input type="file" name="pdf" >
</div>
<div class="containerItem">
    <h3 class="title">Información de pdf</h3>
    <label class="label" for="company">Empresa</label>
    <input type="text" name="company" placeholder="Ej. Tech & Corp">
    <label class="label" for="title">Título del pdf</label>
    <input type="text" name="title" placeholder="Ej. Manifiesto">
    <label class="label" for="description">Descripción</label>
    <input type="text" name="description" placeholder="Ej. Full Tech Manifiesto">
    <label class="label" for="website">Sitio web</label>
    <input type="text" name="website" placeholder="Ej. https://www.google.com">
</div>
