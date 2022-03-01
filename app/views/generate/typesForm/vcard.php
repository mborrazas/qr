<?php $translate = Translate::getInstance(); ?>
<input type="text" name="typeText" value='vcard' hidden />
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
    <h3 class="title"><?php $translate->echoTranslate('Información de la Vcard'); ?></h3>
    <label class="custom-file-upload">
        <input type="file" name="imgTitle" accept="image/*">
        <i class="fas fa-upload"></i> <?php $translate->echoTranslate('Selecciona una imagen'); ?>
    </label>
    <label for="peopleName" class="label"><?php $translate->echoTranslate('Nombre'); ?> *</label>
    <input type="text" name="peopleName" placeholder="Ej. Pablo">
    <label for="peopleLastname" class="label"><?php $translate->echoTranslate('Apellido'); ?></label>
    <input type="text" name="peopleLastname" placeholder="Ej. Pablo">
    <h3 class="title"><?php $translate->echoTranslate('Información de contacto'); ?></h3>
    <div>
        <label for="mobilePhone" class="label"><?php $translate->echoTranslate('Teléfono móvil'); ?></label>
        <input type="text" name="mobilePhone" placeholder="Ej. 00 000 000">
        <label for="phone" class="label"><?php $translate->echoTranslate('Teléfono Fijo'); ?></label>
        <input type="text" name="phone" placeholder="Ej. 00 000 000">
        <label for="fax" class="label"><?php $translate->echoTranslate('Fax'); ?>Fax</label>
        <input type="text" name="fax" placeholder="Ej. 00 000 000">
    </div>
    <label for="email" class="label"><?php $translate->echoTranslate('Correo electrónico'); ?></label>
    <input type="email" name="email" placeholder="Ej. nombre@correo.com">
    <label for="website" class="label"><?php $translate->echoTranslate('Página web personal'); ?></label>
    <input type="text" name="website" placeholder="Ej. https://...">
    <div class="city">
        <label for="city" class="label"><?php $translate->echoTranslate('Ciudad'); ?></label>
        <input type="text" name="city" placeholder="">
        <label for="state" class="label"><?php $translate->echoTranslate('Estado'); ?></label>
        <input type="text" name="state" placeholder="">
    </div>
    <label for="country" class="label"><?php $translate->echoTranslate('País'); ?></label>
    <input type="text" name="country" placeholder="">
    <h3><?php $translate->echoTranslate('Empresa'); ?></h3>
    <div class="company">
        <label for="company" class="label"><?php $translate->echoTranslate('Empresa'); ?></label>
        <input type="text" name="company" placeholder="Ej. Empresa S.L">
        <label for="company" class="label"><?php $translate->echoTranslate('Profesión'); ?></label>
        <input type="text" name="profession" placeholder="<?php $translate->echoTranslate('Ej. Tu profesión / puesto'); ?>">
    </div>
    <h3><?php $translate->echoTranslate('Resumen'); ?></h3>
    <textarea name="resume" id="" cols="30" rows="10" placeholder="Ej. Lorem Ipsum"></textarea>
