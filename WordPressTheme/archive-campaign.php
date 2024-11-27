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
								<?php
								$campaign_price = get_field('campaign_price');

								// サブフィールドを取得する場合、親フィールド配列から値を取得
								$price_before = $campaign_price['campaign_price-before'] ?? null;
								$price_after = $campaign_price['campaign_price-after'] ?? null;
								if ($price_before): // 値がある場合のみdivタグを出力
								?>
								<div class="campaign-card__price-before">
									¥<?php echo esc_html(number_format($price_before)); ?>
								</div>
								<?php endif;

								if ($price_after): // 値がある場合のみdivタグを出力
								?>
								<div class="campaign-card__price-after">
									¥<?php echo esc_html(number_format($price_after)); ?>
								</div>
								<?php endif;?>
							</div>
						</div>
						<div class="campaign-card__detail-text u-desktop">
							<?php the_content(); ?>
						</div>
						<p class="campaign-card__period u-desktop">
							<?php
							$campaign_date = get_field('campaign_date');

							// サブフィールドの値を取得
							$date_start = $campaign_date['campaign_date-start'] ?? null;
							$date_end = $campaign_date['campaign_date-end'] ?? null;

							// 値がある場合のみ表示
							if ($date_start && $date_end) {
									echo esc_html($date_start . ' - ' . $date_end);
							} elseif ($date_start) {
									// 開始日だけがある場合
									echo esc_html($date_start);
							} elseif ($date_end) {
									// 終了日だけがある場合
									echo esc_html($date_end);
							} else {
									// 日付が設定されていない場合（任意で何も表示しないかメッセージを追加）
									echo esc_html__('', 'text-domain');
							}
							?>
						</p>
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

</main>

<?php get_footer(); ?>