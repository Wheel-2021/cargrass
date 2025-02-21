<?php
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'title-tag' );

/* ---------------------------------------
セキュリティ ヘッダー掃除
--------------------------------------- */
function remove_wp_head_actions() {
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles', 10);
}
add_action('init', 'remove_wp_head_actions');

// remove_action('wp_head', 'wp_generator');
// remove_action ('wp_head', 'rsd_link');
// remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
// remove_action( 'wp_print_styles', 'print_emoji_styles', 10 );
function remove_cssjs_ver2( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver2', 9999 );
add_filter( 'script_loader_src', 'remove_cssjs_ver2', 9999 );

/* ---------------------------------------
セキュリティ ログイン隠し
--------------------------------------- */
add_filter( 'author_rewrite_rules', '__return_empty_array' );
function no_author(){
    if(isset($_GET['author']) || strpos($_SERVER['REQUEST_URI'], '/author/') !== false){
       wp_safe_redirect(home_url());
       exit;
    }
}
add_action('init', 'no_author');

/* ---------------------------------------
セキュリティ　検索結果及び404ページをnoindexにする
--------------------------------------- */

function add_noindex_action(){
    if( is_search() || is_404() )
    echo '<meta name="robots" content="noindex,follow">';
}
add_action('wp_head','add_noindex_action', 4 );

/* ---------------------------------------
配下ページのみ適用CSS
--------------------------------------- */
function custom_css_style() {
  if(is_singular() || is_archive() || is_search() || is_404()) {
    wp_enqueue_style('single', get_template_directory_uri() . '/css/style-editor.css', '', '20210104');
  }
}
add_action('wp_enqueue_scripts', 'custom_css_style');

// function custom_css_style() {
//   if(is_single() || is_page () || is_attachment() || is_post_type_archive() || is_date() || is_author() || is_archive() || is_search() || is_404()) {
//    wp_enqueue_style( 'single', get_template_directory_uri() . '/css/style-editor.css', "", '20210104' );
//   }
// }
// add_action( 'wp_enqueue_scripts', 'custom_css_style' );

/* ---------------------------------------
youtube responsive
--------------------------------------- */
add_theme_support( 'responsive-embeds' );

/* ---------------------------------------
管理画面 左メニュー　不要なものを隠す
--------------------------------------- */
function remove_menus(){
  remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'remove_menus' );

/* ---------------------------------------
メニューの設定
--------------------------------------- */
function menu_setup() {
  register_nav_menus( array(
    'headerPC' => 'PCグローバルメニュー',
    'headerSP' => 'SPグローバルメニュー',
    'footer' => 'フッターメニュー',
    'footerSub' => 'サブフッターメニュー',
  ) );
}
add_action( 'after_setup_theme', 'menu_setup' );

/* メニューのカスタム */
class custom_header extends Walker_Nav_Menu {
  function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
    // depth dependent classes
    $depth_classes = array(
        ( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
        ( $depth >=2 ? 'sub-sub-menu-item' : '' ),
        ( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
        'menu-item-depth-' . $depth
    );
    $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

    // passed classes
    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );
    if($depth == 0){
      $output .= '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '"><a href="'.$item->url.'" class="header_list_link changeTarget" title='.$item->title.'><span>'.$item->title.'</span></a>';
    } else {
      $output .= '<li><a href="'.$item->url.'">'.$item->title.'</a>';
    }
  }
}

/* ---------------------------------------
ショートコードの設定
--------------------------------------- */
function shortcode_url() {
    return get_home_url();
}
add_shortcode('url', 'shortcode_url');

function shortcode_siteurl() {
    return site_url();
}
add_shortcode('site_url', 'shortcode_siteurl');

function shortcode_templateurl() {
    return get_stylesheet_directory_uri();
}
add_shortcode('thema_url', 'shortcode_templateurl');

/* ---------------------------------------
管理画面内の設定
--------------------------------------- */
//プロフィール欄HTMLタグ有効
remove_filter('pre_user_description', 'wp_filter_kses');

// カテゴリ説明文HTML有効
remove_filter( 'pre_term_description', 'wp_filter_kses' );

//カテゴリ説明欄HTMLタグ有効
remove_filter( 'pre_term_name', 'wp_filter_kses' );

/* ---------- 「投稿」の表記変更 ---------- */
function Change_menulabel() {
  global $menu, $submenu;
  // global $menu;
  // global $submenu;
  $name = 'ニュース';
  $menu[5][0] = $name;
  $submenu['edit.php'][5][0] = $name.'一覧';
  $submenu['edit.php'][10][0] = '新規'.$name.'投稿';
}
function Change_objectlabel() {
  global $wp_post_types;
  $name = 'ニュース';
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


/* ---------------------------------------
body_classからblogを除外
--------------------------------------- */
add_filter( 'body_class', function( $classes ){
  if ( in_array( 'blog', $classes, true ) ) {
    unset( $classes[ array_search( 'blog', $classes ) ] );
  }
  return $classes;
} );

/* ---------------------------------------
SVGファイルアップロード
--------------------------------------- */
function add_file_types_to_uploads($file_types) {
    $file_types['svg'] = 'image/svg+xml';
    return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');

// function add_file_types_to_uploads($file_types){

//     $new_filetypes = array();
//     $new_filetypes['svg'] = 'image/svg+xml';
//     $file_types = array_merge($file_types, $new_filetypes );

//     return $file_types;
// }
// add_action( 'upload_mimes', 'add_file_types_to_uploads' );

/* ---------------------------------------
jsとcssの設定
--------------------------------------- */
if (!is_admin()) {
    function register_and_enqueue_assets() {
        // スクリプトの登録
        wp_register_script('jquery_3.4.1', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), '3.4.1', true);
        wp_register_script('basic', get_template_directory_uri() . '/js/basic.js', array(), '1.0', true);
        wp_register_script('inquiry', get_template_directory_uri() . '/js/inquiry.js', array(), '1.0', true);
        wp_register_script('swiper', get_template_directory_uri() . '/js/swiper.min.js', array(), '5.3.6', true);
        wp_register_script('frontPageSetting', get_template_directory_uri() . '/js/frontPageSetting.js', array(), '5.3.6', true);
        wp_register_script('gsap', get_template_directory_uri() . '/js/gsap.min.js', array(), '3.12.4', true);

        // スタイルの登録
        wp_register_style('destyle', get_template_directory_uri() . '/css/destyle.css', array(), '1.0', 'all');
        wp_register_style('style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
        wp_register_style('swiper', get_template_directory_uri() . '/css/swiper.min.css', array(), '5.3.6', 'all');

        // スクリプトとスタイルの読み込み
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery_3.4.1');
        wp_enqueue_script('basic');
        if (is_front_page() || is_home()) {
            wp_enqueue_script('inquiry');
            wp_enqueue_script('swiper');
            wp_enqueue_script('frontPageSetting');
            wp_enqueue_script('gsap');
            wp_enqueue_style('swiper');
        }
        wp_enqueue_style('destyle');
        wp_enqueue_style('style');
    }
    add_action('wp_enqueue_scripts', 'register_and_enqueue_assets', 10);
}

// if (!is_admin()) {
//     function register_script() {
//         wp_register_script('jquery_3.4.1', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), '3.4.1', true);
//         wp_register_script('basic', get_template_directory_uri() . '/js/basic.js', array(), '1.0', true);
//         wp_register_script('inquiry', get_template_directory_uri() . '/js/inquiry.js', array(), '1.0', true);
//         wp_register_script('swiper', get_template_directory_uri() . '/js/swiper.min.js', array(), '5.3.6', true);
//         wp_register_script('frontPageSetting', get_template_directory_uri() . '/js/frontPageSetting.js', array(), '5.3.6', true);
//         wp_register_script('gsap', get_template_directory_uri() . '/js/gsap.min.js', array(), '3.12.4', true);
//     }

//     function add_script() {
//         register_script();
//         wp_deregister_script('jquery');
//         wp_enqueue_script('jquery_3.4.1');
//         wp_enqueue_script('basic');
//         if (is_front_page() || is_home()) {
//             wp_enqueue_script('inquiry');
//             wp_enqueue_script('swiper');
//             wp_enqueue_script('frontPageSetting');
//             wp_enqueue_script('gsap');
//         }
//     }
//     add_action('wp_enqueue_scripts', 'add_script', 10);

//     function register_styles() {
//         wp_register_style('destyle', get_template_directory_uri() . '/css/destyle.css', array(), '1.0', 'all');
//         wp_register_style('style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
//     }

//     function add_styles() {
//         register_styles();
//         wp_enqueue_style('destyle');
//         wp_enqueue_style('style');
//         if (is_front_page() || is_home()) {
//             wp_register_style('swiper', get_template_directory_uri() . '/css/swiper.min.css', array(), '5.3.6', 'all');
//             wp_enqueue_style('swiper');
//         }
//     }
//     add_action('wp_enqueue_scripts', 'add_styles', 10);
// }




/* ---------------------------------------
メール送信
--------------------------------------- */
function mail_inquiry() {
  error_reporting(0);
  header('X-FRAME-OPTIONS: SAMEORIGIN');
  header('Content-type: application/json');
  date_default_timezone_set('Asia/Tokyo');

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST['name'])){
      $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
    }
    if(isset($_POST['email'])){
      $email = htmlspecialchars($_POST['email'], ENT_QUOTES);
    }
    if(isset($_POST['content'])){
      $content = htmlspecialchars($_POST['content'], ENT_QUOTES);
    }
    if(isset($_POST['genre'])){
      $genre = htmlspecialchars($_POST['genre'], ENT_QUOTES);
    }
    if(isset($_SERVER['REMOTE_ADDR'])){
      $ip = $_SERVER['REMOTE_ADDR'];
    }
    if(isset($_SERVER['REMOTE_ADDR'])){
      $hosts = getHostByAddr(getenv('REMOTE_ADDR'));
    } else {
      $hosts = 'ホストが取得できませんでした';
    }

    if ($name !== null && $email !== null && $content !== null) {
      mb_language('uni');
      mb_internal_encoding('UTF-8');

      $toAdmin = 'muguruma@sixwheel.net';
      $noReply = 'no-reply@cargrass.jp';
      $fromName = mb_encode_mimeheader('GRASS' , 'UTF-8');
      $header = 'MIME-Version: 1.0 \n';
      $header .= 'Content-Type: text/plain; charset=UTF-8 \n';
      $header .= 'From: '. $fromName .'<'. $noReply .'> \n';
      $header .= 'Sender: '. $noReply. ' \n';
      $header .= 'Return-Path: '. $toAdmin. ' \n';
      $header .= 'Reply-To: '. $noReply. ' \n';
      $header .= 'Content-Transfer-Encoding: 7bit \n';

      $to = $email;
      $subject = '［自動送信］お問い合わせ内容';
      $body = <<< EOM
      {$name} 様\n
      \n
      お問い合わせ、ありがとうございます。\n
      以下の内容でメールを送信いたしました。\n
      \n
      【 名前 】\n
      {$name}\n
      \n
      【 メールアドレス 】\n
      {$email}\n
      \n
      【 問い合わせ項目 】\n
      {$genre}\n
      \n
      【 問い合わせ内容 】\n
      {$content}\n
      \n
      このメールは送信専用になります。\n
      EOM;

      $retmail = mb_send_mail($to, $subject, $body, $header, '-f '.$noReply);

      $subjectAdmin = $name.'様からのお問い合わせ内容容';
      $bodyAdmin = <<< EOM
      ウェブサイトから問い合わせがありました。\n
      \n
      【 名前 】\n
      {$name}\n
      \n
      【 メールアドレス 】\n
      {$email}\n
      \n
      【 問い合わせ項目 】\n
      {$genre}\n
      \n
      【 問い合わせ内容 】\n
      {$content}\n
      \n
      \n
      ■送信元IPアドレス\n
      {$ip}\n
      \n
      ■送信元ホスト\n
      {$hosts}\n
      EOM;

      $retmail2 = mb_send_mail($toAdmin, $subjectAdmin, $bodyAdmin, $header, '-f'.$noReply);

      if( $retmail && $retmail2){
        echo('メールを送信しました。');
      }else{
        echo('【エラー】メール送信に失敗しました。');
      }
    } else {
      echo('ヌケモレがあります。');
    }
  }
}

add_action('wp_ajax_mail_inquiry', 'mail_inquiry');
add_action('wp_ajax_nopriv_mail_inquiry', 'mail_inquiry');
