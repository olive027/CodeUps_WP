<?php
/*
Template Name: faq
*/?>
<?php get_header(); ?>
<main>
	<div class="faq-mv common-mv">
		<div class="common-mv__inner">
			<div class="common-mv__image">
				<picture>
					<source srcset="<?php echo get_theme_file_uri(''); ?>/assets/images/common/faq-mv-sp.jpg"
						media="(max-width:767px)">
					<img src="<?php echo get_theme_file_uri(''); ?>/assets/images/common/faq-mv.jpg" alt="白い砂浜と穏やかな海の画像">
				</picture>
			</div>
			<div class="common-mv__title-wrap">
				<h1 class="common-mv__title">FAQ</h1>
			</div>
		</div>
	</div>

	<div class="faq-breadcrumbs breadcrumbs layout-breadcrumbs">
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

	<section class="faq-body layout-body layout-body--faq">
		<div class="faq-body__inner inner">
			<div class="faq-body__accordion accordion fish-icon">
				<ul class="accordion__items">
					<?php
					$post_id = get_the_ID();

					// FAQの質問と回答のフィールドを取得
					$faq_questions = SCF::get('faq_question', $post_id);
					$faq_answers = SCF::get('faq_answer', $post_id);

					// 質問と回答の数が一致するかを確認
					if (!empty($faq_questions) && !empty($faq_answers) && count($faq_questions) === count($faq_answers)) {
							// 各フィールドをループで処理
							for ($i = 0; $i < count($faq_questions); $i++) {
									$question = $faq_questions[$i];
									$answer = $faq_answers[$i];
							?>
					<li class="accordion__item accordion-item js-accordion__item">
						<h3 class="accordion-item__title js-accordion__title">
							<?php echo nl2br(esc_html($question)); ?>
						</h3>
						<div class="accordion-item__content js-accordion__content">
							<p><?php echo nl2br(esc_html($answer)); ?></p>
						</div>
					</li>
					<?php
							}
					} else {
							// フィールドがない場合または数が一致しない場合の処理
							echo '<p>ただいま準備中です。</p>';
					}
					?>
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