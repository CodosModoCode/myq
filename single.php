<?php get_header(  ); ?>
aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
<main class="container">
    <?php
        if (have_posts()){
            while(have_posts(  )){
                the_post(  ); ?>
                    <div class="row">
                        <div class="col-12 display-3 text-white"><?php the_title( ); ?></div>
                        <div class="col-6"><?php the_post_thumbnail( 'medium' ); ?></div>
                        <div class="col-6"><?php the_content( );?></div>
                    </div>
                <?php
            }
        }
    ?>
</main>
<?php get_footer( ) ;?>