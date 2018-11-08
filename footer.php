    <div id="map-section">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3390.457790655903!2d-106.55649168484219!3d31.812523981273937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86ddf819c39ce66b%3A0xfc1ae623e6635fdb!2sBob-O&#39;s+Family+Fun+Center!5e0!3m2!1sen!2sus!4v1539873706024" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
<section id="footer">
    <div class="container">
            <div class="flex-row row">
                <div class="col-xs-12 flex-col">
                    <div class="footer-blocks">
                        <div class="logo-footer">
                            <a class="navbar-brand" href='<?php echo get_site_url(); ?>'><img
                                        src="<?= IMGURL; ?>logo.png"
                                        alt="<?php echo get_bloginfo(
                                            'description'
                                        ); ?>"/></a>
                        </div>


                        <div class="contact-footer phone-footer">
                        <div><span class="title">Contact</span>

                            <p>3701 Mattox Ste. A, El Paso, TX 79925<br />
                                <strong>E-mail.</strong> <a href="mailto:eliteautocollision2@gmail.com">eliteautocollision2@gmail.com</a><br />
                                <strong>PH.</strong> <?php printPhone(); ?></p>


                        </div>
                    </div>
                    <div class="hours-footer">
                        <div>
                            <span class="title">HOURS</span>
                            <p>Monday - Friday : <strong>8:00 AM - 6:00 PM</strong><br />
                            Saturday: <strong>By Appointment Only</strong><br />
                            Sunday: <strong>Closed</strong></p>
                        </div>
                    </div>

                    <div class="button-footer">
                        <a href="<?= SITEURL ?>/contact-us/">
                            <button class="btn btn-primary">
                                GET AN ESTIMATE
                            </button>
                        </a>
                    </div></div>
                    <div class="visible-xs">
                        <?php $sm = new SocialMedia(array('facebook', 'twitter'));
                        $sm->setSize('sm');
                        $sm->showNetworkButtons();
                        $sm->setColorType('singleColor');
                        ?>
                    </div>
                </div>
            </div>
    </div>
</section>
    <section class="contact-button-footer visible-xs">
        <a href="https://bobosfun.a.pcsparty.com/bookings/?_ga=2.117101574.1839719463.1539814279-1322542885.1535553428" class="arrow" target="_blank">Birthday Booking</a> <a href="https://bobosfun.a.pcsparty.com/bookings/?_ga=2.117101574.1839719463.1539814279-1322542885.1535553428" target="_blank"><button class="btn btn-primary">Contact Us Today</button></a>
    </section>
<section class="footer-nav hidden-xs hidden-sm">
    <div class="container">
        <div class="row flex-row">
            <div class="col-xs-12">
                <?php echo non_responsive_bs_menu('footer'); ?>
            </div>
        </div>
    </div>
</section>

<?php wp_footer(); ?>
</body>
</html>