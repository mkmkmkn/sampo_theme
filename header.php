<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="旅行">
	<meta name="description" content="TAKE WALK GLOBAL 世界規模で散歩しろ">

	<!-- title -->
	<title>
		<?php if(is_front_page()): ?>
		<?php bloginfo('name'); ?>

		<?php elseif(is_page()): ?>
		<?php echo trim(wp_title('', false)); ?> | <?php bloginfo('name'); ?>

		<?php elseif(is_single()): ?>
		<?php echo trim(wp_title('', false)); ?> | <?php bloginfo('name'); ?>
		
		<?php elseif(is_category(99)): ?>
		<?php if($paged !=0){echo '｜'.$paged.'ページ目';} ?> | <?php bloginfo('name'); ?>

		<?php elseif(is_search()): ?>
		「<?php the_search_query(); ?>」の検索結果<?php if($paged !=0){echo '｜'.$paged.'ページ目';} ?> | <?php bloginfo('name'); ?>

		<?php else: ?>
		<?php echo trim(wp_title('', false)); if(wp_title('', false)) { echo ' | '; } bloginfo('name'); ?>
		<?php endif; ?>
	</title>

	<!-- ファビコン -->
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/icon/favicon.png">

	<!-- stylesheet -->
	<link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/assets/css/reset.css')); ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/assets/css/style.css')); ?>" type="text/css">
	<link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/assets/css/sp.css')); ?>" type="text/css">

	<!-- font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Kanit:wght@400;500;700&family=Merriweather:wght@400;700&family=Noto+Sans+JP:wght@400;500;700&family=Noto+Serif+JP:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- jQuery CDN -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- スライドショーCDN -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/common.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
</head>
<?php wp_head(); ?>

<body <?php body_class(); ?>>

<header id="header">
	<a href="<?php echo esc_url(home_url('/')); ?>">
		<h1 class="header-logo">
			TWG
		</h1>
	</a>
    <div class="openbtn1"><span></span><span></span><span></span></div>
    <nav>
		<ul>
			<li class="pc"><a href="<?php echo esc_url(home_url('/')); ?>"><p>HOME</p></a></li>
			<li class="has-child"><a href="<?php echo esc_url(home_url('/travel')); ?>"><p>TRAVEL</p></a>
				<ul>
				<li><a href="<?php echo esc_url(home_url('/category/domestic')); ?>"><div></div><p>DOMESTIC</p></a></li>
				<li><a href="<?php echo esc_url(home_url('/category/abroad')); ?>"><div></div><p>ABROAD</p></a></li>
				</ul>
			</li>
			<li><a href="<?php echo esc_url(home_url('/photography')); ?>"><p>PHOTOGRAPHY</p></a></li>
			<li><a href="<?php echo esc_url(home_url('/contact')); ?>"><p>CONTACT</p></a></li>
		</ul>
	</nav>
</header>

<!-- mainにスラッグ名のidを付与 -->
<?php if (is_page()):?>
<main onclick=”” id="<?php echo esc_attr($post->post_name);?>">
<?php else:?>
<main onclick=”” id="pageNotFound">
<?php endif;?>

