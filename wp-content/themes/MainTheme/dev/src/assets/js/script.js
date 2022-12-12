jQuery(function () {
  jQuery('.js-FVSlide').slick({
    arrows: false,
    dots: false,
    infinite: true,
    slidesToShow: 1,
    fade: true,    // fedeオン
    speed: 1500,   // 画像切り替えにかかる時間（ミリ秒）
    autoplaySpeed: 2000,   // 自動スライド切り替え速度
    autoplay: true,
  });
});

// ページトップボタン
jQuery(function () {
  const pageTop = jQuery("#js-topBtn");
  pageTop.hide();
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 100) {
      pageTop.fadeIn();
    } else {
      pageTop.fadeOut();
    }
  });
  pageTop.click(function () {
    jQuery("body,html").animate(
      {
        scrollTop: 0,
      },
      500
    );
    return false;
  });
  // フッター手前でストップ
  jQuery("#js-topBtn").hide();
  jQuery(window).on("scroll", function () {
    scrollHeight = jQuery(document).height();
    scrollPosition = jQuery(window).height() + jQuery(window).scrollTop();
    footHeight = jQuery("footer").innerHeight();
    btnHeight = jQuery("#js-topBtn").innerHeight();
    if (scrollHeight - scrollPosition <= footHeight - (btnHeight / 2)) {
      jQuery("#js-topBtn").css({
        position: "absolute",
        "bottom": footHeight - (btnHeight / 2) //下からfooterの高さ + 20px上げた位置に配置
      });
    } else {
      jQuery("#js-topBtn").css({
        position: "fixed",
        bottom: "0",
      });
    }
  });
});

jQuery(function () {
  jQuery('.js-privacyBottom').css("display", "none");
  jQuery('.js-privacyBtn').on('click', function () {
    jQuery(this).next().slideToggle();
  })
});

jQuery('.js-btn__wrap').on('click', function () {
  jQuery('.js-item').toggleClass('js-active');
  jQuery('.js-item-r').toggleClass('js-active');
});

jQuery('.js-headerSP__wrap').on('click', function () {
  jQuery('.js-headerSP__wrap').toggleClass('js-active');
  jQuery('.js-headerSP__content').toggleClass('js-active');
});

jQuery('a[href*="#"]').on('click', function () {
  jQuery('.js-headerSP__wrap').removeClass('js-active');
  jQuery('.js-headerSP__content').removeClass('js-active');
});

new ScrollHint('.js-scrollable', {
  i18n: {
    scrollable: 'スクロールできます'
  }
});

// ページ内遷移スクーロール
jQuery('a[href*="#"]').click(function () {
  var elmHash = jQuery(this).attr('href'); //ページ内リンクのHTMLタグhrefから、リンクされているエリアidの値を取得
  var pos = jQuery(elmHash).offset().top - 80;//idの上部の距離からHeaderの高さを引いた値を取得
  jQuery('body,html').animate({ scrollTop: pos }, 500); //取得した位置にスクロール。500の数値が大きくなるほどゆっくりスクロール
  return false;
});

// ページ外遷移スクーロール
jQuery(function () {
  //現在のページURLのハッシュ部分を取得
  const hash = location.hash;

  //ハッシュ部分がある場合の条件分岐
  if (hash) {
    //ページ遷移後のスクロール位置指定
    jQuery("html, body").stop().scrollTop(0);
    //処理を遅らせる
    setTimeout(function () {
      //リンク先を取得
      const target = jQuery(hash),
        //リンク先までの距離を取得
        position = target.offset().top - 80;
      //指定の場所までスムーススクロール
      jQuery("html, body").animate({ scrollTop: position }, 500,);
    });
  }
});

jQuery("li:has(.dots)").addClass("three");

new WOW().init();
