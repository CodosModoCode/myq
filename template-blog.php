<?php 
//Template Name: blog
get_header(  );?>
<div class="contenedor producos-destacados mt-2">
    <h1 class="texto-magenta">BLOG</h1>
    <hr class="my-2" style="opacity: .2;">
    <div class="post-catergorias">
        <?php
        global $post;

        $last_posts = get_posts(array('posts_per_page' => 3));

        foreach ( $last_posts as $post ) :
        setup_postdata( $post );?>

        <div class="">
            <a href="<?php the_permalink( )?>">
                <?php the_post_thumbnail();?>
                <h3><?php the_title();?></h3>
                <p><?php the_excerpt();?></p>
            </a>
        </div>

        <?php endforeach;
        wp_reset_postdata();
        ?>
    </div>
</div>
<?php get_footer( ); ?>