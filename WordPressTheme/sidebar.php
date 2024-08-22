<ul class="side-bar__items">
	<!-- 人気記事 -->
	<li class="side-bar__item">
		<div class="side-bar__heading side-heading">
			<h2 class="side-heading__title">人気記事</h2>
		</div>
		<ul class="side-bar__content side-blog">
			<li class="side-blog__item side-blog-card">
				<a href="" class="side-blog-card__link">
					<div class="side-blog-card__img">
						<img src="./assets/images/common/blog-card01.jpg" alt="黄色い魚が海中を泳ぐ画像">
					</div>
					<div class="side-blog-card__body">
						<time class="side-blog-card__date" datetime="2023-11-17">2024.1.5</time>
						<p class="side-blog-card__title">シテンヤッコ</p>
					</div>
				</a>
			</li>
			<li class="side-blog__item side-blog-card">
				<a href="" class="side-blog-card__link">
					<div class="side-blog-card__img">
						<img src="./assets/images/common/blog-img02.jpg" alt="ウミガメが海中を泳ぐ画像">
					</div>
					<div class="side-blog-card__body">
						<time class="side-blog-card__date" datetime="2023-11-17">2024.2.28</time>
						<p class="side-blog-card__title">ウミガメと泳ぐ</p>
					</div>
				</a>
			</li>
			<li class="side-blog__item side-blog-card">
				<a href="" class="side-blog-card__link">
					<div class="side-blog-card__img">
						<img src="./assets/images/common/blog-img03.jpg" alt="カクレクマノミがサンゴから顔を出す画像">
					</div>
					<div class="side-blog-card__body">
						<time class="side-blog-card__date" datetime="2023-11-17">2024.1.31</time>
						<p class="side-blog-card__title">カクレクマノミ</p>
					</div>
				</a>
			</li>
		</ul>
	</li>
	<!-- 口コミ -->
	<li class="side-bar__item">
		<div class="side-bar__heading side-heading">
			<h2 class="side-heading__title">口コミ</h2>
		</div>
		<ul class="side-bar__content side-voice">
			<?php
					// カスタム投稿タイプ 'voice' の最新記事を1件取得
					$args = array(
							'post_type'      => 'voice',    // カスタム投稿タイプのスラッグ
							'posts_per_page' => 1,          // 取得する記事数
							'orderby'        => 'date',     // 並び順
							'order'          => 'DESC'      // 最新のものから表示
					);

					$voice_query = new WP_Query($args);

					if ($voice_query->have_posts()) :
							while ($voice_query->have_posts()) : $voice_query->the_post(); ?>
			<li class="side-voice__item side-voice-card">

				<div class="side-voice-card__img">
					<?php $voice_img = get_field('voice_img');
								if ($voice_img) : ?>
					<img src="<?php echo esc_url($voice_img); ?>" alt="<?php the_field('voice_title'); ?>">
					<?php else : ?>
					<img src=" <?php echo get_template_directory_uri(); ?>/assets/images/common/no-image.png" alt="no-image">
					<?php endif; ?>
				</div>
				<div class="side-voice-card__body">
					<p class="side-voice-card__age">
						<?php the_field('voice_age'); ?>
					</p>
					<p class="side-voice-card__title">
						<?php the_title(); ?>
					</p>
				</div>
			</li>
			<?php endwhile;
					else :
							echo '<p>最新の投稿はありません。</p>';
					endif;
					// クエリのリセット
					wp_reset_postdata();
					?>
		</ul>
		<div class="side-bar__button">
			<a href="<?php echo esc_url( home_url('/')); ?>voice" class="button"><span>view&nbsp;more</span></a>
		</div>
	</li>

	<!-- キャンペーン -->
	<li class="side-bar__item">
		<div class="side-bar__heading side-heading">
			<h2 class="side-heading__title">キャンペーン</h2>
		</div>
		<ul class="side-bar__content side-campaign">
			<?php
					// カスタム投稿タイプ 'campaign' の最新記事を2件取得
					$args = array(
							'post_type'      => 'campaign',    // カスタム投稿タイプのスラッグ
							'posts_per_page' => 2,          // 取得する記事数
							'orderby'        => 'date',     // 並び順
							'order'          => 'DESC'      // 最新のものから表示
					);

					$campaign_query = new WP_Query($args);

					if ($campaign_query->have_posts()) :
							while ($campaign_query->have_posts()) : $campaign_query->the_post(); ?>
			<li class="side-campaign__item campaign-card campaign-card--side">
				<div class="campaign-card__img">
					<?php $campaign_img = get_field('campaign_img');
								if ($campaign_img) : ?>
					<img src="<?php echo esc_url($campaign_img); ?>" alt="<?php the_field('campaign_title'); ?>">
					<?php else : ?>
					<img src=" <?php echo get_template_directory_uri(); ?>/assets/images/common/no-image.png" alt="no-image">
					<?php endif; ?>
				</div>
				<div class="campaign-card__body">
					<h3 class="campaign-card__title"><?php the_title(); ?></h3>
					<div class="campaign-card__wrap">
						<p class="campaign-card__text">全部コミコミ(お一人様)</p>
						<div class="campaign-card__price">
							<div class="campaign-card__price-before"><?php the_field('campaign_price-before'); ?></div>
							<div class="campaign-card__price-after"><?php the_field('campaign_price-after'); ?></div>
						</div>
					</div>
				</div>
			</li>
			<?php endwhile; else: ?>
			<p>最新の投稿はありません。</p>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
		</ul>
		<div class="side-bar__button">
			<a href="<?php echo esc_url( home_url('/')); ?>campaign" class="button"><span>view&nbsp;more</span></a>
		</div>
	</li>
	<!-- アーカイブ -->
	<li class="side-bar__item">
		<div class="side-bar__heading side-heading">
			<h2 class="side-heading__title">アーカイブ</h2>
		</div>
		<ul class="side-bar__content side-archive">
			<li class="side-archive__item js-archive-item">
				<div class="side-archive__header js-archive-header">2023</div>
				<ul class="side-archive__body js-archive-body">
					<li class="side-archive__link"><a href="">3月</a></li>
					<li class="side-archive__link"><a href="">2月</a></li>
					<li class="side-archive__link"><a href="">1月</a></li>
				</ul>
			</li>
			<li class="side-archive__item js-archive-item">
				<div class="side-archive__header js-archive-header">2022</div>
				<ul class="side-archive__body js-archive-body">
					<li class="side-archive__link"><a href="">12月</a></li>
					<li class="side-archive__link"><a href="">11月</a></li>
					<li class="side-archive__link"><a href="">10月</a></li>
				</ul>
			</li>
		</ul>
	</li>
</ul>