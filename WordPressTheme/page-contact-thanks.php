<?php
/*
Template Name: contact-thanks
*/?>
<?php get_header(); ?>

<main>
	<div class="contact-mv common-mv">
		<div class="common-mv__inner">
			<div class="common-mv__image">
				<picture>
					<source srcset="<?php echo get_theme_file_uri(''); ?>/assets/images/common/contact-mv-sp.jpg"
						media="(max-width:767px)">
					<img src="<?php echo get_theme_file_uri(''); ?>/assets/images/common/contact-mv.jpg" alt="砂浜と波打ち際の画像">
				</picture>
			</div>
			<div class="common-mv__title-wrap">
				<h1 class="common-mv__title">contact</h1>
			</div>
		</div>
	</div>

	<div class="thanks-breadcrumbs layout-breadcrumbs">
		<?php get_template_part( 'parts/breadcrumbs' ); ?>
	</div>

	<!-- thanks -->
	<section class="thanks-body layout-body layout-body--thanks fish-icon">
		<div class="thanks-body__inner inner">
			<p class="thanks-body__head">お問い合わせ内容を送信完了しました。</p>
			<div class="thanks-body__text">
				このたびは、お問い合わせ頂き<br class="u-mobile">誠にありがとうございます。<br>
				お送り頂きました内容を確認の上、<br class="u-mobile">3営業日以内に折り返しご連絡させて頂きます。<br>
				また、ご記入頂いたメールアドレスへ、<br class="u-mobile">自動返信の確認メールをお送りしております。
			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>