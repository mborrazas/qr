<input type="text" name="typeText" value='video' hidden />
<div class="containerItem">
    <h3 class="title">Nombre de tu código QR</h3>
    <input type="text" name="qrName" placeholder="Ej. Mi código QR" required>
</div>
<div class="containerItem">
    <h3 class="title">Diseño</h3>
    <button type="button" class="btnDesign" data-first="#0E379A">
        <span style="background-color: #0E379A;"></span>
    </button>
    <button type="button" class="btnDesign" data-first="#28EDC9">
        <span style="background-color: #28EDC9;"></span>
    </button>
    <button type="button" class="btnDesign" data-first="#28ED28">
        <span style="background-color: #28ED28;"></span>
    </button>
    <button type="button" class="btnDesign" data-first="#ED4C28">
        <span style="background-color: #ED4C28;"></span>
    </button>
    <div id="containerStyles">
        <div id="swatch">
            <input type="color" id="background" name="background" value="#0E379A">
            <div class="info">
                <h2>Color de fondo</h2>
            </div>
        </div>
    </div>
</div>

<div class="containerItem">
    <h3 class="title">Video</h3>
    <input type="file" name="video">
</div>
<div class="containerItem">
    <h3 class="title">Información</h3>
    <label class="label" for="company">Empresa</label>
    <input type="text" name="company" placeholder="Empresa">
    <label class="label" for="title">Título</label>
    <input type="text" name="title" placeholder="Título">
    <label class="label" for="description">Descripción</label>
    <input type="text" name="description" placeholder="Descripción">
    <button id="addButton">Agregar botón</button>
    <div id="containerButton">
        <label class="label" for="textBoton">Botón</label>
        <input type="text" name="textBoton" placeholder="Escribe aquí el texto del botón...">
        <input type="text" name="url" placeholder="http://...">
    </div>
</div>