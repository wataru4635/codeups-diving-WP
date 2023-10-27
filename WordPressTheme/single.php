<?php get_header(); ?>

<main>
    <!-- 下層ページのメインビュー -->
    <section class="sub-mv">
        <div class="sub-mv__header">
            <h2 class="sub-mv__title">blog</h2>
        </div>
        <div class="sub-mv__img">
            <picture>
                <source media="(max-width: 767px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-blog-mv_sp.jpg" type="image/jpeg" />
                <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-blog-mv_pc.jpg" type="image/jpeg" />
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-blog-mv_sp.jpg" alt="たくさんの魚が泳いでいる様子" />
            </picture>
        </div>
    </section>

    <!-- パンくずリスト -->
    <?php get_template_part('parts/breadcrumb') ?>

    <!-- single -->
    <section class="two-columns sub-two-columns">
        <div class="two-columns__inner inner">
            <div class="two-columns__container">
                <!-- メインコンテンツ -->
                <div class="two-columns__main">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <!-- ループ処理(例) -->
                        <div class="single-mainConten">
                            <div class="single-mainContent__wrapper">
                                <div class="single-mainContent__header">
                                    <time class="single-mainContent__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
                                    <h1 class="single-mainContent__title"><?php the_title(); ?></h1>
                                </div>
                                <div class="single-mainContent__img">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail(); ?>
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimg.png" alt="">
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="single-mainContent__block">
                                <?php the_content(); ?>
                            </div>
                            <div class="single-mainContent__pagination">
                                <?php 
                                    $prev = get_previous_post();
                                    $next = get_next_post();
                                    if (!empty($prev)) {
                                        $prev_url = esc_url(get_permalink($prev->ID));
                                        echo '<a href="' . $prev_url . '" class="pagination__prev"></a>';
                                    }
                                    if (!empty($next)) {
                                        $next_url = esc_url(get_permalink($next->ID));
                                        echo '<a href="' . $next_url . '" class="pagination__next"></a>';
                                    }
                                ?>
                            </div>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
                <!-- サイドバーコンテンツ -->
                <div class="two-columns__side">
                    <?php get_sidebar(''); ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
