<?php
/* Template Name: single */
get_header();
?>
<div id="return-button"></div>
<div class="menu-padder">
    <?php
	/* Start the Loop */
	while ( have_posts() ) : the_post();
		?>
		<div class="flexcont">
			<div class="work-col1">
				<h1><? the_title() ?></h1>
				<p class="post-tags">
					<?
					$post_tags = get_the_tags(); 
					if ( $post_tags ) {
						foreach( $post_tags as $tag ) {
						echo '#' . $tag->name . ' '; 
						}
					}
					?>
				</p>
			</div>
			<div class="work-col2">
				<p><? echo get_post_meta($post->ID, 'preamble', true); ?></p>
			</div>
			<div class="post-body">
				<? the_content() ?>
			</div>
			<div class="bottom-nav">
				<div class="prev-post">
					<?php
					$next_post = get_previous_post();
					if (empty( $next_post )){
						echo "empty";
						$args = array(
							'posts_per_page' => 1, // we need only the latest post, so get that post only
							'category_name' => 'work', // Use the category id, can also replace with category_name which uses category slug
							//'category_name' => 'SLUG OF FOO CATEGORY,
						);
						$q = new WP_Query( $args);
						
						if ( $q->have_posts() ) {
							while ( $q->have_posts() ) {
								$next_post = $q;
							}
							wp_reset_postdata();
						}
					}
					else {
						
					}

					?>
					<div class="bottom-nav-direction">
						<a href="<?php the_permalink()?>">Next</a>
					</div>
					<div class="bottom-nav-name">
						<a href="<?php the_permalink()?>"><?php the_title()?></a>
					</div>
					<div class="post-tags">
					<?php
						if (!empty( $next_post )):
							$post_tags = get_the_tags($next_post ->ID); 
							if ( $post_tags ) {
								foreach( $post_tags as $tag ) {
								echo '#' . $tag->name . ' '; 
								}
							}
						endif; ?>
					</div>
				</div>
			</div>
		</div>
	<?
	endwhile; // End of the loop.
	?>


</div>
			