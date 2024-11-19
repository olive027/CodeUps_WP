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
	<div class="voice-breadcrumbs layout-breadcrumbs">
		<?php get_template_part( 'parts/breadcrumbs' ); ?>
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

					$current_term_slug = get_query_var($taxonomy);
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

				<?php if (have_posts()): while (have_posts()): the_post();?>
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

</main>

<?php get_footer(); ?>