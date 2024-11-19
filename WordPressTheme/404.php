<?php
/*
Template Name: 404
*/?>
<?php get_header(); ?>

<main">
	<!-- パンくず -->
	<div class="error-breadcrumbs breadcrumbs--white layout-breadcrumbs layout-breadcrumbs--404">
		<?php get_template_part( 'parts/breadcrumbs' ); ?>
	</div>

	<!-- 404 -->
	<section class="error-body">
		<div class="error-body__inner inner">
			<div class="error-body__content">
				<h1 class="error-body__title">404</h1>
				<p class="error-body__text">申し訳ありません。<br>お探しのページが見つかりません。</p>
				<div class="error-body__btn">
					<a href="<?php echo esc_url( home_url('/')); ?>" class="button button--green"><span>page&nbsp;<span
								class="big">top</span></span></a>
				</div>
			</div>
		</div>
	</section>

	</main>

	<?php get_footer(); ?>