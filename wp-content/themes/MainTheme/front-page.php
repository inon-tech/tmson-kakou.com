<?php global $img_path_normal_1;
global $img_path_normal_2;
global $img_path_webp_1;
global $img_path_webp_2;
?>

<?php get_header(); ?>

<?php
/*
Template Name:front-page
*/
?>

<main class="p-front">
  <section class="p-frontFV">
    <div class="js-FVSlide">
      <div class="p-FV__wrap"></div>
      <div class="p-FV__wrap"></div>
      <div class="p-FV__wrap"></div>
      <div class="p-FV__wrap"></div>
    </div>

    <div class="p-frontFV__right SP-none">
      <h2 class="font-en">CUT and CREATE</h2>
      <picture>
        <source type="image/webp" srcset="<?php echo esc_url(get_template_directory_uri()) . $img_path_webp_1 ?>front/front-FV-title.webp, <?php echo esc_url(get_template_directory_uri()) . $img_path_webp_2 ?>front/front-FV-title@2x.webp 2x">
        <source srcset="<?php echo esc_url(get_template_directory_uri()) . $img_path_normal_1 ?>front/front-FV-title.png, <?php echo esc_url(get_template_directory_uri()) . $img_path_normal_2 ?>front/front-FV-title@2x.png 2x">
        <img src="<?php echo esc_url(get_template_directory_uri()) . $img_path_normal_1 ?>front/front-FV-title.png" alt="">
      </picture>
      <p>「切る」「削る」という切削加工の本質である「引く」概念にとらわれず、つねに新しい何かをプラスすること。<br class="PC-none">
        最新の設備と高度な技術に、経験とセンス、そしてもてる限りのアイデアを駆使することで、輝きを放つ優れた製品を生み出すことができると信じています。
      </p>
    </div>

    <div class="p-frontFV__bottom SP-none">
      <a href="<?php echo esc_url(get_post_type_archive_link('post')); ?>" class="stage__wrap SP-none">
        <div class="stage">
          <div class="cube">
            <div class="side_right bold">お知らせ</div>
            <div class="side_front bold">お知らせ</div>
          </div>
        </div>
        <div class="stage">
          <div class="cube">
            <div class="side_left font-en">MORE</div>
            <div class="side_front2 font-en">MORE</div>
          </div>
        </div>
      </a>

      <div class="p-frontFV__news SP-none">

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
                <div class="p-frontFVNews__name">
                  <?php
                  if (mb_strlen($post->post_title, 'UTF-8') > 32) {
                    $title = mb_substr($post->post_title, 0, 32, 'UTF-8');
                    echo $title . '…';
                  } else {
                    echo $post->post_title;
                  }
                  ?>
                </div>
              </div>
            </a>
        <?php endwhile;
        endif;
        wp_reset_query(); ?>
      </div>
    </div>

  </section>
  <section class="p-frontFV-SP">
    <div class="p-frontFV__right">
      <h2 class="font-en">CUT and CREATE</h2>
      <picture>
        <source type="image/webp" srcset="<?php echo esc_url(get_template_directory_uri()) . $img_path_webp_1 ?>front/front-FV-title.webp, <?php echo esc_url(get_template_directory_uri()) . $img_path_webp_2 ?>front/front-FV-title@2x.webp 2x">
        <source srcset="<?php echo esc_url(get_template_directory_uri()) . $img_path_normal_1 ?>front/front-FV-title.png, <?php echo esc_url(get_template_directory_uri()) . $img_path_normal_2 ?>front/front-FV-title@2x.png 2x">
        <img src="<?php echo esc_url(get_template_directory_uri()) . $img_path_normal_1 ?>front/front-FV-title.png" alt="">
      </picture>
      <p>「切る」「削る」という切削加工の本質である「引く」概念にとらわれず、つねに新しい何かをプラスすること。<br class="PC-none">
        最新の設備と高度な技術に、経験とセンス、そしてもてる限りのアイデアを駆使することで、輝きを放つ優れた製品を生み出すことができると信じています。
      </p>
    </div>

    <div class="p-frontFV__bottom">
      <a href="<?php echo esc_url(get_post_type_archive_link('post')); ?>" class="stage__wrap">
        <div class="stage">
          <div class="cube">
            <div class="side_right bold">お知らせ</div>
            <div class="side_front bold">お知らせ</div>
          </div>
        </div>
        <div class="stage">
          <div class="cube">
            <div class="side_left font-en">MORE</div>
            <div class="side_front2 font-en">MORE</div>
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
                <div class="p-frontFVNews__name line-clamp2">
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

  <section class="p-frontStrength animated fadeIn wow">
    <div class="p-frontStrength__wrap">
      <div class="p-frontStrength__top">
        <div class="p-frontStrength__topItem">
          <span class="bold">紙図面、2D・3DCAD データから<br class="SP-none">
            制作、加工、組立、納品まで一貫生産</span>
        </div>
      </div>
      <div class="p-frontStrength__bottom">
        <div class="p-frontStrength__bottomItem">
          <span>テムソンの製品は、妻子ネイ設備と効率的な一貫システム、そして精密な加工技術と万全の品質管理のもとで<br class="SP-none">
            生産されており、多くのお客様から高い評価をいただいております。凡用加工においては、フレキシブルな対応<br class="SP-none">
            でニーズにお応えします。</span>
          <div class="c-btn p-frontStrength__btn">
            <a href="<?php echo esc_url(home_url('strength')); ?>" class="stage__wrap">
              <div class="stage">
                <div class="cube">
                  <div class="side_right bold">テムソンの強み</div>
                  <div class="side_front bold">テムソンの強み</div>
                </div>
              </div>
              <div class="stage">
                <div class="cube">
                  <div class="side_left font-en">MORE</div>
                  <div class="side_front2 font-en">MORE</div>
                </div>
              </div>
            </a>
          </div>
        </div>
  </section>

  <section class="p-frontMenu animated fadeIn wow">
    <div class="p-frontMenu__wrap">
      <div class="p-frontMenu__itemTop">
        <a href="<?php echo esc_url(home_url('company')); ?>">
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
                    <div class="side_left font-en">MORE</div>
                    <div class="side_front2 font-en">MORE</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="p-frontMenu__itemBottom">
        <div class="p-frontMenu__item">
          <a href="<?php echo esc_url(home_url('strength#content')); ?>">
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
                      <div class="side_left font-en">MORE</div>
                      <div class="side_front2 font-en">MORE</div>
                    </div>
                  </div>
                </divc>
              </div>
            </div>
          </a>
        </div>
        <div class="p-frontMenu__item">
          <a href="<?php echo esc_url(home_url('strength#facility')); ?>">
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
                      <div class="side_left font-en">MORE</div>
                      <div class="side_front2 font-en">MORE</div>
                    </div>
                  </div>
                </divc>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="p-frontRecruit animated fadeIn wow">
    <div class="l-inner">
      <div class="p-frontRecruit__topWrap">
        <h2 class="p-frontRecruit__title">
          <picture>
            <source type="image/webp" srcset="<?php echo esc_url(get_template_directory_uri()) . $img_path_webp_1 ?>front/front-Recruit-title.webp, <?php echo esc_url(get_template_directory_uri()) . $img_path_webp_2 ?>front/front-Recruit-title@2x.webp 2x">
            <source srcset="<?php echo esc_url(get_template_directory_uri()) . $img_path_normal_1 ?>front/front-Recruit-title.png, <?php echo esc_url(get_template_directory_uri()) . $img_path_normal_2 ?>front/front-Recruit-title@2x.png 2x">
            <img src="<?php echo esc_url(get_template_directory_uri()) . $img_path_normal_1 ?>front/front-Recruit-title.png" alt="">
          </picture>
        </h2>
        <p>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。
          文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、
          行間等を確認するために入れています。
        </p>
        <div class="c-btn p-frontRecruit__btn">
          <a href="<?php echo esc_url(get_post_type_archive_link('recruit')); ?>" class="stage__wrap">
            <div class="stage">
              <div class="cube">
                <div class="side_right bold">採用情報はこちら</div>
                <div class="side_front bold">採用情報はこちら</div>
              </div>
            </div>
            <div class="stage">
              <div class="cube">
                <div class="side_left font-en">MORE</div>
                <div class="side_front2 font-en">MORE</div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
    <div class="p-frontRecruit__imgWrap">
      <div class="p-frontRecruit__item"></div>
      <div class="p-frontRecruit__item"></div>
      <div class="p-frontRecruit__item"></div>
    </div>
  </section>

  <section class="p-frontContact animated fadeIn wow" id="contact">
    <div class="l-inner">
      <h2 class="bold"><span class="font-en">CONTACT</span>お問い合わせ</h2>

      <div class="p-frontContact__wrap animated fadeIn wow">
        <?php echo apply_shortcodes('[contact-form-7 id="163" title="コンタクトフォーム"]'); ?>
      </div>
    </div>
  </section>

  <section class="p-frontPrivacy animated fadeIn wow">
    <div class="p-frontPrivacy__wrap">
      <div class="p-frontPrivacy__top">
        <div class="p-frontPrivacy__topWrap">
          <h2 class="bold">個人情報保護方針について</h2>
        </div>
      </div>
      <div class="p-frontPrivacy__btn js-privacyBtn">
        <div class="btn__wrap js-btn__wrap">
          <div class="item-r js-item-r">
            <!-- 正面ここから -->
            <div class="item-img-r"></div>
            <!-- 上面ここから -->
            <div class="item-content-r"></div>
          </div>
          <div class="item js-item">
            <!-- 正面ここから -->
            <div class="item-img font-en">CLOSE</div>

            <!-- 上面ここから -->
            <div class="item-content font-en">OPEN</div>

          </div>
        </div>
      </div>
      <div class="p-frontPrivacy__bottom js-privacyBottom">
        <div class="p-frontPrivacy__text">
          当社は、当社が取得した個人情報の取扱いに関し、個人情報の保護に関する法律、個人情報保護に関するガイドライン等の指針、その他個人情報保護に関する関係法令を遵守します。<br>
          <br>
          ２.個人情報の安全管理<br>
          <br>
          当社は、個人情報の保護に関して、組織的、物理的、人的、技術的に適切な対策を実施し、当社の取り扱う個人情報の漏えい、滅失又はき損の防止その他の個人情報の安全管理のために必要かつ適切な措置を講ずるものとします。<br>
          <br>
          ３.個人情報の取得等の遵守事項<br>
          <br>
          当社による個人情報の取得、利用、提供については、以下の事項を遵守します。<br>
          <br>
          (1)個人情報の取得<br>
          <br>
          当社は、当社が管理するインターネットによる情報提供サイト（以下「本サイト」といいます。）の運営に必要な範囲で、本サイトの一般利用者（以下「ユーザー」といいます。）又は本サイトに広告掲載を行う者（以下「掲載主」といいます。）から、ユーザー又は掲載主に係る個人情報を取得することがあります。<br>
          <br>
          (2)個人情報の利用目的
          <br>
          <br>
          当社は、当社が取得した個人情報について、法令に定める場合又は本人の同意を得た場合を除き、以下に定める利用目的の達成に必要な範囲を超えて利用することはありません。<br>
          <br>
          ①　本サイトの運営、維持、管理<br>
          ②　本サイトを通じたサービスの提供及び紹介<br>
          ③　本サイトの品質向上のためのアンケート<br>
          <br>
          (3)個人情報の提供等<br>
          <br>
          当社は、法令で定める場合を除き、本人の同意に基づき取得した個人情報を、本人の事前の同意なく第三者に提供することはありません。なお、本人の求めによる個人情報の開示、訂正、追加若しくは削除又は利用目的の通知については、法令に従いこれを行うとともに、ご意見、ご相談に関して適切に対応します。<br>
          <br>
          4 .個人情報の利用目的の変更<br>
          <br>
          当社は、前項で特定した利用目的は、予め本人の同意を得た場合を除くほかは、原則として変更しません。但し、変更前の利用目的と相当の関連性を有すると合理的に認められる範囲において、予め変更後の利用目的を公表の上で変更を行う場合はこの限りではありません。<br>
          <br>
          ５.個人情報の第三者提供
          <br>
          <br>
          当社は、個人情報の取扱いの全部又は一部を第三者に委託する場合、その適格性を十分に審査し、その取扱いを委託された個人情報の安全管理が図られるよう、委託を受けた者に対する必要かつ適切な監督を行うこととします。
          <br>
          <br>
          ６.個人情報の取扱いの改善・見直し
          <br>
          <br>
          当社は、個人情報の取扱い、管理体制及び取組みに関する点検を実施し、継続的に改善・見直しを行います。
          <br>
          <br>
          ７.個人情報の廃棄
          <br>
          <br>
          当社は、個人情報の利用目的に照らしその必要性が失われたときは、個人情報を消去又は廃棄するものとし、当該消去及び廃棄は、外部流失等の危険を防止するために必要かつ適切な方法により、業務の遂行上必要な限りにおいて行います。
        </div>
        </ぢ>
      </div>
  </section>

  <section class="p-frontMap animated fadeIn wow">
    <div class="gmap">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3233.336517116516!2d137.98001831544994!3d35.865269327463764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601cf0dd49639945%3A0x4feeff05fad703ce!2z44OG44Og44K944Oz!5e0!3m2!1sja!2sjp!4v1669913889710!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <div>
  </section>
</main>
<?php get_footer(); ?>