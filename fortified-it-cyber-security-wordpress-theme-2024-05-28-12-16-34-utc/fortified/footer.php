<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fortified
 */
?>  
    <?php 
     $fortified_footer_type = get_theme_mod('footer_source_type');

     $view_perameter = "";
     if(!isset($_GET['view'])){
        
        if ( in_array( 'elementor/elementor.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
        
            $fortified_footer_e = get_theme_mod('choose_elementor_footer');
            echo Elementor\Plugin::instance()
            ->frontend
                ->get_builder_content_for_display($fortified_footer_e); 
        }
    }
   
    
    ?>
    
    <?php do_action('fortified_footer_style');  ?>
</div><!-- #page -->

    <?php 
wp_footer(); 
    ?>
    </body>
</html>