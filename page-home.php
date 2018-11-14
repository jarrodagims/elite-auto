<?php get_header();

/*
    Template Name: Home
*/ ?>
<section class="home-module-1">

    <div class="container">
        <a class="navbar-brand" href='<?php echo get_site_url(); ?>'><img
                    src="<?= IMGURL; ?>logo.png"
                    alt="<?php echo get_bloginfo(
                        'description'
                    ); ?>"/></a>
    <div class="jumbotron">
        <div class="jumbo-content">
            <h1><strong>Elite Auto Collision Center</strong>
                is Devoted to El Paso’s Drivers
            </h1>

            <h2>915.422.1474</h2>

            <a href="<?= SITEURL ?>/contact-us/">
                <button class="btn btn-primary">GET AN ESTIMATE</button>
            </a>
        </div>
    </div>
</div>
</section>
    </div> <!-- end home-bg -->
    <section class="icon-row">
        <div class="container">
            <?php echo get_template_part('template-parts/icon', 'row'); ?>
        </div>
    </section>
<section class="home-module-3">
    <div class="container">
        <div class="row flex-row">
            <div class="col-md-6 flex-col">
                <div class="extra-padding">
                    <h4>If your car has suffered through an accident or collision, it’s time to seek repair services from our team of dedicated professionals.</h4>
                    <h5>Meet The Team <span class="arrow">&gt;</span></h5>
                    <p>We work with all insurance companies so you won’t have to worry about anything! In fact, we use the same CCC system used by large insurance companies so your car’s repairs can go off without a hitch. So, if you’re ready to restore your car to its former, pre-collision glory, contact Elite Auto Collision Center!
                    </p>
                </div>
            </div>
            <div class="col-md-6 flex-col bg-side">
                
            </div>
        </div>
    </div>
    <img src="<?=IMGURL?>bg-side-sm.jpg" alt="Auto Insurance" />
</section>


<section class="home-module-4">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
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
            </div>
        </div>
    </div>
</section>

<section class="ribbon">
    <div class="extra-padding"><p>We will work with any insurance agencies not listed*</p></div>
</section>


<section class="home-module-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="extra-padding"><p><strong>We Will Take Care of Everything</strong></p>

                <p>The journey towards completely repairing a vehicle after a collision may seem long and arduous but when you team up with us, you’ll have nothing to worry about!</p>

                <p>This is because we will take care of everything, from towing your car and speaking to your insurance company to repairing and repainting your vehicle so it will look good as new.</p></div>
            </div>
        </div>
    </div>
</section>

<section class="home-module-6">
    <div class="container">
        <div class="row flex-row">
            <div class="flex-col">
                <div class="extra-padding"><h2>Free towing assistance <span class="brand">AVAILABLE 24/7</span></h2></div>
            </div>
            <div class="flex-col">
                <a href="">
                    <button class="btn btn-primary">CALL US TODAY</button>
                </a>
            </div>
        </div>
    </div>
</section>
<div class="flex-order">
    <section class="home-module-7">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="banner">
                        <div class="flex-row">
                            <div class="flex-col">
                                <h2><span>We Offer</span><br />
                                    MILITARY DISCOUNTS</h2>
                                <a href=""><button class="btn btn-primary">LEARN MORE</button></a>
                            </div>
                            <div class="flex-col banner-middle">
                            </div>
                            <div class="flex-col badge-col">
                                <ul>
                                    <li><img src="<?=IMGURL?>badge-airforce.png" alt="" class="military-badge"></li>
                                    <li><img src="<?=IMGURL?>badge-marines.png" alt="" class="military-badge"></li>
                                    <li><img src="<?=IMGURL?>badge-navy.png" alt="" class="military-badge"></li>
                                    <li><img src="<?=IMGURL?>badge-army.png" alt="" class="military-badge"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-module-8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>What Sets Us Apart?
                    </h2>
                </div>
            </div>

            <div class="row bg">
                <div class="col-md-6">
                    <ul class="icon-row">
                        <li class="flex-col"><?php get_template_part('/template-parts/icons/icon', '1'); ?> <div class="title">Free towing service</div></li>
                        <li class="flex-col"><?php get_template_part('/template-parts/icons/icon', '2'); ?> <div class="title">Available 24/7</div></li>
                        <li class="flex-col"><?php get_template_part('/template-parts/icons/icon', '3'); ?>  <div class="title">Uses the CCC insurance estimate system which achieves more accurate estimates</div>
                        </li>
                        <li class="flex-col"><?php get_template_part('/template-parts/icons/icon', '4'); ?> <div class="title">High quality work & standards</div></li>
                        <li class="flex-col"><?php get_template_part('/template-parts/icons/icon', '5'); ?>  <div class="title">Military discounts</div></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="icon-row">
                        <li class="flex-col"><?php get_template_part('/template-parts/icons/icon', '6'); ?> <div class="title">Free full inspection</div></li>
                        <li class="flex-col"><?php get_template_part('/template-parts/icons/icon', '7'); ?> <div class="title">Works with all insurance companies</div></li>
                        <li class="flex-col"><?php get_template_part('/template-parts/icons/icon', '8'); ?> <div class="title">Works with the deductible</div></li>
                        <li class="flex-col"><?php get_template_part('/template-parts/icons/icon', '9'); ?> <div class="title">Special rates for Government Agencies</div></li>
                        <li class="flex-col"><?php get_template_part('/template-parts/icons/icon', '10'); ?> <div class="title">& Law Enforcement</div></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>


<section class="home-module-10">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h2>We’re Ready to Help - Contact Us Today</h2>

               <div class="extra-padding">
                   <p>If you’ve been in a collision, contact Elite Auto Collision Center today.</p>

                    <p>We understand how tedious the entire repair process may appear. For this reason, we’re devoted to making the process as easy and effortless so you won’t have to worry about anything! Let our team take care of everything. In no time, your vehicle will be back on the road. Contact us today to learn more about what we have to offer!</p>
               
               </div>

            </div>
        </div>
    </div>
</section>

<?php if (is_active_sidebar('form_widgets')) { //if the field is not empty
    ?>
    <section id="contact-form" class="visible-xs">
        <div class="container" id="contact-form2">
            <div class="row">
                <div class="<?= FULLWIDTH ?>">
                    <?php dynamic_sidebar('form_widgets'); ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<?php get_footer(); ?>