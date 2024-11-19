<?php
/*
Template Name: terms
*/?>
<?php get_header(); ?>

<main>
	<div class="terms-mv common-mv">
		<div class="common-mv__inner">
			<div class="common-mv__image">
				<picture>
					<source srcset="<?php echo get_theme_file_uri(''); ?>/assets/images/common/sitemap-mv-sp.jpg"
						media="(max-width:767px)">
					<img src="<?php echo get_theme_file_uri(''); ?>/assets/images/common/sitemap-mv.jpg" alt="白い砂浜と穏やかな海の画像">
				</picture>
			</div>
			<div class="common-mv__title-wrap">
				<h1 class="common-mv__title common-mv__title--terms">terms&nbsp;<span>of</span>&nbsp;service</h1>
			</div>
		</div>
	</div>

	<!-- パンくず -->
	<div class="terms-breadcrumbs layout-breadcrumbs">
		<?php get_template_part( 'parts/breadcrumbs' ); ?>
	</div>

	<!-- terms of service -->
	<section class="terms-body layout-body fish-icon">
		<div class="terms-body__inner inner">
			<?php
				if ( have_posts() ) : while ( have_posts() ) : the_post();
			?>

			<h2 class="terms-body__title"><?php the_title(); ?></h2>
			<div class="terms-body__text">
				<?php the_content(); ?>
			</div>

			<?php endwhile; endif; ?>
		</div>
	</section>

</main>

<?php get_footer(); ?>