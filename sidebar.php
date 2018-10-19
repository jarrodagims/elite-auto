<div id="sidebar">
    <?php if (is_page('contact-us')) : ?>
        <div id="contact-form">
            <?php if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') {
                echo do_shortcode('[contact-form-7 id="41" title="Contact Form"]');
            } else {
                echo do_shortcode('[contact-form-7 id="41" title="Contact Form"]');
            }
            ?>
        </div>
        <section>
        </section>
    <?php endif; ?>
    <?php if (!is_page('contact-us')) : ?>
        <section>
            <div class="card">
                <div class="card-title">Book your next</div>
                <div class="card-text">
                    <p><span class="big">Birthday</span>
                        <span class="small">Celebration</span></p>

                    <a class="arrow" href="https://bobosfun.a.pcsparty.com/bookings/?_ga=2.117101574.1839719463.1539814279-1322542885.1535553428" target="_blank">Birthday Booking</a>
                </div>
                <div class="card-img">

                </div>
            </div>

            <?php echo non_responsive_bs_menu('secondary-menu', 'left', SITENAME); ?>
        </section>

        <section class="home-module-4">
            <div class="top">
                <img src="<?=IMGURL?>play.png" alt="El Paso's Place to Play" class="play-logo" />
            </div>
            <div class="bottom">
                <h2>Visit us today for a safe, wholesome day of fun for the entire family!</h2>
                <a href="<?= SITEURL ?>/contact-us/"><button class="btn btn-primary">
                        Contact Us Today
                    </button></a>
            </div>
        </section>


    <?php endif; ?>
</div>
