<?php
/**
 * The template for displaying the footer.
 * Contains the closing of the #content div and all content after
 */

?>

</div><!-- .site-content -->

<footer id="footer" role="contentinfo">

<?php 
  if(is_active_sidebar( 'zerif-sidebar-footer' ) || is_active_sidebar( 'zerif-sidebar-footer-2' ) || is_active_sidebar( 'zerif-sidebar-footer-3' )):
    echo '<div class="footer-widget-wrap"><div class="container">';
    if(is_active_sidebar( 'zerif-sidebar-footer' )):
      echo '<div class="footer-widget col-xs-12 col-sm-4">';
      dynamic_sidebar( 'zerif-sidebar-footer' );
      echo '</div>';
    endif;
    if(is_active_sidebar( 'zerif-sidebar-footer-2' )):
      echo '<div class="footer-widget col-xs-12 col-sm-4">';
      dynamic_sidebar( 'zerif-sidebar-footer-2' );
      echo '</div>';
    endif;
    if(is_active_sidebar( 'zerif-sidebar-footer-3' )):
      echo '<div class="footer-widget col-xs-12 col-sm-4">';
      dynamic_sidebar( 'zerif-sidebar-footer-3' );
      echo '</div>';
    endif;
    echo '</div></div>';
  endif;
?>

        <div class="container">

          <br/>
          <nav class="ij-effect-9">

            <a href="https://www.facebook.com/waggli"><span> <?php echo '<img src="'.get_template_directory_uri().'/images/facebook.png">'?></span><span> facebook </span></a>
            <a href="mailto:contact@waggli.com"><span> <?php echo '<img src="'.get_template_directory_uri().'/images/email.png">'?></span><span> contact@waggli.com </span></a>
            <a href="https://plus.google.com/+WaggliPets/posts"><span> <?php echo '<img src="'.get_template_directory_uri().'/images/googleplus.png">'?></span><span> google+ </span></a>
            <a href="tel: (619) 940-7364"><span> <?php echo '<img src="'.get_template_directory_uri().'/images/phone.png">'?></span><span> (619)9407364 </span></a>
            <a href="https://twitter.com/wagglipets"><span> <?php echo '<img src="'.get_template_directory_uri().'/images/twitter.png">'?></span><span> twitter </span></a>
            <a href="http://maps.google.com/?q=San Diego, CA 92121"><span> <?php echo '<img src="'.get_template_directory_uri().'/images/location.png">'?></span><span> map </span></a>
            <a href="https://www.instagram.com/wagglipets/"><span> <?php echo '<img src="'.get_template_directory_uri().'/images/instagram.png">'?></span><span> instagram </span></a>
            <a href="https://uk.pinterest.com/waggli/"><span> <?php echo '<img src="'.get_template_directory_uri().'/images/pinterest.png">'?></span><span> pinterest </span></a>

          </nav>
          <br/>

        </div> <!-- / END CONTAINER -->

</footer> <!-- / END FOOOTER  -->


  </div><!-- mobile-bg-fix-whole-site -->
</div><!-- .mobile-bg-fix-wrap -->


<?php wp_footer(); ?>

</body>

</html>