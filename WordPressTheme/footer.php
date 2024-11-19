<?php
if ( ! is_404() && ! is_page( 'contact' ) && ! is_page( 'contact-thanks' ) ) :
    $contact_class = is_front_page() ? 'top-contact' : 'layout-body-contact';
?>
<div class="contact <?php echo esc_attr( $contact_class ); ?>">
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
</div>
<?php endif; ?>

<footer class="footer">
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