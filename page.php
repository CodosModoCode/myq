<?php get_header(); ?>
<div class="contenedor mt-1 sombra-lg rounded p-5 border-box">
<?php
        // Pregunta si hay post (devuelve true o false)
        if(have_posts()){
            // si hay post los itera en un ciclo
            while(have_posts()){
                // almacena el post en la funcion the_post()
                the_post() ;?>
                    <!-- imprimer el titulo -->
                    <h1><?php the_title()?></h1>
                    <!-- imprime el contenido -->
                    <?php the_content()?>
                <?php
            }
        }
    ?>
</div>
<?php get_footer(); ?>