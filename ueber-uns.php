<?php require 'includes/funciones.php';    
    incluirTemplate('header'); 
?>
    <main class="nosotros seccion contenedor">
        <h1 class="bienvenida__heading">Über uns</h1>

        <div class="nosotros__bienvenida">
            <picture>
                <source srcset="build/img/man.avif" type="image/avif"> 
                <source srcset="build/img/man.webp" type="image/webp">
                <img width="200" height="300" loading="lazy" src="build/img/man.png" alt="imagen nosotros">
            </picture>            

            <div class="nosotros__contenido">
                <p class="nosotros__texto">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur recusandae obcaecati, ipsam hic assumenda excepturi repellat explicabo blanditiis dolorem quisquam similique eum, consequuntur vel commodi! Recusandae assumenda distinctio quidem dolorem!</p>
                <p class="nosotros__texto">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur recusandae obcaecati, ipsam hic assumenda excepturi repellat explicabo blanditiis dolorem quisquam similique eum, consequuntur vel commodi! Recusandae assumenda distinctio quidem dolorem!</p>
            </div>
        </div>
    </main>

    <section class="iconos seccion contenedor ">
        <h1 class="bienvenida__heading">Mehr über uns</h1>

        <div class="iconos__grid">
            <div class="iconos__icono">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="68" height="68" viewBox="0 0 24 24" stroke-width="1.5" stroke="#e99401" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                </svg>
                <h3 class="iconos__nombre">Qualität</h3>
                <p class="iconos__texto">Possimus, suscipit repudiandae. Autem deserunt aliquid deleniti sit minus consectetur obcaecati molestiae dolorem natus dolores reiciendis tempore, explicabo cum nobis laudantium. Voluptates?</p>
            </div>
            <div class="iconos__icono">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="68" height="68" viewBox="0 0 24 24" stroke-width="1.5" stroke="#e99401" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <circle cx="9" cy="7" r="4" />
                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                    <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                  </svg>
                <h3 class="iconos__nombre">Persönliche Beratung</h3>
                <p class="iconos__texto">Possimus, suscipit repudiandae. Autem deserunt aliquid deleniti sit minus consectetur obcaecati molestiae dolorem natus dolores reiciendis tempore, explicabo cum nobis laudantium. Voluptates?</p>
            </div>

            <div class="iconos__icono">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-currency-euro" width="68" height="68" viewBox="0 0 24 24" stroke-width="1.5" stroke="#e99401" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M17.2 7a6 7 0 1 0 0 10" />
                    <path d="M13 10h-8m0 4h8" />
                </svg>
                <h3 class="iconos__nombre">Preise</h3>
                <p class="iconos__texto">Possimus, suscipit repudiandae. Autem deserunt aliquid deleniti sit minus consectetur obcaecati molestiae dolorem natus dolores reiciendis tempore, explicabo cum nobis laudantium. Voluptates?</p>
            </div>
        </div>
    </section>
<?php 
    incluirTemplate('footer');
?>