</div>
<div class="containerItem">
    <h3 class="title"><?php $translate->echoTranslate('Redes sociales'); ?></h3>
    <div id="containerLinksSocialNetwork">
        <div id="dribble" class="item">
            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                    <circle fill="#ea4c89" cx="16" cy="16" r="16"></circle>
                    <path fill="#fff" d="M20.23,22.17a26.51,26.51,0,0,0-1.41-5.09,14.91,14.91,0,0,1,4.57.19A7.51,7.51,0,0,1,20.23,22.17Zm-8.77-.23a10.23,10.23,0,0,1,5.88-4.57,25.48,25.48,0,0,1,1.51,5.55,7.58,7.58,0,0,1-2.85.56A7.45,7.45,0,0,1,11.46,21.94ZM8.52,16v-.24h0a27.88,27.88,0,0,0,7.69-.87c.18.37.36.72.52,1.1a11.66,11.66,0,0,0-6.4,4.93A7.38,7.38,0,0,1,8.52,16ZM12.8,9.24a36.57,36.57,0,0,1,2.75,4.31,26.61,26.61,0,0,1-6.83.76A7.53,7.53,0,0,1,12.8,9.24Zm8.06,1.06A9.31,9.31,0,0,1,17,13.07a38.13,38.13,0,0,0-2.73-4.34,7.45,7.45,0,0,1,6.59,1.57Zm1,1.08a7.5,7.5,0,0,1,1.6,4.41,16.17,16.17,0,0,0-5.24-.13c-.19-.43-.38-.86-.59-1.27a10.71,10.71,0,0,0,4.21-3ZM16,7a9,9,0,1,0,9,9h0A9,9,0,0,0,16,7Z"></path>
                </svg>
                <span>Dribble</span>
            </div>
            <input type="text" name='typeSocialNetwork[]' value="dribble" hidden />
            <input type="text" name='linkSocialNetwork[]' />
        </div>
        <div id="facebook" class="item">
            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                    <circle fill="#3a5a99" cx="16" cy="16" r="16"></circle>
                    <path fill="#fff" d="M23.79,7.25H8.21a1,1,0,0,0-1,1V23.79a1,1,0,0,0,1,1H16.6V18H14.31V15.34h2.28v-2A3.18,3.18,0,0,1,20,9.89,19.57,19.57,0,0,1,22,10v2.36H20.62c-1.1,0-1.31.52-1.31,1.29v1.68h2.61L21.58,18H19.32v6.78h4.46a1,1,0,0,0,1-1V8.21A1,1,0,0,0,23.79,7.25Z"></path>
                </svg>
                <span>Facebook</span>
            </div>
            <input type="text" name='typeSocialNetwork[]' value="facebook" hidden />
            <input type="text" name='linkSocialNetwork[]' />
        </div>
        <div id="flickr" class="item">
            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32">
                    <defs>
                        <linearGradient id="linear-gradient" x1="1" y1="16" x2="31" y2="16" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#fff"></stop>
                            <stop offset="1" stop-color="#f3f3f3"></stop>
                        </linearGradient>
                    </defs>
                    <circle fill="url(#linear-gradient)" cx="16" cy="16" r="15"></circle>
                    <path fill="#dcdcdc" d="M16,1A15,15,0,1,1,1,16,15,15,0,0,1,16,1m0-1A16,16,0,1,0,32,16,16,16,0,0,0,16,0Z"></path>
                    <path fill="#1d66d8" d="M14.69,16a4,4,0,1,1-4-4,4,4,0,0,1,4,4"></path>
                    <path fill="#fb0a84" d="M25.24,16a4,4,0,1,1-4-4,4,4,0,0,1,4,4"></path>
                </svg>
                <span>Flickr</span>
            </div>
            <input type="text" name='typeSocialNetwork[]' value="flickr" hidden />
            <input type="text" name='linkSocialNetwork[]' />
        </div>
        <div id="github" class="item">
            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                    <circle fill="#3f91cb" cx="16" cy="16" r="16"></circle>
                    <path fill="#fff" fill-rule="evenodd" d="M16,7.26a9,9,0,0,0-2.82,17.46c.44.09.61-.19.61-.43V22.63c-2.5.53-3-1.06-3-1.06a2.37,2.37,0,0,0-1-1.32c-.81-.55.06-.54.06-.54a1.91,1.91,0,0,1,1.38.92,1.91,1.91,0,0,0,2.6.76,1.89,1.89,0,0,1,.57-1.2c-2-.23-4.08-1-4.08-4.43a3.48,3.48,0,0,1,.92-2.4A3.23,3.23,0,0,1,11.32,11s.75-.25,2.46.91a8.55,8.55,0,0,1,4.49,0C20,10.74,20.71,11,20.71,11a3.19,3.19,0,0,1,.08,2.37,3.39,3.39,0,0,1,.92,2.4c0,3.45-2.09,4.2-4.08,4.43a2.12,2.12,0,0,1,.6,1.66v2.45c0,.24.16.52.62.43A9,9,0,0,0,16,7.26Z"></path>
                    <path fill="#fff" d="M10.43,20.13s-.08.05-.15,0-.1-.09-.08-.13.09-.06.15,0S10.45,20.08,10.43,20.13Z"></path>
                    <path fill="#fff" d="M10.8,20.53s-.13,0-.19,0a.15.15,0,0,1,0-.19s.12,0,.18,0S10.84,20.49,10.8,20.53Z"></path>
                    <path fill="#fff" d="M11.15,21.05c-.06,0-.15,0-.2-.08a.18.18,0,0,1,0-.22c.06,0,.14,0,.2.08A.16.16,0,0,1,11.15,21.05Z"></path>
                    <path fill="#fff" d="M11.63,21.55c-.05.05-.15,0-.23,0s-.1-.18-.05-.23a.17.17,0,0,1,.23,0C11.66,21.39,11.69,21.49,11.63,21.55Z"></path>
                    <path fill="#fff" d="M12.3,21.84a.18.18,0,0,1-.22.07c-.1,0-.17-.12-.15-.19s.12-.1.23-.07A.17.17,0,0,1,12.3,21.84Z"></path>
                    <path fill="#fff" d="M13,21.89c0,.07-.08.13-.18.13s-.2-.05-.2-.12.08-.14.19-.14a.16.16,0,0,1,.19.13Z"></path>
                    <path fill="#fff" d="M13.72,21.77a.2.2,0,0,1-.17.17c-.11,0-.2,0-.21-.1s.06-.15.16-.17A.18.18,0,0,1,13.72,21.77Z"></path>
                </svg>
                <span>GitHub</span>
            </div>
            <input type="text" name='typeSocialNetwork[]' value="github" hidden />
            <input type="text" name='linkSocialNetwork[]' />
        </div>
        <div id="google+" class="item">
            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                    <circle fill="#dc4b3e" cx="16" cy="16" r="16"></circle>
                    <path fill="#fff" d="M7,16a5.72,5.72,0,0,1,9.49-4.28q-.69.77-1.44,1.5a4,4,0,0,0-3.37-.65,3.59,3.59,0,0,0,2.42,6.77A3.12,3.12,0,0,0,16,17.2c-1.09,0-2.17,0-3.26,0V15.22h5.44A6.44,6.44,0,0,1,17,19.77a5.62,5.62,0,0,1-6.14,1.64A5.69,5.69,0,0,1,7,16"></path>
                    <path fill="#fff" d="M21.71,13.55h1.63v1.63H25V16.8H23.34v1.65H21.72V16.82H20.1V15.2h1.62V13.58"></path>
                </svg>
                <span>Google+</span>
            </div>
            <input type="text" name='typeSocialNetwork[]' value="google+" hidden />
            <input type="text" name='linkSocialNetwork[]' />
        </div>

        <div id="line" class="item">
            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32">
                    <defs>
                        <linearGradient id="linear-gradient-line" y1="16" x2="32" y2="16" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#3ad41a"></stop>
                            <stop offset="1" stop-color="#31b716"></stop>
                        </linearGradient>
                    </defs>
                    <circle fill="url(#linear-gradient-line)" cx="16" cy="16" r="16"></circle>
                    <path fill="#fff" d="M16,7c-5.34,0-9.67,3.47-9.67,7.74,0,3.82,3.44,7,8,7.63h0l.32,0c1.55.32.21,2.25.71,2.65s5-2.49,7.66-5A7.44,7.44,0,0,0,24,19h0l.18-.23a6.62,6.62,0,0,0,1.44-4.07C25.67,10.42,21.34,7,16,7Zm-3.16,9.71a.5.5,0,0,1-.5.5H10.39a.5.5,0,0,1-.51-.5V12.92a.51.51,0,0,1,.51-.51h0a.5.5,0,0,1,.5.51v3.19h1.41a.5.5,0,0,1,.5.51Zm1.46,0a.5.5,0,0,1-.5.5h0a.5.5,0,0,1-.51-.5V12.92a.51.51,0,0,1,.51-.51h0a.51.51,0,0,1,.5.51Zm4.57,0a.49.49,0,0,1-.15.35h0a.27.27,0,0,1-.12.09.46.46,0,0,1-.23.06h-.05a.43.43,0,0,1-.19,0,.37.37,0,0,1-.19-.14h0l0-.05-1.84-2.51v2.24a.5.5,0,0,1-.5.5h0a.5.5,0,0,1-.51-.5V12.92a.51.51,0,0,1,.51-.51h0a.53.53,0,0,1,.44.26l1.82,2.44V12.92a.51.51,0,0,1,.5-.51h.05a.51.51,0,0,1,.5.51ZM22.48,13a.5.5,0,0,1-.51.5h-1.4v.8H22a.51.51,0,0,1,.51.51v0a.5.5,0,0,1-.51.5h-1.4v.8H22a.51.51,0,0,1,.51.51v0a.51.51,0,0,1-.51.5H20a.5.5,0,0,1-.5-.5V12.93a.5.5,0,0,1,.5-.51H22a.51.51,0,0,1,.51.51Z"></path>
                </svg>
                <span>Line</span>
            </div>
            <input type="text" name='typeSocialNetwork[]' value="line" hidden />
            <input type="text" name='linkSocialNetwork[]' />
        </div>
        <div id="linkedin" class="item">
            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                    <circle fill="#0076b2" cx="16" cy="16" r="16"></circle>
                    <path fill="#fff" d="M7.27,12.94H11V24.88H7.27ZM9.13,7A2.16,2.16,0,1,1,7,9.15,2.15,2.15,0,0,1,9.13,7h0"></path>
                    <path fill="#fff" d="M13.32,12.94h3.55v1.63h.07a3.92,3.92,0,0,1,3.51-1.93c3.77,0,4.46,2.48,4.46,5.69v6.55H21.2v-5.8c0-1.39,0-3.17-1.93-3.17S17,17.41,17,19v5.91H13.33Z"></path>
                </svg>
                <span>Linkedin</span>
            </div>
            <input type="text" name='typeSocialNetwork[]' value="linkedin" hidden />
            <input type="text" name='linkSocialNetwork[]' />
        </div>
        <div id="pinterest" class="item">
            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                    <circle fill="#bd081c" cx="16" cy="16" r="16"></circle>
                    <path fill="#fff" d="M22.93,12.94c0,4-2.25,7-5.55,7a2.91,2.91,0,0,1-2.51-1.28s-.6,2.37-.73,2.83a11.16,11.16,0,0,1-1.85,3.37.14.14,0,0,1-.2,0,.1.1,0,0,1,0-.07,11.06,11.06,0,0,1,0-3.91l1.32-5.61a4.17,4.17,0,0,1-.33-1.63c0-1.51.89-2.67,2-2.67a1.38,1.38,0,0,1,1.39,1.55,22,22,0,0,1-.91,3.65,1.6,1.6,0,0,0,1.15,1.94,1.47,1.47,0,0,0,.47,0c1.95,0,3.27-2.5,3.27-5.47,0-2.26-1.51-3.94-4.28-3.94a4.87,4.87,0,0,0-5.07,4.93,2.94,2.94,0,0,0,.68,2,.49.49,0,0,1,.14.58c0,.19-.16.64-.21.82a.38.38,0,0,1-.45.29l-.06,0c-1.44-.59-2.11-2.16-2.11-3.93C9.07,10.54,11.54,7,16.43,7,20.35,7,22.93,9.88,22.93,12.94Z"></path>
                </svg>
                <span>Pinterest</span>
            </div>
            <input type="text" name='typeSocialNetwork[]' value="pinterest" hidden />
            <input type="text" name='linkSocialNetwork[]' />
        </div>
        <div id="reddit" class="item">
            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: #ff4500;
                            }

                            .cls-2 {
                                fill: #fff;
                            }
                        </style>
                    </defs>
                    <circle fill="#ff4500" cx="16" cy="16" r="16"></circle>
                    <path fill="#fff" d="M14.68,12.63a1.13,1.13,0,1,0-2.26,0,1.13,1.13,0,1,0,2.26,0Z"></path>
                    <path fill="#fff" d="M18.45,11.51a1.13,1.13,0,1,0,1.13,1.13A1.13,1.13,0,0,0,18.45,11.51Z"></path>
                    <path fill="#fff" d="M18.6,15.36a.31.31,0,0,0-.44,0A3,3,0,0,1,16,16a3,3,0,0,1-2.16-.63.31.31,0,0,0-.44.44,3.55,3.55,0,0,0,2.6.81,3.55,3.55,0,0,0,2.6-.81.32.32,0,0,0,0-.44Z"></path>
                    <path fill="#fff" d="M24.06,11.41A1.83,1.83,0,0,0,21,10,9.21,9.21,0,0,0,16.44,8.7l.95-3L20,6.32A1.51,1.51,0,1,0,21.45,4.8a1.52,1.52,0,0,0-1.37.91L17.25,5a.31.31,0,0,0-.38.22h0L15.81,8.7A9.28,9.28,0,0,0,11,10a1.83,1.83,0,0,0-2.43,2.74,1.86,1.86,0,0,0,.28.21,3,3,0,0,0,0,.52A4.15,4.15,0,0,0,11,17a8.1,8.1,0,0,0,1.46.76,3.33,3.33,0,0,0-1.75,3.07A3.23,3.23,0,0,0,12.85,24a9.07,9.07,0,0,0,.32.87H13a1.87,1.87,0,0,0-2,1.69,1.42,1.42,0,0,0,.08.45.3.3,0,0,0,.29.21h9.29a.31.31,0,0,0,.3-.22,1.62,1.62,0,0,0,.07-.44,1.88,1.88,0,0,0-2-1.69h-.13a8,8,0,0,0,.32-.86,3.24,3.24,0,0,0,2.17-3.23,3.41,3.41,0,0,0-1.76-3.09A7.38,7.38,0,0,0,21,17a4.2,4.2,0,0,0,2.16-3.44,3,3,0,0,0,0-.52A1.85,1.85,0,0,0,24.06,11.41Zm-2.6-6a.9.9,0,0,1,.9.89h0a.9.9,0,1,1-.9-.89ZM8.85,10.64a1.21,1.21,0,0,1,.94-.44,1.14,1.14,0,0,1,.69.22A4.37,4.37,0,0,0,9,12.35,1.21,1.21,0,0,1,8.85,10.64Zm2.42,10.13a2.92,2.92,0,0,1,1-2.3h0c-.05.51-.07,1-.07,1.51a13.35,13.35,0,0,0,.38,3.27A2.77,2.77,0,0,1,11.27,20.77Zm.3,5.81v0A1.28,1.28,0,0,1,13,25.46a1.81,1.81,0,0,1,.51.08,5.2,5.2,0,0,0,.75,1ZM19,25.46a1.29,1.29,0,0,1,1.42,1.08v0H17.75a5,5,0,0,0,.75-1.06A1.76,1.76,0,0,1,19,25.46Zm-2.19,1.12H15.23c-1.38-.78-2.37-3.53-2.37-6.6A14.55,14.55,0,0,1,13,17.91a10.67,10.67,0,0,0,6,0A14.55,14.55,0,0,1,19.14,20C19.14,23,18.15,25.79,16.77,26.58Zm2.91-8.09a2.88,2.88,0,0,1,1,2.29,2.74,2.74,0,0,1-1.34,2.46A13.63,13.63,0,0,0,19.76,20C19.76,19.49,19.73,19,19.68,18.49ZM16,17.69v0c-3.63,0-6.59-1.89-6.59-4.2s3-4.19,6.59-4.19,6.59,1.88,6.59,4.19S19.63,17.69,16,17.69Zm7-5.34a4.41,4.41,0,0,0-1.48-1.93h0a1.14,1.14,0,0,1,.69-.22,1.21,1.21,0,0,1,1.21,1.21A1.19,1.19,0,0,1,23,12.35Z"></path>
                </svg>
                <span>Reddit</span>
            </div>
            <input type="text" name='typeSocialNetwork[]' value="reddit" hidden />
            <input type="text" name='linkSocialNetwork[]' />
        </div>
        <div id="skype" class="item">
            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                    <circle fill="#00aff0" cx="16" cy="16" r="16"></circle>
                    <path fill="#fff" d="M25.31,17.67s0,.07,0,.11l0-.21a.93.93,0,0,1,0,.1A9,9,0,0,0,25.47,16,9.44,9.44,0,0,0,16,6.49a9,9,0,0,0-1.8.17h0l.1,0-.2,0,.1,0a5.6,5.6,0,0,0-7.53,7.66s0-.07,0-.1l0,.2s0-.07-.05-.1A10,10,0,0,0,6.54,16,9.44,9.44,0,0,0,16,25.42a9.12,9.12,0,0,0,1.65-.15l-.09-.05.2,0h-.11a5.6,5.6,0,0,0,7.65-7.6ZM16,21.75c-3.36,0-4.86-1.65-4.86-2.89a1,1,0,0,1,1.11-1.08c1.44,0,1.07,2.06,3.75,2.06,1.38,0,2.14-.74,2.14-1.51,0-.46-.23-1-1.13-1.19l-3-.74c-2.41-.61-2.84-1.91-2.84-3.14,0-2.54,2.39-3.49,4.64-3.49,2.07,0,4.51,1.14,4.51,2.67a1.1,1.1,0,0,1-1.21,1c-1.23,0-1-1.7-3.48-1.7-1.23,0-1.91.56-1.91,1.35s1,1.05,1.81,1.24l2.22.49c2.42.54,3,2,3,3.29C20.83,20.21,19.24,21.75,16,21.75Zm1.53,3.47.09.05h.11Zm7.73-7.44s0-.08,0-.11a.93.93,0,0,0,0-.1ZM6.7,14.22s0,.07,0,.1,0,.07.05.1Zm7.61-7.51-.1,0-.1,0Z"></path>
                </svg>
                <span>Skype</span>
            </div>
            <input type="text" name='typeSocialNetwork[]' value="skype" hidden />
            <input type="text" name='linkSocialNetwork[]' />
        </div>
        <div id="snapchat" class="item">
            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                    <circle fill="#ffea00" cx="16" cy="16" r="16"></circle>
                    <path fill="#fff" d="M16.11,24.24h-.22a3.86,3.86,0,0,1-2.35-.93,3.53,3.53,0,0,0-1.36-.7,4.37,4.37,0,0,0-.72-.06,5.56,5.56,0,0,0-1,.11,2.32,2.32,0,0,1-.38.06.23.23,0,0,1-.25-.18c0-.14-.07-.28-.1-.41-.08-.34-.13-.55-.27-.57-1.65-.25-2.12-.6-2.23-.85a.36.36,0,0,1,0-.1.19.19,0,0,1,.16-.2,5.44,5.44,0,0,0,3.71-3.11h0a1,1,0,0,0,.09-.82c-.17-.4-.75-.59-1.12-.71l-.25-.08c-.76-.3-.81-.6-.79-.75a.73.73,0,0,1,.69-.45.52.52,0,0,1,.21,0,2,2,0,0,0,.9.24.75.75,0,0,0,.54-.17c0-.17,0-.35,0-.54a8.72,8.72,0,0,1,.21-3.53A4.59,4.59,0,0,1,15.8,7.78h.39a4.6,4.6,0,0,1,4.26,2.75,8.75,8.75,0,0,1,.21,3.53v.06c0,.16,0,.33,0,.48a.76.76,0,0,0,.5.17h0a2.34,2.34,0,0,0,.85-.23.58.58,0,0,1,.26-.06.81.81,0,0,1,.31.06h0A.56.56,0,0,1,23,15c0,.18-.12.44-.78.7l-.25.09c-.38.12-.94.3-1.13.7a1,1,0,0,0,.09.82h0a5.44,5.44,0,0,0,3.72,3.11.19.19,0,0,1,.15.2.43.43,0,0,1,0,.11c-.11.24-.58.59-2.23.84-.13,0-.19.2-.26.57a3.45,3.45,0,0,1-.11.4.22.22,0,0,1-.23.18h0a2.47,2.47,0,0,1-.38-.05,4.68,4.68,0,0,0-1-.1,4.17,4.17,0,0,0-.71.06,3.31,3.31,0,0,0-1.36.69A3.75,3.75,0,0,1,16.11,24.24Z"></path>
                </svg>
                <span>Snapchat</span>
            </div>
            <input type="text" name='typeSocialNetwork[]' value="snapchat" hidden />
            <input type="text" name='linkSocialNetwork[]' />
        </div>
        <div id="tripAdvisor" class="item">
            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                    <circle fill="#479951" cx="16" cy="16" r="16"></circle>
                    <path fill="#fff" d="M26.41,13.32a5.45,5.45,0,0,1,1-1.86H23.62c-.06,0-.11-.06-.17-.06-.24-.35-1.63-2.15-7.22-2.15C10.07,9.25,9,11.46,9,11.46H5a4.8,4.8,0,0,1,1,2A6,6,0,0,0,4.89,17,5.73,5.73,0,0,0,15,20.77l1.28,1.86,1.11-1.92a5.71,5.71,0,0,0,10.18-3.66A5.14,5.14,0,0,0,26.41,13.32ZM10.76,21.53a4.6,4.6,0,1,1,4.6-4.6A4.6,4.6,0,0,1,10.76,21.53ZM8.79,15a2.79,2.79,0,0,0,2,4.77,2.79,2.79,0,1,0-2-4.77Zm.46,3.49a2.15,2.15,0,0,1,1.51-3.66,2.15,2.15,0,1,1,0,4.3,2.1,2.1,0,0,1-1.51-.64Zm.58-1.51a.93.93,0,1,0,.93-.93A.92.92,0,0,0,9.83,16.93Zm12,4.6a4.6,4.6,0,1,1,4.59-4.6A4.53,4.53,0,0,1,21.82,21.53ZM19.9,15a2.79,2.79,0,0,0,2,4.77,2.79,2.79,0,1,0-2-4.77Zm.41,3.49a2.15,2.15,0,0,1,1.51-3.66,2.15,2.15,0,1,1-1.51,3.66ZM21,16.93a.93.93,0,1,0,.93-.93A.92.92,0,0,0,21,16.93Zm-4.78-7.1c3.9,0,5.36,1.63,5.36,1.63S17.4,10.76,16,16c-1.4-5.24-5.53-4.48-5.53-4.48s1.46-1.63,5.36-1.63h.34Z"></path>
                </svg>
                <span>TripAdvisor</span>
            </div>
            <input type="text" name='typeSocialNetwork[]' value="tripAdvisor" hidden />
            <input type="text" name='linkSocialNetwork[]' />
        </div>
        <div id="tumblr" class="item">
            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                    <circle fill="#3b445c" cx="16" cy="16" r="16"></circle>
                    <path fill="#fff" d="M18.41,25.6c1.92,0,3.82-.69,4.45-1.51l.13-.16L21.8,20.4a.1.1,0,0,0-.08-.06H19.06a.07.07,0,0,1-.08-.05,2.2,2.2,0,0,1-.05-.44V15.52a.08.08,0,0,1,.08-.08h3.13a.08.08,0,0,0,.08-.08h0V10.94a.09.09,0,0,0-.08-.08H19a.08.08,0,0,1-.08-.07h0V6.48a.07.07,0,0,0-.08-.08H13.4a.93.93,0,0,0-.91.83,4.51,4.51,0,0,1-3.21,4.19l-.21.07a.09.09,0,0,0-.06.08v3.79a.09.09,0,0,0,.08.08h2v4.67C11.05,23.84,13.63,25.6,18.41,25.6Zm3.66-1.8a4.86,4.86,0,0,1-3,1h-.13A4.58,4.58,0,0,1,14,20.11V14.74a.08.08,0,0,0-.08-.08H12.05a.08.08,0,0,1-.08-.08h0V12.13a.09.09,0,0,1,0-.08,5.31,5.31,0,0,0,3.42-4.73.12.12,0,0,1,.12-.13h2.51a.07.07,0,0,1,.08.07h0v4.3a.08.08,0,0,0,.08.08h3.12a.09.09,0,0,1,.08.08h0v2.85a.09.09,0,0,1-.08.08H18.22a.08.08,0,0,0-.08.08v5.11c0,1.13.57,1.73,1.65,1.73a3.87,3.87,0,0,0,1.39-.28.09.09,0,0,1,.1,0h0l.79,2.36A.1.1,0,0,1,22.07,23.8Z"></path>
                </svg>
                <span>Tumblr</span>
            </div>
            <input type="text" name='typeSocialNetwork[]' value="tumblr" hidden />
            <input type="text" name='linkSocialNetwork[]' />
        </div>
        <div id="twitter" class="item">
            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                    <circle fill="#55acee" cx="16" cy="16" r="16"></circle>
                    <path fill="#fff" d="M25,10.44a7.35,7.35,0,0,1-2.11.58,3.65,3.65,0,0,0,1.61-2,7.26,7.26,0,0,1-2.33.89,3.68,3.68,0,0,0-6.36,2.51,3.86,3.86,0,0,0,.09.84A10.45,10.45,0,0,1,8.28,9.41a3.69,3.69,0,0,0,1.13,4.9,3.8,3.8,0,0,1-1.67-.46v.05a3.69,3.69,0,0,0,3,3.6A3.73,3.73,0,0,1,9,17.56a3.66,3.66,0,0,0,3.43,2.55,7.39,7.39,0,0,1-4.56,1.57A8.49,8.49,0,0,1,7,21.63a10.47,10.47,0,0,0,16.11-8.81v-.48A7.48,7.48,0,0,0,25,10.44Z"></path>
                </svg>
                <span>Twitter</span>
            </div>
            <input type="text" name='typeSocialNetwork[]' value="twitter" hidden />
            <input type="text" name='linkSocialNetwork[]' />
        </div>
        <div id="vimeo" class="item">
            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                    <circle fill="#41b1db" cx="16" cy="16" r="16" transform="translate(-6.63 16) rotate(-45)"></circle>
                    <path fill="#fff" d="M25.5,10.94a6.68,6.68,0,0,1-.5,2.7,18.4,18.4,0,0,1-2.34,4.11,25.89,25.89,0,0,1-4.3,4.93,6.41,6.41,0,0,1-2.8,1.5,2,2,0,0,1-1.93-.57,6,6,0,0,1-1.49-2.71c-.54-1.88-1-3.78-1.56-5.67a8.78,8.78,0,0,0-.69-1.81,3.1,3.1,0,0,0-.21-.36c-.45-.67-.76-.74-1.44-.31l-.72.47c-.13.09-.21.1-.31,0l-.64-.83c-.09-.11-.11-.19,0-.29a50.52,50.52,0,0,1,4-3.43A3,3,0,0,1,12.36,8,2,2,0,0,1,14,8.84a4.88,4.88,0,0,1,.78,2.1c.29,1.73.51,3.47,1,5.17a7,7,0,0,0,.6,1.64c.35.62.74.71,1.23.19a11.17,11.17,0,0,0,2.36-3.89,2.66,2.66,0,0,0,.1-1A1.05,1.05,0,0,0,18.94,12a3.07,3.07,0,0,0-1.31.18c-.2.06-.29,0-.21-.2a6.33,6.33,0,0,1,2-3.17,4.71,4.71,0,0,1,4.13-.84,2.44,2.44,0,0,1,1.81,2.22C25.45,10.41,25.47,10.69,25.5,10.94Z"></path>
                </svg>
                <span>Vimeo</span>
            </div>
            <input type="text" name='typeSocialNetwork[]' value="vimeo" hidden />
            <input type="text" name='linkSocialNetwork[]' />
        </div>
        <div id="vkontakte" class="item">
            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                    <circle fill="#5181b8" cx="16" cy="16" r="16"></circle>
                    <path fill="#fff" fill-rule="evenodd" d="M24.59,11.37c.12-.42,0-.72-.59-.72H22a.84.84,0,0,0-.86.57,16.33,16.33,0,0,1-2.42,4c-.47.46-.66.61-.92.61s-.31-.15-.31-.57V11.37c0-.51-.14-.72-.56-.72H13.87a.49.49,0,0,0-.51.45c0,.48.7.59.79,1.92v2.9c0,.63-.12.74-.37.74-.66,0-2.29-2.45-3.25-5.26-.2-.52-.38-.75-.89-.75h-2c-.56,0-.67.27-.67.57,0,.52.66,3.11,3.11,6.52a7.68,7.68,0,0,0,6,3.61c1.25,0,1.4-.28,1.4-.76V18.81c0-.56.12-.67.52-.67s.79.14,2,1.27c1.34,1.33,1.56,1.94,2.31,1.94h2c.56,0,.84-.28.67-.83a8.59,8.59,0,0,0-1.66-2.31c-.46-.55-1.15-1.13-1.35-1.42s-.21-.55,0-.87c0,0,2.41-3.4,2.65-4.55Z"></path>
                </svg>
                <span>Vkontakte</span>
            </div>
            <input type="text" name='typeSocialNetwork[]' value="vkontakte" hidden />
            <input type="text" name='linkSocialNetwork[]' />
        </div>
        <div id="web" class="item">
            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                    <circle cx="16" cy="16" r="16"></circle>
                    <path fill="#fff" d="M16,6A10,10,0,1,0,26,16,10,10,0,0,0,16,6Zm8,9.5H21a13.67,13.67,0,0,0-1.78-6.84A8,8,0,0,1,24,15.5Zm-6.42,8.35A9.38,9.38,0,0,1,16.5,24V16.5H20C19.92,19.76,18.92,22.6,17.55,23.85ZM12,16.5H15.5V24a9.38,9.38,0,0,1-1.05-.12C13.08,22.6,12.08,19.76,12,16.5Zm2.46-8.35A9.38,9.38,0,0,1,15.5,8V15.5H12C12.08,12.24,13.08,9.4,14.45,8.15ZM16.5,15.5V8a9.38,9.38,0,0,1,1.05.12C18.92,9.4,19.92,12.24,20,15.5ZM12.82,8.66A13.67,13.67,0,0,0,11,15.5H8A8,8,0,0,1,12.82,8.66ZM8,16.5h3a13.67,13.67,0,0,0,1.78,6.84A8,8,0,0,1,8,16.5Zm11.15,6.84A13.67,13.67,0,0,0,21,16.5h3A8,8,0,0,1,19.18,23.34Z"></path>
                </svg>
                <span>Web</span>
            </div>
            <input type="text" name='typeSocialNetwork[]' value="web" hidden />
            <input type="text" name='linkSocialNetwork[]' />
        </div>
        <div id="xing" class="item">
            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32">
                    <defs>
                        <linearGradient id="linear-gradient-xing" x1="1" y1="16" x2="31" y2="16" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#fff"></stop>
                            <stop offset="1" stop-color="#f3f3f3"></stop>
                        </linearGradient>
                    </defs>
                    <circle fill="url(#linear-gradient-xing)" cx="16" cy="16" r="15"></circle>
                    <path fill="#005a5f" d="M8.18,10.14a.44.44,0,0,0-.4.18.45.45,0,0,0,0,.45l2,3.46h0L6.66,19.77a.45.45,0,0,0,0,.46.42.42,0,0,0,.38.2h3a.9.9,0,0,0,.8-.57L14,14.23l-2-3.54a.92.92,0,0,0-.82-.55Z"></path>
                    <path fill="#d4d600" d="M20.57,6.1a.86.86,0,0,0-.79.56L13.22,18.3,17.41,26a.92.92,0,0,0,.82.56h2.95a.43.43,0,0,0,.39-.19.45.45,0,0,0,0-.46l-4.15-7.59v0L23.94,6.74a.45.45,0,0,0,0-.45.41.41,0,0,0-.39-.19Z"></path>
                    <path fill="#dcdcdc" d="M16,1A15,15,0,1,1,1,16,15,15,0,0,1,16,1m0-1A16,16,0,1,0,32,16,16,16,0,0,0,16,0Z"></path>
                </svg>
                <span>Xing</span>
            </div>
            <input type="text" name='typeSocialNetwork[]' value="xing" hidden />
            <input type="text" name='linkSocialNetwork[]' />
        </div>
        <div id="youtube" class="item">
            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                    <circle fill="#e52d27" cx="16" cy="16" r="16"></circle>
                    <path fill="#fff" d="M25,19.58a2.57,2.57,0,0,1-2.56,2.56H9.6A2.57,2.57,0,0,1,7,19.58V12.42A2.57,2.57,0,0,1,9.6,9.86H22.4A2.57,2.57,0,0,1,25,12.42ZM14.15,18.19,19,15.68l-4.84-2.5Z"></path>
                </svg>
                <span>Youtube</span>
            </div>
            <input type="text" name='typeSocialNetwork[]' value="youtube" hidden />
            <input type="text" name='linkSocialNetwork[]' />
        </div>
        <div id="instagram" class="item">
            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80">
                    <circle cx="40" cy="40" r="7.46"></circle>
                    <path d="M57.46,26.8a7.47,7.47,0,0,0-4.25-4.25,12,12,0,0,0-4.16-.77c-2.36-.13-3.07-.13-9-.13v0c-6,0-6.69,0-9,.14a12,12,0,0,0-4.16.77,7.42,7.42,0,0,0-4.2,4.2A12,12,0,0,0,21.82,31c-.14,2.36-.14,3.07-.14,9.05s0,6.69.14,9a12,12,0,0,0,.77,4.16,7.4,7.4,0,0,0,4.2,4.26,12,12,0,0,0,4.16.77c2.36.13,3.06.13,9.05.13s6.69,0,9-.13a12,12,0,0,0,4.16-.77,7.47,7.47,0,0,0,4.25-4.25,12.07,12.07,0,0,0,.77-4.16c.13-2.36.13-3.07.13-9.05s0-6.69-.13-9A12,12,0,0,0,57.46,26.8ZM40,51.5A11.5,11.5,0,1,1,51.5,40,11.5,11.5,0,0,1,40,51.5ZM52,30.74a2.69,2.69,0,1,1,2.69-2.69A2.7,2.7,0,0,1,52,30.74Z"></path>
                    <path d="M40,0A40,40,0,1,0,80,40,40,40,0,0,0,40,0ZM62.39,49.23a16.56,16.56,0,0,1-1,5.44,11.39,11.39,0,0,1-6.59,6.59,16.58,16.58,0,0,1-5.44,1.05c-2.39.13-3.16.13-9.24.13s-6.84,0-9.23-.13a16.58,16.58,0,0,1-5.44-1.05,11.39,11.39,0,0,1-6.59-6.59,16.67,16.67,0,0,1-1.13-5.35c-.13-2.39-.13-3.16-.13-9.24s0-6.84.13-9.23a16.58,16.58,0,0,1,1-5.44,11.39,11.39,0,0,1,6.59-6.59,16.56,16.56,0,0,1,5.44-1c2.39-.13,3.15-.13,9.23-.13l.08-.09c6.08,0,6.85,0,9.24.13a16.58,16.58,0,0,1,5.44,1,11.39,11.39,0,0,1,6.59,6.59,16.56,16.56,0,0,1,1,5.44c.13,2.39.13,3.15.13,9.23S62.49,46.84,62.39,49.23Z"></path>
                </svg>
                <span>Instagram</span>
            </div>
            <input type="text" name='typeSocialNetwork[]' value="instagram" hidden />
            <input type="text" name='linkSocialNetwork[]' />
        </div>
    </div>
    <div id="socialNetworks">
        <button data-type="dribble">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                <circle fill="#ea4c89" cx="16" cy="16" r="16"></circle>
                <path fill="#fff" d="M20.23,22.17a26.51,26.51,0,0,0-1.41-5.09,14.91,14.91,0,0,1,4.57.19A7.51,7.51,0,0,1,20.23,22.17Zm-8.77-.23a10.23,10.23,0,0,1,5.88-4.57,25.48,25.48,0,0,1,1.51,5.55,7.58,7.58,0,0,1-2.85.56A7.45,7.45,0,0,1,11.46,21.94ZM8.52,16v-.24h0a27.88,27.88,0,0,0,7.69-.87c.18.37.36.72.52,1.1a11.66,11.66,0,0,0-6.4,4.93A7.38,7.38,0,0,1,8.52,16ZM12.8,9.24a36.57,36.57,0,0,1,2.75,4.31,26.61,26.61,0,0,1-6.83.76A7.53,7.53,0,0,1,12.8,9.24Zm8.06,1.06A9.31,9.31,0,0,1,17,13.07a38.13,38.13,0,0,0-2.73-4.34,7.45,7.45,0,0,1,6.59,1.57Zm1,1.08a7.5,7.5,0,0,1,1.6,4.41,16.17,16.17,0,0,0-5.24-.13c-.19-.43-.38-.86-.59-1.27a10.71,10.71,0,0,0,4.21-3ZM16,7a9,9,0,1,0,9,9h0A9,9,0,0,0,16,7Z"></path>
            </svg>
        </button>
        <button data-type="facebook">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                <circle fill="#3a5a99" cx="16" cy="16" r="16"></circle>
                <path fill="#fff" d="M23.79,7.25H8.21a1,1,0,0,0-1,1V23.79a1,1,0,0,0,1,1H16.6V18H14.31V15.34h2.28v-2A3.18,3.18,0,0,1,20,9.89,19.57,19.57,0,0,1,22,10v2.36H20.62c-1.1,0-1.31.52-1.31,1.29v1.68h2.61L21.58,18H19.32v6.78h4.46a1,1,0,0,0,1-1V8.21A1,1,0,0,0,23.79,7.25Z"></path>
            </svg>
        </button>
        <button data-type="flickr">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32">
                <defs>
                    <linearGradient id="linear-gradient" x1="1" y1="16" x2="31" y2="16" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#fff"></stop>
                        <stop offset="1" stop-color="#f3f3f3"></stop>
                    </linearGradient>
                </defs>
                <circle fill="url(#linear-gradient)" cx="16" cy="16" r="15"></circle>
                <path fill="#dcdcdc" d="M16,1A15,15,0,1,1,1,16,15,15,0,0,1,16,1m0-1A16,16,0,1,0,32,16,16,16,0,0,0,16,0Z"></path>
                <path fill="#1d66d8" d="M14.69,16a4,4,0,1,1-4-4,4,4,0,0,1,4,4"></path>
                <path fill="#fb0a84" d="M25.24,16a4,4,0,1,1-4-4,4,4,0,0,1,4,4"></path>
            </svg>
        </button>
        <button data-type="github">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                <circle fill="#3f91cb" cx="16" cy="16" r="16"></circle>
                <path fill="#fff" fill-rule="evenodd" d="M16,7.26a9,9,0,0,0-2.82,17.46c.44.09.61-.19.61-.43V22.63c-2.5.53-3-1.06-3-1.06a2.37,2.37,0,0,0-1-1.32c-.81-.55.06-.54.06-.54a1.91,1.91,0,0,1,1.38.92,1.91,1.91,0,0,0,2.6.76,1.89,1.89,0,0,1,.57-1.2c-2-.23-4.08-1-4.08-4.43a3.48,3.48,0,0,1,.92-2.4A3.23,3.23,0,0,1,11.32,11s.75-.25,2.46.91a8.55,8.55,0,0,1,4.49,0C20,10.74,20.71,11,20.71,11a3.19,3.19,0,0,1,.08,2.37,3.39,3.39,0,0,1,.92,2.4c0,3.45-2.09,4.2-4.08,4.43a2.12,2.12,0,0,1,.6,1.66v2.45c0,.24.16.52.62.43A9,9,0,0,0,16,7.26Z"></path>
                <path fill="#fff" d="M10.43,20.13s-.08.05-.15,0-.1-.09-.08-.13.09-.06.15,0S10.45,20.08,10.43,20.13Z"></path>
                <path fill="#fff" d="M10.8,20.53s-.13,0-.19,0a.15.15,0,0,1,0-.19s.12,0,.18,0S10.84,20.49,10.8,20.53Z"></path>
                <path fill="#fff" d="M11.15,21.05c-.06,0-.15,0-.2-.08a.18.18,0,0,1,0-.22c.06,0,.14,0,.2.08A.16.16,0,0,1,11.15,21.05Z"></path>
                <path fill="#fff" d="M11.63,21.55c-.05.05-.15,0-.23,0s-.1-.18-.05-.23a.17.17,0,0,1,.23,0C11.66,21.39,11.69,21.49,11.63,21.55Z"></path>
                <path fill="#fff" d="M12.3,21.84a.18.18,0,0,1-.22.07c-.1,0-.17-.12-.15-.19s.12-.1.23-.07A.17.17,0,0,1,12.3,21.84Z"></path>
                <path fill="#fff" d="M13,21.89c0,.07-.08.13-.18.13s-.2-.05-.2-.12.08-.14.19-.14a.16.16,0,0,1,.19.13Z"></path>
                <path fill="#fff" d="M13.72,21.77a.2.2,0,0,1-.17.17c-.11,0-.2,0-.21-.1s.06-.15.16-.17A.18.18,0,0,1,13.72,21.77Z"></path>
            </svg>
        </button>
        <button data-type="google+">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                <circle fill="#dc4b3e" cx="16" cy="16" r="16"></circle>
                <path fill="#fff" d="M7,16a5.72,5.72,0,0,1,9.49-4.28q-.69.77-1.44,1.5a4,4,0,0,0-3.37-.65,3.59,3.59,0,0,0,2.42,6.77A3.12,3.12,0,0,0,16,17.2c-1.09,0-2.17,0-3.26,0V15.22h5.44A6.44,6.44,0,0,1,17,19.77a5.62,5.62,0,0,1-6.14,1.64A5.69,5.69,0,0,1,7,16"></path>
                <path fill="#fff" d="M21.71,13.55h1.63v1.63H25V16.8H23.34v1.65H21.72V16.82H20.1V15.2h1.62V13.58"></path>
            </svg>
        </button>
        <button data-type="line">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32">
                <defs>
                    <linearGradient id="linear-gradient-line" y1="16" x2="32" y2="16" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#3ad41a"></stop>
                        <stop offset="1" stop-color="#31b716"></stop>
                    </linearGradient>
                </defs>
                <circle fill="url(#linear-gradient-line)" cx="16" cy="16" r="16"></circle>
                <path fill="#fff" d="M16,7c-5.34,0-9.67,3.47-9.67,7.74,0,3.82,3.44,7,8,7.63h0l.32,0c1.55.32.21,2.25.71,2.65s5-2.49,7.66-5A7.44,7.44,0,0,0,24,19h0l.18-.23a6.62,6.62,0,0,0,1.44-4.07C25.67,10.42,21.34,7,16,7Zm-3.16,9.71a.5.5,0,0,1-.5.5H10.39a.5.5,0,0,1-.51-.5V12.92a.51.51,0,0,1,.51-.51h0a.5.5,0,0,1,.5.51v3.19h1.41a.5.5,0,0,1,.5.51Zm1.46,0a.5.5,0,0,1-.5.5h0a.5.5,0,0,1-.51-.5V12.92a.51.51,0,0,1,.51-.51h0a.51.51,0,0,1,.5.51Zm4.57,0a.49.49,0,0,1-.15.35h0a.27.27,0,0,1-.12.09.46.46,0,0,1-.23.06h-.05a.43.43,0,0,1-.19,0,.37.37,0,0,1-.19-.14h0l0-.05-1.84-2.51v2.24a.5.5,0,0,1-.5.5h0a.5.5,0,0,1-.51-.5V12.92a.51.51,0,0,1,.51-.51h0a.53.53,0,0,1,.44.26l1.82,2.44V12.92a.51.51,0,0,1,.5-.51h.05a.51.51,0,0,1,.5.51ZM22.48,13a.5.5,0,0,1-.51.5h-1.4v.8H22a.51.51,0,0,1,.51.51v0a.5.5,0,0,1-.51.5h-1.4v.8H22a.51.51,0,0,1,.51.51v0a.51.51,0,0,1-.51.5H20a.5.5,0,0,1-.5-.5V12.93a.5.5,0,0,1,.5-.51H22a.51.51,0,0,1,.51.51Z"></path>
            </svg>
        </button>
        <button data-type="linkedin">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                <circle fill="#0076b2" cx="16" cy="16" r="16"></circle>
                <path fill="#fff" d="M7.27,12.94H11V24.88H7.27ZM9.13,7A2.16,2.16,0,1,1,7,9.15,2.15,2.15,0,0,1,9.13,7h0"></path>
                <path fill="#fff" d="M13.32,12.94h3.55v1.63h.07a3.92,3.92,0,0,1,3.51-1.93c3.77,0,4.46,2.48,4.46,5.69v6.55H21.2v-5.8c0-1.39,0-3.17-1.93-3.17S17,17.41,17,19v5.91H13.33Z"></path>
            </svg>
        </button>
        <button data-type="pinterest">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                <circle fill="#bd081c" cx="16" cy="16" r="16"></circle>
                <path fill="#fff" d="M22.93,12.94c0,4-2.25,7-5.55,7a2.91,2.91,0,0,1-2.51-1.28s-.6,2.37-.73,2.83a11.16,11.16,0,0,1-1.85,3.37.14.14,0,0,1-.2,0,.1.1,0,0,1,0-.07,11.06,11.06,0,0,1,0-3.91l1.32-5.61a4.17,4.17,0,0,1-.33-1.63c0-1.51.89-2.67,2-2.67a1.38,1.38,0,0,1,1.39,1.55,22,22,0,0,1-.91,3.65,1.6,1.6,0,0,0,1.15,1.94,1.47,1.47,0,0,0,.47,0c1.95,0,3.27-2.5,3.27-5.47,0-2.26-1.51-3.94-4.28-3.94a4.87,4.87,0,0,0-5.07,4.93,2.94,2.94,0,0,0,.68,2,.49.49,0,0,1,.14.58c0,.19-.16.64-.21.82a.38.38,0,0,1-.45.29l-.06,0c-1.44-.59-2.11-2.16-2.11-3.93C9.07,10.54,11.54,7,16.43,7,20.35,7,22.93,9.88,22.93,12.94Z"></path>
            </svg>
        </button>
        <button data-type="reddit">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                <defs>
                    <style>
                        .cls-1 {
                            fill: #ff4500;
                        }

                        .cls-2 {
                            fill: #fff;
                        }
                    </style>
                </defs>
                <circle fill="#ff4500" cx="16" cy="16" r="16"></circle>
                <path fill="#fff" d="M14.68,12.63a1.13,1.13,0,1,0-2.26,0,1.13,1.13,0,1,0,2.26,0Z"></path>
                <path fill="#fff" d="M18.45,11.51a1.13,1.13,0,1,0,1.13,1.13A1.13,1.13,0,0,0,18.45,11.51Z"></path>
                <path fill="#fff" d="M18.6,15.36a.31.31,0,0,0-.44,0A3,3,0,0,1,16,16a3,3,0,0,1-2.16-.63.31.31,0,0,0-.44.44,3.55,3.55,0,0,0,2.6.81,3.55,3.55,0,0,0,2.6-.81.32.32,0,0,0,0-.44Z"></path>
                <path fill="#fff" d="M24.06,11.41A1.83,1.83,0,0,0,21,10,9.21,9.21,0,0,0,16.44,8.7l.95-3L20,6.32A1.51,1.51,0,1,0,21.45,4.8a1.52,1.52,0,0,0-1.37.91L17.25,5a.31.31,0,0,0-.38.22h0L15.81,8.7A9.28,9.28,0,0,0,11,10a1.83,1.83,0,0,0-2.43,2.74,1.86,1.86,0,0,0,.28.21,3,3,0,0,0,0,.52A4.15,4.15,0,0,0,11,17a8.1,8.1,0,0,0,1.46.76,3.33,3.33,0,0,0-1.75,3.07A3.23,3.23,0,0,0,12.85,24a9.07,9.07,0,0,0,.32.87H13a1.87,1.87,0,0,0-2,1.69,1.42,1.42,0,0,0,.08.45.3.3,0,0,0,.29.21h9.29a.31.31,0,0,0,.3-.22,1.62,1.62,0,0,0,.07-.44,1.88,1.88,0,0,0-2-1.69h-.13a8,8,0,0,0,.32-.86,3.24,3.24,0,0,0,2.17-3.23,3.41,3.41,0,0,0-1.76-3.09A7.38,7.38,0,0,0,21,17a4.2,4.2,0,0,0,2.16-3.44,3,3,0,0,0,0-.52A1.85,1.85,0,0,0,24.06,11.41Zm-2.6-6a.9.9,0,0,1,.9.89h0a.9.9,0,1,1-.9-.89ZM8.85,10.64a1.21,1.21,0,0,1,.94-.44,1.14,1.14,0,0,1,.69.22A4.37,4.37,0,0,0,9,12.35,1.21,1.21,0,0,1,8.85,10.64Zm2.42,10.13a2.92,2.92,0,0,1,1-2.3h0c-.05.51-.07,1-.07,1.51a13.35,13.35,0,0,0,.38,3.27A2.77,2.77,0,0,1,11.27,20.77Zm.3,5.81v0A1.28,1.28,0,0,1,13,25.46a1.81,1.81,0,0,1,.51.08,5.2,5.2,0,0,0,.75,1ZM19,25.46a1.29,1.29,0,0,1,1.42,1.08v0H17.75a5,5,0,0,0,.75-1.06A1.76,1.76,0,0,1,19,25.46Zm-2.19,1.12H15.23c-1.38-.78-2.37-3.53-2.37-6.6A14.55,14.55,0,0,1,13,17.91a10.67,10.67,0,0,0,6,0A14.55,14.55,0,0,1,19.14,20C19.14,23,18.15,25.79,16.77,26.58Zm2.91-8.09a2.88,2.88,0,0,1,1,2.29,2.74,2.74,0,0,1-1.34,2.46A13.63,13.63,0,0,0,19.76,20C19.76,19.49,19.73,19,19.68,18.49ZM16,17.69v0c-3.63,0-6.59-1.89-6.59-4.2s3-4.19,6.59-4.19,6.59,1.88,6.59,4.19S19.63,17.69,16,17.69Zm7-5.34a4.41,4.41,0,0,0-1.48-1.93h0a1.14,1.14,0,0,1,.69-.22,1.21,1.21,0,0,1,1.21,1.21A1.19,1.19,0,0,1,23,12.35Z"></path>
            </svg>
        </button>
        <button data-type="skype">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                <circle fill="#00aff0" cx="16" cy="16" r="16"></circle>
                <path fill="#fff" d="M25.31,17.67s0,.07,0,.11l0-.21a.93.93,0,0,1,0,.1A9,9,0,0,0,25.47,16,9.44,9.44,0,0,0,16,6.49a9,9,0,0,0-1.8.17h0l.1,0-.2,0,.1,0a5.6,5.6,0,0,0-7.53,7.66s0-.07,0-.1l0,.2s0-.07-.05-.1A10,10,0,0,0,6.54,16,9.44,9.44,0,0,0,16,25.42a9.12,9.12,0,0,0,1.65-.15l-.09-.05.2,0h-.11a5.6,5.6,0,0,0,7.65-7.6ZM16,21.75c-3.36,0-4.86-1.65-4.86-2.89a1,1,0,0,1,1.11-1.08c1.44,0,1.07,2.06,3.75,2.06,1.38,0,2.14-.74,2.14-1.51,0-.46-.23-1-1.13-1.19l-3-.74c-2.41-.61-2.84-1.91-2.84-3.14,0-2.54,2.39-3.49,4.64-3.49,2.07,0,4.51,1.14,4.51,2.67a1.1,1.1,0,0,1-1.21,1c-1.23,0-1-1.7-3.48-1.7-1.23,0-1.91.56-1.91,1.35s1,1.05,1.81,1.24l2.22.49c2.42.54,3,2,3,3.29C20.83,20.21,19.24,21.75,16,21.75Zm1.53,3.47.09.05h.11Zm7.73-7.44s0-.08,0-.11a.93.93,0,0,0,0-.1ZM6.7,14.22s0,.07,0,.1,0,.07.05.1Zm7.61-7.51-.1,0-.1,0Z"></path>
            </svg>
        </button>
        <button data-type="snapchat">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                <circle fill="#ffea00" cx="16" cy="16" r="16"></circle>
                <path fill="#fff" d="M16.11,24.24h-.22a3.86,3.86,0,0,1-2.35-.93,3.53,3.53,0,0,0-1.36-.7,4.37,4.37,0,0,0-.72-.06,5.56,5.56,0,0,0-1,.11,2.32,2.32,0,0,1-.38.06.23.23,0,0,1-.25-.18c0-.14-.07-.28-.1-.41-.08-.34-.13-.55-.27-.57-1.65-.25-2.12-.6-2.23-.85a.36.36,0,0,1,0-.1.19.19,0,0,1,.16-.2,5.44,5.44,0,0,0,3.71-3.11h0a1,1,0,0,0,.09-.82c-.17-.4-.75-.59-1.12-.71l-.25-.08c-.76-.3-.81-.6-.79-.75a.73.73,0,0,1,.69-.45.52.52,0,0,1,.21,0,2,2,0,0,0,.9.24.75.75,0,0,0,.54-.17c0-.17,0-.35,0-.54a8.72,8.72,0,0,1,.21-3.53A4.59,4.59,0,0,1,15.8,7.78h.39a4.6,4.6,0,0,1,4.26,2.75,8.75,8.75,0,0,1,.21,3.53v.06c0,.16,0,.33,0,.48a.76.76,0,0,0,.5.17h0a2.34,2.34,0,0,0,.85-.23.58.58,0,0,1,.26-.06.81.81,0,0,1,.31.06h0A.56.56,0,0,1,23,15c0,.18-.12.44-.78.7l-.25.09c-.38.12-.94.3-1.13.7a1,1,0,0,0,.09.82h0a5.44,5.44,0,0,0,3.72,3.11.19.19,0,0,1,.15.2.43.43,0,0,1,0,.11c-.11.24-.58.59-2.23.84-.13,0-.19.2-.26.57a3.45,3.45,0,0,1-.11.4.22.22,0,0,1-.23.18h0a2.47,2.47,0,0,1-.38-.05,4.68,4.68,0,0,0-1-.1,4.17,4.17,0,0,0-.71.06,3.31,3.31,0,0,0-1.36.69A3.75,3.75,0,0,1,16.11,24.24Z"></path>
            </svg>
        </button>
        <button data-type="tripAdvisor">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                <circle fill="#479951" cx="16" cy="16" r="16"></circle>
                <path fill="#fff" d="M26.41,13.32a5.45,5.45,0,0,1,1-1.86H23.62c-.06,0-.11-.06-.17-.06-.24-.35-1.63-2.15-7.22-2.15C10.07,9.25,9,11.46,9,11.46H5a4.8,4.8,0,0,1,1,2A6,6,0,0,0,4.89,17,5.73,5.73,0,0,0,15,20.77l1.28,1.86,1.11-1.92a5.71,5.71,0,0,0,10.18-3.66A5.14,5.14,0,0,0,26.41,13.32ZM10.76,21.53a4.6,4.6,0,1,1,4.6-4.6A4.6,4.6,0,0,1,10.76,21.53ZM8.79,15a2.79,2.79,0,0,0,2,4.77,2.79,2.79,0,1,0-2-4.77Zm.46,3.49a2.15,2.15,0,0,1,1.51-3.66,2.15,2.15,0,1,1,0,4.3,2.1,2.1,0,0,1-1.51-.64Zm.58-1.51a.93.93,0,1,0,.93-.93A.92.92,0,0,0,9.83,16.93Zm12,4.6a4.6,4.6,0,1,1,4.59-4.6A4.53,4.53,0,0,1,21.82,21.53ZM19.9,15a2.79,2.79,0,0,0,2,4.77,2.79,2.79,0,1,0-2-4.77Zm.41,3.49a2.15,2.15,0,0,1,1.51-3.66,2.15,2.15,0,1,1-1.51,3.66ZM21,16.93a.93.93,0,1,0,.93-.93A.92.92,0,0,0,21,16.93Zm-4.78-7.1c3.9,0,5.36,1.63,5.36,1.63S17.4,10.76,16,16c-1.4-5.24-5.53-4.48-5.53-4.48s1.46-1.63,5.36-1.63h.34Z"></path>
            </svg>
        </button>
        <button data-type="tumblr">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                <circle fill="#3b445c" cx="16" cy="16" r="16"></circle>
                <path fill="#fff" d="M18.41,25.6c1.92,0,3.82-.69,4.45-1.51l.13-.16L21.8,20.4a.1.1,0,0,0-.08-.06H19.06a.07.07,0,0,1-.08-.05,2.2,2.2,0,0,1-.05-.44V15.52a.08.08,0,0,1,.08-.08h3.13a.08.08,0,0,0,.08-.08h0V10.94a.09.09,0,0,0-.08-.08H19a.08.08,0,0,1-.08-.07h0V6.48a.07.07,0,0,0-.08-.08H13.4a.93.93,0,0,0-.91.83,4.51,4.51,0,0,1-3.21,4.19l-.21.07a.09.09,0,0,0-.06.08v3.79a.09.09,0,0,0,.08.08h2v4.67C11.05,23.84,13.63,25.6,18.41,25.6Zm3.66-1.8a4.86,4.86,0,0,1-3,1h-.13A4.58,4.58,0,0,1,14,20.11V14.74a.08.08,0,0,0-.08-.08H12.05a.08.08,0,0,1-.08-.08h0V12.13a.09.09,0,0,1,0-.08,5.31,5.31,0,0,0,3.42-4.73.12.12,0,0,1,.12-.13h2.51a.07.07,0,0,1,.08.07h0v4.3a.08.08,0,0,0,.08.08h3.12a.09.09,0,0,1,.08.08h0v2.85a.09.09,0,0,1-.08.08H18.22a.08.08,0,0,0-.08.08v5.11c0,1.13.57,1.73,1.65,1.73a3.87,3.87,0,0,0,1.39-.28.09.09,0,0,1,.1,0h0l.79,2.36A.1.1,0,0,1,22.07,23.8Z"></path>
            </svg>
        </button>
        <button data-type="twitter">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                <circle fill="#55acee" cx="16" cy="16" r="16"></circle>
                <path fill="#fff" d="M25,10.44a7.35,7.35,0,0,1-2.11.58,3.65,3.65,0,0,0,1.61-2,7.26,7.26,0,0,1-2.33.89,3.68,3.68,0,0,0-6.36,2.51,3.86,3.86,0,0,0,.09.84A10.45,10.45,0,0,1,8.28,9.41a3.69,3.69,0,0,0,1.13,4.9,3.8,3.8,0,0,1-1.67-.46v.05a3.69,3.69,0,0,0,3,3.6A3.73,3.73,0,0,1,9,17.56a3.66,3.66,0,0,0,3.43,2.55,7.39,7.39,0,0,1-4.56,1.57A8.49,8.49,0,0,1,7,21.63a10.47,10.47,0,0,0,16.11-8.81v-.48A7.48,7.48,0,0,0,25,10.44Z"></path>
            </svg>
        </button>
        <button data-type="vimeo">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                <circle fill="#41b1db" cx="16" cy="16" r="16" transform="translate(-6.63 16) rotate(-45)"></circle>
                <path fill="#fff" d="M25.5,10.94a6.68,6.68,0,0,1-.5,2.7,18.4,18.4,0,0,1-2.34,4.11,25.89,25.89,0,0,1-4.3,4.93,6.41,6.41,0,0,1-2.8,1.5,2,2,0,0,1-1.93-.57,6,6,0,0,1-1.49-2.71c-.54-1.88-1-3.78-1.56-5.67a8.78,8.78,0,0,0-.69-1.81,3.1,3.1,0,0,0-.21-.36c-.45-.67-.76-.74-1.44-.31l-.72.47c-.13.09-.21.1-.31,0l-.64-.83c-.09-.11-.11-.19,0-.29a50.52,50.52,0,0,1,4-3.43A3,3,0,0,1,12.36,8,2,2,0,0,1,14,8.84a4.88,4.88,0,0,1,.78,2.1c.29,1.73.51,3.47,1,5.17a7,7,0,0,0,.6,1.64c.35.62.74.71,1.23.19a11.17,11.17,0,0,0,2.36-3.89,2.66,2.66,0,0,0,.1-1A1.05,1.05,0,0,0,18.94,12a3.07,3.07,0,0,0-1.31.18c-.2.06-.29,0-.21-.2a6.33,6.33,0,0,1,2-3.17,4.71,4.71,0,0,1,4.13-.84,2.44,2.44,0,0,1,1.81,2.22C25.45,10.41,25.47,10.69,25.5,10.94Z"></path>
            </svg>
        </button>
        <button data-type="vkontakte">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                <circle fill="#5181b8" cx="16" cy="16" r="16"></circle>
                <path fill="#fff" fill-rule="evenodd" d="M24.59,11.37c.12-.42,0-.72-.59-.72H22a.84.84,0,0,0-.86.57,16.33,16.33,0,0,1-2.42,4c-.47.46-.66.61-.92.61s-.31-.15-.31-.57V11.37c0-.51-.14-.72-.56-.72H13.87a.49.49,0,0,0-.51.45c0,.48.7.59.79,1.92v2.9c0,.63-.12.74-.37.74-.66,0-2.29-2.45-3.25-5.26-.2-.52-.38-.75-.89-.75h-2c-.56,0-.67.27-.67.57,0,.52.66,3.11,3.11,6.52a7.68,7.68,0,0,0,6,3.61c1.25,0,1.4-.28,1.4-.76V18.81c0-.56.12-.67.52-.67s.79.14,2,1.27c1.34,1.33,1.56,1.94,2.31,1.94h2c.56,0,.84-.28.67-.83a8.59,8.59,0,0,0-1.66-2.31c-.46-.55-1.15-1.13-1.35-1.42s-.21-.55,0-.87c0,0,2.41-3.4,2.65-4.55Z"></path>
            </svg>
        </button>
        <button data-type="web">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                <circle cx="16" cy="16" r="16"></circle>
                <path fill="#fff" d="M16,6A10,10,0,1,0,26,16,10,10,0,0,0,16,6Zm8,9.5H21a13.67,13.67,0,0,0-1.78-6.84A8,8,0,0,1,24,15.5Zm-6.42,8.35A9.38,9.38,0,0,1,16.5,24V16.5H20C19.92,19.76,18.92,22.6,17.55,23.85ZM12,16.5H15.5V24a9.38,9.38,0,0,1-1.05-.12C13.08,22.6,12.08,19.76,12,16.5Zm2.46-8.35A9.38,9.38,0,0,1,15.5,8V15.5H12C12.08,12.24,13.08,9.4,14.45,8.15ZM16.5,15.5V8a9.38,9.38,0,0,1,1.05.12C18.92,9.4,19.92,12.24,20,15.5ZM12.82,8.66A13.67,13.67,0,0,0,11,15.5H8A8,8,0,0,1,12.82,8.66ZM8,16.5h3a13.67,13.67,0,0,0,1.78,6.84A8,8,0,0,1,8,16.5Zm11.15,6.84A13.67,13.67,0,0,0,21,16.5h3A8,8,0,0,1,19.18,23.34Z"></path>
            </svg>
        </button>
        <button data-type="xing">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32">
                <defs>
                    <linearGradient id="linear-gradient-xing" x1="1" y1="16" x2="31" y2="16" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#fff"></stop>
                        <stop offset="1" stop-color="#f3f3f3"></stop>
                    </linearGradient>
                </defs>
                <circle fill="url(#linear-gradient-xing)" cx="16" cy="16" r="15"></circle>
                <path fill="#005a5f" d="M8.18,10.14a.44.44,0,0,0-.4.18.45.45,0,0,0,0,.45l2,3.46h0L6.66,19.77a.45.45,0,0,0,0,.46.42.42,0,0,0,.38.2h3a.9.9,0,0,0,.8-.57L14,14.23l-2-3.54a.92.92,0,0,0-.82-.55Z"></path>
                <path fill="#d4d600" d="M20.57,6.1a.86.86,0,0,0-.79.56L13.22,18.3,17.41,26a.92.92,0,0,0,.82.56h2.95a.43.43,0,0,0,.39-.19.45.45,0,0,0,0-.46l-4.15-7.59v0L23.94,6.74a.45.45,0,0,0,0-.45.41.41,0,0,0-.39-.19Z"></path>
                <path fill="#dcdcdc" d="M16,1A15,15,0,1,1,1,16,15,15,0,0,1,16,1m0-1A16,16,0,1,0,32,16,16,16,0,0,0,16,0Z"></path>
            </svg>
        </button>
        <button data-type="youtube">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                <circle fill="#e52d27" cx="16" cy="16" r="16"></circle>
                <path fill="#fff" d="M25,19.58a2.57,2.57,0,0,1-2.56,2.56H9.6A2.57,2.57,0,0,1,7,19.58V12.42A2.57,2.57,0,0,1,9.6,9.86H22.4A2.57,2.57,0,0,1,25,12.42ZM14.15,18.19,19,15.68l-4.84-2.5Z"></path>
            </svg>
        </button>
        <button data-type="instagram">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80">
                <circle cx="40" cy="40" r="7.46"></circle>
                <path d="M57.46,26.8a7.47,7.47,0,0,0-4.25-4.25,12,12,0,0,0-4.16-.77c-2.36-.13-3.07-.13-9-.13v0c-6,0-6.69,0-9,.14a12,12,0,0,0-4.16.77,7.42,7.42,0,0,0-4.2,4.2A12,12,0,0,0,21.82,31c-.14,2.36-.14,3.07-.14,9.05s0,6.69.14,9a12,12,0,0,0,.77,4.16,7.4,7.4,0,0,0,4.2,4.26,12,12,0,0,0,4.16.77c2.36.13,3.06.13,9.05.13s6.69,0,9-.13a12,12,0,0,0,4.16-.77,7.47,7.47,0,0,0,4.25-4.25,12.07,12.07,0,0,0,.77-4.16c.13-2.36.13-3.07.13-9.05s0-6.69-.13-9A12,12,0,0,0,57.46,26.8ZM40,51.5A11.5,11.5,0,1,1,51.5,40,11.5,11.5,0,0,1,40,51.5ZM52,30.74a2.69,2.69,0,1,1,2.69-2.69A2.7,2.7,0,0,1,52,30.74Z"></path>
                <path d="M40,0A40,40,0,1,0,80,40,40,40,0,0,0,40,0ZM62.39,49.23a16.56,16.56,0,0,1-1,5.44,11.39,11.39,0,0,1-6.59,6.59,16.58,16.58,0,0,1-5.44,1.05c-2.39.13-3.16.13-9.24.13s-6.84,0-9.23-.13a16.58,16.58,0,0,1-5.44-1.05,11.39,11.39,0,0,1-6.59-6.59,16.67,16.67,0,0,1-1.13-5.35c-.13-2.39-.13-3.16-.13-9.24s0-6.84.13-9.23a16.58,16.58,0,0,1,1-5.44,11.39,11.39,0,0,1,6.59-6.59,16.56,16.56,0,0,1,5.44-1c2.39-.13,3.15-.13,9.23-.13l.08-.09c6.08,0,6.85,0,9.24.13a16.58,16.58,0,0,1,5.44,1,11.39,11.39,0,0,1,6.59,6.59,16.56,16.56,0,0,1,1,5.44c.13,2.39.13,3.15.13,9.23S62.49,46.84,62.39,49.23Z"></path>
            </svg>
        </button>
    </div>
    <div class="containerEnlace">
    </div>
</div>