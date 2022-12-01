<?php

function my_script_init()
{
  wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array(), '1.0.0', 'all');
  wp_enqueue_style('reset', get_template_directory_uri() . '/public/css/reset.css', array(), '1.0.0', 'all');
  wp_enqueue_style('slick', get_template_directory_uri() . '/public/css/slick.css', array(), '1.0.0', 'all');
  wp_enqueue_style('slick-theme', get_template_directory_uri() . '/public/css/slick-theme.css', array(), '1.0.0', 'all');
  wp_enqueue_style('stylesheet', get_template_directory_uri() . '/public/css/style.min.css', array(), '1.0.0', 'all');
  // JS
  wp_enqueue_script('slick', get_template_directory_uri() . '/public/js/slick.min.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('wow', get_template_directory_uri() . '/public/js/wow.min.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('modernizr-custom', get_template_directory_uri() . '/public/js/modernizr-custom.min.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('my-script', get_template_directory_uri() . '/public/js/script.min.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');

// デフォルトの投稿を修正
function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'news'; //任意のスラッグ名 ←アーカイブページを有効に
    $args['label'] = 'お知らせ'; //管理画面左ナビに「投稿」の代わりに表示される
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);
add_filter('post_type_archive_link', function ($link, $post_type) {
  if ('post' === $post_type) {
    $post_type_object = get_post_type_object('post');
    $slug = $post_type_object->has_archive;
    $link = get_home_url(null, '/' . $slug . '/');
  }
  return $link;
}, 10, 2);
function add_article_post_permalink($permalink)
{
  $permalink = '/news' . $permalink;
  return $permalink;
}
add_filter('pre_post_link', 'add_article_post_permalink');
function add_article_post_rewrite_rules($post_rewrite)
{
  $return_rule = array();
  foreach ($post_rewrite as $regex => $rewrite) {
    $return_rule['news/' . $regex] = $rewrite;
  }
  return $return_rule;
}
add_filter('post_rewrite_rules', 'add_article_post_rewrite_rules');

// カスタム投稿タイプ採用情報

add_action('init', 'create_post_type');
function create_post_type()
{
  register_post_type(
    'recruit',
    array(
      'label' => '採用情報',
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true,
      'menu_position' => 5,
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'revisions',
      ),
    )
  );
}


// 画像パス変数
function IHY_img_path()
{
  global $IHY_img_1;
  $IHY_img_1 = "/public/img/normal/1x/";
  global $IHY_img_2;
  $IHY_img_2 = "/public/img/normal/2x/";
}
add_action('after_setup_theme', 'IHY_img_path');

remove_action('wp_head', 'wp_generator'); // バージョン
remove_action('wp_head', 'wp_shortlink_wp_head'); // 短縮URLのlink
remove_action('wp_head', 'wlwmanifest_link'); // ブログエディターのマニフェストファイル
remove_action('wp_head', 'rsd_link'); // 外部から編集するためのAPI
remove_action('wp_head', 'feed_links_extra', 3); // フィードへのリンク
remove_action('wp_head', 'print_emoji_detection_script', 7); // 絵文字に関するJavaScript
remove_action('wp_head', 'rel_canonical'); // カノニカル
remove_action('wp_print_styles', 'print_emoji_styles'); //絵文字に関するCSS
remove_action('admin_print_scripts', 'print_emoji_detection_script'); // 絵文字に関するJavaScript
remove_action('admin_print_styles', 'print_emoji_styles'); //絵文字に関するCSS