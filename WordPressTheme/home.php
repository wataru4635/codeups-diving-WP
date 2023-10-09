<?php get_header(); ?>
<main>

  <!-- 下層ページのメインビュー -->

  <section class="sub-mv">
    <div class="sub-mv__header">
      <h1 class="sub-mv__title">blog</h1>
    </div>
    <div class="sub-mv__img">
      <picture>
        <source media="(max-width: 767px)"
          srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-blog-mv_sp.jpg" type="image/jpeg" />
        <source media="(min-width: 768px)"
          srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-blog-mv_pc.jpg" type="image/jpeg" />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-blog-mv_sp.jpg" alt="たくさんの魚が泳いでいる様子" />
      </picture>
    </div>
  </section>

  <!-- パンくずリスト -->
  <?php get_template_part('parts/breadcrumb') ?>

  <!-- page-blog-two-columns -->

  <section class="two-columns sub-two-columns">
    <div class="two-columns__inner inner">
      <div class="two-columns__container">
        <!-- メインコンテンツ -->

        <div class="two-columns__main">
          <div class="mainContent">
            <div class="mainContent__items blog-cards blog-cards--column">
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <a href="<?php the_permalink(); ?>" class="blog-cards__item blog-card">
                <div class="blog-card__header">
                  <figure class="blog-card__img">
                    <?php if (has_post_thumbnail()) : // アイキャッチ画像が設定されてれば表示 ?>
                    <?php the_post_thumbnail(); ?>
                    <?php else : // なければnoimage画像をデフォルトで表示 ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimg.png" alt="">
                    <?php endif; ?>
                  </figure>
                </div>
                <div class="blog-card__body">
                  <time class="blog-card__time" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
                  <h3 class="blog-card__title"><?php the_title(); // タイトルを表示 ?></h3>
                  <p class="blog-card__text">
                    <?php the_excerpt(); ?>
                  </p>
                </div>
              </a>
              <?php endwhile; endif;?>
            </div>
            <div class="mainContent__pagination wp-pagenavi">
              <?php wp_pagenavi(); ?>
            </div>
          </div>
        </div>
        <!-- サイドバーコンテンツ -->

        <?php get_sidebar(''); ?>

      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>