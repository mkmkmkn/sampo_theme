<?php
/**
* Template Name: archive
*/
get_header();
?>


<section class="category-contents">
        <div class="container">
			<div class="content">
                <?php 
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                ?>

				<a href="<?php the_permalink(); ?>">
					<div class="content-item">
						<div class="travel-image">
                            <?php
                                $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                            ?>
                            <?php if($url): ?>
                            <?php echo '<div class="travel-image-category" style="background-image: url('. $url.')">'; ?>
                            <?php else: ?>
                            <div class="travel-image-category">
                            <?php endif; ?>
                            </div>
						</div>
						<div class="content-title content-title-category">
							<h5>
                                <?php
                                // スラッグを出力
                                echo get_post_field( 'post_name', get_the_ID() );
                                ?>
                            </h5>
							<h6><?php the_title(); ?></h6>
						</div>
					</div>
				</a>

                <?php 
                    endwhile;
                endif;
                ?>
			</div>
        </div>
    </section>
</main>
<?php get_footer(); ?>