<?php

/*
    Template Name: PR
*/

get_header(); ?>

<div class="pr-content">
    <!-- Title -->
    <div class="pr-cabecera">
        <h1>
            <strong>
                L’online abbraccia l’offline: il mondo delle PR è
                cambiato, il nostro lavoro ne è la continua evoluzione
            </strong>
        </h1>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </div>
<!-- ! Title -->

    <!-- Content -->
    <div class="pr-images-content">

        <div class="pr-cont">
            <div class="pr-cont-img pr-news"><img src="<?php echo get_template_directory_uri();?>/images/pr-newz.png" alt="" class="pr-image"></div>
            <div class="pr-cont-text pr-news-title">
                <div class="pr-cont-title-img">
                    <p class="pr-title">Ufficio Stampa Prodotto</p>
                </div>
                <p class="pr-footer-img-text">Gestione Press closet</p>
            </div>
        </div>

        <div class="pr-cont">
            <div class="pr-cont-img pr-media"><img src="<?php echo get_template_directory_uri();?>/images/pr-mediatv.png" alt="" class="pr-image"></div>
            <div class="pr-cont-text pr-media-title">
                <div class="pr-cont-title-img">
                    <p class="pr-title">Media Relations</p>
                </div>
                <p class="pr-footer-img-text">Gestione del media coverage</p>
            </div>
        </div>


        <div class="pr-cont">
            <div class="pr-cont-img pr-hammer"><img src="<?php echo get_template_directory_uri();?>/images/pr-hammmer.png" alt="" class="pr-image"></div>
            <div class="pr-cont-text text-hammer">
                <div class="pr-cont-title-img">
                    <p class="pr-title">Creazione Materiali</p>
                </div>
                <p class="pr-footer-img-text">press kit, cartelle e comunicati stampa</p>
            </div>
        </div>

        <div class="pr-cont">
            <div class="pr-cont-img pr-look"><img src="<?php echo get_template_directory_uri();?>/images/pr-look.png" alt="" class="pr-image"></div>
            <div class="pr-cont-text text-creazione">
                <div class="pr-cont-title-img">
                    <p class="pr-title">Creazione PR Collaterals</p>
                </div>
                <p class="pr-footer-img-text">digital e printed: lookbook, inviti, save the date</p>
            </div>
        </div>
    </div>
    <!-- ! Content -->

    <!-- Footer Spacer -->
    <div class="pr-spacer-footer"> </div>

</div>

<?php get_footer(); ?>