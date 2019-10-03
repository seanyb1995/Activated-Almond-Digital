<?php
/**
 * Template Name: Social Media Marketing
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
            post_content(200);
          ?>
        </div>
      </section>
      <!--content-->
      <section class="content">
        <!--social media heading-->
        <div class="sub-heading">
          <h3>Social Media</h3>
        </div>
        <!--social media marketing content-->
        <div class="why-be-social">
          <?php
            post_content(156);
          ?>
        </div>
      </section>
      <section class="case-studies">
        <div class="features">
          <?php
            post_content(176);
          ?>
        </div>
      </section>
      <!--contact-->
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
