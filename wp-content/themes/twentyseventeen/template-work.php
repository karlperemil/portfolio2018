<?php
/* Template Name: Work */
get_header();
?>

<div class="menu-padder">
    <?php
    if ( have_posts() ) :

        /* Start the Loop */
        while ( have_posts() ) : the_post();

            /*
            * Include the Post-Format-specific template for the content.
            * If you want to override this in a child theme, then include a file
            * called content-___.php (where ___ is the Post Format name) and that will be used instead.
            */
            echo the_title();

        endwhile;
    else :

        get_template_part( 'template-parts/post/content', 'none' );

    endif;
    ?>

</div>