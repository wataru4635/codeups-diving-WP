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
<?php get_template_part('parts/breadcrumb') ?>

<!-- page-sitemap -->
<section class="page-sitemap sub-page-sitemap">
  <div class="page-sitemap__inner inner">
    <div class="page-sitemap__nav nav">
      <div class="nav__container">
        <div class="nav__list">
          <ul class="nav__items">
            <li class="nav__item">
              <a class="nav__menu nav__menu--sitemap menu--margin-top" href="page-campaign.html">キャンペーン</a>
            </li>
            <li class="nav__item">
              <a class="nav__submenu nav__submenu--sitemap" href="page-campaign.html">ライセンス取得</a>
            </li>
            <li class="nav__item">
              <a class="nav__submenu nav__submenu--sitemap" href="page-campaign.html">貸切体験ダイビング</a>
            </li>
            <li class="nav__item">
              <a class="nav__submenu nav__submenu--sitemap" href="page-campaign.html">ナイトダイビング</a>
            </li>
            <li class="nav__item">
              <a class="nav__menu nav__menu--sitemap" href="page-about.html">私たちについて</a>
            </li>
          </ul>
          <ul class="nav__items">
            <li class="nav__item">
              <a class="nav__menu nav__menu--sitemap menu--margin-top" href="page-information.html">ダイビング情報</a>
            </li>
            <li class="nav__item">
              <a class="nav__submenu nav__submenu--sitemap js-tab-list" data-tab="license"
                href="page-information.html">ライセンス講習</a>
            </li>
            <li class="nav__item">
              <a class="nav__submenu nav__submenu--sitemap js-tab-list" data-tab="experienceDiving"
                href="page-information.html?tab=experienceDiving">体験ダイビング</a>
            </li>
            <li class="nav__item">
              <a class="nav__submenu nav__submenu--sitemap js-tab-list" data-tab="fanDiving"
                href="page-information.html?tab=fanDiving">ファンダイビング</a>
            </li>
            <li class="nav__item">
              <a class="nav__menu nav__menu--sitemap" href="page-blog.html">ブログ</a>
            </li>
          </ul>
        </div>
        <div class="nav__list">
          <ul class="nav__items">
            <li class="nav__item">
              <a class="nav__menu nav__menu--sitemap menu--margin-top" href="page-voice.html">お客様の声</a>
            </li>
            <li class="nav__item">
              <a class="nav__menu nav__menu--sitemap" href="page-price.html">料金一覧</a>
            </li>
            <li class="nav__item">
              <a class="nav__submenu nav__submenu--sitemap" href="page-price.html#price-license">ライセンス講習</a>
            </li>
            <li class="nav__item">
              <a class="nav__submenu nav__submenu--sitemap" href="page-price.html#price-experienceDiving">体験ダイビング</a>
            </li>
            <li class="nav__item">
              <a class="nav__submenu nav__submenu--sitemap" href="page-price.html#price-fandiving">ファンダイビング</a>
            </li>
          </ul>
          <ul class="nav__items">
            <li class="nav__item">
              <a class="nav__menu nav__menu--sitemap menu--margin-top" href="page-faq.html">よくある質問</a>
            </li>
            <li class="nav__item">
              <a class="nav__menu nav__menu--sitemap" href="page-privacypolicy.html">プライバシー<br
                  class="u-mobile" />ポリシー</a>
            </li>
            <li class="nav__item">
              <a class="nav__menu nav__menu--sitemap" href="page-terms.html">利用規約</a>
            </li>
            <li class="nav__item">
              <a class="nav__menu nav__menu--sitemap" href="page-contact.html">お問い合わせ</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
</main>
<?php get_footer(); ?>