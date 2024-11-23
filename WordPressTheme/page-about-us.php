<?php
/*
Template Name: about-us
*/?>
<?php get_header(); ?>

<main>
	<div class="about-mv common-mv">
		<div class="common-mv__inner">
			<div class="common-mv__image">
				<picture>
					<source srcset="<?php echo get_theme_file_uri(''); ?>/assets/images/common/about-mv-sp.jpg"
						media="(max-width:767px)">
					<img src="<?php echo get_theme_file_uri(''); ?>/assets/images/common/about-mv.jpg" alt="海中を泳ぐ黄色い魚の画像">
				</picture>
			</div>
			<div class="common-mv__title-wrap">
				<h1 class="common-mv__title common-mv__title--about">about&nbsp;us</h1>
			</div>
		</div>
	</div>

	<!-- パンくず -->
	<div class="about-breadcrumbs layout-breadcrumbs">
		<?php get_template_part( 'parts/breadcrumbs' ); ?>
	</div>

	<!-- about -->
	<section class="about-body layout-body">
		<div class="about-body__inner inner">
			<div class="about-body__content about__body fish-icon">
				<div class="about__img-wrap">
					<div class="about__img-small u-desktop">
						<img src="<?php echo get_theme_file_uri(''); ?>/assets/images/common/about-img01.jpg"
							alt="屋根の上にシーサーが乗っている画像">
					</div>
					<div class="about__img-big about__img-big--page">
						<img src="<?php echo get_theme_file_uri(''); ?>/assets/images/common/about-img02.jpg" alt="海中で黄色い魚が泳いでいる画像">
					</div>
				</div>
				<div class="about__content about__content--page">
					<div class="about__title about__title--page">Dive&nbsp;into<br>the&nbsp;Ocean</div>
					<div class="about__text-wrap about__text-wrap--page">
						<p class="about__text">
							「&nbsp;Dive&nbsp;into&nbsp;the&nbsp;Ocean&nbsp;」は、青い海と空に包まれた、非日常の世界への招待状です。<br>プロのガイドと共に、美しいサンゴ礁と多彩な生態系に触れ合っていただきます。<br>初心者から経験豊かなダイバーまで全てのレベルで、安心してダイビングをお楽しみいただけます。
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- gallery -->
	<?php
	$gallery_images = SCF::get('about_gallery');
	if (!empty($gallery_images)): // 画像が存在する場合のみセクションを出力
	?>
	<section class="about-gallery fish-icon">
		<div class="about-gallery__inner inner">
			<div class="about-gallery__section-title section-title">
				<span class="section-title__main">gallery</span>
				<h2 class="section-title__sub">フォト</h2>
			</div>
			<div class="about-gallery__images">
				<?php
            foreach ($gallery_images as $fields): // 繰り返しフィールドの各画像をループ
                $image_url = wp_get_attachment_image_src($fields['gallery_img'], 'full'); // 画像URLを取得
                $image_alt = !empty($fields['gallery_img_alt']) ? esc_attr($fields['gallery_img_alt']) : 'Aboutページギャラリー画像'; // altテキストを取得
            ?>
				<div class="about-gallery__img js-modal-open">
					<img src="<?php echo esc_url($image_url[0]); ?>" alt="<?php echo $image_alt; ?>">
				</div>
				<?php endforeach; ?>
			</div>
		</div>
		<!-- モーダル -->
		<div class="modal js-modal">
			<div class="modal__bg js-modal-close"></div>
			<div class="modal__img js-modal-img">
				<img src="" alt="">
			</div>
		</div>
	</section>
	<?php endif; // 画像が存在しない場合はセクション全体を出力しない ?>

</main>

<?php get_footer(); ?>