<?php get_header(); ?>
<main>

    <!-- 下層ページのメインビュー -->
    <section class="sub-mv">
        <div class="sub-mv__header">
            <h1 class="sub-mv__title">
                terms&nbsp;<span class="sub-mv__title--lowercase">of</span>&nbsp;service
            </h1>
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

    <!-- page-terms -->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <section class="page-terms sub-page-terms">
            <div class="page-terms__inner inner">
                <div class="page-terms__header">
                    <h2 class="page-terms__title">利用規約</h2>
                </div>
                <div class="page-terms__container">
                    <?php the_content(); ?>
                </div>
            </div>
        </section>
    <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
