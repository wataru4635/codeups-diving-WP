<?php get_header(); ?>
<main>

  <!-- 下層ページのメインビュー -->

  <section class="sub-mv">
    <div class="sub-mv__header">
      <h1 class="sub-mv__title sub-mv__title--uppercase">faq</h1>
    </div>
    <div class="sub-mv__img">
      <picture>
        <source media="(max-width: 767px)"
          srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-faq-mv_sp.jpg" type="image/jpeg" />
        <source media="(min-width: 768px)"
          srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-faq-mv_pc.jpg" type="image/jpeg" />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-faq-mv_sp.jpg" alt="海辺の様子" />
      </picture>
    </div>
  </section>

  <!-- パンくずリスト -->
  <?php get_template_part('parts/breadcrumb') ?>

  <!-- page-faq -->

  <section class="page-faq sub-page-faq">
    <div class="page-faq__inner inner">
      <div class="page-faq__container">
        <ul class="page-faq__accordion-wrapper faq-accordion-items">
          <?php
  $faq_group = SCF::get_option_meta('faq-options', 'faq' );
  foreach ($faq_group as $item):
?>
          <li class="faq-accordion-items__item accordion-item">
            <h3 class="accordion-item__question js-faq-question">
              <?php echo $item['question']; ?>
            </h3>
            <div class="accordion-item__answer js-faq-answer">
              <p class="accordion-item__answer-text">
                <?php echo nl2br($item['answer']); ?>
              </p>
            </div>
          </li>
          <?php endforeach ?>
        </ul>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>