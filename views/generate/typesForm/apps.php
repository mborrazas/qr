<input type="text" name="typeText" value='apps' hidden />
<div class="containerItem">
    <h3 class="title">Nombre de tu código QR</h3>
    <input type="text" name="qrName" placeholder="Ej. Mi código QR" required>
</div>
<div class="containerItem">
    <h3 class="title">Diseño</h3>
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
    <h3 class="title">Informacion de la app</h3>
    <label for="imgTitle" class="label">Imagen</label>
    <input type="file" name="imgTitle">
    <label class="label" for="nameApp">Nombre</label>
    <input type="text" name="nameApp" placeholder="Ej. Myfintech">
    <label class="label" for="appCompany">Desarolladores / Empresa</label>
    <input type="text" name="appCompany" placeholder="Ej. Techcorp">
    <label class="label" for="description">Descripción</label>
    <input type="text" name="description" placeholder="Ej.">
    <label class="label" for="website">Sitio web</label>
    <input type="text" name="website" placeholder="Ej. https://www.google.com">
</div>
<div class="containerItem">
    <h3 class="title">Links de las plataformas</h3>
    <label class="label" for="apple">Apple</label>
    <input type="text" name="apple" placeholder="Apple">
    <label class="label" for="android">Android</label>
    <input type="text" name="android" placeholder="Android">
</div>
