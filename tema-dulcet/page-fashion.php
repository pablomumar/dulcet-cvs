<?php

/*
    Template Name: Join
*/

get_header(); ?>

    <div class="content-inf-link-all">
        <div class="inf-link-cabecera">
            <p>Una selezione degli influencer con cui collaboriamo</p>
        </div>

        <?php $args = array(
            'post_type' => 'post' ,
            'orderby' => 'date' ,
            'order' => 'ASC' ,
            'posts_per_page' => 20,
            'category_name'         => 'fashion', /* This take the slug name*/
            'paged' => get_query_var('paged'),
            'post_parent' => 'influencer'
        ); ?>
        <?php query_posts($args); ?>




        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>


                <div class="inf-link-cont">
                    <div class="inf-link-cont-img">


                        <a href="<?php
                        $post_id = get_the_ID();
                        $link = get_post_meta( $post_id , 'influencer_link');

                        if( $link ) {

                            echo $link[0];

                        } ?>">
                            <img src="<?php echo get_the_post_thumbnail();?>" alt="">
                        </a>
                    </div>
                    <h1><?php the_title();?></h1>
                    <?php the_content(); ?>
                </div>


            <?php endwhile; ?>
        <?php endif; ?>

    </div>

<?php get_footer(); ?>