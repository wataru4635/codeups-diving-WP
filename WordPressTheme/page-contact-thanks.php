<?php get_header(); ?>
<main>

<!-- 下層ページのメインビュー -->

<section class="sub-mv">
  <div class="sub-mv__header">
    <h1 class="sub-mv__title">contact</h1>
  </div>
  <div class="sub-mv__img">
    <picture>
      <source media="(max-width: 767px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-contact-mv_sp.jpg" type="image/jpeg" />
      <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-contact-mv_pc.jpg" type="image/jpeg" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-contact-mv_sp.jpg" alt="海岸を上から見た様子" />
    </picture>
  </div>
</section>

<!-- パンくずリスト -->
<?php get_template_part('parts/breadcrumb') ?>

<!-- page-contact-Thanks -->

<section class="page-contact-Thanks sub-page-contact-Thanks">
  <div class="page-contact-Thanks__inner inner">
    <h2 class="page-contact-Thanks__header">
      お問い合わせ内容を送信完了しました。
    </h2>
    <div class="page-contact-Thanks__detail">
      <p class="page-contact-Thanks__text">
        このたびは、お問い合わせ頂き
        <br class="u-mobile" />誠にありがとうございます。
        <br />お送り頂きました内容を確認の上、
        <br class="u-mobile" />3営業日以内に折り返しご連絡させて頂きます。
        <br />また、ご記入頂いたメールアドレスへ、
        <br class="u-mobile" />自動返信の確認メールをお送りしております。
      </p>
    </div>
  </div>
</section>

</main>
<?php get_footer(); ?>