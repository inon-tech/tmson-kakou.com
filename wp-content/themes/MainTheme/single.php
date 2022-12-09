<?php global $IHY_img_1;
global $IHY_img_2; ?>

<?php get_header(); ?>

<?php
/*
Template Name: お知らせ
*/
?>
<main class="">
  <section class="l-page-FV fadeIn wow">
    <div class="l-page-FV__wrap">
      <div class="l-page-FV__left">
        <h1>NEWS
          <p>お知らせ</p>
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

  <section class="p-singleNews fadeIn wow">
    <?php query_posts(array('post_type' => 'post', 'posts_per_page' => 1)); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="p-singleNews__top">
          <h2><?php the_title(); ?></h2>
        </div>

        <div class="p-singleNews__bottom">
          <time datetime="<?php echo esc_html(get_the_date('Y-m-d')); ?>">
            <?php echo esc_html(get_the_date('Y.m.d')); ?>
          </time>
          <div class="p-singleNews__content">
            <?php echo the_content(); ?>
          </div>
        </div>
    <?php endwhile;
    endif;
    wp_reset_query(); ?>

    <div class="c-btn p-singleNews__btn">
      <a href="<?php echo esc_url(get_post_type_archive_link('post')); ?>" class="stage__wrap">
        <div class="stage">
          <div class="cube">
            <div class="side_right bold">一覧に戻る</div>
            <div class="side_front bold">一覧に戻る</div>
          </div>
        </div>
        <div class="stage">
          <div class="cube">
            <div class="side_left bold">BACK</div>
            <div class="side_front2 bold">BACK</div>
          </div>
        </div>
      </a>
    </div>
  </section>
</main>

<?php get_footer(); ?>