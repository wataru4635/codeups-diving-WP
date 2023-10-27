<?php get_header(); ?>
<main>
  <section class="page-404 sub-page-404">
    <div class="page-404__inner inner">
      <div class="page-404_breadcrumb">
        <?php get_template_part('parts/breadcrumb') ?>
      </div>
    </div>
    <div class="page-404__block">
      <h1 class="page-404__title">404</h1>
      <p class="page-404__text">
        申し訳ありません。<br />お探しのページが見つかりません。
      </p>
      <div class="page-404__button">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="section-button section-button--white">Page TOP<span></span></a>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
