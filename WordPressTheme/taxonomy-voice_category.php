<?php get_header(); ?>

<main>
	<div class="voice-mv common-mv">
		<div class="common-mv__inner">
			<div class="common-mv__image">
				<picture>
					<source srcset="<?php echo get_theme_file_uri(''); ?>/assets/images/common/voice-mv-sp.jpg"
						media="(max-width:767px)">
					<img src="<?php echo get_theme_file_uri(''); ?>/assets/images/common/voice-mv.jpg" alt="海中を泳ぐ黄色い魚の画像">
				</picture>
			</div>
			<div class="common-mv__title-wrap">
				<h1 class="common-mv__title">voice</h1>
			</div>
		</div>
	</div>

	<!-- パンくず -->
	<div class="voice-breadcrumbs breadcrumbs layout-breadcrumbs">
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

	<!-- voice -->
	<section class="voice-body layout-body">
		<div class="voice-body__inner inner">
			<ul class="voice-body__tab tab">
				<?php 
				$taxonomy = 'voice_category';
				$terms = get_terms(array(
					'taxonomy' => $taxonomy,
					'hide_empty' => false,
				));

				$current_term_slug = get_query_var('term'); // 現在のタームスラッグを取得
			?>

				<li class="tab__item <?php echo !$current_term_slug ? 'current' : ''; ?>">
					<a href="<?php echo get_post_type_archive_link('voice'); ?>">all</a>
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

			<div class="voice-body__cards voice-cards fish-icon">

				<?php
				// if( wp_is_mobile() ){
				// 	$num = 4; // スマホの表示数(全件は-1)
				// } else {
				// 	$num = 6; // PCの表示数(全件は-1)
				// }
				$paged = get_query_var('paged') ? get_query_var('paged') : 1;
				$args = [
					'post_type' => 'voice', // カスタム投稿の投稿タイプスラッグ
					'paged' => $paged, // ページネーションがある場合に必要
					'posts_per_page' => 6, // 表示件数
					'tax_query' => array (
						array (
							'taxonomy' => $taxonomy, // タクソノミーのスラッグ
							'field' => 'slug',
							'terms' => $current_term_slug, // 現在のタームスラッグを使用
						)),
				];
				$wp_query = new WP_Query($args);
				if ($wp_query->have_posts()): while ($wp_query->have_posts()): $wp_query->the_post();
			?>
				<div class="voice-body__card voice-card">
					<div class="voice-card__head">
						<div class="voice-card__info">
							<div class="voice-card__meta">
								<div class="voice-card__age">
									<?php the_field('voice_age'); ?>
								</div>
								<div class="voice-card__category">
									<?php
									$terms = get_the_terms(get_the_ID(), 'voice_category');
									if ($terms && !is_wp_error($terms)):
										$term_names = array_map(function($term) {
											return esc_html($term->name);
										}, $terms);
										echo join(', ', $term_names);
									endif;
								?>
								</div>
							</div>
							<div class="voice-card__title">
								<?php the_title(); ?>
							</div>
						</div>
						<div class="voice-card__img colorbox js-colorbox">
							<?php $voice_img = get_field('voice_img');
							if ($voice_img) : ?>
							<img src="<?php echo esc_url($voice_img); ?>" alt="<?php the_field('voice_title'); ?>">
							<?php else : ?>
							<img src=" <?php echo get_template_directory_uri(); ?>/assets/images/common/no-image.png" alt="no-image">
							<?php endif; ?>
						</div>
					</div>
					<div class="voice-card__text">
						<?php the_content(); ?>
					</div>
				</div>
				<?php endwhile; ?>
				<?php else : ?>
				<p>ただいま準備中です。</p>
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>
			</div>

			<div class="voice-body__pagination pagination-wrap">
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