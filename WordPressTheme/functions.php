<?php
// テーマのセットアップを行うための関数を定義します。
function my_setup() {
  // テーマが投稿のサムネイル画像をサポートする設定を追加します。
  add_theme_support('post-thumbnails');

  // テーマが自動的にフィードリンク（RSSフィードなど）を生成する設定を追加します。
  add_theme_support('automatic-feed-links');

  // テーマが<title>タグを自動的に生成する設定を追加します。
  add_theme_support('title-tag');

  // テーマが特定のHTML5の要素をサポートする設定を追加します。
  add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
}

// テーマがセットアップされた後に、上で定義した関数（my_setup）を実行するアクションフックを追加します。
add_action("after_setup_theme","my_setup");


function enqueue_custom_scripts() {
  // Google Fonts
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Gotu&family=Lato&family=Noto+Sans+JP:wght@400;500;700&display=swap', array(), null);

  // Swiper
  wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css', array(), null);

  // CSS
  wp_enqueue_style('custom-style', get_theme_file_uri().'/assets/css/style.css', array(), null);

  // JavaScript
  wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.js', array(), null, true);
  wp_enqueue_script('jquery-migrate', 'https://code.jquery.com/jquery-1.9.1.min.js', array(), null, true);
  wp_enqueue_script('js-cookie', 'https://cdnjs.cloudflare.com/ajax/libs/js-cookie/3.0.1/js.cookie.min.js', array(), null, true);
  wp_enqueue_script('jquery-validate', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js', array(), null, true);
  wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', array(), null, true);
  wp_enqueue_script('jquery-inview', get_theme_file_uri().'/assets/js/jquery.inview.min.js', array(), null, true);
  wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js', array(), null, true);
  wp_enqueue_script('custom-script', get_theme_file_uri().'/assets/js/script.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');
function custom_excerpt_length( $length ) {
     return 85;
}
add_filter( 'excerpt_length' , 'custom_excerpt_length' , 999 );
function new_excerpt_more( $more ) {
  return '...' ;
  }
  add_filter( 'excerpt_more' , 'new_excerpt_more' );
  add_theme_support( 'post-thumbnails' );

  // ==========================================================================
  // サイドバーの人気記事
  // ==========================================================================

// カスタムメタビューの更新
function update_custom_meta_views() {
  global $post;
  if ( 'publish' === get_post_status($post) && is_single() && !is_user_logged_in() && !is_robots() ) {
      $views = intval(get_post_meta($post->ID, '_custom_meta_views', true));
      update_post_meta($post->ID, '_custom_meta_views', ($views + 1));
  }
}
add_action( 'wp_head', 'update_custom_meta_views' );

// 投稿一覧にViewsカラムを追加
function add_column_custom_meta_views($columns) {
  $columns['views'] = 'Views';
  return $columns;
}
add_filter( 'manage_posts_columns', 'add_column_custom_meta_views' );

// Viewsカラムのコンテンツを表示
function add_column_custom_meta_views_content($column_name, $post_id) {
  if ( 'views' === $column_name ) {
      $views = intval(get_post_meta($post_id, '_custom_meta_views', true));
      echo $views;
  }
}
add_action( 'manage_posts_custom_column', 'add_column_custom_meta_views_content', 10, 2 );

// Viewsカラムを並び替え可能にする
function sortable_column_custom_meta_views($columns) {
  $columns['views'] = 'Views';
  return $columns;
}
add_filter( 'manage_edit-post_sortable_columns', 'sortable_column_custom_meta_views' );

// Viewsで投稿を並び替える
function custom_orderby_custom_meta_views($vars) {
  if ( isset($vars['orderby']) && 'views' == $vars['orderby'] ) {
      $vars = array_merge($vars, array(
          'meta_key' => '_custom_meta_views',
          'orderby' => 'meta_value_num'
      ));
  }
  return $vars;
}
add_filter( 'request', 'custom_orderby_custom_meta_views' );

  // ==========================================================================
  // サイドバーのアーカイブ
  // ==========================================================================
class Custom_Archives_Walker extends Walker {
  public function start_el( &$output, $date, $depth = 0, $args = array(), $id = 0 ) {
      $output .= '<li class="sidebar-accordion__item">';
      $output .= '<a href="' . get_month_link( $date->year, $date->month ) . '">' . sprintf( '%1$s %2$d', $this->month_name( $date->month ), $date->year ) . '</a>';
  }

  public function month_name( $month ) {
      return $GLOBALS['wp_locale']->get_month( $month );
  }
}

  // ==========================================================================
  // カスタム投稿別に表示件数変える
  // ==========================================================================

function change_posts_per_page($query) {
  if ( is_admin() || ! $query->is_main_query() ) {
    return;
  }
  if ( $query->is_post_type_archive('campaign') ) {
    $query->set( 'posts_per_page', '4' );//キャンペーンの投稿を４件に制御
  }
  if ( $query->is_post_type_archive('voice') ) {
    $query->set( 'posts_per_page', '6' );// お客様の声の投稿を6件に制御
  }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );



/**
 * @param string $page_title ページのtitle属性値
 * @param string $menu_title 管理画面のメニューに表示するタイトル
 * @param string $capability メニューを操作できる権限（manage_options とか）
 * @param string $menu_slug オプションページのスラッグ。ユニークな値にすること。
 * @param string|null $icon_url メニューに表示するアイコンの URL
 * @param int $position メニューの位置
 */
SCF::add_options_page( 'codeups-diving-wp', 'ギャラリー画像', 'manage_options', 'gallery-options','dashicons-format-gallery','7' );
SCF::add_options_page( 'codeups-diving-wp', '料金一覧', 'manage_options', 'price-options','dashicons-list-view','8' );
SCF::add_options_page( 'codeups-diving-wp', 'よくある質問', 'manage_options', 'faq-options','dashicons-editor-help','9' );

  // ==========================================================================
  // 管理画面の投稿→ブログ
  // ==========================================================================

function Change_menulabel() {
  global $menu;
  global $submenu;
  $name = 'ブログ';
  $menu[5][0] = $name;
  $submenu['edit.php'][5][0] = $name.'一覧';
  $submenu['edit.php'][10][0] = '新しい'.$name;
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
  add_action( 'admin_menu', 'Change_menulabel' );

  // ==========================================================================
  // お問い合わせフォームで自動的に挿入されるpタグやbrタグをいれないようにする
  // ==========================================================================

  add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
   return false;
}

  // ==========================================================================
  // セレクトボックスにcampaignの投稿のタイトルを反映させる
  // ==========================================================================

function custom_get_select_values( $values, $options, $args ) {
  if ( in_array( 'GetOccupation', $options ) ) {
    $campaign_posts = get_posts( array(
      'post_type' => 'campaign', // カスタム投稿タイプが 'campaign' の場合
      'posts_per_page' => -1, // すべての投稿を取得する場合は -1
      'fields' => 'ids' // 投稿のIDのみ取得する
    ));

    if ( $campaign_posts ) {
      $values = array();

      foreach ( $campaign_posts as $campaign_post_id ) {
        $campaign_title = get_the_title( $campaign_post_id );
        $values[ $campaign_post_id ] = $campaign_title;
      }
    }
  }
  return $values;
}
add_filter( 'wpcf7_form_tag_data_option', 'custom_get_select_values', 10, 3 );
