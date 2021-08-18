<!-- FOOTER -->
<?php $url = get_template_directory_uri(  ); ?>
<footer class="footer bg-negro mt-2 p-2">
    <div class="contenedor">
        <div class="secciones-footer">
            <div class="texto-centrado texto-negro-light">
                <?php dynamic_sidebar( 'footer_izq') ?>
            </div>
            <div class="logos-footer texto-centrado texto-negro-light">
                    <?php dynamic_sidebar( 'footer_centro') ?>
                    <div class="iconos">
                    <a href="https://www.facebook.com/myq.unicosensabor" target="_blank">
                        <i class="icono fab fa-facebook"></i>
                    </a>
                    <a href="https://www.instagram.com/myq.unicosensabor/" target="_blank">
                        <i class="icono fab fa-instagram"></i>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=573225293155&text=Hola%2C%20los%20vi%20en%20la%20p%C3%A1gina%20web%20y%20quiero%20un%20pedido%20grande%20de%20sus%20productos.">
                        <i class="icono fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>
            <div class=" texto-negro-light">
                <div class="formulario">
                    <?php dynamic_sidebar( 'footer_derecho') ?>
                </div>
            </div>
            
         </div>

        <div class="footer-marketi texto-sm sombra-lg mt-1 d-flex-between p-1 rounded">
            <p class="">Todos los derechos reservados | M&Q - Únicos en Sabor | 2021 | contacto@m&q.com</p>
            <div class="marketi-logo cursor-pointer">
                <a href="https://marketi.agency/" target="_blank">
                    <img src=<?php echo $url . '/assets/img/Logo-marketi.png' ?> alt="" class="w-50">
                </a>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer() ?>
<!-- FIN FOOTER -->
<script src= <?php echo $url . '/build/js/bundle.min.js' ?>></script>
</body>
</html>