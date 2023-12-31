<?php get_header(); ?>

<section class="sub-mv">
    <div class="sub-mv__header">
        <h1 class="sub-mv__title">voice</h1>
    </div>
    <div class="sub-mv__img">
        <picture>
            <source media="(max-width: 767px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-voice-mv_sp.jpg" type="image/jpeg" />
            <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-voice-mv_pc.jpg" type="image/jpeg" />
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-voice-mv_sp.jpg" alt="たくさんの魚が泳いでいる様子" />
        </picture>
    </div>
</section>

<?php get_template_part('parts/breadcrumb') ?>

<section class="page-voice sub-page-voice">
    <div class="page-voice__inner inner">
        <div class="page-campaign__tab common-tab">
            <ul class="common-tab__lists">
                <li class="common-tab__list is-active"><a href="<?php echo get_post_type_archive_link('voice') ?>">ALL</a></li>
                <?php $course_terms = get_terms('voice_category', array('hide_empty' => false)); ?>
                <?php foreach ($course_terms as $course_term) : ?>
                    <li class="common-tab__list"><a href="<?php echo get_term_link($course_term, 'voice_category'); ?>"><?php echo $course_term->name; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php if (have_posts()) : ?>
            <div class="page-voice__items voice-cards">
                <?php while (have_posts()) : the_post(); ?>
                    <div class="voice-cards__item voice-card">
                        <div class="voice-card__header">
                            <div class="voice-card__header-left">
                                <div class="voice-card__info">
                                    <?php
                                    $voiceMeta = get_field('voice_meta');
                                    if ($voiceMeta) :
                                    ?>
                                        <p class="voice-card__meta"><?php echo $voiceMeta['meta_1']; ?>代(<?php echo $voiceMeta['meta_2']; ?>)</p>
                                    <?php endif; ?>
                                    <p class="voice-card__label"><?php echo get_the_terms(get_the_ID(), 'voice_category')[0]->name; ?></p>
                                </div>
                                <h3 class="voice-card__title"><?php the_title(); ?></h3>
                            </div>
                            <div class="voice-card__header-right">
                                <figure class="voice-card__img js-slide-animation">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail(); ?>
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimg.png" alt="<?php the_title(); ?>アイキャッチ画像">
                                    <?php endif; ?>
                                </figure>
                            </div>
                        </div>
                        <div class="voice-card__body">
                            <p class="voice-card__text">
                                <?php
                                $voice_text = get_field("voice_text");
                                if (strlen($voice_text) > 400) {
                                    echo mb_substr($voice_text, 0, 400, 'UTF-8') . '...';
                                } else {
                                    echo $voice_text;
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
        <div class="page-voice__pagination">
            <?php wp_pagenavi(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
