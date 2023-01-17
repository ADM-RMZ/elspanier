<?php require 'includes/funciones.php';    
    incluirTemplate('header'); 
?>
    <main class="kontakt seccion contenedor">
        <h1 class="kontakt__heading">Kontaktieren Sie uns</h1>

        <div class="kontakt__bienvenida">

            <div class="kontakt__contenido">
                <h3 class="kontakt__nombre">Unsere Filiale</h3>
                <p class="kontakt__texto">Jöllenbecker Strasse 57 <br> 33613 Bielefeld <br> +49 (0) 521 977 93 68</p>
                <h3 class="kontakt__nombre">Öffnungszeiten</h3>
                <p class="kontakt__texto">Montag bis Freitag von 10:00 Uhr - 13:00 Uhr und 14:30 Uhr - 18:30 Uhr <br> Samstag von 10:00 Uhr - 14:30 Uhr</p>
            </div>
            <picture>
                <source srcset="build/img/kontakt_tienda.avif" type="image/avif"> 
                <source srcset="build/img/kontakt_tienda.webp" type="image/webp">
                <img width="200" height="300" loading="lazy" src="build/img/kontakt_tienda.png" alt="imagen nosotros">
            </picture> 
            

        </div>
    </main>

<?php 
    incluirTemplate('footer');
?>