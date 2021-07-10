<?php get_header(  );?>
<div class="contenedor">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia non sapiente commodi libero ullam dignissimos nam explicabo, ad dicta expedita.

    <?php
        if (have_posts(  )){
            while (have_posts(  )) {
                the_post(  )
                ?>
                <h1><?php the_title(  )?></h1>
                <?php
            }
        }
    ?>
</div>
<?php get_footer( ); ?>