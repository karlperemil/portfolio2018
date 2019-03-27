<?php
/* Template Name: Work */
get_header();
?>
<div id="return-button"></div>
<div class="menu-padder">
    <?php
    $paged = 1;
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 6,
        'category_name' => 'work',
        'paged' => $paged
    );
    $wp_query = new WP_Query($args);
    $postcount = $wp_query->found_posts;
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
        ?>
            <article data-id="<?php the_permalink() ?>">
            <?php //the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive responsive--full', 'title' => 'Feature image']); ?>
            <div style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'full');?>?cacheBuster=1')" class="work-image">
            </div>
            <div class="flex-cont">
                <div class="work-text-left">
                    <h2><a href="<?php the_permalink() ?>"><?php the_title();?></a></h2>
                    <p class="post-tags"> <?php
                        $post_tags = get_the_tags();
 
                        if ( $post_tags ) {
                            foreach( $post_tags as $tag ) {
                            echo '#' . $tag->name . ' '; 
                            }
                        }
                        ?>
                    </p>
                </div>
                <div class="work-text-right">
                    <a href="<?php the_permalink() ?>"><button>View Case</button></a>
                </div>
            </div>
            </article>
        <?php
        endwhile;
    endif;
    ?>

<section class="collab">
    <h1>Looking for a collaboration?</h1>
    <p class="collab-mailto"><a href="mailto:hello@emilj.se">hello@emilj.se</a></p>
    <p class="thirds"><a href="tel:004672 962 04 41">Phone</a></p>
    <p class="thirds"><a href="https://github.com/karlperemil">Github</a></p>
    <p class="thirds"><a href="https://www.linkedin.com/in/emil-j%C3%B6nsson-22292034/">LinkedIn</a></p>
</section>


</div>