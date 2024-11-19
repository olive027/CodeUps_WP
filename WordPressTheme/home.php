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
	<div class="blog-breadcrumbs layout-breadcrumbs">
		<?php get_template_part( 'parts/breadcrumbs' ); ?>
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
										<time class="blog-card__date" datetime="<?php the_time('c'); ?>">
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
				<aside class="blog-body__side">
					<?php get_sidebar(); ?>
				</aside>
			</div>
		</div>
	</section>

</main>
<?php get_footer(); ?>