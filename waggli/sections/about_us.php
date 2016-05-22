<section class="about-us" id="aboutus">

    <div class="section-header">
        <?php 
            global $wp_customize;
            $zerif_aboutus_title = get_theme_mod('zerif_aboutus_title',__('About','zerif-lite'));
            if( !empty($zerif_aboutus_title) ):
                echo '<h2 class="white-text">'. wp_kses_post( $zerif_aboutus_title ) .'</h2>';
            elseif ( isset( $wp_customize ) ):  
                echo '<h2 class="white-text zerif_hidden_if_not_customizer"></h2>';
            endif;
 
            $zerif_aboutus_subtitle = get_theme_mod('zerif_aboutus_subtitle',__('Use this section to showcase important details about your business.','zerif-lite')); 
            if( !empty($zerif_aboutus_subtitle) ): 
              echo '<br><div class="dark-text section-legend">'; 
                echo wp_kses_post( $zerif_aboutus_subtitle ); 
              echo '</div>'; 
              // echo '<img src="'.get_template_directory_uri().'/images/team1.png" style="border-radius:50%;width:20px;">';
            elseif ( isset( $wp_customize ) ): 
              echo '<br><div class="dark-text section-legend zerif_hidden_if_not_customizer">'.$zerif_aboutus_subtitle.'</h6>'; 
            endif; 
        ?> 
    </div>

    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <?php echo '<img src="'.get_template_directory_uri().'/images/one.png" alt="Dog Boarder. Marina District, San Diego">'; ?>
                <div class="owner-details"><!--&quot;James treated Dilbert like he was his own and kept us informed with photos and a summary of the entire day! He came to pick him up from our house, and dropped him off when we arrived home.&quot; - Jennifer &amp; Mike, the Marina District.--></div>
            </div>
            <div class="swiper-slide">
                <?php echo '<img src="'.get_template_directory_uri().'/images/two.png" alt="Dog Boarder. Cortez Hill, San Diego">'; ?>
                <div class="owner-details"><!--&quot;My dog Belle loved going for walks with Jane and it was clear that affection worked the other way too! &quot; - Bill, Cortez Hill.--></div>
            </div>
            <div class="swiper-slide">
                <?php echo '<img src="'.get_template_directory_uri().'/images/three.png" alt="Dog Boarder. East Village, San Diego">'; ?>
                <div class="owner-details"><!--&quot;Maggie looked after Buddy for 4 days while we were in Europe. When we got home Belle almost didn't want to leave her new home! Thank you so much Maggie and Waggli for keeping her safe.&quot; - Mark, East Village.--></div>
            </div>
            <div class="swiper-slide">
                <?php echo '<img src="'.get_template_directory_uri().'/images/four.png" alt="Dog Boarder. La Mesa, San Diego">'; ?>
                <div class="owner-details"><!--&quot;Sara looked after our lovely Lucy for a couple of days when we went on vacation. We're so grateful to her for being such a great boarder. &quot; - Ron, La Mesa.--></div>
            </div>
        </div>
    </div>

</section>