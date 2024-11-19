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
				<div class="common-mv__title">blog</div>
			</div>
		</div>
	</div>

	<!--パンくず  -->
	<div class="blog-single-breadcrumbs layout-breadcrumbs">
		<?php get_template_part( 'parts/breadcrumbs' ); ?>
	</div>

	<section class="blog-body layout-body">
		<div class="blog-body__inner inner">
			<div class="blog-body__content fish-icon">
				<div class="blog-body__main">
					<?php
							if ( have_posts() ) : while ( have_posts() ) : the_post();
					?>
					<div class="blog-body__head">
						<time class="blog-body__date" datetime="<?php the_time('c'); ?>">
							<?php the_time('Y.m.d'); ?>
						</time>
						<h1 class="blog-body__title"><?php the_title(); ?></h1>
					</div>
					<div class="blog-body__image">
						<?php the_post_thumbnail('post-thumbnail'); ?>
					</div>
					<div class="blog-body__singleContent">
						<?php the_content(); ?>
					</div>
					<?php endwhile; else: ?>
					<p>ただいま準備中です。</p>
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>

					<!-- ページネーション -->
					<div class="blog-body__pagination blog-body__pagination--single pagination-wrap pagination-wrap--single">
						<?php the_post_navigation( array(
								'prev_text' => '<div class="pagination-wrap__prev"></div>',
								'next_text' => '<div class="pagination-wrap__next"></div>'
								) );
						?>
					</div>
				</div>

				<!-- サイドバー -->
				<div class="blog-body__side">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</section>

</main>
<?php get_footer(); ?>