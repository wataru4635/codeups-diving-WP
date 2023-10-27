<div class="nav">
  <div class="nav__container">
    <div class="nav__list">
      <ul class="nav__items">
        <li class="nav__item">
          <a class="nav__menu <?php if (is_page('sitemap')) : echo 'nav__menu--sitemap nav__menu--margin-top'; endif ?>" href="<?php echo esc_url(home_url('/campaign/')); ?>">キャンペーン</a>
        </li>
        <li class="nav__item">
              <?php $course_terms = get_terms('campaign_category', array('hide_empty'=>false)); ?>
          <?php foreach($course_terms as $course_term ) : ?>
          <a class="nav__submenu" href="<?php echo get_term_link($course_term,'campaign_category'); ?>"><?php echo $course_term->name; ?></a>
          <?php endforeach; ?>
        </li>
        <li class="nav__item">
          <a class="nav__menu <?php if (is_page('sitemap')) : echo 'nav__menu--sitemap'; endif ?>" href="<?php echo esc_url(home_url('/about/')); ?>">私たちについて</a>
        </li>
      </ul>
      <ul class="nav__items">
        <li class="nav__item">
          <a class="nav__menu <?php if (is_page('sitemap')) : echo 'nav__menu--sitemap nav__menu--margin-top'; endif ?>" href="<?php echo esc_url(home_url('/information/')); ?>">ダイビング情報</a>
        </li>
        <li class="nav__item">
          <a class="nav__submenu js-tab-list" data-tab="license" href="<?php echo esc_url(home_url('/information/')); ?>">ライセンス講習</a>
        </li>
        <li class="nav__item">
          <a class="nav__submenu js-tab-list" data-tab="fanDiving" href="<?php echo esc_url(home_url('/information/')); ?>?tab=fanDiving">ファンダイビング</a>
        </li>
        <li class="nav__item">
          <a class="nav__submenu js-tab-list" data-tab="experienceDiving" href="<?php echo esc_url(home_url('/information/')); ?>?tab=experienceDiving">体験ダイビング</a>
        </li>
        <li class="nav__item">
          <a class="nav__menu <?php if (is_page('sitemap')) : echo 'nav__menu--sitemap'; endif ?>" href="<?php echo esc_url(home_url('/blog/')); ?>">ブログ</a>
        </li>
      </ul>
    </div>
    <div class="nav__list">
      <ul class="nav__items">
        <li class="nav__item">
          <a class="nav__menu <?php if (is_page('sitemap')) : echo 'nav__menu--sitemap nav__menu--margin-top'; endif ?>" href="<?php echo esc_url(home_url('/voice/')); ?>">お客様の声</a>
        </li>
        <li class="nav__item">
          <a class="nav__menu <?php if (is_page('sitemap')) : echo 'nav__menu--sitemap'; endif ?>" href="<?php echo esc_url(home_url('/price/')); ?>">料金一覧</a>
        </li>
        <li class="nav__item">
          <a class="nav__submenu" href="<?php echo esc_url(home_url('/price/')); ?>#plan-1">ライセンス講習</a>
        </li>
        <li class="nav__item">
          <a class="nav__submenu" href="<?php echo esc_url(home_url('/price/')); ?>#plan-2">体験ダイビング</a>
        </li>
        <li class="nav__item">
          <a class="nav__submenu" href="<?php echo esc_url(home_url('/price/')); ?>#plan-3">ファンダイビング</a>
        </li>
        <li class="nav__item">
          <a class="nav__submenu" href="<?php echo esc_url(home_url('/price/')); ?>#plan-4">スペシャル<br class="u-mobile" />ダイビング</a>
        </li>
      </ul>
      <ul class="nav__items">
        <li class="nav__item">
          <a class="nav__menu <?php if (is_page('sitemap')) : echo 'nav__menu--sitemap nav__menu--margin-top'; endif ?>" href="<?php echo esc_url(home_url('/faq/')); ?>">よくある質問</a>
        </li>
        <li class="nav__item">
          <a class="nav__menu <?php if (is_page('sitemap')) : echo 'nav__menu--sitemap'; endif ?>" href="<?php echo esc_url(home_url('/privacypolicy/')); ?>">プライバシー<br class="u-mobile" />ポリシー</a>
        </li>
        <li class="nav__item">
          <a class="nav__menu <?php if (is_page('sitemap')) : echo 'nav__menu--sitemap'; endif ?>" href="<?php echo esc_url(home_url('/sitemap/')); ?>">サイトマップ</a>
        </li>
        <li class="nav__item">
          <a class="nav__menu <?php if (is_page('sitemap')) : echo 'nav__menu--sitemap'; endif ?>" href="<?php echo esc_url(home_url('/terms/')); ?>">利用規約</a>
        </li>
        <li class="nav__item">
          <a class="nav__menu <?php if (is_page('sitemap')) : echo 'nav__menu--sitemap'; endif ?>" href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a>
        </li>
      </ul>
    </div>
  </div>
</div>
