jQuery(function () {
  jQuery('.js-FVSlide').slick({
    arrows: false,
    dots: false,
    infinite: true,
    slidesToShow: 1,
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
    if (scrollHeight - scrollPosition <= footHeight) {
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
