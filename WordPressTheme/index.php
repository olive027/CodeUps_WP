<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<meta name="format-detection" content="telephone=no" />
	<meta name="robots" content="noindex" />
	<!-- meta情報 -->
	<title>CodeUps Diving</title>
	<meta name="description" content="CodeUps課題" />
	<meta name="keywords" content="" />
	<!-- ogp -->
	<meta property="og:title" content="CodeUps Diving" />
	<meta property="og:type" content="" />
	<meta property="og:url" content="" />
	<meta property="og:image" content="" />
	<meta property="og:site_name" content="CodeUps Diving" />
	<meta property="og:description" content="CodeUps課題" />
	<!-- ファビコン -->
	<!-- <link rel="icon" href="" /> -->
	<!-- google font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Gotu&family=Lato:wght@400;700&family=Noto+Sans+JP:wght@400;500;700&display=swap"
		rel="stylesheet">
	<!-- css -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
	<link rel="stylesheet" href="./assets/css/style.css" />
	<!-- JavaScript -->
	<script defer src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<!-- gsap -->
	<script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/gsap.min.js"></script>
	<!-- swiper -->
	<script defer src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
	<!-- inview -->
	<script defer src="./assets/js/jquery.inview.min.js"></script>
	<script defer src="./assets/js/script.js"></script>
</head>

