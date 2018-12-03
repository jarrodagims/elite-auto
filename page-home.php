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
        <?php $sm = new SocialMedia(array('facebook', 'twitter'));
        $sm->setSize('md');
        $sm->showNetworkButtons();
        $sm->setColorType('singleColor');
        ?>
    <div class="jumbotron">

        <div class="jumbo-content">
            <h1 class="expander" data-target="#expand"><strong>Auto Body Shop</strong>
                Elite Auto Collision Center is Devoted to El Paso’s Drivers
            </h1>

            <h2><a href="tel:<?php echo get_option('sherpa_telephone_number'); ?>"><?php printPhone(); ?></a></h2>

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
                    <h2><ul class="expand" id="expand">
                            <li>We’re proud to be the best auto body shop in El Paso.</li>
                            <li>Top-rated auto collision services for drivers.</li>
                            <li>We’re happy to be highly reviewed by our customers!</li>
                            <li>We are a local team that is dedicated to serving the community.</li>
                            <li>Make us your go-to auto body shop company.</li>
                            <li>Give us a call for information on quotes.</li>
                            <li>We work quickly and can provide you with time estimates so that you can plan accordingly.
                            </li>
                            <li>Our team is here for all of your car repair needs.</li>
                            <li>In need of dent repair? We’re the team to choose!</li>
                            <li>Elite Auto Collision Center is here for you when you need us most.</li>
                        </ul></h2>

                    <p class="blurb">If your car has suffered through an accident or collision, it’s time to seek repair services from our team of dedicated professionals.</p>
                    <h5>Meet The Team <span class="arrow">&gt;</span></h5>
                    <p>Elite Auto Collision Center is much more than your standard, run-of-the-mill auto body shop. Quality is our priority and we’ll stop at nothing to provide the best service possible. We work with all insurance companies so you won’t have to worry about anything! In fact, we use the same CCC system used by large insurance companies so your car’s repairs can go off without a hitch. So, if you’re ready to restore your car to its former, pre-collision glory, contact Elite Auto Collision Center!
                    </p>

                    <p>Not only do we restore damaged vehicles to pristine condition, but we also offer general mechanic and dent removal services. If your car won’t start or if you need an oil change, we can help. We also offer 24/7 emergency service and towing so you’ll never have to be stranded ever again!</p>
                </div>
            </div>
            <div class="col-md-6 flex-col bg-side">
                
            </div>
        </div>
    </div>
    <img class="visible-sm visible-xs" src="<?=IMGURL?>bg-side-sm.jpg" alt="Auto Insurance" />
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
                <div class="extra-padding"><p><strong>We Take Care of Everything, Literally!</strong></p>

                <p>The journey towards completely repairing a vehicle after a collision may seem long and arduous but when you team up with us, you’ll have nothing to worry about! This is because we will take care of everything, from towing your car and speaking to your insurance company to repairing and repainting your vehicle so it will look good as new.</p>

                 <p>Since we use the CCC system, we’ll be able to repair your vehicle with the exact parts required. We offer much more than collision repair; it’s our goal to offer high-quality service to drivers in the El Paso area. Choose Elite Auto Collision Center as your #1 auto body shop!</p></div>
            </div>
        </div>
    </div>
</section>

<section class="home-module-6">
    <div class="container">
        <div class="row flex-row">
            <div class="flex-col">
                <div class="extra-padding"><h2>Free towing assistance <span class="brand"><strong>AVAILABLE 24/7</strong></span></h2></div>
            </div>
            <div class="flex-col">
                <a href="<?=SITEURL?>/contact-us/">
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
                            <div class="flex-col hidden-sm hidden-xs">
                                <h2><span>We Offer</span><br />
                                    <strong>MILITARY DISCOUNTS</strong></h2>
                                <a href="<?=SITEURL?>/contact-us/"><button class="btn btn-primary">LEARN MORE</button></a>
                            </div>
                            <div class="flex-col banner-middle">
                                <img class="visible-sm visible-xs" src="<?=IMGURL?>bg-family-sm.jpg" alt="Military Discounts" />
                            </div>
                            <div class="flex-col badge-col">
                                <h2 class="visible-xs visible-sm"><span>We Offer</span><br />
                                    <strong>MILITARY DISCOUNTS</strong></h2>
                                <ul>
                                    <li><img src="<?=IMGURL?>badge-airforce.png" alt="" class="military-badge"></li>
                                    <li><img src="<?=IMGURL?>badge-marines.png" alt="" class="military-badge"></li>
                                    <li><img src="<?=IMGURL?>badge-navy.png" alt="" class="military-badge"></li>
                                    <li><img src="<?=IMGURL?>badge-army.png" alt="" class="military-badge"></li>
                                </ul>
                                <a class="visible-xs visible-sm" href="<?=SITEURL?>/contact-us/"><button class="btn btn-primary">LEARN MORE</button></a>
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
                    <h2>What Our Auto Body Shop Has to Offer</h2>

                    <p>Elite Auto Collision Center stands apart from the rest. We provide all-encompassing service so you won’t have to worry. Whether you got in a wreck, require mechanical assistance, or you need to get rid of a few dents, we can help! Take a look at what we have to offer:</p>
                </div>
            </div>

            <div class="row bg">
                <div class="col-md-6">
                    <ul class="icon-row">
                        <li class="flex-col"><?php get_template_part('/template-parts/icons/icon', '1'); ?> <div class="title">Free towing service</div></li>
                        <li class="flex-col"><?php get_template_part('/template-parts/icons/icon', '2'); ?> <div class="title">Available 24/7</div></li>
                        <li class="flex-col"><?php get_template_part('/template-parts/icons/icon', '3'); ?>  <div class="title">Uses the CCC insurance estimate system which achieves more accurate estimates</div>
                        </li>
                        <li class="flex-col"><?php get_template_part('/template-parts/icons/icon', '4'); ?> <div class="title">High-quality service, work, and standards</div></li>
                        <li class="flex-col"><?php get_template_part('/template-parts/icons/icon', '5'); ?>  <div class="title">Military discounts available</div></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="icon-row">
                        <li class="flex-col"><?php get_template_part('/template-parts/icons/icon', '6'); ?> <div class="title">Free full inspection</div></li>
                        <li class="flex-col"><?php get_template_part('/template-parts/icons/icon', '7'); ?> <div class="title">Works with all insurance companies</div></li>
                        <li class="flex-col"><?php get_template_part('/template-parts/icons/icon', '8'); ?> <div class="title">Works with the deductible</div></li>
                        <li class="flex-col"><?php get_template_part('/template-parts/icons/icon', '9'); ?> <div class="title">Special rates for Government Agencies & Law Enforcement</div></li>
                        <li class="flex-col"><?php get_template_part('/template-parts/icons/icon', '10'); ?> <div class="title">We use only the best Sherwin-Williams paint to finish the job</div></li>
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
                <div class="extra-padding">
                <h2>We’re Ready to Help - Contact Us Today</h2>

                   <p><strong>If you’ve been in a collision, contact Elite Auto Collision Center today.</strong></p>

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