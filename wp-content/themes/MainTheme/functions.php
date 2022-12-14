<?php

function my_script_init()
{
  wp_enqueue_style('animate', get_template_directory_uri() . '/public/css/animate.css', array(), '1.0.0', 'all');
  wp_enqueue_style('reset', get_template_directory_uri() . '/public/css/reset.css', array(), '1.0.0', 'all');
  wp_enqueue_style('slick', get_template_directory_uri() . '/public/css/slick.css', array(), '1.0.0', 'all');
  wp_enqueue_style('slick-theme', get_template_directory_uri() . '/public/css/slick-theme.css', array(), '1.0.0', 'all');
  wp_enqueue_style('scroll-hint', get_template_directory_uri() . '/public/css/scroll-hint.css', array(), '1.0.0', 'all');
  wp_enqueue_style('stylesheet', get_template_directory_uri() . '/public/css/style.min.css', array(), '1.0.0', 'all');
  // JS
  wp_enqueue_script('slick', get_template_directory_uri() . '/public/js/slick.min.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('wow', get_template_directory_uri() . '/public/js/wow.min.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('scroll-hint', get_template_directory_uri() . '/public/js/scroll-hint.min.js', array('jquery'), '1.0.0', true);
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

function my_static_breadcrumb_adder( $breadcrumb_trail ) {

  if (is_post_type_archive('post')) { // デフォルトの投稿一覧ページの場合

    $item = new bcn_breadcrumb('お知らせ', null, array('post'));

  } elseif (get_post_type() === 'post') { // デフォルトの投稿ページの場合

    $item = new bcn_breadcrumb('お知らせ', null, array('post'), home_url('news'), null, true);

  }

  $stuck = array_pop( $breadcrumb_trail->breadcrumbs ); // HOME 一時退避
  $breadcrumb_trail->breadcrumbs[] = $item; // 任意の名前 追加
  $breadcrumb_trail->breadcrumbs[] = $stuck; // HOME 戻す

}
add_action('bcn_after_fill', 'my_static_breadcrumb_adder');

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

// コンタクトフォーム セレクトボックスプレースホルダー
function my_wpcf7_form_elements($html) {
  $text = '選択してください';
  $html = str_replace('<option value="">---</option>', '<option class="placeholder" value="" disabled selected>' . $text . '</option>', $html);
  return $html;
}

add_filter('wpcf7_form_elements', 'my_wpcf7_form_elements');


// 画像パス変数
function img_path()
{
  global $img_path_normal_1;
  $img_path_normal_1 = "/public/img/normal/1x/";
  global $img_path_normal_2;
  $img_path_normal_2 = "/public/img/normal/2x/";
}
add_action('after_setup_theme', 'img_path');

// ファーストビューカスタムフィールド
function add_scf_fv($settings, $type, $id, $meta_type)
{

  if ($type == "recruit") {

    // SCF::add_setting( 'ユニークなID', 'メタボックスのタイトル' );
    $Setting = SCF::add_setting('recruit', '採用情報詳細');

    // $Setting->add_group( 'ユニークなID', 繰り返し可能か, カスタムフィールドの配列 );
    $Setting->add_group('recruit_field', false, array(
      array(
        'type'  => 'text',
        'name'  => 'recruit-1',
        'label' => '職種',
      ),
      array(
        'type'  => 'text',
        'name'  => 'recruit-2',
        'label' => '対象',
      ),
      array(
        'type'  => 'text',
        'name'  => 'recruit-3',
        'label' => '勤務地',
      ),
      array(
        'type'  => 'text',
        'name'  => 'recruit-4',
        'label' => '給与',
      ),
      array(
        'type'  => 'text',
        'name'  => 'recruit-5',
        'label' => '諸手当',
      ),
      array(
        'type'  => 'text',
        'name'  => 'recruit-6',
        'label' => '勤務時間',
      ),
      array(
        'type'  => 'text',
        'name'  => 'recruit-7',
        'label' => '休日休暇',
      ),
      array(
        'type'  => 'text',
        'name'  => 'recruit-8',
        'label' => '福利厚生',
      ),
      array(
        'type'  => 'text',
        'name'  => 'recruit-9',
        'label' => '備考',
      ),
    ));
    $settings[] = $Setting;
  }
  return $settings;
}
add_filter('smart-cf-register-fields', 'add_scf_fv', 10, 4);

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

// JSON-LD構造化
function json_breadcrumb()
{

  if (is_admin() || is_home() || is_front_page()) {
    return;
  }

  $position  = 1;
  $query_obj = get_queried_object();
  $permalink = (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
  $description = "株式会社テムソンは長野県上伊那郡南箕輪村にある金属加工の会社です。治工具製作・精密機械加工を行っております。また「楽まきくん」という種まき機を販売しております。 ";
  $json_breadcrumb = array(
    "@context"        => "http://schema.org",
    "@type"           => "BreadcrumbList",
    "itemListElement" => array(
      array(
        "@type"    => "ListItem",
        "position" => $position++,
        "item"     => array(
          "@type" => "Thing",
          "@id"  => esc_url(home_url('/')),
          "name" => "株式会社テムソン｜長野県上伊那郡南箕輪村にある金属加工の会社です。治工具製作・精密機械加工を行っております。また「楽まきくん」という種まき機を販売しております。 ",
          "description" => $description,
          "url" => esc_url(home_url('/')),
        )
      ),
    ),
  );

  if (is_page()) {

    $ancestors   = get_ancestors($query_obj->ID, 'page');
    $ancestors_r = array_reverse($ancestors);
    if (count($ancestors_r) != 0) {
      foreach ($ancestors_r as $key => $ancestor_id) {
        $ancestor_obj = get_post($ancestor_id);
        $json_breadcrumb['itemListElement'][] = array(
          "@type"    => "ListItem",
          "position" => $position++,
          "item"     => array(
            "@type" => "Thing",
            "@id"  => esc_url(get_the_permalink($ancestor_obj->ID)),
            "name" => esc_html($ancestor_obj->post_title),
            "description" => $description,
            "url" => esc_url(get_the_permalink($ancestor_obj->ID))

          )
        );
      }
    }
    $json_breadcrumb['itemListElement'][] = array(
      "@type"    => "ListItem",
      "position" => $position++,
      "item"     => array(
        "@type" => "Thing",
        "@id"  => $permalink,
        "name" => esc_html($query_obj->post_title),
        "description" => $description
      )
    );
  } elseif (is_post_type_archive()) {

    $json_breadcrumb['itemListElement'][] = array(
      "@type"    => "ListItem",
      "position" => $position++,
      "item"     => array(
        "@type" => "Thing",
        "@id"  => esc_url(get_post_type_archive_link($query_obj->name)),
        "name" => $query_obj->label,
        "description" => $description,
        "url" => esc_url(get_post_type_archive_link($query_obj->name))
      )
    );
  } elseif (is_single()) {

    if (!is_single('post')) {
      $pt_obj = get_post_type_object($query_obj->post_type);
      $json_breadcrumb['itemListElement'][] = array(
        "@type"    => "ListItem",
        "position" => $position++,
        "item"     => array(
          "@type" => "Thing",
          "@id"  => esc_url(get_post_type_archive_link($pt_obj->name)),
          "name" => $pt_obj->label,
          "description" => $description,
          "url" => esc_url(get_post_type_archive_link($pt_obj->name))
        )
      );
    }

    $json_breadcrumb['itemListElement'][] = array(
      "@type"    => "ListItem",
      "position" => $position++,
      "item"     => array(
        "@type" => "Thing",
        "@id"  => $permalink,
        "name" => esc_html($query_obj->post_title),
        "description" => $description,
        "url" => esc_html($query_obj->post_title)
      )
    );
  } elseif (is_404()) {

    $json_breadcrumb['itemListElement'][] = array(
      "@type"    => "ListItem",
      "position" => $position++,
      "item"     => array(
        "@type" => "Thing",
        "@id"  => $permalink,
        "name" => "404｜このページは存在しません。",
        "url" => "$permalink"
      )
    );
  }

  echo '<script type="application/ld+json">' . json_encode($json_breadcrumb) . '</script>';
}

add_action('wp_head', 'json_breadcrumb');
