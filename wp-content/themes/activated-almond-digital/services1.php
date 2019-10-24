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
        <!--shape-1-->
        <div class="shape-1">   
          <img src="/wp-content/themes/activated-almond-digital/images/shapes/shape-1.svg" alt="shape-1">
        </div>
        <!--banner image-->
        <div class="image">
          <a href="#">
            <?php
              $post = 109;
              if(has_post_thumbnail($post)){
                the_post_thumbnail();
              }
            ?>	
          </a>
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
        <!--shape-5-->
        <div class="shape-5">   
          <img src="/wp-content/themes/activated-almond-digital/images/shapes/shape-5.svg" alt="shape-5">
        </div>
        <!--shape-6-->
        <div class="shape-6">   
          <img src="/wp-content/themes/activated-almond-digital/images/shapes/shape-6.svg" alt="shape-6">
        </div>
        <?php
          contactautomation();
        ?>
      </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
