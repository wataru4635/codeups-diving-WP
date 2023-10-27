<?php get_header(); ?>

<main>

    <!-- 下層ページのメインビュー -->

    <section class="sub-mv">
        <div class="sub-mv__header">
            <h1 class="sub-mv__title">
                site&nbsp;<span class="sub-mv__title--sitemap">map</span>
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
    <?php get_template_part('parts/breadcrumb'); ?>

    <!-- page-sitemap -->
    <section class="page-sitemap sub-page-sitemap">
        <div class="page-sitemap__inner inner">
            <div class="page-sitemap__nav">
                <?php get_template_part('parts/navmenu'); ?>
            </div>
        </div>
    </section>

</main>

<footer class="footer <?php echo is_404() ? 'error-footer' : 'top-footer'; ?>">
    <div class="footer__inner inner">
        <div class="footer__wrapper">
            <div class="footer__logo">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="footer__logoLink">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo.svg" alt="ロゴ画像" />
                </a>
            </div>
            <div class="footer__sns sns">
                <div class="sns__facebook">
                    <a href="https://www.facebook.com" target="_blank">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/facebook.svg" alt="facebook" />
                    </a>
                </div>
                <div class="sns__instagram">
                    <a href="https://www.instagram.com" target="_blank">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/instagram.svg" alt="instagram" />
                    </a>
                </div>
            </div>
        </div>

        <div class="footer__nav">
            <?php get_template_part('parts/navmenu'); ?>
        </div>
    </div>
</footer>
<div class="to-top js-to-top">
    <a href="#top">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/to-top.png" alt="トップに戻るボタン" />
    </a>
</div>
<?php wp_footer(); ?>
</body>
</html>
