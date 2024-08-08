<?php
/*
Template Name: information
*/?>
<?php get_header(); ?>

<main>
	<div class="information-mv common-mv">
		<div class="common-mv__inner">
			<div class="common-mv__image">
				<picture>
					<source srcset="<?php echo get_theme_file_uri(''); ?>/assets/images/common/information-mv-sp.jpg"
						media="(max-width:767px)">
					<img src="<?php echo get_theme_file_uri(''); ?>/assets/images/common/information-mv.jpg" alt="海中を泳ぐ黄色い魚の画像">
				</picture>
			</div>
			<div class="common-mv__title-wrap">
				<h1 class="common-mv__title">information</h1>
			</div>
		</div>
	</div>

	<!-- パンくず -->
	<div class="information-breadcrumbs breadcrumbs layout-breadcrumbs">
		<div class="breadcrumbs__inner inner">
			<ul class="breadcrumbs__items">
				<li class="breadcrumbs__item">
					<a href="<?php echo esc_url( home_url('/')); ?>">top</a>
				</li>
				<li class="breadcrumbs__item">ダイビング情報</li>
			</ul>
		</div>
	</div>

	<!-- information -->
	<section class="information-body layout-body layout-body--information fish-icon">
		<div class="information-body__inner inner">
			<ul class="information-body__tabs">
				<li class="information-body__tab js-information-tab current" id="license">
					<span>ライセンス<br class="u-mobile">講習</span>
				</li>
				<li class="information-body__tab js-information-tab" id="fan">
					<span>ファン<br class="u-mobile">ダイビング</span>
				</li>
				<li class="information-body__tab js-information-tab" id="experience">
					<span>体験<br class="u-mobile">ダイビング</span>
				</li>
			</ul>
			<div class="information-body__contents">
				<div class="information-body__content-wrap js-information-content" id="license-content">
					<div class="information-body__content info-card">
						<div class="info-card__body">
							<p class="info-card__title">ライセンス講習</p>
							<p class="info-card__text">
								泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！
							</p>
						</div>
						<div class="info-card__image">
							<img src="<?php echo get_theme_file_uri(''); ?>/assets/images/common/information-license.jpg"
								alt="数人のダイバーが水面にいる様子の画像">
						</div>
					</div>
				</div>
				<div class="information-body__content-wrap js-information-content" id="fan-content">
					<div class="information-body__content info-card">
						<div class="info-card__body">
							<p class="info-card__title">ファンダイビング</p>
							<p class="info-card__text">
								ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！</p>
						</div>
						<div class="info-card__image">
							<img src="<?php echo get_theme_file_uri(''); ?>/assets/images/common/information-fundiving.jpg"
								alt="小さなイワシの群れが海中を泳ぐ様子の画像">
						</div>
					</div>
				</div>
				<div class="information-body__content-wrap js-information-content" id="experience-content">
					<div class="information-body__content info-card">
						<div class="info-card__body">
							<p class="info-card__title">体験ダイビング</p>
							<p class="info-card__text">
								体験ダイビングは、ダイビングの楽しさや魅力を実感する絶好の機会です。普段は味わえない非日常の体験を求める方や、自然の美しさに触れたい方にとって、このプログラムは最適です。経験豊富なインストラクターが安全にご案内し、初心者の方でも安心してダイビングの世界を楽しんでいただけます。ぜひ一度、体験ダイビングに挑戦してみてください。新たな世界があなたを待っています！
							</p>
						</div>
						<div class="info-card__image">
							<img src="<?php echo get_theme_file_uri(''); ?>/assets/images/common/information-diving.jpg"
								alt="縞々模様の2匹の黄色い魚が泳ぐ様子の画像">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- contact -->
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