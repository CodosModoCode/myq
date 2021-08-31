<?php get_header(  );?>
<div class="contenedor mt-2">
    <p class="tituloCombos">¿Ya conoces nuestros combos y precios especiales? Con ellos puedes disfrutar lo mejor de nuestros productos Únicos en Sabor a un buen precio</p>
    <div class="contenedorCombos">
        <?php
        if(have_posts()){
            while(have_posts()){
                the_post();
                ?>
                    <div class="combosCard">
                            <div class="titulo">
                                <h2><?php the_title(); ?></h2>
                                <div class="descripcion">
                                    <p><?php the_content( );?></p>
                                </div>
                            </div>

                            <div class="imagen">
                                <?php the_post_thumbnail('medium'); ?>
                                <div class="precio">
                                    $ <?php the_field('precio')?>
                                </div>
                            </div>
                        </div>
                <?php
            }
        }
        ?>
    </div>
</div>
<?php get_footer( ); ?>