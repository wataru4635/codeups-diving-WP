<?php get_header(); ?>
<main>

  <!-- 下層ページのメインビュー -->

  <section class="sub-mv">
    <div class="sub-mv__header">
      <h1 class="sub-mv__title">campaign</h1>
    </div>
    <div class="sub-mv__img">
      <picture>
        <source media="(max-width: 767px)"
          srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-campaign-mv_sp.jpg" type="image/jpeg" />
        <source media="(min-width: 768px)"
          srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-campaign-mv_pc.jpg" type="image/jpeg" />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-campaign-mv_sp.jpg"
          alt="ゴールデンバタフライフィッシュが泳いでいる様子" />
      </picture>
    </div>
  </section>

  <!-- パンくずリスト -->
  <?php get_template_part('parts/breadcrumb') ?>

  <!-- page-campaign -->

  <section class="page-campaign sub-page-campaign">
    <div class="page-campaign__inner inner">
      <div class="page-campaign__tab common-tab">
        <ul class="common-tab__lists">
          <li class="common-tab__list is-active"><a href="<?php echo get_post_type_archive_link('campaign') ?>">ALL</a>
          </li>
          <?php $course_terms = get_terms('campaign_category', array('hide_empty'=>false)); ?>
          <?php foreach($course_terms as $course_term ) : ?>
          <li class="common-tab__list"><a
              href="<?php echo get_term_link($course_term,'campaign_category'); ?>"><?php echo $course_term->name; ?></a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="page-campaign__container">
        <div class="page-campaign__cards">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <!-- ループ処理(例) -->
          <div class="page-campaign__card campaign-card">
            <div class="campaign-card__img">
              <?php if (has_post_thumbnail()) : // アイキャッチ画像が設定されてれば表示 ?>
              <?php the_post_thumbnail(); ?>
              <?php else : // なければnoimage画像をデフォルトで表示 ?>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimg.png"
                alt="<?php the_title(); // タイトルを表示 ?>アイキャッチ画像">
              <?php endif; ?>
            </div>
            <div class="campaign-card__inner">
              <div class="campaign-card__head">
                <p class="campaign-card__label" <h3 class="><?php echo get_the_terms(get_the_ID(), 'campaign_category')[0]->name; ?>
                </p>campaign-card__title"><?php the_title(); // タイトルを表示 ?></h3>
              </div>
              <?php $campaignPrice = get_field('campaign-price');?>
              <div class="campaign-card__body">
                <p class="campaign-card__text"><?php echo $campaignPrice['campaign-price_1']; ?></p>
                <div class="campaign-card__price">
                  <p class="campaign-card__price-before">¥<?php echo $campaignPrice['campaign-price_2']; ?></p>
                  <p class="campaign-card__price-after">¥<?php echo $campaignPrice['campaign-price_3']; ?></p>
                </div>
                <?php $campaignDescription = get_field('campaign-description');?>
                <p class="campaign-card__detail u-desktop">
                  <?php echo $campaignDescription['campaign-description_1']; ?>
                </p>
                <div class="campaign-card__footer u-desktop">
                  <p class="campaign-card__date"><?php echo $campaignDescription['campaign-description_2']; ?></p>
                  <p class="campaign-card__contact">
                    ご予約・お問い合わせはコチラ
                  </p>
                  <div class="campaign-card__button">
                    <a href="<?php echo esc_url(home_url('contact')); ?>" class="section-button">Contact
                      us<span></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endwhile; endif;?>
        </div>
      </div>

      <!-- ページネーション -->

      <div class="page-campaign__pagination wp-pagenavi">
        <?php wp_pagenavi(); ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>