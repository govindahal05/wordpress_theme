<?php 
/*
Template Name: Full-width layout
Template Post Type: post, page, event
*/
get_header();
get_template_part( 'template-parts/home/banners' ); ?>

<main id="main">
    <?php

    // 
    get_template_part( 'template-parts/home/sections/what-we-do' );
    get_template_part( 'template-parts/home/sections/outsource-widget' );
    get_template_part( 'template-parts/home/sections/our-work' );
    get_template_part( 'template-parts/home/sections/process' );
    get_template_part( 'template-parts/home/sections/testimonial' );
    get_template_part( 'template-parts/home/sections/blog' );
    get_template_part( 'template-parts/home/sections/newsletter' );

    ?>
</main>
<?php get_footer();
