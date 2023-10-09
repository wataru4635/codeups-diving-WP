<?php get_header(); ?>

<main>
  <!-- main view -->

  <section class="mv top-mv">
    <div class="mv__inner">
      <div class="mv__loading loading-mv">
        <div class="loading-mv__header">
          <h2 class="loading-mv__title">diving</h2>
          <p class="loading-mv__subtitle">into the ocean</p>
        </div>
        <div class="loading-mv__img">
          <div class="loading-mv__img-left">
            <picture>
              <source media="(max-width: 767px)"
                srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/loading-left_sp.jpg"
                type="image/jpeg" />
              <source media="(min-width: 768px)"
                srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/loading-left_pc.jpg"
                type="image/jpeg" />
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/loading-left_sp.jpg"
                alt="ウミガメが海の中から空を見ている様子の左半分の画像" />
            </picture>
          </div>
          <div class="loading-mv__img-right">
            <picture>
              <source media="(max-width: 767px)"
                srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/loading-right_sp.jpg"
                type="image/jpeg" />
              <source media="(min-width: 768px)"
                srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/loading-right_pc.jpg"
                type="image/jpeg" />
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/loading-right_sp.jpg"
                alt="ウミガメが海の中から空を見ている様子の右半分の画像" />
            </picture>
          </div>
        </div>
      </div>
      <div class="mv__header js-mainTitle">
        <h2 class="mv__title">diving</h2>
        <p class="mv__subtitle">into the ocean</p>
      </div>
      <div class="swiper mv__swiper js-mv-swiper">
        <div class="swiper-wrapper mv__wrapper">
          <div class="swiper-slide mv__img">
            <picture>
              <source media="(max-width: 767px)"
                srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-sp_1.jpg" type="image/jpeg" />
              <source media="(min-width: 768px)"
                srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-pc_1.jpg" type="image/jpeg" />
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-sp_1.jpg"
                alt="ウミガメが海の中から空を見ている様子" />
            </picture>
          </div>
          <div class="swiper-slide mv__img">
            <picture>
              <source media="(max-width: 767px)"
                srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-sp_2.jpg" type="image/jpeg" />
              <source media="(min-width: 768px)"
                srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-pc_2.jpg" type="image/jpeg" />
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-sp_2.jpg" alt="ウミガメが泳いでいる様子" />
            </picture>
          </div>
          <div class="swiper-slide mv__img">
            <picture>
              <source media="(max-width: 767px)"
                srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-sp_3.jpg" type="image/jpeg" />
              <source media="(min-width: 768px)"
                srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-pc_3.jpg" type="image/jpeg" />
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-sp_3.jpg" alt="海の上に船が進んでいる様子" />
            </picture>
          </div>
          <div class="swiper-slide mv__img">
            <picture>
              <source media="(max-width: 767px)"
                srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-sp_4.jpg" type="image/jpeg" />
              <source media="(min-width: 768px)"
                srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-pc_4.jpg" type="image/jpeg" />
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-sp_4.jpg" alt="海辺の様子" />
            </picture>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Campaign -->
  <section class="campaign top-campaign">
    <div class="campaign__inner inner">
      <div class="campaign__header section-header">
        <p class="section-header__engtitle">campaign</p>
        <h2 class="section-header__jptitle">キャンペーン</h2>
      </div>
      <div class="campaign__controller">
        <div class="swiper-button-prev campaign__prev u-desktop">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/arrow-prev.png" alt="左に進むボタン" />
        </div>
        <div class="swiper-button-next campaign__next u-desktop">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/arrow-next.png" alt="右に進むボタン" />
        </div>
      </div>
      <div class="swiper campaign__swiper js-campaign-swiper">
        <div class="swiper-wrapper campaign__cards">
          <?php
            $news_query = new WP_Query(
              array(
                'post_type' => 'campaign',
                'post_status' => 'publish',
                'posts_per_page'=> -1,
                'orderby' => "rand"
             )
            );
            ?>
          <?php if ( $news_query->have_posts() ) : ?>
          <?php while ( $news_query->have_posts() ) : ?>
          <?php $news_query->the_post(); ?>
          <div class="swiper-slide campaign__card">
            <div class="campaign-card">
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
                  <p class="campaign-card__label">
                    <?php echo get_the_terms(get_the_ID(), 'campaign_category')[0]->name; ?>
                  </p>
                  <h3 class="campaign-card__title"><?php the_title(); // タイトルを表示 ?></h3>
                </div>
                <?php $campaignPrice = get_field('campaign-price');?>

                <div class="campaign-card__body">
                  <p class="campaign-card__text"><?php echo $campaignPrice['campaign-price_1']; ?></p>
                  <div class="campaign-card__price">
                    <p class="campaign-card__price-before"><?php echo $campaignPrice['campaign-price_2']; ?></p>
                    <p class="campaign-card__price-after"><?php echo $campaignPrice['campaign-price_3']; ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>
        </div>
      </div>
      <div class="campaign__button">
        <a href="<?php echo esc_url(home_url('campaign')); ?>" class="section-button">View more<span></span></a>
      </div>
    </div>
  </section>

  <!-- About us -->

  <section class="about top-about">
    <div class="about__inner inner">
      <div class="about__header section-header">
        <p class="section-header__engtitle">about us</p>
        <h2 class="section-header__jptitle">私たちについて</h2>
      </div>
      <div class="about__container">
        <div class="about__images">
          <div class="about__img-left">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-left.jpg"
              alt="屋根の上にシーサーがのっている様子" />
          </div>
          <div class="about__img-right">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-right.jpg"
              alt="ゴールデンバタフライフィッシュが泳いでいる様子" />
          </div>
        </div>
        <div class="about__body">
          <h3 class="about__title">
            Dive into<br />
            the Ocean
          </h3>
          <div class="about__body-left">
            <p class="about__text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
            </p>
            <div class="about__button">
              <a href="<?php echo esc_url(home_url('about')); ?>" class="section-button">View more<span></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- information -->

  <section class="information top-information">
    <div class="information__inner inner">
      <div class="information__header section-header">
        <p class="section-header__engtitle">information</p>
        <h2 class="section-header__jptitle">ダイビング情報</h2>
      </div>
      <div class="information__media information-card">
        <div class="information-card__img js-slide-animation">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information.jpg"
            alt="ゴールデンバタフライフィッシュが中心にたくさんの魚が泳いでいる様子" />
        </div>
        <div class="information-card__body">
          <h3 class="information-card__title">ライセンス講習</h3>
          <p class="information-card__text">
            当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br />
            正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
          </p>
          <div class="information-card__button">
            <a href="<?php echo esc_url(home_url('information')); ?>" class="section-button">View more<span></span></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Blog -->

  <section class="blog top-blog">
    <div class="blog__inner inner">
      <div class="blog__header section-header">
        <p class="section-header__engtitle section-header__engtitle--white">
          blog
        </p>
        <h2 class="section-header__jptitle section-header__jptitle--white">
          ブログ
        </h2>
      </div>
      <div class="blog__items blog-cards">
        <?php
            $news_query = new WP_Query(
              array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 3,
                'orderby'        => 'date',
                'order'          => 'DESC'
             )
            );
            ?>
        <?php if ( $news_query->have_posts() ) : ?>
        <?php while ( $news_query->have_posts() ) : ?>
        <?php $news_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="blog-cards__item blog-card">
          <div class="blog-card__header">
            <figure class="blog-card__img">
              <?php if (has_post_thumbnail()) : // アイキャッチ画像が設定されてれば表示 ?>
              <?php the_post_thumbnail(); ?>
              <?php else : // なければnoimage画像をデフォルトで表示 ?>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimg.png" alt="">
              <?php endif; ?>
            </figure>
          </div>
          <div class="blog-card__body">
            <time class="blog-card__time" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
            <h3 class="blog-card__title"><?php the_title(); // タイトルを表示 ?></h3>
            <p class="blog-card__text">
              <?php the_excerpt(); ?>
            </p>
          </div>
        </a>
        <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </div>
      <div class="blog__button">
        <a href="<?php echo esc_url(home_url('blog')); ?>" class="section-button">View more<span></span></a>
      </div>
    </div>
  </section>

  <!-- Voice -->

  <section class="voice top-voice">
    <div class="voice__inner inner">
      <div class="voice__header section-header">
        <p class="section-header__engtitle">voice</p>
        <h2 class="section-header__jptitle">お客様の声</h2>
      </div>
      <div class="voice__items voice-cards">
        <?php