<body>
	<div class="loading js-loading">
		<div class="loading__title-wrap mv-title mv-title--green">
			<h2 class="mv-title__main">diving</h2>
			<p class="mv-title__sub">into&nbsp;the&nbsp;ocean</p>
		</div>
		<div class="loading__img">
			<div class="loading__img-left js-img-left">
				<img src="./assets/images/common/loading-img01.jpg" alt="カメが水面を見上げる画像の左半分">
			</div>
			<div class="loading__img-right js-img-right">
				<img src="./assets/images/common/loading-img02.jpg" alt="カメが水面を見上げる画像の右半分">
			</div>
		</div>
		<div class="loading__title-wrap mv-title js-mv-title">
			<h2 class="mv-title__main">diving</h2>
			<p class="mv-title__sub">into&nbsp;the&nbsp;ocean</p>
		</div>
	</div>
	<div class="js-container">
		<header class="header">
			<div class="header__inner">
				<h1 class="header__logo">
					<a class="header__logoLink" href="#"><img src="./assets/images/common/CodeUps-logo.png"
							alt="CodeUps logo"></a>
				</h1>
				<nav class="header__pc-nav pc-nav">
					<div class="pc-nav__inner">
						<ul class="pc-nav__items">
							<li class="pc-nav__item">
								<a href="campaign.html">
									<div class="pc-nav__item-en">campaign</div>
									<span>キャンペーン</span>
								</a>
							</li>
							<li class="pc-nav__item">
								<a href="about.html">
									<div class="pc-nav__item-en">about&nbsp;us</div>
									<span>私たちについて</span>
								</a>
							</li>
							<li class="pc-nav__item">
								<a href="information.html">
									<div class="pc-nav__item-en">information</div>
									<span>ダイビング情報</span>
								</a>
							</li>
							<li class="pc-nav__item">
								<a href="blog.html">
									<div class="pc-nav__item-en">blog</div>
									<span>ブログ</span>
								</a>
							</li>
							<li class="pc-nav__item">
								<a href="voice.html">
									<div class="pc-nav__item-en">voice</div>
									<span>お客様の声</span>
								</a>
							</li>
							<li class="pc-nav__item">
								<a href="price.html">
									<div class="pc-nav__item-en">price</div>
									<span>料金一覧</span>
								</a>
							</li>
							<li class="pc-nav__item">
								<a href="faq.html">
									<div class="pc-nav__item-en pc-nav__item--faq">faq</div>
									<span>よくある質問</span>
								</a>
							</li>
							<li class="pc-nav__item">
								<a href="contact.html">
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
									<a href="campaign.html">キャンペーン</a>
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
									<a href="about.html">私たちについて</a>
								</li>
							</ul>
							<ul class="sp-nav__left-items">
								<li class="sp-nav__left-item">
									<a href="">ダイビング情報</a>
								</li>
								<li class="sp-nav__left-item">
									<a href="">ライセンス講習</a>
								</li>
								<li class="sp-nav__left-item">
									<a href="">体験ダイビング</a>
								</li>
								<li class="sp-nav__left-item">
									<a href="">ファンダイビング</a>
								</li>
							</ul>
							<ul class="sp-nav__left-items">
								<li class="sp-nav__left-item">
									<a href="blog.html">ブログ</a>
								</li>
							</ul>
						</div>
						<div class="sp-nav__right">
							<ul class="sp-nav__right-items">
								<li class="sp-nav__right-item">
									<a href="voice.html">お客様の声</a>
								</li>
							</ul>
							<ul class="sp-nav__right-items">
								<li class="sp-nav__right-item">
									<a href="price.html">料金一覧</a>
								</li>
								<li class="sp-nav__right-item">
									<a href="">ライセンス講習</a>
								</li>
								<li class="sp-nav__right-item">
									<a href="">体験ダイビング</a>
								</li>
								<li class="sp-nav__right-item">
									<a href="">ファンダイビング</a>
								</li>
							</ul>
							<ul class="sp-nav__right-items">
								<li class="sp-nav__right-item">
									<a href="faq.html">よくある質問</a>
								</li>
							</ul>
							<ul class="sp-nav__right-items">
								<li class="sp-nav__right-item">
									<a href="privacy-policy.html">プライバシー<br>ポリシー</a>
								</li>
							</ul>
							<ul class="sp-nav__right-items">
								<li class="sp-nav__right-item">
									<a href="terms-of-service.html">利用規約</a>
								</li>
							</ul>
							<ul class="sp-nav__right-items">
								<li class="sp-nav__right-item">
									<a href="contact.html">お問い合わせ</a>
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
		<main>
			<div class="mv">
				<div class="mv__inner">
					<div class="mv__slider swiper js-mv-swiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<picture>
									<source srcset="./assets/images/common/mv-sp-img01.jpg" media="(max-width:767px)">
									<img src="./assets/images/common/mv-img01.jpg" alt="海と白い砂浜の画像">
								</picture>
							</div>
							<div class="swiper-slide">
								<picture>
									<source srcset="./assets/images/common/mv-sp-img02.jpg" media="(max-width:767px)">
									<img src="./assets/images/common/mv-img02.jpg" alt="海中をカメとダイバーが泳いでいる画像">
								</picture>
							</div>
							<div class="swiper-slide">
								<picture>
									<source srcset="./assets/images/common/mv-sp-img03.jpg" media="(max-width:767px)">
									<img src="./assets/images/common/mv-img03.jpg" alt="海上にいる船の画像">
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
									<img src="./assets/images/common/campaign-img01.jpg" alt="たくさんの魚が海中を泳いでいる画像">
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
									<img src="./assets/images/common/campaign-img02.jpg" alt="船の乗り場の画像">
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
									<img src="./assets/images/common/campaign-img03.jpg" alt="たくさんのクラゲが海中を泳いでいる画像">
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
									<img src="./assets/images/common/campaign-img04.jpg" alt="何人かのダイバーが海面から顔を出している画像">
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
						<a href="campaign.html" class="button"><span>view&nbsp;more</span></a>
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
								<img src="./assets/images/common/about-img01.jpg" alt="屋根の上にシーサーが乗っている画像">
							</div>
							<div class="about__img-big">
								<img src="./assets/images/common/about-img02.jpg" alt="海中で黄色い魚が泳いでいる画像">
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
									<a href="about.html" class="button"><span>view&nbsp;more</span></a>
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
							<img src="./assets/images/common/information-img.jpg" alt="黄色い魚が海中を泳ぐ画像">
						</div>
						<div class="information__body">
							<h3 class="information__title">ライセンス講習</h3>
							<p class="information__text">
								当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
							</p>
							<div class="information__link">
								<a href="information.html" class="button"><span>view&nbsp;more</span></a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="blog top-blog">
				<div class="blog__bg u-desktop">
					<img src="./assets/images/common/blog-bg.jpg" alt="泡の背景画像">
				</div>
				<div class="blog__inner inner">
					<div class="blog__section-title section-title section-title--white">
						<span class="section-title__main section-title__main--white">blog</span>
						<h2 class="section-title__sub section-title__sub--white">ブログ</h2>
					</div>
					<ul class="blog__cards blog-cards">
						<li class="blog-cards__item blog-card">
							<a href="single.html" class="blog-card__link">
								<div class="blog-card__img">
									<img src="./assets/images/common/blog-img01.jpg" alt="オレンジ色の珊瑚の画像">
								</div>
								<div class="blog-card__body">
									<div class="blog-card__meta">
										<time class="blog-card__date" datetime="2023-11-17">2023.11.17</time>
										<div class="blog-card__title">ライセンス取得</div>
									</div>
									<div class="blog-card__text">
										海の底に広がる美しい世界への探検、それがダイビングです。<br>しかし、安全第一を考えるなら、ダイビングを始める前には必ずライセンスを取得することが重要です。<br>この記事では、ダイビングライセンス取得のステップを分かりやすくご紹介します。
									</div>
								</div>
							</a>
						</li>
						<li class="blog-cards__item blog-card">
							<a href="single.html" class="blog-card__link">
								<div class="blog-card__img">
									<img src="./assets/images/common/blog-img02.jpg" alt="ウミガメが海中を泳ぐ画像">
								</div>
								<div class="blog-card__body">
									<div class="blog-card__meta">
										<time class="blog-card__date" datetime="2023-11-17">2023.12.9</time>
										<div class="blog-card__title">ウミガメと泳ぐ</div>
									</div>
									<div class="blog-card__text">
										ウミガメと泳ぐ経験は、ダイビング愛好家にとって至福の瞬間です。<br>本記事では、私のウミガメとの素晴らしい出会いについて、心からの感動と驚きを共有したいと思います。
									</div>
								</div>
							</a>
						</li>
						<li class="blog-cards__item blog-card">
							<a href="single.html" class="blog-card__link">
								<div class="blog-card__img">
									<img src="./assets/images/common/blog-img03.jpg" alt="カクレクマノミがイソギンチャクの間から顔を出している画像">
								</div>
								<div class="blog-card__body">
									<div class="blog-card__meta">
										<time class="blog-card__date" datetime="2023-11-17">2024.1.24</time>
										<div class="blog-card__title">カクレクマノミ</div>
									</div>
									<div class="blog-card__text">
										ダイビングの世界には美しい生物が数多く存在しますが、その中でも特に愛らしい存在として知られるのが「カクレクマノミ」です。<br>この記事では、カクレクマノミの特徴や生態、見どころなどを紹介し、彼らが海の小さな宝石である理由を探っていきます。
									</div>
								</div>
							</a>
						</li>
					</ul>
					<div class="blog__link">
						<a href="blog.html" class="button"><span>view&nbsp;more</span></a>
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
						<div class="voice-cards__item voice-card">
							<div class="voice-card__head">
								<div class="voice-card__info">
									<div class="voice-card__meta">
										<div class="voice-card__age">20代(女性)</div>
										<div class="voice-card__category">ライセンス講習</div>
									</div>
									<div class="voice-card__title">
										海中での神秘的な体験
									</div>
								</div>
								<div class="voice-card__img colorbox js-colorbox">
									<img src="./assets/images/common/voice-img01.jpg" alt="麦わら帽子をかぶった女性の正面写真">
								</div>
							</div>
							<div class="voice-card__text">
								私は今までずっと、海が持つ神秘性に惹かれてきました。<br>その魅力を求め、ついにダイビングの世界に足を踏み入れた日が忘れられません。<br>初めて水中に潜った瞬間、私の心は一瞬で海の無限の広がりに包まれました。<br>静かな海底に沈むと、まるで別世界に迷い込んだかのような錯覚に陥りました。
							</div>
						</div>
						<div class="voice-cards__item voice-card">
							<div class="voice-card__head">
								<div class="voice-card__info">
									<div class="voice-card__meta">
										<div class="voice-card__age">20代(男性)</div>
										<div class="voice-card__category">ファンダイビング</div>
									</div>
									<div class="voice-card__title">
										自然の壮大さと美しさを感じて
									</div>
								</div>
								<div class="voice-card__img colorbox js-colorbox">
									<img src="./assets/images/common/voice-img02.jpg" alt="ガッツポーズの女性の正面写真">
								</div>
							</div>
							<div class="voice-card__text">
								ダイビングは自然の壮大さとその美しさを直接体験する機会でした。<br>水面を突き破り、海の底に潜ると、まるで時間が止まったかのような静寂が広がっていました。<br>まず目に飛び込んできたのは、その美しい海の色彩でした。
							</div>
						</div>
					</div>
					<div class="voice__link">
						<a href="voice.html" class="button"><span>view&nbsp;more</span></a>
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
								<source srcset="./assets/images/common/price-sp-img.jpg" media="(max-width: 767px)" type="image/png">
								<img src="./assets/images/common/price-img.jpg" alt=”たくさんの赤い魚がサンゴ礁を泳ぐ画像”>
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
						<a href="price.html" class="button"><span>view&nbsp;more</span></a>
					</div>
				</div>
			</section>
			<section class="contact top-contact">
				<div class="contact__inner inner">
					<div class="contact__content">
						<div class="contact__left">
							<div class="contact__logo">
								<img src="./assets/images/common/CodeUps-logo-green.png" alt="CodeUps-logo">
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
								<a href="contact.html" class="button"><span>contact&nbsp;us</span></a>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
		<footer class="footer">
			<div class="footer__inner inner">
				<div class="footer__head">
					<div class="footer__logo">
						<a href="#" class="footer__logoLink">
							<img src="./assets/images/common/CodeUps-logo.png" alt="CodeUps-logo">
						</a>
					</div>
					<div class="footer__sns">
						<a href="" class="footer__snsLink">
							<img src="./assets/images/common/footer-FacebookLogo.png" alt="facebook-logo">
						</a>
						<a href="" class="footer__snsLink">
							<img src="./assets/images/common/footer-InstagramLogo.png" alt="instagram-logo">
						</a>
					</div>
				</div>
				<nav class="footer__nav footer-nav">
					<div class="footer-nav__left">
						<ul class="footer-nav__left-items">
							<li class="footer-nav__left-item">
								<a href="campaign.html">キャンペーン</a>
							</li>
							<li class="footer-nav__left-item">
								<a href="">ライセンス取得</a>
							</li>
							<li class="footer-nav__left-item">
								<a href="">貸切体験ダイビング</a>
							</li>
							<li class="footer-nav__left-item">
								<a href="">ナイトダイビング</a>
							</li>
						</ul>
						<ul class="footer-nav__left-items">
							<li class="footer-nav__left-item">
								<a href="about.html">私たちについて</a>
							</li>
						</ul>
						<ul class="footer-nav__left-items">
							<li class="footer-nav__left-item">
								<a href="information.html">ダイビング情報</a>
							</li>
							<li class="footer-nav__left-item">
								<a href="information.html?no=license">ライセンス講習</a>
							</li>
							<li class="footer-nav__left-item">
								<a href="information.html?no=experience">体験ダイビング</a>
							</li>
							<li class="footer-nav__left-item">
								<a href="information.html?no=fan">ファンダイビング</a>
							</li>
						</ul>
						<ul class="footer-nav__left-items">
							<li class="footer-nav__left-item">
								<a href="blog.html">ブログ</a>
							</li>
						</ul>
					</div>
					<div class="footer-nav__right">
						<ul class="footer-nav__right-items">
							<li class="footer-nav__right-item">
								<a href="voice.html">お客様の声</a>
							</li>
						</ul>
						<ul class="footer-nav__right-items">
							<li class="footer-nav__right-item">
								<a href="price.html">料金一覧</a>
							</li>
							<li class="footer-nav__right-item">
								<a href="price.html#license">ライセンス講習</a>
							</li>
							<li class="footer-nav__right-item">
								<a href="price.html#experience">体験ダイビング</a>
							</li>
							<li class="footer-nav__right-item">
								<a href="price.html#fan">ファンダイビング</a>
							</li>
						</ul>
						<ul class="footer-nav__right-items">
							<li class="footer-nav__right-item">
								<a href="faq.html">よくある質問</a>
							</li>
						</ul>
						<ul class="footer-nav__right-items">
							<li class="footer-nav__right-item">
								<a href="privacy-policy.html">プライバシー<br class="u-mobile">ポリシー</a>
							</li>
						</ul>
						<ul class="footer-nav__right-items">
							<li class="footer-nav__right-item">
								<a href="terms-of-service.html">利用規約</a>
							</li>
						</ul>
						<ul class="footer-nav__right-items">
							<li class="footer-nav__right-item">
								<a href="contact.html">お問い合わせ</a>
							</li>
						</ul>
					</div>
				</nav>
				<small
					class="footer__copyright">Copyright&nbsp;&copy;&nbsp;2021&nbsp;-&nbsp;2023&nbsp;CodeUps&nbsp;LLC.&nbsp;All&nbsp;Rights&nbsp;Reserved.</small>
			</div>
		</footer>
		<div class="pagetop">
			<a href="#">
				<img src="./assets/images/common/pagetop-btn.png" alt="ページトップへのボタン画像">
			</a>
		</div>
	</div>


</body>

</html>