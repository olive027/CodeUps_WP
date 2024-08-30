<?php
/*
Template Name: contact
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

	<div class="contact-breadcrumbs breadcrumbs layout-breadcrumbs">
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

	<!-- contact -->
	<section class="contact-body layout-body layout-body--contact fish-icon">
		<div class="contact-body__inner inner">
			<?php echo do_shortcode( '[contact-form-7 id="45645fb" title="コンタクトフォーム 1"]' ); ?>
		</div>
	</section>
</main>

<?php get_footer(); ?>