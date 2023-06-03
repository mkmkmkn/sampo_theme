<?php
/**
* Template Name: archive
*/
get_header();
?>


	<article class="single-contents">
		<div class="container">
			<section class="content">
				<?php the_content(); ?>
				<div class="date">
					<?php the_time('Y.m.d'); ?>
				</div>
			</section>
		</div>
	</article>
</main>
<?php get_footer(); ?>