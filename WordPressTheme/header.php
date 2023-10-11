<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/common/information-tab_2.png">

  <?php wp_head(); ?>
</head>

<body>
  <!-- header -->
  <header class="header top-header js-header">
    <div class="header__inner">
      <h1 class="header__logo">
        <a href="<?php echo esc_url(home_url()); ?>/index.php" class="header__logoLink">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo.svg" alt="ロゴ画像" />
        </a>
      </h1>
      <div class="header__drawer hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <nav class="header__pc-nav pc-nav">
        <ul class="pc-nav__items">
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url('campaign')); ?>">
              <div class="pc-nav__title">
                <p class="pc-nav__en-title">Campaign</p>
                <p class="pc-nav__jp-title">キャンペーン</p>
              </div>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url('about')); ?>">
              <div class="pc-nav__title">
                <p class="pc-nav__en-title">About us</p>
                <p class="pc-nav__jp-title">私たちについて</p>
              </div>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url('information')); ?>">
              <div class="pc-nav__title">
                <p class="pc-nav__en-title">Information</p>
                <p class="pc-nav__jp-title">ダイビング情報</p>
              </div>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url('blog')); ?>">
              <div class="pc-nav__title">
                <p class="pc-nav__en-title">Blog</p>
                <p class="pc-nav__jp-title">ブログ</p>
              </div>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url('voice')); ?>">
              <div class="pc-nav__title">
                <p class="pc-nav__en-title">Voice</p>
                <p class="pc-nav__jp-title">お客様の声</p>
              </div>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url('price')); ?>">
              <div class="pc-nav__title">
                <p class="pc-nav__en-title">Price</p>
                <p class="pc-nav__jp-title">料金一覧</p>
              </div>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url('faq')); ?>">
              <div class="pc-nav__title">
                <p class="pc-nav__en-title">FAQ</p>
                <p class="pc-nav__jp-title">よくある質問</p>
              </div>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url('contact')); ?>">
              <div class="pc-nav__title">
                <p class="pc-nav__en-title">Contact</p>
                <p class="pc-nav__jp-title">お問合せ</p>
              </div>
            </a>
          </li>
        </ul>
      </nav>


      <nav class="header__sp-nav nav js-sp-nav">
        <div class="nav__container">
          <div class="nav__list">
            <ul class="nav__items">
              <li class="nav__item">
                <a class="nav__menu" href="<?php echo esc_url(home_url('campaign')); ?>">キャンペーン</a>
              </li>
              <?php $course_terms = get_terms('campaign_category', array('hide_empty'=>false)); ?>
                <?php foreach($course_terms as $course_term ) : ?>
              <li class="nav__item">
                <a class="nav__submenu" href="<?php echo get_term_link($course_term,'campaign_category'); ?>"><?php echo $course_term->name; ?></a>
              </li>
              <?php endforeach; ?>
              <li class="nav__item">
                <a class="nav__menu" href="<?php echo esc_url(home_url('about')); ?>">私たちについて</a>
              </li>
            </ul>
            <ul class="nav__items">
              <li class="nav__item">
                <a class="nav__menu" href="<?php echo esc_url(home_url('information')); ?>">ダイビング情報</a>
              </li>
              <li class="nav__item">
                <a class="nav__submenu js-tab-list" data-tab="license"
                  href="<?php echo esc_url(home_url('information')); ?>">ライセンス講習</a>
              </li>
              <li class="nav__item">
                <a class="nav__submenu js-tab-list" data-tab="fanDiving"
                  href="<?php echo esc_url(home_url('information')); ?>?tab=fanDiving">ファンダイビング</a>
              </li>
              <li class="nav__item">
                <a class="nav__submenu js-tab-list" data-tab="experienceDiving"
                  href="<?php echo esc_url(home_url('information')); ?>?tab=experienceDiving">体験ダイビング</a>
              </li>
              <li class="nav__item">
                <a class="nav__menu" href="<?php echo esc_url(home_url('blog')); ?>">ブログ</a>
              </li>
            </ul>
          </div>
          <div class="nav__list">
            <ul class="nav__items">
              <li class="nav__item">
                <a class="nav__menu" href="<?php echo esc_url(home_url('voice')); ?>">お客様の声</a>
              </li>
              <li class="nav__item">
                <a class="nav__menu" href="<?php echo esc_url(home_url('price')); ?>">料金一覧</a>
              </li>
              <li class="nav__item">
                  <a class="nav__submenu" href="<?php echo esc_url(home_url('price')); ?>#plan-1">ライセンス講習</a>
                </li>
                <li class="nav__item">
                  <a class="nav__submenu"
                    href="<?php echo esc_url(home_url('price')); ?>#plan-2">体験ダイビング</a>
                </li>
                <li class="nav__item">
                  <a class="nav__submenu" href="<?php echo esc_url(home_url('price')); ?>#plan-3">ファンダイビング</a>
                </li>
                <li class="nav__item">
                  <a class="nav__submenu" href="<?php echo esc_url(home_url('price')); ?>#plan-4">スペシャル<br class="u-mobile" />ダイビング</a>
                </li>
            </ul>
            <ul class="nav__items">
              <li class="nav__item">
                <a class="nav__menu" href="<?php echo esc_url(home_url('faq')); ?>">よくある質問</a>
              </li>
              <li class="nav__item">
                <a class="nav__menu" href="<?php echo esc_url(home_url('privacypolicy')); ?>">プライバシー<br />ポリシー</a>
              </li>
              <li class="nav__item">
                <a class="nav__menu" href="<?php echo esc_url(home_url('sitemap')); ?>">サイトマップ</a>
              </li>
              <li class="nav__item">
                <a class="nav__menu" href="<?php echo esc_url(home_url('terms')); ?>">利用規約</a>
              </li>
              <li class="nav__item">
                <a class="nav__menu" href="<?php echo esc_url(home_url('contact')); ?>">お問い合わせ</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    </div>
  </header>