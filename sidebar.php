<div id="sidebar">
    <div class="shadow">
    <?php if (is_page('contact-us')) : ?>
        <div id="contact-form">
            <?php if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') {
                echo do_shortcode('[contact-form-7 id="74" title="Contact Form"]');
            } else {
                echo do_shortcode('[contact-form-7 id="74" title="Contact Form"]');
            }
            ?>
        </div>
    </div>
    <?php endif; ?>
    <?php if (!is_page('contact-us')) : ?>
        <section class="icon-row">
                <?php echo get_template_part('template-parts/icon', 'row'); ?>
        </section>
        <section class="home-module-7">
            <div class="banner">
                <div class="flex-row">
                    <div class="flex-col banner-middle">
                        <img class="banner-sm" src="<?=IMGURL?>bg-family-sm.jpg" alt="Military Discounts" />
                    </div>
                    <div class="flex-col badge-col">
                        <h2 class=""><span>We Offer</span><br />
                            MILITARY DISCOUNTS</h2>
                        <ul>
                            <li><img src="<?=IMGURL?>badge-airforce.png" alt="" class="military-badge"></li>
                            <li><img src="<?=IMGURL?>badge-marines.png" alt="" class="military-badge"></li>
                            <li><img src="<?=IMGURL?>badge-navy.png" alt="" class="military-badge"></li>
                            <li><img src="<?=IMGURL?>badge-army.png" alt="" class="military-badge"></li>
                        </ul>
                        <a class="" href="<?=SITEURL?>/contact-us/"><button class="btn btn-primary">LEARN MORE</button></a>
                    </div>
                </div>
            </div>
        </section>
    </div>

        <section class="home-module-4">
            <img src="<?=IMGURL?>bg-side-sm.jpg" alt="Auto Insurance" />
            <ul class="logos">
                <li>
                    <img src="<?=IMGURL?>geico.svg" alt="Geico" />
                </li>
                <li>
                    <img src="<?=IMGURL?>progressive.svg" alt="Progressive" />
                </li>
                <li>
                    <img src="<?=IMGURL?>allstate.svg" alt="AllState" />
                </li>
                <li>
                    <img src="<?=IMGURL?>state-farm.svg" alt="State Farm" />
                </li>
                <li>
                    <img src="<?=IMGURL?>usaa.svg" alt="USAA" class="usaa" />
                </li>
            </ul>
        </section>
        <section class="ribbon">
            <div class="extra-padding"><p>We will work with any insurance agencies not listed*</p></div>
        </section>
    <?php endif; ?>
</div>
