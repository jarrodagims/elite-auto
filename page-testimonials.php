<?php
	/*
		Template Name: Testimonials	
	*/
	
	get_header(); ?>
<div class="banner-top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <a class="navbar-brand" href='<?php echo get_site_url(); ?>'><img
                            src="<?= IMGURL; ?>logo.png"
                            alt="<?php echo get_bloginfo(
                                'description'
                            ); ?>"/></a>

                <?php $sm = new SocialMedia(array('facebook', 'twitter'));
                $sm->setSize('sm');
                $sm->showNetworkButtons();
                $sm->setColorType('singleColor');
                ?>
            </div>
        </div>
    </div>
</div>
<section id="main">
	<div class="container">
		<div class="row">
			<div class="<?=FULLWIDTH?>">
    			<article>
        			<h1><?=__('Testimonials')?></h1>
    				<?php get_template_part('template-parts/content', 'testimonials'); ?>
    			</article>
			</div>
		</div>
	</div>
</section>
	
<?php get_footer(); ?>
