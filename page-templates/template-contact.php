<?php 
/*
Template Name: Contact page layout
Template Post Type: page
*/
get_header();
get_template_part( 'template-parts/banners' ); 
?>
<main id="main">
    <!-- ==========section contact ============ -->
    <section class="section section_contact">
       <div class="container">
          <div class="row">
             <div class="col-sm-12">
                <h2> Get in touch with us </h2>
             </div>
             <div class="col-sm-7 form-holder">
			    <?php 
			    if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
			        wpcf7_enqueue_scripts();
			    }
			 
			    if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
			        wpcf7_enqueue_styles();
			    }

               	while ( have_posts() ) : the_post();
					the_content();
				endwhile; 
               ?>
             </div>
             <div class="col-sm-5">
                <div class="info-holder">
                   <div class="border-info">
                      <div class="border-info__icon">
                         <i class="fa fa-phone" aria-hidden="true"></i>
                      </div>
                      <div class="border-info__text">
                         <strong> give us a call </strong>
                         <?php the_field('contact_number');?>
                      </div>
                   </div>
                   <div class="border-info">
                      <div class="border-info__icon">
                         <i class="fa fa-envelope-o" aria-hidden="true"></i>
                      </div>
                      <div class="border-info__text">
                         <strong> send us email </strong>
                         <a href="mailto:<?php the_field('email_address');?>"><?php the_field('email_address');?></a>
                      </div>
                   </div>
                   <div class="border-info">
                      <ul class="social_networks">
                         <li class="facebook"> <a href="#" title="" target="_blank"> <i class="fa fa-facebook" aria-hidden="true"></i> </a> </li>
                         <li class="twitter"> <a href="#" title="" target="_blank"> <i class="fa fa-twitter" aria-hidden="true"></i> </a> </li>
                         <li class="linkedin"> <a href="#" title="" target="_blank"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a> </li>
                      </ul>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <div class="google-map" id="contact-map"></div>
    <?php get_template_part( 'template-parts/home/sections/newsletter' ); ?>
    
 </main>
 <!-- /main -->
 <?php get_footer();
    get_template_part( 'template-parts/modals/quote-modals' );
