<?php get_header(); ?>
	<section class="top-about">
		<div class="container">
			<div class="title">
				<h3 class="title-eng">ABOUT</h3>
				<h4 class="title-jpn"></h4>
			</div>
			<div class="content">
				<p>サンプルテキスト　サンプルテキスト　サンプルテキスト　サンプルテキスト　サンプルテキスト　サンプルテキスト　サンプルテキスト　サンプルテキスト　サンプルテキスト　サンプルテキスト　サンプルテキスト　サンプルテキスト　サンプルテキスト　サンプルテキスト　サンプルテキスト　サンプルテキスト　サンプルテキスト　サンプルテキスト　サンプルテキスト　サンプルテキスト　サンプルテキスト　サンプルテキスト　サンプルテキスト　サンプルテキスト　サンプルテキスト　サンプルテキスト　サンプルテキスト　サンプルテキスト　サンプルテキスト　サンプルテキスト　サンプルテキスト　サンプルテキスト　サンプルテキスト　サンプルテキスト</p>
			</div>
		</div>
	</section>
	<section class="top-travel">
		<div class="container">
			<div class="title">
				<h3 class="title-eng">TRAVEL</h3>
				<h4 class="title-jpn"></h4>
			</div>
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
		</div>
	</section>
	<section class="top-photography">
		<div class="container">
			<div class="title">
				<h3 class="title-eng">PHOTOGRAPHY</h3>
				<h4 class="title-jpn"></h4>
			</div>
			<div class="content">
				<div class="allCountryButton">
					<a href="<?php echo esc_url(home_url('/travel')); ?>">see all countries<div>+</div></a>
				</div>
				<div class="top-photography-slider">
					<a href="<?php echo esc_url(home_url('/category/domestic')); ?>">
						<div class="item item1">
							<div class="content-title">
								<h5>JAPAN</h5>
								<h6>日本</h6>
							</div>
						</div>
					</a>
					<a href="<?php echo esc_url(home_url('/travel/vietnam')); ?>">
						<div class="item item2">
							<div class="content-title">
								<h5>VIETNAM</h5>
								<h6>ベトナム</h6>
							</div>
						</div>
					</a>
					<a href="<?php echo esc_url(home_url('/travel/srilanka')); ?>">
						<div class="item item3">
							<div class="content-title">
								<h5>SRI LANKA</h5>
								<h6>スリランカ</h6>
							</div>
						</div>
					</a>
				</div>
				<div class="top-photography-dots"></div>
			</div>
		</div>
	</section>
	<section class="top-contact">
		<div class="container">
			<div class="title">
				<h3 class="title-eng">CONTACT</h3>
				<h4 class="title-jpn"></h4>
			</div>
			<div class="content">
				<div class="contact-btn">
					<a href="<?php echo esc_url(home_url('/contact')); ?>">
						<div></div>
						<p>ご意見、ご感想はコチラ</p>
						<div></div>
					</a>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>