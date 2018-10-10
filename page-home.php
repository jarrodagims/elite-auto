<?php get_header();

/*
    Template Name: Home
*/ ?>
<section class="home-module-1"><div class="container">
    <div class="jumbotron">
        <div class="jumbo-content">
            <h1>
                <span class="brand">Bob  O’s</span> Family Fun Center
                <span class="br-md">in El Paso</span>
            </h1>

            <h2>Non-Stop Fun for the Whole Family!</h2>

            <a href="<?= SITEURL ?>/contact-us/">
                <button class="btn btn-primary">
                    CONTACT US TODAY
                </button>
            </a>
        </div>
    </div>
</div>
</section>
    </div> <!-- end home-bg -->
<section class="home-module-2">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <?php echo non_responsive_bs_menu('secondary-menu', 'left', SITENAME); ?>
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