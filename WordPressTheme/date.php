<?php get_header(); ?>

<main>
	<div class="blog-mv common-mv">
		<div class="common-mv__inner">
			<div class="common-mv__image">
				<picture>
					<source srcset="<?php echo get_theme_file_uri(''); ?>/assets/images/common/blog-mv-sp.jpg"
						media="(max-width:767px)">
					<img src="<?php echo get_theme_file_uri(''); ?>/assets/images/common/blog-mv.jpg" alt="小魚の大群が海中を泳ぐ画像">
				</picture>
			</div>
			<div class="common-mv__title-wrap">
				<h1 class="common-mv__title">blog</h1>
			</div>
		</div>
	</div>

	<!-- パンくず -->
	<div class="blog-breadcrumbs breadcrumbs layout-breadcrumbs">
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

	<section class="blog-body layout-body">
		<div class="blog-body__inner inner">
			<div class="blog-body__content fish-icon">
				<div class="blog-body__main">
					<ul class="blog-body__cards blog-cards blog-cards--page">
						<?php
							if ( have_posts() ) : while ( have_posts() ) : the_post();
						?>
						<li class="blog-cards__item blog-card">
							<a href="<?php the_permalink(); ?>" class="blog-card__link">
								<div class="blog-card__img">
									<?php the_post_thumbnail('post-thumbnail'); ?>
								</div>
								<div class="blog-card__body">
									<div class="blog-card__meta">
										<time class="blog-card__date" datetime="<?php the_time('Y-m-d'); ?>">
											<?php the_time('Y.m.d'); ?>
										</time>
										<div class="blog-card__title">
											<?php the_title(); ?>
										</div>
									</div>
									<div class="blog-card__text">
										<?php the_excerpt(); ?>
									</div>
								</div>
							</a>
						</li>
						<?php endwhile; else: ?>
						<p>ただいま準備中です。</p>
						<?php endif; ?>
						<?php wp_reset_postdata(); ?>
					</ul>
					<!-- ページネーション -->
					<div class="blog-body__pagination pagination-wrap">
						<ul class="pagination-wrap__items">
							<?php wp_pagenavi(); ?>
						</ul>
					</div>
				</div>

				<!-- サイドバー -->
				<div class="blog-body__side side-bar">
					<?php get_sidebar(); ?>
				</div>
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
						<a href="contact.html" class="button"><span>contact&nbsp;us</span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>