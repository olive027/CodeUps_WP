<footer class="footer <?php
    // page-contact.php の場合
    if ( is_page( 'contact' ) ) {
        echo 'footer--contact';
    }
    // page-contact-thanks.php の場合
    elseif ( is_page( 'contact-thanks' ) ) {
        echo 'footer--thanks';
    }
    // 404.php の場合
    elseif ( is_404() ) {
        echo 'footer--404';
    }
    // 他のページの場合は何も追加しない
?>">
	<div class="footer__inner inner">
		<div class="footer__head">
			<div class="footer__logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer__logoLink">
					<img src="<?php echo get_theme_file_uri('./assets/images/common/CodeUps-logo.png'); ?>" alt="CodeUps-logo">
				</a>
			</div>
			<div class="footer__sns">
				<a href="https://www.facebook.com/" target="_blank" class="footer__snsLink">
					<img src="<?php echo get_theme_file_uri('./assets/images/common/footer-FacebookLogo.png'); ?>"
						alt="facebook-logo">
				</a>
				<a href="https://www.instagram.com/" target="_blank" class="footer__snsLink">
					<img src="<?php echo get_theme_file_uri('./assets/images/common/footer-InstagramLogo.png'); ?>"
						alt="instagram-logo">
				</a>
			</div>
		</div>
		<nav class="footer__nav footer-nav">
			<div class="footer-nav__left">
				<ul class="footer-nav__left-items">
					<li class="footer-nav__left-item">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>campaign">キャンペーン</a>
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
						<a href="<?php echo esc_url( home_url('/')); ?>about">私たちについて</a>
					</li>
				</ul>
				<ul class="footer-nav__left-items">
					<li class="footer-nav__left-item">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>information">ダイビング情報</a>
					</li>
					<li class="footer-nav__left-item">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>information?no=license">ライセンス講習</a>
					</li>
					<li class="footer-nav__left-item">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>information?no=experience">体験ダイビング</a>
					</li>
					<li class="footer-nav__left-item">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>information?no=fan">ファンダイビング</a>
					</li>
				</ul>
				<ul class="footer-nav__left-items">
					<li class="footer-nav__left-item">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>blog">ブログ</a>
					</li>
				</ul>
			</div>
			<div class="footer-nav__right">
				<ul class="footer-nav__right-items">
					<li class="footer-nav__right-item">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>voice">お客様の声</a>
					</li>
				</ul>
				<ul class="footer-nav__right-items">
					<li class="footer-nav__right-item">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>price">料金一覧</a>
					</li>
					<li class="footer-nav__right-item">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>price#license">ライセンス講習</a>
					</li>
					<li class="footer-nav__right-item">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>price#experience">体験ダイビング</a>
					</li>
					<li class="footer-nav__right-item">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>price#fan">ファンダイビング</a>
					</li>
				</ul>
				<ul class="footer-nav__right-items">
					<li class="footer-nav__right-item">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>faq">よくある質問</a>
					</li>
				</ul>
				<ul class="footer-nav__right-items">
					<li class="footer-nav__right-item">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>privacy-policy">プライバシー<br class="u-mobile">ポリシー</a>
					</li>
				</ul>
				<ul class="footer-nav__right-items">
					<li class="footer-nav__right-item">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>terms-of-service">利用規約</a>
					</li>
				</ul>
				<ul class="footer-nav__right-items">
					<li class="footer-nav__right-item">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>contact">お問い合わせ</a>
					</li>
				</ul>
				<ul class="footer-nav__right-items">
					<li class="footer-nav__right-item">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>sitemap">サイトマップ</a>
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
		<img src="<?php echo get_theme_file_uri('./assets/images/common/pagetop-btn.png'); ?>" alt="ページトップへのボタン画像">
	</a>
</div>
</div>

<?php wp_footer(); ?>
</body>

</html>