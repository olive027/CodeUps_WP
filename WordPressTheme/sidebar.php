<ul class="side-bar__items">
	<?php
$args = array(
	// 人気記事の表示をカスタマイズする
    'posts_per_page' => 3, // 表示する記事数を3件に制限
    'meta_key' => 'post_views_count', // 閲覧数をカウントするメタキー
    'orderby' => 'meta_value_num', // 閲覧数の多い順に並べる
    'order' => 'DESC', // 降順で並べる
    'post_type' => 'post', // 投稿タイプを指定
    'post_status' => 'publish', // 公開状態の投稿のみ表示
    'ignore_sticky_posts' => 1 // 固定投稿を無視する
);

// クエリを実行して投稿を取得
$popular_posts = new WP_Query($args);

if ($popular_posts->have_posts()) : ?>
	<!-- 人気記事 -->
	<li class="side-bar__item">
		<div class="side-bar__heading side-heading">
			<h2 class="side-heading__title">人気記事</h2>
		</div>

		<ul class="side-bar__content side-blog">
			<?php while ($popular_posts->have_posts()) : $popular_posts->the_post(); ?>
			<li class="side-blog__item side-blog-card">
				<a href="<?php the_permalink(); ?>" class="side-blog-card__link">
					<div class="side-blog-card__img">
						<?php the_post_thumbnail('post-thumbnail'); ?>
					</div>
					<div class="side-blog-card__body">
						<time class="side-blog-card__date" datetime="<?php the_time('Y-m-d'); ?>">
							<?php the_time('Y.m.d'); ?>
						</time>
						<p class="side-blog-card__title"><?php the_title(); ?></p>
					</div>
				</a>
			</li>
			<?php endwhile; ?>
		</ul>
	</li>
	<?php
    // クエリ後にリセットする
    wp_reset_postdata();
	endif;
	?>
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

			<?php
        global $wpdb;

        // 年ごとのアーカイブリストを取得
        $years_data = $wpdb->get_col("SELECT DISTINCT YEAR(post_date) FROM $wpdb->posts WHERE post_status = 'publish' ORDER BY post_date DESC");

        foreach ($years_data as $year) {
            echo '<li class="side-archive__item js-archive-item">';
            echo '<div class="side-archive__header js-archive-header">';
            echo '<a href="' . get_year_link($year) . '">' . $year . '</a>';
            echo '</div>';

            // 月ごとのアーカイブリストを取得
            $months = $wpdb->get_results($wpdb->prepare(
                "SELECT DISTINCT MONTH(post_date) as month
                 FROM $wpdb->posts
                 WHERE post_status = 'publish'
								 AND post_type = 'post'
                 AND YEAR(post_date) = %d
                 ORDER BY post_date DESC",
                $year
            ));

            // 月別リストを表示
            echo '<ul class="side-archive__body js-archive-body">';
            foreach ($months as $month) {
                $month_link = get_month_link($year, $month->month);

                // 日本語で月を表示するための配列
                $months_japanese = array(
									1  => '1月',
									2  => '2月',
									3  => '3月',
									4  => '4月',
									5  => '5月',
									6  => '6月',
									7  => '7月',
									8  => '8月',
									9  => '9月',
									10 => '10月',
									11 => '11月',
									12 => '12月'
							);

							$month_name = $months_japanese[$month->month];

                echo '<li class="side-archive__link"><a href="' . esc_url($month_link) . '">' . esc_html($month_name) . '</a></li>';
            }
            echo '</ul>';
            echo '</li>';
        }
        ?>
		</ul>
	</li>
</ul>