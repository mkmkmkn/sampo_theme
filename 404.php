<?php get_header(); ?>
	<section class="pageNotFound-contents">
		<h4>ページが見つかりません</h4>
		<p class="centerText">
			お探しのページが見つかりません。<br>
			一時的にアクセスできない状況にあるか、移動もしくは削除された可能性があります。<br>
			TOPページから再度アクセスしてください。
		</p>
		<div class="homeBtn">
			<a href="<?php echo esc_url(home_url('/')) ;?>">
				<p>TOP</p>
			</a>
		</div>
	</section>
</main>
<?php get_footer(); ?>