<?php 
/*
Template Name: Team Teamplate
Template Post Type: post, page, event
*/
get_header();
get_template_part( 'template-parts/banners' ); ?>
<main id="main">
   <div class="section section-team">
      <div class="container">
         <div class="title-holder">
            <h2>The Most Awesome Team Available on the Planet</h2>
         </div>
         <div class="row team-holder">
            <?php 
               $args = array( 'post_type' => 'team', 'posts_per_page' => 10 );
               $the_query = new WP_Query( $args );
               if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
            ?>
            <div class="col-md-4 col-sm-4 col-xs-12 team-wrap">
               <div class="team">
                  <div class="team-image">
                     <a title="" data-toggle="modal" href='#modalTeam'>
                        <img src="<?php the_field('image'); ?>" class="img-responsive" alt="">
                     </a>
                  </div>
                  <div class="team-mask">
                     <div class="team-info">
                        <strong class="team-info__name"> <a title="" data-toggle="modal" href='#modalTeam'> <?php the_field('name'); ?></a> </strong>
                        <span class="team-info__title"> <a title="" data-toggle="modal" href='#modalTeam'> <?php the_field('post'); ?> </a> </span>
                     </div>
                     <div class="team-mask__social">
                        <ul class="social_networks">
                           <li class="facebook"> <a href="#" title="" target="_blank"> <i class="fa fa-facebook" aria-hidden="true"></i> </a> </li>
                           <li class="twitter"> <a href="#" title="" target="_blank"> <i class="fa fa-twitter" aria-hidden="true"></i> </a> </li>
                           <li class="linkedin"> <a href="#" title="" target="_blank"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a> </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <?php
               endwhile; wp_reset_postdata(); endif;
            ?>
         </div>
      </div>
   </div>
</main>
<?php

get_template_part( 'template-parts/home/sections/newsletter' );
get_footer();
