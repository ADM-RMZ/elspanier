<?php require 'includes/funciones.php';    
    incluirTemplate('header'); 
?>
    <main class="sortiment contenedor seccion">

        <h2 class="sortiment__heading">unsere<span>Produkte</span></h2>

        <div class="sortiment__grid">
            <div class="sortiert">
                <a href="schinken">
                    <picture>
                        <source srcset="build/img/producto01.avif" type="image/avif"> 
                        <source srcset="build/img/producto01.webp" type="image/webp">
                        <img width="200" height="300" loading="lazy" class="sortiert__imagen" src="build/img/producto01.png" alt="imagen producto">
                    </picture>
                    <p class="sortiert__nombre">Jamón Serrano</p>
                </a>
            </div>
            <div class="sortiert">
                <a href="wurst">
                    <picture>
                        <source srcset="build/img/produkte_salchichon01.avif" type="image/avif"> 
                        <source srcset="build/img/produkte_salchichon01.webp" type="image/webp">
                        <img width="200" height="300" loading="lazy" class="sortiert__imagen" src="build/img/produkte_salchichon01.png" alt="imagen producto">
                    </picture>
                    <p class="sortiert__nombre">Wurst</p>
                </a>
            </div>
            <div class="sortiert">
                <a href="kaesesorten">
                    <picture>
                        <source srcset="build/img/producto02.avif" type="image/avif"> 
                        <source srcset="build/img/producto02.webp" type="image/webp">
                        <img width="200" height="300" loading="lazy" class="sortiert__imagen" src="build/img/producto02.png" alt="imagen producto">
                    </picture>
                    
                    <p class="sortiert__nombre">Käsesorten</p>
                </a>
            </div>
            <div class="sortiert">
                <a href="meeresfruechte">
                    <picture>
                        <source srcset="build/img/producto03.avif" type="image/avif"> 
                        <source srcset="build/img/producto03.webp" type="image/webp">
                        <img width="200" height="300" loading="lazy" class="sortiert__imagen" src="build/img/producto03.png" alt="imagen producto">
                    </picture>
                    
                    <p class="sortiert__nombre">Meeresfrüchte</p>
                </a>
            </div>
            <div class="sortiert">
                <a href="wein-spirituosen">
                    <picture>
                        <source srcset="build/img/producto04.avif" type="image/avif"> 
                        <source srcset="build/img/producto04.webp" type="image/webp">
                        <img width="200" height="300" loading="lazy" class="sortiert__imagen" src="build/img/producto04.png" alt="imagen producto">
                    </picture>
                    <p class="sortiert__nombre">Wein / Spirituosen</p>
                </a>
            </div>
            <div class="sortiert">
                <a href="gewuerze">
                    <picture>
                        <source srcset="build/img/produkte_sauce01.avif" type="image/avif"> 
                        <source srcset="build/img/produkte_sauce01.webp" type="image/webp">
                        <img width="200" height="300" loading="lazy" class="sortiert__imagen" src="build/img/produkte_sauce01.png" alt="imagen producto">
                    </picture>
                    <p class="sortiert__nombre">Gewürze / Saucen</p>
                </a>
            </div>
            <div class="sortiert">
                <a href="/oliven">
                    <picture>
                        <source srcset="build/img/produkte_olive01.avif" type="image/avif"> 
                        <source srcset="build/img/produkte_olive01.webp" type="image/webp">
                        <img width="200" height="300" loading="lazy" class="sortiert__imagen" src="build/img/produkte_olive01.png" alt="imagen producto">
                    </picture>
                    
                    <p class="sortiert__nombre">Oliven</p>
                </a>
        </div>
        <div class="sortiert">
                <a href="/olivenoel">
                    <picture>
                        <source srcset="build/img/produkte_oliveoel01.avif" type="image/avif"> 
                        <source srcset="build/img/produkte_oliveoel01.webp" type="image/webp">
                        <img width="200" height="300" loading="lazy" class="sortiert__imagen" src="build/img/produkte_oliveoel01.png" alt="imagen producto">
                    </picture>
                    <p class="sortiert__nombre">Olivenöl - Essig</p>
                </a>
        </div>
        <div class="sortiert">
                <a href="praesentkoerbe">
                    <picture>
                        <source srcset="build/img/produkte_koerbe01.avif" type="image/avif"> 
                        <source srcset="build/img/produkte_koerbe01.webp" type="image/webp">
                        <img width="200" height="300" loading="lazy" class="sortiert__imagen" src="build/img/produkte_koerbe01.png" alt="imagen producto">
                    </picture>
                    <p class="sortiert__nombre">Präsentkörbe</p>
                </a>
        </div>
        </div>
    </main>
<?php 
    incluirTemplate('footer');
?>