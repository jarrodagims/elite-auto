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
            <h1>
                <strong>Elite Auto Collision Center</strong><br />
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
<div class="logo-section visible-xs visible-sm">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="border-left"><span class="title">OPERATION HOURS</span>
                    <p>Sunday - Thursday: <strong>12pm – 9pm</strong><br />
                        Friday - Saturday:  <strong>10am – 11pm</strong></p>
                </div>
                <div><span class="title">BOOK YOUR EVENT</span>
                    <p><strong>PH.</strong> <?php printPhone(); ?><br />
                        3851 Constitution Dr. El Paso, TX 79922</p>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="home-module-3">
    <div class="container">
        <div class="row flex-row">
            <div class="col-md-6 flex-col">
                <div class="extra-padding">
                    <h4>If your car has suffered through an accident or collision, it’s time to seek repair services from our team of dedicated professionals.</h4>
                    Meet The Team >
                    <p>We work with all insurance companies so you won’t have to worry about anything! In fact, we use the same CCC system used by large insurance companies so your car’s repairs can go off without a hitch. So, if you’re ready to restore your car to its former, pre-collision glory, contact Elite Auto Collision Center!
                    </p>
                </div>
            </div>
            <div class="col-md-6 flex-col bg-side">

            </div>
        </div>
    </div>
</section>

<section class="home-module-9">
    <div class="container">
        <div class="row flex-row">
            <div class="flex-col col-md-6 hidden-xs hidden-sm">
            </div>
            <div class="flex-col col-md-6">
                <div class="extra-padding"><h3>School Events</h3>
                <p>Bob-O's Family Fun Center is a great place to host school events. We offer school field trips at discounted rates as well as End of the Year parties and Project Celebrations. We also offer educational materials upon request.</p>

                <h3>Military Discounts</h3>

                <p>Bob-O's Family Fun Center offers military discounts on attractions and birthday parties. Contact us today to find out more about our discounts. Remember, discounts cannot be combined!</p></div>
            </div>
        </div>
    </div>

</section>


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

    <img src="<?=IMGURL?>bg-boats-sm.jpg" alt="Pinball" class="visible-xs visible-sm" />

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