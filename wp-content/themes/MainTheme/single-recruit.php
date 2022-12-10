<?php global $IHY_img_1;
global $IHY_img_2; ?>

<?php get_header(); ?>

<?php
/*
Template Name: お知らせ
*/
?>
<main class="p-singleRecruit">
  <section class="l-page-FV animated fadeIn wow">
    <div class="l-page-FV__wrap">
      <div class="l-page-FV__left">
        <h1 class="font-en">RECRUIT
          <img class="p-recruit-title-img" src="<?php echo esc_url(get_template_directory_uri()) . $IHY_img_1 ?>common/recruit-title.png" alt="">
        </h1>
      </div>
      <div class="l-page-FV__desc">
        <div class="l-breadcrumb p-newsBreadcrumb">
          <?php bcn_display(); ?>
        </div>
      </div>
    </div>
  </section>

  <section class="p-singleNews animated fadeIn wow">
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

    <div class="p-singleRecruit">

      <?php
      $type = 'recruit'; /* スラッグから投稿オブジェクトを取得 */
      $page_obj = get_page_by_path('recruit'); /* スラッグから投稿オブジェクトを取得 */
      $page_id = $page_obj->ID; /* 取得したオブジェクトからIDを取り出す */
      $recruit1 =  SCF::get('recruit-1', $page_id);
      $recruit2 =  SCF::get('recruit-2', $page_id);
      $recruit3 =  SCF::get('recruit-3', $page_id);
      $recruit4 =  SCF::get('recruit-4', $page_id);
      $recruit5 =  SCF::get('recruit-5', $page_id);
      $recruit6 =  SCF::get('recruit-6', $page_id);
      $recruit7 =  SCF::get('recruit-7', $page_id);
      $recruit8 =  SCF::get('recruit-8', $page_id);
      $recruit9 =  SCF::get('recruit-9', $page_id);
      ?>
      <div class="p-singleRecruit__wrap">
        <?php if (get_post_meta($post->ID, 'recruit-1', true)) : // 入力がある場合 
        ?>
          <div class="p-singleRecruit__item">
            <div class="p-singleRecruit__left">職種</div>
            <div class="p-singleRecruit__right"><?php echo esc_html($recruit1); ?></div>
          </div>
        <?php endif; ?>
        <?php if (get_post_meta($post->ID, 'recruit-2', true)) : // 入力がある場合 
        ?>
          <div class="p-singleRecruit__item">
            <div class="p-singleRecruit__left">対象</div>
            <div class="p-singleRecruit__right"><?php echo esc_html($recruit2); ?></div>
          </div>
        <?php endif; ?>
        <?php if (get_post_meta($post->ID, 'recruit-3', true)) : // 入力がある場合 
        ?>
          <div class="p-singleRecruit__item">
            <div class="p-singleRecruit__left">勤務地</div>
            <div class="p-singleRecruit__right"><?php echo esc_html($recruit3); ?></div>
          </div>
        <?php endif; ?>
        <?php if (get_post_meta($post->ID, 'recruit-4', true)) : // 入力がある場合 
        ?>
          <div class="p-singleRecruit__item">
            <div class="p-singleRecruit__left">給与</div>
            <div class="p-singleRecruit__right"><?php echo esc_html($recruit4); ?></div>
          </div>
        <?php endif; ?>
        <?php if (get_post_meta($post->ID, 'recruit-5', true)) : // 入力がある場合 
        ?>
          <div class="p-singleRecruit__item">
            <div class="p-singleRecruit__left">諸手当</div>
            <div class="p-singleRecruit__right"><?php echo esc_html($recruit5); ?></div>
          </div>
        <?php endif; ?>
        <?php if (get_post_meta($post->ID, 'recruit-6', true)) : // 入力がある場合 
        ?>
          <div class="p-singleRecruit__item">
            <div class="p-singleRecruit__left">勤務時間</div>
            <div class="p-singleRecruit__right"><?php echo esc_html($recruit6); ?></div>
          </div>
        <?php endif; ?>
        <?php if (get_post_meta($post->ID, 'recruit-7', true)) : // 入力がある場合 
        ?>
          <div class="p-singleRecruit__item">
            <div class="p-singleRecruit__left">休日休暇</div>
            <div class="p-singleRecruit__right"><?php echo esc_html($recruit7); ?></div>
          </div>
        <?php endif; ?>
        <?php if (get_post_meta($post->ID, 'recruit-8', true)) : // 入力がある場合 
        ?>
          <div class="p-singleRecruit__item">
            <div class="p-singleRecruit__left">福利厚生</div>
            <div class="p-singleRecruit__right"><?php echo esc_html($recruit8); ?></div>
          </div>
        <?php endif; ?>
        <?php if (get_post_meta($post->ID, 'recruit-9', true)) : // 入力がある場合 
        ?>
          <div class="p-singleRecruit__item">
            <div class="p-singleRecruit__left">備考</div>
            <div class="p-singleRecruit__right"><?php echo esc_html($recruit9); ?></div>
          </div>
        <?php endif; ?>
      </div>
    </div>

    <div class="c-btn p-singleNews__btn">
      <a href="<?php echo esc_url(get_post_type_archive_link('recruit')); ?>" class="stage__wrap">
        <div class="stage">
          <div class="cube">
            <div class="side_right">一覧に戻る</div>
            <div class="side_front">一覧に戻る</div>
          </div>
        </div>
        <div class="stage">
          <div class="cube">
            <div class="side_left font-en">BACK</div>
            <div class="side_front2 font-en">BACK</div>
          </div>
        </div>
      </a>
    </div>
  </section>
</main>

<?php get_footer(); ?>