<?php
/**
* Template Name: property
*/
get_header();
?>



	<div class="sidebar-2column">
		<?php get_sidebar(); ?>

		<section class="vacancy-content sidebar-2column-right">
			<table>
				<thead>
					<tr>
						<th>物件名</th>
						<th>部屋番号</th>
						<th>用途</th>
						<th>間取 / 面積</th>
						<th>状態</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$term_object = get_queried_object(); // タームオブジェクトを取得
					$term_slug = $term_object->slug; // タームスラッグ
					$args = array( 
						'post_type' => 'property',
						'taxonomy' => 'property-tag',
						'term' => $term_slug,
						'posts_per_page' => -1,
					);
					$custom_query = new WP_Query( $args );
					if ( $custom_query->have_posts() ) : 
						while ( $custom_query->have_posts() ) : 
							$custom_query->the_post(); 
					?>
					<tr>
						<td>
							<a href="<?php the_permalink() ?>">
								<?php the_title(); ?>
							</a>
						</td>
						<td>
							<a href="<?php the_permalink() ?>">
								<?php echo SCF::get('roomNumber'); ?>
							</a>
						</td>
						<td>
							<a href="<?php the_permalink() ?>">
								<?php echo SCF::get('use'); ?>
							</a>
						</td>
						<td>
							<a href="<?php the_permalink() ?>">
								<?php echo SCF::get('floorPlan'); ?> / <?php echo SCF::get('area'); ?>
							</a>
						</td>
						<td>
							<a href="<?php the_permalink() ?>">
								<?php echo SCF::get('situation'); ?>
							</a>
						</td>
					</tr>
					<?php endwhile;?>
					<?php else : ?>
					物件がありません。
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>
				</tbody>
			</table>
		</section>
	</div>
</main>
<?php get_footer(); ?>