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

	<!--パンくず  -->
	<div class="faq-breadcrumbs layout-breadcrumbs">
		<?php get_template_part( 'parts/breadcrumbs' ); ?>
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
</main>


<?php get_footer(); ?>