<!-- mv -->
<!-- TOPの場合 -->
<?php if( is_home() || is_front_page()): ?>
	<section class="top-mv">
		<ul class="top-mv-slider">
			<li>
				<div class="grid1">
					<div class="grid-item"></div>
					<div class="grid-item"></div>
					<div class="grid-item"></div>
					<div class="grid-item"></div>
					<div class="grid-item"></div>
					<div class="grid-item"></div>
					<div class="grid-item"></div>
					<div class="grid-item"></div>
					<div class="grid-item"></div>
					<div class="grid-item next"></div>
					<div class="grid-item"></div>
					<div class="grid-item"></div>
					<div class="grid-item"></div>
					<div class="grid-item prev"></div>
					<div class="grid-item"></div>
					<h2 class="grid-title">TAKE<br>WALK<br>GLOBAL</h2>
					<p class="grid-country">JAPAN</p>
					<p class="grid-text">Hokkaido<br>Okinawa</p>
				</div>
			</li>
			<li>
				<div class="grid2">
					<div class="grid-item"></div>
					<div class="grid-item"></div>
					<div class="grid-item"></div>
					<div class="grid-item"></div>
					<div class="grid-item"></div>
					<div class="grid-item"></div>
					<div class="grid-item"></div>
					<div class="grid-item"></div>
					<div class="grid-item"></div>
					<div class="grid-item next"></div>
					<div class="grid-item"></div>
					<div class="grid-item"></div>
					<div class="grid-item"></div>
					<div class="grid-item prev"></div>
					<div class="grid-item"></div>
					<h2 class="grid-title">TAKE<br>WALK<br>GLOBAL</h2>
					<p class="grid-country">VIETNAM</p>
					<p class="grid-text">Ha Noi<br>Da Nang<br>Hue<br>Hoi An</p>
				</div>
			</li>
			<li>
				<div class="grid3">
					<div class="grid-item"></div>
					<div class="grid-item"></div>
					<div class="grid-item"></div>
					<div class="grid-item"></div>
					<div class="grid-item"></div>
					<div class="grid-item"></div>
					<div class="grid-item"></div>
					<div class="grid-item"></div>
					<div class="grid-item"></div>
					<div class="grid-item next"></div>
					<div class="grid-item"></div>
					<div class="grid-item"></div>
					<div class="grid-item"></div>
					<div class="grid-item prev"></div>
					<div class="grid-item"></div>
					<h2 class="grid-title">TAKE<br>WALK<br>GLOBAL</h2>
					<p class="grid-country">SRI LANKA</p>
					<p class="grid-text">Kandy<br>Sigiriya<br>Dambulla<br>Kurunegala<br>Negombo<br></p>
				</div>
			</li>
		</ul>
		<!-- <div class="top-mv-dots"></div> -->
	</section>

<!-- TOP以外の場合 -->
<?php else: ?>
	<?php if( is_post_type_archive()): ?>
	<section class="other-mv">
		<div class="other-mv-background-filter"></div>
		<div class="title">
			<h2 class="title-eng">TRAVEL</h2>
			<h3 class="title-jpn">旅行</h3>
		</div>
	</section>

	<?php elseif( is_page('contact')): ?>
	<section class="other-mv">
		<div class="other-mv-background-filter"></div>
		<div class="title">
			<h2 class="title-eng">CONTACT</h2>
			<h3 class="title-jpn">お問い合わせ</h3>
		</div>
	</section>

	<?php elseif( is_page('photography')): ?>
	<section class="other-mv">
		<div class="other-mv-background-filter"></div>
		<div class="title">
			<h2 class="title-eng">PHOTOGRAPHY</h2>
			<h3 class="title-jpn">写真集</h3>
		</div>
	</section>

    <?php elseif( is_category() ): ?>
	<!-- カテゴリーのデータを取得 -->
	<?php
	$cat = get_the_category();
	$cat = $cat[0];
	?>
	<section class="other-mv">
		<div class="other-mv-background-filter"></div>
		<div class="title">
			<h2 class="title-eng"><?php echo single_cat_title('',false); ?></h2>
			<h3 class="title-jpn">
				<?php if(category_description()):
					echo category_description();
				endif; ?>
			</h3>
		</div>
	</section>

	<?php elseif( is_singular('post')): ?>
		<?php
			$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
		?>
		<?php if($url): ?>
		<?php echo '<section class="other-mv" style="background-image: url('. $url.')">'; ?>
		<?php else: ?>
		<section class="other-mv">
		<?php endif; ?>
		<div class="other-mv-background-filter"></div>
		<div class="title">
			<h2 class="title-eng">
				<?php
				// スラッグを出力
				echo get_post_field( 'post_name', get_the_ID() );
				?>
			</h2>
			<h3 class="title-jpn"><?php the_title(); ?></h3>
		</div>
	</section>

	<?php else: ?>
	<section class="other-mv">
		<div class="other-mv-background-filter"></div>
		<div class="title">
			<h2 class="title-eng">404</h2>
			<h3 class="title-jpn">Page not found</h3>
		</div>
	</section>
	<?php endif; ?>
<?php endif; ?>

<!-- パンくずリスト -->
<?php if( is_home() || is_front_page()): ?>

<?php elseif( is_singular('post')): ?>
	<div class="pankuzu" id="pankuzu" vocab="http://schema.org/" typeof="BreadcrumbList">
		<?php bcn_display(); ?>
		<?php
		// スラッグを出力
		echo get_post_field( 'post_name', get_the_ID() );
		?>
	</div>
<?php else: ?>
	<div class="pankuzu" id="pankuzu" vocab="http://schema.org/" typeof="BreadcrumbList">
		<?php bcn_display(); ?>
	</div>
<?php endif; ?>