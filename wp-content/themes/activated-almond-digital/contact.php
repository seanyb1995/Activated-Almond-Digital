<?php
/**
 * Template Name: Contact
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Activated_Almond_Digital
 */

get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
      <!-- contact -->
      <section class="contact">
       <div class="contact-image">
            <?php
              $post = 411;
              if(has_post_thumbnail($post)){
                the_post_thumbnail();
              }
            ?>
        </div>
        <?php contactform_box(); ?>
        <div class="how-can-we-help">
          <div class="container">
            <span>
              <h3>Call us</h3>
              <p><?php            
                $a = get_field_object('field_5daefa1c138b5'); 
                echo $a['value'];
              ?></p>
            </span>
            <span>
              <h3>Email us</h3>
              <p><?php            
                $a = get_field_object('field_5daefa73c3ffd'); 
                echo $a['value'];
              ?></p>
            </span>
            <span>
              <h3>Vist us</h3>
              <p><?php            
                $a = get_field_object('field_5daefa7c74a07'); 
                echo $a['value'];
              ?></p>
            </span>
          </div>
        </div>
      </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
