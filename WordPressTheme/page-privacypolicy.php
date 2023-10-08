<?php get_header(); ?>
<main>

    <!-- 下層ページのメインビュー -->

    <section class="sub-mv">
      <div class="sub-mv__header">
        <h1 class="sub-mv__title">privacy&nbsp;policy</h1>
      </div>
      <div class="sub-mv__img">
        <picture>
          <source media="(max-width: 767px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-sitemap-mv_sp.jpg" type="image/jpeg" />
          <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-sitemap-mv_pc.jpg" type="image/jpeg" />
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-sitemap-mv_sp.jpg" alt="綺麗な海の中の様子" />
        </picture>
      </div>
    </section>

    <!-- パンくずリスト -->
    <?php get_template_part('parts/breadcrumb') ?>
    <!-- page-privacy policy -->
    <section class="page-privacypolicy sub-page-privacypolicy">
      <div class="page-privacypolicy__inner inner">
        <div class="page-privacypolicy__header">
          <h2 class="page-privacypolicy__title"><?php the_title(); // タイトルを表示 ?></h2>
        </div>
        <div class="page-privacypolicy__container">
          <?php the_content();?>
        </div>
      </div>
    </section>
</main>
<?php get_footer(); ?>