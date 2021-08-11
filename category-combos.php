<?php get_header(  );?>
<div class="contenedor mt-2">
    <p class="tituloCombos">Conoce Nuestros Combos que tenemos para ti y disfruta de los pasteles Únicos en saber!</p>
    
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

   
    <!-- <div class="post-sedes">
        <?php
            if (have_posts(  )){
                while (have_posts(  )) {
                    the_post(  )
                    ?>
                    
                        <div class="post-item">
                            <div class="imagen">
                                <?php the_post_thumbnail('medium') ?>
                            </div>
                            <div class="d-flex-column-left">
                                <div class="texto-negro p-2">
                                   <h2><i class="fas fa-map-marked-alt"></i>  <?php the_title(  )?></h2> 
                                    <div class=""><span class="texto-bold">Teléfono:</span> <?php the_field( 'telefono_movil' ); ?></div>
                                    <div class=""><span class="texto-bold">Dirección:</span> <?php the_field( 'direccion' ); ?></div>
                                    <div class=""><span class="texto-bold">Horario de Atención:</span> <?php the_field( 'horario_de_atencion' ); ?></div>
                                    <hr class="texto-gris my-1" style="opacity:.2">
                                    <a href="<?php the_permalink() ?>"><button class="btn-magenta">Ver Sede</button></a>
                                </div>
                            </div>
                        </div>
                    
                    <?php
                }
            }
        ?>
    </div> -->
</div>
<?php get_footer( ); ?>