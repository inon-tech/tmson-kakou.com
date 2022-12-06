<?php global $IHY_img_1;
global $IHY_img_2; ?>

<?php get_header(); ?>

<?php
/*
Template Name: お問い合わせ
*/
?>
<main class="p-contact">
  <section class="l-page-FV">
    <div class="l-page-FV__wrap">
      <div class="l-page-FV__left">
        <h1>CONTACT
          <p>お問い合わせ</p>
        </h1>
      </div>
      <div class="l-page-FV__desc">
        <div class="l-breadcrumb p-newsBreadcrumb">
          <?php bcn_display(); ?>
        </div>
      </div>
    </div>
  </section>

  <section class="p-frontContact contact-page">
    <div class="l-inner">
      <h2><span>CONTACT</span>お問い合わせ</h2>

      <div class="p-frontContact__wrap">
        <?php echo apply_shortcodes('[contact-form-7 id="38" title="コンタクトフォーム"]'); ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>