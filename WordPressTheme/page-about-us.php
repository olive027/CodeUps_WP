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
	<div class="about-breadcrumbs breadcrumbs layout-breadcrumbs">
		<div class="breadcrumbs__inner inner">
			<ul class="breadcrumbs__items">
				<li class="breadcrumbs__item">
					<?php
						if ( function_exists( 'bcn_display' ) ) {
							bcn_display();
						}
					?>
				</li>
				<!-- <li class="breadcrumbs__item">私たちについて</li> -->
			</ul>
		</div>
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
	<section class="about-gallery fish-icon">
		<div class="about-gallery__inner inner">
			<div class="about-gallery__section-title section-title">
				<span class="section-title__main">gallery</span>
				<h2 class="section-title__sub">フォト</h2>
			</div>
			<div class="about-gallery__images">

				<?php
        // Smart Custom Fieldsを使用して、about_galleryカスタム投稿タイプの繰り返し画像を取得
        	$gallery_images = SCF::get('about_gallery'); // 'about_gallery' フィールドのデータを取得

        	if (!empty($gallery_images)): // 画像が存在するかチェック
          foreach ($gallery_images as $fields): // 繰り返しフィールドの各画像をループ
          $image_url = wp_get_attachment_image_src($fields['gallery_img'] , 'full'); // 画像URLを取得
        ?>
				<div class="about-gallery__img js-modal-open">
					<img src="<?php echo esc_url($image_url[0]); ?>" alt="沢山の赤い小さな魚がサンゴ礁の間を泳ぐ様子">
				</div>

				<?php endforeach; endif; ?>
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

	<section class="contact contact--page layout-body-contact layout-body-contact--about">
		<div class="contact__inner inner">
			<div class="contact__content">
				<div class="contact__left">
					<div class="contact__logo">
						<img src="<?php echo get_theme_file_uri(''); ?>/assets/images/common/CodeUps-logo-green.png"
							alt="CodeUps-logo">
					</div>
					<div class="contact__info">
						<div class="contact__info-text">
							<p>沖縄県那覇市1-1</p>
							<p><a href="tel:0120-000-0000">TEL:0120-000-0000</a></p>
							<p>営業時間:8:30-19:00</p>
							<p>定休日:毎週火曜日</p>
						</div>
						<div class="contact__map">
							<iframe
								src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3578.992191220852!2d127.68598738705435!3d26.22944326791472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e56bd0b4a42ff1%3A0x36812e0e598f7d6b!2z44CSOTAwLTAwMDUg5rKW57iE55yM6YKj6KaH5biC5aSp5LmF77yR5LiB55uu77yR!5e0!3m2!1sja!2sjp!4v1702032611149!5m2!1sja!2sjp"
								width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
								referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>
				</div>
				<div class="contact__right">
					<div class="contact__section-title section-title">
						<h2 class="section-title__main section-title__main--contact">contact
							<span class="section-title__sub section-title__sub--contact">お問い合わせ</span>
						</h2>
					</div>
					<p class="contact__text">ご予約・お問い合わせはコチラ</p>
					<div class="contact__link">
						<a href="<?php echo esc_url( home_url('/')); ?>contact" class="button"><span>contact&nbsp;us</span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>