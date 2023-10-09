<?php get_header(); ?>
<main>

  <!-- 下層ページのメインビュー -->

  <section class="sub-mv">
    <div class="sub-mv__header">
      <h1 class="sub-mv__title">contact</h1>
    </div>
    <div class="sub-mv__img">
      <picture>
        <source media="(max-width: 767px)"
          srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-contact-mv_sp.jpg" type="image/jpeg" />
        <source media="(min-width: 768px)"
          srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-contact-mv_pc.jpg" type="image/jpeg" />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-contact-mv_sp.jpg" alt="海岸を上から見た様子" />
      </picture>
    </div>
  </section>

  <!-- パンくずリスト -->
  <?php get_template_part('parts/breadcrumb') ?>

  <!-- page-contact -->
  <section class="page-contact sub-page-contact">
    <div class="page-contact__inner inner">
      <div class="page-contact__content contact-form">
        <div class="contact-form_error">
          <p class="contact-form_error-text js-error"></p>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="7bf39d6" title="お問い合わせ"]'); ?>
      </div>
    </div>
  </section>

</main>
<?php get_footer(); ?>