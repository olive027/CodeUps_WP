<?php
if (is_front_page()) {
    get_header('top');
} else {
?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<meta name="format-detection" content="telephone=no" />
	<meta name="robots" content="noindex" />

	<?php wp_head(); ?>
</head>

<body>
	<header class="header">
		<div class="header__inner">
			<h1 class="header__logo">
				<a class="header__logoLink" href="<?php echo esc_url( home_url('/')); ?>"><img
						src="<?php echo get_theme_file_uri(''); ?>/assets/images/common/CodeUps-logo.png" alt="CodeUps logo"></a>
			</h1>
			<nav class="header__pc-nav pc-nav">
				<div class="pc-nav__inner">
					<ul class="pc-nav__items">
						<li class="pc-nav__item">
							<a href="<?php echo esc_url( home_url('/')); ?>campaign">
								<div class="pc-nav__item-en">campaign</div>
								<span>キャンペーン</span>
							</a>
						</li>
						<li class="pc-nav__item">
							<a href="<?php echo esc_url( home_url('/')); ?>about">
								<div class="pc-nav__item-en">about&nbsp;us</div>
								<span>私たちについて</span>
							</a>
						</li>
						<li class="pc-nav__item">
							<a href="<?php echo esc_url( home_url('/')); ?>information">
								<div class="pc-nav__item-en">information</div>
								<span>ダイビング情報</span>
							</a>
						</li>
						<li class="pc-nav__item">
							<a href="<?php echo esc_url( home_url('/')); ?>blog">
								<div class="pc-nav__item-en">blog</div>
								<span>ブログ</span>
							</a>
						</li>
						<li class="pc-nav__item">
							<a href="<?php echo esc_url( home_url('/')); ?>voice">
								<div class="pc-nav__item-en">voice</div>
								<span>お客様の声</span>
							</a>
						</li>
						<li class="pc-nav__item">
							<a href="<?php echo esc_url( home_url('/')); ?>price">
								<div class="pc-nav__item-en">price</div>
								<span>料金一覧</span>
							</a>
						</li>
						<li class="pc-nav__item">
							<a href="<?php echo esc_url( home_url('/')); ?>faq">
								<div class="pc-nav__item-en pc-nav__item--faq">faq</div>
								<span>よくある質問</span>
							</a>
						</li>
						<li class="pc-nav__item">
							<a href="<?php echo esc_url( home_url('/')); ?>contact">
								<div class="pc-nav__item-en">contact</div>
								<span>お問合せ</span>
							</a>
						</li>
					</ul>
				</div>
			</nav>
			<nav class="header__sp-nav sp-nav js-sp-nav">
				<div class="sp-nav__inner">
					<div class="sp-nav__left">
						<ul class="sp-nav__left-items">
							<li class="sp-nav__left-item">
								<a href="<?php echo esc_url( home_url('/')); ?>campaign">キャンペーン</a>
							</li>
							<li class="sp-nav__left-item">
								<a href="">ライセンス取得</a>
							</li>
							<li class="sp-nav__left-item">
								<a href="">貸切体験ダイビング</a>
							</li>
							<li class="sp-nav__left-item">
								<a href="">ナイトダイビング</a>
							</li>
						</ul>
						<ul class="sp-nav__left-items">
							<li class="sp-nav__left-item">
								<a href="<?php echo esc_url( home_url('/')); ?>about">私たちについて</a>
							</li>
						</ul>
						<ul class="sp-nav__left-items">
							<li class="sp-nav__left-item">
								<a href="<?php echo esc_url( home_url('/')); ?>information">ダイビング情報</a>
							</li>
							<li class="sp-nav__left-item">
								<a href="<?php echo esc_url( home_url('/')); ?>infromation?no=license">ライセンス講習</a>
							</li>
							<li class="sp-nav__left-item">
								<a href="<?php echo esc_url( home_url('/')); ?>information?no=experience">体験ダイビング</a>
							</li>
							<li class="sp-nav__left-item">
								<a href="<?php echo esc_url( home_url('/')); ?>information?no=fan">ファンダイビング</a>
							</li>
						</ul>
						<ul class="sp-nav__left-items">
							<li class="sp-nav__left-item">
								<a href="<?php echo esc_url( home_url('/')); ?>blog">ブログ</a>
							</li>
						</ul>
					</div>
					<div class="sp-nav__right">
						<ul class="sp-nav__right-items">
							<li class="sp-nav__right-item">
								<a href="<?php echo esc_url( home_url('/')); ?>voice">お客様の声</a>
							</li>
						</ul>
						<ul class="sp-nav__right-items">
							<li class="sp-nav__right-item">
								<a href="<?php echo esc_url( home_url('/')); ?>price">料金一覧</a>
							</li>
							<li class="sp-nav__right-item">
								<a href="<?php echo esc_url( home_url('/')); ?>price#license">ライセンス講習</a>
							</li>
							<li class="sp-nav__right-item">
								<a href="<?php echo esc_url( home_url('/')); ?>price#experience">体験ダイビング</a>
							</li>
							<li class="sp-nav__right-item">
								<a href="<?php echo esc_url( home_url('/')); ?>price#fan">ファンダイビング</a>
							</li>
						</ul>
						<ul class="sp-nav__right-items">
							<li class="sp-nav__right-item">
								<a href="<?php echo esc_url( home_url('/')); ?>faq">よくある質問</a>
							</li>
						</ul>
						<ul class="sp-nav__right-items">
							<li class="sp-nav__right-item">
								<a href="<?php echo esc_url( home_url('/')); ?>privacy-policy">プライバシー<br>ポリシー</a>
							</li>
						</ul>
						<ul class="sp-nav__right-items">
							<li class="sp-nav__right-item">
								<a href="<?php echo esc_url( home_url('/')); ?>terms-of-service">利用規約</a>
							</li>
						</ul>
						<ul class="sp-nav__right-items">
							<li class="sp-nav__right-item">
								<a href="<?php echo esc_url( home_url('/')); ?>contact">お問い合わせ</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<div class="header__drawer hamburger js-hamburger">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
	</header>
	<?php
	} ?>