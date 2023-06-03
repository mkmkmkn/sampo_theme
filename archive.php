<?php
/**
* Template Name: travel
*/
get_header();
?>


<section class="travel-contents">
        <div class="container">
			<div class="content">
				<a href="<?php echo esc_url(home_url('/category/domestic')); ?>">
					<div class="content-item">
						<div class="travel-image">
							<div class="travel-image-domestic"></div>
						</div>
						<div class="content-title content-title-domestic">
							<h5>DOMESTIC</h5>
							<h6>国内</h6>
						</div>
					</div>
				</a>
				<a href="<?php echo esc_url(home_url('/category/abroad')); ?>">
					<div class="content-item">
						<div class="travel-image">
							<div class="travel-image-abroad"></div>
						</div>
						<div class="content-title content-title-abroad">
							<h5>ABROAD</h5>
							<h6>海外</h6>
						</div>
					</div>
				</a>
			</div>

            <!-- カテゴリー　一覧出力用 -->
            <!-- <ul>
                <?php
                $args = array(
                    'title_li' => ''
                );
                wp_list_categories($args);
                ?>
            </ul> -->
            
        </div>
    </section>
</main>
<?php get_footer(); ?>