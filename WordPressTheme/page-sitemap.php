<?php
/*
Template Name: sitemap
*/?>
<?php get_header(); ?>
<main>
	<div class="sitemap-mv common-mv">
		<div class="common-mv__inner">
			<div class="common-mv__image">
				<picture>
					<source srcset="<?php echo get_theme_file_uri(''); ?>/assets/images/common/sitemap-mv-sp.jpg"
						media="(max-width:767px)">
					<img src="<?php echo get_theme_file_uri(''); ?>/assets/images/common/sitemap-mv.jpg" alt="白い砂浜と穏やかな海の画像">
				</picture>
			</div>
			<div class="common-mv__title-wrap">
				<h1 class="common-mv__title">site&nbsp;MAP</h1>
			</div>
		</div>
	</div>

	<!-- パンくず -->
	<div class="sitemap-breadcrumbs layout-breadcrumbs">
		<?php get_template_part( 'parts/breadcrumbs' ); ?>
	</div>

	<!-- sitemap -->
	<section class="sitemap-body layout-body layout-body--sitemap">
		<div class="sitemap-body__inner inner">
			<nav class="sitemap-body__nav sitemap-body-nav fish-icon">
				<div class="sitemap-body-nav__left">
					<ul class="sitemap-body-nav__left-items">
						<li class="sitemap-body-nav__left-item">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>campaign">キャンペーン</a>
						</li>
						<li class="sitemap-body-nav__left-item">
							<a href="">ライセンス取得</a>
						</li>
						<li class="sitemap-body-nav__left-item">
							<a href="">貸切体験ダイビング</a>
						</li>
						<li class="sitemap-body-nav__left-item">
							<a href="">ナイトダイビング</a>
						</li>
					</ul>
					<ul class="sitemap-body-nav__left-items">
						<li class="sitemap-body-nav__left-item">
							<a href="<?php echo esc_url( home_url('/')); ?>about">私たちについて</a>
						</li>
					</ul>
					<ul class="sitemap-body-nav__left-items">
						<li class="sitemap-body-nav__left-item">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>information">ダイビング情報</a>
						</li>
						<li class="sitemap-body-nav__left-item">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>information?no=license">ライセンス講習</a>
						</li>
						<li class="sitemap-body-nav__left-item">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>information?no=experience">体験ダイビング</a>
						</li>
						<li class="sitemap-body-nav__left-item">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>information?no=fan">ファンダイビング</a>
						</li>
					</ul>
					<ul class="sitemap-body-nav__left-items">
						<li class="sitemap-body-nav__left-item">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>blog">ブログ</a>
						</li>
					</ul>
				</div>
				<div class="sitemap-body-nav__right">
					<ul class="sitemap-body-nav__right-items">
						<li class="sitemap-body-nav__right-item">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>voice">お客様の声</a>
						</li>
					</ul>
					<ul class="sitemap-body-nav__right-items">
						<li class="sitemap-body-nav__right-item">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>price">料金一覧</a>
						</li>
						<li class="sitemap-body-nav__right-item">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>price#license">ライセンス講習</a>
						</li>
						<li class="sitemap-body-nav__right-item">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>price#experience">体験ダイビング</a>
						</li>
						<li class="sitemap-body-nav__right-item">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>price#fan">ファンダイビング</a>
						</li>
					</ul>
					<ul class="sitemap-body-nav__right-items">
						<li class="sitemap-body-nav__right-item">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>faq">よくある質問</a>
						</li>
					</ul>
					<ul class="sitemap-body-nav__right-items">
						<li class="sitemap-body-nav__right-item">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>privacy-policy">プライバシー<br class="u-mobile">ポリシー</a>
						</li>
					</ul>
					<ul class="sitemap-body-nav__right-items">
						<li class="sitemap-body-nav__right-item">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>terms-of-service">利用規約</a>
						</li>
					</ul>
					<ul class="sitemap-body-nav__right-items">
						<li class="sitemap-body-nav__right-item">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>contact">お問い合わせ</a>
						</li>
					</ul>
					<ul class="sitemap-body-nav__right-items">
						<li class="sitemap-body-nav__right-item">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>sitemap">サイトマップ</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</section>

</main>

<?php get_footer(); ?>