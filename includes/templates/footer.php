    <footer class="footer">
        <div class="footer__grid contenedor">
            <div class="footer__logo">
                <a href="/">
                    <img src="/build/img/logo.svg" alt="logo der Spanier">
                </a>
            </div>
            <nav class="footer__navegacion">
                <a class="footer__enlace" href="/">Startseite</a>
                <a class="footer__enlace" href="ueber-uns">Über uns</a>
                <a class="footer__enlace" href="produkte">Produkte</a>
                <a class="footer__enlace" href="kontakt">kontakt</a>
            </nav>
        </div>
        <div class="kundeninfo">
            <div class="kundeninfo__grid">
                <div class="kundeninfo__copyright"> Copyright &copy; 
                    <?php echo date('Y');?> der Spanier. All Rights Reserved - Designed bei MC²
                </div>
                <nav class="kundeninfo__navegacion">
                    <a class="kundeninfo__info" href="impressum">Impressum</a>
                    <a class="kundeninfo__info" href="datenschutz">Datenschutz</a>
                </nav>
            </div>
        </div>
    </footer> 
    
    <?php 
        $archivo = basename($_SERVER['PHP_SELF']);
        $pagina = str_replace(".php", "", $archivo);
        if($pagina == 'index'){
            echo '<script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>';
        }
    ?>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="/build/js/bundle.min.js"></script>

</body>
</html>