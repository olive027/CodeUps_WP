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
	<div class="information-breadcrumbs layout-breadcrumbs">
		<?php get_template_part( 'parts/breadcrumbs' ); ?>
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

</main>

<?php get_footer(); ?>