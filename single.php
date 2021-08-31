<?php get_header(); ?>
<?php $url = get_template_directory_uri(  ); ?>
<div class="page_container contenedor rounded mt-2 border-box">
    <div class="contenido px-2">
    <?php
                // Pregunta si hay post (devuelve true o false)
                if(have_posts()){
                    // si hay post los itera en un ciclo
                    while(have_posts()){
                        // almacena el post en la funcion the_post()
                        the_post() ;?>
                            <!-- imprimer el titulo -->
                            <div class="my-2">
                                <h1 class=""><?php the_title()?></h1>
                                <em class="texto-naranja"><span class="texto-bold">Escrito por:</span> <?php the_author()?></em> | 
                                <em class="texto-naranja"><span class="texto-bold">Fecha:</span> <?php the_date()?></em>
                            </div>
                            <div class="rounded">
                                <?php the_post_thumbnail('full')?>
                            </div>
                            <!-- imprime el contenido -->
                            <?php the_content()?>
                        <?php
                    }
                }
            ?>
    </div>
    <div class="lateral">
        <h2>¿ya Conoces nuestros productos destacados?</h2>
        <p>Nuestros productos son únicos en sabor, qué esperas a conocerlos</p>
        <div class="producto-destacado">
            <?php
                // $numero = rand(1,4); 
                $arg = array(
                    // nombre del post type creado en function.php
                    'post_type'             => 'producto',
                    'posts_per_page'         => 2,
                    // 'order'                 => 'ASC',
                    // 'orderby'               => 'date,'
                    'orderby'               => 'rand'
                );
            
            $productos = new WP_Query($arg);
            
            if($productos->have_posts( )){
                while($productos->have_posts()){
                    $productos->the_post(  );

                    ?>
                    
                        <a class="text-dark" href="<?php the_permalink( ) ?>">
                        
                        <div class="">
                            <?php the_post_thumbnail('thumbnail'); ?>
                        </div>
                        <div class="py-1 mx-2 texto-bold  texto-naranja texto-centrado">
                        <?php the_title(  ) ?>
                        </div>
                    </a> 
                    
                    <?php
                }
            }
            ?>
        </div>
        <hr class="texto-naranja my-2" style="opacity: .3;">
        <div class="bg-magenta p-2 rounded">
            <h3 class="texto-blanco cursor-pointer">Atendemos tus eventos familiares y empresariales</h3>
        </div>
    </div>
</div>
<?php get_footer(); ?>