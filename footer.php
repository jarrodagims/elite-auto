    <div id="map-section">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d108565.88500351862!2d-106.42039733723674!3d31.751827843456436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e75b3fc839bcf9%3A0x58bacf556c352b04!2sEl+Paso+Community+Home+Health+Inc!5e0!3m2!1sen!2sus!4v1538585730434" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
<section id="footer">
<div class="top-footer">
    <div class="container">
        <div class="row flex-row">
            <div class="col-md-12 flex-col">
                <div class="logo-footer">
                    <a class="navbar-brand" href='<?php echo get_site_url(); ?>'><img
                                src="<?= IMGURL; ?>logo.png"
                                alt="<?php echo get_bloginfo(
                                    'description'
                                ); ?>"/></a>

                    <p>Nothing should stand in your way when it comes to <span class="brand">having fun</span>.</p>
                </div>

            </div>
        </div>
    </div>
</div>
    <div class="container">
            <div class="flex-row row">
                <div class="col-xs-12 flex-col">
                    <div class="footer-blocks"><div class="contact-footer phone-footer">
                        <div><span class="title">Address</span>
                            <p>3851 Constitution Dr, <span class="br-xs">El Paso, TX 79922</span><br />
                                <strong>PH</strong>.  <?php printPhone(); ?>
                            </p>
                            <a href="<?= SITEURL ?>/contact-us/">
                                <button class="btn btn-primary">
                                    CONTACT US TODAY
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="hours-footer">
                        <div>
                            <span class="title">OPERATION HOURS</span>
                            <p>Sunday - Thursday: <strong>12:00pm - 9:00pm</strong><br />
                            Friday - Saturday: <strong>10:00am - 11:00pm</strong>
                            </p>
                        </div>
                    </div>

                    <div class="button-footer">
                        <div class="border-left">
                            <span class="title">METHODS OF PAYMENT</span>
                            <p>No Personal Checks</p>
                           <img src="<?=IMGURL?>/cards.png" alt="Payment methods" />
                        </div>
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
<section class="footer-nav hidden-xs hidden-sm">
    <div class="container">
        <div class="row flex-row">
            <div class="col-xs-12">
                <?php echo non_responsive_bs_menu('footer'); ?>
            </div>
        </div>
    </div>
</section>
<section id="sub-footer">
    <div class="container">
        <div class="flex-row row">
            <div class="flex-col col-md-12 col-xs-12">
                <div class="hidden-xs hidden-sm"><?php $sm = new SocialMedia(array('facebook', 'twitter'));
                    $sm->setSize('sm');
                    $sm->showNetworkButtons();
                    $sm->setColorType('singleColor');
                    ?></div>
                <div>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | All Rights Reserved</div>
            </div>
        </div>
</section>
<?php wp_footer(); ?>
</body>
</html>