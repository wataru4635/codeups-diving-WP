<?php get_header(); ?>
<main>

  <!-- 下層ページのメインビュー -->

  <section class="sub-mv">
    <div class="sub-mv__header">
      <h1 class="sub-mv__title">about us</h1>
    </div>
    <div class="sub-mv__img">
      <picture>
        <source media="(max-width: 767px)"
          srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-about-mv_sp.jpg" type="image/jpeg" />
        <source media="(min-width: 768px)"
          srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-about-mv_pc.jpg" type="image/jpeg" />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-about-mv_sp.jpg"
          alt="シーサーがこっちを向いてる様子" />
      </picture>
    </div>
  </section>

  <!-- パンくずリスト -->
  <?php get_template_part('parts/breadcrumb') ?>

  <!-- page-about -->

  <section class="page-about sub-page-about">
    <div class="page-about__inner inner">
      <div class="page-about__container">
        <div class="page-about__images">
          <div class="page-about__img-left u-desktop">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-left.jpg"
              alt="屋根の上にシーサーがのっている様子" />
          </div>
          <div class="page-about__img-right">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-right.jpg"
              alt="ゴールデンバタフライフィッシュが泳いでいる様子" />
          </div>
        </div>
        <div class="page-about__body">
          <h3 class="page-about__title">
            Dive into<br />
            the Ocean
          </h3>
          <div class="page-about__body-left">
            <p class="page-about__text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- gallery -->

  <section class="gallery sub-gallery">
    <div class="gallery__inner inner">
      <div class="gallery__header section-header">
        <p class="section-header__engtitle">gallery</p>
        <h2 class="section-header__jptitle">フォト</h2>
      </div>
      <div class="gallery__modal js-modal-event"></div>
      <div class="gallery__images">
        <?php
  $repeat_item = SCF::get_option_meta( 'gallery-options', 'gallery' );
  foreach ($repeat_item as $fields ) {
  $image_url = wp_get_attachment_image_src($fields['gallery_img'] , 'full');
  $image_title = get_the_title($fields['gallery_img']); // 画像のタイトルを取得
?>
        <div class="gallery__img js-modal"">
  <img src=" <?php echo $image_url[0]; ?>" alt="<?php echo $image_title; ?>">
        </div>
        <?php } ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>