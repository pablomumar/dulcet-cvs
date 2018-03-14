<?php

/*
    Template Name: Join-heights
*/

get_header(); ?>
<body>
    <div>
        <div class="main-content">
            <p>We couldn't find the page you were looking for. This is either because:</p>
            <ul>
                <li>There is an error in the URL entered into your web browser. Please check the URL and try again.</li>
                <li>The page you are looking for has been moved or deleted.</li>
            </ul>
            <p>You can return to our homepage by <a href="<?php get_home_url(); ?>">clicking here</a>, or you can try searching for the content you are seeking by <a href="<?php echo get_site_url(); ?>/search/">clicking here.</a></p>
        </div>
    </div>
</body>

<?php get_footer(); ?>