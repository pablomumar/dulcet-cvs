<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @package dulcet-figmenta
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <!-- ! Fonts -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>\css\dulcet-style.css">

</head>
<body class="body-splash">

<!-- CONTENT -->
<div class="splash">

    <!-- BG-IMG -->
    <div id="bg">
        <img src="<?php echo get_template_directory_uri();?>/images/dulcet-splash-copia.png" alt="dulcet.png"/>
    </div>
    <div id="bg2"></div>
    <!-- ! BG-IMG -->

    <!-- LOGO-P-BUTTON -->
    <div class="splash-content text-center">
        <div class="splash-in-content">
            <div class="wrapper-div-p">
                <p>&nbsp;</p>

                <!-- LOGO -->
                <div class="spash-cont-logo">
                    <img src="<?php echo get_template_directory_uri();?>/images/logo.png" class="logo-splash">
                </div>
                <!-- !LOGO -->

                <!-- P -->
                <p>&nbsp;</p>
                <p>Siamo una PR crew di nuova generazione, nata nell’era del digital e della cultura pop.&nbsp;</p>
                <p>Lavoriamo per brand e prodotti del mondo Beauty,&nbsp;Fashion e Lifestyle.</p>
                <!-- ! P -->

            </div>
        </div>
    </div>
</div>

<div class="text-center button-splash-container">
    <!-- BUTTON -->

    <div class="div-button-brand">
        <div class="button-splash">
            <div>
                <a href="<?php echo get_site_url(); ?>/influencer/" >SEI UN BRAND</a>
            </div>
        </div>
    </div>

    <div class="div-button-infl">
            <div class="button-splash">
                <div>
                    <a href="<?php echo get_site_url(); ?>/public-relations/" >SEI UN INFLUENCER</a>
                </div>
            </div>
        </div>

    <!-- ! BUTTON -->
</div>
<!-- ! LOGO-P-BUTTON -->

</body>
<!-- ! CONTENT -->

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script> $.noConflict();</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</html>
