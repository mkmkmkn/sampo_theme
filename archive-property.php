<?php
/**
* Template Name: property
*/
get_header();
?>
	<div class="sidebar-2column">
		<?php get_sidebar(); ?>

		<section class="property-content sidebar-2column-right">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<a href="<?php the_permalink() ?>" class="property-contentLink">
					<div class="property-contentItem">
						<div class="left">
							<?php $thumbnail = SCF::get('thumbnail'); ?>
							<?php if ($thumbnail) { ?>
								<?php echo wp_get_attachment_image($thumbnail, 'full'); ?>
							<?php } else { ?>
								<div class="noImage"><p>No image</p></div>
							<?php } ?>
						</div>
						<div class="right">
							<h3>
								<?php the_title(); ?>
							</h3>
							<div class="right-2column">
								<ul>
									<li>用途：<?php echo SCF::get('use'); ?></li>
									<li>所在地：<?php echo SCF::get('address'); ?></li>
									<li>
										<p>空室：</p><p class="textLimit">
										<?php
										$fieldItem_group = SCF::get('vacancy');
										foreach ($fieldItem_group as $fields ) {
											if($fields['vacancy_roomNumber'] !== "" || !empty($fields['vacancy_roomNumber'])) {
											?>あり
												<?php }else{ ?>
												なし
											<?php
											}
										}
										?>			
										</p>
									</li>
								</ul>
								<div class="right-2column-iconBox">
									<?php $checkboxs = SCF::get( 'facility', $post->ID ); ?>
									<?php if ( in_array( 'クローゼット', $checkboxs ) ): ?>クローゼット チェック有<?php else : ?>クローゼット チェック無<?php endif; ?>
									<?php if ( in_array( 'ウォークインクローゼット', $checkboxs ) ): ?>ウォークインクローゼット チェック有<?php else : ?>ウォークインクローゼット チェック無<?php endif; ?>
									<?php if ( in_array( '収納スペース', $checkboxs ) ): ?>収納スペース チェック有<?php else : ?>収納スペース チェック無<?php endif; ?>
									<img src="<?php echo get_template_directory_uri(); ?>/img/property/closet.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</a>
			<?php endwhile; endif; ?>
		</section>
	</div>
</main>
<?php get_footer(); ?>