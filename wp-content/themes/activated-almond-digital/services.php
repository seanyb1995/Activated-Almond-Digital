<?php
/**
 * Template Name: Services
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
            post_content(109);
          ?>
        </div>
      </section>
      <!--services-->
      <section class="services">
        <div class="social-media-marketing">
          <?php
            post_content(113);
          ?>
        </div>
        <div class="facebook-advertising">
          <?php
            post_content(115);
          ?>
        </div>
        <div class="content-marketing">
          <?php
            post_content(117);
          ?>
        </div>
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
