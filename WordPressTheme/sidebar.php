<aside class="two-columns__side u-desktop">
  <div class="sideContent">
    <!-- 人気記事 -->
    <div class="sideContent__wrapper">
      <div class="sideContent__header sidebar-header">
        <h2 class="sidebar-header__title">人気記事</h2>
      </div>
      <ul class="sideContent__post-cards sidebar-post-cards">
        <?php
        $args = array(
          'post_type' => 'post',
          'post_status' => 'publish',
          'posts_per_page' => 3,
          'orderby' => 'meta_value_num',
          'meta_key' => '_custom_meta_views',
          'order' => 'DESC'
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
          while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <li class="sidebar-post-cards__card sidebar-post-card">
              <a href="<?php the_permalink(); ?>" class="sidebar-post-card__link">
                <div class="sidebar-post-card__block">
                  <div class="sidebar-post-card__img">
                    <?php if (has_post_thumbnail()) { the_post_thumbnail('post-thumbnail'); } ?>
                  </div>
                  <div class="sidebar-post-card__body">
                    <time datetime="<?php the_time('Y-m-d'); ?>" class="sidebar-post-card__date">
                      <?php the_time('Y.n/j'); ?>
                    </time>
                    <h3 class="sidebar-post-card__title">
                      <?php echo wp_trim_words(get_the_title(), 15, '...'); ?>
                    </h3>
                  </div>
                </div>
              </a>
            </li>
        <?php
          endwhile;
        endif;
        wp_reset_postdata();
        ?>
      </ul>
    </div>

    <!-- 口コミ -->
    <div class="sideContent__wrapper">
      <div class="sideContent__header sidebar-header">
        <h2 class="sidebar-header__title">口コミ</h2>
      </div>
      <?php
      $args = array(
        'post_type' => 'voice',
        'post_status' => 'publish',
        'posts_per_page' => 1,
        'orderby' => 'date',
        'order' => 'DESC'
      );
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post();  ?>
          <div class="sideContent__item sidebar-voice-item">
            <div class="sidebar-voice-item__img">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
              <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimg.png" alt="<?php the_title(); ?>アイキャッチ画像">
              <?php endif; ?>
            </div>
            <div class="sidebar-voice-item__body">
              <?php $voiceMeta = get_field('voice_meta'); ?>
              <p class="sidebar-voice-item__meta">
                <?php echo $voiceMeta['meta_1']; ?>代(<?php echo $voiceMeta['meta_2']; ?>)
              </p>
              <h3 class="sidebar-voice-item__title">
                <?php the_title(); ?>
              </h3>
            </div>
          </div>
        <?php
        endwhile;
      endif;
      wp_reset_postdata();
      ?>
      <div class="sideContent__button">
        <a href="<?php echo esc_url(home_url('voice')); ?>" class="section-button">View more<span></span></a>
      </div>
    </div>

    <!-- キャンペーン -->
    <div class="sideContent__wrapper">
      <div class="sideContent__header sidebar-header">
        <h2 class="sidebar-header__title">キャンペーン</h2>
      </div>
      <div class="sideContent__campaign-cards sidebar-campaign-cards">
        <?php
        $args = array(
          'post_type' => 'campaign',
          'post_status' => 'publish',
          'posts_per_page' => 2,
          'orderby' => 'date',
          'order' => 'DESC'
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
          while ($the_query->have_posts()) : $the_query->the_post();  ?>
            <div class="sidebar-campaign-cards__card campaign-card">
              <div class="campaign-card__img campaign-card__img--small">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail(); ?>
                <?php else : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimg.png" alt="<?php the_title(); ?>アイキャッチ画像">
                <?php endif; ?>
              </div>
              <div class="campaign-card__inner campaign-card__inner--small">
                <div class="campaign-card__head campaign-card__head--center">
                  <h3 class="campaign-card__title"><?php the_title(); ?></h3>
                </div>
                <?php $campaignPrice = get_field('campaign-price'); ?>
                <div class="campaign-card__body">
                  <p class="campaign-card__text campaign-card__text--small">
                    <?php echo $campaignPrice['campaign-price_1']; ?>
                  </p>
                  <div class="campaign-card__price">
                    <p class="campaign-card__price-before">
                      ¥<?php echo $campaignPrice['campaign-price_2']; ?>
                    </p>
                    <p class="campaign-card__price-after campaign-card__price-after--small">
                      ¥<?php echo $campaignPrice['campaign-price_3']; ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
        <?php
          endwhile;
        endif;
        wp_reset_postdata();
        ?>
      </div>
      <div class="sideContent__button">
        <a href="<?php echo esc_url(home_url('campaign')); ?>" class="section-button">View more<span></span></a>
      </div>
    </div>

    <!-- アーカイブ -->
    <div class="sideContent__wrapper">
      <div class="sideContent__header sidebar-header">
        <h2 class="sidebar-header__title">アーカイブ</h2>
      </div>
      <div class="sideContent__accordion sidebar-accordion">
        <?php
        $year_prev = null;
        $postType = get_post_type();
        $months = $wpdb->get_results("SELECT DISTINCT MONTH( post_date ) AS month ,
                                        YEAR( post_date ) AS year,
                                        COUNT( id ) as post_count FROM $wpdb->posts
                                        WHERE post_status = 'publish' and post_date <= now( )
                                        and post_type = '$postType'
                                        GROUP BY month , year
                                        ORDER BY post_date DESC");
        foreach($months as $month):
            $year_current = $month->year;
            if ($year_current != $year_prev) {
                if($year_prev != null): ?>
                  </ul>
                <?php endif; ?>
                <div class="sidebar-accordion__list">
                  <h2 class="sidebar-accordion__year"><?php echo $month->year; ?></h2>
                  <ul class="sidebar-accordion__items">
            <?php } ?>
            <li class="sidebar-accordion__item">
              <a href="<?php echo esc_url(home_url()); ?>/<?php echo $month->year; ?>/<?php echo date("m", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>">
                <?php echo date("n", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>月(<?php echo $month->post_count; ?>)
              </a>
            </li>
            <?php $year_prev = $year_current; ?>
        <?php endforeach; ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </aside>