$news_query = new WP_Query(
	array(
    'post_type' => 'voice',
    'post_status' => 'publish',
    'posts_per_page' => 2,
    'orderby' => 'rand'
	)
);
?>
        <?php if ( $news_query->have_posts() ) : ?>
        <?php while ( $news_query->have_posts() ) : ?>
        <?php $news_query->the_post(); ?>
        <div class="voice-cards__item voice-card">
          <div class="voice-card__header">
            <div class="voice-card__header-left">
              <div class="voice-card__info">
                <?php $voiceMeta = get_field('voice_meta');?>
                <p class="voice-card__meta"><?php echo $voiceMeta['meta_1']; ?>代(<?php echo $voiceMeta['meta_2']; ?>)
                </p>
                <p class="voice-card__label"><?php echo get_the_terms(get_the_ID(), 'voice_category')[0]->name; ?></p>
              </div>
              <h3 class="voice-card__title"><?php the_title(); // タイトルを表示 ?></h3>
            </div>
            <div class="voice-card__header-right">
              <figure class="voice-card__img js-slide-animation">
                <?php if (has_post_thumbnail()) : // アイキャッチ画像が設定されてれば表示 ?>
                <?php the_post_thumbnail(); ?>
                <?php else : // なければnoimage画像をデフォルトで表示 ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimg.png"
                  alt="<?php the_title(); // タイトルを表示 ?>アイキャッチ画像">
                <?php endif; ?>
              </figure>
            </div>
          </div>
          <div class="voice-card__body">
            <p class="voice-card__text">
              <?php echo get_field("voice_text"); ?>
            </p>
          </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </div>
      <div class="voice__button">
        <a href="<?php echo esc_url(home_url('voice')); ?>" class="section-button">View more<span></span></a>
      </div>
    </div>
  </section>

  <!-- Price -->

  <section class="price top-price">
    <div class="price__inner inner">
      <div class="price__header section-header">
        <p class="section-header__engtitle">price</p>
        <h2 class="section-header__jptitle">料金一覧</h2>
      </div>
      <div class="price__container">
        <div class="price__img js-slide-animation">
          <picture>
            <source media="(max-width: 767px)"
              srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-sp.jpg" type="image/jpeg" />
            <source media="(min-width: 768px)"
              srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-pc.jpg" type="image/jpeg" />
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-sp.jpg" alt="海の生き物が泳ぐ様子" />
          </picture>
        </div>
        <ul class="price__lists">
          <?php
