<?php get_header(); ?>
<main>
    <section class="sub-mv">
        <div class="sub-mv__header">
            <h1 class="sub-mv__title">price</h1>
        </div>
        <div class="sub-mv__img">
            <picture>
                <source media="(max-width: 767px)"
                        srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-price-mv_sp.jpg"
                        type="image/jpeg" />
                <source media="(min-width: 768px)"
                        srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-price-mv_pc.jpg"
                        type="image/jpeg" />
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-price-mv_sp.jpg"
                     alt="たくさんの魚が泳いでいる様子" />
            </picture>
        </div>
    </section>

    <?php get_template_part('parts/breadcrumb') ?>

    <section class="page-price sub-page-price">
        <div class="page-price__inner inner">
            <div class="page-price__container">
                <?php
                $plans = [
                    1 => [
                        'title' => SCF::get_option_meta('price-options', 'plan_1'),
                        'group' => 'price-1',
                        'course_key' => ['course_1', 'subcourse_1', 'price_1']
                    ],
                    2 => [
                        'title' => SCF::get_option_meta('price-options', 'plan_2'),
                        'group' => 'price-2',
                        'course_key' => ['course_2', 'subcourse_2', 'price_2']
                    ],
                    3 => [
                        'title' => SCF::get_option_meta('price-options', 'plan_3'),
                        'group' => 'price-3',
                        'course_key' => ['course_3', 'subcourse_3', 'price_3']
                    ],
                    4 => [
                        'title' => SCF::get_option_meta('price-options', 'plan_4'),
                        'group' => 'price-4',
                        'course_key' => ['course_4', 'subcourse_4', 'price_4']
                    ]
                ];
                ?>
                <?php foreach ($plans as $plan_id => $plan) : ?>
                    <div class="page-price__table price-table" id="plan-<?php echo $plan_id; ?>">
                        <div class="price-table__header">
                            <div class="price-table__header-img">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information-tab_1-active.png"
                                     alt="ロゴ画像" />
                            </div>
                            <h2 class="price-table__header-title"><?php echo $plan['title']; ?></h2>
                        </div>
                        <dl class="price-table__body">
                            <?php
                            $price_group = SCF::get_option_meta('price-options', $plan['group']);
                            foreach ($price_group as $item) :
                                ?>
                                <dt class="price-table__text">
                                    <?php echo $item[$plan['course_key'][0]]; ?> <br class="u-mobile"/><?php echo $item[$plan['course_key'][1]]; ?>
                                </dt>
                                <dd class="price-table__price"><?php echo $item[$plan['course_key'][2]]; ?></dd>
                            <?php endforeach ?>
                        </dl>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>

