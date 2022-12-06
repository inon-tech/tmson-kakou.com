<?php global $IHY_img_1;
global $IHY_img_2; ?>

<?php get_header(); ?>

<?php
/*
Template Name: 求人情報
*/
?>
<main class="">
  <section class="l-page-FV">
    <div class="l-page-FV__wrap">
      <div class="l-page-FV__left">
        <h1>RECRUIT
          <img src="<?php echo esc_url(get_template_directory_uri()) . $IHY_img_1 ?>common/recruit-title.png" alt="">
        </h1>
      </div>
      <div class="l-page-FV__desc">
        <div class="l-breadcrumb p-newsBreadcrumb">
          <?php bcn_display(); ?>
        </div>
        この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。
        文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、
        行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、
        行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、
        行間等を確認するために入れています。
      </div>
    </div>
  </section>

  <section class="p-new__wrap">
    <div class="l-inner">
      <?php query_posts(array('post_type' => 'recruit', 'posts_per_page' => 2)); ?>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <a href="<?php the_permalink(); ?>">
            <div class="p-news__item">
              <div class="p-news__left">
                <div class="p-news__time">
                  <time datetime="<?php echo esc_html(get_the_date('Y-m-d')); ?>" class="">
                    <?php echo get_the_date(); ?>
                  </time>
                </div>
              </div>
              <div class="p-news__name line-clamp">
                <?php echo get_the_title(); ?>
              </div>
            </div>
          </a>
      <?php endwhile;
      endif;
      wp_reset_query(); ?>
    </div>
    <div class="Pagenation">
      <?php
      $args = array(
        'mid_size' => 1,
        'prev_text' => '＜',
        'next_text' => '＞',
        'type'  => 'list', // 戻り値の指定 (plain/list)
        'prev_next'     => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
      );
      the_posts_pagination($args);
      ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>