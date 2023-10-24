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
        <source media="(max-width: 767px)"
          srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-sitemap-mv_sp.jpg" type="image/jpeg" />
        <source media="(min-width: 768px)"
          srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-sitemap-mv_pc.jpg" type="image/jpeg" />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-sitemap-mv_sp.jpg" alt="綺麗な海の中の様子" />
      </picture>
    </div>
  </section>

  <!-- パンくずリスト -->
  <?php get_template_part('parts/breadcrumb') ?>

  <!-- page-sitemap -->
  <section class="page-sitemap sub-page-sitemap">
    <div class="page-sitemap__inner inner">
      <div class="page-sitemap__nav nav">
        <div class="nav__container">
          <div class="nav__list">
            <ul class="nav__items">
              <li class="nav__item">
                <a class="nav__menu nav__menu--sitemap menu--margin-top"
                  href="<?php echo esc_url(home_url('campaign')); ?>">キャンペーン</a>
              </li>
              <li class="nav__item">
                <a class="nav__submenu nav__submenu--sitemap"
                  href="<?php echo esc_url(home_url('campaign')); ?>">ライセンス取得</a>
              </li>
              <li class="nav__item">
                <a class="nav__submenu nav__submenu--sitemap"
                  href="<?php echo esc_url(home_url('campaign')); ?>">貸切体験ダイビング</a>
              </li>
              <li class="nav__item">
                <a class="nav__submenu nav__submenu--sitemap"
                  href="<?php echo esc_url(home_url('campaign')); ?>">ナイトダイビング</a>
              </li>
              <li class="nav__item">
                <a class="nav__menu nav__menu--sitemap" href="<?php echo esc_url(home_url('about')); ?>">私たちについて</a>
              </li>
            </ul>
            <ul class="nav__items">
              <li class="nav__item">
                <a class="nav__menu nav__menu--sitemap menu--margin-top"
                  href="<?php echo esc_url(home_url('information')); ?>">ダイビング情報</a>
              </li>
              <li class="nav__item">
                <a class="nav__submenu nav__submenu--sitemap js-tab-list" data-tab="license"
                  href="<?php echo esc_url(home_url('information')); ?>">ライセンス講習</a>
              </li>
              <li class="nav__item">
                <a class="nav__submenu nav__submenu--sitemap js-tab-list" data-tab="fanDiving"
                  href="<?php echo esc_url(home_url('information')); ?>?tab=fanDiving">ファンダイビング</a>
              </li>
              <li class="nav__item">
                <a class="nav__submenu nav__submenu--sitemap js-tab-list" data-tab="experienceDiving"
                  href="<?php echo esc_url(home_url('information')); ?>?tab=experienceDiving">体験ダイビング</a>
              </li>
              <li class="nav__item">
                <a class="nav__menu nav__menu--sitemap" href="<?php echo esc_url(home_url('blog')); ?>">ブログ</a>
              </li>
            </ul>
          </div>
          <div class="nav__list">
            <ul class="nav__items">
              <li class="nav__item">
                <a class="nav__menu nav__menu--sitemap menu--margin-top"
                  href="<?php echo esc_url(home_url('voice')); ?>">お客様の声</a>
              </li>
              <li class="nav__item">
                <a class="nav__menu nav__menu--sitemap" href="<?php echo esc_url(home_url('price')); ?>">料金一覧</a>
              </li>
              <li class="nav__item">
                <a class="nav__submenu nav__submenu--sitemap"
                  href="<?php echo esc_url(home_url('price')); ?>#plan-1">ライセンス講習</a>
              </li>
              <li class="nav__item">
                <a class="nav__submenu nav__submenu--sitemap"
                  href="<?php echo esc_url(home_url('price')); ?>#plan-2">体験ダイビング</a>
              </li>
              <li class="nav__item">
                <a class="nav__submenu nav__submenu--sitemap"
                  href="<?php echo esc_url(home_url('price')); ?>#plan-3">ファンダイビング</a>
              </li>
              <li class="nav__item">
                <a class="nav__submenu nav__submenu--sitemap"
                  href="<?php echo esc_url(home_url('price')); ?>#plan-4">スペシャル<br class="u-mobile" />ダイビング</a>
              </li>
            </ul>
            <ul class="nav__items">
              <li class="nav__item">
                <a class="nav__menu nav__menu--sitemap menu--margin-top"
                  href="<?php echo esc_url(home_url('faq')); ?>">よくある質問</a>
              </li>
              <li class="nav__item">
                <a class="nav__menu nav__menu--sitemap"
                  href="<?php echo esc_url(home_url('privacypolicy')); ?>">プライバシー<br class="u-mobile" />ポリシー</a>
              </li>
              <li class="nav__item">
                <a class="nav__menu nav__menu--sitemap" href="<?php echo esc_url(home_url('sitemap')); ?>">サイトマップ</a>
              </li>
              <li class="nav__item">
                <a class="nav__menu nav__menu--sitemap" href="<?php echo esc_url(home_url('terms')); ?>">利用規約</a>
              </li>
              <li class="nav__item">
                <a class="nav__menu nav__menu--sitemap" href="<?php echo esc_url(home_url('contact')); ?>">お問い合わせ</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>