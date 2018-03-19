<?php

/*
    Template Name: Join
*/

get_header();

?>

<div class="join-cont-all">

    <!-- Span Buttons -->
    <div class="main-span-cont">
        <div class="span-cont">
            <span class="span-button" data-target="#influencer" data-backdrop="static" data-keyboard="true" data-toggle="modal">Sei un Influencer?</span>
        </div>
        <div class="span-cont">
            <span class="span-button" data-target="#brand" data-backdrop="static" data-keyboard="true" data-toggle="modal">Sei un brand?</span>
        </div>
    </div>
    <!-- !Span Buttons -->

    <!-- Modal Influencer -->
    <div class="modal fade" id="influencer" tabindex="-1" role="dialog" aria-labelledby="influencerLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content custom-modal">

                <!-- Modal Body -->
                <div class="modal-body" style="position: relative;">
                    <?php echo do_shortcode( '[contact-form-7 id="208" title="Influencer"]', false ); ?>

                </div>
            </div>
        </div>
    </div>



    <!-- Modal Brand -->
    <div class="modal fade" id="brand" tabindex="-1" role="dialog" aria-labelledby="brandLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content custom-modal">

                <!-- Modal Body -->
                <div class="modal-body" style="position: relative;">
                    <?php echo do_shortcode( '[contact-form-7 id="207" title="Brand"]', false ); ?>

                </div>
            </div>
        </div>
    </div>

    <!-- Rest -->
    <div class="join-main-cont">
        <div class="join-cont-img">
            <img src="<?php echo get_template_directory_uri();?>/images/join-content-img.png" alt="">
        </div>
        <div class="join-text-cont">
            <div class="join-title-cont">
                <p class="join-title"> Siamo a Milano in Ripa di Porta Ticinese 7</p>
            </div>
            <p class="join-text">spinoff della digital marketing agency <a href="https://figmenta.com/">Figmenta</a>.</p>
        </div>
    </div>
    <div class="join-spacer"></div>
    <!-- !Rest -->

</div>

<?php get_footer(); ?>