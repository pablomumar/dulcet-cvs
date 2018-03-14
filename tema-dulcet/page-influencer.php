<?php

/*
    Template Name: Influencer
*/

get_header(); ?>
<div class="infl-content-all container-fluid">

    <!-- Content Title -->
    <div class="infl-cabecera">
        <h1>
            <strong>
                Collaboriamo con gli Influencer, come medium per stabilire relazioni e coinvolgere le community
            </strong>
        </h1>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </div>
    <!-- ! Content Title -->

    <!-- Content -->
    <div class="infl-cont">
        <div class="infl-left-img">
                <div class="infl-cont-image">
                    <a href="<?php echo get_home_url(); ?>/beauty/"><img src="<?php echo get_template_directory_uri();?>/images/influencer-gif.gif" alt=""></a>
                    <div class="infl-cont-text">
                        <p><strong>Beauty</strong></p>
                    </div>
                </div>
                <div class="infl-cont-image">
                    <a href="<?php echo get_home_url(); ?>/fitness/"><img src="<?php echo get_template_directory_uri();?>/images/influencer-man.jpg" alt=""></a>
                    <div class="infl-cont-text">
                        <p><strong>Wellness</strong></p>
                    </div>
                </div>
        </div>
        <div class="infl-cont-image infl-right-img">
            <a href="<?php echo get_home_url(); ?>/fashion/"><img src="<?php echo get_template_directory_uri();?>/images/influencer-fash.jpg" alt=""></a>
            <div class="infl-cont-text">
                <p><strong>Fashion</strong></p>
            </div>
        </div>
        <div class="infl-cont-image infl-right-img">
            <a href="<?php echo get_home_url(); ?>/automotive/"><img src="<?php echo get_template_directory_uri();?>/images/influencer-gif-car.gif" alt=""></a>
            <div class="infl-cont-text">
                <p><strong>Automotive</strong></p>
            </div>
        </div>
    </div>
    <!-- ! Content Title -->

</div>

<?php get_footer(); ?>