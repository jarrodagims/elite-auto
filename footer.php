    <div id="map-section">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54277.20563773339!2d-106.36755935680694!3d31.761611010211126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e75ac2ec2749e3%3A0xd5fe00d506ac4490!2sAuto+Collision+Center!5e0!3m2!1sen!2sus!4v1542321016528" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
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

                            <p>3701 Mattox St Suite A, El Paso, TX 79925<br /><strong>E-mail.</strong> <a href="mailto:eliteautocollision2@gmail.com">eliteautocollision2@gmail.com</a><br />
                                <strong>PH.</strong> <?php printPhone(); ?></p>

                        </div>
                    </div>
                    <div class="hours-footer">
                        <div>
                            <span class="title">HOURS</span>
                            <p>Monday - Friday : <strong>8:00 AM - 5:00 PM</strong><br />
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
                    <div class="visible-xs visible-sm">
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
<section class="footer-nav hidden-xs hidden-sm">
    <div class="container">
        <div class="row flex-row">
            <div class="col-xs-12">
                <?php echo non_responsive_bs_menu('footer'); ?>
            </div>
        </div>
    </div>
</section>
<section class="sub-footer">
    <div class="container">
        <div class="flex-row row">
            <div class="flex-col hidden-xs hidden-xm"><?php $sm = new SocialMedia(array('facebook', 'twitter'));
                $sm->setSize('sm');
                $sm->showNetworkButtons();
                $sm->setColorType('singleColor');
                ?></div>
            <div class="flex-col">
                <div>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | All Rights Reserved</div>
            </div>
        </div>
    </div>
</section>
<?php wp_footer(); ?>
</body>
</html>