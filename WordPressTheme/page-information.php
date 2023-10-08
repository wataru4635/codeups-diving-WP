<?php get_header(); ?>
<!-- 下層ページのメインビュー -->

<section class="sub-mv">
      <div class="sub-mv__header">
        <h1 class="sub-mv__title">information</h1>
      </div>
      <div class="sub-mv__img">
        <picture>
          <source media="(max-width: 767px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-information-mv_sp.jpg"
            type="image/jpeg" />
          <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-information-mv_pc.jpg"
            type="image/jpeg" />
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-information-mv_sp.jpg" alt="海でダイビングをしている様子" />
        </picture>
      </div>
    </section>

    <!-- パンくずリスト -->
    <?php get_template_part('parts/breadcrumb') ?>

    <!-- page-information -->

    <section class="page-information sub-page-information">
      <div class="page-information__inner inner">
        <div class="page-information__tab information-tab">
          <ul class="information-tab__lists">
            <li class="information-tab__list js-tab-list is-active" data-tab="license">
              <span>ライセンス<br class="u-mobile" />講習</span>
            </li>
            <li class="information-tab__list js-tab-list" data-tab="fanDiving">
              <span>ファン<br class="u-mobile" />ダイビング</span>
            </li>
            <li class="information-tab__list js-tab-list" data-tab="experienceDiving">
              <span>体験<br class="u-mobile" />ダイビング</span>
            </li>
          </ul>
        </div>
        <div class="page-information__tab-container">
          <div class="page-information__card js-tabContent is-active" data-tab="license">
            <div class="information-card">
              <div class="information-card__body information-card__body--mt">
                <h3 class="information-card__title">ライセンス講習</h3>
                <p class="information-card__text">
                  泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！
                </p>
              </div>
              <div class="information-card__img information-card__img--mt js-slide-animation">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information-license.jpg" alt="ゴールデンバタフライフィッシュが中心にたくさんの魚が泳いでいる様子" />
              </div>
            </div>
          </div>
          <div class="page-information__card js-tabContent" data-tab="fanDiving">
            <div class="information-card">
              <div class="information-card__body information-card__body--mt">
                <h3 class="information-card__title">ファンダイビング</h3>
                <p class="information-card__text">
                  ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
                </p>
              </div>
              <div class="information-card__img information-card__img--mt js-slide-animation">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information-fundiving.jpg" alt="ゴールデンバタフライフィッシュが中心にたくさんの魚が泳いでいる様子" />
              </div>
            </div>
          </div>
          <div class="page-information__card js-tabContent" data-tab="experienceDiving">
            <div class="information-card">
              <div class="information-card__body information-card__body--mt">
                <h3 class="information-card__title">体験ダイビング</h3>
                <p class="information-card__text">
                  ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
                </p>
              </div>
              <div class="information-card__img information-card__img--mt js-slide-animation">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information-diving.jpg" alt="ゴールデンバタフライフィッシュが中心にたくさんの魚が泳いでいる様子" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</main>
<?php get_footer(); ?>