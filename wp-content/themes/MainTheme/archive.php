<?php global $IHY_img_1;
global $IHY_img_2; ?>

<?php get_header(); ?>

<?php
/*
Template Name: お知らせ
*/
?>
<main class="">
  <section class="l-page-FV">
    <h1 class="l-page-FV__title">
      <img src="<?php echo esc_url(get_template_directory_uri()) . $IHY_img_1 ?>common/new-title.png" alt="">
      <img src="<?php echo esc_url(get_template_directory_uri()) . $IHY_img_1 ?>common/new-title.png" alt="">
    </h1>
    <div class="l-page-FV__desc">
      <div class="l-breadcrumb p-newsBreadcrumb">
        <?php bcn_display(); ?>
      </div>
    </div>
  </section>

  <section class="p-new__wrap">
    <div class="l-inner">
      <?php query_posts(array('post_type' => 'post', 'posts_per_page' => 1)); ?>
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

    <?php
    $my_pagenation = get_the_posts_pagination(array(
      'prev_text' => '',
      'next_text' => '',
      'mid_size' => 2,
      'end_size'     => 1,
    ));

    echo $my_pagenation;
    ?>
  </section>
</main>

<?php get_footer(); ?>