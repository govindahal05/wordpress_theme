<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Codeilo
 */

?>

	<footer id="footer">
	    <div class="container">
	        <div class="row">
	            <div class="col-sm-3 foo-list">
	                <div class="footer-logo">
	                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/foo-logo.png" class="img-responsive" alt="">
	                </div>
	                <p> &copy; 2017 CODEILO. </p>
	                <p></p>
	            </div>
	            <div class="col-sm-3 foo-list service-list">
	                <h4> services </h4>
	                <ul>
	                    <li> <a href="#" title=""> <i class="fa fa-angle-right" aria-hidden="true"></i> Web Development </a> </li>
	                    <li> <a href="#" title=""> <i class="fa fa-angle-right" aria-hidden="true"></i> web design </a> </li>
	                    <li> <a href="#" title=""> <i class="fa fa-angle-right" aria-hidden="true"></i> mobile app </a> </li>
	                    <li> <a href="#" title=""> <i class="fa fa-angle-right" aria-hidden="true"></i> digital marketing </a> </li>
	                </ul>
	            </div>
	            <div class="col-sm-3 foo-list address-list">
	                <h4> Address </h4>
	                <ul>
	                    <li>
	                        <i class="fa fa-map-marker" aria-hidden="true"></i>
	                        <address>
	                            Dhalko Chowk <br> (Near Indrayani Temple), <br> Kathmandu, Nepal
	                        </address>
	                    </li>
	                    <li> <i class="fa fa-envelope-o" aria-hidden="true"></i>  <a href="mailto: info@codeilo.com" title="">  info@codeilo.com </a> </li>
	                </ul>
	            </div>
	            <div class="col-sm-3 foo-list">
	                <h4> get in touch </h4>
	                <ul class="social_networks">
	                    <li class="facebook"> <a href="#" title="" target="_blank"> <i class="fa fa-facebook" aria-hidden="true"></i> </a> </li>
	                    <li class="twitter"> <a href="#" title="" target="_blank"> <i class="fa fa-twitter" aria-hidden="true"></i> </a> </li>
	                    <li class="linkedin"> <a href="#" title="" target="_blank"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a> </li>
	                </ul>
	            </div>
	        </div>
	    </div>
	</footer>
	<!-- /footer -->
	
</div><!-- #wrapper -->

<?php wp_footer(); ?>

</body>
</html>
