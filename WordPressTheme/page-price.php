<?php
/*
Template Name: price
*/?>
<?php get_header(); ?>
<main>
	<div class="price-mv common-mv">
		<div class="common-mv__inner">
			<div class="common-mv__image">
				<picture>
					<source srcset="<?php echo get_theme_file_uri(''); ?>/assets/images/common/price-mv-sp.jpg"
						media="(max-width:767px)">
					<img src="<?php echo get_theme_file_uri(''); ?>/assets/images/common/price-mv.jpg"
						alt="海面からシュノーケリングをする人が見えている画像">
				</picture>
			</div>
			<div class="common-mv__title-wrap">
				<h1 class="common-mv__title">price</h1>
			</div>
		</div>
	</div>

	<!-- パンくず -->
	<div class="price-breadcrumbs breadcrumbs layout-breadcrumbs">
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

	<!-- price -->
	<section class="price-body layout-body">
		<div class="price-body__inner inner">
			<ul class="price-body__content price-lists fish-icon">
				<li class="price-body__list price-list" id="license">
					<h3 class="price-list__title">ライセンス講習</h3>
					<dl class="price-list__item">
						<?php
					// 現在の投稿またはページのIDを取得
					$post_id = get_the_ID();

					// price_license_labelとprice_license_costの繰り返しフィールドを取得
					$price_license_labels = SCF::get('price_license_label', $post_id);
					$price_license_costs = SCF::get('price_license_cost', $post_id);

					// ラベルとコストの数が一致するかを確認
					if (!empty($price_license_labels) && !empty($price_license_costs) && count($price_license_labels) === count($price_license_costs)) {
							// 各フィールドをループで処理
							for ($i = 0; $i < count($price_license_labels); $i++) {
									$label = $price_license_labels[$i];
									$cost = $price_license_costs[$i];
									?>
						<dt><?php echo nl2br(esc_html($label)); ?></dt>
						<dd><?php echo esc_html($cost); ?></dd>
						<?php
							}
					} else {
							// フィールドがない場合または数が一致しない場合の処理（任意）
							echo '<p>ライセンス情報がありません。</p>';
					}
					?>
					</dl>
				</li>
				<li class="price-body__list price-list" id="experience">
					<h3 class="price-list__title">体験ダイビング</h3>
					<dl class="price-list__item">
						<?php
					// 現在の投稿またはページのIDを取得
					$post_id = get_the_ID();

					// price_experience_labelとprice_experience_costの繰り返しフィールドを取得
					$price_experience_labels = SCF::get('price_experience_label', $post_id);
					$price_experience_costs = SCF::get('price_experience_cost', $post_id);

					// ラベルとコストの数が一致するかを確認
					if (!empty($price_experience_labels) && !empty($price_experience_costs) && count($price_experience_labels) === count($price_experience_costs)) {
							// 各フィールドをループで処理
							for ($i = 0; $i < count($price_experience_labels); $i++) {
									$label = $price_experience_labels[$i];
									$cost = $price_experience_costs[$i];
									?>
						<dt><?php echo nl2br(esc_html($label)); ?></dt>
						<dd><?php echo esc_html($cost); ?></dd>
						<?php
							}
					} else {
							// フィールドがない場合または数が一致しない場合の処理（任意）
							echo '<p>ただいま準備中です。</p>';
					}
					?>
					</dl>
				</li>
				<li class="price-body__list price-list" id="fan">
					<h3 class="price-list__title">ファンダイビング</h3>
					<dl class="price-list__item">
						<?php
						// 現在の投稿またはページのIDを取得
						$post_id = get_the_ID();

						// price_fan_labelとprice_fan_costの繰り返しフィールドを取得
						$price_fan_labels = SCF::get('price_fan_label', $post_id);
						$price_fan_costs = SCF::get('price_fan_cost', $post_id);

						// ラベルとコストの数が一致するかを確認
						if (!empty($price_fan_labels) && !empty($price_fan_costs) && count($price_fan_labels) === count($price_fan_costs)) {
								// 各フィールドをループで処理
								for ($i = 0; $i < count($price_fan_labels); $i++) {
										$label = $price_fan_labels[$i];
										$cost = $price_fan_costs[$i];
										?>
						<dt><?php echo nl2br(esc_html($label)); ?></dt>
						<dd><?php echo esc_html($cost); ?></dd>
						<?php
								}
						} else {
								// フィールドがない場合または数が一致しない場合の処理（任意）
								echo '<p>ただいま準備中です。</p>';
						}
					?>
					</dl>
				</li>
				<li class="price-body__list price-list">
					<h3 class="price-list__title">スペシャルダイビング</h3>
					<dl class="price-list__item">
						<?php
						// 現在の投稿またはページのIDを取得
						$post_id = get_the_ID();

						// price_special_labelとprice_special_costの繰り返しフィールドを取得
						$price_special_labels = SCF::get('price_special_label', $post_id);
						$price_special_costs = SCF::get('price_special_cost', $post_id);

						// ラベルとコストの数が一致するかを確認
						if (!empty($price_special_labels) && !empty($price_special_costs) && count($price_special_labels) === count($price_special_costs)) {
								// 各フィールドをループで処理
								for ($i = 0; $i < count($price_special_labels); $i++) {
										$label = $price_special_labels[$i];
										$cost = $price_special_costs[$i];
										?>
						<dt><?php echo nl2br(esc_html($label)); ?></dt>
						<dd><?php echo esc_html($cost); ?></dd>
						<?php
								}
						} else {
								// フィールドがない場合または数が一致しない場合の処理（任意）
								echo '<p>ただいま準備中です。</p>';
						}
					?>
					</dl>
				</li>
			</ul>
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
						<a href="contact.html" class="button"><span>contact&nbsp;us</span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>