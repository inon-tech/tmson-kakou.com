<?php global $IHY_img_1;
global $IHY_img_2; ?>

<?php get_header(); ?>

<?php
/*
Template Name:front-page
*/
?>

<main class="p-front">
  <section class="p-frontFV">
    <div class="js-FVSlide">
      <div class="p-FV__wrap" style="background-image: url(<?php echo esc_url(get_template_directory_uri()) . $IHY_img_1 ?>common/rectangle.png);"></div>
      <div class="p-FV__wrap" style="background-image: url(<?php echo esc_url(get_template_directory_uri()) . $IHY_img_1 ?>common/rectangle.png);"></div>
      <div class="p-FV__wrap" style="background-image: url(<?php echo esc_url(get_template_directory_uri()) . $IHY_img_1 ?>common/rectangle.png);"></div>
    </div>

    <div class="p-frontFV__right">
      <div class="p-frontFV__btn bold">
        <a href="">CONTACT</a>
      </div>
      <h2>CUT and CREATE</h2>
      <img src="<?php echo esc_url(get_template_directory_uri()) . $IHY_img_1 ?>front/front-FV-title.png" alt="">
      <p>「切る」「削る」という切削加工の本質で<br>
        ある「引く」概念にとらわれず、つねに<br>
        新しい何かをプラスすること。
      </p>
      <p>
        最新の設備と高度な技術に、経験とセン<br>
        ス、そして持てる限りのアイデアを駆使す<br>
        ることで、輝きを放つ優れた製品を生み<br>
        出すことができると信じています。
      </p>
    </div>

    <div class="p-frontFV__bottom">
      <div class="p-frontFVNews__btn c-btn">
        <div class="p-frontFVNews__btnBlack c-btn__black bold"><a href="">お知らせ</a></div>
        <div class="p-frontFVNews__btnBlue bold"><a href="">MORE</a></div>
      </div>

      <div class="p-frontFV__news">

        <?php query_posts(array('post_type' => array('post', 'recruit'), 'posts_per_page' => 3)); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <a href="<?php the_permalink(); ?>">
              <div class="p-frontFVNews__item">
                <div class="p-frontFV__left">
                  <div class="p-frontFVNews__time">
                    <time datetime="<?php echo esc_html(get_the_date('Y-m-d')); ?>" class="">
                      <?php echo get_the_date(); ?>
                    </time>
                  </div>
                  <div class="p-frontFVNews__type">
                    <?php echo esc_html(get_post_type_object(get_post_type())->label); ?>
                  </div>
                </div>
                <div class="p-frontFVNews__name line-clamp">
                  <?php echo get_the_title(); ?>
                </div>
              </div>
            </a>
        <?php endwhile;
        endif;
        wp_reset_query(); ?>
      </div>

  </section>

  <section class="p-frontStrength">
    <div class="p-frontStrength__wrap">
      <div class="p-frontStrength__top">
        <div class="p-frontStrength__topItem">
          <span class="bold">紙図面、2D・3DCAD データから<br>
            制作、加工、組立、納品まで一貫生産</span>
        </div>
      </div>
      <div class="p-frontStrength__bottom">
        <div class="p-frontStrength__bottomItem">
          <span>テムソンの製品は、妻子ネイ設備と効率的な一貫システム、そして精密な加工技術と万全の品質管理のもとで<br>
            生産されており、多くのお客様から高い評価をいただいております。凡用加工においては、フレキシブルな対応<br>
            でニーズにお応えします。</span>

          <div class="p-frontStrength__btn c-btn">
            <div class="p-frontStrength__btnBlack c-btn__black bold"><a href="">テムソンの強み</a></div>
            <div class="p-frontStrength__btnBlue c-btn__blue bold"><a href="">MORE</a></div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>