<?php
/*
Template Name: archive-voice
*/?>
<?php get_header(); ?>

<main>
	<div class="voice-mv common-mv">
		<div class="common-mv__inner">
			<div class="common-mv__image">
				<picture>
					<source srcset="<?php echo get_theme_file_uri(''); ?>/assets/images/common/voice-mv-sp.jpg"
						media="(max-width:767px)">
					<img src="<?php echo get_theme_file_uri(''); ?>/assets/images/common/voice-mv.jpg" alt="海中を泳ぐ黄色い魚の画像">
				</picture>
			</div>
			<div class="common-mv__title-wrap">
				<h1 class="common-mv__title">voice</h1>
			</div>
		</div>
	</div>

	<!-- パンくず -->
	<div class="voice-breadcrumbs breadcrumbs layout-breadcrumbs">
		<div class="breadcrumbs__inner inner">
			<ul class="breadcrumbs__items">
				<li class="breadcrumbs__item">
					<?php
						if ( function_exists( 'bcn_display' ) ) {
							bcn_display();
						}
					?>
				</li>
			</ul>
		</div>
	</div>

	<!-- voice -->
	<section class="voice-body layout-body">
		<div class="voice-body__inner inner">
			<ul class="voice-body__tab tab">
				<li class="tab__item current">
					<a href="">all</a>
				</li>
				<li class="tab__item">
					<a href="">ライセンス講習</a>
				</li>
				<li class="tab__item">
					<a href="">ファンダイビング</a>
				</li>
				<li class="tab__item">
					<a href="">体験ダイビング</a>
				</li>
			</ul>
			<div class="voice-body__cards voice-cards fish-icon">
				<div class="voice-body__card voice-card">
					<div class="voice-card__head">
						<div class="voice-card__info">
							<div class="voice-card__meta">
								<div class="voice-card__age">20代(女性)</div>
								<div class="voice-card__category">ライセンス講習</div>
							</div>
							<div class="voice-card__title">
								ここにタイトルが入ります。ここにタイトル
							</div>
						</div>
						<div class="voice-card__img colorbox js-colorbox">
							<img src="./assets/images/common/voice-img01.jpg" alt="麦わら帽子をかぶった女性の正面写真">
						</div>
					</div>
					<div class="voice-card__text">
						私は今までずっと、海が持つ神秘性に惹かれてきました。<br>その魅力を求め、ついにダイビングの世界に足を踏み入れた日が忘れられません。<br>初めて水中に潜った瞬間、私の心は一瞬で海の無限の広がりに包まれました。静かな海底に沈むと、まるで別世界に迷い込んだかのような錯覚に陥りました。<br>ここにテキストが入ります。ここにテキストが入ります。
					</div>
				</div>
			</div>

			<div class="voice-body__pagination pagination-wrap">
				<ul class="pagination-wrap__items">
					<?php wp_pagenavi(); ?>
				</ul>
			</div>
		</div>
	</section>

	<section class="contact layout-body-contact">
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
							<span class="section-title__sub section-title__sub--contact">お問合せ</span>
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