<?php
/**
 * Template Name: Home
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Activated_Almond_Digital
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
      <!--banner-->
      <section class="banner">
        <!--banner image-->
        <div class="image">
          <?php
						$post = 29;
						if(has_post_thumbnail($post)){
							the_post_thumbnail();
						}
					?>	
        </div>
        <!--banner heading-->
        <div class="text">
          <?php
            post_content(29);
          ?>
        </div>
      </section>
      <!--content-->
      <section class="content">
        <!--our passion heading-->
        <div class="sub-heading">
          <h3>Our passion</h3>
        </div>
        <!--our passion content-->
        <div class="our-passion">
          <?php
            post_content(57);
          ?>
        </div>
        <!--our process content-->
        <div class="process">
          <?php
            post_content(64);
          ?>
        </div>
      </section>
      <!--services content-->
      <section class="our-services">
        <!--our services heading-->
        <div class="sub-heading">
          <h3>Our Services</h3>
        </div>
       <!--our services-->
        <div class="text">
          <?php
            post_content(72);
          ?>
        </div>
      </section>
      <section class="content">
        <?php
          contactautomation();
        ?>
      </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
