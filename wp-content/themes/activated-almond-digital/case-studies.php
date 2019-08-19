<?php
/**
 * Template Name: Case Studies
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
            post_content(144);
          ?>
        </div>
      </section>
      <!--services-->
      <section class="case-studies">
        <div class="sub-heading">
          <h3>Our Clients</h3>
        </div>
        <?php case_studies(); ?>
      </section>
      <!--content-->
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
