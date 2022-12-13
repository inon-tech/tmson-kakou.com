<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta property="og:type" content="website">
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <meta name="description" content="">
  <meta name="keywords" content="">

  <title>優れた製品を作り出す アイデアを活かす 切削技術</title>
  <link rel="icon" href="<?php echo esc_url(get_template_directory_uri()); ?>">

  <?php wp_head(); ?>
</head>

<body>
  <div class="footerFixed">
    <header class="l-header">
      <div class="l-headerPC">
        <div class="l-headerPC__logo"><a href="<?php echo esc_url(home_url('')); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/public/img/svg/header-logo.svg" alt=""></a></div>
        <nav class="l-headerPC__nav">
          <ul>
            <li>
              <a class="bold" href="<?php echo esc_url(home_url('company')); ?>">
                会社概要
              </a>
            </li>
            <li>
              <a class="bold" href="<?php echo esc_url(home_url('strength')); ?>">
                テムソンの強み
              </a>
            </li>
            <li>
              <a class="bold" href="<?php if (is_page('strength')) : ?>#facility<?php else : echo esc_url(home_url('strength#facility')); ?><?php endif; ?>">
                主要設備紹介
              </a>
            </li>
            <li>
              <a class="bold" href="<?php echo esc_url(get_post_type_archive_link('post')); ?>">
                お知らせ
              </a>
            </li>
            <li>
              <a class="bold" href="<?php echo esc_url(get_post_type_archive_link('recruit')); ?>">
                採用情報
              </a>
            </li>
            <li>
              <a class="bold stage__wrap" href="<?php if (is_front_page()) : ?>#contact<?php else : echo esc_url(home_url('#contact')); ?><?php endif; ?>">
                <div class="stage">
                  <div class="cube">
                    <div class="side_right bold">お問い合わせ</div>
                    <div class="side_front bold">お問い合わせ</div>
                  </div>
                </div>
                <div class="stage">
                  <div class="cube">
                    <div class="side_left font-en">CONTACT</div>
                    <div class="side_front2 font-en">CONTACT</div>
                  </div>
                </div>
              </a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="l-headerSP">
        <div class="l-headerSP__logo">
          <a href="<?php echo esc_url(home_url('')); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/public/img/svg/header-logo-sp.svg" alt=""></a>
        </div>

        <div class="l-headerSP__wrap js-headerSP__wrap">
          <div class="l-headerSP__ME font-en">MENU</div>
          <div class="l-headerSP__CL font-en">CLOSE</div>
          <div class="stage">
            <div class="cube">
              <div class="side_front2"></div>
              <div class="side_right"></div>
            </div>
          </div>
        </div>

        <div class="l-headerSP__content js-headerSP__content">
          <ul>
            <li><a class="bold" href="<?php echo esc_url(home_url('')); ?>">HOME</a></li>
            <li><a class="bold" href="<?php echo esc_url(home_url('company')); ?>">会社概要</a></li>
            <li><a class="bold" href="<?php echo esc_url(home_url('strength')); ?>">テムソンの強み</a></li>
            <li><a class="bold" href="<?php if (is_page('strength')) : ?>#facility<?php else : echo esc_url(home_url('strength#facility')); ?><?php endif; ?>">主要設備紹介</a></li>
            <li><a class="bold" href="<?php echo esc_url(get_post_type_archive_link('post')); ?>">お知らせ</a></li>
            <li><a class="bold" href="<?php echo esc_url(get_post_type_archive_link('recruit')); ?>">採用情報</a></li>
            <li><a class="bold" href="<?php if (is_front_page()) : ?>#contact<?php else : echo esc_url(home_url('#contact')); ?><?php endif; ?>">お問い合わせ</a></li>
          </ul>

          <div class="l-headerSP__contentBt">
            <a class="l-headerSP__logo" href="<?php echo esc_url(home_url('')); ?>"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/public/img/svg/footer-logo.svg" alt=""></a>
            <p class="bold">〒399-4511<br>長野県上伊那郡南箕輪村田端宇沖河原6160-14<br>
              FAX 0265-73-7080
            </p>
            <a class="l-headerSP__tel bold" href="tel:02657375555">0265-73-7555</a>
          </div>
        </div>
      </div>
    </header>