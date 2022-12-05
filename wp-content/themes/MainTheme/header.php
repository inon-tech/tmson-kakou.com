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
        <div class="l-headerPC__logo"><a href="<?php echo esc_url(home_url('')); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/public/img/normal/1x/common/header-logo.png" alt=""></a></div>
        <nav class="l-headerPC__nav">
          <ul>
            <li>
              <a href="<?php echo esc_url(home_url('company')); ?>" class="bold">
                会社概要
              </a>
            </li>
            <li>
              <a href="<?php echo esc_url(home_url('strength')); ?>" class="bold">
                テムソンの強み
              </a>
            </li>
            <li>
              <a href="<?php echo esc_url(home_url('strength')); ?>" class="bold">
                主要設備紹介
              </a>
            </li>
            <li>
              <a href="<?php echo esc_url(get_post_type_archive_link('post')); ?>" class="bold">
                お知らせ
              </a>
            </li>
            <li>
              <a href="<?php echo esc_url(get_post_type_archive_link('recruit')); ?>" class="bold">
                採用情報
              </a>
            </li>
            <li>
              <a href="<?php echo esc_url(home_url('contact')); ?>" class="stage__wrap">
                <div class="stage">
                  <div class="cube">
                    <div class="side_right bold">お問い合わせ</div>
                    <div class="side_front bold">お問い合わせ</div>
                  </div>
                </div>
                <div class="stage">
                  <div class="cube">
                    <div class="side_left bold">CONTACT</div>
                    <div class="side_front2 bold">CONTACT</div>
                  </div>
                </div>
              </a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="l-headerSP">
        <div class="l-headerSP__logo">
          <a href="<?php echo esc_url(home_url('')); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/public/img/normal/1x/common/header-logo-sp.png" alt=""></a>
        </div>

        <div class="l-headerSP__wrap js-headerSP__wrap">
          <div class="l-headerSP__ME bold">MENU</div>
          <div class="l-headerSP__CL bold">CLOSE</div>
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
            <li><a class="bold" href="<?php echo esc_url(home_url('strength')); ?>">主要設備紹介</a></li>
            <li><a class="bold" href="<?php echo esc_url(get_post_type_archive_link('post')); ?>">お知らせ</a></li>
            <li><a class="bold" href="<?php echo esc_url(get_post_type_archive_link('recruit')); ?>">採用情報</a></li>
            <li><a class="bold" href="<?php echo esc_url(home_url('contact')); ?>">お問い合わせ</a></li>
          </ul>

          <div class="l-headerSP__contentBt">
            <h1>TMSON</h1>
            <p class="">〒399-4511　長野県上伊那郡南箕輪村田畑 6160-14<br>
              FAX 0265-73-7080
            </p>
            <a href="tel:02657375555">0265-73-7555</a>
          </div>
        </div>
      </div>
    </header>