// プランごとに配列にまとめる
$plans = [
    1 => [
        'title' => SCF::get_option_meta('price-options','plan_1'),
        'group' => 'price-1',
        'course_key' => ['course_1', 'subcourse_1', 'price_1']
    ],
    2 => [
        'title' => SCF::get_option_meta('price-options','plan_2'),
        'group' => 'price-2',
        'course_key' => ['course_2', 'subcourse_2', 'price_2']
    ],
    3 => [
        'title' => SCF::get_option_meta('price-options','plan_3'),
        'group' => 'price-3',
        'course_key' => ['course_3', 'subcourse_3', 'price_3']
    ],
    4 => [
        'title' => SCF::get_option_meta('price-options','plan_4'),
        'group' => 'price-4',
        'course_key' => ['course_4', 'subcourse_4', 'price_4']
    ]
];
?>
          <?php foreach ($plans as $plan) : ?>
          <li class="price__list">
            <h3 class="price__title"><?php echo $plan['title']; ?></h3>
            <dl class="price__menu">
              <?php
                $price_group = SCF::get_option_meta('price-options', $plan['group']);
                foreach ($price_group as $item) :
                ?>
              <dt class="price__text">
                <?php echo $item[$plan['course_key'][0]]; ?><?php echo $item[$plan['course_key'][1]]; ?></dt>
              <dd class="price__price"><?php echo $item[$plan['course_key'][2]]; ?></dd>
              <?php endforeach ?>
            </dl>
          </li>
          <?php endforeach ?>
        </ul>
      </div>
      <div class="price__button">
        <a href="<?php echo esc_url(home_url('price')); ?>" class="section-button">View more<span></span></a>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>