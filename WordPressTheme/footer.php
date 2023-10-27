<!-- Contact -->
<?php
    // 特定の固定ページの場合は contact セクションを非表示にする
    if (!is_page(array('contact', 'contact-thanks')) && !is_404()) :
?>
    <section class="contact sub-contact">
        <div class="contact__inner inner">
            <div class="contact__container">
                <div class="contact__container-left">
                    <div class="contact__logo">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact-logo.png" alt="ロゴ画像" />
                    </div>
                    <div class="contact__info">
                        <ul class="contact__info-lists">
                            <li class="contact__info-list">沖縄県那覇市1-1</li>
                            <a href="tel:01200000000" class="contact__info-list">TEL:0120-000-0000</a>
                            <li class="contact__info-list">営業時間:8:30-19:00</li>
                            <li class="contact__info-list">定休日:毎週火曜日</li>
                        </ul>
                        <div class="contact__info-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3579.4734888798594!2d127.67718017668672!3d26.21380048977406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e5699dc05bf813%3A0x3501764c0a57176d!2z44CSOTAwLTAwMTUg5rKW57iE55yM6YKj6KaH5biC5LmF6IyC5Zyw77yR5LiB55uu77yR4oiS77yR!5e0!3m2!1sja!2sjp!4v1690500071396!5m2!1sja!2sjp" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="contact__container-right">
                    <div class="contact__header section-header">
                        <p class="section-header__engtitle section-header__engtitle--large">
                            contact
                        </p>
                        <h2 class="section-header__jptitle section-header__jptitle--mt">
                            お問い合わせ
                        </h2>
                    </div>
                    <p class="contact__text">ご予約・お問い合わせはコチラ</p>
                    <div class="contact__button">
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="section-button">Contact us<span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<!-- footer -->
<footer class="footer <?php echo is_404() ? 'error-footer' : 'top-footer'; ?>">
    <div class="footer__inner inner">
        <div class="footer__wrapper">
            <div class="footer__logo">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="footer__logoLink">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo.svg" alt="ロゴ画像" />
                </a>
            </div>
            <div class="footer__sns sns">
                <div class="sns__facebook">
                    <a href="https://www.facebook.com" target="_blank">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/facebook.svg" alt="facebook" />
                    </a>
                </div>
                <div class="sns__instagram">
                    <a href="https://www.instagram.com" target="_blank">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/instagram.svg" alt="instagram" />
                    </a>
                </div>
            </div>
        </div>
        <div class="footer__nav">
            <?php get_template_part('parts/navmenu') ?>
        </div>
    </div>
</footer>
<div class="to-top js-to-top">
    <a href="#top">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/to-top.png" alt="トップに戻るボタン" />
    </a>
</div>
<?php wp_footer(); ?>
</body>
</html>
