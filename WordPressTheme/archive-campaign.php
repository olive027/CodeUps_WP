<?php get_header(); ?>

<main>
	<div class="campaign-mv common-mv">
		<div class="common-mv__inner">
			<div class="common-mv__image">
				<picture>
					<source srcset="<?php echo get_theme_file_uri(''); ?>/assets/images/common/campaign-mv-sp.jpg"
						media="(max-width:767px)">
					<img src="<?php echo get_theme_file_uri(''); ?>/assets/images/common/campaign-mv.jpg" alt="海中を泳ぐ黄色い魚の画像">
				</picture>
			</div>
			<div class="common-mv__title-wrap">
				<h1 class="common-mv__title">campaign</h1>
			</div>
		</div>
	</div>

	<!-- パンくず -->
	<div class="campaign-breadcrumbs layout-breadcrumbs">
		<?php get_template_part( 'parts/breadcrumbs' ); ?>
	</div>

	<!-- Campaign -->
	<section class="campaign-body layout-body">
		<div class="campaign-body__inner inner">
			<ul class="campaign-body__tab tab">
				<?php 
					$taxonomy = 'campaign_category';
					$terms = get_terms(array(
							'taxonomy' => $taxonomy,
							'hide_empty' => false,
					));

					$current_term_slug = get_query_var($taxonomy);
				?>

				<li class="tab__item <?php echo !$current_term_slug ? 'current' : ''; ?>">
					<a href="<?php echo get_post_type_archive_link('campaign'); ?>">all</a>
				</li>

				<?php if ($terms && !is_wp_error($terms)) : ?>
				<?php foreach ($terms as $term) : ?>
				<li class="tab__item <?php echo $current_term_slug == $term->slug ? 'current' : ''; ?>">
					<a href="<?php echo get_term_link($term, $taxonomy); ?>">
						<?php echo esc_html($term->name); ?>
					</a>
				</li>
				<?php endforeach; ?>
				<?php endif; ?>
			</ul>
			<div class="campaign-body__cards fish-icon">
				<?php if (have_posts()): while (have_posts()): the_post();
				?>
				<div class="campaign-body__card campaign-card campaign-card--page">
					<div class="campaign-card__img">
						<?php $campaign_img = get_field('campaign_img');
								if ($campaign_img) : ?>
						<img src="<?php echo esc_url($campaign_img); ?>" alt="<?php the_field('campaign_title'); ?>">
						<?php else : ?>
						<img src=" <?php echo get_template_directory_uri(); ?>/assets/images/common/no-image.png" alt="no-image">
						<?php endif; ?>
					</div>
					<div class="campaign-card__body">
						<div class="campaign-card__meta">
							<div class="campaign-card__category">
								<?php
									$terms = get_the_terms(get_the_ID(), 'campaign_category');
									if ($terms && !is_wp_error($terms)):
											$term_names = array_map(function($term) {
													return esc_html($term->name);
											}, $terms);
											echo join(', ', $term_names);
									endif;
    						?>
							</div>
						</div>
						<h3 class="campaign-card__title"><?php the_title(); ?></h3>
						<div class="campaign-card__wrap">
							<p class="campaign-card__text">全部コミコミ(お一人様)</p>
							<div class="campaign-card__price">
								<div class="campaign-card__price-before"><?php the_field('campaign_price-before'); ?></div>
								<div class="campaign-card__price-after"><?php the_field('campaign_price-after'); ?></div>
							</div>
						</div>
						<div class="campaign-card__detail-text u-desktop">
							<?php the_content(); ?>
						</div>
						<p class="campaign-card__period u-desktop">
							<?php the_field('campaign_date-start'); ?>-<?php the_field('campaign_date-end'); ?></p>
						<p class="campaign-card__contact-text u-desktop">ご予約・お問い合わせはコチラ</p>
						<div class="campaign-card__btn u-desktop">
							<a href="<?php echo esc_url( home_url('/')); ?>contact" class="button"><span>contact&nbsp;us</span></a>
						</div>
					</div>
				</div>
				<?php endwhile; ?>
				<?php else : ?>
				<p>ただいま準備中です。</p>
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>
			</div>

			<div class="campaign-body__pagination pagination-wrap">
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
					<p class="contact__text contact__text--page">ご予約・お問い合わせはコチラ</p>
					<div class="contact__link">
						<a href="<?php echo esc_url( home_url('/')); ?>contact" class="button"><span>contact&nbsp;us</span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>