jQuery(function () {
  jQuery('.js-FVSlide').slick({
    arrows: false,
    dots: false,
    infinite: true,
    slidesToShow: 1,
    fade: true,    // fedeオン
    speed: 1500,   // 画像切り替えにかかる時間（ミリ秒）
    autoplaySpeed: 2000,   // 自動スライド切り替え速度
    autoplay	: true,
  });
});

// ページトップボタン
jQuery(function () {
  const pageTop = jQuery("#topBtn");
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
  jQuery("#topBtn").hide();
  jQuery(window).on("scroll", function () {
    scrollHeight = jQuery(document).height();
    scrollPosition = jQuery(window).height() + jQuery(window).scrollTop();
    footHeight = jQuery("footer").innerHeight();
    btnHeight = jQuery("#topBtn").innerHeight();
    if (scrollHeight - scrollPosition <= footHeight - (btnHeight / 2)) {
      jQuery("#topBtn").css({
        position: "absolute",
        "bottom": footHeight - (btnHeight / 2) //下からfooterの高さ + 20px上げた位置に配置
      });
    } else {
      jQuery("#topBtn").css({
        position: "fixed",
        bottom: "0",
      });
    }
  });
});

jQuery(function () {
  jQuery('.p-frontPrivacy__bottom').css("display", "none");
  jQuery('.p-frontPrivacy__btn').on('click', function () {
    jQuery(this).next().slideToggle();
  })
});

jQuery('.btn__wrap').on('click', function () {
  jQuery('.item').toggleClass('active');
  jQuery('.item-r').toggleClass('active');
});

jQuery('.l-headerSP__wrap').on('click', function () {
  jQuery('.l-headerSP__wrap').toggleClass('active');
  jQuery('.l-headerSP__content').toggleClass('active');
});
