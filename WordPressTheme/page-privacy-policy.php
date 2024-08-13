<?php
/*
Template Name: privacy-policy
*/?>
<?php get_header(); ?>

<main>
	<div class="privacy-mv common-mv">
		<div class="common-mv__inner">
			<div class="common-mv__image">
				<picture>
					<source srcset="<?php echo get_theme_file_uri(''); ?>/assets/images/common/sitemap-mv-sp.jpg"
						media="(max-width:767px)">
					<img src="<?php echo get_theme_file_uri(''); ?>/assets/images/common/sitemap-mv.jpg" alt="白い砂浜と穏やかな海の画像">
				</picture>
			</div>
			<div class="common-mv__title-wrap">
				<h1 class="common-mv__title common-mv__title--privacy">privacy&nbsp;policy</h1>
			</div>
		</div>
	</div>

	<!-- パンくず -->
	<div class="privacy-breadcrumbs breadcrumbs layout-breadcrumbs">
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

	<!-- privacy policy -->
	<section class="privacy-body layout-body fish-icon">
		<div class="privacy-body__inner inner">
			<?php
				if ( have_posts() ) : while ( have_posts() ) : the_post();
			?>

			<h2 class="privacy-body__title"><?php the_title(); ?></h2>
			<div class="privacy-body__text">
				<?php the_content(); ?>
			</div>

			<?php endwhile; endif; ?>
		</div>
	</section>

	<section class="contact contact--privacy layout-body-contact">
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