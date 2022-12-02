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
      <div class="p-FV__wrap" style="background-image: url(<?php echo esc_url(get_template_directory_uri()) . $IHY_img_1 ?>front/front-FV-01.jpg);"></div>
      <div class="p-FV__wrap" style="background-image: url(<?php echo esc_url(get_template_directory_uri()) . $IHY_img_1 ?>common/rectangle.png);"></div>
      <div class="p-FV__wrap" style="background-image: url(<?php echo esc_url(get_template_directory_uri()) . $IHY_img_1 ?>front/front-FV-01.jpg);"></div>
    </div>

    <div class="p-frontFV__right">
      <h2>CUT and CREATE</h2>
      <img src="<?php echo esc_url(get_template_directory_uri()) . $IHY_img_1 ?>front/front-FV-title.png" alt="">
      <p>「切る」「削る」という切削加工の本質で
        ある「引く」概念にとらわれず、つねに
        新しい何かをプラスすること。<br>
        最新の設備と高度な技術に、経験とセン
        ス、そして持てる限りのアイデアを駆使す
        ることで、輝きを放つ優れた製品を生み
        出すことができると信じています。
      </p>
    </div>

    <div class="p-frontFV__bottom">
      <a href="" class="stage__wrap">
        <div class="stage">
          <div class="cube">
            <div class="side_right bold">お知らせ</div>
            <div class="side_front bold">お知らせ</div>
          </div>
        </div>
        <div class="stage">
          <div class="cube">
            <div class="side_left bold">MORE</div>
            <div class="side_front2 bold">MORE</div>
          </div>
        </div>
      </a>

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
          <div class="c-btn p-frontStrength__btn">
            <a href="" class="stage__wrap">
              <div class="stage">
                <div class="cube">
                  <div class="side_right bold">テムソンの強み</div>
                  <div class="side_front bold">テムソンの強み</div>
                </div>
              </div>
              <div class="stage">
                <div class="cube">
                  <div class="side_left bold">MORE</div>
                  <div class="side_front2 bold">MORE</div>
                </div>
              </div>
            </a>
          </div>
        </div>
  </section>

  <section class="p-frontMenu">
    <div class="p-frontMenu__wrap">
      <a href="" class="p-frontMenu__item">
        <div class="p-frontMenu__dark">
          <div class="p-frontMenu__btn">
            <div class="stage__wrap">
              <div class="stage">
                <div class="cube">
                  <div class="side_right bold">会社概要</div>
                  <div class="side_front bold">会社概要</div>
                </div>
              </div>
              <div class="stage">
                <div class="cube">
                  <div class="side_left bold">MORE</div>
                  <div class="side_front2 bold">MORE</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </a>
      <div class="p-frontMenu__item">
        <a href="" class="p-frontMenu__itemBottom">
          <div class="p-frontMenu__dark">
            <div class="p-frontMenu__btn">
              <divc class="stage__wrap">
                <div class="stage">
                  <div class="cube">
                    <div class="side_right bold">事業内容</div>
                    <div class="side_front bold">事業内容</div>
                  </div>
                </div>
                <div class="stage">
                  <div class="cube">
                    <div class="side_left bold">MORE</div>
                    <div class="side_front2 bold">MORE</div>
                  </div>
                </div>
              </divc>
            </div>
          </div>
        </a>
        <a href="" class="p-frontMenu__itemBottom">
          <div class="p-frontMenu__dark">
            <div class="p-frontMenu__btn">
              <divc class="stage__wrap">
                <div class="stage">
                  <div class="cube">
                    <div class="side_right bold">主要設備一覧</div>
                    <div class="side_front bold">主要設備一覧</div>
                  </div>
                </div>
                <div class="stage">
                  <div class="cube">
                    <div class="side_left bold">MORE</div>
                    <div class="side_front2 bold">MORE</div>
                  </div>
                </div>
              </divc>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>

  <section class="p-frontRecruit">
    <div class="l-inner">
      <div class="p-frontRecruit__topWrap">
        <h2 class="p-frontRecruit__title"><img src="<?php echo esc_url(get_template_directory_uri()) . $IHY_img_1 ?>front/front-Recruit-title.png" alt=""></h2>
        <p>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。
          文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、
          行間等を確認するために入れています。
        </p>
        <div class="p-frontRecruit__btn c-btn">
          <div class="p-frontRecruit__btnBlack c-btn-black bold">採用情報はこちら</div>
          <div class="p-frontRecruit__btnBlue c-btn-blue bold"><a href="">MORE</a></div>
        </div>
      </div>
      <div class="p-frontRecruit__imgWrap">
        <div class="p-frontRecruit__item"></div>
        <div class="p-frontRecruit__item"></div>
        <div class="p-frontRecruit__item"></div>
      </div>
    </div>
  </section>

  <section class="p-frontMap">
    <div class="gmap">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3233.336517116516!2d137.98001831544994!3d35.865269327463764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601cf0dd49639945%3A0x4feeff05fad703ce!2z44OG44Og44K944Oz!5e0!3m2!1sja!2sjp!4v1669913889710!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <div>
  </section>
</main>
<?php get_footer(); ?>