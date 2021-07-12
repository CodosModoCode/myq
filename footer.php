<!-- FOOTER -->
<?php $url = get_template_directory_uri(  ); ?>
<footer class="footer bg-negro mt-2 p-2">
    <div class="contenedor">
        <div class="secciones-footer">
            <div class="">
                <div class="texto-centrado texto-negro-light">
                <?php dynamic_sidebar( 'footer_izq') ?>
            </div>
        </div>
        <div class="">
            <div class="texto-centrado texto-negro-light">
                    <?php dynamic_sidebar( 'footer_centro') ?>
                </div>
            </div>
            <div class="logos-footer d-flex-centrado">
                <i class="icono fab fa-facebook"></i>
                <i class="icono fab fa-instagram"></i>
                <i class="icono fab fa-whatsapp"></i>
            </div>
        </div>
        <div class="footer-marketi texto-sm sombra-lg mt-1 d-flex-between p-1 rounded">
            <p class="">Todos los derechos reservados | M&Q - Únicos en Sabor | 2021 | contacto@m&q.com</p>
            <div class="marketi-logo cursor-pointer">
                <img src=<?php echo $url . '/assets/img/Logo-marketi.png' ?> alt="" class="w-50">
            </div>
        </div>
    </div>
</footer>
<?php wp_footer() ?>
<!-- FIN FOOTER -->
<script src= <?php echo $url . '/build/js/bundle.min.js' ?>></script>
</body>
</html>