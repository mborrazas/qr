<input type="text" name="typeText" value='gallery' hidden />
<div class="containerItem">
    <h3 class="title">Nombre de tu código QR</h3>
    <input type="text" name="qrName" placeholder="Ej. Mi código QR" required>
</div>
<div class="containerItem">
    <h3 class="title">Diseño</h3>
    <button type="button" class="btnDesign" data-first="#2F6BFD" data-second="#FFFFFF" data-third="#0E379A">
        <span style="background-color: #2F6BFD;"></span>
        <span style="background-color: #FFFFFF;"></span>
        <span style="background-color: #0E379A;"></span>
    </button>
    <button type="button" class="btnDesign" data-first="#28EDC9" data-second="#FFFFFF" data-third="#03A183">
        <span style="background-color: #28EDC9;"></span>
        <span style="background-color: #FFFFFF;"></span>
        <span style="background-color: #03A183;"></span>
    </button>
    <button type="button" class="btnDesign" data-first="#EDE728" data-second="#FFFFFF" data-third="#A39E0A">
        <span style="background-color: #EDE728;"></span>
        <span style="background-color: #FFFFFF;"></span>
        <span style="background-color: #A39E0A;"></span>
    </button>
    <button type="button" class="btnDesign" data-first="#DDBAE3" data-second="#FFFFFF" data-third="#866D8A">
        <span style="background-color: #DDBAE3;"></span>
        <span style="background-color: #FFFFFF;"></span>
        <span style="background-color: #866D8A;"></span>
    </button>
    <div id="containerStyles">
        <div id="swatch">
            <input type="color" id="background" name="background" value="#2F6BFD">
            <div class="info">
                <h2>Color de fondo</h2>
            </div>
        </div>
        <div id="swatch">
            <input type="color" id="backgroundLink" name="backgroundLink" value="#FFFFFF">
            <div class="info">
                <h2>Color de fondo para link</h2>
            </div>
        </div>
        <div id="swatch">
            <input type="color" id="colorText" name="colorText" value="#0E379A">
            <div class="info">
                <h2>Color de texto para link</h2>
            </div>
        </div>
    </div>
</div>

<div class="containerItem">
    <h3 class="title">Imágenes</h3>
    <input type="file" name="imgTitle[]" multiple>
</div>
<div class="containerItem">
    <h3 class="title">Información</h3>
    <label class="label" for="title">Título</label>
    <input type="text" name="title" placeholder="My photos">
    <label class="label" for="description">Descripción</label>
    <input type="text" name="description" placeholder="Trips 2019">
    <label class="label" for="website">Sitio web</label>
    <input type="text" name="website" placeholder="https://www.google.com">
    <button id="addButton">Agregar botón</button>
    <div id="containerButton">
        <label class="label" for="textBoton">Botón</label>
        <input type="text" name="textBoton" placeholder="Escribe aquí el texto del botón...">
        <input type="text" name="url" placeholder="http://...">
    </div>
</div>
<div class="containerItem">
    <h3 class="title">Pantalla de bienvenida</h3>
</div>