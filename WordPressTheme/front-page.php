<?php get_header(); ?>

<main>
	<div class="mv">
		<div class="mv__inner">
			<div class="mv__slider swiper js-mv-swiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<picture>
							<source srcset="<?php echo get_theme_file_uri('./assets/images/common/mv-sp-img01.jpg'); ?>"
								media="(max-width:767px)">
							<img src="<?php echo get_theme_file_uri('./assets/images/common/mv-img01.jpg'); ?>" alt="海と白い砂浜の画像">
						</picture>
					</div>
					<div class="swiper-slide">
						<picture>
							<source srcset="<?php echo get_theme_file_uri('./assets/images/common/mv-sp-img02.jpg'); ?>"
								media="(max-width:767px)">
							<img src="<?php echo get_theme_file_uri('./assets/images/common/mv-img02.jpg'); ?>"
								alt="海中をカメとダイバーが泳いでいる画像">
						</picture>
					</div>
					<div class="swiper-slide">
						<picture>
							<source srcset="<?php echo get_theme_file_uri('./assets/images/common/mv-sp-img03.jpg'); ?>"
								media="(max-width:767px)">
							<img src="<?php echo get_theme_file_uri('./assets/images/common/mv-img03.jpg'); ?>" alt="海上にいる船の画像">
						</picture>
					</div>
				</div>
				<div class="mv__title-wrap mv-title">
					<h2 class="mv-title__main">diving</h2>
					<p class="mv-title__sub">into&nbsp;the&nbsp;ocean</p>
				</div>
			</div>
		</div>
	</div>
	<section class="campaign top-campaign">
		<div class="campaign__inner inner">
			<div class="campaign__section-title section-title">
				<span class="section-title__main">campaign</span>
				<h2 class="section-title__sub">キャンペーン</h2>
			</div>
			<div class="campaign__slider swiper js-campaign-swiper">
				<div class="campaign__cards swiper-wrapper">
					<div class="campaign__card campaign-card swiper-slide">
						<div class="campaign-card__img">
							<img src="<?php echo get_theme_file_uri('./assets/images/common/campaign-img01.jpg'); ?>"
								alt="たくさんの魚が海中を泳いでいる画像">
						</div>
						<div class="campaign-card__body">
							<div class="campaign-card__meta">
								<div class="campaign-card__category">ライセンス講習
								</div>
							</div>
							<h3 class="campaign-card__title">ライセンス取得</h3>
							<div class="campaign-card__wrap">
								<p class="campaign-card__text">全部コミコミ(お一人様)</p>
								<div class="campaign-card__price">
									<div class="campaign-card__price-before">¥56,000</div>
									<div class="campaign-card__price-after">¥46,000</div>
								</div>
							</div>
						</div>
					</div>
					<div class="campaign__card campaign-card swiper-slide">
						<div class="campaign-card__img">
							<img src="<?php echo get_theme_file_uri('./assets/images/common/campaign-img02.jpg'); ?>" alt="船の乗り場の画像">
						</div>
						<div class="campaign-card__body">
							<div class="campaign-card__meta">
								<div class="campaign-card__category">体験ダイビング</div>
							</div>
							<h3 class="campaign-card__title">貸切体験ダイビング</h3>
							<div class="campaign-card__wrap">
								<p class="campaign-card__text">全部コミコミ(お一人様)</p>
								<div class="campaign-card__price">
									<div class="campaign-card__price-before">¥24,000</div>
									<div class="campaign-card__price-after">¥18,000</div>
								</div>
							</div>
						</div>
					</div>
					<div class="campaign__card campaign-card swiper-slide">
						<div class="campaign-card__img">
							<img src="<?php echo get_theme_file_uri('./assets/images/common/campaign-img03.jpg'); ?>"
								alt="たくさんのクラゲが海中を泳いでいる画像">
						</div>
						<div class="campaign-card__body">
							<div class="campaign-card__meta">
								<div class="campaign-card__category">体験ダイビング
								</div>
							</div>
							<h3 class="campaign-card__title">ナイトダイビング</h3>
							<div class="campaign-card__wrap">
								<p class="campaign-card__text">全部コミコミ(お一人様)</p>
								<div class="campaign-card__price">
									<div class="campaign-card__price-before">¥10,000</div>
									<div class="campaign-card__price-after">¥8,000</div>
								</div>
							</div>
						</div>
					</div>
					<div class="campaign__card campaign-card swiper-slide">
						<div class="campaign-card__img">
							<img src="<?php echo get_theme_file_uri('./assets/images/common/campaign-img04.jpg'); ?>"
								alt="何人かのダイバーが海面から顔を出している画像">
						</div>
						<div class="campaign-card__body">
							<div class="campaign-card__meta">
								<div class="campaign-card__category">ファンダイビング</div>
							</div>
							<h3 class="campaign-card__title">貸切ファンダイビング</h3>
							<div class="campaign-card__wrap">
								<p class="campaign-card__text">全部コミコミ(お一人様)</p>
								<div class="campaign-card__price">
									<div class="campaign-card__price-before">¥20,000</div>
									<div class="campaign-card__price-after">¥16,000</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="campaign__button-prev js-campaign-btn-prev u-desktop"></div>
			<div class="campaign__button-next js-campaign-btn-next u-desktop"></div>
			<div class="campaign__link">
				<a href="<?php echo esc_url( home_url('/')); ?>campaign" class="button"><span>view&nbsp;more</span></a>
			</div>
		</div>
	</section>
	<section class="about top-about">
		<div class="about__inner inner">
			<div class="about__section-title section-title">
				<span class="section-title__main">about&nbsp;us</span>
				<h2 class="section-title__sub">私たちについて</h2>
			</div>
			<div class="about__body">
				<div class="about__img-wrap">
					<div class="about__img-small">
						<img src="<?php echo get_theme_file_uri('./assets/images/common/about-img01.jpg'); ?>"
							alt="屋根の上にシーサーが乗っている画像">
					</div>
					<div class="about__img-big">
						<img src="<?php echo get_theme_file_uri('./assets/images/common/about-img02.jpg'); ?>"
							alt="海中で黄色い魚が泳いでいる画像">
					</div>
				</div>
				<div class="about__content">
					<div class="about__title">Dive&nbsp;into<br>the&nbsp;Ocean</div>
					<div class="about__text-wrap">
						<p class="about__text">
							「Dive into
							Ocean」は、青い海と空に包まれた、非日常の世界への招待状です。プロのガイドと共に、美しいサンゴ礁と多彩な生態系に触れ合っていただきます。初心者から経験豊かなダイバーまで、あらゆるレベルに対応したプログラムで、安心してダイビングをお楽しみいただけます。
						</p>
						<div class="about__link">
							<a href="<?php echo esc_url( home_url('/')); ?>about" class="button"><span>view&nbsp;more</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="information top-information">
		<div class="information__inner inner">
			<div class="information__section-title section-title">
				<span class="section-title__main">information</span>
				<h2 class="section-title__sub">ダイビング情報</h2>
			</div>
			<div class="information__content">
				<div class="information__img colorbox js-colorbox">
					<img src="<?php echo get_theme_file_uri('./assets/images/common/information-img.jpg'); ?>" alt="黄色い魚が海中を泳ぐ画像">
				</div>
				<div class="information__body">
					<h3 class="information__title">ライセンス講習</h3>
					<p class="information__text">
						当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
					</p>
					<div class="information__link">
						<a href="<?php echo esc_url( home_url('/')); ?>information" class="button"><span>view&nbsp;more</span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="blog top-blog">
		<div class="blog__bg u-desktop">
			<img src="<?php echo get_theme_file_uri('./assets/images/common/blog-bg.jpg'); ?>" alt="泡の背景画像">
		</div>
		<div class="blog__inner inner">
			<div class="blog__section-title section-title section-title--white">
				<span class="section-title__main section-title__main--white">blog</span>
				<h2 class="section-title__sub section-title__sub--white">ブログ</h2>
			</div>
			<ul class="blog__cards blog-cards">
				<!-- 記事のループ処理開始 -->
				<?php
					if( wp_is_mobile() ){
						$num = 3; //スマホの表示数(全件は-1)
					} else {
						$num = 3; //PCの表示数(全件は-1)
					}
					$args = [
						'post_type' => 'post', // 投稿タイプのスラッグ(通常投稿なので'post')
						'posts_per_page' => $num, // 表示件数
					];
					$the_query = new WP_Query( $args );
					if ( $the_query->have_posts() ) :
					while ( $the_query->have_posts() ) : $the_query->the_post();
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
								<?php the_content(); ?>
							</div>
						</div>
					</a>
				</li>
				<?php endwhile; else: ?>
				<p>ただいま準備中です。</p>
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>
			</ul>
			<div class="blog__link">
				<a href="<?php echo esc_url( home_url('/')); ?>blog" class="button"><span>view&nbsp;more</span></a>
			</div>
		</div>
	</section>
	<section class="voice top-voice">
		<div class="voice__inner inner">
			<div class="voice__section-title section-title">
				<span class="section-title__main">voice</span>
				<h2 class="section-title__sub">お客様の声</h2>
			</div>
			<div class="voice__cards voice-cards">

				<?php
					$news_query = new WP_Query(
						array(
							'post_type'      => 'voice',
							'posts_per_page' => 2,
						)
					);
				?>
				<?php if ( $news_query->have_posts() ) : ?>
				<?php while ( $news_query->have_posts() ) : ?>
				<?php $news_query->the_post(); ?>

				<div class="voice-cards__item voice-card">
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
				<?php endwhile; else: ?>
				<p>ただいま準備中です。</p>
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>
			</div>
			<div class="voice__link">
				<a href="<?php echo esc_url( home_url('/')); ?>voice" class="button"><span>view&nbsp;more</span></a>
			</div>
		</div>
	</section>
	<section class="price top-price">
		<div class="price__inner inner">
			<div class="price__section-title section-title">
				<span class="section-title__main">price</span>
				<h2 class="section-title__sub">料金一覧</h2>
			</div>
			<div class="price__content">
				<div class="price__img">
					<picture class="colorbox js-colorbox">
						<source srcset="<?php echo get_theme_file_uri('./assets/images/common/price-sp-img.jpg'); ?>"
							media="(max-width: 767px)" type="image/png">
						<img src="<?php echo get_theme_file_uri('./assets/images/common/price-img.jpg'); ?>"
							alt=”たくさんの赤い魚がサンゴ礁を泳ぐ画像”>
					</picture>
				</div>
				<div class="price__body">
					<ul class="price__list-wrap">
						<li class="price__list">
							<h3 class="price__list-title">ライセンス講習</h3>
							<dl class="price__list-item">
								<dt>オープンウォーターダイバーコース</dt>
								<dd>¥50,000</dd>
								<dt>アドバンスドオープンウォーターコース</dt>
								<dd>¥60,000</dd>
								<dt>レスキュー＋EFRコース</dt>
								<dd>¥70,000</dd>
							</dl>
						</li>
						<li class="price__list">
							<h3 class="price__list-title">体験ダイビング</h3>
							<dl class="price__list-item">
								<dt>ビーチ体験ダイビング(半日)</dt>
								<dd>¥7,000</dd>
								<dt>ビーチ体験ダイビング(1日)</dt>
								<dd>¥14,000</dd>
								<dt>ボート体験ダイビング(半日)</dt>
								<dd>¥10,000</dd>
								<dt>ボート体験ダイビング(1日)</dt>
								<dd>¥18,000</dd>
							</dl>
						</li>
						<li class="price__list">
							<h3 class="price__list-title">ファンダイビング</h3>
							<dl class="price__list-item">
								<dt>ビーチダイビング(2ダイブ)</dt>
								<dd>¥14,000</dd>
								<dt>ボートダイビング(2ダイブ)</dt>
								<dd>¥18,000</dd>
								<dt>スペシャルダイビング(2ダイブ)</dt>
								<dd>¥24,000</dd>
								<dt>ナイトダイビング(1ダイブ)</dt>
								<dd>¥10,000</dd>
							</dl>
						</li>
						<li class="price__list">
							<h3 class="price__list-title">スペシャルダイビング</h3>
							<dl class="price__list-item">
								<dt>貸切ダイビング(2ダイブ)</dt>
								<dd>¥24,000</dd>
								<dt>1日ダイビング(3ダイブ)</dt>
								<dd>¥32,000</dd>
							</dl>
						</li>
					</ul>
				</div>
			</div>
			<div class="price__link">
				<a href="<?php echo esc_url( home_url('/')); ?>price" class="button"><span>view&nbsp;more</span></a>
			</div>
		</div>
	</section>
	<section class="contact top-contact">
		<div class="contact__inner inner">
			<div class="contact__content">
				<div class="contact__left">
					<div class="contact__logo">
						<img src="<?php echo get_theme_file_uri('./assets/images/common/CodeUps-logo-green.png'); ?>"
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
							<span class="section-title__sub section-title__sub--contact">お問い合わせ</span>
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