<?php 


//=============== 標準機能 =====================================================
function my_setup() {
  add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
  add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
  add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
  add_theme_support( 'html5', array( /* HTML5のタグで出力 */
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ) );
}
add_action( 'after_setup_theme', 'my_setup' );

//=============== css js =====================================================
function my_theme_enqueue_styles() {
	// Google Fonts
	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Gotu&family=Lato:wght@400;700&family=Noto+Sans+JP:wght@400;500;700&display=swap', array(), null);

	// Swiper CSS
	wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', array(), null);

	// Main CSS
	wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/style.css', array(), null);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function my_theme_enqueue_scripts() {
	// jQuery
	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.js', array(), null, true);

	// GSAP
	wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/gsap.min.js', array(), null, true);

	// Swiper JS
	wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), null, true);

	// Inview JS
	wp_enqueue_script('inview', get_template_directory_uri() . '/assets/js/jquery.inview.min.js', array('jquery'), null, true);

	// Main JS
	wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');


//=============== 管理画面メニュー並び順変更 =====================================================
function sort_side_menu( $menu_order ) {
  return array(
      "index.php", // ダッシュボード
      "edit.php", // 投稿
      "edit.php?post_type=campaign", // キャンペーン
      "edit.php?post_type=voice", // お客様の声
      "edit.php?post_type=page", // 固定ページ
      "separator1", // 区切り線1
      "upload.php", // メディア
      "edit-comments.php", // コメント
      "separator2", // 区切り線2
      "themes.php", // 外観
      "plugins.php", // プラグイン
      "users.php", // ユーザー
      "tools.php", // ツール
      "options-general.php", // 設定
      "separator-last" // 区切り線（最後）
  );
}
add_filter( 'custom_menu_order', '__return_true' );
add_filter( 'menu_order', 'sort_side_menu' );


//=============== 管理画面メニュー名変更 =====================================================
function change_menu_label() {
  global $menu, $submenu;
  $menu[5][0] = 'ブログ';
  $submenu['edit.php'][5][0] = 'ブログ一覧';
  $submenu['edit.php'][10][0] = '新規ブログを追加';
}
function Change_objectlabel() {
  global $wp_post_types;
  $name = 'ブログ';
  $labels = &$wp_post_types['post']->labels;
  $labels->name = $name;
  $labels->singular_name = $name;
  $labels->add_new = _x('追加', $name);
  $labels->add_new_item = $name.'の新規追加';
  $labels->edit_item = $name.'の編集';
  $labels->new_item = '新規'.$name;
  $labels->view_item = $name.'を表示';
  $labels->search_items = $name.'を検索';
  $labels->not_found = $name.'が見つかりませんでした';
  $labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}
add_action( 'init', 'Change_objectlabel' );
add_action( 'admin_menu', 'change_menu_label' );


//=============== archive.php有効 =====================================================
function enable_custom_post_type_archives( $args, $post_type ) {
  if ( 'voice' === $post_type || 'campaign' === $post_type ) {
      $args['has_archive'] = true;
  }
  return $args;
}
add_filter( 'register_post_type_args', 'enable_custom_post_type_archives', 10, 2 );


// 投稿の抜粋省略記号を「…」に変更する
add_filter( 'excerpt_more', function( $more ){
  return '&hellip;';
}, 999 );
// 文字数制限を110から200に変更
add_filter( 'excerpt_length', function( $length ){
  return 80;
}, 999 );



?>